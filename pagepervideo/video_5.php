<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vid 5</title>
  <link rel="shortcut icon" href="./assets/new-php-logo.png" type="image/x-icon">
</head>
<body>
  <a href="http://localhost/MyWebsite/">home</a>
  <?php echo "<h1>5. Superglobal Variables</h1>" ?>
  <?php
    // Default initialized (shown in video 4)
    $string = "";
    $int = 0;
    $float = 0;
    $bool = false;

    $array = [];
    $object = null;
  ?>

  <?php 
    echo "-------------<br>";
    echo "\$_SERVER['DOCUMENT_ROOT']";
    echo "<br>";
    echo $_SERVER["DOCUMENT_ROOT"];
    echo "<br>-------------<br>";
    echo "\$_SERVER['PHP_SELF']";
    echo "<br>";
    echo $_SERVER["PHP_SELF"];
    echo "<br>-------------<br>";
    echo "\$_SERVER['SERVER_NAME']";
    echo "<br>";
    echo $_SERVER["SERVER_NAME"];
    echo "<br>-------------<br>";
    echo "\$_SERVER['REQUEST_METHOD']";
    echo "<br>";
    echo $_SERVER["REQUEST_METHOD"];
    echo "<br>-------------<br>";
    echo "test change post re-install XAMPP"
  ?>
  
</body>
</html>