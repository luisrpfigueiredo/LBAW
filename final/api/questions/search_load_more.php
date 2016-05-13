<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/questions.php');

if(!isset($_GET['query'])) {
    echo "Invalid Params";
    exit();
}
if (!isset($_GET['page']) || !is_numeric($_GET['page'])) {
    echo "Invalid Params";
    exit();
}

$questions = questionSearch($_GET['query'], $_GET['page']);

echo json_encode($questions);
