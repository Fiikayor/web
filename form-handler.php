<?php
$name = $_POST['name'];
$vistors_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';
$email_subject = 'New form submission';
$email_body = "user name: $name.\n".
                "User email: $vistors_email.\n".
                "subject: $subject.\n". 
                "User message: $message.\n";

$to = 'awoyiolafikayo@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply to: $vistors_email r\rn";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");


?>