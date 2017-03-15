<?php
    require_once dirname(__FILE__).'/init.inc.php';
    
    global $tem;
    $search=new SearchController($tem);
    $search->action();
    $tem->display('search.tpl');
    
?>
