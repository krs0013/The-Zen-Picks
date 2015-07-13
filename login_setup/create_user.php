<?php
	include_once "../connect.php";
	// include "../admin/security.php";

	$usrname = mysql_escape_string($_POST['username']);
	$pswd = mysql_escape_string($_POST['password']);
	$pswd_confirm = mysql_escape_string($_POST['password_confirm']);

	$security_question_1 = mysql_escape_string($_POST['security_question_1']);
	$security_answer_1 = mysql_escape_string($_POST['security_answer_1']);
	$security_question_2 = mysql_escape_string($_POST['security_question_2']);
	$security_answer_2 = mysql_escape_string($_POST['security_answer_2']);

	// Hash the password to keep it "encoded"... lol
	$sha_user = sha1($usrname);
	$sha_pass = sha1($pswd);

	// If password and password confirmation dont match, kick out
	if ($sha_pass !== sha1($pswd_confirm)) {
		header("refresh:2; url=admin");
    	echo "Your password and password confirmation did not match.<br>Redirecting to previous page...";
	} else {
		$sha_user = sha1($usrname);

		// Inserts information into database
		$query = mysqli_query ($connect, "INSERT INTO login_credentials (username, password, security_question_1, security_answer_1, security_question_2, security_answer_2) VALUES ('{$sha_user}','{$sha_pass}','{$security_question_1}','{$security_answer_1}','{$security_question_2}','{$security_answer_2}')") or die (mysqli_error($connect));

		// Redirects user to the login page.
	    //header("refresh:3; url=admin");
	    echo "The post was successfully sent!<br>Please wait 3 seconds for the page to refresh.";
	    //echo "<br><br>Query: INSERT INTO login_credentials (username, password, security_question_1, security_answer_1, security_question_2, security_answer_2) VALUES ('{$usrname}','{$pswd}','{$security_question_1}','{$security_answer_1}','{$security_question_2}','{$security_answer_2}')";
	    echo "<br><br>Username: {$usrname}";
	    echo "<br>Password: {$sha_pass}";
	    echo "<br>Password Confirm: {$pswd_confirm}";
	    echo "<br><br>Security Question 1: {$security_question_1}";
	    echo "<br>Security Answer 1: {$security_answer_1}";
	    echo "<br><br>Security Question 2: {$security_question_2}";
	    echo "<br>Security Answer 2: {$security_answer_2}";
	}
?>