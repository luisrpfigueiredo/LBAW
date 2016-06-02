<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/admin/manageUsers.php');


//PagePermissions::create(['auth', 'admin'])->check();

$searchIDs = getUsersIDs("abcde");

$userPersonalInfos = [];
$userWarningCounts = [];
$userBanCounts = [];

foreach($searchIDs as $user_id){
    $userPersonalInfos[$user_id["id"]] = getUserPersonalInfo($user_id["id"]);
    $userWarningCounts[$user_id["id"]] = getUserWarningCount($user_id["id"]);
    $userBanCounts[$user_id["id"]] = getUserBanCount($user_id["id"]);
}

$smarty->assign('usersIDs', $searchIDs);
$smarty->assign('userPersonalInfos', $userPersonalInfos);
$smarty->assign('userWarningCounts', $userWarningCounts);
$smarty->assign('userBanCounts', $userBanCounts);

$smarty->display('admin/manageUsers.tpl');