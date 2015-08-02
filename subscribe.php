<?php
	session_start();
	$_SESSION['GRANTED'] = false;
?>
<!DOCTYPE HTML>
<html>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0"> <!-- maximum-scale=1, user-scalable=0 -->
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />

		<title>The Zen Picks</title>
		<link rel="icon" type="image/gif" href="images/fav_icon.png">
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
				<a href="https://twitter.com/thezenpicks" target="Twitter"><img src="images/twitter.png" align="left" class="social"/></a>
				<a href="https://www.facebook.com/TheZenPicks" target="Facebook"><img src="images/facebook.png" align="left" class="social"/></a>
				<a href="https://instagram.com/thezenpicks/" target="Instagram"><img src="images/instagram.png" align="left" class="social"/></a>
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

		    <h3 style="color: #c4001d;"><center><b>A new process for sports information and analytics<b></center></h3>

		    <!-- DIVIDER SPIRAL -->
		    <div style="text-align: center;">
		    	<img src="images/divider.png" class="divider">
		    </div>

		    <div class="section_title">
		    	SUBSCRIBE
		    </div>

		    <div>
		    	<p style="text-align: center;">
		    		Sign up now for season long selections released immediately prior to events.  
		    		One price includes our entire season (Sept 2015-Aug 2016).  
		    		You will never see ads or solicitations for "special" selections.

		    		<h2 style="margin-bottom:0px;"><b>The Zen Picks 2015-2016 SEASON PASS</b></h2>
		    		<h3 style="margin-top:0px; color: #c4001d;"><b>Preseason Special Rate through Sept 15, 2015</b></h3>
		    		<h1 style="margin-top:0px; margin-bottom:40px; color: #c4001d;"><b>US $50</b></h1>
		    		<center>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="R7TBQ4CLNKJS2">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
					</center>
		    	</p>
		    </div>

		    <!-- DIVIDER SPIRAL -->
		    <div style="text-align: center;">
		    	<img src="images/divider.png" class="divider">
		    </div>

		    <h3 style=""><b>SUBSCRIBER INFORMATION</b></h3>
		    <p style="text-align: center; color: #000040;">
		    	We present our selections in TWO ways.  
		    </p>
		    <p style="text-align: center; color: #000040;">
		    	1. After payment, PAYPAL will redirect you to a setup page for your own username and password setup.  
		    	This will allow you to login to our 
		    	<a href="http://thezenpicks.com/login" style="text-decoration:none; color:#c4001d;">Member Page</a>
		    	with immediate postings on selections and see in chronological 
		    	order our unedited past selections with time and date stamping.  
		    </p>
		    <p style="text-align: center; color: #000040;">
		    	2. Also, from the member page you will see a link to a private Twitter feed.  
		    	You may submit your Twitter @handle to us from the form provided in the member area, 
		    	request to follow the private feed, and once accepted, receive selections via Twitter in real time prior to the event.
		    </p>

		    <!-- DIVIDER SPIRAL -->
		    <div style="text-align: center;">
		    	<img src="images/divider.png" class="divider">
		    </div>

		    <h3 style="color: #c4001d;"><b>CUSTOMER SERVICE</b></h3>

		    <p style="text-align: center; color: #000040;">
		    	PLEASE send us any comments, suggestions, feedback or questions.  
		    	We aim to be the most honest provider of sports information in the industry. 
		    </p>
		    <p style="text-align: center;">
		    	NOTE: Accurately predicting the outcome of a specific event or series of events is by no means guaranteed.  
		    	Feedback regarding the outcome of events v. our selections OR comments referencing our performance will be ignored.  
		    	We are not responsible in any way for your outcomes from the use of our information.  Enjoy our selections responsibly.
		    </p>
		    <center>
				<form action="send_email.php" method="post" style="margin-bottom:40px;">
					<div style="color:#000; font-size:20px; font-family: Copperplate, Verdana;">Subject: </div>
					<!-- <input name="title" id="form_field" type="text"/><br><br> -->
					<select name="title" id="form_field" style="margin:1%; height:26px; font-size:16px; font-family: Copperplate;">
			  			<option value="Select a title..." selected="selected">Select a title...</option>
			  			<option value="General Question">General Question</option>
			  			<option value="Payment Issue">Payment Issue</option>
			  			<option value="Access to Selections">Access to Selections</option>
			  			<option value="Private Twitter Feed">Private Twitter Feed</option>
			  			<option value="Performance Info">Performance Info</option>
			  			<option value="Feedback">Feedback</option>
					</select> <br>
					<div style="color:#000; font-size:20px; font-family: Copperplate, Verdana;">Your Email (Required): </div>
					<input name="user_email" id="form_field" type="text"/><br><br>
					<div style="color:#000; font-size:20px; font-family: Copperplate, Verdana;">Message (max 200 char):</div>
					<textarea name="body" id="form_field" class="body" type="text" maxlength="200"></textarea><br>
					<input type="submit" value="Send" style="font-family: Copperplate, Verdana;">
					<input type="reset" value="Reset" style="font-family: Copperplate, Verdana;">
				</form>
			</center>

		    <!-- DIVIDER SPIRAL -->
		    <div style="text-align: center;">
		    	<img src="images/divider.png" class="divider">
		    </div>
	   </div>
	</body>


</html>