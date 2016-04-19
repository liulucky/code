<?php
    
    //{}冲突问题

    //加载类库
    include './libs/Smarty.class.php';

    $smarty = new Smarty;

    //加载模板
    $smarty->display('./view/3.html');
    
