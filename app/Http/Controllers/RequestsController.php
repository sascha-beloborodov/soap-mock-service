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

class RequestsController extends Controller
{

    private $projectId;

    /**
     * @return mixed
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * @param mixed $projectId
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }



    public function index()
    {
//        $requests = \App\Requests::all();
//        return view('requests.index', ['requests' => $requests]);

        $requests = \App\Requests::paginate(5);
        return response($requests);
    }
    
    public function edit($id) {
        $request = \App\Requests::where('id', (int) $id)->first();

        $projects = Project::all();

        $types = null;
        $similarEntities = null;
        $entities = null;
        if ($request->project_id) {
            $this->setProjectId($request->project_id);
            $types = $this->getEntitiesList($request->project_id);
            $similarEntities = $this->getSimilarEntities($types, $request->soap_action);
            $entities = $this->getEntities($similarEntities);
        }

        return response([
            'request' => $request,
            'projects' => $projects,
            'types' => $types ? $types : [],
            'most_probably_types' => $similarEntities ? $similarEntities : [],
            'entities' => $entities ? $entities : [],
        ]);
        return view('requests.edit', [
            'request' => $request, 
            'projects' => $projects,
            'types' => $types
        ]);

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $project = Project::where('id', (int) $request->project_id)->first();

        if ($user->id != $project->user_id) {
            return redirect('/home');
        }

        $wsdlUrl = 'http://wsdl-client.loc/wsdl' . '/' .
            $user->id . '/' . $project->dir_name . '/' . $project->wsdl_name;
        $soap = new \SoapClient($wsdlUrl);
        $actions = $soap->__getFunctions();
        $types = $soap->__getTypes();
//        return $this->getFormatStructs($types);

        $storage = Storage::getFacadeApplication();
        $path = $storage->basePath();
        $pathToUserDir = $path . '/storage/wsdl/' . $user->id;
        $pathToProject = $project->dir_name;
        include $pathToUserDir . '/' .$pathToProject . '/autoload.php';




        //
        $requestModel = \App\Requests::where('id', (int) $id)->first();
        $requestModel->project_id = $request->project_id;
        $requestModel->save();

        $responseModel = new Responses();
        $responseModel->response_object = $request->entity;
        $responseModel->project_id = $request->project_id;
        $responseModel->request_code = $requestModel->request_code;
        $responseModel->save();

        $objectRefl = new \ReflectionClass($request->entity);
        $obj = $objectRefl->newInstanceWithoutConstructor();
        return redirect("requests/$id/edit");
    }

    public function getEntitiesList($id) {
        $user = Auth::user();
        $project = Project::where('id', (int) $id)->first();

        if ($user->id != $project->user_id) {
            return redirect('/home');
        }

        $wsdlUrl = 'http://wsdl-client.loc/wsdl' . '/' .
            $user->id . '/' . $project->dir_name . '/' . $project->wsdl_name;
        $soap = new \SoapClient($wsdlUrl);
        $actions = $soap->__getFunctions();
        $types = $soap->__getTypes();
        return $this->getFormatStructs($types);

        $storage = Storage::getFacadeApplication();
        $path = $storage->basePath();
        $pathToUserDir = $path . '/storage/wsdl/' . $user->id;
        $pathToProject = $project->dir_name;
        include $pathToUserDir . '/' .$pathToProject . '/autoload.php';

        return [];
    }


    private function getFormatStructs(array $structs)
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
//            $result[] = [
//                'class' => $class,
//                'properties' => $properties,
//            ];
            $result[] = $class;
        }
        return $result;
    }
    
    public function getSimilarEntities(array $types, $action)
    {
        $capitalizeLetters = (new StringHelper())->setCapitalizeLetters()->getCapitalizeLetters();
        $sortedResult = [];
        $words = [];
        $start = 0;
        $len = 0;

        for ($i = 0; $i < strlen($action); $i++) {
            if (in_array($action[$i], $capitalizeLetters)) {
                array_push($words, strtolower(substr($action, $start, $len)));
                $start = $i;
                $len = 0;
            }
            $len++;
        }
        array_push($words, strtolower(substr($action, $start, $len)));

        if (count($words) == 0) return [];

        for ($i = 0; $i < count($words) + 1; $i++) {
            $sortedResult[] = [];
        }

        $countCompagnies = 0;
        foreach ($types as $type) {
            foreach ($words as $word) {
                if (strpos(strtolower($type), $word) !== false) {
                    $countCompagnies++;
                }
            }

            $sortedResult[$countCompagnies][] = $type;
            $countCompagnies = 0;
        }


        return count($sortedResult) < 2 ?
            $sortedResult[count($sortedResult)] :
            array_merge($sortedResult[count($sortedResult)-1],$sortedResult[count($sortedResult)-2]);
    }

    public function getEntities(array $entitiesArray) {
        $user = Auth::user();
        $project = Project::where('id', (int) $this->getProjectId())->first();

        if ($user->id != $project->user_id) {
            return redirect('/home');
        }

        $storage = Storage::getFacadeApplication();
        $path = $storage->basePath();
        $pathToUserDir = $path . '/storage/wsdl/' . $user->id;
        $pathToProject = $project->dir_name;
        include $pathToUserDir . '/' .$pathToProject . '/autoload.php';

        $arrayOfObjects = [];
        $i = 0;
        foreach ($entitiesArray as $item) {
            $refl = new \ReflectionClass($item);
            $obj = $refl->newInstanceWithoutConstructor();

            $arrayOfObjects[$i]['class_name'] = $item;
            $arrayOfObjects[$i]['entity'] = $obj;

            $j = 0;
            foreach ($refl->getProperties() as $refProperty) {
                if (preg_match('/@var\s+([^\s]+)/', $refProperty->getDocComment(), $matches)) {
                    list(, $type) = $matches;

                }
                $arrayOfObjects[$i]['properties'][$j]['name'] = $refProperty->getName();
                $arrayOfObjects[$i]['properties'][$j]['type'] = !empty($type) ? $type : '';
                $j++;
            }

            $i++;
        }
        return $arrayOfObjects;
    }


    public function getProjects()
    {
        return response(Project::all());
    }

    public function bindToProject(Request $request)
    {
        $input = $request->all();
        try {
            $request = \App\Requests::where('id', (int) $input['request_id'])->first();
            $request->project_id = $input['project_id'];
            $request->save();
            return response(['success' => '1']);
        }
        catch (\Exception $e) {
            return response(['success' => '0']);
        }
        
        $x = 0;
    }
    
    public function addResponse(Request $request)
    {

        $input = $request->all();

        $id = $input['id'];
        $requestModel = \App\Requests::where('id', (int) $id)->first();

        $responseModel = new Responses();
        $responseModel->response_object = $input['class_name'];
        $responseModel->project_id = $requestModel->project_id;
        $responseModel->response_value = json_encode($input['properties']);
        $responseModel->request_code = $requestModel->request_code;
        $responseModel->save();
        return response(['success' => '1']);
    }

}