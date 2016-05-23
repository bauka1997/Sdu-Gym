<!DOCTYPE html>
<html>
   <head>
      <script type="text/javascript" src="mouse.js"></script>
      <link rel="stylesheet" type="text/css" href="con.css">
      <style type="text/css">
        input [type="search"]{
          width: 300px;
          height: 20px;
        }
        .order{
                   width: 300px;
          height: 150px;
          float: left;
          border:1px solid #b9b9b9;
          border-radius: 6px;
          margin-left: 45px;
          margin-top: 40px;

        }
        .order p{
          padding: 0;
        }
      </style>
  </head>
   <body>

      <div class="header">
         <div class="log"><img src="muscle.png" style="width:90px; height:70px;"><div class="logo2"><img src="logo.png" style="width:100px;">
            
            <ul class="menu">
               <li><a href="admin.php" onmouseover="mouseoversound.playclip()">Clients</a></li>              
               <li><a href="about1.php" onmouseover="mouseoversound.playclip()">About</a></li>
                 <li><a href="Payment1.php"onmouseover="mouseoversound.playclip()" onclick="clicksound.playclip()">Price</a></li>
               <li><a href="logout.php" onmouseover="mouseoversound.playclip()">LogOut</a></li>

         </ul></div></div>
      </div>
<?php
  $conn=new mysqli("Localhost","root","","gym");
$sql = "SELECT * FROM people";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div style=\"border:2px solid black; display:inline-block; margin-left:20px;\">
        <div>".$row['id'].'    '.'<a href="delete.php?id=' . $row['id'] . '">Delete</a>'.''."</div>
        <br>
        <div>".'Name-'.$row['name']."<br>".
        'Phone number-'.$row['phoneN']."<br>".'Data-'.$row['data']."<br></div>
    </div>";
    }
} else {
    echo "No Client";
}
$conn->close();
?>

</body>
</html>