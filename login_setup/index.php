<?php
	// include '../admin/settings.php';

	session_start();

	if ($_SESSION['GRANTED'] === true) {
	    $_SESSION['GRANTED'] = false;
	} else {
		echo "<h1>404 Not Found</h1>";
		echo "The page that you have requested could not be found.";
		exit();
	}
?>

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
	    <div>
			<center>
			<table width="50%">
				<tr height="auto"><td>
					<center>
					<form method="post" action="create_user.php" style="margin-top:20px;">
						<div style="color:#fff; font-size:18px; font-family: Copperplate;">Create a username: </div>
						<input name="username" id="user-pwd" type="text"/><br><br>
						<div style="color:#fff; font-size:18px; font-family: Copperplate;">Create a password: </div>
						<input name="password" id="user-pwd" type="password"/><br><br>
						<div style="color:#fff; font-size:18px; font-family: Copperplate;">Confirm password: </div>
						<input name="password_confirm" id="user-pwd" type="password"/><br><br><br><br>

<!-- 						<div style="color:#fff; font-size:18px; font-family: Copperplate;">Select two security questions: </div>
						<select name="security_question_1" style="margin:1%; height:24px; font-size:14px; font-family: Copperplate;">
				  			<option value="temp" selected="selected">(Security Question 2)</option>
				  			<option value="born">In What City Were You Born?</option>
				  			<option value="maiden">What is your mothers maiden name?</option>
				  			<option value="friend">What is your best friends name?</option>
				  			<option value="team">What is your favorite team?</option>
				  			<option value="mother_born">Where was your mother born?</option>
				  			<option value="father_born">Where was your father born?</option>
						</select> <br>
						<input name="security_answer_1" id="user-pwd" type="text" placeholder="Answer 1..."/><br><br>
						<select name="security_question_2" style="margin:1%; height:24px; font-size:14px; font-family: Copperplate;">
				  			<option value="temp" selected="selected">(Security Question 2)</option>
				  			<option value="born">In What City Were You Born?</option>
				  			<option value="maiden">What is your mothers maiden name?</option>
				  			<option value="friend">What is your best friends name?</option>
				  			<option value="team">What is your favorite team?</option>
				  			<option value="mother_born">Where was your mother born?</option>
				  			<option value="father_born">Where was your father born?</option>
						</select> <br>
						<input name="security_answer_2" id="user-pwd" type="text" placeholder="Answer 2..."/><br><br><br> -->

						<input type="submit" name="create_user" value="Create User" style="margin:1%; height:26px; font-size:16px;">
					</form>
					</center>
				</td></tr>
			</table>
			</center>
	    </div>
        <div id="light" class="white_content">
        	<a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">
        		Close
        	</a>
        </div>
        <div id="fade" class="black_overlay"></div>
	   </div>
	</body>


</html>