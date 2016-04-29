<?php /* Smarty version Smarty-3.1.15, created on 2016-04-27 12:16:03
         compiled from "c:\Bitnami\wampstack-5.6.19-0\apache2\htdocs\LBAW\proto\templates\common\menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2446957210ff3f2d6b8-69130314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '805d82e71b0730a7c0832190a87f8cd8651be05b' => 
    array (
      0 => 'c:\\Bitnami\\wampstack-5.6.19-0\\apache2\\htdocs\\LBAW\\proto\\templates\\common\\menu_logged_out.tpl',
      1 => 1461781096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2446957210ff3f2d6b8-69130314',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57210ff3f39237_81884919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57210ff3f39237_81884919')) {function content_57210ff3f39237_81884919($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php">Register</a>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
  <input type="text" placeholder="username" name="username">
  <input type="password" placeholder="password" name="password">
  <input type="submit" value=">">
</form>
<?php }} ?>
