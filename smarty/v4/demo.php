<?php

    header("Content-type:text/html;charset=utf-8");
    $link = mysql_connect('localhost','root','root');

    mysql_select_db('test');

    mysql_set_charset('utf8');

    $sql = "select * from user";

    $res = mysql_query( $sql );

    if( $res ){

        while( $row = mysql_fetch_assoc($res) ){

            $list[] = $row;
        }
    }

    include './MyTpl.class.php';

    //实例化模板引擎类
    $tpl = new MyTpl;

    //分配数据
    $tpl->assign('list',$list);
    $tpl->assign('sql',$sql);


    //加载模板
    $tpl->display('./tpl.html');



    

    
