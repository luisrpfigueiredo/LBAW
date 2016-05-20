<?php /* Smarty version Smarty-3.1.15, created on 2016-05-13 23:42:49
         compiled from "/home/vagrant/feup/LBAW/final/templates/common/menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1720830605573666793dd343-65044316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc32ccd43a3a981158a528abc74b2736c6d3a54e' => 
    array (
      0 => '/home/vagrant/feup/LBAW/final/templates/common/menu_logged_out.tpl',
      1 => 1463182607,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1720830605573666793dd343-65044316',
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
  'unifunc' => 'content_573666793ed951_11857000',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573666793ed951_11857000')) {function content_573666793ed951_11857000($_smarty_tpl) {?><li class="cl-effect-21"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/dev.php">Questions</a></li>
<li class="cl-effect-21"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/about.php">About Us</a></li>
<li class="cl-effect-21 <?php if (isset($_smarty_tpl->tpl_vars['tab']->value)) {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/authentication.php">Join us</a></li>
<?php }} ?>
