<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/questions.php');
include_once($BASE_DIR . 'database/votes.php');
include_once($BASE_DIR . 'database/answers.php');
include_once($BASE_DIR . 'database/users.php');

$questions = questionsFromIds([intval($_GET['question'])]);
$question = $questions[0];

$question_username = getUsernameFromUserID(intval($question['user_id']));


$smarty->assign('question', $question);

$answers = answersFromQuestion(intval( $_GET['question']));

foreach ($answers as $answer)
{
   $answer_username[$answer['id']] = getUsernameFromUserID($answer['user_id']);
}
$smarty->assign('answers', $answers);
$smarty->assign('answer_username', $answer_username);
$smarty->assign('question_username', $question_username);

$smarty->display('questions/details.tpl');



