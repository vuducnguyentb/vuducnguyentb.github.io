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
	<h1>Thêm hãng điện thoại mới.</h1>
	<form action="xuly_hangdt_them.php" method="post" accept-charset="utf-8">
		<table>
			<tbody>
				<tr>
					<td><label>Tên hãng</label></td>
					<td ><input type="text" name="ten_hang" value="" placeholder="nhập tên hãng muốn thêm" class="w60"></td>
				</tr>
				<tr>
					<td><label>Ghi chú</label></td>
					<td><input type="text" name="ghi_chu" value="" placeholder="" class="w60"></td>
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

