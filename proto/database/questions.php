<?php
function questionSearch($query, $page = 0)
{
    $items_per_page = 2;
    global $conn;
    $stmt = $conn->prepare("SELECT search_questions(?) LIMIT ? OFFSET ?;");
    $stmt->execute(array($query, $items_per_page, $items_per_page * $page));
    $rows = $stmt->fetchAll();

    $question_ids = [];
    foreach ($rows as $row) {
        $question_ids[] = $row['search_questions'];
    }

    return questionsFromIds($question_ids);
}

function questionsFromIds($ids = [])
{
    global $conn;

    if (empty($ids)) {
        return [];
    }

    // fix later
    $points = [];
    foreach ($ids as $id) {
        $points[] = '?';
    }
    $points = implode(', ', $points);

    $stmt = $conn->prepare("SELECT id, title, body, solved, updated_at, 
        (SELECT COUNT(*) FROM question_answers(id)) as number_answers,
        votable_rating(id, 'q') as votes
        FROM questions 
        WHERE id IN ($points);");
    $stmt->execute($ids);
    $rows = $stmt->fetchAll();

    return $rows;
}