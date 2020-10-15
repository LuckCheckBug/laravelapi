<?php


namespace App\Logic;


use Illuminate\Support\Facades\Mail;
use Mockery\Exception;
use phpDocumentor\Reflection\DocBlock\Tags\Throws;

class SendEmailLogic
{

    //接收用户的邮箱
    private $userEmail;
    //接受用户的名字
    private $userName;
    //发送内容
    private $sendContent;
    //发送配置 包含发送邮箱等等。。可以设置默认配置
    private $config = array();

    public function __construct($data){
        try {
            $this->userEmail   = $data['email'];
            $this->userName    = $data['name'];
            $this->sendContent = $data['content'];
            #可以默认一个配置
            $this->config      = $data['config'];
        }catch (\Exception $exception){
            throw new Exception("参数错误",10002);
        }
    }


    public function sendEmail(){

        Mail::send();

    }
}
