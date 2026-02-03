<?php
/*
 when everything is going to be php, we don't use the closing tag
 var_dump($_SERVER["REQUEST_METHOD"]);
 Dani says a lot about security & best-practices in the tutorial, including cross-site scripting
 after 20min Dani explains that a required form-attributes doesn't stop a user from submitting a form
 we could use dev-tools to remove the required tag...
 all front-end is not secure, always use server-side security
 
 in-commend the header function if you want to see the form-submit page
*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $firstname = htmlspecialchars($_POST["firstname"]); //function converts input to html-entities so user can't inject code -> user-input sanitization
  $lastname = htmlspecialchars($_POST["lastname"]);
  $favouritepet = htmlspecialchars($_POST["favouritepet"]);
  // htmlentities(); // -> converts everything to html-entities

  if (empty($firstname)) {
    exit();
    header("Location: ../video_6.php");
  }

  echo "These are the data, that the user submitted:";
  echo "<br>";
  echo $firstname;
  echo "<br>";
  echo $lastname;
  echo "<br>";
  echo $favouritepet;

  // since this page is only for the form data, we send the user back to the form input page
  header("Location: ../video_6.php");
} else {
  header("Location: ../video_6.php"); // failsafe sends user back if they found the URL without using the form
}