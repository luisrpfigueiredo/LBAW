<?php /* Smarty version Smarty-3.1.15, created on 2016-05-16 20:07:17
         compiled from "/home/vagrant/feup/LBAW/final/templates/common/menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1934947271573668f3b2f8e3-37810810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '234b481ea76171d95525e3e12ab09e81d48d2e56' => 
    array (
      0 => '/home/vagrant/feup/LBAW/final/templates/common/menu_logged_in.tpl',
      1 => 1463429066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1934947271573668f3b2f8e3-37810810',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_573668f3b524d7_48794777',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573668f3b524d7_48794777')) {function content_573668f3b524d7_48794777($_smarty_tpl) {?><li class = "cl-effect-21"><a href = "<?php echo url('pages/questions/create');?>
">Ask Question</a></li>
<li class = "cl-effect-21"><a href = "<?php echo url('pages/dev');?>
">Questions</a></li>
<li class = "cl-effect-21"><a href = "<?php echo url('pages/about');?>
">About Us</a></li>
<li class = " cl-effect-21"><a href = "<?php echo url('pages/dev');?>
">Profile</a></li>
<li class = "cl-effect-21"><a href = "<?php echo url('actions/users/logout');?>
">Log Out</a></li><?php }} ?>
