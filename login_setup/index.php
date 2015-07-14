<?php
	if (isset($_POST['create_user'])){
		createUser($_POST['username'], 
							$_POST['password'],
							$_POST['password_confirm'],
							$_POST['security_question_1'],
							$_POST['security_answer_1'],
							$_POST['security_question_2'],
							$_POST['security_answer_2']);
	}
?>

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
					<form method="post" style="margin-top:20px;"> <!-- action="create_user.php" -->
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

						<input type="submit" name="create_user" value="Create User" style="margin:1%; height:24px; font-size:14px;">
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

<?php

	function createUser($username, $password, $password_confirm, $security_question_1, $security_answer_1, $security_question_2, $security_answer_2) {
		

		if ($password !== $password_confirm ) {

		}
		else if ((!isset($username) || trim($username)==='')
			|| (!isset($password) || trim($password)==='')
			|| (!isset($password_confirm) || trim($password_confirm)==='')
			|| (trim($security_question_1)==='temp')
			|| (!isset($security_answer_1) || trim($security_answer_1)==='')
			|| (trim($security_question_2)==='temp')
			|| (!isset($security_answer_2) || trim($security_answer_2)==='')) {

			// echo '<div id="light" class="white_content">'
	  //       , '<a href = "javascript:void(0)" onclick = "document.getElementById("light").style.display="none";document.getElementById("fade").style.display="none"">Close</a></div>'
	  //       , '<div id="fade" class="black_overlay"></div>';

			echo 'document.getElementById("light").style.display="block";document.getElementById("fade").style.display="block"; return false;';

		} else {
			header("refresh:0; url=create_user.php");
		}
	    
	}
?>