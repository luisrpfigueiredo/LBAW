<?php /* Smarty version Smarty-3.1.15, created on 2016-05-13 23:42:49
         compiled from "/home/vagrant/feup/LBAW/final/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10636534195736667903b5f8-33221430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63433c8897a020f40b061a2c4f060c05c865451e' => 
    array (
      0 => '/home/vagrant/feup/LBAW/final/templates/index.tpl',
      1 => 1461898816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10636534195736667903b5f8-33221430',
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
  'unifunc' => 'content_5736667928cf56_18562669',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5736667928cf56_18562669')) {function content_5736667928cf56_18562669($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
