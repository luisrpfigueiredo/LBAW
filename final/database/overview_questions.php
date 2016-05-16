<?php

function lastCreated($page = 0)
{
    global $conn;

    $limit = 4;
    $skip = $limit * $page;

    $stmt = $conn->prepare("SELECT id, title, body, solved, updated_at, created_at, 
        (SELECT COUNT(*) FROM question_answers(id)) as number_answers,
        votable_rating(id, 'q') as votes
        FROM questions 
        ORDER BY created_at DESC
        LIMIT :limit 
        OFFSET :skip");
    $stmt->execute(['limit' => $limit, 'skip' => $skip]);
    $rows = $stmt->fetchAll();

    return $rows;
}