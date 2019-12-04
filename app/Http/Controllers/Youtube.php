<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Youtube extends Controller
{
    //public function index($site)
    public function index($name)
    {
        //return ["site"=>$site]; // JSON olarak gönderiyo ( {"site":"Youtube"} ) cevap olarak
        $site="$name";
        return view("youtube",['data'=>$site]);
    }
}
