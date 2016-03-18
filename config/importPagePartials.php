<?php

function importHeader()
{
    render('header');
}

function importHeaderRightComponent()
{
    $headerRightContent = 'guestHeader';

    if (isLoggedIn()) {
        $headerRightContent = 'authHeader';
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
        case 'about':
            render('about');
            break;
        case 'questions':
            render('questionsPage');
            break;
        case 'new-question':
            render('newQuestion');
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
