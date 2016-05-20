<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/questions.php');
include_once($BASE_DIR . 'database/tags.php');

PagePermissions::create('auth')->check();

validateInput();

$data = [
    ':user_id' => auth_user('id'),
    ':title'   => $_POST['title'],
    ':body'    => $_POST['body']
];

$tags = $_POST['tags'];

try {
    $conn->beginTransaction();

    $question_id = createQuestion($data);
    syncTags($question_id, $tags);

    $conn->commit();


    redirect('pages/questions/details.php?question=' . $question_id);

} catch (PDOexception $e) {
    dd($e->getMessage());
    $_SESSION['error_messages'][] = 'Question creation failed.';

    $_SESSION['form_values'] = $_POST;
}

back();

function validateInput()
{
    if (!$_POST['title'] || !$_POST['body']) {
        $_SESSION['error_messages'][] = 'Title and description are required';
        $_SESSION['form_values'] = $_POST;
        back();
    }

    if (!$_POST['tags'] || !is_array($_POST['tags'])) {
        $_SESSION['error_messages'][] = 'Tags are not correct';
        $_SESSION['form_values'] = $_POST;
        back();
    }
    $tags = $_POST['tags'];
    foreach ($tags as $tag) {
        if (strlen($tag) > 10) {
            $_SESSION['error_messages'][] = 'Tags are not longer than 10 characters';
            $_SESSION['form_values'] = $_POST;
            back();
        }
    }
}
