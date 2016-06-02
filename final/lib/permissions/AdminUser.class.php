<?php

class AdminUser extends Permission
{

    function handle()
    {
        if (auth_user('type') != 'admin') {
            $_SESSION['error_messages'][] = 'You are already logged In.';
            back();
        }
    }
}
