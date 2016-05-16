<?php /* Smarty version Smarty-3.1.15, created on 2016-05-16 20:36:40
         compiled from "/home/vagrant/feup/LBAW/final/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10636534195736667903b5f8-33221430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63433c8897a020f40b061a2c4f060c05c865451e' => 
    array (
      0 => '/home/vagrant/feup/LBAW/final/templates/index.tpl',
      1 => 1463430993,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10636534195736667903b5f8-33221430',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5736667928cf56_18562669',
  'variables' => 
  array (
    'questions' => 0,
    'chunk_questions' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5736667928cf56_18562669')) {function content_5736667928cf56_18562669($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class = "intro-header">
    <div class = "row" style = "margin: 0 auto">
        <div class = "col-lg-12">
            <div class = "overlay"></div>
            <div class = "intro-message">
                <h1>Tidder</h1>
                <p>You ask, we answer!</p>
                <hr class = "intro-divider">
                <ul class = "list-inline intro-social-buttons">
                    <li>
                        <a href = "<?php echo url('pages/about');?>
" class = "btn btn-warning btn-lg">
                            <span class = "network-name">About Us</span>
                        </a>
                    </li>
                    <li>
                        <a href = "<?php echo url('pages/register');?>
" class = "btn btn-success btn-lg">
                            <span class = "network-name">Join Us</span>
                        </a>
                    </li>
                    <li>
                        <a href = "http://fe.up.pt" class = "btn btn-danger btn-lg" target = "_blank"><i class = "fa fa-twitter fa-fw"></i>
                            <span class = "network-name">@FEUP</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class = "container">
    <ul class = "nav nav-tabs" id = "questions">
        <li class = "active">
            <a href = "#latest" aria-controls = "latest" role = "tab" data-toggle = "tab">Latest Questions</a>
        </li>
        <li>
            <a href = "#answered" aria-controls = "answered" role = "tab" data-toggle = "tab">Recently Updated</a>
        </li>
        <li>
            <a href = "#week" aria-controls = "week" role = "tab" data-toggle = "tab">Past Week</a>
        </li>
        <li>
            <a href = "#month" aria-controls = "month" role = "tab" data-toggle = "tab">Past Month</a>
        </li>
    </ul>

    <!-- TAB CONTENT -->
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
    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
