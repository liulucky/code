<?php /* Smarty version Smarty-3.1.16, created on 2016-04-19 22:36:23
         compiled from ".\view\child.html" */ ?>
<?php /*%%SmartyHeaderCode:28799571639229138f8-35339136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0587c2075354e51866bef69e3ed1df20d7217f1' => 
    array (
      0 => '.\\view\\child.html',
      1 => 1461076583,
      2 => 'file',
    ),
    '1997ba5f1242e26f7d3c1fb18da0c2c85b055e82' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\tmp12\\xdlcode\\smarty02\\include\\view\\index.html',
      1 => 1461076352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28799571639229138f8-35339136',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_571639229cb293_11618386',
  'variables' => 
  array (
    'title' => 0,
    'select' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571639229cb293_11618386')) {function content_571639229cb293_11618386($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_option')) include './myPlugins\\modifier.option.php';
?><!doctype html>
<html>
    <head>
        <title>首页</title>
        <meta charset="utf-8"/>
    </head>
    <body>
         <span><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span>
        
        
    <header>网站的首页
        <nav>
           
            <ul>
                <li>子模板</li>
                
        <header>网站的首页
            <nav>
                <!-- 使用自定义调节器 -->
                <?php echo smarty_modifier_option($_smarty_tpl->tpl_vars['select']->value);?>

                <ul>啊哈哈</ul>
            </nav>
        </header>
        
                <li>ddd</li>
            </ul>
        </nav>

         <?php echo smarty_modifier_option($_smarty_tpl->tpl_vars['select']->value);?>

    </header>

        <main>
            <section>
                
                网站内容
            </section>
            <aside>
                网站的右边栏
            </aside>
        </main>

        <footer>网站的尾部</footer>
    </body>
</html>
<?php }} ?>
