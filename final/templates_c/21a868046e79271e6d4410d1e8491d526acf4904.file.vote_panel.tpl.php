<?php /* Smarty version Smarty-3.1.15, created on 2016-04-29 02:51:46
         compiled from "/home/vagrant/personal/LBAW/proto/templates/questions/partials/vote_panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7382214625722c987a05924-18871196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21a868046e79271e6d4410d1e8491d526acf4904' => 
    array (
      0 => '/home/vagrant/personal/LBAW/proto/templates/questions/partials/vote_panel.tpl',
      1 => 1461898305,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7382214625722c987a05924-18871196',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5722c987a10b04_17970282',
  'variables' => 
  array (
    'question' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5722c987a10b04_17970282')) {function content_5722c987a10b04_17970282($_smarty_tpl) {?><blockquote class="vote-up-down text-right">
    <div class="vote chev">
        <div class="increment up"></div>
        <div class="increment down"></div>

        <div class="count"><?php echo $_smarty_tpl->tpl_vars['question']->value['votes'];?>
</div>

    </div>
</blockquote><?php }} ?>
