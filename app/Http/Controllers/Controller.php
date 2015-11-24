<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    function cleanRequest($request)
    {
        unset($request['_method']);
        unset($request['_token']);
        unset($request['action']);
        $request['url'] =  str_slug($request['name']);
        return $request;
    }
}
