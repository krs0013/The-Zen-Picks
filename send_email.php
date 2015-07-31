<?php
	if (!isset($_POST['user_email']) || trim($_POST['user_email'])==='') {
		// echo '<button onclick="myFunction()">You must enter your email...</button>';

		echo '<script> var x; if (confirm("You must enter your email...") == true) { window.location.replace("http://thezenpicks.com/subscribe.php");} else {window.location.replace("http://thezenpicks.com/subscribe.php");}document.getElementById("demo").innerHTML = x;</script>';

	} else {
		$email_body = "Email: " . $_POST['user_email'];
		$email_body .= "\r\n\r\nResponse:\r\n" . $_POST['body'];

    	mail('thezenpicks@gmail.com', $_POST['title'], $email_body);
		echo '<script> var x; if (confirm("Thank You!\n\rYour email was sent!") == true) { window.location.replace("http://thezenpicks.com/subscribe.php");} else {window.location.replace("http://thezenpicks.com/subscribe.php");}document.getElementById("demo").innerHTML = x;</script>';
	}
?>