<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Youtube3 extends Controller
{
    function index(Request $request)
    {
        $request->validate([
            "user"=>"required",
            "password"=>"min:5"
        ]);
            $data=$request->input('user');
            $request->session()->put('userData',$data);    // session'a kaydet
            print_r($request->session()->get('userData'));
    }
}
