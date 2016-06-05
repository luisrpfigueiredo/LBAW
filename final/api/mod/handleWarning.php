<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/mod/manageUsers.php');

    $userID = intval($_POST['userID']);
    $notes = $_POST['notes'];

    if($userID == null){
        $response['error'] = 'No ID supplied';
        echo json_encode($response);
        exit();
    }

    if($notes == null){
        $notes = "No notes provided";
    }

    warnUser([$userID, intval($_SESSION['user']['id']), $notes]);

    $response['numberWarnings'] = getUserWarningCount($userID);
    echo json_encode($response);
