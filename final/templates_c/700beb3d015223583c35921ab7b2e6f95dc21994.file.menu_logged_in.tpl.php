<?php /* Smarty version Smarty-3.1.15, created on 2016-04-28 19:25:40
         compiled from "/opt/lbaw/lbaw1513/public_html/proto/templates/common/menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1324347155722479400faa8-58297098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '700beb3d015223583c35921ab7b2e6f95dc21994' => 
    array (
      0 => '/opt/lbaw/lbaw1513/public_html/proto/templates/common/menu_logged_in.tpl',
      1 => 1461845540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1324347155722479400faa8-58297098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_572247940a85b6_63087113',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572247940a85b6_63087113')) {function content_572247940a85b6_63087113($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a>
<span class="username"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</span>
<?php }} ?>
