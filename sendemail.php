<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
include 'connection.php';
function sendEmail($email){
    $mail = new PHPMailer(true);
    $mail-> isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username='neptune.shop2023@gmail.com';
    $mail->Password ='ekaftmoqkqvyeiyz';
    $mail->SMTPSecure='ssl';
    $mail-> Port = 465;

    $mail-> setFrom('neptune.shop2023@gmail.com');
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject='Welecome';
    $mail->Body = 'Your account has been created successfully';
    $mail->send();

}
    




?>