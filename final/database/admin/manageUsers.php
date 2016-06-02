<?php

function getUsersIDs($searchString){
	if(filter_var($searchString, FILTER_VALIDATE_EMAIL)){
		 $ids = searchByEmail($searchString);
	} else {
		$ids = searchByName($searchString);
	}

	return $ids;
}

function searchByName($username){
	global $conn;
	$username = '%'.$username.'%';
	$stmt = $conn->prepare("SELECT id FROM users WHERE username LIKE ?");
	$stmt->execute([$username]);
	$rows = $stmt->fetchAll();

	return $rows;
}

function searchByEmail($email){
	global $conn;
	$stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
	$stmt->execute([$email]);
	$rows = $stmt->fetchAll();

	return $rows;
}


function getUserPersonalInfo($user_id) {
	global $conn;
	$stmt = $conn->prepare("SELECT username, email, type, created_at FROM users WHERE users.id = ?");
	$stmt->execute([$user_id]);
	$rows = $stmt->fetch();

	return $rows;

}

function getUserWarningCount($user_id){
	global $conn;
	$stmt = $conn->prepare("SELECT COUNT(*) AS warnings FROM warnings WHERE user_id = ?");
	$stmt->execute([$user_id]);
	$rows = $stmt->fetch();

	return $rows;
}

function getUserBanCount($user_id){
	global $conn;
	$stmt = $conn->prepare("SELECT COUNT(*) AS bans FROM bans WHERE user_id = ?");
	$stmt->execute([$user_id]);
	$rows = $stmt->fetch();

	return $rows;
}

function banUser($user_id, $creator_id){

	return;
}

