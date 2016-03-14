<?php

function importHeader()
{
    render('header');
}

function importHeaderRightComponent()
{
    $headerRightContent = 'loggedOutHeader';

    if (isLoggedIn()) {
        $headerRightContent = 'loggedInHeader';
    }

    render($headerRightContent);
}

function importContent()
{
    $currentPage = isset($_GET['page']) ? $_GET['page'] : '';

    switch ($currentPage) {
        case 'forgot':
            render('forgotPassword');
            break;
        case 'profile':
            render('profile');
            break;
        case 'question':
            render('question');
            break;
        case 'search':
            render('searchResults');
            break;
        case 'auth':
            render('authenticationPage');
            break;
        default:
            render('landingPage');
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
