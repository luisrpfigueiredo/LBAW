<?php

function importHeader()
{
    render('header');
}

function importContent()
{
    $currentPage = isset($_GET['page']) ? $_GET['page'] : '';

    switch ($currentPage) {
        case 'overview':
            render('overview');
            break;
        case 'manage':
            render('manageSelection');
            break;
        default:
            render('overview');
            break;
    }

}

function importNotifications()
{
    $notification = isset($_GET['notification']) ? $_GET['notification'] : null;
    $availableNotifications = ['success', 'danger', 'info', 'warning'];

    if($notification) {
        if(in_array($notification, $availableNotifications))
            render('notification', ['type' => $notification]);
    }
}
function importTableHead(){
    $manage = isset($_GET['manage']) ? $_GET['manage'] : '';
        render("{$manage}Head");
}
function importManagement(){
    $manage = isset($_GET['manage']) ? $_GET['manage'] : '';
    for($i = 0; $i < 100; $i++){
        render("{$manage}Management");
    }
}