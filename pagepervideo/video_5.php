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
    echo "test change post re-install XAMPP";
    echo "<br>";
  ?>

  <?php
  // explaining GET
  echo $_GET["name"];
  // http://localhost/MyWebsite/pagepervideo/video_5.php?name=peter
  /*
  all the data in the URL is accessed as an 'associative array'
  so, enter above url, then refresh and name is echo'd
  */
  // http://localhost/MyWebsite/pagepervideo/video_5.php?name=peter&eyecolor=blue
  echo $_GET["eyecolor"];

  // get vs post: with get the variables are in the URL, with post they aren't visible in the URL
  // rule of thumbs: if you want to just get data: GET, if you want to add data: POST
  // exception: login, we POST login data for secrecy so the login-email/name + password are not visible in the URL

  // request works on GET/POST/COOKIES (but is less clear what type will return)
  echo $_REQUEST["name"];

  echo $_FILES["filename"];

  echo $_COOKIE["cookiename"];

  $_SESSION["username"] = "Peter";
  echo $_SESSION["username"];

  $_ENV["usersecret"]; // will talk about in a later episode
  ?>
  
</body>
</html>