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
		    	PERFORMANCE
		    </div>
		    <p style="text-align: center; color: #000040;">
		    	At THE ZEN PICKS we are serious about accurate and up-to-date detailed record keeping of our performance to our customers.  
		    	You will never see us disguise selections with different "labels" or "categories" or "Star Ratings".  
		    	With rare exception, a selection is a single stand alone play.  
		    	Throughout the season, we may VERY RARELY have a special parlay or 1.5x or 2x selection for our customers.  
		    	<br><br>
		    	New for 2015!  We have entered the Westgate Resorts NFL Supercontest!  Follow our ranking below!
		    	<br><br>
		    	Below you will find weekly updated informational graphics on our performance.  
		    </p>

		    <!-- DIVIDER SPIRAL -->
		    <div style="text-align: center;">
		    	<img src="images/divider.png" class="divider">
		    </div>

		    <p style="text-align: center; color: #000040;">
		    	INFORMATION ACCURATE AS OF: <span style="color:#c4001d;">(DATE EDITED EACH WEEK)</span>
		    </p>

		    <h2 style="margin-bottom:0px;"><b>2015 NFL SEASON</b></h2>
		    <div>
		    	<p style="text-align: center;">
					<img class="fancybox" src="images/nfl_football_graph_2015_small.png" data-big="images/nfl_football_graph_2015_large.png"/>
		    	</p>
		    </div>
		    <h2 style="margin-bottom:0px;"><b>2015 NFL WEEK 1</b></h2>
		    <div>
		    	<p style="text-align: center;">
					<img class="fancybox" src="images/nfl_performance_2015_week1_small.png" data-big="images/nfl_performance_2015_week1_large.png"/>
		    	</p>
		    </div>
		    <h2 style="margin-bottom:0px;"><b>2015 NFL SUPERCONTEST</b></h2>
		    <div>
		    	<p style="text-align: center;">
		    		<a href="https://www.westgatedestinations.com/nevada/las-vegas/westgate-las-vegas-hotel-casino/casino/supercontest" target="Supercontest" style="text-decoration:none; color:#c4001d;">Supercontest Standings</a>
					<br><br>
					<img class="fancybox" src="images/nfl_supercontest_2015_small.png" data-big="images/nfl_supercontest_2015_large.png"/>
		    	</p>
		    </div>
		    <h2 style="margin-bottom:0px;"><b>2015 COLLEGE FOOTBALL</b></h2>
		    <div>
		    	<p style="text-align: center;">
					<img class="fancybox" src="images/college_football_2015_small.png" data-big="images/college_football_2015_large.png"/>
		    	</p>
		    </div>
		    <h2 style="margin-bottom:0px;"><b>2015-2016 MMA</b></h2>
		    <div>
		    	<p style="text-align: center;">
					<img class="fancybox" src="images/mixed_martial_arts_2015_small.png" data-big="images/mixed_martial_arts_2015_large.png"/>
		    	</p>
		    </div>
		    <h2><b>PAST NFL PERFORMANCE</b></h2>
		    <div>
		    	<p style="text-align: center;">
					<img class="fancybox" src="images/nfl_performance_2014_small.png" data-big="images/nfl_performance_2014_large.png"/>
			    	<br>
			    	<br>
					<img class="fancybox" src="images/nfl_performance_2013_small.png" data-big="images/nfl_performance_2013_large.png"/>
			    	<br>
			    	<br>
					<img class="fancybox" src="images/nfl_performance_2012_small.png" data-big="images/nfl_performance_2012_large.png"/>
		    	</p>
		    </div>

		    <!-- DIVIDER SPIRAL -->
		    <div style="text-align: center; margin-top: 1.8em;">
		    	<img src="images/divider.png" class="divider">
		    </div>
	    </div>


	    <!---------------------------------------------------------------------------------->
	    <!-- USED TO MAKE THE IMAGES ZOOM IN -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
		<script type="text/javascript">
		    $(function($){
		        var addToAll = false;
		        var gallery = true;
		        var titlePosition = 'inside';
		        $(addToAll ? 'img' : 'img.fancybox').each(function(){
		            var $this = $(this);
		            var title = $this.attr('title');
		            var src = $this.attr('data-big') || $this.attr('src');
		            var a = $('<a href="#" class="fancybox"></a>').attr('href', src).attr('title', title);
		            $this.wrap(a);
		        });
		        if (gallery)
		            $('a.fancybox').attr('rel', 'fancyboxgallery');
		        $('a.fancybox').fancybox({
		            titlePosition: titlePosition
		        });
		    });
		    $.noConflict();
		</script>
		<script type="text/javascript">


		    $(document).ready(function() {
			    $(".fancybox").fancybox({
			        type: "iframe",
			        width : 380, // or whatever
			        height: 280
			    }).trigger("click");
			});​
		</script>
	    <!---------------------------------------------------------------------------------->
	</body>


</html>