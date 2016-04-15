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


Route::get('wsdl/{path}/{filename}', function ($dir, $filename)
{
    $path = storage_path() . '/wsdl/' . $dir . '/' . $filename;

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

