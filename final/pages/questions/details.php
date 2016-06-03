<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/users.php');
include_once($BASE_DIR . 'database/questions.php');
include_once($BASE_DIR . 'database/votes.php');

PagePermissions::create('auth')->check();

$user_id = auth_user('id');

if (isset($_GET['user'])) {
    $user_id = $_GET['user'];
}

//$profile = getProfile($user_id);
$questions = getQuestionsFromIds(array($_GET['question']));
$question = $questions[0];

$smarty->assign('question', $question;
$smarty->display('questions/details.tpl');
