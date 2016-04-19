<?php


    //想要达到的一个目的：中间变量，如果我不给前端，前端就获取不到
    //页面中还是有PHP代码。前端是不会写PHP代码的
    

    //解决方案：能不能有一个对象，我给你什么变量，页面才能显示。不给页面，页面
    //获取不到。

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


    //加载模板文件（这个文件只有简单的PHP循环处理）
    include './tpl.html';

    
