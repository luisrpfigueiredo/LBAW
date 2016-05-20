<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/users.php');

PagePermissions::create('auth')->check();

$user_id = auth_user('id');

if(isset($_GET['user']))
    $user_id = $_GET['user'];

$profile = getProfile($user_id);

$smarty->assign('user', $profile);
$smarty->display('users/profile.tpl');
