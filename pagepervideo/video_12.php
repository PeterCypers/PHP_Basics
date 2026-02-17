<?php
// data type check enabled
declare(strict_types=1)
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vid 12</title>
  <link rel="shortcut icon" href="./assets/new-php-logo.png" type="image/x-icon">
</head>
<body>
  <a href="http://localhost/MyWebsite/">home</a>
  <?php echo "<h1>12. User-Defined Functions in PHP</h1>" ?>
  
  <?php

  // no return
  function sayHello() {
    echo "Hello World!";
  };

  function sayHello2() {
    return "Hello World!";
  }

  function sayHello3($name) {
    return "Hello " . $name . "!";
  }
  // default values
  function sayHello4(string $name = "Basse") {
    return "Hello " . $name . "!";
  }

  sayHello();
  echo "<br>";
  echo sayHello2();
  echo "<br>";
  echo sayHello3("Daniel");
  echo "<br>";
  // echo sayHello4(123); // throws type error

  // Using global-scope variables
  $test = "Daniel";
  function calculator(int $num1, $num2) {
    global $test;
    $result = $num1 + $num2;
    return $result;
  }

  $test = calculator(2, 5);
  echo "<br>";
  echo "calculator result = " . $test;


  ?>
</body>
</html>