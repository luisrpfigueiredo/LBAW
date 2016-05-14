<?php /* Smarty version Smarty-3.1.15, created on 2016-05-14 00:41:28
         compiled from "/home/vagrant/feup/LBAW/final/templates/questions/partials/question_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40475481457366c41cc0454-99053102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19f4ba1cfcd76b2cfdda80a6aa978c5e272adda4' => 
    array (
      0 => '/home/vagrant/feup/LBAW/final/templates/questions/partials/question_form.tpl',
      1 => 1463186485,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40475481457366c41cc0454-99053102',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57366c41cdac85_54413278',
  'variables' => 
  array (
    'question' => 0,
    'question_tags' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57366c41cdac85_54413278')) {function content_57366c41cdac85_54413278($_smarty_tpl) {?><div class = "form-group">
    <label for = "title" class = "col-sm-3 control-label">Title</label>
    <div class = "col-sm-8">
        <input type = "text" name = "title" class = "form-control" placeholder = "Title" required
               value = "<?php echo old('title',$_smarty_tpl->tpl_vars['question']->value['title']);?>
">
    </div>
</div>

<div class = "form-group">
    <label for = "username" class = "col-sm-3 control-label">Description</label>
    <div class = "col-sm-8">
        <textarea class = "form-control" rows = "5" placeholder = "Description" name = "body"><?php echo old('body',$_smarty_tpl->tpl_vars['question']->value['body']);?>
</textarea>
    </div>
</div>


<div class = "form-group">
    <label for = "title" class = "col-sm-3 control-label">Tags</label>
    <div class = "col-sm-8">
        <select multiple name = "tags[]" class = "form-control tagable">
            <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = old('tags',$_smarty_tpl->tpl_vars['question_tags']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                <option value = "<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</option>
            <?php } ?>
        </select>
    </div>
</div>

<script type = "text/javascript">
    $(".tagable").select2({
        tags: true,
        placeholder: 'Type Tag',
    });
</script><?php }} ?>
