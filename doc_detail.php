<?php
    require_once dirname(__FILE__).'/init.inc.php';
    
    global $tem;
    $nav=new DetailController($tem);
    $nav->action();
    $tem->display('doc_detail.tpl');
    
?>
