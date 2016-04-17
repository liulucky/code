<!doctype html>
<html>
    <head>
        <title>首页</title>
        <meta charset="utf-8"/>
        <script src="../jquery-1.9.0.js"></script>
    </head>
    <body>
        
    
        <table border="1" width="500">
            <tr>
                <th>序号</th>
                <th>姓名</th>
                <th>性别</th>
                <th>班级</th>
                <th>操作</th>
            </tr>

            <?php 
                foreach($stuList as $v ):
            ?>
            <tr>
                
                <td><?php echo $v['id']?></td>
                <td><?php echo $v['name']?></td>
                <td><?php echo $v['sex']?></td>
                <td><?php echo $v['classId']?></td>
                <td>
                    <a class="btnDel" id="<?php echo $v['id']?>" href="javascript:void(0)">删除</a>
                </td>
            </tr>

            <?php
                endforeach;
            ?>
            
        </table>

        <script>

            $(function(){

                //给a绑定点击事件
                $('table').on('click','a.btnDel',function(){

                    //获取点击删除按钮处的id
                    var id = $(this).attr('id');

                    var ob = $(this);

                    //发送ajax
                    $.ajax({
                        type:'GET',
                        // url:'./table.php?a=del&id='+id,
                        url:'./table.php',
                        data:'a=del&id='+id,
                        

                        //请求成功的响应函数
                        success:function(res){

                            if(res == 1){
                                ob.parent().parent().remove();
                            }else{
                                alert('删除失败');
                            }
                        },
                        dataType:'html'
                        });
                })
            });
        </script>
    </body>
</html>
