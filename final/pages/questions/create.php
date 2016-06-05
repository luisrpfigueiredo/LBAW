<?php

include_once('../../config/init.php');

PagePermissions::create('auth')->check();

$smarty->display('questions/create.tpl');
