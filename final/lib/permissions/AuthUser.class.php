<?php

class AuthUser extends Permission
{

    function handle()
    {
        if (!$_SESSION['logged_in']) {

            $_SESSION['error_messages'][] = 'You need to Login to access this page.';
            back();

        }
    }
}
