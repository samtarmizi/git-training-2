<?php

$to = "test@example.com";
$subject = "Test Email";
$message = "This is a test email.";
$headers = "From: test@example.com";

mail($to, $subject, $message, $headers);

echo "Email sent successfully";

?>