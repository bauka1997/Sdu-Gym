<?php session_start();

if (!isset($_SESSION['name'])) {
 header("location:/gym/log.php"); 

}
require_once("header.php");

if(isset($_POST["1data"])) {
  $name=$_SESSION['name'];
  $phone=$_POST["1phone"];
  $data=$_POST["1data"]."  ".$_POST["1time"];
  

  $conn=new mysqli("Localhost","root","","gym");
 
  $sql="INSERT INTO people(name,phoneN,data) VALUES('$name','$phone','$data')";   
        if($conn->query($sql)===TRUE){
   echo "<script>alert('Booking succesfully')</script>" ;   
        }
     } 
?>
<style>
.form{
  position: relative;
  padding-left: 35%;
  padding-bottom: 100px;
  font-family: Bauka;
  text-align: left;
  color: red;
  float: left;
  margin-top: 200px;
  font-size: 70px;
  margin-right: 20px;
}
</style>
<div class="form">
  
    <p>Enrollment</p> 
  <form method="post">
     <input type="text" name='1phone'placeholder="Your phone" required>
     <input type="text" name="1data" id="datepicker1" placeholder="Data">
     <select  name="1time">
     <?php
     for ($i=10; $i <=19 ; $i++) {

        echo "<option >$i:00</option>";     
       }
       ?>
     </select>
    <input type='submit' value="register">
  </form>
</div>