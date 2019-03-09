<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
//require 'vendor/autoload.php';
require_once 'Exception.php';
require_once 'PHPMailer.php';
require_once 'SMTP.php';


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

//print_r($mail);
try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.mailgun.org';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'postmaster@sandbox56db2beea2794496a6f3f5ffbfe3d689.mailgun.org';                 // SMTP username
    $mail->Password = '3e67c4110b18ab95b73d7e65e97f8f8e-1b65790d-a36b842c';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('subratpalhar92@gmail.com', 'Subrat');
    $mail->addAddress('subratpalhar92@gmail.com', 'Subrat1');     // Add a recipient

    //Content
    $mail->isHTML(false);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body = 'This is the HTML message bodyin bold!';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}







//..