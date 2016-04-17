<?php

    include './config.php';
    include 'Model.class.php';

    //接受参数
    $type = $_POST['type'];
    $val = $_POST['val'];

    $map["$type"] = $val;

    // print_r($map);exit;
    //根据不同的type来进行不同的查询
    $list = Model::Db('stu')->where($map)->select();

/*    echo '<pre>';
    print_r($list);*/

    if( $list ){
        echo '2';
    }else{
        echo '1';
    }


