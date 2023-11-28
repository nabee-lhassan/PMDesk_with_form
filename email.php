<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];

    //Load Composer's autoloader
    require 'phpmailer/Exception.php';
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';
    // require 'vendor/autoload.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                  // Send using SMTP
        $mail->Host = 'smtpout.secureserver.net'; // Set the SMTP server to send through
        $mail->SMTPAuth = true;           // Enable SMTP authentication
        $mail->Username = 'info@pmdeskapp.com'; // Your Hostinger email
        $mail->Password = 'Adsvr!@#45'; // Your email password
        $mail->SMTPSecure = 'ssl'; // Use TLS
        $mail->Port = 465;                // Port number for TLS

        // Recipients
        $mail->setFrom('info@pmdeskapp.com', '');
        $mail->addAddress('info@pmdeskapp.com', 'info@pmdeskapp');

        // Content
        $mail->isHTML(true);              // Set email format to HTML
        $mail->Subject = 'Client Email';
        $mail->Body = "Email: $email\n";

        $mail->send();
        echo "Thank you for submitting email.";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>