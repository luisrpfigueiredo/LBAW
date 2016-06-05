<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/questions.php');
include_once($BASE_DIR . 'database/tags.php');

// TODO OWNED PERMISSION
PagePermissions::create('auth')->check();

validateInput();
$question_id = $_POST['question_id'];
$data = [

    'body'        => $_POST['body']
];
try {
    $conn->beginTransaction();

    editAnswer($data);

    $conn->commit();


    redirect('pages/questions/details.php?question=' . $question_id);

} catch (PDOexception $e) {
    dd($e->getMessage());
    $_SESSION['error_messages'][] = 'Answer edition failed.';

    $_SESSION['form_values'] = $_POST;
}

back();