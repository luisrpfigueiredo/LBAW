<?php /* Smarty version Smarty-3.1.15, created on 2016-05-17 20:40:09
         compiled from "/home/vagrant/feup/LBAW/final/templates/users/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1172627972573b7ffb782449-28488122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4eba179b2802120c57209b9283a1f44b0833ded5' => 
    array (
      0 => '/home/vagrant/feup/LBAW/final/templates/users/profile.tpl',
      1 => 1463517608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1172627972573b7ffb782449-28488122',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_573b7ffb7bec41_05240522',
  'variables' => 
  array (
    'user' => 0,
    'questions' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573b7ffb7bec41_05240522')) {function content_573b7ffb7bec41_05240522($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class = "container">
    <?php echo $_smarty_tpl->getSubTemplate ('common/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class = "row">
        <div class = "col-sm-4">
            <div class = "panel panel-default">
                <div class = "panel-heading">
                    <h3 class = "panel-title"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</h3>
                </div>
                <div class = "panel-body small-padding-horizontal">
                    <div class = "row">
                        <div class = "col-sm-12 text-center">
                            <div class = "col-sm-12 user-statistics no-padding-horizontal">
                                <div class = "col-sm-4"><span><?php echo $_smarty_tpl->tpl_vars['user']->value['count_questions'];?>
</span>Questions</div>
                                <div class = "col-sm-4"><span><?php echo $_smarty_tpl->tpl_vars['user']->value['count_answers'];?>
</span>Answers</div>
                                <div class = "col-sm-4"><span><?php echo $_smarty_tpl->tpl_vars['user']->value['count_votes_rating_received'];?>
</span>Rate</div>
                            </div>
                        </div>
                        <div class = "clearfix"></div>

                        <div class = "user-details">
                            <div class = "user-details-line col-sm-12">
                                <div class = "col-sm-4 text-right">
                                    Email:
                                </div>
                                <div class = "col-sm-8">
                                    <strong><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</strong>
                                </div>
                            </div>

                            <div class = "user-details-line col-sm-12">
                                <div class = "col-sm-4 text-right">
                                    Username:
                                </div>
                                <div class = "col-sm-8">
                                    <strong><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</strong>
                                </div>
                            </div>

                            <div class = "user-details-line col-sm-12">
                                <div class = "col-sm-4 text-right">
                                    Joined at:
                                </div>
                                <div class = "col-sm-8">
                                    <strong><?php echo $_smarty_tpl->tpl_vars['user']->value['created_at'];?>
</strong>
                                </div>
                            </div>

                            <div class = "user-details-line col-sm-12 text-center">
                                <button type = "button" class = "btn btn-primary" data-toggle = "modal" data-target = "#exampleModal" data-whatever = "@mdo">Edit profile</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class = "col-sm-8">

            <div class = "panel panel-default">
                <div class = "panel-heading">
                    <h3 class = "panel-title">My Questions</h3>
                </div>
                <div class = "panel-body profile-questions-panel">

                    <div class = "question-space">
                        <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
?>
                            <?php echo $_smarty_tpl->getSubTemplate ('questions/partials/question-info', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        <?php } ?>
                    </div>


                    <div class = "load-more col-sm-12 space-top text-center">
                        <button type = "button" class = "btn btn-lg btn-primary col-sm-6 col-sm-offset-3 col-xs-12">Load More...</button>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class = "modal fade" id = "exampleModal" tabindex = "-1" role = "dialog" aria-labelledby = "exampleModalLabel">
        <div class = "modal-dialog" role = "document">
            <div class = "modal-content">
                <div class = "modal-header">
                    <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
                        <span aria-hidden = "true">&times;</span></button>
                    <h4 class = "modal-title" id = "exampleModalLabel">Settings</h4>
                </div>
                <div class = "modal-body">
                    <form>
                        <div class = "form-group">
                            <label for = "recipient-name" class = "control-label">New Username:</label>
                            <input type = "text" class = "form-control" id = "recipient-name">
                        </div>
                        <div class = "form-group">
                            <label for = "message-text" class = "control-label">New email:</label>
                            <input type = "text" class = "form-control" id = "recipient-name">
                        </div>
                        <div class = "form-group">
                            <label for = "message-text" class = "control-label">New password:</label>
                            <input type = "text" class = "form-control" id = "recipient-name">
                        </div>
                        <div class = "form-group">
                            <label for = "message-text" class = "control-label">Confirm password:</label>
                            <input type = "text" class = "form-control" id = "recipient-name">
                        </div>
                    </form>
                </div>
                <div class = "modal-footer">
                    <button type = "button" class = "btn btn-default" data-dismiss = "modal">Close</button>
                    <button type = "button" class = "btn btn-primary">Edit</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
