<?php
function newVote($data)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO votes(user_id,votable_id, votable_type, value) VALUES (?, ?, ?, ?)");
    $stmt->execute(array($data['user_id'], $data['votable_id'], $data['votable_type'], $data['value']));
    return;
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
function changeVote($data)
{
    global $conn;
    $stmt = $conn->prepare("UPDATE votes SET value=? WHERE (user_id = ? AND votable_id = ? AND votable_type = ?)");
    $stmt->execute(array($data['value'], $data['user_id'], $data['votable_id'], $data['votable_type']));
    return;
}

function getRating($data)
{
    global $conn;
    $stmt = $conn->prepare("SELECT votable_rating(?, ?) as result FROM votes");
    $stmt->execute(array($data['votable_id'], $data['votable_type']));
    return $stmt->fetch();
}



