<?php

require_once 'vendor/autoload.php';
require_once 'config/constants.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  ->setUsername(EMAIL)
  ->setPassword(PASSWORD)
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);


function  sendVerificationEmail($email, $token){

    global $mailer;

    $body = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verify email</title>
</head>
<body>
    <div class="wrapper">
        <p>
            Thank You for signing up on our platform. Please check the link below
            to verify your email.
        </p>
        <a href="http://localhost/Justise3/login.php?token=' . $token . '" >
            Verify your email address
        </a>
    </div>
</body>
</html>';
        // Create a message
    $message = (new Swift_Message('Verify your email address'))
    ->setFrom(EMAIL)
    ->setTo($email)
    ->setBody($body, 'text/html')
    ;

    // Send the message
    $result = $mailer->send($message);
}

function sendPasswordResetLink($email, $token)
{
    global $mailer;

    $body = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verify email</title>
</head>
<body>
    <div class="wrapper">
        <p>
            Hello there,

            please click on the link below to reset your password.
        </p>
        <a href="http://localhost/Justise3/reset_password.php?password-token=' . $token . '" >
            Reset your password
        </a>
    </div>
</body>
</html>';
        // Create a message
    $message = (new Swift_Message('Reset your password'))
    ->setFrom(EMAIL)
    ->setTo($email)
    ->setBody($body, 'text/html')
    ;

    // Send the message
    $result = $mailer->send($message);
}
