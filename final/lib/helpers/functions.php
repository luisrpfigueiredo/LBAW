<?php
function dd()
{
    $variables = func_get_args();
    foreach ($variables as $variable) {
        var_dump($variable);
    }
    exit();
}

function back() {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}