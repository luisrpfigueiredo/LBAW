<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/questions.php');
include_once($BASE_DIR . 'database/tags.php');

PagePermissions::create('auth')->check();

$questions = questionsFromIds($_GET['question']);
if (empty($questions)) {
    $_SESSION['error_messages'][] = 'Invalid Question.';
    redirect();
}
$question = $questions[0];

if (!ResourcePermission::isMine($question['user_id'])) {
    $_SESSION['error_messages'][] = 'You don\'t have access to this resource';
    redirect();
}

$tags = getTagsFromQuestion($question['id']);

$tags_format = [];
foreach ($tags as $tag) {
    $tags_format[] = $tag['tag'];
}

$smarty->assign('question', $question);
$smarty->assign('question_tags', $tags_format);

$smarty->display('questions/edit.tpl');
