<?php

	$myemail = 'taylor@taylorzewen.com';	

	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = $myemail;
	$email_subject = "New form submission";
	$email_body = "From: $name.\n'.'Email: $visitor_email.\n'.'Message: $message.\n";
	
	$to = $myemail;

	$headers = "From: $myemail\n";
	$headers .= "Reply-To: $visitor_email;
	
	mail($to,$email_subject,$email_body,$headers);

?> 
