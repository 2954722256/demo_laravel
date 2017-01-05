<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class HelloController extends BaseController{

    public function helloIndex(){
        return view('welcomeDodo');
    }

    public function doLead(){
        $do1 = [
            ['id' =>"/", 'name' => 'Hello, 直接显示View'],
            ['id' =>"/dodo", 'name' => 'dodoview展示'],
            ['id' =>"/dodostr", 'name' => '直接返回字符串'],
        ];
        $do2 = [
            ['id' =>"/", 'name' => '设置变量'],
            ['id' =>"/dodo", 'name' => 'dodoview展示'],
            ['id' =>"/dodostr", 'name' => '直接返回字符串'],
        ];
        return view('welcomeLead')
            ->nest("do1", "lead_helper.do1_array", ['vars'=> $do1])
            ->nest("do2", "lead_helper.do1_array", ['vars'=> $do2]);
    }


}