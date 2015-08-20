<?php
require 'class.phpmailer.php';
require 'class.smtp.php';
require 'class.pop3.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;   // Enable verbose debug output

$mail->isSMTP();                                      
$mail->Host = 'smtp.secure.com';  
$mail->SMTPAuth = true;                               
$mail->Username = 'secure@secure.com'; // SMTP username
$mail->Password = 'secure';  // SMTP password
$mail->SMTPSecure = 'ssl'; // Accept SSL/TLS 
$mail->Port = 465;  // TCP port to connect to

$mail->From = 'name@secure.com';
$mail->FromName = 'Padmanaban Mailer';
$mail->addAddress('minewebdesign@gmail.com', 'Padmanaban'); //Add a recipient
$mail->addReplyTo('info@secure.com', 'Information');
$mail->addCC('cc@secure.com');
$mail->addBCC('bcc@secure.com');

$mail->isHTML(true); // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}