<?php
$to = 'your-email@example.com';
$subject = 'Test Email';
$message = 'This is a test email from the server.';
$headers = 'From: shubhambharti711t@example.com';
if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully.';
} else {
    echo 'Email sending failed.';
}
?>
