<?php
$servername = "localhost:1010";
$username = "root";
$password = "qwerty122333";
$database = "drug";


// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
