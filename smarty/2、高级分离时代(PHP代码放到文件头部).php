<?php

    //v2.0  代码头部处理所有的业务逻辑
    //对v1.0版本进行升级：将所有业务逻辑独立出来，写到文件顶部

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

                foreach($list as $v):
            ?>
            <tr>
                <td><?php echo $v['id']?></td>
                <td><?php echo $v['name']?></td>

            </tr>
            <?php

                endforeach;
            ?>



        </table>
    </body>
</html>
