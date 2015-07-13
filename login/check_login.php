<?php
	include_once "../connect.php";

	function checkLogin($username, $password) {

		// Make the query and execute it
		$query = "SELECT * FROM login_credentials WHERE username = '".sha1($username)."' and password = '".sha1($password)."'";
		$query_result = mysql_query($query);
		// If there is one result the user can be logged in
		if (mysql_num_rows($query_result)==1){
			header("refresh:3; url=../index.php");
		}else{
			header("refresh:3; url=../unsuccessful_checkout.php");
		}
	    
	}
?>