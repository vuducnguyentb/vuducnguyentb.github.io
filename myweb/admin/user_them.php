<?php
include('../config.php');
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
	<h1>Thêm user mới.</h1>
	<form action="xuly_user_them.php" method="post" accept-charset="utf-8">
		<table>
			<tbody>
				<tr>
					<td><label>Username</label></td>
					<td ><input type="text" name="username" value="" class="w60"></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td ><input type="password" name="password" value="" class="w60"></td>
				</tr>
				<tr>
					<td><label>Email</label></td>
					<td ><input type="text" name="email" value=""  class="w60"></td>
				</tr>
				<tr>
					<td><label>Tên user</label></td>
					<td ><input type="text" name="name" value=""  class="w60"></td>
				</tr>
				<tr>
					<td><label>Địa chỉ</label></td>
					<td><input type="text" name="address" value=""  class="w60"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="them" value="Thêm mới"></td>
				</tr>
			</tbody>
		</table>
	</form>
</div>
</div>
<?php
include ('./modules/footer.php');
?>

