<div class="button_themsp">
<a href="index.php?quanly=sanpham&amp;ac=lietke">Liệt Kê SP</a> 
</div>
<form action="modules/quanlychitietsp/xuly.php" method="post" enctype="multipart/form-data">

<table width="600" border="1">
  <tr>
    <td colspan="2" style="text-align:center;font-size:25px;">Thêm  Sản Phẩm</td>
  </tr>
  <tr>
    <td width="97">Tên Sản Phẩm</td>
    <td width="87"><input type="text" name="tensp"></td>
  </tr>
  <tr>
    <td>Mã SP</td>
    <td><input type="text" name="masp"></td>
  </tr>
  <tr>
    <td>Hình Ảnh</td>
    <td><input type="file" name="hinhanh" /></td>
  </tr>
   <tr>
    <td>Giá SP</td>
    <td><input type="text" name="gia" /></td>
  </tr>

  <tr>
    <td>Mô Tả</td>
    <td><textarea name="mota" cols="40" rows="10"></textarea></td>
  </tr>
  <tr>
    <td>Số Lượng</td>
    <td><input type="text" name="soluong"></td>
  </tr>
  <tr>
  <?php
  $sql_loaisp = "select * from loaisp";
  $row_loaisp=mysqli_query($conn,$sql_loaisp);
  ?>
    <td>Loại Sản Phẩm</td>
    <td><select name="loaisp">
    <?php
	while($dong_loaisp=mysqli_fetch_array($row_loaisp)){
	?>
    	<option value="<?php echo $dong_loaisp['id_loaisp'] ?>"><?php echo $dong_loaisp['tenloaisp'] ?></option>
        <?php
	}
		?>
    </select></td>
  </tr>
  
  <tr>
    <td>Tình Trạng</td>
    <td><select name="tinhtrang">
   
    <option value="1">Còn Hàng </option>
     <option value="2">Hết Hàng</option>
    </select></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="them" value="Thêm Sản Phẩm">
    </div></td>
  </tr>
</table>
</form>


