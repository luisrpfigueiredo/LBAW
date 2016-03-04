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
        case 'login':
        default:
            render('loginPage');
    }
}
