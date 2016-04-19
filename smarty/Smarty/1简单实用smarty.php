<?php
    
    //加载类库
    include './libs/Smarty.class.php';

    $smarty = new Smarty;

    // var_dump($smarty);
    
    //分配变量到变量
    $smarty->assign('title','测试模板');


    //分配一个数组给模板
    $smarty->assign('list',array('id'=>1,'name'=>'jack'));


    //加载模板
    $smarty->display('./view/index.html');
    
