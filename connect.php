<<?php
$servername = "localhost";
$username = "sushant";
$password = "DBMSproject";
$dbname="dbms";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

 ?>
