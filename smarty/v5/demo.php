<?php

    header("Content-type:text/html;charset=utf-8");


    include './MyTpl.class.php';

    //实例化模板引擎类
    $tpl = new MyTpl;

    $title = '测试模板引擎';

    //分配数据
    $tpl->assign('title',$title);



    //加载模板
    $tpl->display('./tpl.html');



    

    
