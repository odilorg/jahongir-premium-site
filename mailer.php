<?php


use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$alert = "";

if (isset($_POST['submit'])){
   

    $secretKey = "";
	$responseKey = $_POST['g-recaptcha-response'];
	$UserIP = $_SERVER['REMOTE_ADDR'];
	$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$UserIP";
	
    $response = file_get_contents($url);
   //$response = true;
    $response = json_decode($response);
   
    

    if ($response->success) {
      
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

    try {
      
    $mail->SMTPDebug = 0;
    $mail->isSMTP(); // Send using SMTP
    $mail->Host = 'smtp.titan.email'; // Set the SMTP server to send through
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'booking@jahongir-premium.uz'; // SMTP username
    $mail->Password = "65GGhhgg&^HHG"; // SMTP password
   $mail->SMTPSecure = "tls"; 
   // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port = 587; // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
   //Recipients
    $mail->setFrom('booking@jahongir-premium.uz', 'Jahongir Premium');
    $mail->addAddress('odilorg@gmail.com', 'Odiljon'); // Add a recipient
//    $mail->addBCC('zafarorg@gmail.com');            // Name is optional
    $mail->addReplyTo('booking@jahongir-premium.uz', 'Jahongir Premium');
    // $mail->addCC('cc@example.com');
       
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = "Message from Jahongir Premium website";
        $mail->Body    = "<h3>Name : $name <br>
                              Email : $email <br>
                              Subject : $subject <br>
                              Mesage : $message</h3>";

        $mail->send();
        $alert = '<div class="mail-success">
                  <span>Message Sent! Thank you for contacting us.</span>
                  </div>';


        } catch (Exception $e) {
            $alert = '<div class="mail-error">
            <span>'.$e->getMessage().'</span>
            </div>';  
        }
    }else {
        $alert = '<div class="mail-error">
        <span>Invalid captcha. Try again</span>
        </div>';  
    }
}




