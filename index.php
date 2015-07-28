<?php
	session_start();
	$_SESSION['GRANTED'] = false;

	include 'nonmember.php';
?>