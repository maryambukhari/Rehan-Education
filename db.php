<?php
$host = "localhost"; // Replace with actual host if remote (e.g., from your DB provider)
$username = "uxhc7qjwxxfub";
$password = "g4t0vezqttq6";
$dbname = "dbraztjuuf0kni";

// Create connection using mysqli (pro level with error handling)
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to UTF-8 for proper encoding
$conn->set_charset("utf8mb4");
?>
