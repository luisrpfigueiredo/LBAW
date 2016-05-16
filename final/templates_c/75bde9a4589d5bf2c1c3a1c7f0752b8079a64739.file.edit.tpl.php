<?php /* Smarty version Smarty-3.1.15, created on 2016-05-16 19:31:17
         compiled from "/home/vagrant/feup/LBAW/final/templates/questions/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:628651794573a1cc8ab5554-20069214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75bde9a4589d5bf2c1c3a1c7f0752b8079a64739' => 
    array (
      0 => '/home/vagrant/feup/LBAW/final/templates/questions/edit.tpl',
      1 => 1463427063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '628651794573a1cc8ab5554-20069214',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_573a1cc8aef276_93171106',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'question' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a1cc8aef276_93171106')) {function content_573a1cc8aef276_93171106($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class = "container">
    <?php echo $_smarty_tpl->getSubTemplate ('common/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class = "panel panel-default">
        <div class = "panel-heading">
            <h3 class = "panel-title">Ask Question</h3>
        </div>
        <div class = "panel-body">
            <form class = "form-horizontal" method = "post" action = "<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/questions/edit.php">

                <input type = "hidden" name = "question_id" value = "<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
">
                <?php echo $_smarty_tpl->getSubTemplate ('questions/partials/question_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <div class = "form-group">
                    <div class = "col-sm-3 col-sm-offset-3">
                        <button class = "btn btn-primary" type = "submit">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
