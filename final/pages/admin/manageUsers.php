<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/admin/manageUsers.php');


//PagePermissions::create(['auth', 'admin'])->check();


if (!isset($_POST['search_query']))
    $query = "";
else
    $query = $_POST['search_query'];

$searchIDs = getUsersIDs($query);

$userPersonalInfos = [];
$userWarningCounts = [];
$userBanCounts = [];

foreach($searchIDs as $user_id){
    $userPersonalInfos[$user_id["id"]] = getUserPersonalInfo($user_id["id"]);
    $userWarningCounts[$user_id["id"]] = getUserWarningCount($user_id["id"]);
    $userBanCounts[$user_id["id"]] = getUserBanCount($user_id["id"]);
}

$smarty->assign('query', $query);
$smarty->assign('usersIDs', $searchIDs);
$smarty->assign('userPersonalInfos', $userPersonalInfos);
$smarty->assign('userWarningCounts', $userWarningCounts);
$smarty->assign('userBanCounts', $userBanCounts);

$smarty->display('admin/manageUsers.tpl');