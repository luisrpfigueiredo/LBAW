<?php /* Smarty version Smarty-3.1.15, created on 2016-04-27 17:28:43
         compiled from "/home/vagrant/personal/LBAW/lbaw13/frmk/templates/users/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17064839865720f6cb937dc3-72422131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02c27c26c3ba1e83899c8709ffd769cceb8f6946' => 
    array (
      0 => '/home/vagrant/personal/LBAW/lbaw13/frmk/templates/users/list.tpl',
      1 => 1461778077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17064839865720f6cb937dc3-72422131',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
    'key' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5720f6cb9bce10_88222563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5720f6cb9bce10_88222563')) {function content_5720f6cb9bce10_88222563($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section id="users">
  <h2>Users</h2>

  <div id="new_tweets"></div>

  <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['user']->key;
?>

  <article class="user-data">
	<h4>Showing user <?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</h4>
	<ul>
		<li><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</li>
		<li><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</li>
		<li><?php echo $_smarty_tpl->tpl_vars['user']->value['type'];?>
</li>
		<li><?php echo $_smarty_tpl->tpl_vars['user']->value['created_at'];?>
</li>
	</ul>
  </article>

  <?php } ?>

</section>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
