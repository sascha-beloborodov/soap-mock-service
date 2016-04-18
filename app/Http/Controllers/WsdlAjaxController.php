<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/14/16
 * Time: 6:05 PM
 */

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use JMS\Serializer\SerializerBuilder;
use Zend\Soap\Client;

class WsdlAjaxController extends Controller {
    
    public function getSoapResponse (Request $request)
    {
        $projectId = $request->project_id;
        $user = Auth::user();
        $project = Project::where('id', (int) $projectId)->first();
        $wsdlUrl = 'http://wsdl-client.loc/wsdl' .
            '/' . $user->id .
            '/' . $project->dir_name .
            '/' . $project->wsdl_name;

        $storage = Storage::getFacadeApplication();
        $path = $storage->basePath();
        $pathToUserDir = $path . '/storage/wsdl/' . $user->id;
        $pathToProject = $project->dir_name;
        include $pathToUserDir . '/' . $pathToProject . '/autoload.php';

        $properties = (object) $request->properties;
        $params = null;
        if ($this->hasProperties($properties)) {
            $params = $this->createPropertiesFromObject($properties);
        }
        else {
            $params = $this->createPropertiesFromArray($request->properties);
        }


        try {
            $reflection = new \ReflectionClass($request->entityName);
            $instance = $reflection->newInstanceArgs($params);
        }
        catch (\Exception $e) {
            return response()->json(
                ['error' => [
                        'message' => $e->getMessage()
                    ]
                ]
            );
        }



        $serverUrl = "http://wsdl.loc/";
        $serializer = SerializerBuilder::create()->build();
        $serializedEntity = $serializer->serialize($instance, 'json');

        $soapClient = new Client($wsdlUrl, [
            'location' => "$serverUrl?wsdl_url=$wsdlUrl&".
                "entity_name={$request->entityName}&".
                "instance=$serializedEntity&".
                "user_id={$user->id}&".
                "wsdl_name={$project->wsdl_name}&".
                "dir_name={$project->dir_name}&".
                "XDEBUG_SESSION_START=19650",

            'uri' => "$serverUrl?wsdl_url=$wsdlUrl&".
                "XDEBUG_SESSION_START=19650"
        ]);

        $soapMethod = $request->soapMethod;
        $marker = time();
        $soapParams = [
            'wsdl_url' => $wsdlUrl,
            'entity_name' => $request->entityName,
            'instance' => $serializedEntity,
            'marker' => $marker,
            'method' => $soapMethod
        ];

//        $serialezedParams = $serializer->serialize($soapParams, 'json');

//        $soapHeaders = [];
//        foreach ($soapParams as $key => $soapParam) {
//            $soapHeaders[] = new \SoapHeader($serverUrl, $key, $soapParam);
//        }
//        $soapClient->__setSoapHeaders($soapHeaders);

        $soapClient->$soapMethod($soapParams);

        echo $soapClient->getLastResponse();
    }

    protected function createPropertiesFromArray($properties)
    {
        $result = [];
        foreach ($properties as $property) {
            $result[] = $property['value'];
        }
        return $result;
    }

    protected function createPropertiesFromObject($properties)
    {
        return (array) $properties;
    }

    protected function hasProperties($object)
    {
        $i = 0;
        foreach ($object as $item) {
            if (is_array($item)) return false;
            $i++;
        }
        return (bool) $i;
    }
}