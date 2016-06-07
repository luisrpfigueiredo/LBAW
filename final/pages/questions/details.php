<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/questions.php');
include_once($BASE_DIR . 'database/votes.php');
include_once($BASE_DIR . 'database/answers.php');
include_once($BASE_DIR . 'database/users.php');

$questions = questionsFromIds([intval($_GET['question'])]);
$question = $questions[0];

$answers = answersFromQuestion(intval( $_GET['question']));

$smarty->assign('session_id',$_SESSION['user']['id']);
$smarty->assign('answers', $answers);
$smarty->assign('question', $question);

$smarty->display('questions/details.tpl');
