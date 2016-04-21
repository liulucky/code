<?php /* Smarty version Smarty-3.1.16, created on 2016-04-21 00:13:20
         compiled from ".\View\user\index.html" */ ?>
<?php /*%%SmartyHeaderCode:83675717aaa0411ab1-92720143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0258c6ff0e31d7fd7a7f0db0783ebd6cea28f975' => 
    array (
      0 => '.\\View\\user\\index.html',
      1 => 1461168177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83675717aaa0411ab1-92720143',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5717aaa04485c6_99934323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5717aaa04485c6_99934323')) {function content_5717aaa04485c6_99934323($_smarty_tpl) {?><!doctype html>
<html>
    <head>
        <title>index</title>
        <meta charset="utf-8"/>
    </head>
    <body>

        <table>
            <tr>
                
                <th>序号</th>
                <th>姓名</th>
                <th>性别</th>
                <th>班级</th>
            </tr>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
            <tr>
                
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['sex'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['classid'];?>
</td>
            </tr>
        <?php } ?>
        </table>
    </body>
</html>
<?php }} ?>
