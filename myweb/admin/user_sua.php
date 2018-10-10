<?php
include('../config.php');
$username=$_GET['username'];
$conn=connectTodb();
$sql="SELECT * FROM users where username='$username'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>
<?php 
include('./modules/header.php');
?>
<style type="text/css" media="screen">
.right-container table{
	width: 60%;
	height: 100px;
	text-align: left;
}
.right-container table label{
	font-size: 25px;
}
.right-container .w60{ 
	width: 500px;
	height: 20px;
}
</style>
<?php
include ('./modules/left.php');
?>
<div class="right-container">
	<h1>Cập nhập user.</h1>
	<form action="xuly_user_sua.php" method="post" accept-charset="utf-8">
		<table>
			<tbody>
				<tr>
					<td><label>Username</label></td>
					<td ><input type="text" name="username" value="<?php echo $row['username']?>" class="w60"></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td ><input type="password" name="password" value="<?php echo $row['password']?>" class="w60"></td>
				</tr>
				<tr>
					<td><label>Email</label></td>
					<td ><input type="text" name="email" value="<?php echo $row['email']?>"  class="w60"></td>
				</tr>
				<tr>
					<td><label>Tên user</label></td>
					<td ><input type="text" name="name" value="<?php echo $row['name']?>"  class="w60"></td>
				</tr>
				<tr>
					<td><label>Địa chỉ</label></td>
					<td><input type="text" name="address" value="<?php echo $row['address']?>"  class="w60"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="sua" value="Cập nhập"></td>
				</tr>
			</tbody>
		</table>
	</form>
</div>
</div>
<?php
include ('./modules/footer.php');
?>

