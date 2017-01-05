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
        $do4 = [
            ['id' =>"/dodovn", 'name' => 'view(\'xx.xxView\', $data)->nest("变量名", "xx.yy子View");'],
            ['id' =>"/dodovn2", 'name' => 'view(\'xx.xxView\', $data)->nest("变量名", "xx.yy子View", $data_nest子视图变量);'],
        ];
        $do5 = [
            ['id' =>"/db", 'name' => 'Controller简单操作'],
            ['id' =>"/dba", 'name' => 'Controller操作数据库：select语句查询，对象转数组'],
            ['id' =>"/dbo", 'name' => 'Controller操作数据库：select语句查询得到对象'],
            ['id' =>"/dbo1", 'name' => 'Controller操作数据库：select语句，带变量的查询得到对象'],
            ['id' =>"/dbo0i", 'name' => 'Controller简单操作：insert操作'],
            ['id' =>"/dbo0u", 'name' => 'Controller简单操作：update操作'],
            ['id' =>"/dbo0d", 'name' => 'Controller简单操作：delete操作'],
            ['id' =>"/dbo0tra", 'name' => 'Controller简单操作：transaction 事务'],
        ];
        $do6 = [
            ['id' =>"/dbc1", 'name' => 'where语句查询'],
            ['id' =>"/dbc2", 'name' => 'where完后，value，相当于查询字段'],
            ['id' =>"/dbc3", 'name' => 'list查询某个字段'],
            ['id' =>"/dbc4", 'name' => 'count操作（max, min, avg, sum）'],
            ['id' =>"/dbc5", 'name' => 'sum操作（max, min, avg, sum）'],
        ];
        return view('welcomeLead')
            ->nest("do1", "lead_helper.do1_array", ['vars'=> $do1])
            ->nest("do2", "lead_helper.do2_array", ['vars'=> $do2])
            ->nest("do3", "lead_helper.do3_array", ['vars'=> $do3])
            ->nest("do4", "lead_helper.do4_array", ['vars'=> $do4])
            ->nest("do5", "lead_helper.do5_array", ['vars'=> $do5])
            ->nest("do6", "lead_helper.do6_array", ['vars'=> $do6]);
    }


}