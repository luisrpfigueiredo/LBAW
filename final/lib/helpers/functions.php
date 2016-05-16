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

function redirect($path = '')
{
    global $BASE_URL;
    header('Location: ' . $BASE_URL . $path);
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

function query_build_for_num_args($array)
{
    $tags_query = '';
    for ($i = 0; $i < count($array); $i++) {
        $tags_query .= '?, ';
    }

    if (strlen($tags_query) > 1) {
        $tags_query = substr($tags_query, 0, -2);
    }

    return $tags_query;
}