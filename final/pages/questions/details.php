<?php

include_once('../../config/init.php');
$question = $_GET['question'];

$smarty->assign('question', $question);
$smarty->display('questions/details.tpl');
