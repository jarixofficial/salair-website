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
$sql = "CREATE TABLE paymentcc (
  id INT AUTO_INCREMENT PRIMARY KEY,
  Payment VARCHAR(50),
  Name VARCHAR(50),
  CardNumber VARCHAR(50),
  CVV VARCHAR(10),
  Expiration VARCHAR(10),
  Address VARCHAR(100),
  Address2 VARCHAR(100),
  ZipCode VARCHAR(20)
);";

if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>