<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/admin/overview_admin.php');


PagePermissions::create(['admin'])->check();

$statistics = getSiteStatistics();

$smarty->assign('statistics', $statistics);


$smarty->display('admin/overview.tpl');