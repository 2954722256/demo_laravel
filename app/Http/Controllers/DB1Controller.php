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


    public function dbObject(){
        $data = DB::select("SELECT * FROM shengxian.ahshop_area limit 0,10");
        return view('db.helper.db_nest_obj',['data'=> $data]);
    }

    public function dbObject1(){
        $data = DB::select("SELECT * FROM shengxian.ahshop_area where parent_id = ? limit 0,10", [0]);
        return view('db.helper.db_nest_obj',['data'=> $data]);
    }

    public function dbObject0i(){
//        $data = [1, 'Dayle'];
        $data = [2, "jetty"];
        DB::insert('insert into shengxian.ahshop_dodo_insert (oid, name) values (?, ?)', $data);
    }


}