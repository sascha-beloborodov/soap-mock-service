<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/14/16
 * Time: 6:05 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class WsdlAjaxController extends Controller {
    
    public function getSoapResponse (Request $request)
    {
        $id = 0;
        $user = Auth::user();
        $project = Project::where('id', (int) $id)->first();
    }
}