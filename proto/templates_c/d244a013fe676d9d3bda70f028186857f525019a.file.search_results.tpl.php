<?php /* Smarty version Smarty-3.1.15, created on 2016-04-29 02:57:38
         compiled from "/home/vagrant/personal/LBAW/proto/templates/questions/search_results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9456618335722c836d2db99-41737283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd244a013fe676d9d3bda70f028186857f525019a' => 
    array (
      0 => '/home/vagrant/personal/LBAW/proto/templates/questions/search_results.tpl',
      1 => 1461898656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9456618335722c836d2db99-41737283',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5722c836d5b5a1_86611388',
  'variables' => 
  array (
    'query' => 0,
    'questions' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5722c836d5b5a1_86611388')) {function content_5722c836d5b5a1_86611388($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class = "container">
    <?php echo $_smarty_tpl->getSubTemplate ('common/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <h1 class = "results">Search results for: "<span class = "search-string"><?php echo $_smarty_tpl->tpl_vars['query']->value;?>
</span>"</h1>

    <div class = "question-space">
        <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
?>
            <?php echo $_smarty_tpl->getSubTemplate ('questions/partials/question_info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php } ?>
    </div>

    <div class = "load-more col-sm-12 space-top text-center">
        <button disabled type = "button" class = "btn btn-lg btn-primary col-sm-6 col-sm-offset-3 col-xs-12">Load More...</button>
    </div>

</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
