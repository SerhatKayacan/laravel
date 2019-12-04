<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware'=>['web']],function(){  // grup middleware uygula
    Route::get('/', function () { // get request by user                                        // ok
        return view('login'); // login.blade.php göster                                           //ok              
    })->middleware("age");;//middleware uygula

    Route::get('/user', function () {                                                           //ok
        return view('user');                                                                      //ok
    });

    //Route::get("/site/{site}","Youtube@index"); // parametre olarak gönder                    //ok
    Route::get("/site/{name}","Youtube@index");                                                 //ok
    Route::get("/site2","Youtube2@index");                                                      //ok
    Route::post("/login","Youtube3@index");//for controller or after submit page                //ok
    Route::get("/db","database@index");
    Route::resource('students','StudentController');
});