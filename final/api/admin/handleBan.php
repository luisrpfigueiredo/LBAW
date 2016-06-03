<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/admin/manageUsers.php');

    $isBanned = $_POST['isBanned'];
    $userID = intval($_POST['userID']);
    $notes = $_POST['notes'];
    $expirationTimestampUnix = intval($_POST['expirationDate']);

    if($expirationTimestampUnix == 0){
        $response['error'] = 'No Expiration Date supplied';
        echo json_encode($response);
        exit();
    }
    if($expirationTimestampUnix < 0 || ($expirationTimestampUnix - time()) <= 0){
        $response['error'] = 'The expiration date must be in the future';
        echo json_encode($response);
        exit();
    }

    if($userID == null){
        $response['error'] = 'No ID supplied';
        echo json_encode($response);
        exit();
    }

    if($isBanned == null){
        $response['error'] = 'No banned supplied';
        echo json_encode($response);
        exit();
    }

    if($notes == null){
        $notes = "No notes provided";
    }

    if ($isBanned == "yes") {
        unbanUser($userID, $notes);
    } else {
        $expirationDate = date('Y-m-d h:i:s', $expirationTimestampUnix);
        banUser([$userID, intval($_SESSION['user']['id']), $notes, $expirationDate]);
    }

    $response['numberBans'] = getUserBanCount($userID)['bans'];
    echo json_encode($response);
