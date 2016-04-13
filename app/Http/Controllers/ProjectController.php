<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Project::all();
        return view('project.list', ['projects' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->middleware('auth');

        return view('project.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $project = new Project();
        $user = Auth::user();


        $storage = Storage::getFacadeApplication();
        $path = $storage->basePath();
        $pathToUserDir = $path . '/storage/wsdl/' . $user->id;

        if (!is_dir($pathToUserDir)) {
            mkdir($pathToUserDir);
        }

        $file = $request->file('wsdl_file');

        if (strtolower($file->extension()) != 'xml') {
            throw new \Exception("File must be with wsdl extension");
        }
        else if ($file->getSize() > 2000000) {
            throw new \Exception("File is too big");
        }

        try {
            $file->move($pathToUserDir . '/', $file->getClientOriginalName());
        }
        catch (\Exception $e) {
            $e->getMessage();
        }
        
        try {
            $project->name = $request->name;
            $project->wsdl_name = $request->wsdl_name;
            $project->wsdl_path = $pathToUserDir;
            $project->user_id = $user->id;

            $generator = new \Wsdl2PhpGenerator\Generator();
            $generator->generate(
                new \Wsdl2PhpGenerator\Config(array(
                    'inputFile' => $pathToUserDir . '/' . $project->wsdl_name,
                    'outputDir' => $pathToUserDir
                ))
            );

            $project->save();

        }
        catch (\Exception $e) {
            $e->getMessage();
        }
        
        redirect('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
