<?php

function createAnswer($data)
{
 $conn->lastInsertId('questions_id_seq');

    global $conn;

    $stmt = $conn->prepare("INSERT INTO answers (user_id, question_id, body) VALUES(?,?,?)");
    $stmt->execute(array($data['user_id'],$data['question_id'],$data['body']));

    return (int)$conn->lastInsertId('questions_id_seq');
}

function editAnswer($data)
{
     global $conn;

    $stmt = $conn->prepare("UPDATE answers SET question_id = ?, body = ? WHERE id=?");
    $stmt->execute(array($data['question_id'],$data['body'],$body['id']));

    return true;
}

