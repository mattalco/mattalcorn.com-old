<?php
/**
 * This example shows sending a message using PHP's mail() function.
 */

require 'PHPMailerAutoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mail->setFrom('hello@mattalcorn.com', 'mattalcorn.com');

$mail->addAddress('hello@mattalcorn.com');
$mail->AddReplyTo($email, "$name");

$mail->Subject = "$subject";
$mail->Body    = "$message \n\n $name \n $email";

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
