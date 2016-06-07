<?php
include_once('votes.php');

function lastCreated($page = 0)
{
    global $conn;

    $limit = 4;
    $skip = $limit * $page;

    $stmt = $conn->prepare("SELECT questions.id, title, body, solved, updated_at, questions.created_at, username, user_id,
        (SELECT COUNT(*) FROM question_answers(questions.id)) as number_answers,
        votable_rating(questions.id, 'q') as votes
        FROM questions, users
        WHERE questions.user_id = users.id
        ORDER BY created_at DESC
        LIMIT :limit 
        OFFSET :skip");
    $stmt->execute(['limit' => $limit, 'skip' => $skip]);
    $rows = $stmt->fetchAll();

    $rows = questions_are_voted($rows);
    
    return $rows;
}

function lastUpdated($page = 0)
{
    global $conn;

    $limit = 4;
    $skip = $limit * $page;

    $stmt = $conn->prepare("SELECT questions.id, title, body, solved, updated_at, questions.created_at, username, user_id,
        (SELECT COUNT(*) FROM question_answers(questions.id)) as number_answers,
        votable_rating(questions.id, 'q') as votes
        FROM questions, users
        WHERE updated_at IS NOT NULL
          AND questions.user_id = users.id
        ORDER BY updated_at DESC
        LIMIT :limit 
        OFFSET :skip");
    $stmt->execute(['limit' => $limit, 'skip' => $skip]);
    $rows = $stmt->fetchAll();

    $rows = questions_are_voted($rows);

    return $rows;
}

function lastWeek($page = 0)
{
    global $conn;

    $limit = 4;
    $skip = $limit * $page;

    $stmt = $conn->prepare("SELECT questions.id, title, body, solved, updated_at, questions.created_at,  username, user_id,
        (SELECT COUNT(*) FROM question_answers(questions.id)) as number_answers,
        votable_rating(questions.id, 'q') as votes
        FROM questions, users
        WHERE questions.created_at > current_date - interval '7 days'
          AND questions.user_id = users.id
        LIMIT :limit 
        OFFSET :skip");
    $stmt->execute(['limit' => $limit, 'skip' => $skip]);
    $rows = $stmt->fetchAll();

    $rows = questions_are_voted($rows);

    return $rows;
}

function lastMonth($page = 0)
{
    global $conn;

    $limit = 4;
    $skip = $limit * $page;

    $stmt = $conn->prepare("SELECT questions.id, title, body, solved, updated_at, questions.created_at, username, user_id, 
        (SELECT COUNT(*) FROM question_answers(questions.id)) as number_answers,
        votable_rating(questions.id, 'q') as votes
        FROM questions, users 
        WHERE questions.created_at > current_date - interval '31 days'
          AND questions.user_id = users.id
        LIMIT :limit 
        OFFSET :skip");
    
    $stmt->execute(['limit' => $limit, 'skip' => $skip]);
    $rows = $stmt->fetchAll();

    $rows = questions_are_voted($rows);

    return $rows;
}