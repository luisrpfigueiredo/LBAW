<?php /* Smarty version Smarty-3.1.15, created on 2016-04-28 21:59:27
         compiled from "/home/vagrant/personal/LBAW/proto/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61249695357228229be8de5-08783105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2ffd72ec212270a4e5be4229f3d80a277547689' => 
    array (
      0 => '/home/vagrant/personal/LBAW/proto/templates/common/header.tpl',
      1 => 1461880735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61249695357228229be8de5-08783105',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57228229c1b084_93798107',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57228229c1b084_93798107')) {function content_57228229c1b084_93798107($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title>LBAW - Tidder</title>

    <meta charset = "UTF-8">
    <link rel = "shortcut icon" type = "image/png" href = "<<?php ?>?= resource('favicon.png') ?<?php ?>>"/>
    <link rel = "stylesheet" type = "text/css" href = "//fonts.googleapis.com/css?family=Open+Sans"/>


    <?php echo HTML::style('styles/bootstrap.min.css');?>

    <?php echo HTML::style('styles/bootstrap-changes.css');?>

    <?php echo HTML::style('styles/global-styles.css');?>


    <?php echo HTML::script('jquery-2.2.1.min.js');?>

    <?php echo HTML::script('bootstrap.min.js');?>


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
                <a class = "navbar-brand" href = "/" style = "padding: 2px 0">
                    <img src = "<?php echo resource("logo.png");?>
" height = "100%">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class = "collapse navbar-collapse" id = "bs-example-navbar-collapse-1">
                <ul class = "nav navbar-nav navbar-right">
                    <<?php ?>?php
                importHeaderRightComponent();
                ?<?php ?>>
                    <form class = "navbar-form navbar-left" role = "search">
                        <div class = "form-group">
                            <input type = "text" class = "form-control navbar-search" placeholder = "Search">
                        </div>
                        <a href = "?page=search">
                            <button type = "button" class = "search-submit">
                                <span class = "glyphicon glyphicon-search"></span>
                            </button>
                        </a>
                    </form>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </div>
</nav><?php }} ?>
