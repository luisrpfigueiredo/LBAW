<?php

function createAnswer($data)
{
    global $conn;
    echo ($data['user_id']);
    echo ($data['question_id']);
    echo ($data['body']);

    $stmt = $conn->prepare("INSERT INTO answers (user_id, question_id, body) VALUES(?,?,?)");
    $stmt->execute(array($data['user_id'],$data['question_id'],$data['body']));

    return intval($data['question_id']);
}

function editAnswer($data)
{
     global $conn;

    $stmt = $conn->prepare("UPDATE answers SET  body = ? WHERE id=?");
    $stmt->execute(array($data['body'],$data['id']));

    return intval($data['question_id']);
}

function answersFromQuestion($q_id)
{
    global $conn;

    $stmt = $conn->prepare("SELECT answers.id, user_id,body,answers.created_at,updated_at,votable_rating(answers.id, 'a') as votes, username
   							FROM answers, users
   							WHERE question_id=?
   							AND user_id = users.id");
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



