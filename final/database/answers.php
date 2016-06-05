<?php

function createAnswer($data)
{
    global $conn;

    $conn->lastInsertId('questions_id_seq');


    $stmt = $conn->prepare("INSERT INTO answers (user_id, question_id, body) VALUES(?,?,?)");
    $stmt->execute(array($data['user_id'],$data['question_id'],$data['body']));

    return (int)$conn->lastInsertId('questions_id_seq');
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

function answersFromIds($ids = [])
{
    global $conn;

    if (!is_array($ids)) {
        $ids = [$ids];
    }

    if (empty($ids)) {
        return [];
    }

    $points = query_build_for_num_args($ids);

    $stmt = $conn->prepare("SELECT id,user_id, question_id, body, updated_at, created_at,
        (SELECT username FROM users WHERE users.id = answers.user_id) as username
        FROM answers
        WHERE id IN ($points);");
    $stmt->execute($ids);
    $rows = $stmt->fetchAll();

    return $rows;
}



