<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'init.php';


$mail = new PHPMailer(true);

$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
$mail->isSMTP();                                            // Send using SMTP
$mail->Host = 'smtp.mail.ru';                    // Set the SMTP server to send through
$mail->SMTPAuth = true;                                   // Enable SMTP authentication
$mail->Username = 'udzsqdghotqqogwk@mail.ru';                     // SMTP username
$mail->Password = 'cegYADNWAUVHXLQG';                               // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
$mail->Port = 465;

$mail->setFrom('udzsqdghotqqogwk@mail.ru', 'Marat Test');
$mail->addAddress('marat.icanall@ya.ru');
//$mail->addAddress('maratdarbisev@gmail.com');

$mail->isHTML(true);
$mail->Subject = 'test';
$mail->Body = file_get_contents('http://chasdom-mail.icanall10.ru/design.php');
$mail->CharSet = 'UTF-8';

echo $mail->send();
