<?php
// переменные, полученные из форм на сайте
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'php/Exception.php';
require 'php/PHPMailer.php';
require 'php/SMTP.php';


$phone = $_POST["phone"];
$name = $_POST["name"];

if(isset($_POST["email"])){
   $email = $_POST["email"];
}else{
   $email = '-';
};

if(isset($_POST["text"])){
   $dop = $_POST["text"];
}else{
   $dop = '-';
};

$email_body = "

<h2 style='font-weight:normal;font-size:20px;line-height: 30px;margin-bottom:5px;font-family:tahoma;padding:0;'><b>E-mail:</b> ".$email."</h2>
<h2 style='font-weight:normal;font-size:20px;line-height: 30px;margin-bottom:5px;font-family:tahoma;padding:0;'><b>Phone:</b> ".$phone."</h2>
<h2 style='font-weight:normal;font-size:20px;line-height: 30px;margin-bottom:5px;font-family:tahoma;padding:0;'><b>Name:</b> ".$name."</h2>
<h2 style='font-weight:normal;font-size:20px;line-height: 30px;margin-bottom:5px;font-family:tahoma;padding:0;'><b>Message:</b> ".$dop."</h2>";


/*$mail = new PHPMailer();
$mail->CharSet = 'utf-8';



$mail->From = 'info@jorange.com.ua'; //todo: change from address
$mail->FromName = 'Kandio LTD';
$mail->AddAddress('contact@jorange.com.ua', 'Kandio LTD');
$mail->Subject = 'New subscription from website';
$mail->MsgHTML($email_body);

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
} else {
   echo '1';
}*/



$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
   /* $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'user@example.com';                 // SMTP username
    $mail->Password = 'secret';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;              */                      // TCP port to connect to
    $mail->CharSet = 'utf-8';
    //Recipients
    $mail->setFrom('contact@jorange.agency ', 'Kandio landing');
    $mail->addAddress('Marcus@kandio.se ', 'Marcus');     // Add a recipient
    $mail->addReplyTo('contact@jorange.agency ', 'Kandio landing');


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'New subscriber';
    $mail->Body    = $email_body;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


