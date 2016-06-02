<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/admin/manageUsers.php');

    $userID = intval($_POST['userID']);
    if($userID == null){
        $response['error'] = 'No ID supplied';
        echo json_encode($response);
    }


    if (userIsBanned($userID) == true) {
        unbanUser($userID);
    } else {
        banUser([$userID, intval($_SESSION['user']['id']), '2050-04-29 13:25:05']);
    }

    $response['numberBans'] = getUserBanCount($userID)['bans'];
    echo json_encode($response);
