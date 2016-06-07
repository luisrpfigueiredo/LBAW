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

if (!isset($_GET['value']) || !in_array($_GET['value'], $values)) {
    echo "Invalid Params (values)";
    exit();
}

$type = $_GET['type'];
$id = $_GET['id'];
$value = $_GET['value'];

$result = votable_is_voted($type, $id);
$output = $value;

// no vote
if ($result == 0) {
    newVote($type, $id, $value);
}
// Already vote up
if ($result == 1) {
    if($value == 1) {
        deleteVote($type, $id);
        $output = 0;
    }
    if($value == -1) {
        updateVote($type, $id, $value);
    }
}
//Already vote up
if ($result == -1) {
    if($value == -1) {
        deleteVote($type, $id);
        $output = 0;
    }
    if($value == 1) {
        updateVote($type, $id, $value);
    }
}
echo json_encode(['result' => $output]);
exit();