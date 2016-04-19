<?php
    


    //加载类库
    include './libs/Smarty.class.php';

    $smarty = new Smarty;


    $data = array(
        array('id'=>1,'name'=>'jack'),
        array('id'=>2,'name'=>'jackfff'),
        );

    //分配一个数组给模板
    $smarty->assign('data',$data);


    //加载模板
    $smarty->display('./view/5.html');
    
