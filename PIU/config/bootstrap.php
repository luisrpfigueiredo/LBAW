<?php
session_start();

require_once("./path.php");

function startApp()
{
    render('template');
}

function render($fileName, $vars = [])
{
    extract($vars);

    if (file_exists(BASE_PATH . "/Pages/{$fileName}.php")) {
        include(BASE_PATH . "/Pages/{$fileName}.php");
    } else {
        include(BASE_PATH . "/Pages/{$fileName}.partial.php");
    }
}

function isLoggedIn()
{
    return isset($_GET['logged']);
}

require_once BASE_PATH . "/config/HTML.php";
require_once BASE_PATH . "/config/importPagePartials.php";

