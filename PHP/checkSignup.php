<?php
include('dbConn.php');

if (isset($_POST['action'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


	if ($_POST['action'] == "signup") {
        $email = mysqli_real_escape_string($conn, $_POST['email']);

        //SQL
        $query = "SELECT email FROM users WHERE email = '".$email."'";
        $result = mysqli_query($conn, $query); //result of the query
        $numRowsReturned = mysqli_num_rows($result); //num row query returned

        // Validate email address
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
            $message =  "Invalid email address please type a valid email!";
        } elseif ($numRowsReturned >= 1) {
            $message = $email." Email already exist!!";
        } else {
            $insertStatement = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '".md5($password)."')";
            $result = mysqli_query($conn, $insertStatement);
            if ($result === false) {
                $message = "didn't work";
                echo "Error: " . mysqli_error($conn);
            } else {
                $message = "Signup Sucessfully!";
            }        
        }
        echo $message;
	} elseif ($_POST['action'] == "login") {
        $query = "SELECT username FROM users WHERE username = '$username' AND password = '".md5($password)."'";
        $result = mysqli_query($conn, $query);
        if ($result === false) {
            echo "Error: " . mysqli_error($conn);
        }
        $numRowsReturned = mysqli_num_rows($result);
        if ($numRowsReturned == 1) {
            $message = "Login Successful!";
        } else {
            $message = "Login Unsuccessful!";
        }
        echo $message;
    }
}

?>