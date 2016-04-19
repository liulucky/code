<?php /* Smarty version Smarty-3.1.16, created on 2016-04-19 00:32:10
         compiled from ".\view\2.html" */ ?>
<?php /*%%SmartyHeaderCode:29638571508936e7df8-91317240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '236eed21e337d2850e2165ef9e813b36432dc2d8' => 
    array (
      0 => '.\\view\\2.html',
      1 => 1460997129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29638571508936e7df8-91317240',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57150893739e86_42031432',
  'variables' => 
  array (
    'name' => 0,
    'list' => 0,
    'arr' => 0,
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57150893739e86_42031432')) {function content_57150893739e86_42031432($_smarty_tpl) {?><!doctype html>
<html>
    <head>
        <title>index</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        1.在模板中定义变量
        <?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable('jack', null, 0);?>
        <?php $_smarty_tpl->tpl_vars['list'] = new Smarty_variable(array(13,27,45), null, 0);?>

        <!-- 关联数组 -->
        <?php $_smarty_tpl->tpl_vars['arr'] = new Smarty_variable(array('name'=>'jack'), null, 0);?>

        2.输出变量
        <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['list']->value[1];?>

        <?php echo $_smarty_tpl->tpl_vars['list']->value[1];?>

        <?php echo $_smarty_tpl->tpl_vars['list']->value[1]+1;?>

        <?php echo $_smarty_tpl->tpl_vars['list']->value[1+1];?>


        <!-- 输出关联数组 -->
        <?php echo $_smarty_tpl->tpl_vars['arr']->value['name'];?>


        <!-- 类似于JS的输出 -->
        <?php echo $_smarty_tpl->tpl_vars['arr']->value['name'];?>


        <!-- 在模板中输出PHP对象 -->
        <?php echo $_smarty_tpl->tpl_vars['obj']->value->name;?>


        <!-- 调用PHP系统函数 -->
        <?php echo time();?>

        <?php echo date('Y-m-d H:i:s');?>


        <!-- 调用自定义函数 -->
        <?php echo test();?>


            <br/>
        <!-- 输出超全局数组：$_POST $_SESSION -->
        <?php echo $_GET['name'];?>

        <?php echo $_POST['name'];?>

    
        <br/>
        <!-- 输出常量 -->
        <?php echo @constant('HOST');?>

    </body>
</html>
<?php }} ?>
