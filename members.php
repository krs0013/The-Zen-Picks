<?php
	$current_user = $_POST['username'];
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
				<a href="https://twitter.com/thezenpicks" ><img src="images/twitter.png" align="left" class="social"/></a>
				<a href="https://www.facebook.com/TheZenPicks" ><img src="images/facebook.png" align="left" class="social"/></a>
				<a href="https://instagram.com/thezenpicks/" ><img src="images/instagram.png" align="left" class="social"/></a>
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
										require_once "connect.php";

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

											$post = "<div style=\"margin-left:10px;\"><h1>{$title}</h1><p style=\"text-align:center;\">{$body}</p><p style=\"text-align:center; color:#000040;\">Posted on: {$date}</p></div>";

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
							<form method="post" action="send_email.php">
								<br>
								<div style="color:#000; font-size:18px; font-family: Copperplate, Verdana;">Your Twitter Handle: </div>
								<input name="handle" id="user-pwd" type="text"/><br>

								<input type="submit" value="Send" style="margin:1%; height:24px; font-size:14px;">
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
						require_once "connect.php";

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
			<tr height="5%" align="right"><td>&copy all rights reserved</td></tr>
		</table>
	</center>
	</div>
	</body>


</html>

<?php
    mail('thezenpicks@gmail.com', $_POST['title'], $_POST['body']);

    header("refresh:3; url=subscribe.php");
    echo "Your email has been sent!\nPlease wait 3 seconds for the page to refresh."
?>