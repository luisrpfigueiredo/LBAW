<?php
include_once($BASE_DIR . 'lib/helpers/functions.php');
include_once($BASE_DIR . 'lib/helpers/Html.class.php');
include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');

$smarty = new Smarty;
$smarty->template_dir = $BASE_DIR . 'templates/';
$smarty->compile_dir = $BASE_DIR . 'templates_c/';
$smarty->assign('BASE_URL', $BASE_URL);

$smarty->assign('ERROR_MESSAGES', $_SESSION['error_messages']);
$smarty->assign('FIELD_ERRORS', $_SESSION['field_errors']);
$smarty->assign('SUCCESS_MESSAGES', $_SESSION['success_messages']);
$smarty->assign('FORM_VALUES', $_SESSION['form_values']);
$smarty->assign('USERNAME', $_SESSION['username']);

$_SESSION['logged_in'] = isset($_SESSION['logged_in'])?$_SESSION['logged_in']:false;
$smarty->assign('LOGGED_IN', $_SESSION['logged_in']);


unset($_SESSION['success_messages']);
unset($_SESSION['error_messages']);
unset($_SESSION['field_errors']);
unset($_SESSION['form_values']);