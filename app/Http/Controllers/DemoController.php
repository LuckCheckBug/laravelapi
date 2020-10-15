<?php

namespace App\Http\Controllers;

use App\Exceptions\ApiException;
use App\Jobs\DemoQueue;
use Illuminate\Http\Request;

class DemoController extends ApiController
{
    //demo
    public function demo(){

        //throw new ApiException('',1009);
        return $this->ajaxReturn(E_UNKNOWN);


       /* $info = [
            ['name'=>"abc",'email'=>"1234567"],
            ['name'=>"abcd",'email'=>"12345678"],
            ['name'=>"abcdf",'email'=>"123456789"],
        ];
        foreach ($info as $value){
            //消息队列推送
            $this->dispatch((new DemoQueue($value))->onQueue('email'));
        }
        return $info;*/
    }
}
