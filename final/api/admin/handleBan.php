<?php
include_once($BASE_DIR . 'database/manageUsers.php');

http_response_code(200);
    echo "123";

    $userID = $_POST['userID'];
    if($userID == null){
        $response['error'] = 'No ID supplied';
        echo json_encode($response);
    }

    if (userIsBanned($_POST['data']))
        unbanUser($userID);
    else banUser([$userID, $_SESSION['user']['id'], '1987-04-29 13:25:05']);

    $response['numberBans'] = getUserBanCount($userID);
    echo json_encode($response);
