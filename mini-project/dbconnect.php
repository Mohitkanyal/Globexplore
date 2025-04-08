<?php
  $server=getenv("DB_SERVER");
  $userid=getenv("DB_USER");
  $pwd=getenv("DB_PASS");
  $dbname=getenv("DB_NAME");
  $conn = mysqli_connect($server, $userid, $pwd, $dbname);
//Check connection
if (!$conn) 
  	die("Connection Error: " . mysqli_connect_error());
?>
