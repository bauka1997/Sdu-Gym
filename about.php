<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="mouse.js"></script>
      <link rel="stylesheet" type="text/css" href="about.css">
      <style type="text/css" >
		  section,aside, nav, article, figure{
				display: block;}
			body {
				color:white;
				background-color: #f9f8f6;
				line-height: 1.9em;
				margin: 0px;}
			.wrapper {
				width: 1200px;
				margin:80px auto 50px auto;
            background-image: url("ab.png");
            background-attachment: fixed;
            border: 10px solid rgba(0,0,0,0.8);

         }			
			nav, footer {
				clear: both;
         }
			section.courses {
				float: left;
				width: 609px;
				border-right: 3px solid white;}
			article {
				clear: both;
				overflow: hidden;
				width: 100%	;
			}
			hgroup {
				margin-top: 50px;
				font-family:Bauka;
			}
			figure {
				float: left;
				height: 220px;
				padding: 10px;
				margin: 30px;
         }
			aside {
				width: 230px;
				float: left;
				padding: 0px 0px 0px 20px;}
			aside section a {
				display: block;
				padding: 10px;
				border-bottom: 3px solid white;
				text-decoration: none;
				color:white;
				font-family:Bauka;
			}
			p{
				font-family:Bauka;
			}
			aside section a:hover {
				color: #f6f6f2;
				background-color: #980f0f;
			}
	
			h1, h2, h3 {
				font-weight: normal;
				font-family:Bauka;
			}
			h2 {
				color:#980f0f;
				margin: 10px 0px 5px 0px;
				padding: 0px;
         }
         	#id{
         		margin: 20px 0px 30px 0px;
         		width: 200px;
         	}
         	#wt{
         		margin: 20px 0px 30px 0px;
         		width: 200px;

         	}
         	
{
				margin: 0px 0px 10px 0px;
				color:  #980f0f;}
			aside h2 {
				padding: 30px 0px 10px 0px;
				color: #980f0f;}
			footer {
				font-size: 80%;
				padding: 7px 0px 0px 20px;}
		</style>
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
      <div class="back">
      <div class="header">
         <div class="logo"><img src="muscle.png" style="width:90px; height:70px;"><div class="logo2"><img src="logo.png" style="width:100px;">
            
            <ul class="menu">
               <li><a href="video.php" onmouseover="mouseoversound.playclip()" onclick="clicksound.playclip()">Home</a></li>
               <li><a href="#" onmouseover="mouseoversound.playclip()" onclick="clicksound.playclip()">About</a></li>
               <li><a href="Schedule.php"onmouseover="mouseoversound.playclip()" onclick="clicksound.playclip()">Schedule</a></li>
               <li><a href="Payment.php"onmouseover="mouseoversound.playclip()" onclick="clicksound.playclip()">Price</a></li>
               <li><a href="contact.php"onmouseover="mouseoversound.playclip()" onclick="clicksound.playclip()">Contact</a></li>
            <li><a href="Log.php"onmouseover="mouseoversound.playclip()" onclick="clicksound.playclip()">LOG IN / SIGN UP</a></li>
         </ul></div></div>
      </div>
      <div class="wrapper">
			<section class="courses">
				<?php

  $conn=new mysqli("Localhost","root","","gym");
	$sql = "SELECT * FROM attr";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
				echo"<article>
					<figure>
					<img src=\"".$row['image']."\" style=\"width:280px;border-style:groove;\"/>
					</figure>
					<hgroup>
						<h2>".$row['name']."</h2>
						<h3>Exercise Rating:".$row['rating']."/10.0</h3>
					</hgroup>
					<p>".$row['description']."</p>
				</article>" ;
			}}
			$conn->close();
            ?>
			</section>
			
			<aside>
				<section class="popular-recipes">
					<h2>Tutorial Videos</h2>
					<a href="https://www.youtube.com/watch?v=oU8EUeqB-oE&list=PLLZcwT5s_o17qxP5OmEyX6BHLZJZpejSJ&index=1">Shoulder Press</a>
					<a href="https://www.youtube.com/watch?v=8wEfAt6hHKQ&list=PLLZcwT5s_o17qxP5OmEyX6BHLZJZpejSJ&index=3">Chest Press</a>
               <a href="https://www.youtube.com/watch?v=LOnrhNLbAFo">Bike Exercise</a>
               <a href="https://www.youtube.com/watch?v=uGn1NxSLBDI">Trap Exercises</a>
               <a href="https://www.youtube.com/watch?v=Z_eC4gPHPRo">Treadmill</a>
				</section>
				<section class="contact-details">
					<h2>Contact</h2>
					<p>SDU UNIVERSITY<br />
						1/1 Abylaikhan Street<br />
						Almaty</p>

					<h2 id="id">Do You Speak Gym? 7 Fitness Words You Should Know</h2>
					<p>Spot: When someone assists another person with an exercise<hr/><br/>
					Rep: Short for repetitions. This is how many times you do a single exercise in a row.<hr/><br/>
Set: 1 Set refers to a group of repetitions done without stopping.<hr/><br/>
Super Set: Refers to a combination of complimentary exercises done back to back in one.<hr/><br/>
Circuit: This is a series of different exercises that are performed back to back with little to no rest.<hr/><br/>
Pyramiding: Doing sets of downward or upward scaling of reps or weight.<hr/><br/>
Glutes: Short for gluteas maximus a much nicer way to say butt.
</p>
				</section>
			</aside>
			<footer>
			</footer>
		</div><!-- .wrapper -->
	</body>
</html>