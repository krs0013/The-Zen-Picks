<!DOCTYPE HTML>
<html>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0"> <!-- maximum-scale=1, user-scalable=0 -->
		<link rel="stylesheet" href="../css/style.css" />

		<title>The Zen Picks</title>
		<link rel="icon" type="image/gif" href="../images/fav_icon.png">
	</head>


	<body>
	   <header class="zenPicks_title">
	   		The Zen Picks
	   		<a href="http://thezenpicks.com/login.php"><span class="smallText" >Login</span></a>
	   </header>
		<ul class="navigation">
		    <li class="nav-item"><a href="#"></a></li>
		    <br>
			<div style="width: 200px;">
				<a href="https://twitter.com/thezenpicks" ><img src="../images/twitter.png" align="left" class="social"/></a>
				<a href="https://www.facebook.com/TheZenPicks" ><img src="../images/facebook.png" align="left" class="social"/></a>
				<a href="https://instagram.com/thezenpicks/" ><img src="../images/instagram.png" align="left" class="social"/></a>
		    </div>
		    <br>
		    <br>
		    <br>
		    <br>
		    <li class="nav-item"><a href="http://thezenpicks.com/">Home</a></li>
		    <li class="nav-item"><a href="http://thezenpicks.com/philosophy.php">Philosophy</a></li>
		    <li class="nav-item"><a href="http://thezenpicks.com/performance.php">Performance</a></li>
		    <li class="nav-item"><a href="http://thezenpicks.com/subscribe.php">Subscribe</a></li>
		    <hr>
		    <li class="nav-item"><a href="http://thezenpicks.com/login">Member's Login</a></li>
		    <li class="nav-item"><a href="http://thezenpicks.com/admin">Admin</a></li>
		</ul>

		<input type="checkbox" id="nav-trigger" class="nav-trigger" />
		<label for="nav-trigger"></label>

		<div class="site-wrap">
	    <center>
		<table>
			<tr id="tr1" height="10%"><td><h1><b>Admin Page</b></h1></td></tr>
		</table>
		<table>
			<tr height="auto"><td>
				<center>
				<form method="post" action="../send_message.php">
					TITLE: <br />
					<input name="title" id="title" class="title" type="text" style="width:90%;"/><br><br>
					BODY: <br />
					<textarea name="body" id="title" class="body" type="text" style="width:90%;"></textarea><br>
					<input type="submit" value="Post">
				</form>
				</center>
			</td></tr>
		</table>
		<table>
			<tr height="80%"><td width="10%">

			<?php
				require_once "../connect.php";

				$command = "SELECT * FROM blogData ORDER BY id DESC";
				$query = mysqli_query($connect, $command) or die (mysqli_error());

				$counter = 0;

				while($row = mysqli_fetch_array($query)) {

					$id = $row[id];
					$title = $row[title];
					$body = $row[body];
					$date = $row[date];

					// Allows the title to have return characters
					$title = str_replace("qwerty", "<br>", $title);

					// Allows the body to have return characters
					$body = str_replace("qwerty", "<br>", $body);

					$post = "<div style=\"margin-left:10px;\"><h1>{$title}</h1><p>{$body}</p><p>Posted on: {$date}</p></div>";

					echo $post;

					$counter++;
					if ($counter === 5) break;

					echo '<hr>';

				}

				mysqli_free_result($query);
			?>
		</td>
<!-- 		<td width="20%">
			Sidebar
			<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
			">
			<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/x-click-but6.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
			<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</form>

		</td> -->
		</tr>
		</table>
		<table width="75%">
			<tr height="5%" align="right"><td>&copy all rights reserved</td></tr>
		</table>
	</center>
	   </div>
	</body>


</html>