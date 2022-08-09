<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function homepage($name) {
    
        return view('home',compact('name'));
    }
}
