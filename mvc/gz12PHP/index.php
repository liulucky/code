<?php

    //单入口文件

/*    include './Controller/UserController.class.php';
    include './Controller/GoodsController.class.php';*/

    //加载数据库配置文件
    include './Config/config.php';

    //加载模板引擎
    include './libs/Smarty.class.php';

    //加载函数库
    include './Common/funcs.php';

    //使用自定义函数
    // echo test();

    //自定义自动加载函数
    spl_autoload_register('autoload');//避免和smarty的自动加载冲突

    function autoload($className){

   
        if( file_exists('./Controller/'.$className.'.class.php') ){
            // echo 'aaa';
            include './Controller/'.$className.'.class.php';

        }elseif(file_exists('./Model/'.$className.'.class.php')){

            include './Model/'.$className.'.class.php';
        }
        
    }

    $c = @$_GET['c']?$_GET['c']:'User';

    //实例化一个控制器类
/*    $con = new UserController;
    $con = new GoodsController;*/

    $c = $c.'Controller';

    // echo '<br/>';
    // echo $c;
    $con = new $c;

    //接受用户传送的数据
    $a = @$_GET['a']?$_GET['a']:'index';

    //访问方法
    $con->$a();
