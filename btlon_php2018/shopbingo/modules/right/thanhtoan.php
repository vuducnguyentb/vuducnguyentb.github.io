<?php
	if(isset($_POST['dathang'])){
		$tenkh=$_POST['tenkh'];
		$diachi=$_POST['diachi'];
		$sdt=$_POST['sdt'];
		$email=$_POST['email'];
		$id_sp=$_POST['id_sp'];
		$ghichu=$_POST['ghichu'];
		
		$sql_donhang="insert into donhang(tenkh,email,sdt,diachi,ghichu,id_sp) value ('$tenkh','$email','$sdt','$diachi','$ghichu','$id_sp')";
		
		$partten = "/^[A-Za-z0-9_\.]{6,32}@([a-zA-Z0-9]{2,12})(\.[a-zA-Z]{2,12})+$/";
		if(filter_var($email,FILTER_VALIDATE_EMAIL) == false){
			echo "<script> alert('Email khong hop le') </script> ";
			return;
		}
		
		$run=mysqli_query($conn,$sql_donhang);
		
		if($run){
			header('location:index.php?xem=tratien');
		}else{
			header('location:index.php?xem=thanhtoan');
		}
	}
?>


<p style="text-align:center;color:white;background:#828282;padding:10px;">Xác Nhận Địa Chỉ</p>
<br/><br />
<div align="center" style="font-size:30px; color:#036"><b> Địa Chỉ Nhận Hàng</b></div></td>
<form action="" method="post" enctype="multipart/form-data"><br /><br />	
  <div align="center">
    <table width="500" height="auto" border="0" style="font-size:20px; color:#036">
      <tr>
        <td>Họ Tên Khách Hàng : </td>
        <td><input type="text" name="tenkh" size="30" placeholder="Ghi rõ họ tên" required="required"></td>
      </tr>
      <tr>
        <td>SĐT : </td>
        <td><input type="text" name="sdt" size="30" placeholder="Điền số điện thoại" required="required"></td>
      </tr>
      <tr>
        <td>Email : </td>
        <td><input type="text" name="email" size="30" placeholder="Điền địa chỉ email" required="required"> </td>
      </tr>
      <tr>
        <td>Địa Chỉ :</td>
        <td><input type="text" name="diachi" size="30" placeholder="Ghi rõ số nhà, Phố, Quận, Thành Phố" required="required"></td>
      </tr>
      <tr>
        <td>Id sản phẩm :</td>
        <td><input type="text" name="id_sp" size="30" placeholder="Ghi id sp" required="required"></td>
      </tr>
      <tr>
        <td>Ghi Chú :</td>
        <td><textarea name="ghichu" cols="32" rows="10"></textarea></td>
      </tr>
        <td colspan="2"><div align="center"><br />
          <input type="submit" name="dathang" style="font-size:20px; color:#036; float:right"  value="Đặt Hàng">
        </div></td>
      </tr>
  </table>
  </div>
</form>

