<?php /* Smarty version Smarty-3.1.15, created on 2016-05-13 01:34:34
         compiled from "/home/vagrant/feup/LBAW/proto/templates/common/menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184510537257352f2ad56478-25361541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c17e02e92b2ebe0d454773673cc33969bb2dbb5' => 
    array (
      0 => '/home/vagrant/feup/LBAW/proto/templates/common/menu_logged_out.tpl',
      1 => 1461891268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184510537257352f2ad56478-25361541',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57352f2ad66ca6_63364562',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57352f2ad66ca6_63364562')) {function content_57352f2ad66ca6_63364562($_smarty_tpl) {?><li class="cl-effect-21"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/dev.php">Questions</a></li>
<li class="cl-effect-21"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/dev.php">About Us</a></li>
<li class="cl-effect-21 <?php if (isset($_smarty_tpl->tpl_vars['tab']->value)) {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/authentication.php">Join us</a></li>
<?php }} ?>
