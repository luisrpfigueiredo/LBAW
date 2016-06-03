<?php

function createVote($data)
{
 $conn->lastInsertId('questions_id_seq');

    global $conn;

    $stmt = $conn->prepare("INSERT INTO votes (user_id, votable_id, votable_type,value) VALUES(?, ?, ?,?)");
    $stmt->execute(array($data['user_id'],$data['votable_id'],$data['votable_type'],$data['value']));

    return (int)$conn->lastInsertId('questions_id_seq');
}

function updateVote($data)
{
     global $conn;

    $stmt = $conn->prepare("UPDATE answers SET value=? WHERE id=?");
    $stmt->execute(array($data['value'],$body['id']));

    return true;
}