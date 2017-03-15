<?php
    require_once dirname(__FILE__).'/init.inc.php';
    
    global $tem;
    $friendlink=new FriendlinkController($tem);
    $friendlink->action();
    $tem->display('friendlink.tpl');
    
?>
