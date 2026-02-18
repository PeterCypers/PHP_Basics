<?php

include '../../keys/passwords.php';

$dsn = "mysql:host=localhost;dbname=php_learn";
$dbusername = "root";
$dbpassword = $SQLPASSWORD;

try {
  // 7.38 explains MySQLI -> mysql improved, we're using a different method
  // PDO like DTO(data transfer object) (PDO: PHP Data Object) -> better if you want to connect to a non-MySQL DB
  $pdo = new PDO($dsn, $dbusername, $dbpassword);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
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