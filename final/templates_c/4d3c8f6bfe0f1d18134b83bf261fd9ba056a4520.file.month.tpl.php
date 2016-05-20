<?php /* Smarty version Smarty-3.1.15, created on 2016-05-17 18:02:52
         compiled from "/home/vagrant/feup/LBAW/final/templates/questions_tabs_partials/month.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1002375315573b5ccc5a8cb9-59017713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d3c8f6bfe0f1d18134b83bf261fd9ba056a4520' => 
    array (
      0 => '/home/vagrant/feup/LBAW/final/templates/questions_tabs_partials/month.tpl',
      1 => 1463503108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1002375315573b5ccc5a8cb9-59017713',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'questions' => 0,
    'chunk_questions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_573b5ccc5dd337_42359904',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573b5ccc5dd337_42359904')) {function content_573b5ccc5dd337_42359904($_smarty_tpl) {?><!-- TAB CONTENT -->
<div class = "tab-content" style = "margin-top: 1em;">
    <div id = "latest" role = "tabpanel" class = "tab-pane active">
        <div class = "row">
            <?php if (empty($_smarty_tpl->tpl_vars['questions']->value)) {?>
                <div class="col-sm-12" style="text-align: center"><strong>No questions to load!</strong></div>
            <?php }?>

            <?php if (!empty($_smarty_tpl->tpl_vars['questions']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['chunk_questions'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['chunk_questions']->_loop = false;
 $_from = array_chunk($_smarty_tpl->tpl_vars['questions']->value,2); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['chunk_questions']->key => $_smarty_tpl->tpl_vars['chunk_questions']->value) {
$_smarty_tpl->tpl_vars['chunk_questions']->_loop = true;
?>
                    <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['chunk_questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
?>
                        <div class = "col-sm-6">
                            <?php echo $_smarty_tpl->getSubTemplate ('questions/partials/question_info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        </div>
                    <?php } ?>
                    <div class="clearfix"></div>
                    <div style="margin-bottom:15px;"></div>
                <?php } ?>
                <div class = "load-more col-sm-12 space-top text-center">
                    <button type = "button" class = "btn btn-lg btn-primary col-sm-6 col-sm-offset-3 col-xs-12">Load More...</button>
                </div>
            <?php }?>
        </div>
    </div>
</div><?php }} ?>
