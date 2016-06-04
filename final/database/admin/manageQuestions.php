<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/questions.php');


function questionSearchAdmin($query)
{
    $items_per_page = 20;
    global $conn;
    $stmt = $conn->prepare("SELECT search_questions(?) LIMIT ? OFFSET ?");
    $stmt->execute(array($query, $items_per_page, 0));
    $rows = $stmt->fetchAll();

    $question_ids = [];
    foreach ($rows as $row) {
        $question_ids[] = $row['search_questions'];
    }

    return questionsFromIds($question_ids);
}

function deleteQuestion($questionID){
    global $conn;
    $conn->beginTransaction();

    $stmt = $conn->prepare("DELETE FROM answers WHERE question_id = ?");
    $stmt->execute([$questionID]);

    $stmt = $conn->prepare("DELETE FROM questions WHERE id = ?");
    $stmt->execute([$questionID]);

    $conn->commit();
    return;
}
