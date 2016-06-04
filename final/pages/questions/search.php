<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/questions.php');

include_once($BASE_DIR . 'database/answers.php');

if (!isset($_POST['search_query'])) {
    header('location: ' . $BASE_URL);
    exit();
}

$query = $_POST['search_query'];
$questions = questionSearch($query);

$smarty->assign('query', $query);
$smarty->assign('questions', $questions);
$smarty->display('questions/search_results.tpl');
