<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//-------- helloworld
Route::get('/', function () {
    return view('welcome');
});

//-------- funny test

Route::get('/dodo', function () {
    return view('welcomeDodo');
});

Route::get('/dodostr', function () {
    return "string";
});

//-------- 参数理解

Route::get('/dodo/{id}', function ($id) {
    return 'User ' . $id;
});

Route::get('/dodo/view', function () {
    return view('welcomeDodo');
});


//-------- 参数 默认 ，限制

Route::get('/dodoc0/{id?}', function ($id = null) {
    return 'User ' . $id;
});

Route::get('/dodoc/{name?}', function ($name = 'dodo') {
    return 'User ' . $name;
});

Route::get('/dodoc2/{name}', function ($name) {
    return 'User ' . $name;
})
    ->where('name', '[A-Za-z]+');

Route::get('/dodoc3/{id}/{name}', function ($id, $name) {
    return 'id : ' . $id . ' , User : ' . $name;
})
    ->where(['id' => '[0-9]+', 'name' => '[a-z]+']);


//-------- View , or view pass data
Route::get('/dodov/{name?}', function ($name = 'dodo') {
    return view('dodo.index');
});

Route::get('/dodovw/{name?}', function ($name = 'dodo') {
    return view('dodo.with_data')->with("name", $name);
});

Route::get('/dodovwn/{name?}', function ($name = 'dodo') {
    return view('dodo.with_data')->withName($name);
});

Route::get('/dodova/{name?}/{age?}', function ($name = 'dodo', $age=19) {
    $data = array(
        'name' => $name ,
        'age' => $age
    );
    return view('dodo.array_data', $data);
});

