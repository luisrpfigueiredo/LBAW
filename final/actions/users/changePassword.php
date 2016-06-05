<?php
include_once('../../config/init.php');
include_once($BASE_DIR . "database/users.php");

foreach (glob($BASE_DIR . "lib/passwordHashingLib/*.php") as $filename) {
    include_once($filename);
}

PagePermissions::create('auth')->check();

if (!$_POST['password'] || !$_POST['verify_password']) {
    $_SESSION['error_messages'][] = 'All fields are mandatory';
    $_SESSION['form_values'] = $_POST;
    redirect('pages/users/profile.php');
}
$password = $_POST['password'];
$verify_password = $_POST['verify_password'];


if (strcmp($password, $verify_password) != 0) {
    $_SESSION['error_messages'][] = 'Passwords mismatch';
    redirect('pages/users/profile.php');
}

try {
    changePassword($password);
} catch (PDOexception $e) {

    $_SESSION['error_messages'][] = 'Error changing Passsword';

    redirect('pages/users/profile.php');
}

$_SESSION['success_messages'][] = 'Password changed successfully';
redirect('pages/users/profile.php');

