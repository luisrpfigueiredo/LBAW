<?php

/*include_once('../../config/init.php');
include_once($BASE_DIR . 'database/votes.php');
include_once($BASE_DIR . 'database/tags.php');*/

function newVote($data)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO votes(user_id,votable_id, votable_type, value) VALUES (?, ?, ?, ?)");
    $stmt->execute(array($data['user_id'], $data['votable_id'], $data['votable_type'], $data['value']));
}

function getVotesFromUserId($user_id)
{
    global $conn;
    $stmt = $conn->prepare("SELECT user_id,votable_id, votable_type, value 
                            FROM votes 
                            WHERE user_id = ?");
    $stmt->execute(array($user_id));

    return $stmt->fetchAll();
}

function getVotesFromVotable($data)
{
    global $conn;
    $stmt = $conn->prepare("SELECT user_id,votable_id, votable_type, value 
                            FROM votes 
                            WHERE (votable_id = ? AND votable_type = ?)");
    $stmt->execute(array($data['votable_id'], $data['votable_type']));

    return $stmt->fetchAll();
}

function verifyVote($data)
{
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM votes 
                            WHERE (user_id = ? AND votable_id = ? AND votable_type = ?)");
    $stmt->execute(array($data['user_id'], $data['votable_id'], $data['votable_type']));
    $votes = $stmt->fetchAll();

    if (sizeof($votes) != 1) {
        return false; // Não existe
    } else {
        return true; // Existe
    }
}

function votableNumber($data)
{
    global $conn;
    $stmt = $conn->prepare("SELECT SUM(value) 
                            FROM votes
                            WHERE (votable_id = ? AND votable_type = ?)");
    $stmt->execute(array($data['votable_id'], $data['votable_type']));
    return $stmt->fetchAll();
}

function changeVote($data)
{
    global $conn;
    $stmt = $conn->prepare("UPDATE votes SET value=? WHERE (user_id = ? AND votable_id = ? AND votable_type = ?)");
    $stmt->execute(array($data['value'], $data['user_id'], $data['votable_id'], $data['votable_type']));
}

function getVotes($user_id)
{
    global $conn;
    $stmt = $conn->prepare("SELECT SUM(value) 
                            FROM votes
                            WHERE user_id = ?");
    $stmt->execute(array($user_id));

    return $stmt->fetchAll();
}

