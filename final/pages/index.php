<?php

include_once('../config/init.php');
include_once($BASE_DIR . 'database/overview_questions.php');

$questions = lastCreated();

$smarty->assign('questions', $questions);
$smarty->display('index.tpl');