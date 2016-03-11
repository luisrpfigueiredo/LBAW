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
            break;
        default:
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
