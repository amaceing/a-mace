<?php
$myData = json_decode($_POST['myData']);
print_r($myData);

$to = 'amace93@gmail.com';
$nameOfSender = $myData[0];
$from = $myData[1];
$subject = $myData[2];
$message = ' Name:  ' . $nameOfSender . '\n Message: ' . $myData[3];
$headers = 'From: ' .$from  . '\r\n' .
            'Reply-To: ' . $from  . '\r\n' .
            'X-Mailer: PHP/' . phpversion();

print_r($subject);
print_r($message);

mail($to, $subject, $message, $headers);


?>