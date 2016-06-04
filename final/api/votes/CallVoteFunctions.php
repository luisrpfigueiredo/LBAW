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

	if( !is_array($_POST['arguments']) || (count($_POST['arguments']) != 4) ) {
    	$aResult['error'] = 'Error in arguments!';
    } else {

		$user_id = $_POST['arguments'][0];
		$votable_id = $_POST['arguments'][1];
		$votable_type = $_POST['arguments'][2];
		$value = $_POST['arguments'][3];

		switch($_POST['functionname']) {

			case 'newVote':	               
            	$data = array($user_id, $votable_id, $votable_type, $value);
                $aResult['result'] = newVote($data);
                break;

	        case 'getVotesFromUserId':	            
                $aResult['result'] = getVotesFromUserId($user_id);	                
                break;

            case 'getVotesFromVotable':	               
            	$data = array($votable_id, $votable_type);
                $aResult['result'] = getVotesFromVotable($data);
                break;

            case 'verifyVote':	               
            	$data = array($user_id, $votable_id, $votable_type);
                $aResult['result'] = verifyVote($data);
                break;

            case 'votableNumber':	               
            	$data = array($votable_id, $votable_type);
                $aResult['result'] = votableNumber($data);
                break;

            case 'changeVote':	               
            	$data = array($value, $user_id, $votable_id, $votable_type);
                $aResult['result'] = changeVote($data);
                break;

            case 'getVotes':	            
                $aResult['result'] = getVotes($user_id);	                
                break;

            default:
               $aResult['error'] = 'Not found function '.$_POST['functionname'].'!';
               break;
	    }
	}
}
echo json_encode($aResult);