<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/admin/manageUsers.php');

$userID = intval($_POST['userID']);

if($userID == null){
    $response['error'] = 'No ID supplied';
    echo json_encode($response);
    exit();
}

$oldType = getUserType($userID);

if($oldType !== 'mod' && $oldType !== 'user'){
    $response['error'] = 'Wrong permission level';
    echo json_encode($response);
    exit();
}

$newType = "";
if($oldType == "user")
    $newType = "mod";
else $newType = "user";

updateUserType($userID, $newType);

$response['userType'] = $newType;

echo json_encode($response);