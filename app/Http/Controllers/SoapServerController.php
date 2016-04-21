<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/20/16
 * Time: 3:45 PM
 */
namespace App\Http\Controllers;

use App\Services\SoapService;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Log;
use Zend\Soap\Server;

class SoapServerController extends Controller {

    public function index(Request $request)
    {
        $header = $request->header();
        $body = $request->getContent();

        Log::info($body);

        $time = time();
        $serviceName = $this->getSoapService($body);
        $requestCode = $this->getRequestCode($body, $serviceName);

        $server = new Server(null, [
            'uri' => 'http://wsdl-client.loc/soap'
        ]);


        $service = new SoapService();
        $server->setClass($service);
//        $server->handle($body);
        $server->setReturnResponse(true);

        $service->setRequestCode($requestCode);

        $response = $server->handle($body);
        
        Log::info($response);
        
        echo $response;
//        exit();
        
//        $domDocument = new \DOMDocument('1.0');
//        $domDocument->load($body);
//        $xpathDocument = new \DOMXPath($domDocument);
//        $result = $xpathDocument->query();
//        $xml = simplexml_load_string($body);
//        $root = $xml->xpath("/x:Envelope");
//        var_dump($root);
//
        $soapRequest = new \App\Requests();
        $soapRequest->body = $body;
        $soapRequest->soap_action = $this->getSoapAction($header);
        $soapRequest->time = $time;
        $soapRequest->service = $serviceName;
        $soapRequest->request_code = $requestCode;
        $soapRequest->save();
        exit();
    }

    private function getSoapAction($header)
    {
        if (!is_array($header) || empty($header['soapaction'])) {
            return '';
        }
        return explode('/', $header['soapaction'][0])[1];
    }

    private function getSoapService($soapBody)
    {
        $matches = [];
        preg_match_all(
            '/(\S+)=["\']?((?:.(?!["\']?\s+(?:\S+)=|[>"\']))+.)["\']?/',
            $soapBody, $matches);
        foreach ($matches[0] as $match) {
            if (str_contains($match, 'xmlns:urn') || str_contains($match, 'xmlns:ns1')) {
                return str_replace('"', '', explode('=', $match)[1]);
            }
        }
        return '';
    }
    
    private function getRequestCode($body, $nameSpace)
    {
        $domDoc = new \DOMDocument('1.0');
        $domDoc->loadXML($body);
        $el = $domDoc->getElementsByTagNameNS($nameSpace, '*');
        foreach ($el as $item) {
            if (strpos($item->nodeName, 'request_code') !== false) {
                return $item->nodeValue;
            }
        }
        return '';
    }
}