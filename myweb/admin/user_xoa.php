<?php 
$username=$_GET['username'];
include('../config.php');
$conn = connectTodb();
$sql="DELETE FROM users where username = '$username'";
$run =mysqli_query($conn,$sql);
if($run)
{
	header("location:quantriuser.php");
}
?>
