<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/answers.php');


function answerSearchAdmin($query)
{
    $items_per_page = 20;
    global $conn;
    $stmt = $conn->prepare("SELECT search_answers(?) LIMIT ? OFFSET ?");
    $stmt->execute(array($query, $items_per_page, 0));
    $rows = $stmt->fetchAll();

    $answerIDs = [];
    foreach ($rows as $row) {
        $answerIDs[] = $row['search_answers'];
    }

    return answersFromIds($answerIDs);
}

function deleteAnswer($answerID){
    global $conn;
    $stmt = $conn->prepare("DELETE FROM answers WHERE id = ?");
    $stmt->execute([$answerID]);
    return;
}
