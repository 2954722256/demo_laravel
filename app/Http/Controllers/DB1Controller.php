<?php
namespace App\Http\Controllers;

use App\Helper\ArrayHelper;
use DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class DB1Controller extends BaseController
{

    /**
     * 地域列表
     *
     * @return Response
     */
    public function helloIndex()
    {
        $city = [
            ['id' =>1, 'name' => 'beijing'],
            ['id' =>2, 'name' => 'tianjing'],
            ['id' =>3, 'name' => 'chengdu'],
            "1000"=>['id' =>3, 'name' => 'chengdu'],
            ['id' =>3, 'name' => 'chengdu'],
        ];

//        echo '<pre>';
//        print_r($city);
//        die;

        return view('db.array_data')->nest("dodo_nest", "db.helper.db_nest_array", ['city'=> $city]);
    }

    public function dbArray(){
        $data = DB::select("SELECT * FROM shengxian.ahshop_area limit 0,10");
        $dataa = ArrayHelper::object2array($data);
        return view('db.helper.db_nest_array',['city'=> $dataa]);
    }

    /**
     * select object to view
     */
    public function dbObject(){
        $data = DB::select("SELECT * FROM shengxian.ahshop_area limit 0,10");
        return view('db.helper.db_nest_obj',['data'=> $data]);
    }

    /**
     * select object with where condition to view
     */
    public function dbObject1(){
        $data = DB::select("SELECT * FROM shengxian.ahshop_area where parent_id = ? limit 0,10", [0]);
        return view('db.helper.db_nest_obj',['data'=> $data]);
    }

    /**
     * insert
     */
    public function dbObject0i(){
//        $data = [1, 'Dayle'];
        $data = [2, "jetty"];
        DB::insert('insert into shengxian.ahshop_dodo_insert (oid, name) values (?, ?)', $data);
    }

    /**
     * update
     */
    public function dbObject0u(){
//        $data = [1, 'Dayle'];
        $data = [100, "jetty"];
        $affected = DB::update('update shengxian.ahshop_dodo_insert set votes = ? where name = ?', $data);
        echo '<pre>';
        print_r($affected);
    }

    /**
     * delete
     */
    public function dbObject0d(){
        $deleted = DB::delete('delete from shengxian.ahshop_dodo_insert');
        echo '<pre>';
        print_r($deleted);
    }







}