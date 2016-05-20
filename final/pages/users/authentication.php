<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/users.php');

PagePermissions::create('guest')->check();

$tab = 'login';
if (isset($_GET['tab']) && $_GET['tab'] == 'register') {
    $tab = 'register';
}

$smarty->assign('tab', $tab);
$smarty->display('users/authentication.tpl');
