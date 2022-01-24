<?php
$name = $_POST['name'];
$visitior_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'info@amitcoding.com';

$email_subject = 'New form submission';

$email_body = "User Name: $name.\n".
               "User Email: $visitior_email.\n".
               "User Subject: $subject.\n".
               "User Message: $message.\n";

$to = "amitmishra@gmail.com";
$headers = "From: $email_from \r\n";

$headers .="Reply to: $visitior_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");


?>
