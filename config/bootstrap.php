<?php
session_start();

include("./path.php");

function startApp()
{
    render('template');
}

function render($fileName)
{
    include(BASE_PATH . "/Pages/{$fileName}.php");
}

function isLoggedIn()
{
    return isset($_GET['logged']);
}

require_once BASE_PATH . "/config/importPagePartials.php";
