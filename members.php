<?php
	require "connect.php";
	session_start();

	if ($_SESSION['GRANTED'] === true) {
	    // $_SESSION['GRANTED'] = false;
	} else {
		// echo "<h1>404 Not Found</h1>";
		// echo "The page that you have requested could not be found.";
	 	header("refresh:0; url=../login");
		exit();
	}

	// Used for the user to send a request to the private Zen Picks twitter account
	if (isset($_POST['twitter_handle'])) {
		sendTwitterHandle($_POST['handle'], $_POST['curr_user']);
	}
?>

<!DOCTYPE HTML>
<html>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0"> <!-- maximum-scale=1, user-scalable=0 -->
		<link rel="stylesheet" href="css/style.css" />

		<title>The Zen Picks</title>
		<link rel="icon" type="image/gif" href="../images/fav_icon.png">
	</head>


	<body>
	   <header class="zenPicks_title">
	   		The Zen Picks
	   		<!-- <a href="http://thezenpicks.com/login.php"><span class="smallText" >Login</span></a> -->
	   </header>
		<ul class="navigation">
		    <li class="nav-item"><a href="#"></a></li>
		    <br>
			<div style="width: 200px;">
				<a href="https://twitter.com/thezenpicks" target="Twitter"><img src="images/twitter.png" align="left" class="social"/></a>
				<a href="https://www.facebook.com/TheZenPicks" target="Facebook"><img src="images/facebook.png" align="left" class="social"/></a>
				<a href="https://instagram.com/thezenpicks/" target="Instagram"><img src="images/instagram.png" align="left" class="social"/></a>
		    </div>
		    <br>
		    <br>
		    <br>
		    <br>
		    <li class="nav-item"><a href="http://thezenpicks.com/">Home</a></li>
		    <li class="nav-item">
		    	
				<a class="twitter-timeline"  href="https://twitter.com/thezenpicks" data-widget-id="620428907989368832" width="90%">
					Tweets by @thezenpicks
				</a>
            	<script>
            		!function(d,s,id) {
            			var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
            			if(!d.getElementById(id)) {
            				js=d.createElement(s);
            				js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
            				fjs.parentNode.insertBefore(js,fjs);
            			}
            		}
            		(document,"script","twitter-wjs");
            	</script>
		    </li>
		</ul>

		<input type="checkbox" id="nav-trigger" class="nav-trigger" />
		<label for="nav-trigger"></label>

		<div class="site-wrap" style="background-color: #bfbfbf;">
	    <center>
		
		<tr id="tr1" height="10%" style="background:#c4001d;">
			<td width="70%">
				<br>
				<h1><b>Member Page</b></h1>
				<br>
			</td>

			<!-- Outer blue box -->
			<table style="background-color:#000040; box-shadow: 0px 0px 20px 10px #fff; border-radius: 15px 15px 15px 15px;">
				<tr height="80%"><td width="50%">
					<center>
					<h2 style="color:#c4001d; margin:0px;">Latest Selection</h2>

						<!-- Inner white box -->
						<table style="background-color:#fff; box-shadow: 0px 0px 10px 6px #c4001d; border-radius: 15px 0px 15px 0px;">
							<tr>
								<td>
									<?php

										$command = "SELECT * FROM blogData ORDER BY id DESC";
										$query = mysqli_query($connect, $command) or die (mysqli_error());

										while($row = mysqli_fetch_array($query)) {

											$id = $row[id];
											$title = $row[title];
											$body = $row[body];
											$date = $row[date];

											// Allows the title to have return characters
											$title = str_replace("qwerty", "<br>", $title);

											// Allows the body to have return characters
											$body = str_replace("qwerty", "<br>", $body);

											$post = "<div style=\"margin-left:10px;\"><h1>{$title}</h1>";
											$post .= "<p style=\"text-align:center;\">{$body}</p>";
											$post .= "<p style=\"text-align:center; color:#000040;\">";
											$post .= "Posted on: {$date}</p></div>";

											echo $post;

											break;

										}

										mysqli_free_result($query);
									?>
								</td>
							</tr>
						</table>
					</center>
					</td>
				</tr>
			</table>


			<!-- TWITTER BOX -->
			<table style="background-color:#00aced; box-shadow: 0px 0px 20px 10px #fff; border-radius: 15px 15px 15px 15px;">
				<td>
					<h3 style="margin:0px;">Join our private Twitter list for free!</h3>
					<center>
						<h4>Just send us your twitter handle</h4>
						<br>
						<table>
							<form id="userform" method="post"> <!-- action="send_email.php" -->
								<br>
								<img src="images/twitter_bird.png" class="social"/>
								<br>
								<div style="color:#000; font-size:18px; font-family: Copperplate, Verdana;">Your Twitter Handle: </div>
								<input name="handle" id="user-pwd" type="text" placeholder="@" autocapitalize="off"/><br>
								<div style="color:#000; font-size:18px; font-family: Copperplate, Verdana;">Your Username: </div>
								<input name="curr_user" id="user-pwd" type="text" autocapitalize="off"/><br>

								<input name="twitter_handle" type="submit" value="Send" style="margin:1%; height:24px; font-size:14px;">
							</form>
						</table>
					</center>
				</td>
			</table>
		</tr>

		<!-- PREVIOUS PICKS -->
		<table style="background-color:#c4001d; box-shadow: 0px 0px 20px 10px #fff; border-radius: 15px 15px 15px 15px;">
			<tr height="80%"><td width="50%">
				<center>
				<h2 style="color:#000040; margin:0px;">Previous Selections</h2>

					<?php

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

							if ($counter === 0) {
								$counter++;
								continue;
							}

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
		<table style="box-shadow: 0px 0px 20px 10px #fff; border-radius: 15px 15px 15px 15px;">
			<tr height="5%" align="right" style="font-family: Copperplate, Verdana; color:#fff;"><td>&copy all rights reserved</td></tr>
		</table>
	</center>
	</div>
	</body>


</html>

<?php	

	function sendTwitterHandle($handle, $curr_user) {
	require "connect.php";

		// session_start();
	 //    $_SESSION['GRANTED'] = true;


		// Select a single username form db
		$command = "SELECT * FROM login_credentials WHERE username = '".$curr_user."' AND twitter_handle IS NOT NULL AND TRIM(twitter_handle) <> ''";
		$query = mysqli_query($connect, $command) or die (mysqli_error());

		$no_user_match = "SELECT * FROM login_credentials WHERE username = '".$curr_user."'";
		$query_two = mysqli_query($connect, $no_user_match) or die (mysqli_error());

		// If there was a match, show them the username
		if (mysqli_num_rows($query) > 0) {
			echo '<script type="text/javascript">alert("You already submitted a Twitter handle request.  Only one request per member.")</script>';
		} else {

			if (mysqli_num_rows($query_two) < 1) {
				echo '<script type="text/javascript">alert("Invalid username.  Please enter a valid username.")</script>';
			} else {
				// If they didn't have a twitter handle previously, record it so they can only have one and not more.
				$command = "UPDATE login_credentials SET twitter_handle = '".$handle."' WHERE username='".$curr_user."'";
				$query = mysqli_query($connect, $command) or die (mysqli_error());

				$email_body = "Twitter Handle: {$handle}";
				$email_body .= "\r\nUsername: {$curr_user}";
			    mail('krstreit0013@gmail.com', "Twitter Handle Request", $email_body);
				echo '<script type="text/javascript">alert("Thank you!\n\rYour Twitter handle has been sent.")</script>';
			}
		}
		mysqli_close($connect);
	}
?>