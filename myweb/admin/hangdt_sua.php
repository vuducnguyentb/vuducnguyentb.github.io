<?php
include('../config.php');
$id_hang=$_GET['id_hang'];
$conn = connectTodb();
$sql ="SELECT * FROM hangdt where id_hang='$id_hang'";
$run=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($run);
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
	<h1>Cập nhập hãng điện thoại .</h1>
	<form action="xuly_hangdt_sua.php" method="post" accept-charset="utf-8">
		<table>
			<tbody>
				<tr>
					<td><label>Tên hãng</label></td>
					<td ><input type="text" name="ten_hang" value="<?php echo $row['ten_hang']?>" placeholder="nhập tên hãng muốn thêm" class="w60"></td>
				</tr>
				<tr>
					<td><label>Ghi chú</label></td>
					<td><input type="text" name="ghi_chu" value="<?php echo $row['ghi_chu']?>" placeholder="" class="w60"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id_hang" value="<?php echo $row['id_hang']?>"></td>
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

