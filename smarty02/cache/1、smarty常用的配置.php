<?php

    include '../libs/Smarty.class.php';

    $s = new Smarty;    

    //设置模板保存目录
    $s->template_dir = './view';

    //设置配置文件保存目录
    $s->config_dir = './config';

    //设置编译文件目录
    $s->compile_dir = './view_c';

    //设置缓存文件目录
    $s->cache_dir = './cache';

    //修改定界符{}  
    $s->left_delimiter = '<{';
    $s->right_delimiter = '}>';

    //开启缓存
    $s->caching = 1;//1表示开启


    //分配变量给模板
    $s->assign('title','哈哈');

    //加载模板
    $s->display('2.html');


