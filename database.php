<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "khushbu";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE trip (
sno INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
dest VARCHAR(30) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "Table trip  created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>