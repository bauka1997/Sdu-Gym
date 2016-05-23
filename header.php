<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="mouse.js"></script>
      <link rel="stylesheet" type="text/css" href="con.css">
  </head>
  	<body>

      <div class="back">
      <div class="header">
         <div class="logo"><img src="muscle.png" style="width:90px; height:70px;"><div class="logo2"><img src="logo.png" style="width:100px;">
            
            <ul class="menu">
              
              <?php if(isset($_SESSION['name'])){
                echo "<li><a href=\"Logout.php\"onmouseover=\"mouseoversound.playclip()\" onclick=\"clicksound.playclip()\">Logout</a></li>";
              }
              else{

                 echo "<li><a href=\"Log.php\"onmouseover=\"mouseoversound.playclip()\" onclick=\"clicksound.playclip()\">LOG IN / SIGN UP</a></li>";
              }
              ?>
               
           
         </ul></div></div>
      </div>
      <div class="sox">Contact us<br>8-702-513-37-78</div>
    </div>
