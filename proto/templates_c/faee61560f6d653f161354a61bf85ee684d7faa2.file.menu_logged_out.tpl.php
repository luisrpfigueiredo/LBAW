<?php /* Smarty version Smarty-3.1.15, created on 2016-04-15 18:24:00
         compiled from "/opt/lbaw/lbaw1513/public_html/frmk/templates/common/menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:330418730571115a0b662d7-95789930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faee61560f6d653f161354a61bf85ee684d7faa2' => 
    array (
      0 => '/opt/lbaw/lbaw1513/public_html/frmk/templates/common/menu_logged_out.tpl',
      1 => 1460736735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '330418730571115a0b662d7-95789930',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_571115a0b737c4_24135960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571115a0b737c4_24135960')) {function content_571115a0b737c4_24135960($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php">Register</a>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
  <input type="text" placeholder="username" name="username">
  <input type="password" placeholder="password" name="password">
  <input type="submit" value=">">
</form>
<?php }} ?>
