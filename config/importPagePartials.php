<?php

function importHeader()
{
    renderPartial('header');
}

function importHeaderRightComponent()
{
    $headerRightContent = 'loggedOutHeader';

    if (isLoggedIn()) {
        $headerRightContent = 'loggedInHeader';
    }

    renderPartial($headerRightContent);
}

function importContent()
{
    $currentPage = isset($_GET['page']) ? $_GET['page'] : '';

    switch ($currentPage) {
        case 'forgot':
            render('forgotPassword');
            break;
        case 'search':
            render('searchResults');
            break;
        case 'auth':
            render('authenticationPage');
            break;
        case 'landing':
            render('landingPage');
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
