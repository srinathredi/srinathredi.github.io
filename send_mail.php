<?php
header("access-control-allow-origin: *");
	if (isset($_POST["name"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
        $mobile = $_POST['mobile'];
		$message = $_POST['message'];
        
        echo $name;
        echo "<br>";
        echo $email;echo "<br>";
        echo $mobile;echo "<br>";
        echo $message;echo "<br><hr>";
        
		
		$from = "From: {$email}\r\n";
		$to = 'info@srinathreddy.tech'; 
		$subject = 'Message from Enquiry form';
		
		$body ="From: $from <br> E-Mail: $email <br> Mobile: $mobile <br> Message: $message <hr>";
		// Check if name has been entered
		//if (!$_POST['name']) {
		//	$errName = 'Please enter your name';
		//}
		
		// Check if email has been entered and is valid
		//if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		//	$errEmail = 'Please enter a valid email address';
		//}
		
		//Check if message has been entered
		//if (!$_POST['message']) {
		//	$errMessage = 'Please enter your message';
		//}
		//Check if simple anti-bot test is correct
		//if ($human !== 5) {
		//	$errHuman = 'Your anti-spam is incorrect';
		//}
// If there are no errors, send the email
        
        echo $from;echo "<br>";
        echo $to;echo "<br>";
        echo $subject;echo "<hr>";
        echo $body;echo "<br>";

	if (mail ($to, $subject, $body, $from)) {
		header("Location: http://betatesting.space/");
	} else {
		echo $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}

	}
else
    echo "invalid request";
?>    