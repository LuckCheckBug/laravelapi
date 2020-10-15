<?php

//定义常用的错误变量
define('E_SUCCESS',1000);

define('E_SYSTEM_ERROR',1001);

define('E_MYSQL_ERROR',1002);

define('E_FAILED',1003);

define("E_PARAM_ERROR",1004);

define("E_UNKNOWN",1005);
define("E_NOT_FOUND_HTTP",1009);

//全局文件错误信息
define("ERROR_MESSAGE_LIST",[
    1000=>"请求成功",
    1001=>"系统错误",
    1002=>"数据库异常",
    1003=>"系统异常",
    1004=>"参数错误",
    1005=>"未知错误",
    1009=>"未找到请求地址"
]);
