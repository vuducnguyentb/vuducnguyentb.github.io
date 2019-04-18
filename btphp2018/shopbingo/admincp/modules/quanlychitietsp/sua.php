
<?php
	$sql = "select * from chitietsp where id_sp='$_GET[id]' ";
	$row=mysqli_query($conn,$sql);
	$dong=mysqli_fetch_array($row);
 ?>
<div class="button_themsp">
<a href="index.php?quanly=sanpham&amp;ac=lietke">Liệt Kê SP</a> 
</div>
<form action="modules/quanlychitietsp/xuly.php?id=<?php echo $dong['id_sp'] ?>" method="post" enctype="multipart/form-data">

<table width="600" border="1">
  <tr>
    <td colspan="2" style="text-align:center;font-size:25px;">Sửa Sản Phẩm</td>
  </tr>
  <tr>
    <td width="97">Tên Sản Phẩm</td>
    <td width="87"><input type="text" name="tensp" value="<?php echo $dong['tensp'] ?>"></td>
  </tr>
  <tr>
    <td>Mã SP</td>
    <td><input type="text" name="masp" value="<?php echo $dong['masp'] ?>"></td>
  </tr>
  <tr>
    <td>Hình Ảnh</td>
    <td><input type="file" name="hinhanh" /><img src="modules/quanlychitietsp/uploads/<?php echo $dong['hinhanh'] ?>" width="80" height="80"></td>
  </tr>
   <tr>
    <td>Giá SP</td>
    <td><input type="text" name="gia" value="<?php echo $dong['gia'] ?>" /></td>
  </tr>
  <tr>
    <td>Mô Tả</td>
    <td><textarea name="mota" cols="40" rows="10"><?php echo $dong['mota'] ?></textarea></td>
  </tr>
  <tr>
    <td>Số Lượng</td>
    <td><input type="text" name="soluong" value="<?php echo $dong['soluong'] ?>"></td>
  </tr>
  <?php
  	$sql_loaisp="select * from loaisp";
	$run_loaisp=mysqli_query($conn,$sql_loaisp);
  ?>
   <tr>
    <td>Loại SP</td>
    <td><select name="loaisp">
    <?php
		while($dong_loaisp=mysqli_fetch_array($run_loaisp)){
			if($dong['id_loaisp']==$dong_loaisp['id_loaisp']){
	?>
    		<option selected="selected" value="<?php echo $dong_loaisp['id_loaisp'] ?>"><?php echo $dong_loaisp['tenloaisp']?></option>
            <?php
		}else{
			?>
            <option value="<?php echo $dong_loaisp['id_loaisp'] ?>"><?php echo $dong_loaisp['tenloaisp']?></option>
            <?php
		}
		}
		?>
    	</select></td>
  </tr>
  </tr>
  <tr>
    <td>Tình Trạng</td>
    <td><select name="tinhtrang">
   
    <option value="1">Còn Hàng</option>
     <option value="2">Hết Hàng</option>
    </select></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="sua" value="Sửa Sản Phẩm">
    </div></td>
  </tr>
</table>
</form>


