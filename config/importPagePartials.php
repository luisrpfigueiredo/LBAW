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
        case 'register':
            render('registerPage');
            break;
        case 'profile':
            render('profile');
            break;
        case 'question':
            render('question');
            break;
        default:
            render('loginPage');
    }
}
