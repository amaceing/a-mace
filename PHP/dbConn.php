<?php
$servername = "amaceing.db.11908153.hostedresource.com";
$username = "amaceing";
$password = "Mandi2005!!!!";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 