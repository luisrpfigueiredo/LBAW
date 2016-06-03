<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/admin/manageUsers.php');


    $isBanned = $_POST['isBanned'];
    $userID = intval($_POST['userID']);
    $notes = $_POST['notes'];

    if($userID == null){
        $response['error'] = 'No ID supplied';
        echo json_encode($response);
    }

    if($isBanned == null){
        $response['error'] = 'No banned supplied';
        echo json_encode($response);
    }

    if($notes == null){
        $notes = "No notes provided";
    }

    if ($isBanned == "yes") {
        unbanUser($userID, $notes);
    } else {
        banUser([$userID, intval($_SESSION['user']['id']), $notes, '2050-04-29 13:25:05']);
    }

    $response['numberBans'] = getUserBanCount($userID)['bans'];
    echo json_encode($response);
