<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="mouse.js"></script>
      <link rel="stylesheet" type="text/css" href="schedule.css">
      <meta charset="utf-8">
      <style> 

.fixed-bg {
    background-image: url("bad.jpg");
    min-height: 800px;
    background-attachment: fixed;
    background-position: absolute;
    background-repeat: no-repeat;
    background-size: cover;
}
/* style of timetable*/
body
    {
        font-family: Bauka;
        letter-spacing: 2px;
    }

    th,td
    {
        margin: 0;
        text-align: center;
        border-collapse: collapse;
        outline: 1px solid #e3e3e3;
    }

    td
    {
        color:#980f0f ;
        padding: 5px 10px;
        font-size:25px;
    }

    th
    {
        background:#1E1E28;
        color: white;
        padding: 3px 5px;
    }

    td:hover
    {
        cursor: pointer;
        background: #1E1E28;
        color: white;
    }
</style>
      </head>
	<body>
      <div class="back">
      <div class="header">
         <div class="logo"><img src="muscle.png" style="width:90px; height:70px;"><div class="logo2"><img src="logo.png" style="width:100px;">
            
            <ul class="menu">
               <li><a href="video.php" onmouseover="mouseoversound.playclip()" onclick="clicksound.playclip()">Home</a></li>
               <li><a href="about.php" onmouseover="mouseoversound.playclip()">About</a></li>
               <li><a href="#"onmouseover="mouseoversound.playclip()" onclick="clicksound.playclip()">Schedule</a></li>
               <li><a href="Payment.php"onmouseover="mouseoversound.playclip()" onclick="clicksound.playclip()">Price</a></li>
               <li><a href="contact.php"onmouseover="mouseoversound.playclip()" onclick="clicksound.playclip()">Contact</a></li>
            <li><a href="Log.php"onmouseover="mouseoversound.playclip()" onclick="clicksound.playclip()">LOG IN / SIGN UP</a></li>
         </ul></div></div>
      </div>
      <!--NAvbar  --> 
<div class="fixed-bg">
</div>
<div style="height:500px;"><table width="100%" height="500px" align="center" >
    <div id="head_nav">
    <tr>
        <th>Time</th>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thrusday</th>
        <th>Friday</th>
        <th>Saturday</th>
        <th>Sunday</th>
    </tr>
</div>  

    <tr>
        <th>16:00 - 18:00</th>
        
            <td>Teachers</td>
            <td>Students</td>
            <td>Teachers</td>
            <td>Students</td>
            <td>Teachers</td>
            <td>Students</td>
            <td>Closed</td>
        </div>
    </tr>

    <tr>
        <th>18:00 - 21:00</td>
        
            <td>Students</td>
            <td>Students</td>
            <td>Students</td>
            <td>Students</td>
            <td>Students</td>
            <td>Students</td>
            <td>Closed</td>

        </div>
    </tr>
</table>
</div>
<!--table-->





      </body>
</html>
