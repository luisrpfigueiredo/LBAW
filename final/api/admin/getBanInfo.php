<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/admin/manageUsers.php');

$userID = intval($_POST['userID']);
if($userID == null){
    $response['error'] = 'No ID supplied';
    echo json_encode($response);
}

if (userIsBanned($userID) == true) {
    $response['isBanned'] = 'yes';
    $response['notes'] = getBanNotesByUserID($userID);
} else {
    $response['isBanned'] = 'no';
    $response['notes'] = "";
}

echo json_encode($response);
