<?php /* Smarty version Smarty-3.1.16, created on 2016-04-19 00:14:14
         compiled from ".\view\index.html" */ ?>
<?php /*%%SmartyHeaderCode:963657150621241281-86026649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a57f99f377c0d74fe16fab327b729e7e4d56bf5d' => 
    array (
      0 => '.\\view\\index.html',
      1 => 1460996049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '963657150621241281-86026649',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_571506213b82e8_20869074',
  'variables' => 
  array (
    'title' => 0,
    'list' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571506213b82e8_20869074')) {function content_571506213b82e8_20869074($_smarty_tpl) {?><!doctype html>
<html>
    <head>
        <title>index</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <?php echo $_smarty_tpl->tpl_vars['title']->value;?>


        <!-- 在模板引擎中遍历数组 -->
        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
            <?php echo $_smarty_tpl->tpl_vars['val']->value;?>

        <?php } ?>
    </body>
</html>
<?php }} ?>
