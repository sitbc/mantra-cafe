<?php
$subject = $_REQUEST['subject'] . 'Üzenet a honlapon keresztül'; // Subject of your email
$to = "balazs.peter@outlook.com";  //Recipient's E-mail
$charset="UTF-8";
$ctencoding="8bit";
$email_title = "Az üzenet tartalma";
$spam = $_REQUEST['spam'];

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $_REQUEST['emailaddress'] . "\r\n"; // Sender's E-mail
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$message .= "Content-Type: text/html; charset=$charset\n";
$message .= "Content-Transfer-Encoding: $ctencoding\n\n";
$message .= "<h2>$email_title:</h2>";
$message .= 'Név: ' . $_REQUEST['name'] . "<br>";
$message .= 'Üzenet: ' . $_REQUEST['message'];

if ($spam == 0){

	if (@mail($to, $subject, $message, $headers))
	{
		// Transfer the value 'sent' to ajax function for showing success message.
		echo 'sent';
	}
	else
	{
		// Transfer the value 'failed' to ajax function for showing error message.
		echo 'failed';
	}
}
?>