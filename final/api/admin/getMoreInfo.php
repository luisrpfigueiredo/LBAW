<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/admin/manageUsers.php');

$userID = intval($_POST['userID']);
if($userID == null){
    $response['error'] = 'No ID supplied';
    echo json_encode($response);
    exit();
}

$username = getUsernameFromUserID($userID);
$bannedUntil = getBanExpirationDateFromUserID($userID);
if($bannedUntil == null)
    $bannedUntil = "";
$numberUserQuestions = getNumberUserQuestions($userID);
$numberUserAnswers = getNumberUserAnswers($userID);


$response['username']  = $username;
$response['bannedUntil'] = $bannedUntil;
$response['numberQuestions'] = $numberUserQuestions;
$response['numberAnswers'] = $numberUserAnswers;
echo json_encode($response);