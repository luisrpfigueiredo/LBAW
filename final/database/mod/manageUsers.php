<?php

function warnUser($data){
    global $conn;
    $stmt = $conn->prepare("INSERT INTO warnings(user_id, creator_id, notes) VALUES (?, ?, ?)");
    $stmt->execute($data);

    return;
}

function getUserWarningCount($user_id){
    global $conn;
    $stmt = $conn->prepare("SELECT COUNT(*) AS warnings FROM warnings WHERE user_id = ?");
    $stmt->execute([$user_id]);
    $rows = $stmt->fetch();

    return $rows['warnings'];
}