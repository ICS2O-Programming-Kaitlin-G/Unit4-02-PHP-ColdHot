<!DOCTYPE html>
<!-- ICS2O-Unit4-02-PHP-ColdHot -->
<html lang="en-ca">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This program will declare/judge whether it is cold or not depending on the temperature that the user inputs in degrees celsius.">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Katie G">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css"> 
    <title>Temperature exists, and oh boy the people of the earth need to be told from an impartial source whether or not it is hot or cold outside because they just do not seem to know. (except this time it is in PHP)</title>
 
    <!-- The favicon on this page is summoned (displayed) with these lines of code -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
  </head>
<body>
  <!-- Header, more specifically the largest header possible, primarily for visual structural aesthetic. -->
  <?php 
    echo "<h1>Temperature exists, and oh boy the people of the earth need to be told from an impartial source whether or not it is hot or cold outside because they just do not seem to know. (except this time it is in PHP)</h1>";
  ?>

  <!-- Description text about the website that will let the user know what is happening on this website, just in case the title did not sufficiently tell them. -->
  <?php
    echo "<p>humans require to be told whether it is warm or cold outside. even though they may have made the temperature measurement system of celsius, they do not seem to understand it all that well. so, this computer program will make sure that the humans always know whether or not it is hot or cold.</p>"
  ?>

  <!-- This form collects the user's celsius. -->
  <form action="./results.php" method="post" target="judged-celsius">
    <label for="user-celsius">Input the temperature in celsius so that it may be Judged.</label>
    <input type="number" id="user-celsius" step="0.01" placeholder="Temperature in Celsius" name="user-celsius">
    <br>
    <br>
    <input type="submit" value="Judge Temperature">
    <br>
    <br>
  </form>

  <!-- this section of the code will relay the judgement passed by this program concerning whether or not the temperature in celsius is hot or cold to the user. -->
  <iframe id="judged-celsius" name="judged-celsius">
  </iframe>
</body>
</html>