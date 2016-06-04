<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/questions.php');
include_once($BASE_DIR . 'database/votes.php');

$user = auth_user();
$loggedIn = false;
if($user) {
    $loggedIn = true;
}

$questions = questionsFromIds(array($_GET['question']));
$question = $questions[0];
$user = $_GET['user'];

$smarty->assign('user', $user);
$smarty->assign('logged', $loggedIn);
$smarty->assign('question', $question);
$smarty->display('questions/details.tpl');
