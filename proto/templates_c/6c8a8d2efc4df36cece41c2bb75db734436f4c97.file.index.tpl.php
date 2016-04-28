<?php /* Smarty version Smarty-3.1.15, created on 2016-04-28 22:15:07
         compiled from "/home/vagrant/personal/LBAW/proto/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20173297357228b4c3db958-63167297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c8a8d2efc4df36cece41c2bb75db734436f4c97' => 
    array (
      0 => '/home/vagrant/personal/LBAW/proto/templates/index.tpl',
      1 => 1461881706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20173297357228b4c3db958-63167297',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57228b4c413465_13744497',
  'variables' => 
  array (
    'LOGGED_IN' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57228b4c413465_13744497')) {function content_57228b4c413465_13744497($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class = "container">
    <section id = "body">
        <?php if ($_smarty_tpl->tpl_vars['LOGGED_IN']->value==true) {?>
            You are looged in.
        <?php } else { ?>
            Hello kind guest. Please login
        <?php }?>
    </section>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
