<?php
  // Replace the variable values below
  // with your specific database information.
  $host = "127.0.0.1";
  $user = "root";
  $pass = "root";
  $db = "aboutmed";

  // This part sets up the connection to the
  // database (so you don't need to reopen the connection
  // again on the same page).
  $link = mysqli_connect($host, $user, $pass);
  if ( !$link)
  {
    echo "Error connecting to database.\n";
  }

  // Then you need to make sure the database you want
  // is selected.
  mysqli_select_db($link,$db);
?>