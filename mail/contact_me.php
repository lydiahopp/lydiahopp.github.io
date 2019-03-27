<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'test@test.de'; // Email Adresse hier austauschen statt '' test@test.de - Hier kommt die Nachricht an
$email_subject = "Website Contact Form:  $name";
$email_body = "Sie haben eine Email von ihrer Homepage..\n\n"."Hier die Details:\n\nName: $name\n\nEmail: $email_address\n\nTelefon: $phone\n\nNachricht:\n$message";
$headers = "From: test@test.de\n"; // Das ist die Adresse die beim Empfänger angezeigt wird.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>