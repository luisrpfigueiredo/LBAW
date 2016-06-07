<?php
function newVote($type, $id, $value)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO votes(user_id, votable_id, votable_type, value) VALUES (:user, :id, :type, :value)");
    $stmt->execute([
        'user'  => auth_user('id'),
        'type'  => $type,
        'id'    => $id,
        'value' => $value==1?1:0
    ]);
}

function updateVote($type, $id, $value)
{
    global $conn;
    $stmt = $conn->prepare("UPDATE votes SET value=:value WHERE votable_type=:type AND votable_id=:id AND user_id=:user");
    $stmt->execute([
        'user'  => auth_user('id'),
        'type'  => $type,
        'id'    => $id,
        'value' => $value==1?1:0
    ]);
}

function deleteVote($type, $id)
{
    global $conn;
    $stmt = $conn->prepare("DELETE FROM votes WHERE votable_type=:type AND votable_id=:id AND user_id=:user");
    $stmt->execute([
        'user' => auth_user('id'),
        'type' => $type,
        'id'   => $id,
    ]);
}

function votable_is_voted($type, $votable_id)
{
    if ($type == 'q') {
        return question_is_voted($votable_id);
    }

    if ($type == 'a') {
        return answer_is_voted($votable_id);
    }
}

function question_is_voted($question_id)
{
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM votes 
                            WHERE (user_id = :user AND votable_id = :question AND votable_type = 'q')");
    $stmt->execute(['user' => auth_user('id'), 'question' => $question_id]);
    $votes = $stmt->fetch();

    if ($votes === false) {
        return 0;
    }

    if ($votes['value']) {
        return 1;
    }

    return -1;
}

function answer_is_voted($answer_id)
{
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM votes 
                            WHERE (user_id = :user AND votable_id = :question AND votable_type = 'a')");
    $stmt->execute(['user' => auth_user('id'), 'question' => $answer_id]);
    $votes = $stmt->fetch();

    if ($votes === false) {
        return 0;
    }

    if ($votes['value']) {
        return 1;
    }

    return -1;
}

function getRating($id, $type)
{
    global $conn;
    $stmt = $conn->prepare("SELECT votable_rating(?, ?) as result FROM votes");
    $stmt->execute([$id, $type]);

    return $stmt->fetch();
}



