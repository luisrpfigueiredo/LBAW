<?php
session_start();

require_once("./path.php");

function startApp()
{
    render('templateAdmin');
}

function render($fileName, $vars = [])
{
    extract($vars);

    if (file_exists(BASE_PATH . "/Pages/admin/{$fileName}.php")) {
        include(BASE_PATH . "/Pages/admin/{$fileName}.php");
    } else {
        include(BASE_PATH . "/Pages/admin/{$fileName}.partial.php");
    }
}

function isLoggedIn()
{
    return isset($_GET['logged']);
}

require_once BASE_PATH . "/config/HTML.php";
require_once BASE_PATH . "/config/admin/importPagePartials.php";

