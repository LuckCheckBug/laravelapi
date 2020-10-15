<?php


namespace App\Logic;


class WriteLogLogic
{
    //静态方法写log
    public static function writeLog($url,$requestParam='',$responseParam='',$requestTime=0,$responseTime=0,$responseCode=0,$responseMessage='',$useTime=0){
        $path =__DIR__.'/../../log/';
        if(!is_dir($path)){
            mkdir($path,0777);
        }
        $filepath = $path.date("Ymd").'.log';
        $writeContent = PHP_EOL."requestUri：".$url.PHP_EOL;
        if($responseCode >0){
            $writeContent .= "responseCode：".$responseCode.PHP_EOL;
        }
        if($responseMessage != ''){
            $writeContent .= "responseMessage：".$responseMessage.PHP_EOL;
        }
        if($requestTime>0){
            $writeContent .= "requestTime：".date("Y-m-d H:i:s",$requestTime).PHP_EOL;
        }
        if($requestParam !=''){
            $writeContent .= "requestParam：".$requestParam.PHP_EOL;
        }
        if($responseParam != ''){
            $writeContent .= "responseParam：".$responseParam.PHP_EOL;
        }
        $writeContent .= "useTime(s)：".$useTime.PHP_EOL;
        file_put_contents($filepath,$writeContent,FILE_APPEND);
    }

}
