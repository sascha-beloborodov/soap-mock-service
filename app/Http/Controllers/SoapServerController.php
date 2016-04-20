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
use Zend\Soap\Server;

class SoapServerController extends Controller {

    public function index(Request $request)
    {
        $header = $request->header();
        $body = $request->getContent();
        $time = time();
        $server = new Server(null, [
            'uri' => 'http://wsdl-client.loc/soap'
        ]);
        $server->setClass(new SoapService());
        $server->handle($body);

        $nodes = [];
        foreach ($server as $node) {
            $nodes[] = $node;
            var_dump($node->attributes);
        }
        $d = 0;
    }
}