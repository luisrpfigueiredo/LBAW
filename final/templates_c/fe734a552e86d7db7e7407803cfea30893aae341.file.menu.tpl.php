<?php /* Smarty version Smarty-3.1.15, created on 2016-05-17 18:15:49
         compiled from "/home/vagrant/feup/LBAW/final/templates/questions_tabs_partials/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1516403353573b496a5c54a0-53562018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe734a552e86d7db7e7407803cfea30893aae341' => 
    array (
      0 => '/home/vagrant/feup/LBAW/final/templates/questions_tabs_partials/menu.tpl',
      1 => 1463508947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1516403353573b496a5c54a0-53562018',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_573b496a5ceec5_73855485',
  'variables' => 
  array (
    'tabs' => 0,
    'key' => 0,
    'tab' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573b496a5ceec5_73855485')) {function content_573b496a5ceec5_73855485($_smarty_tpl) {?><ul class = "nav nav-tabs" id = "questions">
    <?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tab']->key;
?>
        <li <?php if ($_smarty_tpl->tpl_vars['key']->value==0) {?>class = "active"<?php }?>>
            <a href = "#<?php echo $_smarty_tpl->tpl_vars['tab']->value[0];?>
" aria-controls = "<?php echo $_smarty_tpl->tpl_vars['tab']->value[0];?>
" role = "tab" data-toggle = "tab"><?php echo $_smarty_tpl->tpl_vars['tab']->value[1];?>
</a>
        </li>
    <?php } ?>
</ul><?php }} ?>
