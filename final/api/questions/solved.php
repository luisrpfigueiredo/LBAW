<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/questions.php');

PagePermissions::create('auth')->check();

if (!isset($_GET['question']) || !is_numeric($_GET['question'])) {
    echo "Invalid Params";
    exit();
}

$questions = questionsFromIds([$_GET['question']]);

if (!question_is_mine($questions[0])) {
    echo "No permissions";
    exit();
}

questionMarkSolved($questions[0]['id']);

echo json_encode(['status' => true]);
