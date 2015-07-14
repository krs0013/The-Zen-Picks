<?php
	$DBHost = "<your_host_name>";
    $DBUser = "<your_user_name>";
    $DBPass = "<your_password>";
    $DBName = "<your_db_name>";

    $connect = mysqli_connect($DBHost, $DBUser, $DBPass, $DBName) or die ("Unable to connect to server");
?>