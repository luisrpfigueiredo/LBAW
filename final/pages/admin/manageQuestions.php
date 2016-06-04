<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/admin/manageQuestions.php');


PagePermissions::create(['admin'])->check();

$query = $_COOKIE['questionsQueryAdmin'];
if(!isset($query)) {
    $query = "";
}

if (isset($_POST['search_query'])) //Override cookie because new search entry
    $query = $_POST['search_query'];

$cookie_name = "questionsQueryAdmin";
$cookie_value = $query;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

$questions = questionSearchAdmin($query);

$smarty->assign('query', $query);
$smarty->assign('questions', $questions);

$smarty->display('admin/manageQuestions.tpl');