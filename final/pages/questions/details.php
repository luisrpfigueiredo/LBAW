<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/questions.php');
include_once($BASE_DIR . 'database/votes.php');
include_once($BASE_DIR . 'database/answers.php');
include_once($BASE_DIR . 'database/users.php');

$questions = questionsFromIds([intval($_GET['question'])]);
$question = $questions[0];

//0 , 1 or -1
$question['voted'] = question_is_voted($question['id']);

$answers = answersFromQuestion(intval( $_GET['question']));
$answers = answers_are_voted($answers);

$smarty->assign('answers', $answers);
$smarty->assign('question', $question);

$smarty->display('questions/details.tpl');
