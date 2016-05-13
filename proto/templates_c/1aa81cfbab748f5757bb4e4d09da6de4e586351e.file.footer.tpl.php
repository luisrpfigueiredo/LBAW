<?php /* Smarty version Smarty-3.1.15, created on 2016-05-13 01:34:34
         compiled from "/home/vagrant/feup/LBAW/proto/templates/common/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148944856757352f2adb3c19-62051390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1aa81cfbab748f5757bb4e4d09da6de4e586351e' => 
    array (
      0 => '/home/vagrant/feup/LBAW/proto/templates/common/footer.tpl',
      1 => 1461881441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148944856757352f2adb3c19-62051390',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SUCCESS_MESSAGES' => 0,
    'message' => 0,
    'ERROR_MESSAGES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57352f2add9472_58513994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57352f2add9472_58513994')) {function content_57352f2add9472_58513994($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
    <div class = "alert alert-success alert-dismissible" role = "alert">
        <button type = "button" class = "close" data-dismiss = "alert" aria-label = "Close">
            <span aria-hidden = "true">&times;</span></button>
        <strong>Success!</strong> <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

    </div>
<?php } ?>
<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
    <div class = "alert alert-danger alert-dismissible" role = "alert">
        <button type = "button" class = "close" data-dismiss = "alert" aria-label = "Close">
            <span aria-hidden = "true">&times;</span></button>
        <strong>Danger!</strong> <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

    </div>
<?php } ?>
<br class = "clearfix">
</body>
</html><?php }} ?>
