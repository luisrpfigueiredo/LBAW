<?php

function createAnswer($data)
{
    global $conn;
    echo ($data['user_id']);
    echo ($data['question_id']);
    echo ($data['body']);

    $stmt = $conn->prepare("INSERT INTO answers (user_id, question_id, body) VALUES(?,?,?)");
    $stmt->execute(array($data['user_id'],$data['question_id'],$data['body']));

    return true;
}

function editAnswer($data)
{
     global $conn;

    $stmt = $conn->prepare("UPDATE answers SET question_id = ?, body = ? WHERE id=?");
    $stmt->execute(array($data['question_id'],$data['body'],$data['id']));

    return true;
}

function answersFromQuestion($q_id)
{
    global $conn;

    $stmt = $conn->prepare("SELECT id, user_id,body,created_at,updated_at,votable_rating(id, 'a') as votes

   							FROM answers
   							WHERE question_id=?");
   $stmt->execute([$q_id]);
   $rows = $stmt->fetchAll();

    return $rows;
}



