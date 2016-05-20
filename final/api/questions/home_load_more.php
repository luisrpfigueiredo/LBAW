<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/overview_questions.php');

$tabs = [
    'created' => 'lastCreated',
    'updated' => 'lastUpdated',
    'week'    => 'lastWeek',
    'month'   => 'lastMonth',
];

if (!isset($_GET['tab']) && !array_key_exists($_GET['tab'], $tabs)) {
    echo "Invalid Params";
    exit();
}
if (!isset($_GET['page']) || !is_numeric($_GET['page'])) {
    echo "Invalid Params";
    exit();
}

$questions = call_user_func($tabs[$_GET['tab']], $_GET['page']);

echo json_encode($questions);
