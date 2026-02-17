<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vid 10</title>
  <link rel="shortcut icon" href="./assets/new-php-logo.png" type="image/x-icon">
</head>
<body>
  <a href="http://localhost/MyWebsite/">home</a>
  <?php echo "<h1>10. How to Create Arrays in PHP | Indexed & Associative Arrays</h1>" ?>  

  <?php
  // array creation: personal preference
    $fruits = array("Apple", "Banana", "Cherry");
    $fruits = ["Apple", "Banana", "Cherry"];
    $fruits = [
      "Apple", // 0
      "Banana", // 1
      "Cherry", // 2 -> trailing comma allowed since php-8
      ];

      echo $fruits[0];

      // append in PHP!
      $fruits[] = "Orange";

      echo "<br>" . $fruits[3];

      $fruits[1] = "Orange";
      
      unset($fruits[1]);
      // echo $fruits[1]; // undefined, unset removed at index
      array_splice($fruits, 0, 1);
      echo "<br>" . $fruits[1] . "<br>";

      // associative array (key-value) (do keys need unicity?)
      $tasks = [
        "laundry" => "Daniel",
        "trash" => "Frida",
        "vacume" => "Basse",
        "dishes" => "Bella"
      ];
      echo $tasks["laundry"];

      // human readable print out (debugging, arrays etc)
      echo "<br>";
      print_r($tasks);
      echo "<br>";
      print_r($fruits);
      echo "<br>";
      echo count($tasks);
      echo "<br>";

      // sort($tasks); // sorts values(drops original keys and makes it 0-indexed keys like a normal array)
      // print_r($tasks);

      // pushing (adding) only works on regular arrays
      array_push($fruits, "Mango");
      // ==
      $fruits[] = "Mango";
      echo "<br>";
      print_r($fruits);

      // associative array add key-val pair
      $tasks["dusting"] = "Tara";
      echo "<br>";
      print_r($tasks);

      // splicing (arr, del-index, del-count)
      // array_splice($fruits, 1, 1);
      // inserting (arr, ins-index, del-count(0), element)
      array_splice($fruits, 1, 0, "Mango");
      echo "<br>";
      print_r($fruits);

      // insert array
      $test = ["Apple", "Kiwi"];
      array_splice($fruits, 2, 0, $test);
      echo "<br>";
      print_r($fruits);

      // multi-dimensional arrays
      $food = [
        array("apple", "mango"),
        "banana",
        "cherry"
      ];
      echo "<br>";
      echo $food[0][0];

      // continue from 20min
      $food = [
        "fruits" => array("apple", "banana", "cherry"),
        "meat" => array("chicken", "fish"),
        "vegetables" => array("cucumber", "carror"),
        // "vegetables" => array("vegetables" => "cucumber", "carror") # associative arr inside an array
      ];

      echo $food["vegetables"][0];
  ?>
</body>
</html>