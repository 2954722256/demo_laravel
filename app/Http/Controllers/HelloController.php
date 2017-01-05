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
            ['id' =>"/welcome", 'name' => 'Hello, 直接显示View'],
            ['id' =>"/dodo", 'name' => 'dodoview展示'],
            ['id' =>"/dodostr", 'name' => '直接返回字符串'],
        ];
        $do2 = [
            ['id' =>"/dodo/50", 'name' => '/dodo/{id}对应变量的理解'],
            ['id' =>"/dodoc0/51", 'name' => '/dodoc0/{id?}对应设置默认的例子'],
            ['id' =>"/dodoc/dodo52", 'name' => '/dodoc/{name?}设置默认名字的例子 '],
            ['id' =>"/dodoc2/dodo53", 'name' => '/dodoc2/{name} 后通过where简单过滤（这里正则全是字母即可） '],
            ['id' =>"/dodoc3/23/dodo", 'name' => '/dodoc3/{id}/{name} where多个参数， id是数字， name是字母 '],
        ];
        $do3 = [
            ['id' =>"/dodov/dodo", 'name' => 'View中对应的二级子文件夹'],
            ['id' =>"/dodovw/dodo", 'name' => '将变量传递到View， 也是多级View， 用->with("name", $name)'],
            ['id' =>"/dodovwn/dodo", 'name' => '将变量传递到View， 也是多级View， 用->withName($name)'],
            ['id' =>"/dodova/dodo/19", 'name' => 'view(\'xxx.xxx\', $data), 将含有变量的数组，传递到View'],
        ];
        return view('welcomeLead')
            ->nest("do1", "lead_helper.do1_array", ['vars'=> $do1])
            ->nest("do2", "lead_helper.do2_array", ['vars'=> $do2])
            ->nest("do3", "lead_helper.do3_array", ['vars'=> $do3]);
    }


}