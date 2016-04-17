<?php

    include './config.php';
    include 'Model.class.php';


    $pid = $_GET['pid']+0;

    $mad['upid'] = $pid;

    $list =  Model::Db('district')->where($mad)->select();

    // echo '<pre>';
    // print_r($list);exit;

    echo json_encode($list);
    exit;
