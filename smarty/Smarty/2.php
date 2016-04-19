<?php
    
    //加载类库
    include './libs/Smarty.class.php';

    $_POST['name'] = '我是post的数据';

    $smarty = new Smarty;


    class A
    {
        public $name = 'jack对象';
    }
    $a = new A;


    function test(){
        return '哈哈';
    }

    const HOST ='127.0.0.1';

    $smarty->assign('obj',$a);

    //加载模板
    $smarty->display('./view/2.html');
    
