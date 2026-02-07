<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vid 8</title>
  <link rel="shortcut icon" href="./assets/new-php-logo.png" type="image/x-icon">
</head>
<body>
  <a href="http://localhost/MyWebsite/">home</a>
  <?php echo "<h1>8. Conditions & Control Structures in PHP</h1>" ?>  

  <?php
  // playing around
    if (0) {
      echo "<p>0 is true?</p>";
    }
    if (1) {
      echo "<p>0 is " . ((0) ? "true" : "false") . "</p>";
      echo "<p>1 is " . ((1) ? "true" : "false") . "</p>";
    }
    // following the video
    $bool = true; // !$bool -> false
    $a = 1;
    $b = 4;

    $result = match ($a) {
      1 => "Variable a is equal to one!",
      2 => "Variable a is equal to two!",
      3, 4, 5 => "Variable is 3 or 4 or 5!",
      default => "None were a match",
    };

    switch ($a) {
      case 1:
        echo "The first case is correct!";
        break;
      case 2:
        break;
      default:
        # code...
        break;
    }

    if ($a < $b && !$bool) {
      echo "First condition is true!";
    } else if ($a < $b && $bool) {
      echo "Second condition is true!";
    } else if ($a < $b && $bool) {
      echo "Third condition is true!";
    } else {
      echo "None of the conditions were true!";
    }
    
  ?>
</body>
</html>