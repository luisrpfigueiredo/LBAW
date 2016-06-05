<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/questions.php');
include_once($BASE_DIR . 'database/tags.php');
include_once($BASE_DIR . 'database/answers.php');

PagePermissions::create('auth')->check();

validateInput();
$data = [
    'user_id' => auth_user('id'),
    'question_id'   => intval($_POST['question_id']),
    'body'    => $_POST['body']
];


try {

    $conn->beginTransaction();
    $question_id = createAnswer($data);
    $conn->commit();

    redirect('pages/questions/details.php?question=' . $question_id);

} catch (PDOexception $e) {
    dd($e->getMessage());
    $_SESSION['error_messages'][] = 'Answer creation failed.';

    $_SESSION['form_values'] = $_POST;
}

back();

function validateInput()
{
    if (!$_POST['body']) {
        $_SESSION['error_messages'][] = 'A answers body is required';
        $_SESSION['form_values'] = $_POST;
        back();
    }

}
