<?php
    foreach (glob($BASE_DIR . "lib/passwordHashingLib/*.php") as $filename){
      include_once($filename);
    }

  function getAllUsers() {
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM users
                            ORDER BY id DESC");
    $stmt->execute();
    return $stmt->fetchAll();
  }
  
  function createUser($username, $email, $password) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO users(username, email, password) VALUES (?, ?, ?)");
    $stmt->execute(array($username, $email, password_hash($password, PASSWORD_BCRYPT)));
  }

  function isLoginCorrect($username, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM users 
                            WHERE username = ?");
    $stmt->execute(array($username));
    $users = $stmt->fetchAll();
    
    if(sizeof($users) != 1) 
      return false;

    if(password_verify($password, $users[0]['password']))
      return true;
    else return false;
  }

