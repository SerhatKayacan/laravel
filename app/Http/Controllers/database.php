<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class database extends Controller
{
    public function index()
    {
        $result=DB::select('select * from users');
        print_r($result);
    }
}
