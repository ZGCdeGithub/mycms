<?php
    require_once dirname(__FILE__).'/init.inc.php';
    
    global $tem;
    $nav=new ListController($tem);
    $nav->action();
    $tem->display('list.tpl');
    
?>
