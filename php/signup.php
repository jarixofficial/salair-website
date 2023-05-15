<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "flightinfo";

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE `signup` (
	`fname` VARCHAR(64),
	`lname` VARCHAR(64),
	`email` VARCHAR(64),
	`pass` VARCHAR(64),
	`cpass` VARCHAR(64)
);";

if ($conn->query($sql) === TRUE) {
  echo "Table signup1 created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>