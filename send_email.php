<?php
    mail('thezenpicks@gmail.com', $_POST['title'], $_POST['body']);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Thank you!</title>

		<link rel="icon" type="image/gif" href="images/fav_icon.png">
	</head>

	<body>
		<p style="vertical-align: middle; font-size: 500%; font-family: Copperplate, Verdana;">
			<center>
				<h1>Thank you for your feedback!</h1>
				Your message has been sent.
			</center>
		</p>	
	</body>
</html>