<?php
require_once 'vendor/autoload.php';
require_once 'config/constants.php';

if(isset($_POST['subscribe-btn'])){
// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  ->setUsername(EMAIL)
  ->setPassword(PASSWORD)
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Subscription email'))
  ->setFrom([EMAIL => $_POST['subscribe-form']])
  ->setTo(['thegreattobeteam@gmail.com'])
  ->setBody($_POST['subscribe-form'])
  ;

// Send the message
if ($mailer->send($message)){
  echo "Mail sent.. !!";
  header("Location: index.php");
}else{
  echo "Failed to send";
}
}