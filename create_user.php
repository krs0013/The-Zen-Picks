<?php
	include_once "connect.php";

	$usrname = mysql_escape_string($_POST['username']);
	$pswd = mysql_escape_string($_POST['password']);
	$pswd_confirm = mysql_escape_string($_POST['password_confirm']);

	$security_question_1 = mysql_escape_string($_POST['security_question_1']);
	$security_answer_1 = mysql_escape_string($_POST['security_answer_1']);
	$security_question_2 = mysql_escape_string($_POST['security_question_2']);
	$security_answer_2 = mysql_escape_string($_POST['security_answer_2']);


	//$query = mysqli_query ($connect, "INSERT INTO blogData (title, body) VALUES ('{$title}','{$body}')") or die (mysqli_error($connect));
	
    //header("refresh:3; url=admin");
    echo "The post was successfully sent!<br>Please wait 3 seconds for the page to refresh.";
    echo "<br><br>Username: {$usrname}";
    echo "<br>Password: {$pswd}";
    echo "<br>Password Confirm: {$pswd_confirm}";
    echo "<br><br>Security Question 1: {$security_question_1}";
    echo "<br>Security Answer 1: {$security_answer_1}";
    echo "<br><br>Security Question 2: {$security_question_2}";
    echo "<br>Security Answer 2: {$security_answer_2}";
?>