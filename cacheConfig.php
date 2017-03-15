<?php
    //前台一些设置的专用文件
    define('IS_CACHE', true);        //前台缓存设置
    global $tem,$cacheFlag;
    if(IS_CACHE && !$cacheFlag){
        ob_start();
        $tem->cache(Tool::tplName().'.tpl');
    }
    //主导航数据
    $nav=new NavController($tem);
    $tem->assign('nav', $nav->FrontNav());
    //tag标签数据
    $tag=new TagModel();
    $tem->assign('tagData', $tag->selectNightTagForFront());
    //友情链接数据
    $link=new FriendlinkModel();
    $text_link=$link->selectText_linkForFront();
    $logo_link=$link->selectLogo_linkForFront();
    $tem->assign('textLink', $text_link);
    $tem->assign('logoLink', $logo_link);
    //网站名称
    $tem->assign('webname', WEBNAME);
    if(IS_CACHE){
        $tem->assign('header','<script type="text/javascript">header()</script>');
    }else{
        if(empty($_COOKIE['loginUser'])){
            $tem->assign('header', '<a href="register.php?action=login" class="user">登录</a> <a href="register.php?action=register" class="user">注册</a>');
        }else{
            $tem->assign('header',$_COOKIE['loginUser'].' 你好！ <a href="register.php?action=logout">退出</a>');
        }
    }