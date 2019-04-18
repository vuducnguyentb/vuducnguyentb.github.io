<div class="button_themsp">
<a href="index.php?quanly=loaisp&ac=lietke">LK Loại SP</a> 
</div>
<form action="modules/quanlyloaisp/xuly.php" method="post" enctype="multipart/form-data">

<table width="200" border="1">
  <tr>
    <td colspan="2" style="text-align:center; font-size:25px">Thêm Loại Sản Phẩm</td>
  </tr>
  <tr>
    <td width="97">Tên Loại SP</td>
    <td width="87"><input type="text" name="loaisp"></td>
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
      <input type="submit" name="them" value="Thêm">
    </div></td>
  </tr>
</table>
</form>


