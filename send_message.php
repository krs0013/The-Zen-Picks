<?php
	include_once "connect.php";

	$title = mysql_escape_string($_POST['title']);
	$body = mysql_escape_string($_POST['body']);

	$title = str_replace("\\r\\n", "qwerty", $title);
	$body = str_replace("\\r\\n", "qwerty", $body);

	// $title = htmlentities($_POST['title']);
	// $body = htmlentities($_POST['body']);

	$query = mysqli_query ($connect, "INSERT INTO blogData (title, body) VALUES ('{$title}','{$body}')") or die (mysqli_error($connect));
	
    header("refresh:0; url=admin");
    echo "The post was successfully sent!<br>Your page will be refreshed.";
    echo "<br><br>Title: {$title}";
    echo "<br>Body: {$body}";
?>