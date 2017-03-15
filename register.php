<?php
    require_once dirname(__FILE__).'/init.inc.php';
    
    global $tem;
    $reg=new RegisterController($tem);
    $reg->action();
    $tem->display('register.tpl');
    
?>
