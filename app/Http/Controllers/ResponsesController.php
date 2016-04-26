<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/21/16
 * Time: 11:06 AM
 */
namespace App\Http\Controllers;

use App\Helpers\StringHelper;
use App\Project;
use App\Responses;
use Faker\Provider\Base;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use JMS\Serializer\SerializerBuilder;
use Zend\Soap\Client;

class ResponsesController extends Controller
{
    
    

    public function getEntity(Request $request) {
        $input = $request->all();
        $user = Auth::user();
        $project = Project::where('id', (int) $input['project_id'])->first();

        if ($user->id != $project->user_id) {
            return redirect('/home');
        }

        $storage = Storage::getFacadeApplication();
        $path = $storage->basePath();
        $pathToUserDir = $path . '/storage/wsdl/' . $user->id;
        $pathToProject = $project->dir_name;
        include $pathToUserDir . '/' .$pathToProject . '/autoload.php';

        $object = [];
        $className = str_replace('ArrayOf', '', $input['entity']);
        $refl = new \ReflectionClass($className);
        $obj = $refl->newInstanceWithoutConstructor();
        $object['class_name'] = $className;
        $object['entity'] = $obj;

        $j = 0;
        foreach ($refl->getProperties() as $refProperty) {
            if (preg_match('/@var\s+([^\s]+)/', $refProperty->getDocComment(), $matches)) {
                list(, $type) = $matches;

            }
            $object['properties'][$j]['name'] = $refProperty->getName();
            $object['properties'][$j]['type'] = !empty($type) ? $type : '';
            $object['properties'][$j]['val'] = '';
            $j++;
        }

        return response($object);
    }
    
    
    public function getMainEntity(Request $request) 
    {
        $input = $request->all();
        $user = Auth::user();
        $project = Project::where('id', (int) $input['project_id'])->first();

        if ($user->id != $project->user_id) {
            return redirect('/home');
        }

        $storage = Storage::getFacadeApplication();
        $path = $storage->basePath();
        $pathToUserDir = $path . '/storage/wsdl/' . $user->id;
        $pathToProject = $project->dir_name;
        include $pathToUserDir . '/' .$pathToProject . '/autoload.php';

        $object = [];
        $className = $input['entity'];
        $refl = new \ReflectionClass($className);
        $obj = $refl->newInstanceWithoutConstructor();
        $object['class_name'] = $className;
        $object['entity'] = $obj;

        $j = 0;
        foreach ($refl->getProperties() as $refProperty) {
            if (preg_match('/@var\s+([^\s]+)/', $refProperty->getDocComment(), $matches)) {
                list(, $type) = $matches;

            }
            $object['properties'][$j]['name'] = $refProperty->getName();
            $object['properties'][$j]['type'] = !empty($type) ? $type : '';
            $object['properties'][$j]['val'] = '';
            $j++;
        }

        return response($object);
    }
}