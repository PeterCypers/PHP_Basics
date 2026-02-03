<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vid 6</title>
  <link rel="shortcut icon" href="./assets/new-php-logo.png" type="image/x-icon">
</head>
<body>
  <a href="http://localhost/MyWebsite/">home</a>

  <?php echo "<h1>6. Forms</h1>" ?>
  <!-- to submit data to the same page, use:   -->
  <!-- <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post"> -->

  <form action="includes/formhandler.php" method="post">
    <label for="firstname">Firstname?</label>
    <input style="margin-bottom: 10px" id="firstname" type="text" name="firstname" placeholder="Firstname ... "><br>

    <label for="lastname">Lastname?</label>
    <input style="margin-bottom: 10px" id="lastname" type="text" name="lastname"  placeholder="Lastname ... "><br>

    <label for="favouritepet">Favourite Pet?</label>
    <select id="favouritepet" name="favouritepet"><br>
      <option value="none">None</option>
      <option value="dog">Dog</option>
      <option value="cat">Cat</option>
      <option value="bird">Bird</option>
    </select>

    <button type="submit">Submit</button>
  </form>
</body>
</html>