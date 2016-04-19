<?php

    /**
     * 模板引擎作用：
     *     彻底分离 前端与后端的代码
     *
     * 模板引擎：就是第三方提供的一些类。
     * 模板引擎有：Smarty、blade
     *
     * 1、首先来自定义模板引擎
     */
    
    //单表查询
?>
<!doctype html>
<html>
    <head>
        <title>index</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <table width="500" border="1">
            <caption>用户列表</caption>
            <tr>
                <td>序号</td>
                <td>姓名</td>
      
            </tr>
            <?php

                //v1.0  这是混编时代。HTML代码和PHP混编

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

                //遍历数据
                foreach( $list as $v ){

                    echo '<tr>';

                    echo '<td>'.$v['id'].'</td>';
                    echo '<td>'.$v['name'].'</td>';
                    echo '<tr>';

                }
            ?>



        </table>
    </body>
</html>
