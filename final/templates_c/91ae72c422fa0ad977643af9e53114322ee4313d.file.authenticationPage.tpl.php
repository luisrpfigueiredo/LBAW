<?php /* Smarty version Smarty-3.1.15, created on 2016-04-28 19:16:57
         compiled from "/opt/lbaw/lbaw1513/public_html/proto/templates/users/authenticationPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54619847457224128ca1c32-68627237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91ae72c422fa0ad977643af9e53114322ee4313d' => 
    array (
      0 => '/opt/lbaw/lbaw1513/public_html/proto/templates/users/authenticationPage.tpl',
      1 => 1461863761,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54619847457224128ca1c32-68627237',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57224128d460b5_57638382',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57224128d460b5_57638382')) {function content_57224128d460b5_57638382($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class = "container">

    <div class = "col-sm-8 col-sm-offset-2">

        <!-- TABS START -->
        <ul class = "nav nav-tabs">
            <li class = "active">
                <a href = "#login" aria-controls = "login" role = "tab" data-toggle = "tab">Log In</a>
            </li>
            <li>
                <a href = "#register" aria-controls = "register" role = "tab" data-toggle = "tab">Sign Up</a>
            </li>
        </ul>
        <!-- END TABS -->

        <!-- TAB CONTENT -->
        <div class = "tab-content">

            <!-- LOGIN TAB PANEL -->
            <div id = "login" role = "tabpanel" class = "tab-pane active container-white">
                <form class = "form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post" enctype="multipart/form-data">
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
                            <input type="submit" class = "btn btn-primary" value = "Log In"></button>
                        </div>
                        <div class = "col-sm-5 text-right">
                            <a href = "" class = "small" data-toggle = "modal" data-target = "#forgotPassword"> Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END LOGIN TAB PANEL -->

            <!-- REGISTER TAB PANEL -->
            <div role = "tabpanel" class = "tab-pane container-white" id = "register">
                <form class = "form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/register.php" method="post" enctype="multipart/form-data">

                    <div class = "form-group">
                        <label for = "username" class = "col-sm-3 control-label">Username</label>
                        <div class = "col-sm-8">
                            <input type = "text" name = "username" class = "form-control" placeholder = "Username" required = "" autofocus = "" autocomplete = "off"value="">
                    	</div>
                    </div>

                    <div class = "form-group">
                        <label for = "email" class = "col-sm-3 control-label">Email</label>
                        <div class = "col-sm-8">
                            <input type = "email" name = "email" class = "form-control" placeholder = "Email address" required = "" autofocus = "" autocomplete = "off" value="">
                        </div>
                    </div>

                    <div class = "form-group">
                        <label for = "password" class = "col-sm-3 control-label">Password</label>
                        <div class = "col-sm-8">
                            <input type = "password" name = "password" class = "form-control" placeholder = "Password" required = "" autocomplete = "off" value="">
                        </div>
                    </div>

                    <div class = "form-group">
                        <label for = "verify_password" class = "col-sm-3 control-label">Confirm Password</label>
                        <div class = "col-sm-8">
                            <input type = "password" name = "verify_password" class = "form-control" placeholder = "Confirm Password" required = "" autocomplete = "off" value="">
                        </div>
                    </div>

                    <div class = "form-group">
                        <div class = "col-sm-3 col-sm-offset-3">
                            <input type="submit" class = "btn btn-primary" value = "Register"></button>
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
