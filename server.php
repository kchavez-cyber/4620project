<?php
$servername = "myaql1.cs.clemson.edu";
$username = "meTube_qiag";
$password = "4620project";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>