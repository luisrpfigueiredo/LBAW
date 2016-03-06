<?php
session_start();

function startApp()
{
    render('template');
}

function render($fileName)
{
    include("./Pages/{$fileName}.php");
}

function isLoggedIn()
{
    return isset($_GET['logged']);
}

require_once './config/importPagePartials.php';
