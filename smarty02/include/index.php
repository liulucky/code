<?php

    include '../libs/Smarty.class.php';

    $s = new Smarty;

    //设置模板保存目录
    $s->template_dir = './view';

    //设置编译文件目录
    $s->compile_dir = './runTime/view_c';

    //设置缓存文件保存目录
    $s->cache_dir = './runTime/cache';

    //设置自定义插件的目录
    $s->addPluginsDir('./myPlugins');

    //开启缓存
    $s->caching = 1;

    //设置缓存时间
    $s->cache_lifetime = 1;

    $s->assign('title','哈哈fff');

    $data = array(
        'gz10',
        'gz11',
        'gz12',
        );

    $s->assign('select',$data);

    //加载模板
    $s->display('child.html');
