<?php
function dd()
{
    $variables = func_get_args();
    foreach ($variables as $variable) {
        var_dump($variable);
    }
    exit();
}

function back()
{
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}

function old($name, $default = '')
{
    global $FORM_VALUES;

    if (isset($FORM_VALUES[$name])) {
        return $FORM_VALUES[$name];
    }

    return $default;
}

function auth_user($property = null)
{
    if ($property && isset($_SESSION['user'][$property])) {
        return $_SESSION['user'][$property];
    }

    return $_SESSION['user'];
}
