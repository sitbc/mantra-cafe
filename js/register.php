<?php
$subject = $_REQUEST['subject'] . 'Új regisztráció érkezett'; // Subject of your email
$to = "balazs.peter@outlook.com";  //Recipient's E-mail
$charset="UTF-8";
$ctencoding="8bit";
$email_title = "Regisztráló adatai";
$email_address = $_REQUEST['emailaddress'];

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $email_address . "\r\n"; // Sender's E-mail
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$message .= "Content-Type: text/html; charset=$charset\n";
$message .= "Content-Transfer-Encoding: $ctencoding\n\n";
$message .= "<h2>" . $_REQUEST['title'] . "</h2>";
$message .= 'Esemény időpontja: ' . $_REQUEST['date'] . "<br><br>";
$message .= "<h3>$email_title:</h3>";
$message .= 'Név: ' . $_REQUEST['name'] . "<br>";
$message .= 'Telefonszám: ' . $_REQUEST['phone'] . "<br>";
$message .= 'email cím: ' . $_REQUEST['emailaddress'] . "<br>";
$message .= 'Számlázási cím: ' . $_REQUEST['address'];


if (@mail($to, $subject, $message, $headers))
{
	// Transfer the value 'sent' to ajax function for showing success message.
	echo 'sent';
	
	$subject_confirm = ' - KapCsoda - Regisztráció visszaigazolása';
	
	$headers_confirm  = 'MIME-Version: 1.0' . "\r\n";
	$headers_confirm .= "From: " . $to . "\r\n"; // Sender's E-mail
	$headers_confirm .= 'Content-type: text/html; charset=utf-8' . "\r\n";

	
	$message_confirm .= "Kedves ". $_REQUEST['name'] ."!<br><br>";
	$message_confirm .= "Köszönjük jelentkezésed <b>" . $_REQUEST['title'] . "</b> című képzésünkre, regisztrációdat ezúton visszaigazoljuk.<br>";
	$message_confirm .= 'Esemény időpontja: ' . $_REQUEST['date'] . "<br><br>";
	$message_confirm .= "Kérjük ne feledd, részvételi helyed a befizetés után válik véglegessé.<br><br>";
	//$message_confirm .= "KapCsoda Alapítvány - OTP Bank: 11714051-20003452-00000000<br><br><b>FONTOS!</b> Közleménybe kérjük írja be: képzés / képzésen résztvevő személy neve.<br>";
	$message_confirm .= "Szeretettel várjunk!<br><br>";
	$message_confirm .= "Üdvözlettel,<br><br>";
	$message_confirm .= "Mantra Coffee - http://mantracoffee.hu/";
	
	
	mail($email_address, $subject_confirm, $message_confirm, $headers_confirm);
}
else
{
	// Transfer the value 'failed' to ajax function for showing error message.
	echo 'failed';
}
?>