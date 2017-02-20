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

//-------- 写一个简单的分类
Route::get("/","HelloController@doLead");   //简单页面值传递     Route::get("/dodoct","HelloController@helloIndex");




//-------- helloworld
Route::get('/welcome', function () {
    return view('welcome');
});


//-------- funny test
Route::get('/dodo', function () {
    return view('welcomeDodo');
});

//-------- 简单返回字符串
Route::get('/dodostr', function () {
    return "string";
});

//-------- 参数理解

Route::get('/dodo/{id}', function ($id) {
    return 'User ' . $id;
});

//Route::get('/dodo/view', function () {
//    return view('welcomeDodo');
//});


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
    return view('hello.dodo.index');
});

Route::get('/dodovw/{name?}', function ($name = 'dodo') {
    return view('hello.dodo.with_data')->with("name", $name);
});

Route::get('/dodovwn/{name?}', function ($name = 'dodo') {
    return view('hello.dodo.with_data')->withName($name);
});

Route::get('/dodova/{name?}/{age?}', function ($name = 'dodo', $age=19) {
    $data = array(
        'name' => $name ,
        'age' => $age
    );
    return view('hello.dodo.array_data', $data);
});


//-------- 子视图放置在 视图上，  向子视图传递数据
Route::get('/dodovn', function () {
    $data = array(
        'name' => "dodo" ,
        'age' => "55"
    );
    return view('hello.dodo.array_data_nest', $data)->nest("dodo_nest", "hello.dodo.block.dodo_nest");
});

Route::get('/dodovn2', function () {
    $data = array(
        'name' => "dodo" ,
        'age' => "55"
    );
    $data_nest = array(
        'name' => "笨蛋"
    );
    return view('hello.dodo.array_data_nest', $data)->nest("dodo_nest", "hello.dodo.block.dodo_nest_array", $data_nest );
});

Route::get("/dodoct","HelloController@helloIndex");



//-------- db ，数据库相关
Route::get("/db","DB1Controller@helloIndex");   //简单页面值传递

Route::get("/dba","DB1Controller@dbArray");     //数据库array，页面值传递

Route::get("/dbo","DB1Controller@dbObject");    //数据库object， 页面值传递

Route::get("/dbo1","DB1Controller@dbObject1");  //数据库object，带参数， 页面值传递

Route::get("/dbo0i","DB1Controller@dbObject0i");//数据库object  insert

Route::get("/dbo0u","DB1Controller@dbObject0u");//数据库object  update

Route::get("/dbo0d","DB1Controller@dbObject0d");//数据库object  delete

Route::get("/dbo0tra","DB1Controller@dbTransaction");//数据库object  transaction 事务


//-------- db ，数据库相关， 查询构建器
Route::get("/dbc1","DB2Controller@dbCon1");//查询第一条

Route::get("/dbc2","DB2Controller@dbCon2");//查询对应的行

Route::get("/dbc3","DB2Controller@dbCon3");//查询对应的行, list，多值

Route::get("/dbc4","DB2Controller@dbCon4");//查询对应的行数量

Route::get("/dbc5","DB2Controller@dbCon5");//查询对应的行 的求和



