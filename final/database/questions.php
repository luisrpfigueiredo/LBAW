<?php
include_once('votes.php');

function questionSearch($query, $page = 0)
{
    $items_per_page = 2;
    global $conn;
    $stmt = $conn->prepare("SELECT search_questions(?) LIMIT ? OFFSET ?");
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

    $stmt = $conn->prepare("SELECT id,user_id, title, body, solved, updated_at, created_at,
        (SELECT COUNT(*) FROM question_answers(id)) as number_answers,
        votable_rating(id, 'q') as votes,
        (SELECT username FROM users WHERE users.id = questions.user_id) as username
        FROM questions 
        WHERE id IN ($points);");
    $stmt->execute($ids);
    $rows = $stmt->fetchAll();

    $rows = questions_are_voted($rows);

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

function getQuestionsOfUser($user_id, $page = 0)
{
    global $conn;
    $limit_question = 4;

    $stmt = $conn->prepare("SELECT questions.id, title, body, solved, updated_at, questions.created_at, username, user_id, 
        (SELECT COUNT(*) FROM question_answers(questions.id)) as number_answers,
        votable_rating(questions.id, 'q') as votes
        FROM questions, users
        WHERE questions.user_id = :user
          AND users.id = questions.user_id
        LIMIT :limit
        OFFSET :skip
        ;");

    $stmt->execute([
        'user'  => $user_id,
        'limit' => $limit_question,
        'skip'  => $page * $limit_question
    ]);

    return $stmt->fetchAll();
}
