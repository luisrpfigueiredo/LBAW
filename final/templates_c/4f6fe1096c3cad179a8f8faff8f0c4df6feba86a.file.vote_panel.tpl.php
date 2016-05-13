<?php /* Smarty version Smarty-3.1.15, created on 2016-05-13 03:53:29
         compiled from "/home/vagrant/feup/LBAW/proto/templates/questions/partials/vote_panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1859059813573545ea5b8c14-77268692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f6fe1096c3cad179a8f8faff8f0c4df6feba86a' => 
    array (
      0 => '/home/vagrant/feup/LBAW/proto/templates/questions/partials/vote_panel.tpl',
      1 => 1463110881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1859059813573545ea5b8c14-77268692',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_573545ea5d1202_04980123',
  'variables' => 
  array (
    'question' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573545ea5d1202_04980123')) {function content_573545ea5d1202_04980123($_smarty_tpl) {?><blockquote class="vote-up-down text-right">
    <div class="vote chev">
        <div class="increment up"></div>
        <div class="increment down"></div>

        <div class="count vote-count"><?php echo $_smarty_tpl->tpl_vars['question']->value['votes'];?>
</div>

    </div>
</blockquote><?php }} ?>
