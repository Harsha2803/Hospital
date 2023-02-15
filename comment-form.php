<?php
$name = $_POST[''];
$visitor_email = $_POST[''];
$comment = $_POST[''];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Opinion Comment';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $servicetype.\n".
              "User Comment: $comment.\n";

$to = 'ouremail@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>
