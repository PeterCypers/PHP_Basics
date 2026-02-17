<?php
// data type check enabled
declare(strict_types=1)
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vid 15</title>
  <link rel="shortcut icon" href="./assets/new-php-logo.png" type="image/x-icon">
</head>
<body>
  <a href="http://localhost/MyWebsite/">home</a>
  <?php echo "<h1>15. How to Use and Create Loops in PHP</h1>" ?>
  
  <?php
  $test = 10;
  for ($i = 0; $i <= $test; $i++) {
    echo "This is iteration number " . $i . "<br>";
  }

  $test = 5;
  while ($test < 10) {
    echo $test;
    $test++;
  }

  do {
    echo $test;
    $test++;
  } while ($test < 10);
  echo "<br>";

  $fruits = array("Apple" => "Red", "Banana" => "Yellow", "Orange" => "Orange");

  // manual array index selection
  // echo $fruits[0];
  // echo $fruits[1];
  // echo $fruits[2];
  // echo "<br>";

  foreach ($fruits as $fruit => $color) {
    echo "This is a " . $fruit . " that has a " . $color . " color" . "<br>";
  }

  ?>
</body>
</html>