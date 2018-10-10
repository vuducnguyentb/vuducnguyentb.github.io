<?php 
function connectTodb()
{
	$severname="localhost";
	$username="root";
	$password="";
	$db="myweb";
	$con=mysqli_connect($severname,$username,$password,$db);
	mysqli_set_charset($con, 'UTF8');
	return $con;
}
	// $severname="localhost";
	// $username="root";
	// $password="";
	// $db="myweb";
	// $conn=mysql_connect($severname,$username,$password,$db);
	// if(!$conn)
	// {
	// 	die('Lỗi kết nối');
	// }
	// else {
	// 	echo 'Kết nỗi thành công';
	// }
?>