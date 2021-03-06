<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/20/16
 * Time: 3:45 PM
 */
namespace App\Http\Controllers;

use App\Project;
use App\Services\SoapService;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Zend\Soap\Server;

class SoapServerController extends Controller {

    const ATTEMPTS = 20;

    public $header;
    public $body;

    public $time;
    public $serviceName;
    public $requestCode;
    public $soapAction;

    public function index(Request $request)
    {
        $this->header = $request->header();
        $this->body = $request->getContent();

        Log::info($this->body);

        $this->time = time();
        $this->serviceName = $this->getSoapService($this->body);
        $this->requestCode = $this->getRequestCode($this->body, $this->serviceName);
        $this->soapAction = $this->getSoapAction($this->header);

        if (strtolower($this->soapAction) == 'getrequeststatus') {
            $this->handleForResponse();
            exit();
        }

        $server = new Server(null, [
            'uri' => 'http://wsdl-client.loc/soap'
        ]);


        $service = new SoapService();
        $server->setClass($service);
//        $server->handle($body);
        $server->setReturnResponse(true);

        $service->setRequestCode($this->requestCode);

        $response = $server->handle($this->body);
        
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
        $soapRequest->body = $this->body;
        $soapRequest->soap_action = $this->soapAction;
        $soapRequest->time = $this->time;
        $soapRequest->service = $this->serviceName;
        $soapRequest->request_code = $this->requestCode;
        $soapRequest->save();
        exit();
    }

    public function handleForResponse() {
        $counter = 0;
        while (true) {
            $responseModel = \App\Responses::where('request_code', (int) $this->requestCode)->first();
            if ($responseModel || $counter < self::ATTEMPTS) {
                break;
            }
            $counter++;
            sleep(5);
        }

        $projectModel = Project::where('id', (int) $responseModel->project_id)->first();


        $storage = Storage::getFacadeApplication();
        $path = $storage->basePath();
        $pathToUserDir = $path . '/storage/wsdl/' . $projectModel->user_id;
        $pathToProject = $projectModel->dir_name;
        include $pathToUserDir . '/' .$pathToProject . '/autoload.php';



        $server = new Server($projectModel->wsdl_address, [
            'uri' => 'http://wsdl-client.loc/soap'
        ]);

//        $reflector = new \ReflectionClass($responseModel->response_object);
//        $reflectorObject = $reflector->newInstanceWithoutConstructor();

        $reflector = new \ReflectionClass('RequestStatusResponse');
        $reflectorObject = $reflector->newInstanceWithoutConstructor();


        $args = $this->getArgsFromEntity($responseModel->response_value);
        $reflectorProp = new \ReflectionClass($responseModel->response_object);
        $reflectorPropObject = $reflectorProp->newInstanceArgs($args);

        $reflectorPropState = new \ReflectionClass('StatusResponseState');
        $reflectorPropObjectState = $reflectorPropState->newInstanceWithoutConstructor();

        $reflectorPropStateGetResponse = new \ReflectionClass('getRequestStatusResponseObject');
        $reflectorPropObjectStateGetResponse = $reflectorPropStateGetResponse->newInstanceWithoutConstructor();


        $method = "set" . ucfirst(strtolower(preg_replace('/\B([A-Z])/', '_$1', $responseModel->response_object)));

        $reflectorObject->$method($reflectorPropObject);

        $service = new SoapService();
        $server->setClass($service);
//        $server->handle($body);
//        $server->setReturnResponse(true);

        
        
        $service->setRequestCode($this->requestCode);
        $service->setResponseObject($reflectorObject);
        $service->setResponsePropertyObject($reflectorPropObject);
        $service->setResponsePropertyObjectState($reflectorPropObjectState);
        $service->setMainResponseClass($reflectorPropObjectStateGetResponse);

//        $server->handle();
//        $response = $server->handle($this->body);
        $response = $server->handle();
//        $server->handle($this->body);
//
        Log::info($response);
        echo $response;
//
        exit();
    }

    private function getSoapAction($header)
    {
        if (!is_array($header) || empty($header['soapaction'])) {
            return '';
        }
        $action = explode('/', $header['soapaction'][0])[1];
        return str_replace('"', '', $action);
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


    private function getArgsFromEntity($body)
    {
        $entityAsArray = json_decode($body, true);
        $result = [];

        $i = 0;
        foreach ($entityAsArray as $key => $item) {
            if (!is_array($item) && $item !== '' && $key != 'class_name') {
                $result[] = $item;
            }
            else if ($item === '') {
                $arrayProp = array_shift($entityAsArray['subEntities']);
                if (count($arrayProp) == 0) {continue;}
                $props = [];
                foreach ($arrayProp as $itemOfProp) {
                    $reflector = new \ReflectionClass($itemOfProp['class_name']);
                    $args = [];
                    foreach ($itemOfProp['properties'] as $property) {
                        $args[] = $property['val'];
                    }
                    $props[] = $reflector->newInstanceArgs($args);
                }
                $result[] = $props;

               $i++;
            }
        }



        return $result;
    }
}