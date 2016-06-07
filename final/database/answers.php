<?php
include_once('votes.php');

function createAnswer($data)
{
    global $conn;
    echo($data['user_id']);
    echo($data['question_id']);
    echo($data['body']);

    $stmt = $conn->prepare("INSERT INTO answers (user_id, question_id, body) VALUES(?,?,?)");
    $stmt->execute(array($data['user_id'], $data['question_id'], $data['body']));

    return intval($data['question_id']);
}

function editAnswer($id, $body)
{
    global $conn;

    $stmt = $conn->prepare("UPDATE answers SET  body = :body WHERE id=:id");
    $stmt->execute(['id' => $id, 'body' => $body]);
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

    $rows = addAnswersComputedFields($rows);

    return $rows;
}

function addAnswersComputedFields($answers)
{
    foreach ($answers as &$answer) {
        $answer['voted'] = answer_is_voted($answer['id']);
        $answer['isMine'] = answer_is_mine($answer);
    }

    return $answers;
}

function answer_is_mine($answer)
{
    if (!$_SESSION['logged_in']) {
        return false;
    }

    return $answer['user_id'] == auth_user('id');
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



