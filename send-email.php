<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "vendor/autoload.php";

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);


$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = "noahhagardent@gmail.com";
    $mail->Password = "polimunrzrpkoyhe";

    $mail->setFrom($email, $name);
    $mail->addAddress('noahhagardent@gmail.com', 'Noah');

    $mail->isHTML(true);
    $mail->Subject = 'New Message From Portfolio';
    $mail->Body = $message;

    $mail->send();
    echo "email sent";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

$mail->smtpClose();