<?php
    


    //加载类库
    include './libs/Smarty.class.php';

    $smarty = new Smarty;

    //分配一个变量
    $smarty->assign('title','lamp');
   
    $smarty->assign('time',time());
    $smarty->assign('name','<div>');

    //加载模板
    $smarty->display('./view/4.html');
    
