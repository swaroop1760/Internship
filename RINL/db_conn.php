<?php
$servername = "localhost";
$username = "root";
$password = "YES";
$database = "login_db";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Connection successful, you can now perform database operations

// Close the connection
$conn->close();
echo "HELLO";
?>