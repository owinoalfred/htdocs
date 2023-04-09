<?php

$servername = "localhost";
$username = "root";
$password = "root";
$db_name = "ubuntu_cluster_1";
$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn->connect_error)
    die("connection failed".$conn->connect_error);

echo "connection Established";


?>