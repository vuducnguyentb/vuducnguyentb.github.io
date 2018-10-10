<?php 
$ten_hang=$_POST['ten_hang'];
$ghi_chu=$_POST['ghi_chu'];
$id_hang=$_POST['id_hang'];
include('../config.php');
$con=connectTodb();
$sql="UPDATE hangdt SET ten_hang = '$ten_hang', ghi_chu = '$ghi_chu' WHERE id_hang ='$id_hang'";
$run=mysqli_query($con,$sql);
if($run)
{
	header("location:quantrihangdt.php");
}
?>
