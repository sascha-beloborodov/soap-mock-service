<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');


Route::get('wsdl/{path}/{project_dir}/{filename}', function ($dir, $projectDir, $filename)
{
    $path = storage_path() . '/wsdl/' . $dir . '/' . $projectDir . '/' . $filename;

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});


//Route::post('projects', 'ItemController@store')->name('items');
//Route::get('projects/{id}/edit', 'ItemController@edit')->name('items');

//Route::post('projects', 'ItemController@store')->name('items');
Route::get('projects', 'ProjectController@index')->name('projects');
Route::get('projects/{id}/edit', 'ProjectController@edit')->name('projects');
Route::get('projects/create', 'ProjectController@create')->name('projects');
Route::post('projects/store', 'ProjectController@store')->name('projects');

Route::get('projects/{id}/wsdl', 'WsdlController@index');

Route::post('wsdl/getresponse', 'WsdlAjaxController@getSoapResponse');

Route::post('soap', 'SoapServerController@index');

Route::get('requests', 'RequestsController@index');





Route::get('requests/get_projects', 'RequestsController@getProjects');

Route::post('requests/bind_to_project', 'RequestsController@bindToProject');
Route::post('requests/add_response', 'RequestsController@addResponse');

Route::get('responses/get_entity', 'ResponsesController@getEntity');
Route::get('responses/get_main_entity', 'ResponsesController@getMainEntity');
Route::post('requests/add_response', 'RequestsController@addResponse');



Route::get('requests/{id}/edit', 'RequestsController@edit');
Route::post('requests/{id}/edit', 'RequestsController@update');


Route::get('items', 'ItemController@index')->name('items');
Route::delete('items/{id}', 'ItemController@destroy')->name('items');
Route::post('items', 'ItemController@store')->name('items');
Route::get('items/{id}/edit', 'ItemController@edit')->name('items');
Route::put('items/{id}', 'ItemController@update')->name('items');



// Templates
Route::group(array('prefix'=>'/templates/'),function(){
    Route::get('{template}', array( function($template)
    {
        $template = str_replace(".html","",$template);
        View::addExtension('html','php');
        return View::make('templates.'.$template);
    }));
});
