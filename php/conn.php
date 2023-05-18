<?php
// Create 4 variables to store these information
$server="localhost";
$username="asma";
$password="asmamezni";
$database = "collecte";
// Create connection
$conn = new mysqli($server, $username, $password, $database);
// Check connection
if ($conn) {
  echo("connection succeded");
}
else {
  echo("connection failed");
}
?>
