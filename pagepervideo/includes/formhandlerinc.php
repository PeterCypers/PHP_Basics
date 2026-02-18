<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $pwd = $_POST["pwd"];
  $email = $_POST["email"];

  try {
    // require / require_once / include / include_once -> require: errors <-> include: warns
    require_once "dbhinc.php";

    // works but risks SQL-injection
    // $query = "INSERT INTO users (username, pwd, email) VALUES 
    // ($username, $pwd, $email);";

    // not using named-parameters:
    $query = "INSERT INTO users (username, pwd, email) VALUES 
    (?, ?, ?);";
    // prepared statement
    $stmt = $pdo->prepare($query);
    $stmt->execute([$username, $pwd, $email]);

    // closing connection
    $pdo = null;
    $stmt = null;
    
    header("Location: ../video_22.php");

    die(); // or exit(); -> die() also closes open connections
  } catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
  }
} else {
  header("Location: ../video_22.php");
}

/* DB-script in MySQL (db: php_learn):
CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    pwd VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);
*/