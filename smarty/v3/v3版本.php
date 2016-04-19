<?php

    //v3.0  单独一个PHP文件处理所有的业务逻辑
    //对v2.0版本进行升级：将所有业务逻辑独立出来，写到一个文件

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

    
