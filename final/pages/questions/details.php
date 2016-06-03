<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/questions.php');
include_once($BASE_DIR . 'database/votes.php');

$questions = questionsFromIds(array($_GET['question']));
$question = $questions[0];

$smarty->assign('question', $question);
$smarty->display('questions/details.tpl');
