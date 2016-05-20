<?php /* Smarty version Smarty-3.1.15, created on 2016-04-28 22:14:36
         compiled from "/home/vagrant/personal/LBAW/proto/templates/common/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144062747757228229cc63b2-44110027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a21b84d512dda98694b3bf0f51ecfba86928b28' => 
    array (
      0 => '/home/vagrant/personal/LBAW/proto/templates/common/footer.tpl',
      1 => 1461881441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144062747757228229cc63b2-44110027',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57228229ccd3d5_99435960',
  'variables' => 
  array (
    'SUCCESS_MESSAGES' => 0,
    'message' => 0,
    'ERROR_MESSAGES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57228229ccd3d5_99435960')) {function content_57228229ccd3d5_99435960($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
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
