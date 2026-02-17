<?php
// data type check enabled
declare(strict_types=1)
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vid 13</title>
  <link rel="shortcut icon" href="./assets/new-php-logo.png" type="image/x-icon">
</head>
<body>
  <a href="http://localhost/MyWebsite/">home</a>
  <?php echo "<h1>13. Scopes in PHP</h1>" ?>
  
  <?php
  // declared outside function = global scoped
  $test = "Daniel";
  echo $test;
  echo "<br>";

  function myFunction() {
    global $test; // to access global scoped items inside a funct.
    echo "global " . $GLOBALS["test"] . " inside funct" . "<br>";
    
    $localVar = "Hello, world!";
    return $localVar; //only accessible inside the function
  };

  echo myFunction();
  echo "<br>";

  // explaining lifetime of variables inside function scope 8:10
  // 10:30 Class scope

  class MyClass
  {
    // Class variable
    public $classVar = "Hello, world!";

    public function myMethod()
    {
      echo $this->classVar; // Output: Hello, world!
    }
  }

  // echo MyClass::$classVar;

  ?>
</body>
</html>