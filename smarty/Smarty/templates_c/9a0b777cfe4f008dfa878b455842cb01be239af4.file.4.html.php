<?php /* Smarty version Smarty-3.1.16, created on 2016-04-19 01:27:46
         compiled from ".\view\4.html" */ ?>
<?php /*%%SmartyHeaderCode:267415715166898dc63-99404583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a0b777cfe4f008dfa878b455842cb01be239af4' => 
    array (
      0 => '.\\view\\4.html',
      1 => 1461000464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '267415715166898dc63-99404583',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_571516689ff107_87229102',
  'variables' => 
  array (
    'title' => 0,
    'time' => 0,
    'title1' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571516689ff107_87229102')) {function content_571516689ff107_87229102($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\phpstudy\\WWW\\tmp12\\xdlcode\\smarty\\Smarty\\libs\\plugins\\modifier.date_format.php';
?><!doctype html>
<html>
    <head>
        <title>index</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        变量调节器
        <?php echo strtoupper("lamp");?>

        <?php echo strtoupper($_smarty_tpl->tpl_vars['title']->value);?>


        <?php echo ucfirst(strtolower('lAmp'));?>


        <?php echo ucfirst(strtolower('lAmp'));?>

    
        
        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time']->value,"%Y-%m-%d %H:%I:%S");?>


        <!-- 设置默认值 -->
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['title1']->value)===null||$tmp==='' ? '暂无数据' : $tmp);?>


        <!-- 转义html -->
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value);?>

    </body>
</html>
<?php }} ?>
