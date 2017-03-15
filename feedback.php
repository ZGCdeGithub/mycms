<?php
    require_once dirname(__FILE__).'/init.inc.php';
    
    global $tem;
    $feedback=new FeedBackController($tem);
    $feedback->action();
    $tem->display('feedback.tpl');
    
?>
