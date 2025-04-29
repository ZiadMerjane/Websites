<?php
$host = "localhost";
$username = "if0_38864868";
$password = "Merjaninox48937";
$database = "merjaninox_store";

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
