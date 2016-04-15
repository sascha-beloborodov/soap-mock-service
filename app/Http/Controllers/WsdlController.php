<?php

namespace App\Http\Controllers;

use App\Project;
use Faker\Provider\Base;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use JMS\Serializer\SerializerBuilder;
use Zend\Soap\Client;

class WsdlController extends Controller
{

    protected $capital = null;
    protected $entities = null;
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index($id, Request $request)
    {
        $user = Auth::user();
        $project = Project::where('id', (int) $id)->first();

        if ($user->id != $project->user_id) {
            return redirect('/home');
        }

        $wsdlUrl = 'http://wsdl-client.loc/wsdl' . '/' .$user->id . '/' . $project->wsdl_name;
        $soap = new \SoapClient($wsdlUrl);
        $actions = $soap->__getFunctions();
        $types = $soap->__getTypes();


        $storage = Storage::getFacadeApplication();
        $path = $storage->basePath();
        $pathToUserDir = $path . '/storage/wsdl/' . $user->id;
        include $pathToUserDir . '/autoload.php';
        
        $this->setCapital();

        $serializer = SerializerBuilder::create()->build();

        $object = null;
        foreach ($actions as $action) {
            $req = explode(' ', $action, 2);
            $entity = $this->getFormatEntity($req);
            $structs = $this->getFormatStructs($types);

            foreach ($structs as $struct) {
                if ($struct['class'] == $entity) {
                    $params = $this->generateParams($struct['properties'], $entity);
                    $reflectionInstance = new \ReflectionClass($entity);
                    $object = $reflectionInstance->newInstanceArgs($params);
                    break;
                }
            }

            $subData = [
                'response' => $req[0],
                'request' => $req[1],
                'request_operation' => $this->getRequestOperation($req[1]),
                'similar_entity' => $entity,
                'entity_instance' => is_null($object) ? null : $serializer->serialize($object, 'json'),
            ];

            $object = null;
            $data[] = $subData;
        }

        return view('project.wsdl_list')
            ->with('data', $data)
            ->with('project_id', $request->segment(2));
    }
    
    public function setCapital()
    {
        $i = 'A';
        $this->capital = [];
        for (;$i <= 'Z'; $i++) {
            if (strlen($i) > 1) break;
            $this->capital[] = $i;
        }
    }

    public function getFormatStructs(array $structs)
    {
        $result = [];
        $class = null;
        $properties = null;
        $string = null;
        foreach ($structs as $struct) {
            $string = str_replace('struct ', '', trim($struct));
            $places = explode('{', $string);
            if (count($places) < 2) {
                continue;
            }
            $class = trim($places[0]);
            $properties = str_replace('}', '', $places[1]);
            $properties = explode(';', trim($properties));
            foreach ($properties as $key => &$property) {
                $property = trim($property);
                if ($property == "") {
                    unset($properties[$key]);
                }
            }
            $result[] = [
                'class' => $class,
                'properties' => $properties,
            ];
        }
        return $result;
    }

    public function getFormatEntity($req) 
    {
        $newRes = $req[0];
        if (substr($newRes, 0, 3) == 'get') {
            $newRes = substr($req[0], 3);
        }
        $newRes = substr($newRes, 0, strlen($newRes) - 8);
        if ($newRes[strlen($newRes) - 1] == 's') {
            $newRes = substr($newRes, 0, strlen($newRes) - 1);
        }
        $prevChar = null;
        for ($i = 0; $i < strlen($newRes); $i++) {
            if ($prevChar == 's' && in_array($newRes[$i], $this->capital)) {
                $newRes = substr_replace($newRes, '', $i - 1, 1);
            }
            $prevChar = $newRes[$i];
        }
        return $newRes;
    }
    
    
    public function generateParams($properties, $class)
    {
        $result = [];
        $primitiveTypes = [
            'float', 'string', 'int', 'integer', 'bool', 'boolean', 'double', 'decimal'
        ];
        foreach ($properties as $property) {
            $arrProperty = explode(' ', $property);
            $type = $arrProperty[0];
            $val = $arrProperty[1];
            if (in_array($type, $primitiveTypes)) {
                if (strtolower($type) == 'decimal' ||
                    strtolower($type) == 'float' ||
                    strtolower($type) == 'double') {
                    $result[] = Base::randomFloat();
                }
                else if (strtolower($type) == 'int' ||
                    strtolower($type) == 'integer') {
                    $result[] = Base::randomDigitNotNull();
                }
                else {
                    $result[] = Lorem::word();
                }
            }
            else {
                $reflectionClass = new \ReflectionClass($class);
                $result[] = $reflectionClass->newInstanceWithoutConstructor();
            }
        }
        return $result;
    }

    public function getRequestOperation($request)
    {
        return explode('(', $request)[0];
    }
}
