<?php

  include_once('../../config/init.php');
  include_once($BASE_DIR . "database/users.php");

  foreach (glob($BASE_DIR . "lib/passwordHashingLib/*.php") as $filename){
    include_once($filename);
  }


  if (!$_POST['username'] || !$_POST['email'] || !$_POST['password'] || !$_POST['verify_password']) {
    $_SESSION['error_messages'][] = 'All fields are mandatory';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/authentication.php');
    exit;
  }


  $username = strip_tags($_POST['username']);
  $email = strip_tags($_POST['email']);
  $password = $_POST['password'];
  $verify_password = $_POST['verify_password'];

  if(strcmp($password, $verify_password) != 0) {
    $_SESSION['error_messages'][] = 'Passwords mismatch';
    header("Location: $BASE_URL" . 'pages/users/authentication.php');
    exit;
  }

  try {
    createUser($username, $email, $password);
  } catch (PDOexception $e) {

      if (strpos($e->getMessage(), 'users_pkey') !== false) {
        $_SESSION['error_messages'][] = 'Duplicate username';
        $_SESSION['field_errors']['username'] = 'Username already exists';
      }

    else $_SESSION['error_messages'][] = 'Error creating user';

    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/authentication.php');
    exit;
  }

  $_SESSION['success_messages'][] = 'User registered successfully';  
  header("Location: $BASE_URL");

