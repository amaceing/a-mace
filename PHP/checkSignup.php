<?php
include('dbConn.php');

if (isset($_POST['action'])) {
	if ($_POST['action']=="signup") {

		//Get values from post
		$username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        //SQL
        $query = "SELECT email FROM users WHERE email = '".$email."'";
        $result = mysqli_query($conn, $query); //result of the query
        $numResults = mysqli_num_rows($result); //num row query returned

        // Validate email address
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
            $message =  "Invalid email address please type a valid email!!";
        } elseif ($numResults>=1) {
            $message = $email." Email already exist!!";
        } else {
        	echo "query";
            mysqli_query($conn, "insert into users(username, email, password) values('".$username."','".$email."','".md5($password)."')");
            $message = "Signup Sucessfully!!";
        }
	}
}

?> 