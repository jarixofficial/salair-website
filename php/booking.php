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
$sql = "CREATE TABLE `booking` (
	`Flight` VARCHAR(64),
	`fFrom` VARCHAR(64),
	`fTo` VARCHAR(64),
	`Departure` DATE(64),
	`fReturn` DATE(64),
	`aPax` INT(20),
	`cPax` INT(20),
	`iPax` INT(20)
);";

if ($conn->query($sql) === TRUE) {
  echo "Table booking created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>