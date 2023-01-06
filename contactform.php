<?php	

	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'taylor@taylorzewen.com';
	$email_subject = "New form submission";
	$email_body = "From: $name.\n'.'Email: $visitor_email.\n'.'Message: $message.\n";
	
	$to = 'taylor@taylorzewen.com';

	$headers = "From: $email_from \r\n";
	$headers .= "Reply-To: $visitor_email \r\n";
	
	mail($to,$email_subject,$email_body,$headers);

	header("Location: index.html");

?>
