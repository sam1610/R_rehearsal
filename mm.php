<?php
$to      = 'samir.mari@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@myr.gov.tv' . "\r\n";
mail($to, $subject, $message, $headers);
?>