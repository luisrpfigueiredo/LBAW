<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/admin/manageUsers.php');

    $isBanned = $_POST['isBanned'];
    $userID = intval($_POST['userID']);
    if($userID == null){
        $response['error'] = 'No ID supplied';
        echo json_encode($response);
    }


    if ($isBanned == "yes") {
        unbanUser($userID);
    } else {
        banUser([$userID, intval($_SESSION['user']['id']), '2050-04-29 13:25:05']);
    }

    $response['numberBans'] = getUserBanCount($userID)['bans'];
    echo json_encode($response);
