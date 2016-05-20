<?php /* Smarty version Smarty-3.1.15, created on 2016-05-16 20:11:35
         compiled from "/home/vagrant/feup/LBAW/final/templates/questions/partials/vote_panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1221967431573a297760f5f3-04518815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1eb34558071512ac6e08aa62264419180b7d475' => 
    array (
      0 => '/home/vagrant/feup/LBAW/final/templates/questions/partials/vote_panel.tpl',
      1 => 1463110881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1221967431573a297760f5f3-04518815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'question' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_573a2977621d93_43126654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a2977621d93_43126654')) {function content_573a2977621d93_43126654($_smarty_tpl) {?><blockquote class="vote-up-down text-right">
    <div class="vote chev">
        <div class="increment up"></div>
        <div class="increment down"></div>

        <div class="count vote-count"><?php echo $_smarty_tpl->tpl_vars['question']->value['votes'];?>
</div>

    </div>
</blockquote><?php }} ?>
