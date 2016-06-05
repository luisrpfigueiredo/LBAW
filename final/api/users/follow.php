<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/follows.php');

PagePermissions::create('auth')->check();

if (!isset($_GET['user_id']) && !is_numeric($_GET['user_id'])) {
    echo "Invalid Params";
    exit();
}

$user_id = $_GET['user_id'];

echo json_encode(["following" => follow($user_id)]);
