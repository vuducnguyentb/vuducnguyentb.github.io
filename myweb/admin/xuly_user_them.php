<?php 
include('../config.php');
$con=connectTodb();
$username=$_POST['username'];
$password=md5($_POST['password']);
$email=$_POST['email'];
$name=$_POST['name'];
$address=$_POST['address'];
$sql="INSERT INTO users VALUES ('$username','$password','$email','$name','$address')";
$run=mysqli_query($con,$sql);
if($run)
{
	header("location:quantriuser.php");
}
?>
