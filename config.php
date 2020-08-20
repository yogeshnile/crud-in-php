<?php
//conction to database
$server = "localhost";
$user = "root";
$pass = "";
$database = "todo";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn){
  die("Sorry Connection error: ". mysqli_connect_error());
}
?>