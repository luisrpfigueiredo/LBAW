<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/users.php');

PagePermissions::create('auth')->check();

$smarty->display('users/authentication.tpl');
