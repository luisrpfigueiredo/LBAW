<?php

include_once('../config/init.php');
include_once($BASE_DIR . 'database/overview_questions.php');

$tabs = [
    ['created', 'Latest Questions'],
    ['updated', 'Recently Updated'],
    ['week', 'Past Week'],
    ['month', 'Past Month']
];

$questions[] = lastCreated();
$questions[] = lastUpdated();
$questions[] = lastWeek();
$questions[] = lastMonth();

$smarty->assign('tabs', $tabs);
$smarty->assign('questionsArray', $questions);
$smarty->display('index.tpl');