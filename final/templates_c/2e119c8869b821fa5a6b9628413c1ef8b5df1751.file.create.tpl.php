<?php /* Smarty version Smarty-3.1.15, created on 2016-05-14 00:29:14
         compiled from "/home/vagrant/feup/LBAW/final/templates/questions/create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201056034057366c272cc791-34407918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e119c8869b821fa5a6b9628413c1ef8b5df1751' => 
    array (
      0 => '/home/vagrant/feup/LBAW/final/templates/questions/create.tpl',
      1 => 1463185751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201056034057366c272cc791-34407918',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57366c272e67e3_84565578',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57366c272e67e3_84565578')) {function content_57366c272e67e3_84565578($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class = "container">
    <?php echo $_smarty_tpl->getSubTemplate ('common/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class = "panel panel-default">
        <div class = "panel-heading">
            <h3 class = "panel-title">Ask Question</h3>
        </div>
        <div class = "panel-body">
            <form class = "form-horizontal" method="post" action = "<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/questions/create.php">

                <?php echo $_smarty_tpl->getSubTemplate ('questions/partials/question_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <div class = "form-group">
                    <div class = "col-sm-3 col-sm-offset-3">
                        <button class = "btn btn-primary" type = "submit">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
