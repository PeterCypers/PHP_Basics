<?php
// data type check enabled
declare(strict_types=1)
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vid 14</title>
  <link rel="shortcut icon" href="./assets/new-php-logo.png" type="image/x-icon">
</head>
<body>
  <a href="http://localhost/MyWebsite/">home</a>
  <?php echo "<h1>14. What are Constants in PHP</h1>" ?>
  
  <?php
  
  $name = "Daniel";
  $name = "Basse";
  echo $name;
  echo "<br>";

  // constants
  define("PI", 3.14);
  define("NAME", "Daniel");
  define("IS_ADMIN", true);
  function test()
  {
    echo PI;
  }

  test();

  ?>
</body>
</html>