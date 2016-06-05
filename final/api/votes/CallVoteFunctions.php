<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/votes.php');
header('Content-Type: application/json');

//PagePermissions::create('auth')->check();

$aResult = array();

if( !isset($_POST['functionname']) ) {
    $aResult['error'] = 'No function name!';
}

if( !isset($_POST['arguments']) ) {
    $aResult['error'] = 'No function arguments!';
}

if( !isset($aResult['error']) ) {

    if( !is_array($_POST['arguments']) || (count($_POST['arguments']) != 3) ) {
        $aResult['error'] = 'Error in arguments!';
    } else {
        $user_id = $_SESSION['user']['id'];
        $votable_id = $_POST['arguments'][0];
        $votable_type = $_POST['arguments'][1];
        $value = $_POST['arguments'][2];

        switch($_POST['functionname']) {

            case 'newVote':
                $data = array($user_id, $votable_id, $votable_type, $value);
                $aResult['result'] = newVote($data);
                if($votable_type === 'q'){
                    $aResult['result'] = getRatingQuestion($votable_id);
                } else {
                    $aResult['result'] = getRatingAnswer($votable_id);
                }
                break;
            case 'verifyVote':
                $data = array($user_id, $votable_id, $votable_type);
                $aResult['result'] = verifyVote($data);
                break;
            case 'changeVote':
                $data = array($value, $user_id, $votable_id, $votable_type);
                $aResult['result'] = changeVote($data);
                if($votable_type === 'q'){
                    $aResult['result'] = getRatingQuestion($votable_id);
                } else {
                    $aResult['result'] = getRatingAnswer($votable_id);
                }
                break;
            default:
                $aResult['error'] = 'Not found function '.$_POST['functionname'].'!';
                break;
        }
    }
}
echo json_encode($aResult);