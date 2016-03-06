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
        case 'landing':
            render('landingPage');
            break;
        case 'auth':
        default:
            render('authenticationPage');
    }
}
