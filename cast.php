<?php
    require_once dirname(__FILE__).'/init.inc.php';
    
    global $tem;
    $cast=new CastController($tem);
    $cast->action();
    $tem->display('cast.tpl');
    
?>
