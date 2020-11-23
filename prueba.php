<?php

require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';
require 'OAuth.php';

$mail = new PHPMailer(true);
//exceptions
try{
    //server settings
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = "alfonso.juarezkelly@gmail.com";
    $mail->Password = "ajk44657";
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
  
    //Recipients
    $mail->setFrom('alfonso.juarezkelly@gmail.com', 'Alfonso');
    $mail->addAddress('alfonso.juarezkelly@gmail.com');
    
    //Content
    $mail->isHTML = (true);
    $mail->Subject = 'Asunto';
    $mail->Body = 'Correo prueba');
    

}    





