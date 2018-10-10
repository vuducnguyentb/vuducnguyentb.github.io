<?php 
$id_hang=$_GET['id_hang'];
include('../config.php');
$conn = connectTodb();
$sql="DELETE FROM hangdt where id_hang = '$id_hang'";
$run =mysqli_query($conn,$sql);
if($run)
{
	header("location:quantrihangdt.php");
}
?>
