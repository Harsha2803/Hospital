<?php
$name = $_POST[''];
$visitor_email = $_POST[''];
$servicetype = $_POST[''];
$message = $_POST[''];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $servicetype.\n".
                "User Message: $message.\n";

$to = 'ouremail@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>
