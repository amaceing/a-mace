<?php
$servername = "amaceing.db.11908153.hostedresource.com";
$username = "amaceing";
$password = "Mandi2005!!!!";
$dbName = "amaceing";
$port = 3306;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName, 3306);

// Check connection
if ($conn->connect_error) {
	echo "nope";
    die("Connection failed: " . $conn->connect_error);
} else {
	echo "Connected successfully ";
}

?> 