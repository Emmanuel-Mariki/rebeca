<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class WhatWeDoController extends Controller
{
    //
    
    function GetIndex()
    {
        return view('whatWeDo');
    }
}
