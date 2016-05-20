<?php /* Smarty version Smarty-3.1.15, created on 2016-04-28 21:35:37
         compiled from "/home/vagrant/personal/LBAW/proto/templates/users/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122545193057228229ac5d92-22285527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4121ac550a234994303add7507ec1538f8046359' => 
    array (
      0 => '/home/vagrant/personal/LBAW/proto/templates/users/list.tpl',
      1 => 1461878943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122545193057228229ac5d92-22285527',
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
  'unifunc' => 'content_57228229b80ff0_61382292',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57228229b80ff0_61382292')) {function content_57228229b80ff0_61382292($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
