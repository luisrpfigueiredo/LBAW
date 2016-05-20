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

    if (!is_array($ids)) {
        $ids = [$ids];
    }

    if (empty($ids)) {
        return [];
    }

    $points = query_build_for_num_args($ids);

    $stmt = $conn->prepare("SELECT id, title, body, solved, updated_at, created_at,
        (SELECT COUNT(*) FROM question_answers(id)) as number_answers,
        votable_rating(id, 'q') as votes
        FROM questions 
        WHERE id IN ($points);");
    $stmt->execute($ids);
    $rows = $stmt->fetchAll();

    return $rows;
}

function createQuestion($data)
{
    global $conn;

    $stmt = $conn->prepare("INSERT INTO questions (user_id, title, body) VALUES(:user_id, :title, :body)");
    $stmt->execute($data);

    return (int)$conn->lastInsertId('questions_id_seq');
}

function editQuestion($data)
{
    global $conn;

    $stmt = $conn->prepare("UPDATE questions SET title = :title, body = :body WHERE id=:question_id");
    $stmt->execute($data);

    return true;
}