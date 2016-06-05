<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/users.php');
include_once($BASE_DIR . 'database/questions.php');

PagePermissions::create('auth')->check();

$user_id = auth_user('id');
if (isset($_GET['user'])) {
    $user_id = $_GET['user'];
}
var_dump ($user_id);
$profile = getProfile($user_id);
var_dump ($profile);
$questions = getQuestionsOfUser($user_id);

$smarty->assign('user', $profile);
$smarty->assign('questions', $questions);
$smarty->display('users/profile.tpl');
