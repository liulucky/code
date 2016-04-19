<?php /* Smarty version Smarty-3.1.16, created on 2016-04-19 01:35:05
         compiled from ".\view\5.html" */ ?>
<?php /*%%SmartyHeaderCode:1223757151a3f539360-29672833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a31e8edbfdc6b2f4d2627ed49a976ff596d2088' => 
    array (
      0 => '.\\view\\5.html',
      1 => 1461000903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1223757151a3f539360-29672833',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57151a3f610121_04005410',
  'variables' => 
  array (
    'data' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57151a3f610121_04005410')) {function content_57151a3f610121_04005410($_smarty_tpl) {?><!doctype html>
<html>
    <head>
        <title>index</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        

        <table>

            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['v']->value['name']=='jack') {?>
                        哈哈
                    <?php } else { ?>
                        你好
                    <?php }?>
                </td>
            </tr>
            <?php } ?>

        </table>
    </body>
</html>
<?php }} ?>
