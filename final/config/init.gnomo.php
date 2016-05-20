<?php
session_set_cookie_params(3600, '/~lbaw1513');
session_start();

error_reporting(E_ERROR | E_WARNING); // E_NOTICE by default

$BASE_DIR = '/opt/lbaw/lbaw1513/public_html/frmk/';
$BASE_URL = '/~lbaw1513/frmk/';

$conn = new PDO('pgsql:host=dbm.fe.up.pt;dbname=lbaw1513', 'lbaw1513', 'RF77P7Q9');
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$conn->exec('SET SCHEMA \'public\'');

include($BASE_DIR . 'config/global_vars.php');

