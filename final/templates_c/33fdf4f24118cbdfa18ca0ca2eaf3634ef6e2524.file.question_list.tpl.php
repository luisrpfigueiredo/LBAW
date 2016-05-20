<?php /* Smarty version Smarty-3.1.15, created on 2016-05-17 19:00:31
         compiled from "/home/vagrant/feup/LBAW/final/templates/questions_tabs_partials/question_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:333279908573b5ccc3b5c64-71314997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33fdf4f24118cbdfa18ca0ca2eaf3634ef6e2524' => 
    array (
      0 => '/home/vagrant/feup/LBAW/final/templates/questions_tabs_partials/question_list.tpl',
      1 => 1463511591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '333279908573b5ccc3b5c64-71314997',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_573b5ccc4573d6_95529392',
  'variables' => 
  array (
    'tabName' => 0,
    'panelActive' => 0,
    'questions' => 0,
    'chunk_questions' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573b5ccc4573d6_95529392')) {function content_573b5ccc4573d6_95529392($_smarty_tpl) {?><!-- TAB CONTENT -->
<div id = "<?php echo $_smarty_tpl->tpl_vars['tabName']->value;?>
" role = "tabpanel" class = "tab-pane <?php echo $_smarty_tpl->tpl_vars['panelActive']->value;?>
">
    <div class = "row">
        <?php if (empty($_smarty_tpl->tpl_vars['questions']->value)) {?>
            <div class = "col-sm-12" style = "text-align: center"><strong>No questions to load!</strong></div>
        <?php }?>

        <?php if (!empty($_smarty_tpl->tpl_vars['questions']->value)) {?>
            <?php  $_smarty_tpl->tpl_vars['chunk_questions'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['chunk_questions']->_loop = false;
 $_from = array_chunk($_smarty_tpl->tpl_vars['questions']->value,2); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['chunk_questions']->key => $_smarty_tpl->tpl_vars['chunk_questions']->value) {
$_smarty_tpl->tpl_vars['chunk_questions']->_loop = true;
?>
                <div class="question-line" style = "margin-bottom:15px;">
                    <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['chunk_questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
?>
                        <div class = "col-sm-6 question-col">
                            <?php echo $_smarty_tpl->getSubTemplate ('questions/partials/question_info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        </div>
                    <?php } ?>
                    <div class = "clearfix"></div>
                </div>
            <?php } ?>
            <div class = "load-more col-sm-12 space-top text-center"
                 data-next-page = "1"
                 data-url = "<?php echo url('api/questions/home_load_more');?>
"
                 data-tab = "<?php echo $_smarty_tpl->tpl_vars['tabName']->value;?>
">
                <button type = "button" class = "btn btn-lg btn-primary col-sm-6 col-sm-offset-3 col-xs-12">
                    Load More...
                </button>
            </div>
        <?php }?>
    </div>
</div><?php }} ?>
