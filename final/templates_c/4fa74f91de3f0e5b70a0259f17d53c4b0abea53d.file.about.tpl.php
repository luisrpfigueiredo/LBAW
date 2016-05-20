<?php /* Smarty version Smarty-3.1.15, created on 2016-05-13 23:43:16
         compiled from "/home/vagrant/feup/LBAW/final/templates/about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43969055557366694a48094-19243486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fa74f91de3f0e5b70a0259f17d53c4b0abea53d' => 
    array (
      0 => '/home/vagrant/feup/LBAW/final/templates/about.tpl',
      1 => 1463182596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43969055557366694a48094-19243486',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57366694aac246_73061466',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57366694aac246_73061466')) {function content_57366694aac246_73061466($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class = "container">
    <<?php ?>?php render('breadcrumb') ?<?php ?>>

    <div class = "panel panel-default">
        <div class = "panel-heading">
            <h3 class = "panel-title">About Us</h3>
        </div>
        <div class = "panel-body">
            <p>
                This project is intended for the specification, development and promotion of an information system available through the Web to manage questions and their respective answers in a collaborative environment.
            </p>
            <p>
                Users can hereby share their knowledge , thus creating up one self-help community.
            </p>
            <p>
                The system must first enable registration and user authentication , as well as a user -registration . The system should also provide information loading facilities of user questions , charging answers to questions from users , per-user research facilities (eg list all the questions and answers made ​​by a user ) and features of evaluation questions and answers ( assign a rating to the question and responses by votes) .
            </p>
            <p>
                There must be registered common- use profiles that may consult the information and register your questions , as well as add answers to existing questions . Can additionally add your vote ( positive or negative) the questions to which they have access. There should also be management profiles that have all access privileges. Administrators have operating privileges , information entry privileges on the system and modification of non-administrator user profiles ( remove the user , banning temporarily promote administrator).
            </p>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
