<?php
//设置编码
header("Content-type: text/html;charset=utf-8");
//开启session
session_start();
//网站根目录
define('ROOT_PATH', dirname(__FILE__));
//引入配置文件
require ROOT_PATH.'/conf/system.inc.php';

//自动加载类文件
function __autoload($className){
    if(substr($className, -10)=="Controller"){
       require ROOT_PATH.'/controller/'.$className.'.class.php';
    }elseif (substr($className, -5)=="Model"){
        require ROOT_PATH.'/mode/'.$className.'.class.php';
    }else {
        require ROOT_PATH.'/includes/'.$className.'.class.php';
    }
}

$cache=new Cache(array('code','static','upload','ckeup','register','cast','friendlink','search'));
$cacheFlag=$cache->returnNoCacheFlag();

//实例化模板
$tem=new Template($cacheFlag);
//引入缓存文件设置
require 'cacheConfig.php';

