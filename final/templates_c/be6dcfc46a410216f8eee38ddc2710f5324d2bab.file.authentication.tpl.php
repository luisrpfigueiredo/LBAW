<?php /* Smarty version Smarty-3.1.15, created on 2016-04-29 00:25:12
         compiled from "/home/vagrant/personal/LBAW/proto/templates/users/authentication.tpl" */ ?>
<?php /*%%SmartyHeaderCode:218873230572282ea354fc6-53743806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be6dcfc46a410216f8eee38ddc2710f5324d2bab' => 
    array (
      0 => '/home/vagrant/personal/LBAW/proto/templates/users/authentication.tpl',
      1 => 1461889510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '218873230572282ea354fc6-53743806',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_572282ea387163_47611409',
  'variables' => 
  array (
    'tab' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572282ea387163_47611409')) {function content_572282ea387163_47611409($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class = "container">

    <div class = "col-sm-8 col-sm-offset-2">

        <!-- TABS START -->
        <ul class = "nav nav-tabs">
            <li class = "<?php if ($_smarty_tpl->tpl_vars['tab']->value=='login') {?>active<?php }?>">
                <a href = "#login" aria-controls = "login" role = "tab" data-toggle = "tab">Log In</a>
            </li>
            <li class = "<?php if ($_smarty_tpl->tpl_vars['tab']->value=='register') {?>active<?php }?>">
                <a href = "#register" aria-controls = "register" role = "tab" data-toggle = "tab">Sign Up</a>
            </li>
        </ul>
        <!-- END TABS -->

        <!-- TAB CONTENT -->
        <div class = "tab-content">

            <!-- LOGIN TAB PANEL -->
            <div id = "login" role = "tabpanel" class = "tab-pane container-white <?php if ($_smarty_tpl->tpl_vars['tab']->value=='login') {?>active<?php }?>">
                <form class = "form-horizontal" action = "<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method = "post">
                    <div class = "form-group">
                        <label for = "username" class = "col-sm-3 control-label">Username</label>
                        <div class = "col-sm-8">
                            <input type = "text" name = "username" class = "form-control" placeholder = "Username" required = "" autofocus = "" autocomplete = "off">
                        </div>
                    </div>

                    <div class = "form-group">
                        <label for = "password" class = "col-sm-3 control-label">Password</label>
                        <div class = "col-sm-8">
                            <input type = "password" name = "password" class = "form-control" placeholder = "Password" required = "" autocomplete = "off">
                        </div>
                    </div>

                    <div class = "form-group">
                        <div class = "col-sm-3 col-sm-offset-3">
                            <input type = "submit" class = "btn btn-primary" value = "Log In"></button>
                        </div>
                        <div class = "col-sm-5 text-right">
                            <a href = "" class = "small" data-toggle = "modal" data-target = "#forgotPassword"> Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END LOGIN TAB PANEL -->

            <!-- REGISTER TAB PANEL -->
            <div role = "tabpanel" class = "tab-pane container-white <?php if ($_smarty_tpl->tpl_vars['tab']->value=='register') {?>active<?php }?>" id = "register">
                <form class = "form-horizontal" action = "<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/register.php" method = "post" enctype = "multipart/form-data">

                    <div class = "form-group">
                        <label for = "username" class = "col-sm-3 control-label">Username</label>
                        <div class = "col-sm-8">
                            <input type = "text" name = "username" class = "form-control" placeholder = "Username" required = "" autofocus = "" autocomplete = "off" value = "">
                        </div>
                    </div>

                    <div class = "form-group">
                        <label for = "email" class = "col-sm-3 control-label">Email</label>
                        <div class = "col-sm-8">
                            <input type = "email" name = "email" class = "form-control" placeholder = "Email address" required = "" autofocus = "" autocomplete = "off" value = "">
                        </div>
                    </div>

                    <div class = "form-group">
                        <label for = "password" class = "col-sm-3 control-label">Password</label>
                        <div class = "col-sm-8">
                            <input type = "password" name = "password" class = "form-control" placeholder = "Password" required = "" autocomplete = "off" value = "">
                        </div>
                    </div>

                    <div class = "form-group">
                        <label for = "verify_password" class = "col-sm-3 control-label">Confirm Password</label>
                        <div class = "col-sm-8">
                            <input type = "password" name = "verify_password" class = "form-control" placeholder = "Confirm Password" required = "" autocomplete = "off" value = "">
                        </div>
                    </div>

                    <div class = "form-group">
                        <div class = "col-sm-3 col-sm-offset-3">
                            <input type = "submit" class = "btn btn-primary" value = "Register"></button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END REGISTER TAB PANEL -->
        </div>
        <!-- END TAB CONTENT -->
    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
