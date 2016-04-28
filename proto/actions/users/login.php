<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');


  if (!$_POST['username'] || !$_POST['password']) {
    $_SESSION['error_messages'][] = 'Invalid login';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/authentication.php');
    exit;
  }

  $username = $_POST['username'];
  $password = $_POST['password'];
  
  try {

    if(isLoginCorrect($username, $password)) {
      $_SESSION['username'] = $username;
      $_SESSION['success_messages'][] = 'Login successful.';
      header("Location: $BASE_URL");
    }
    else {
      echo "else";
      $_SESSION['error_messages'][] = 'Error validating credentials.';  
      header("Location: $BASE_URL" . 'pages/users/authentication.php');
      exit;
    }
  } catch (PDOexception $e) {

    $_SESSION['error_messages'][] = 'Login failed.';

    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/authentication.php');
    exit;
  }
?>
