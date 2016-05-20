<?php

class ResourcePermission
{

    public static function isMine($user_id)
    {
        return $user_id == auth_user('id');
    }
}
