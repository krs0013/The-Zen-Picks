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
	   		<a href="http://www.fountaincitycycling.org/test/login.php"><span class="smallText" >Login</span></a>
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
		    <h2><center><i><b>Subscribe</b></i></center></h2>

		    <div id="columns">

		    	<!-- This is the code for the columns.-->
			    <div class="column_attributes">
			    	<p style="font-size: 35px;"><u>Customer Service: </u></p>
				    <p>
				    	If you have anything you'd like to share with us, please submit it through the following form.  We appreciate
				    	any and all input.

						<form action="send_email.php" method="post" action="send_message.php">
							Title: <br />
							<input name="title" id="title" type="text" style="width:90%; height:40px;"/><br><br>
							What would you like to tell us? <br />
							<textarea name="body" id="body" class="body" type="text" style="width:90%;"></textarea><br>
							<input type="submit" value="Send">
							<input type="reset" value="Reset">
						</form>
				    </p>
			    </div>

			    <div class="column_attributes">
			    	<p style="font-size: 35px;"><u>Statistics: </u></p>
				    <p>
				    	<center><img src="images/graph.png"/></center>
				    	<p>
					    	This is the philosophy of <i>The Zen Picks</i> and I would like to make it known.  We do not guarantee our picks to
					    	be right, but we are confident enough to make these picks public.  This is going to have to make the column a little
					    	bit longer in order to make up for the PayPal logo.
				    		<p style="font-size: 25px;"><a href="http://www.fountaincitycycling.org/test/philosophy.php">Read More</a></p>
				    	</p>
				    </p>
			    </div>

			    <div class="column_attributes">
			    	<p style="font-size: 35px;"><u>Subscribe: </u></p>
				    <p>
				    	<center><a href="https://www.paypal.com"><img src="images/paypal.png"/></a></center>
				    	<p>
					    	This is the philosophy of <i>The Zen Picks</i> and I would like to make it known.  We do not guarantee our picks to
					    	be right, but we are confident enough to make these picks public.  
				    		<p style="font-size: 25px;"><a href="http://www.fountaincitycycling.org/test/philosophy.php">Read More</a></p>
				    	</p>
				    </p>
			    </div>
			</div>
	   </div>
	</body>


</html>