<?php
$servername = "localhost";
$username = "man";
$password = "man";
$dbName = "ubuntu_cluster_1";

// Create connection
$conn =mysqli_connect($servername, $username, $password, $dbName);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>