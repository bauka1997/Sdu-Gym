   <?php

 if (isset($_POST['PR1'])) {
   $pri1=$_POST['PR1'];
   $pri2=$_POST['PR2'];

    $conn= new mysqli("Localhost","root","","gym");
    $sql1 = "UPDATE price SET price1 ='$pri1' WHERE id='1' " ;
    $sql2 = "UPDATE price SET price2 ='$pri2' WHERE id='1' " ;
   
   $result=$conn->query($sql1);
   $result2=$conn->query($sql2);

}
?>

<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="mouse.js"></script>
      <link rel="stylesheet" type="text/css" href="schedule.css">
      <meta charset="utf-8">
<style type="text/css" >
        section,aside, nav, article, figure{
            display: block;}
         body {
            color:white;
            background-color: #f9f8f6;
            background-image: url(ab.png);
            margin: 0px;}
         .wrapper {
            width:1000px;
            margin:200px auto 50px auto;
            background-image: url("da.jpg");
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
            width: 100% ;
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
            color:white;
            padding: 10px;
            border-top:3px solid white;
            border-bottom: 3px solid white;}
         aside section a:hover {
            color: #f6f6f2;
            background-color: #980f0f;}
         a {
            color:#980f0f ;
            text-decoration: none;}
         h1, h2, h3 {
            font-family:Bauka;
            font-size:40px;
         }
         h2 {
            margin: 10px 0px 5px 0px;
            padding: 0px;
            }
            
         h3 {
            margin: 0px 0px 10px 0px;
            color:  #980f0f;}
         aside h2 {
            padding: 30px 0px 10px 0px;
            color: #980f0f;}
      </style>
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
            <article>
               <hgroup>
            <form method="post">
                  <h2>Price for One Month:<input type="text" name="PR1"> KZT<br/></h2>
                  <h2><br/>For one Time:<input type="text" name="PR2"> KZT</h2>
                  <br>  
                  <input type="submit" value="Change">
               </form>
               </hgroup> 
            </article>    
         </section>
         <aside>
            <section class="popular-recipes">
               <h2>Achtung!!!
               Attach this questionnaire when registering</h2>
               <a href="https://docs.google.com/document/d/1pqxfSeCDBOLny0yyVyHQS2Vq_fCwXgzIU7mRLQNZpnk/edit">Here You can download Questionnaire</a>
            </section>
         </aside>
         <footer>
         </footer>
      </div><!-- .wrapper -->


</body>
</html>