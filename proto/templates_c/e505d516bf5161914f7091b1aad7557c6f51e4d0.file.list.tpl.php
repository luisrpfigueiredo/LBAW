<?php /* Smarty version Smarty-3.1.15, created on 2016-04-15 18:25:00
         compiled from "/opt/lbaw/lbaw1513/public_html/frmk/templates/users/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:373237524571115a0a24806-56702046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e505d516bf5161914f7091b1aad7557c6f51e4d0' => 
    array (
      0 => '/opt/lbaw/lbaw1513/public_html/frmk/templates/users/list.tpl',
      1 => 1460737498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '373237524571115a0a24806-56702046',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_571115a0af5e84_23736578',
  'variables' => 
  array (
    'users' => 0,
    'key' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571115a0af5e84_23736578')) {function content_571115a0af5e84_23736578($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
