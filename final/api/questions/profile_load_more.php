<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/questions.php');

PagePermissions::create('auth')->check();

if (!isset($_GET['user_id']) || !is_numeric($_GET['page'])) {
    echo "Invalid Params";
    exit();
}

if (!isset($_GET['page']) || !is_numeric($_GET['page'])) {
    echo "Invalid Params";
    exit();
}

$user_id = $_GET['user_id'];
$page = $_GET['page'];

$questions = getQuestionsOfUser($user_id, $page);

echo json_encode($questions);
