<?php /* Smarty version Smarty-3.1.15, created on 2016-04-28 14:17:18
         compiled from "/opt/lbaw/lbaw1513/public_html/proto/templates/users/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6425136135721ff4e74c039-77018331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1cd771f07ecae23347b49d577d3d396e141f317' => 
    array (
      0 => '/opt/lbaw/lbaw1513/public_html/proto/templates/users/list.tpl',
      1 => 1461845540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6425136135721ff4e74c039-77018331',
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
  'unifunc' => 'content_5721ff4e827664_22418219',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5721ff4e827664_22418219')) {function content_5721ff4e827664_22418219($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
