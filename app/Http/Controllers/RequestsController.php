<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/21/16
 * Time: 11:06 AM
 */
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

class RequestsController extends Controller
{
    public function index()
    {
        $requests = \App\Requests::all();
        return view('requests.index', ['requests' => $requests]);
    }
    
}