<?php
	$sql = "select * from loaisp where id_loaisp = '$_GET[id]'";
	$row=mysqli_query($conn,$sql);
	$dong=mysqli_fetch_array($row);
?>
<div class="button_themsp">
<a href="index.php?quanly=loaisp&ac=lietke">LK Loại SP</a> 
</div>
<form action="modules/quanlyloaisp/xuly.php?id=<?php echo $dong['id_loaisp']?>" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table width="200" border="1">
  <tr>
    <td colspan="2" style="text-align:center; font-size:25px">Sửa Loại Sản Phẩm</td>
  </tr>
  <tr>
    <td width="97">Tên Loại SP</td>
    <td width="87"><input type="text" name="loaisp" value="<?php echo $dong['tenloaisp'] ?>"></td>
  </tr>
  <tr>
    <td>Tình Trạng</td>
    <td><select name="tinhtrang">
      <?php
	if($dong['tinhtrang'] == 1){
	?>
      <option value="1" selected="selected">Còn Hàng</option>
      <option value="2">Hết Hàng</option>
      <?php
	}else{
	?>
      <option value="1">Còn Hàng</option>
      <option value="2" selected="selected">Hết Hàng</option>
      <?php
	}
	 ?>
      </select></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
     <input type="submit" name="sua" id="sua" value="Sửa">
    </div></td>
  </tr>
</table>
</form>


