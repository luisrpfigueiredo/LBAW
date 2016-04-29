<?php /* Smarty version Smarty-3.1.15, created on 2016-04-29 02:55:59
         compiled from "/home/vagrant/personal/LBAW/proto/templates/questions/partials/question_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19449740285722c97c0c4903-70241062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5f8183a477a08bdee9e28b790422c0cce1e9814' => 
    array (
      0 => '/home/vagrant/personal/LBAW/proto/templates/questions/partials/question_info.tpl',
      1 => 1461898538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19449740285722c97c0c4903-70241062',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5722c97c0ce860_38834357',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'question' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5722c97c0ce860_38834357')) {function content_5722c97c0ce860_38834357($_smarty_tpl) {?><div class = "col-sm-12 container-white">

    <div class = "col-sm-2">
        <?php echo $_smarty_tpl->getSubTemplate ("questions/partials/vote_panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <div class = "col-sm-10">
        <h3>
            <a href = "<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/dev.php">
                <?php echo $_smarty_tpl->tpl_vars['question']->value['title'];?>

            </a>
        </h3>
        <p class = "question-description">
            <a href = "<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/dev.php">
                <?php echo $_smarty_tpl->tpl_vars['question']->value['body'];?>

            </a>
        </p>
    </div>

    <div class = "statistics col-sm-12 text-center">
        <?php if ($_smarty_tpl->tpl_vars['question']->value['solved']) {?>
            <span class = "text-success">
                <i class = "glyphicon glyphicon-check"></i>
                    Solved
            </span>
        <?php } else { ?>
            <span class = "text-danger">
                <i class = "glyphicon glyphicon-check"></i>
                Not Solved
            </span>
        <?php }?>
        <span>
            <i class = "glyphicon glyphicon-time"></i>
            <?php echo $_smarty_tpl->tpl_vars['question']->value['updated_at'];?>

        </span>
        <span>
            <i class = "glyphicon glyphicon-comment"></i>
            <?php echo $_smarty_tpl->tpl_vars['question']->value['number_answers'];?>
 answer<?php if ($_smarty_tpl->tpl_vars['question']->value['number_answers']!=1) {?>s<?php }?>
        </span>
    </div>
</div><?php }} ?>
