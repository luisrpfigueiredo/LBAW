<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/admin/manageAnswers.php');


PagePermissions::create(['admin'])->check();

$query = $_COOKIE['answersQueryAdmin'];
if(!isset($query)) {
    $query = "";
}

if (isset($_POST['search_query'])) //Override cookie because new search entry
    $query = $_POST['search_query'];

$cookie_name = "answersQueryAdmin";
$cookie_value = $query;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

$answers = answerSearchAdmin($query);

$smarty->assign('query', $query);
$smarty->assign('answers', $answers);

$smarty->display('admin/manageAnswers.tpl');