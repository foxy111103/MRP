<?php

$host = "localhost"; // Database host
$username = "root"; // Database username
$password = ""; // Database password
$dbname = "mrps"; // Database name

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
function hashPassword($password) {
  return password_hash($password, PASSWORD_DEFAULT);
}
?>
