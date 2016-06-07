<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/answers.php');

// TODO OWNED PERMISSION
PagePermissions::create('auth')->check();

$answer_id = $_POST['answer_id'];
$body = $_POST['body'];
$answers = answersFromIds([$answer_id]);
$answer = $answers[0];

if (!answer_is_mine($answer)) {
    $_SESSION['error_messages'][] = 'No permissions!';
    redirect();
}

try {
    editAnswer($answer_id, $body);
    redirect('pages/questions/details.php?question=' . $answer['question_id']);

} catch (PDOexception $e) {
    dd($e->getMessage());
    $_SESSION['error_messages'][] = 'Answer edition failed.';

    $_SESSION['form_values'] = $_POST;
}

back();