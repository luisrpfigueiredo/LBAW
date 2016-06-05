<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/users.php');

$username = $_POST['username'];
if($username == null){
    $response['error'] = 'No username supplied';
    echo json_encode($response);
    exit();
}
$response['id'] = getUserFromUsername($username)['id'];

echo json_encode($response);

