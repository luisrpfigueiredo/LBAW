<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/users.php');

$username = $_POST['username'];
if($userID == null){
    $response['error'] = 'No ID supplied';
    echo json_encode($response);
    exit();
}
$response['ID'] == getUserFromUsername($username)['username'];

echo json_encode($response);

