<?php 
$username=$_POST['username'];
$password=md5($_POST['password']);
$email=$_POST['email'];
$name=$_POST['name'];
$address=$_POST['address'];
include('../config.php');
$con=connectTodb();
$sql="UPDATE users SET password='$password' , email='$email' , name='$name', address='$address' WHERE username = '$username'";
$run=mysqli_query($con,$sql);
if($run)
{
	header("location:quantriuser.php");
}
?>
