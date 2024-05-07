<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "client_hacker_third_eye";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>