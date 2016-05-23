<?php  session_start();


 if (isset($_POST['name'])) {

    $name=$_POST["name"];
    $password=$_POST["password"];
     
          $conn = new mysqli("localhost","root","","gym");
          if ($conn->connect_error) {
          die("Connection error".$conn->connect_error);
           }
         $sql="SELECT * FROM users2 WHERE name='$name' AND pass='$password'";
         $result=$conn->query($sql);

          if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            if($row['id']=="1"){
              $_SESSION['name'] = $row['name'];
              $_SESSION['password'] = $row['pass'];
              header("Location: /gym/admin.php");
              
            }
            else{
              $_SESSION['name'] = $row['name'];
              $_SESSION['password'] = $row['pass'];
              if ($login==null || $login=="" and $password==null || $password=="") {
                session_destroy();
                 header("Location: /gym/Log.php");   
              }
              else{
          
              header("Location: /gym/contact.php");   
            }
            }
        } 
       
      }
     }
    
?>

<?php
 if (isset($_POST['name1'])) {
$name=$_POST["name1"];
$password=$_POST["password1"];
$email=$_POST["email1"];
$phone=$_POST["phone1"];

       $conn= new mysqli("localhost","root","","gym");
       if ($conn->connect_error) {
        die("Connection error".$conn->error);
        }
       $sql="INSERT INTO users2(name,pass,email,phone) VALUES ('$name','$password','$email','$phone')";
        if($conn->query($sql)===TRUE){
          echo "Succes";
        }
       else{
        echo "ERROR".$sql."<br>".$conn->error;
        }
         $conn->close();
      }
    
?>
<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="mouse.js"></script>
      <link rel="stylesheet" type="text/css" href="schedule.css">
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="animate-custom.css" />

      <link rel="stylesheet" type="text/css" href="demo.css" />
        <link rel="stylesheet" type="text/css" href="style.css" />
      <style type="text/css">
      body {font-family:Bauka ,Arial, Sans-Serif;}
            
            #container {width:300px; padding:30px;margin: auto;background: gray;}

            form label {display:inline-block; width:140px;}
            form input[type="text"],
            form input[type="password"],
            form input[type="email"] {width:160px;}
 
            form .line {clear:both;margin-top: 10px;}
            form .line.submit {text-align:right;}
 
 video#bgvid { 
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    -ms-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    background-size: cover; 
}

        </style>
    </head>

<body>
  <video controls="muted" autoplay loop poster="breaking.jpg" id="bgvid" controls muted style=":none;">
    <source src="breaking.webm" type="video/webm">
    <source src="breaking.mp4" type="video/mp4">
</video>

      <div class="back">
      <div class="header">
         <div class="logo"><img src="muscle.png" style="width:90px; height:70px;"><div class="logo2"><img src="logo.png" style="width:100px;">
            
            <ul class="menu">
               <li><a href="video.php" onmouseover="mouseoversound.playclip()" onclick="clicksound.playclip()">Home</a></li>
               <li><a href="about.php" onmouseover="mouseoversound.playclip()">About</a></li>
               <li><a href="Schedule.php"onmouseover="mouseoversound.playclip()" onclick="clicksound.playclip()">Schedule</a></li>
               <li><a href="Payment.php"onmouseover="mouseoversound.playclip()" onclick="clicksound.playclip()">Price</a></li>
               <li><a href="contact.php"onmouseover="mouseoversound.playclip()" onclick="clicksound.playclip()">Contact</a></li>
            <li><a href="#"onmouseover="mouseoversound.playclip()" onclick="clicksound.playclip()">LOG IN / SIGN UP</a></li>
         </ul></div></div>
      </div>
      <div style="height:150px;"></div>

      <section>       
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  method="post"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" > Your email or username </label>
                                    <input id="username" name="name" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" > Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
                  <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
                  <label for="loginkeeping">Keep me logged in</label>
                </p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
                </p>
                                <p class="change_link">
                  Not a member yet ?
                  <a href="#toregister" class="to_register">Join us</a>
                </p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  method="post"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" >Your username</label>
                                    <input id="usernamesignup" name="name1" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" > Your email</label>
                                    <input id="emailsignup" name="email1" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" >Your password </label>
                                    <input id="passwordsignup" name="password1" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" >Your phone </label>
                                    <input id="passwordsignup_confirm" name="phone1" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
                  <input type="submit" value="Sign up"/> 
                </p>
                                <p class="change_link">  
                  Already a member ?
                  <a href="#tologin" class="to_register"> Go and log in </a>
                </p>
                            </form>
                        </div>
            
                    </div>
                </div>  
            </section>
  </body>
  </html>