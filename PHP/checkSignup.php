<?php
include('dbConn.php');

if (isset($_POST['action'])) {
	if ($_POST['action']=="signup") {
		$username = mysqli_real_escape_string($connection,$_POST['name']);
        $email = mysqli_real_escape_string($connection,$_POST['email']);
        $password = mysqli_real_escape_string($connection,$_POST['password']);
	}
}

?> 