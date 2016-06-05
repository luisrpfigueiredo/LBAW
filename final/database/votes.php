<?php
function newVote($data)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO votes(user_id,votable_id, votable_type, value) VALUES (?, ?, ?, ?)");
    $stmt->execute(array($data['user_id'], $data['votable_id'], $data['votable_type'], $data['value']));
    return;
}

function question_is_voted($question_id)
{
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM votes 
                            WHERE (user_id = :user AND votable_id = :question AND votable_type = 'q')");
    $stmt->execute(['user' => auth_user('id'), 'question' => $question_id]);
    $votes = $stmt->fetch();

    if($votes === false)
        return 0;

    return $votes['value'];
}

function answer_is_voted($answer_id)
{
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM votes 
                            WHERE (user_id = :user AND votable_id = :question AND votable_type = 'a')");
    $stmt->execute(['user' => auth_user('id'), 'question' => $answer_id]);
    $votes = $stmt->fetch();

    if($votes === false)
        return 0;

    return $votes['value'];
}

function answers_are_voted($answers)
{
    foreach($answers as &$answer) {
        $answer['voted'] = answer_is_voted($answer['id']);
    }

    return $answers;
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



