<?php /* Smarty version Smarty-3.1.15, created on 2016-04-29 00:54:36
         compiled from "/home/vagrant/personal/LBAW/proto/templates/common/menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109875001257228229c85632-55868268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ce22f44aa842f8c8bf31e55d88152f1328bc9e6' => 
    array (
      0 => '/home/vagrant/personal/LBAW/proto/templates/common/menu_logged_out.tpl',
      1 => 1461891268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109875001257228229c85632-55868268',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57228229c91fa3_68462399',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'tab' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57228229c91fa3_68462399')) {function content_57228229c91fa3_68462399($_smarty_tpl) {?><li class="cl-effect-21"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/dev.php">Questions</a></li>
<li class="cl-effect-21"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/dev.php">About Us</a></li>
<li class="cl-effect-21 <?php if (isset($_smarty_tpl->tpl_vars['tab']->value)) {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/authentication.php">Join us</a></li>
<?php }} ?>
