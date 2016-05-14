<?php /* Smarty version Smarty-3.1.15, created on 2016-05-14 00:06:43
         compiled from "/home/vagrant/feup/LBAW/final/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1602264556573666792fc8f7-94024636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1e8d2d47fd0fdd8cfa3a82f984f93dbc05ff4c6' => 
    array (
      0 => '/home/vagrant/feup/LBAW/final/templates/common/header.tpl',
      1 => 1463184397,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1602264556573666792fc8f7-94024636',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_573666793308e1_64344639',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'LOGGED_IN' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573666793308e1_64344639')) {function content_573666793308e1_64344639($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title>LBAW - Tidder</title>

    <meta charset = "UTF-8">
    <link rel = "shortcut icon" type = "image/png" href = "<<?php ?>?= resource('favicon.png') ?<?php ?>>"/>
    <link rel = "stylesheet" type = "text/css" href = "//fonts.googleapis.com/css?family=Open+Sans"/>


    <?php echo HTML::style('styles/bootstrap.min.css');?>

    <?php echo HTML::style('styles/bootstrap-changes.css');?>

    <?php echo HTML::style('styles/global-styles.css');?>

    <?php echo HTML::style("styles/searchResults.css");?>

    <?php echo HTML::style("styles/voting.css");?>

    <?php echo HTML::style('styles/select2.min.css');?>


    <?php echo HTML::script('jquery-2.2.1.min.js');?>

    <?php echo HTML::script('bootstrap.min.js');?>

    <?php echo HTML::script('select2.full.js');?>


</head>
<body>
<nav class = "navbar navbar-default">
    <div class = "container">
        <div class = "container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class = "navbar-header">
                <button type = "button" class = "navbar-toggle collapsed" data-toggle = "collapse" data-target = "#bs-example-navbar-collapse-1" aria-expanded = "false">
                    <span class = "sr-only">Toggle navigation</span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                </button>
                <a class = "navbar-brand" href = "<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
" style = "padding: 2px 0">
                    <img src = "<?php echo resource("logo.png");?>
" height = "100%">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class = "collapse navbar-collapse" id = "bs-example-navbar-collapse-1">
                <ul class = "nav navbar-nav navbar-right">

                    <?php if ($_smarty_tpl->tpl_vars['LOGGED_IN']->value) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ('common/menu_logged_in.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->getSubTemplate ('common/menu_logged_out.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php }?>

                    <form class = "navbar-form navbar-left" role = "search" method = "post" action = "<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/questions/search.php">
                        <div class = "form-group">
                            <input type = "text" class = "form-control navbar-search" placeholder = "Search" name = "search_query">
                        </div>

                        <a>
                            <button type = "submit" class = "search-submit">
                                <span class = "glyphicon glyphicon-search"></span>
                            </button>
                        </a>
                    </form>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </div>
</nav><?php }} ?>
