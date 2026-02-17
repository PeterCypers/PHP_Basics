<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vid 11</title>
  <link rel="shortcut icon" href="./assets/new-php-logo.png" type="image/x-icon">
</head>
<body>
  <a href="http://localhost/MyWebsite/">home</a>
  <?php echo "<h1>11. Internal (Built-in) Functions in PHP</h1>" ?>  
  
  <?php
  $string = "Hello World";

  // String functions
  echo strlen($string);
  echo "<br>";
  echo strpos($string, "o");
  echo "<br>";
  echo str_replace("World", "Daniel", $string);
  echo "<br>";
  echo strtolower($string);
  echo "<br>";
  echo strtoupper($string);
  echo "<br>";
  echo substr($string, 2, -2); # from index, to index - -> counting back from the end
  echo "<br>";
  print_r(explode(" ", $string)); # from index, to index - -> counting back from the end
  echo "<br>";
  echo "<br>";

  // Math functions (7:30)
  $num = -5.5;
  echo abs($num);
  echo "<br>";

  echo pow(2,3);
  echo "<br>";

  echo rand(1, 100);
  echo "<br>";

  $array = ["apple", "banana", "orange"];
  echo count($array);
  echo "<br>";
  echo is_array($array);
  echo "<br>";
  array_push($array, "kiwi");
  print_r($array);
  echo "<br>";
  array_pop($array);
  print_r($array);
  echo "<br>";
  print_r(array_reverse($array));
  echo "<br>";
  $array1 = ["apple", "banana", "orange"];
  $array2 = ["kiwi"];
  print_r(array_merge($array1, $array2));
  echo "<br>";

  // Data & Time 15:40
  echo date("Y-m-d H:i:s");
  echo "<br>";
  echo time(); # time since 1970
  echo "<br>";

  $date = "2023-04-11 12:00:00";
  echo strtotime($date);

  ?>
</body>
</html>