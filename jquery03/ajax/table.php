<?php

    include './config.php';
    include 'Model.class.php';

    $a = @$_GET['a']?$_GET['a']:'select';

    // echo $a;exit;

    switch($a){

        case 'select':
            $stuList = Model::Db('stu')->select();
        break;

        case 'del':
            $id = $_GET['id'];
            $affId = Model::Db('stu')->del($id);

            //删除成功
            if($affId>0){

                echo '1';exit;

                //删除失败
            }else{
                echo '2';exit;
            }
        break;

    }

  

    // echo '<pre>';
    // print_r($list);

    include './showInfo.php';


