<!DOCTYPE HTML>
<html>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/style.css" />

		<title>The Zen Picks</title>
		<link rel="icon" type="image/gif" href="images/fav_icon.png">
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
	    <div>
			<center>
			<table width="50%">
				<tr height="auto"><td>
					<center>
					<form method="post" action="create_user.php" style="margin-top:20px;">
						<div style="color:#fff; font-size:18px;">Create a username: </div>
						<input name="username" id="user-pwd" type="text"/><br><br>
						<div style="color:#fff; font-size:18px;">Create a password: </div>
						<input name="password" id="user-pwd" type="password"/><br><br>
						<div style="color:#fff; font-size:18px;">Confirm password: </div>
						<input name="password_confirm" id="user-pwd" type="password"/><br><br><br><br>

						<div style="color:#fff; font-size:18px;">Select two security questions: </div>
						<select name="security_question_1" style="margin:1%; height:24px; font-size:14px;">
				  			<option value="temp" selected="selected">(Security Question 2)</option>
				  			<option value="born">Where were you born?</option>
				  			<option value="maiden">What is your mothers maiden name?</option>
				  			<option value="friend">What is your best friends name?</option>
				  			<option value="team">What is your favorite team?</option>
				  			<option value="mother_born">Where was your mother born?</option>
				  			<option value="father_born">Where was your father born?</option>
						</select> <br>
						<input name="security_answer_1" id="user-pwd" type="text" placeholder="Answer 1..."/><br><br>
						<select name="security_question_2" style="margin:1%; height:24px; font-size:14px;">
				  			<option value="temp" selected="selected">(Security Question 2)</option>
				  			<option value="born">Where were you born?</option>
				  			<option value="maiden">What is your mothers maiden name?</option>
				  			<option value="friend">What is your best friends name?</option>
				  			<option value="team">What is your favorite team?</option>
				  			<option value="mother_born">Where was your mother born?</option>
				  			<option value="father_born">Where was your father born?</option>
						</select> <br>
						<input name="security_answer_2" id="user-pwd" type="text" placeholder="Answer 2..."/><br><br><br>

						<input type="submit" value="Create User" style="margin:1%; height:24px; font-size:14px;">
					</form>
					</center>
				</td></tr>
			</table>
			</center>
	    </div>
	   </div>
	</body>


</html>