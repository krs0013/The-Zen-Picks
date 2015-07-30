<?php
	include_once "../connect.php";
	// include "../admin/security.php";

	$usrname = mysql_escape_string($_POST['username']);
	$pswd = mysql_escape_string($_POST['password']);
	$pswd_confirm = mysql_escape_string($_POST['password_confirm']);

	// $security_question_1 = mysql_escape_string($_POST['security_question_1']);
	// $security_answer_1 = mysql_escape_string($_POST['security_answer_1']);
	// $security_question_2 = mysql_escape_string($_POST['security_question_2']);
	// $security_answer_2 = mysql_escape_string($_POST['security_answer_2']);

	// Hash the password to keep it "encoded"... lol
	// $sha_user = sha1($usrname);
	// $sha_pass = sha1($pswd);

	// Check to see if the user did not enter a password
	if (!isset($pswd) || trim($pswd)==='') {
		session_start();
	    $_SESSION['GRANTED'] = true;
		header("refresh:5; url=index.php");
		echo "<h1>Error</h1>";
    	echo "You cannot have an empty password.<br>Redirecting to previous page...";
	}
	// If password and password confirmation dont match, kick out
	else if ($pswd !== $pswd_confirm) {	// $sha_pass !== sha1($pswd_confirm) //
		session_start();
	    $_SESSION['GRANTED'] = true;
		header("refresh:5; url=index.php");
		echo "<h1>Error</h1>";
    	echo "Your password and password confirmation did not match.<br>Redirecting to previous page...";
	} 
	// Check to see if the user left the username field empty
	else if (!isset($usrname) || trim($usrname)==='') {
		session_start();
	    $_SESSION['GRANTED'] = true;
		header("refresh:5; url=../login_setup/");
		echo "<h1>Error</h1>";
    	echo "You cannot have a blank username<br>Redirecting to previous page...";
	} 
	// Did the user leave security question 1 or 2 on the default selection?
	// else if ($security_question_1 === 'temp' || $security_question_2 === 'temp') {
	// 	session_start();
	//     $_SESSION['GRANTED'] = true;
	// 	header("refresh:5; url=../login_setup/");
	// 	echo "<h1>Error</h1>";
 //    	echo "You must fill in both security questions.<br>Redirecting to previous page...";
	// }
	// // Did the user leave security answer 1 or 2 blank?
	// else if ((!isset($security_answer_1) || trim($security_answer_1)==='') 
	// 	  || (!isset($security_answer_2) || trim($security_answer_2)==='')) {
	// 	session_start();
	//     $_SESSION['GRANTED'] = true;
	// 	header("refresh:5; url=../login_setup/");
	// 	echo "<h1>Error</h1>";
 //    	echo "You must fill in both security answers.<br>Redirecting to previous page...";
	// }
	// // Don't allow the user to select the SAME security questions
	// else if ($security_question_1 === $security_question_2) {
	// 	session_start();
	//     $_SESSION['GRANTED'] = true;
	// 	header("refresh:5; url=../login_setup/");
	// 	echo "<h1>Error</h1>";
 //    	echo "You cannot choose the same security question twice.  Please select two different security questions.<br>Redirecting to previous page...";
	// }
	// Otherwise everything must have been okay.
	else {
		// $sha_user = sha1($usrname);

		// Inserts information into database
		$query = mysqli_query ($connect, "INSERT INTO login_credentials (username, password) VALUES ('{$usrname}','{$pswd}')") or die (mysqli_error($connect));

		// Redirects user to the login page.
	    header("refresh:0; url=../login/");
		echo "<h1>The post was successfully sent!</h1><br>Redirecting to the login page...";
	    //echo "<br><br>Query: INSERT INTO login_credentials (username, password, security_question_1, security_answer_1, security_question_2, security_answer_2) VALUES ('{$usrname}','{$pswd}','{$security_question_1}','{$security_answer_1}','{$security_question_2}','{$security_answer_2}')";
	    // echo "<br><br>Username: {$usrname}";
	    // echo "<br>Password: {$sha_pass}";
	    // echo "<br>Password Confirm: {$pswd_confirm}";
	    // echo "<br><br>Security Question 1: {$security_question_1}";
	    // echo "<br>Security Answer 1: {$security_answer_1}";
	    // echo "<br><br>Security Question 2: {$security_question_2}";
	    // echo "<br>Security Answer 2: {$security_answer_2}";
	}
?>