<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/questions.php');
include_once($BASE_DIR . 'database/votes.php');
include_once($BASE_DIR . 'database/answers.php');

$questions = questionsFromIds([intval($_GET['question'])]);
$question = $questions[0];

$smarty->assign('question', $question);

$answers = answersFromQuestion(intval( $_GET['question']));
$smarty->assign('answers', $answers);

$smarty->display('questions/details.tpl');



