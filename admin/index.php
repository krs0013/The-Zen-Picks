<!DOCTYPE HTML>
<html>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0"> <!-- maximum-scale=1, user-scalable=0 -->
		<link rel="stylesheet" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />

		<title>The Zen Picks</title>
		<link rel="icon" type="image/gif" href="../images/fav_icon.png">
	</head>


	<body>
	   <input type="checkbox" id="drawer-toggle" name="drawer-toggle"/>
	   <label for="drawer-toggle" id="drawer-toggle-label"></label>
	   <header class="zenPicks_title">
	   		The Zen Picks
	   		<a href="http://thezenpicks.com/login"><span class="smallText" >Login</span></a>
	   </header>
		<ul id="drawer">
			<div style="width: 300px;">
				<a href="https://twitter.com/thezenpicks" target="Twitter"><img src="../images/twitter.png" align="left" class="social"/></a>
				<a href="https://www.facebook.com/TheZenPicks" target="Facebook"><img src="../images/facebook.png" align="left" class="social"/></a>
				<a href="https://instagram.com/thezenpicks/" target="Instagram"><img src="../images/instagram.png" align="left" class="social"/></a>
		    </div>
		    <br>
		    <br>
		    <br>
		    <br>
		    <li class="nav-item"><a href="http://thezenpicks.com/">Home</a></li>
		    <li class="nav-item"><a href="http://thezenpicks.com/philosophy.php">Our Philosophy</a></li>
		    <li class="nav-item"><a href="http://thezenpicks.com/performance.php">Performance</a></li>
		    <li class="nav-item"><a href="http://thezenpicks.com/subscribe.php">Subscribe</a></li>
		    <hr>
		    <li class="nav-item"><a href="http://thezenpicks.com/login">Member's Login</a></li>
		    <li class="nav-item"><a href="http://thezenpicks.com/admin">Admin</a></li>
		</ul>

		<div id="page-content">	
	    <center>

	    <h1><b>Admin Page</b></h1>

		<table style="background-color:#c4001d; box-shadow: 0px 0px 20px 10px #fff; border-radius: 15px 15px 15px 15px;">
			<tr height="auto"><td>
				<center>
				<form method="post" action="../send_message.php">
					TITLE: <br />
					<!-- <input name="title" id="user-pwd" class="title" type="text"/><br><br> -->
					<select name="title" id="user-pwd" style="margin:1%; height:26px; font-size:16px; font-family: Copperplate;">
			  			<option value="temp" selected="selected">...Select...</option>
			  			<option value="THURSDAY NFL">THURSDAY NFL</option>
			  			<option value="SUNDAY EARLY NFL">SUNDAY EARLY NFL</option>
			  			<option value="SUNDAY LATE NFL">SUNDAY LATE NFL</option>
			  			<option value="SUNDAY NIGHT NFL">SUNDAY NIGHT NFL</option>
			  			<option value="MONDAY NIGHT NFL">MONDAY NIGHT NFL</option>
			  			<option value="COLLEGE FOOTBALL">COLLEGE FOOTBALL</option>
			  			<option value="MMA">MMA</option>
			  			<option value="MESSAGE">MESSAGE</option>
					</select> <br>
					BODY: <br />
					<textarea name="body" id="user-pwd" class="body" type="text" style="height: 100px;"></textarea><br>
					<input type="submit" value="Post">
				</form>
				</center>
			</td></tr>
		</table>


		<!-- PREVIOUS PICKS -->
		<table style="background-color:#c4001d; box-shadow: 0px 0px 20px 10px #fff; border-radius: 15px 15px 15px 15px;">
			<tr height="80%"><td width="50%">
				<center>
				<h2 style="color:#000040; margin:0px;">Previous Selections</h2>

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

							/* Each time make a white box to put the pick in! */
							$post = "<table style=\"background-color:#fff; box-shadow: 0px 0px 10px 2px #000040; border-radius: 15px 0px 15px 0px;\">";
							$post .= "<tr><td><div style=\"margin-left:10px; text-align:center;\"><h1>{$title}</h1><p>{$body}</p>";
							$post .= "<p style=\"color:#000040;\">Posted on: {$date}</p></div></td></tr></table>";

							echo $post;

							$counter++;
							if ($counter === 5) break;

						}

						mysqli_free_result($query);
					?>
				</center>
			</td>
			</tr>
		</table>
	</center>
	   </div>
	</body>


</html>