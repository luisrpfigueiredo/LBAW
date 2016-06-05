<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/questions.php');
include_once($BASE_DIR . 'database/votes.php');
include_once($BASE_DIR . 'database/answers.php');
include_once($BASE_DIR . 'database/users.php');

$questions = questionsFromIds([intval($_GET['question'])]);
$question = $questions[0];

$answers = answersFromQuestion(intval( $_GET['question']));

foreach ($answers as $answer)
{
    $answerUsernames[$answer['id']] = getUsernameFromUserID($answer['user_id']);
   $resultadoA[$answer['id']] = verifyVote(array($_SESSION['user']['id'],$answer['id'],'a'));


}

$resultadoQ = verifyVote(array($_SESSION['user']['id'],$question['id'],'q'));

$smarty->assign('answers', $answers);
$smarty->assign('question', $question);

$smarty->assign('resultadoA', $resultadoA);
$smarty->assign('resultadoQ', $resultadoQ);

$smarty->assign('answerUsernames', $answerUsernames);

$smarty->display('questions/details.tpl');
