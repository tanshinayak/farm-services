<?php
$servername="localhost";
$Username="root";
$password="";
$dbname = "farmservices";

// Check connection
$conn = mysqli_connect($servername, $Username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>