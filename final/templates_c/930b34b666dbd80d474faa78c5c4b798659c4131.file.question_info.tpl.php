<?php /* Smarty version Smarty-3.1.15, created on 2016-05-17 19:19:33
         compiled from "/home/vagrant/feup/LBAW/final/templates/questions/partials/question_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1322637753573a2977587913-75148489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '930b34b666dbd80d474faa78c5c4b798659c4131' => 
    array (
      0 => '/home/vagrant/feup/LBAW/final/templates/questions/partials/question_info.tpl',
      1 => 1463512772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1322637753573a2977587913-75148489',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_573a29775ad259_93584907',
  'variables' => 
  array (
    'question' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a29775ad259_93584907')) {function content_573a29775ad259_93584907($_smarty_tpl) {?><div class = "col-sm-12 container-white question-info-container">

    <div class = "col-sm-2">
        <?php echo $_smarty_tpl->getSubTemplate ("questions/partials/vote_panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <div class = "col-sm-10">
        <h3>
            <a href = "<?php echo questionUrl($_smarty_tpl->tpl_vars['question']->value['id']);?>
" class = "question-title" data-base-question-url="<?php echo questionUrl('');?>
">
                <?php echo $_smarty_tpl->tpl_vars['question']->value['title'];?>

            </a>
        </h3>
        <p class = "question-description">
            <a href = "<?php echo questionUrl($_smarty_tpl->tpl_vars['question']->value['id']);?>
" class = "question-body" class = "question-title" data-base-question-url="<?php echo questionUrl('');?>
">
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
            <span class = "question-updated-at">
                <?php if ($_smarty_tpl->tpl_vars['question']->value['updated_at']) {?>
                    <?php echo $_smarty_tpl->tpl_vars['question']->value['updated_at'];?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['question']->value['created_at'];?>

                <?php }?></span>
        </span>
        <span>
            <i class = "glyphicon glyphicon-comment"></i>
            <span class = "question-answers"><?php echo $_smarty_tpl->tpl_vars['question']->value['number_answers'];?>
 answer<?php if ($_smarty_tpl->tpl_vars['question']->value['number_answers']!=1) {?>s<?php }?></span>
        </span>
    </div>
</div><?php }} ?>
