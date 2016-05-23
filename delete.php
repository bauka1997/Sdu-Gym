<?php
if (isset($_GET['id'])) {

	$id=$_GET['id'];
$conn= new mysqli("localhost","root","","gym");
$sql = "DELETE FROM people WHERE id= '$id'";
$result = $conn->query($sql);
header("Location: http://".$_SERVER["SERVER_NAME"] . ":8808/gym/admin.php");

}
?>
