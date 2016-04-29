<?php
session_start();

error_reporting(E_ERROR | E_WARNING); // E_NOTICE by default

$BASE_DIR = '/home/vagrant/personal/LBAW/proto/';
$BASE_URL = '/';

$conn = new PDO('pgsql:host=localhost;dbname=lbaw', 'homestead', 'secret');
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$conn->exec('SET SCHEMA \'public\'');

include($BASE_DIR . 'config/global_vars.php');

