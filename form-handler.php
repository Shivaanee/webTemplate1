<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'contact@template1.42web.io';
$email_subject = 'Contact Form Submission';
$email_body = "User: $name \n\n".
                "Email: $visitor_email \n\n".
                "Subject: $subject \n\n".
                "Message: $message \n\n";

$to = 'eshiva200@gmail.com';

$headers = "From: $email_from \r\n";

$headers .="Relpy-To $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");
?>