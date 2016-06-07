<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/votes.php');

$types = ['q', 'a'];
$values = ['1', '-1'];

PagePermissions::create('auth')->check();

if (!isset($_GET['type']) || !in_array($_GET['type'], $types)) {
    echo "Invalid Params (type)";
    exit();
}

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "Invalid Params (id)";
    exit();
}

$type = $_GET['type'];
$id = $_GET['id'];

$rating = getRating($id, $type);
echo json_encode(['rating' => $rating['result']]);
exit();