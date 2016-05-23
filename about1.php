	<?php

 if (isset($_POST['IMAGE1'])) {
   $img1=$_POST['IMAGE1'];
   $nam1=$_POST['NAME1'];
   $rat1=$_POST['RATING1'];
   $des1=$_POST['DES1'];

	$conn= new mysqli("Localhost","root","","gym");
    $sql1 = "UPDATE attr SET image ='$img1' WHERE id='1' " ;
    $sql2 = "UPDATE attr SET name ='$nam1' WHERE id='1' " ;
    $sql3 = "UPDATE attr SET rating ='$rat1' WHERE id='1' " ;
    $sql4 = "UPDATE attr SET description ='$des1' WHERE id='1' " ;
	
  $result=$conn->query($sql1);
	$result2=$conn->query($sql2);
  $result3=$conn->query($sql3);
  $result4=$conn->query($sql4);	
}

 else if (isset($_POST['IMAGE2'])) {
   $img2=$_POST['IMAGE2'];
   $nam2=$_POST['NAME2'];
   $rat2=$_POST['RATING2'];
   $des2=$_POST['DES2'];

	$conn= new mysqli("Localhost","root","","gym");
    $sql5 = "UPDATE attr SET image ='$img2' WHERE id='2' " ;
    $sql6 = "UPDATE attr SET name ='$nam2' WHERE id='2' " ;
    $sql7 = "UPDATE attr SET rating ='$rat2' WHERE id='2' " ;
    $sql8 = "UPDATE attr SET description ='$des2' WHERE id='2' " ;

	$result5=$conn->query($sql5);
	$result6=$conn->query($sql6);
  	$result7=$conn->query($sql7);
  	$result8=$conn->query($sql8);

}
 else if (isset($_POST['IMAGE3'])) {
   $img3=$_POST['IMAGE3'];
   $nam3=$_POST['NAME3'];
   $rat3=$_POST['RATING3'];
   $des3=$_POST['DES3'];


	$conn= new mysqli("Localhost","root","","gym");
    $sql9 = "UPDATE attr SET image ='$img3' WHERE id='3' " ;
    $sql10 = "UPDATE attr SET name ='$nam3' WHERE id='3' " ;
    $sql11 = "UPDATE attr SET rating ='$rat3' WHERE id='3' " ;
    $sql12 = "UPDATE attr SET description ='$des3' WHERE id='3' " ;

	$result9=$conn->query($sql9);
	$result10=$conn->query($sql10);
  	$result11=$conn->query($sql11);
  	$result12=$conn->query($sql12);
}
 ?>

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
         <div class="log"><img src="muscle.png" style="width:90px; height:70px;"><div class="logo2"><img src="logo.png" style="width:100px;">
            
            <ul class="menu">
               <li><a href="admin.php" onmouseover="mouseoversound.playclip()">Clients</a></li>              
               <li><a href="about1.php" onmouseover="mouseoversound.playclip()">About</a></li>
                 <li><a href="Payment1.php"onmouseover="mouseoversound.playclip()" onclick="clicksound.playclip()">Price</a></li>
               <li><a href="logout.php" onmouseover="mouseoversound.playclip()">LogOut</a></li>

         </ul></div></div>
      </div>      
      <div class="wrapper">
			<section class="courses">
  <form method="post">
				<article>
					<figure>
					 IMAGE:<input type="text" name="IMAGE1"/>
					</figure>
						<br>
					<hgroup>
						Name:<input type="text" name="NAME1">
						<br>
						Rating:<input type="text" name="RATING1">
						<br>
						Description:<input type="text" name="DES1">
						<br>
						<input type="submit">
					</hgroup>
				</article>    			
			</form>

	  <form method="post">		
            <article>
					<figure>
					 IMAGE:<input type="text" name="IMAGE2"/>
					</figure>
						<br>
					<hgroup>
						Name:<input type="text" name="NAME2">
						<br>
						Rating:<input type="text" name="RATING2">
						<br>
						Description:<input type="text" name="DES2">
						<br>
						<input type="submit">
					</hgroup>
				</article>    
		</form>		

		  <form method="post">
                  <article>
					<figure>
					 IMAGE:<input type="text" name="IMAGE3"/>
					</figure>
						<br>
					<hgroup>
						Name:<input type="text" name="NAME3">
						<br>
						Rating:<input type="text" name="RATING3">
						<br>
						Description:<input type="text" name="DES3">
						<br>
						<input type="submit" value="Change">
					</hgroup>
				</article>    
			</form>
			<form method="post">
                  <article>
					<figure>
					 IMAGE:<input type="text" name="IMAGE4"/>
					</figure>
						<br>
					<hgroup>
						Name:<input type="text" name="NAME4">
						<br>
						Rating:<input type="text" name="RATING4">
						<br>
						Description:<input type="text" name="DES4">
						<br>
						<input type="submit" value="Change">
					</hgroup>
				</article>   
				</form> 



				<form method="post">
                  <article>
					<figure>
					 IMAGE:<input type="text" name="IMAGE5"/>
					</figure>
						<br>
					<hgroup>
						Name:<input type="text" name="NAME5">
						<br>
						Rating:<input type="text" name="RATING5">
						<br>
						Description:<input type="text" name="DES5">
						<br>
						<input type="submit" value="Change">
					</hgroup>
				</article>     
                  </form>     
			</section>
			<!-- kjhsKDJhfjksdhjkfhsdkjfhjsdkhfkjsdhfkjsdhfkjhsdjkfhskjdhfkjsdhfkjhsf -->
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