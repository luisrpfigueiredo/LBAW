<?php /* Smarty version Smarty-3.1.15, created on 2016-04-27 17:28:43
         compiled from "/home/vagrant/personal/LBAW/lbaw13/frmk/templates/common/menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21125116665720f6cbb9cdd1-49254896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '967085c83cd2a58462aa67130d60eedb65f0d167' => 
    array (
      0 => '/home/vagrant/personal/LBAW/lbaw13/frmk/templates/common/menu_logged_out.tpl',
      1 => 1461778077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21125116665720f6cbb9cdd1-49254896',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5720f6cbba8813_52387500',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5720f6cbba8813_52387500')) {function content_5720f6cbba8813_52387500($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php">Register</a>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
  <input type="text" placeholder="username" name="username">
  <input type="password" placeholder="password" name="password">
  <input type="submit" value=">">
</form>
<?php }} ?>
