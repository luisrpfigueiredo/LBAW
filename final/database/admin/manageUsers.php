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
	$limit = 20;
	$username = '%'.$username.'%';
	$stmt = $conn->prepare("SELECT id FROM users WHERE username LIKE :username LIMIT :limit");
	$stmt->execute(['username' => $username, 'limit' => $limit]);
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

function getUsernameFromUserID($userID) {
	global $conn;
	$stmt = $conn->prepare("SELECT username AS username FROM users WHERE id = :userID");
	$stmt->execute(['userID' => $userID]);
	return $stmt->fetch()['username'];
}
function getUserPersonalInfo($user_id) {
	global $conn;
	$stmt = $conn->prepare("SELECT username, email, type, created_at FROM users WHERE users.id = ?");
	$stmt->execute([$user_id]);
	$rows = $stmt->fetch();

	return $rows;

}

function getUserBanCount($user_id){
	global $conn;
	$stmt = $conn->prepare("SELECT COUNT(*) AS bans FROM bans WHERE user_id = ?");
	$stmt->execute([$user_id]);
	$rows = $stmt->fetch();

	return $rows['bans'];
}

function userIsBanned($user_id){
	global $conn;
	$stmt = $conn->prepare("SElECT COUNT(*) AS number FROM bans WHERE user_id = ? AND expired_at::date > CURRENT_TIMESTAMP::date");
	$stmt->execute([$user_id]);

	$result = intval($stmt->fetch()['number']);


	if(intval($result) > 0) {
		return true;
	} else {
		return false;
	}
}

function getBanExpirationDateFromUserID($userID){
	global $conn;
	$stmt = $conn->prepare("SElECT expired_at FROM bans WHERE user_id = ? AND expired_at::date > CURRENT_TIMESTAMP::date");
	$stmt->execute([$userID]);

	return $stmt->fetch()['expired_at'];
}

function banUser($data){
	global $conn;
	$stmt = $conn->prepare("INSERT INTO bans(user_id, creator_id, notes, expired_at) VALUES (?, ?, ?, ?)");
	$stmt->execute($data);

	return;
}

function unbanUser($userID, $notes){
	global $conn;
	$stmt = $conn->prepare("UPDATE bans SET expired_at=CURRENT_TIMESTAMP, notes=:notes WHERE user_id = :userID AND expired_at > CURRENT_TIMESTAMP");
	$stmt->execute(['notes' => $notes, 'userID' => $userID]);

	return;
}

function getBanNotesByUserID($user_id){
	global $conn;
	$stmt = $conn->prepare("SElECT notes AS notes FROM bans WHERE user_id = ? AND expired_at::date > CURRENT_TIMESTAMP::date");
	$stmt->execute([$user_id]);

	return $stmt->fetch()['notes'];
}

function updateUserType($userID, $userType) {
	global $conn;
	$stmt = $conn->prepare("UPDATE users SET type=:userType WHERE id = :userID");
	$stmt->execute(['userType' => $userType, 'userID' => $userID]);

	return;
}

function getUserType($userID) {
	global $conn;
	$stmt = $conn->prepare("SElECT type AS type FROM users WHERE id = ?");
	$stmt->execute([$userID]);

	return $stmt->fetch()['type'];
}

function getNumberUserQuestions($userID) {
	global $conn;
	$stmt = $conn->prepare("SElECT COUNT(*) AS number FROM questions WHERE user_id = ?");
	$stmt->execute([$userID]);

	return $stmt->fetch()['number'];
}

function getNumberUserAnswers($userID) {
	global $conn;
	$stmt = $conn->prepare("SElECT COUNT(*) AS number FROM answers WHERE user_id = ?");
	$stmt->execute([$userID]);

	return $stmt->fetch()['number'];
}
