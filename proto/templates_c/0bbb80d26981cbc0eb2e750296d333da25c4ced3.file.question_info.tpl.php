<?php /* Smarty version Smarty-3.1.15, created on 2016-05-13 03:53:29
         compiled from "/home/vagrant/feup/LBAW/proto/templates/questions/partials/question_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:682530910573545ea51f7f1-54459077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bbb80d26981cbc0eb2e750296d333da25c4ced3' => 
    array (
      0 => '/home/vagrant/feup/LBAW/proto/templates/questions/partials/question_info.tpl',
      1 => 1463111512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '682530910573545ea51f7f1-54459077',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_573545ea54ac00_50917174',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'question' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573545ea54ac00_50917174')) {function content_573545ea54ac00_50917174($_smarty_tpl) {?><div class = "col-sm-12 container-white question-info-container">

    <div class = "col-sm-2">
        <?php echo $_smarty_tpl->getSubTemplate ("questions/partials/vote_panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <div class = "col-sm-10">
        <h3>
            <a href = "<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/dev.php" class="question-title">
                <?php echo $_smarty_tpl->tpl_vars['question']->value['title'];?>

            </a>
        </h3>
        <p class = "question-description">
            <a href = "<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/dev.php" class="question-body">
                <?php echo $_smarty_tpl->tpl_vars['question']->value['body'];?>

            </a>
        </p>
    </div>

    <div class = "statistics col-sm-12 text-center">
        <?php if ($_smarty_tpl->tpl_vars['question']->value['solved']) {?>
            <span class = "text-success question-solved-status">
                <i class = "glyphicon glyphicon-check"></i>
                <span>Solved</span>
            </span>
        <?php } else { ?>
            <span class = "text-danger question-solved-status">
                <i class = "glyphicon glyphicon-check"></i>
                <span>Not Solved</span>
            </span>
        <?php }?>
        <span>
            <i class = "glyphicon glyphicon-time"></i>
            <span class="question-updated-at"><?php echo $_smarty_tpl->tpl_vars['question']->value['updated_at'];?>
</span>
        </span>
        <span>
            <i class = "glyphicon glyphicon-comment"></i>
            <span class="question-answers"><?php echo $_smarty_tpl->tpl_vars['question']->value['number_answers'];?>
 answer<?php if ($_smarty_tpl->tpl_vars['question']->value['number_answers']!=1) {?>s<?php }?></span>
        </span>
    </div>
</div><?php }} ?>
