<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vid 7</title>
  <link rel="shortcut icon" href="./assets/new-php-logo.png" type="image/x-icon">
</head>
<body>
  <a href="http://localhost/MyWebsite/">home</a>
  <?php echo "<h1>7. Operators You Need to Know!</h1>" ?>  

  <?php
  // String operator
  $a = "Hello";
  $b = "World";
  $c = $a . " " . $b;
  echo $c . "<br>";


  // Arithmatic operators
  echo "1 + 2 = " . 1 + 2 . "<br>";
  echo "1 / 2 = " . 1 / 2 . "<br>";
  echo "1 % 2 = " . 1 % 2 . "<br>";
  echo "1 ** 2 = " . 1 ** 2 . "<br>";
  // Change Precedence with ()
  echo "(1 + 2) * 4 = " . (1 + 2) * 4 . "<br>";


  // Assignment operators
  $a = 2;
  $a = $a + 4; // is itself + 4
  $a += 4; // shorthand
  $a *= 4; // a is itself * 4 (shorthand)

  
  // Comparison operators (==, ===)
  $a = 2;
  $b = 4;
  $col = [$a, $b];
  echo "<br>";
  echo $a . " == " . $b . " → " . (($a == $b) ? 'true' : 'false') . "<br>";
  echo "<br>";

  $b = "2";
  echo $a . " == " . "'2'" . " → " . (($a == $b) ? 'true' : 'false') . "<br>";
  // datatype check ===
  echo $a . " === " . "'2'" . " → " . (($a === $b) ? 'true' : 'false') . "<br>";
  echo "<br>";

  echo $a . " != " . $b . " → " . (($a != $b) ? 'true' : 'false') . "<br>";
  echo $a . " <> " . $b . " → " . (($a <> $b) ? 'true' : 'false') . "<br>";
  echo "<br>";

  echo $a . " < " . $b . " → " . (($a < $b) ? 'true' : 'false') . "<br>";
  echo $a . " > " . $b . " → " . (($a > $b) ? 'true' : 'false') . "<br>";
  echo $a . " <= " . $b . " → " . (($a <= $b) ? 'true' : 'false') . "<br>";
  echo $a . " >= " . $b . " → " . (($a >= $b) ? 'true' : 'false') . "<br>";
  echo "<br>";

  // Logical operators
  // additional conditions, bad form: (nesting)
  if ($a == $b) {
    echo "This statement is true" . "<br>";
    if ($a === $b) {
      echo "This statement is extra true" . "<br>";
    }
  }
  // and == && ; or == ||
  if ($a == $b and $a === $b) {
    echo "Both conditions are true" . "<br>";
  }
  if ($a == $b or $a == $b) {
    echo "At least one is true" . "<br>";
  }
  $a = 4;
  $b = 4;
  $c = 2;
  $d = 6;
  if ($a == $b || $c == $d && $a == $c) {
    echo "This statement with 4 conditions is true <br>";
  }

  // Incrementing/decrementing operators
  $a = 1;
  echo "<br>" . ++$a;
  echo "<br>" . --$a;
  echo "<br>" . $a++; // echo, and after add 1
  echo "<br>" . $a;

  ?>
</body>
</html>