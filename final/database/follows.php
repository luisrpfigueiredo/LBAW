<?php
function following($user, $followed)
{
    global $conn;

    $stmt = $conn->prepare("SELECT COUNT(*) as counter FROM follows WHERE user_id=:user AND followed_id=:followed");
    $stmt->execute(['user' => $user, 'followed' => $followed]);
    $counter = $stmt->fetch();

    return $counter['counter'] > 0;
}

function follow($followed)
{
    global $conn;

    $user_id = auth_user('id');
    if ($user_id == $followed) {
        return null;
    }

    if (following($user_id, $followed)) {
        $stmt = $conn->prepare("DELETE FROM follows WHERE user_id=:user AND followed_id=:followed");
        $return = false;
    } else {
        $stmt = $conn->prepare("INSERT INTO follows (user_id, followed_id) VALUES (:user, :followed)");
        $return = true;
    }
    $stmt->execute(['user' => $user_id, 'followed' => $followed]);
    $stmt->fetch();

    return $return;
}