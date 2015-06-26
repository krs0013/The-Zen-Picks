<!DOCTYPE HTML>
<html>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css" />

		<title>The Zen Picks</title>
		<link rel="icon" type="image/gif" href="images/fav_icon.png">
	</head>


	<body>
	   <input type="checkbox" id="drawer-toggle" name="drawer-toggle"/>
	   <label for="drawer-toggle" id="drawer-toggle-label"></label>
	   <header class="zenPicks_title">
	   		The Zen Picks
	   		<span class="smallText" style="color:#c4001d;">l</span>
	   </header>
		<nav id="drawer">
			<div>
				<a href="https://twitter.com/thezenpicks" ><img src="images/twitter.png" align="left" class="social"/></a>
				<a href="https://www.facebook.com/TheZenPicks" ><img src="images/facebook.png" align="left" class="social"/></a>
				<a href="https://instagram.com/thezenpicks/" ><img src="images/instagram.png" align="left" class="social"/></a>
		    </div>
			<br>
			<br>
			<br>
			<br>
			<ul>
				<ul><a href="http://www.fountaincitycycling.org/test/" style="color: #fff;">Home</a></ul>
				<br>
				<br>
				<ul><a href="http://thezenpicks.com/philosophy.php" style="color: #fff;">Philosophy</a></ul>
				<br>
				<br>
				<ul><a href="http://thezenpicks.com/performance.php" style="color: #fff;">Performance</a></ul>
				<br>
				<br>
				<ul><a href="http://thezenpicks.com/subscribe.php" style="color: #fff;">Subscribe</a></ul>
			</ul>
		</nav>
	   <div id="page-content">
	    <div>
			<center>
			<table width="50%">
				<tr height="auto"><td>
					<center>
					<form method="post" action="send_message.php" style="margin-top:20px;">
						<div style="color:#fff;">Create a username: </div>
						<input name="username" id="user-pwd" type="text"/><br><br>
						<div style="color:#fff;">Create a password: </div>
						<input name="password" id="user-pwd" type="password"/><br><br>
						<div style="color:#fff;">Confirm password: </div>
						<input name="password_confirm" id="user-pwd" type="password"/><br><br><br><br>

						<div style="color:#fff;">Select two security questions: </div>
						<select name="security_question_1" style="margin:1%;">
				  			<option value="temp" selected="selected">(Security Question 2)</option>
				  			<option value="born">Where were you born?</option>
				  			<option value="maiden">What is your mothers maiden name?</option>
				  			<option value="friend">What is your best friends name?</option>
				  			<option value="team">What is your favorite team?</option>
				  			<option value="mother_born">Where was your mother born?</option>
				  			<option value="father_born">Where was your father born?</option>
						</select> <br>
						<input name="security_answer_1" id="user-pwd" type="text" placeholder="Answer 1..."/><br><br>
						<select name="security_question_2" style="margin:1%;">
				  			<option value="temp" selected="selected">(Security Question 2)</option>
				  			<option value="born">Where were you born?</option>
				  			<option value="maiden">What is your mothers maiden name?</option>
				  			<option value="friend">What is your best friends name?</option>
				  			<option value="team">What is your favorite team?</option>
				  			<option value="mother_born">Where was your mother born?</option>
				  			<option value="father_born">Where was your father born?</option>
						</select> <br>
						<input name="security_answer_2" id="user-pwd" type="text" placeholder="Answer 2..."/><br><br><br>

						<input type="submit" value="Create User">
					</form>
					</center>
				</td></tr>
			</table>
			</center>
	    </div>
	   </div>
	</body>


</html>