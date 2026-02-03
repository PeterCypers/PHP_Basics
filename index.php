<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyWebsite</title>
  <link rel="shortcut icon" href="./assets/new-php-logo.png" type="image/x-icon">
</head>
<body>
  <?php 
  // single line comment
  # single line comment
  /*
   multiline comment 
   */
    echo "<small>Hello World...</small>";
    echo "<h1>Title</h1>";
  ?>
  <?php if(true) { ?>
    <h2>Title 2</h2>
  <?php } ?>
  <?php 
  # Scalar types (contains 1 value)
  $string = "Peter";
  $int = 123456789;
  $float = 2.5678;
  $bool = true;

  # Array type
  $names = array("Peter", "Bart", "Walter"); // old style php
  $names = ["Peter", "Bart", "Walter"]; // 

  # Object type
  // $object = new Car();
  ?>

  <p><a href="https://htmlcheatsheet.com/php/" target="_blank">PHP Cheat-Sheet</a></p>
  <p><a href="https://www.php.net/download-logos.php" target="_blank">PHP Logos and Icons</a></p>

  <!-- update upper limit when relevant -->
  <?php for( $i = 5; $i <= 6; $i += 1) {  ?>
    <p><a href="http://localhost/MyWebsite/pagepervideo/video_<?php echo $i; ?>.php">Video <?php echo $i; ?></a></p>
  <?php } ?>

  <!-- some PHP - shenanigans (not from the guide) -->
  <?php 
  /**
   * https://www.geeksforgeeks.org/php/how-to-parse-a-json-file-in-php/
   */
  $jsonAsString = file_get_contents("./data/pages.json");
  if ($jsonAsString === false) {
    die('Error reading the JSON file');
  }

  $json_data = json_decode($jsonAsString, true); 

  if ($json_data === null) {
    die('Error decoding the JSON file');
  }

  for ($i=0; $i < count($json_data); $i++) { 
    $loc = $json_data[$i]["location"];
    $name = $json_data[$i]["name"];
    echo "<p><a href=\"$loc\">$name</a></p>"; # php doesn't use backticks(``), workaround: escaping("")
  }

  echo "<pre>";
  print_r('Items: ' . count($json_data) . "\n");
  print_r($json_data);
  echo "</pre>";
  ?>
</body>
</html>