<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/answers.php');

PagePermissions::create('auth')->check();

$answers = answersFromIds($_GET['answer']);
if (empty($answers)) {
    $_SESSION['error_messages'][] = 'Invalid Question.';
    redirect();
}
$answer = $answers[0];

if (!ResourcePermission::isMine($answer['user_id'])) {
    $_SESSION['error_messages'][] = 'You don\'t have access to this resource';
    redirect();
}

$smarty->assign('answer', $answer);

$smarty->display('answers/edit.tpl');
