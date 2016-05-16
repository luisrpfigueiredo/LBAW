<?php
function syncTags($question_id, $tags)
{
    global $conn;

    // CHECK TAGS THAT ALREADY EXISTS AND SAVE ITS IDS AND REMOVE FROM TAGS ARRAY
    $existingTags = getTagsFromQuestion($question_id);

    $usedDBTags = [];
    foreach ($existingTags as $tag_key => $tag) {
        if (in_array($tag['tag'], $tags)) {
            $key = array_search($tag['tag'], $tags);
            unset($tags[$key]);
            $usedDBTags[] = $tag['id'];
        }

        $existingTags[$tag_key] = $tag['id'];
    }

    $deleteTagIds = array_diff($existingTags, $usedDBTags);

    // CREATE TAGS THAT DONT EXIST
    foreach ($tags as $tag) {
        createAndAssociate($tag, $question_id);
    }

    foreach ($deleteTagIds as $tag_id) {
        deAssociate($tag_id, $question_id);
    }

}

function getTagsFromQuestion($question_id)
{
    global $conn;

    $stmt = $conn->prepare("SELECT tags.id, tags.tag
        FROM tags INNER JOIN questions_tags ON tags.id=questions_tags.tag_id
        WHERE questions_tags.question_id = :question");

    $stmt->execute(['question' => $question_id]);

    return $stmt->fetchAll();
}

function insertTag($tag)
{
    global $conn;

    $stmt = $conn->prepare("INSERT INTO tags (tag) VALUES(:tag)");

    $stmt->execute([$tag]);

    return (int)$conn->lastInsertId('tags_id_seq');
}

function createAndAssociate($tag, $question_id)
{
    global $conn;

    $tag_id = insertTag($tag);

    $stmt = $conn->prepare("INSERT INTO questions_tags (question_id, tag_id) VALUES(:question, :tag)");

    $stmt->execute(['question' => $question_id, 'tag' => $tag_id]);
}

function deAssociate($tag_id, $question_id)
{
    global $conn;

    $stmt = $conn->prepare("DELETE FROM questions_tags WHERE question_id = :question AND tag_id = :tag");

    $stmt->execute(['question' => $question_id, 'tag' => $tag_id]);
    
}