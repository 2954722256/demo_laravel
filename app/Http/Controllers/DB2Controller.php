<?php
namespace App\Http\Controllers;

use App\Helper\ArrayHelper;
use DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class DB2Controller extends BaseController
{

    /**
     * where  first
     */
    public function dbCon1(){
        $user = DB::table('shengxian.ahshop_dodo_insert')->where('name', 'John')->first();

        echo '<pre>';
        print_r($user);
    }


    /**
     * where  value, 相当于查询
     */
    public function dbCon2(){
        $user = DB::table('shengxian.ahshop_dodo_insert')->where('name', 'John')->first();

        echo '<pre>';
        print_r($user->name);
        print_r("======");
        print_r(DB::table('shengxian.ahshop_dodo_insert')->where('name', 'John')->value("name"));
    }


    /**
     * where  muti Column
     */
    public function dbCon3(){
        $name = DB::table('shengxian.ahshop_dodo_insert')->lists('name');

        echo '<pre>';
        foreach($name as $na){
            echo $na . "  ";
        }
    }

    /**
     * count
     *          max, min, avg, sum
     */
    public function dbCon4(){
        $name = DB::table('shengxian.ahshop_dodo_insert')->count();

        echo '<pre>';
        print_r($name);
    }

    /**
     * sum
     *          max, min, avg, sum
     */
    public function dbCon5(){
        $sum = DB::table('shengxian.ahshop_dodo_insert')->where("name", "jetty")->sum("oid");

        echo '<pre>';
        print_r($sum);
    }


}