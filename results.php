<?php
  $user_celsius = $_POST["user-celsius"];
?>
<h5>Results:</h5>
<?php
  if ($user_celsius < 15) {
    echo "the temperature you have inputted is " . $user_celsius . ". this means that it is cold outside";
  }
  else {
    echo "the temperature you have inputted is " . $user_celsius . ". this means that it is hot outside.";
  }
?>