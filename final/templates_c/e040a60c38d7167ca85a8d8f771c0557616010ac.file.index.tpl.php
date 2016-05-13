<?php /* Smarty version Smarty-3.1.15, created on 2016-05-13 01:34:34
         compiled from "/home/vagrant/feup/LBAW/proto/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67032416557352f2aba1b84-89176368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e040a60c38d7167ca85a8d8f771c0557616010ac' => 
    array (
      0 => '/home/vagrant/feup/LBAW/proto/templates/index.tpl',
      1 => 1461898816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67032416557352f2aba1b84-89176368',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LOGGED_IN' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57352f2ac3bf98_86133023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57352f2ac3bf98_86133023')) {function content_57352f2ac3bf98_86133023($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class = "container">
    <section id = "body">
        <?php if ($_smarty_tpl->tpl_vars['LOGGED_IN']->value==true) {?>
            You are logged in. The other User Story is search. Try it.
        <?php } else { ?>
            Hello kind guest. Please <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/authentication.php">login</a>
        <?php }?>
    </section>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
