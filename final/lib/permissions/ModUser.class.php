<?php

class ModUser extends Permission
{

    function handle()
    {
        if (auth_user('type') == 'user') {
            $_SESSION['error_messages'][] = 'You are already logged In.';
            redirect();
        }
    }
}
