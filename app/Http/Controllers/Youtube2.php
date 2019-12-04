<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Youtube2 extends Controller
{
    function index(Request $request) // http://localhost:8000/site2/?name="ali"
    {
        if($request->isMethod("get"))
        {
            print_r($request->input()); // Array ( [name] => "ali" )
            print_r($request->input("name")); // "ali"
        }
    }
}
