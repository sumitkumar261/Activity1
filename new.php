<?php
  if( $_POST["fname"] || $_POST["pwd"] ) {
    echo "Welcome: ". $_POST["fname"]. "<br />";
    echo "Your Password is: ". $_POST["pwd"];
    exit();
  }
?>