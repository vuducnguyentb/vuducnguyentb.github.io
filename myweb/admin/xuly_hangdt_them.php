<?php 
include('../config.php');
$con=connectTodb();
$ten_hang=$_POST['ten_hang'];
$ghi_chu=$_POST['ghi_chu'];
$sql="INSERT INTO hangdt (ten_hang,ghi_chu) VALUES ('$ten_hang','$ghi_chu')";
$run=mysqli_query($con,$sql);
if($run)
{
	header("location:quantrihangdt.php");
}
?>
