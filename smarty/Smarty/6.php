<?php
    //模板加载子模板
    
    //加载类库
    include './libs/Smarty.class.php';

    $smarty = new Smarty;

    $smarty->display('./view/include/index.html');
