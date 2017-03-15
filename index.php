<?php
    require_once dirname(__FILE__).'/init.inc.php';
    
    global $tem;
    $index=new IndexController($tem);
    $index->Action();
    $tem->display('index.tpl');
    
?>
