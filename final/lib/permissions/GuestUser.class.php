<?php

class GuestUser extends Permission
{

    function handle()
    {
        if ($_SESSION['logged_in']) {

            $_SESSION['error_messages'][] = 'You are already logged In.';
            back();

        }
    }
}
