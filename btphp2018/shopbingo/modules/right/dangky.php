<?php
	if(isset($_POST['dangky'])){
		$tenkhachhang=$_POST['tenkhachhang'];
		$matkhau=$_POST['matkhau'];
		$email=$_POST['email'];
		$diachi=$_POST['diachi'];
		$dienthoai=$_POST['dienthoai'];
		$sql_dangky="insert into dangky(tenkhachhang,matkhau,email,dienthoai,diachi) value ('$tenkhachhang','$matkhau','$email','$dienthoai','$diachi')";	
		
			
		$parttenEmail = "/^[A-Za-z0-9_\.]{6,32}@([a-zA-Z0-9]{2,12})(\.[a-zA-Z]{2,12})+$/";
    $patternSDT = '#^\(?[\d]{3}\)?-\(?[\d]{2}\)?-[\d]{2}\.[\d]{3}-[\d]{3}$#';
    $check = true;
		if(filter_var($email,FILTER_VALIDATE_EMAIL) == false){
			echo "<script> alert('Email khong hop le'); </script> ";			      
      $check = false;
		}
    if(!preg_match($patternSDT, $dienthoai)){
      echo "<script> alert('SDT khong hop le'); </script> ";  
      $check = false;
    }


    if($check == true){
      $run_query=mysqli_query($conn,$sql_dangky);
      if($run_query){
        header('location:index.php?xem=thongbao');
      }else{
        header('location:index.php?xem=dangky');
      }      
    }    	
	}	
?>
 <p style="text-align:center;color:white;background:#828282;padding:10px;"><b>Đăng Ký</b></p>


<form action="index.php?xem=dangky" method="post" enctype="multipart/form-data"><br />
  <div align="center">
        <div align="center" style="font-size:30px; color:#036"><b>Đăng Ký Thành Viên</b></div></td><br />
    <table width="400" height="auto" border="0" style="font-size:18px; color:#036">
      <tr>
        <td width="210">Tên Khách Hàng <strong style="color:red;"> (*)</strong></td>
        <td width="180"><input type="text" name="tenkhachhang" size="30" placeholder="Điền đủ họ và tên" required="required"></td>
      </tr>
       <tr>
        <td>Địa Chỉ <strong style="color:red;"> (*)</strong></td>
        <td><input type="text" name="diachi" size="30" placeholder="Điền địa chỉ" required="required"></td>
      </tr>
      <tr>
        <td>Điện Thoại <strong style="color:red;"> (*)</strong></td>
        <td><input type="text" name="dienthoai" size="30" placeholder="Điền số điện thoại" required="required"></td>
      </tr>
      <tr>
      <tr>
        <td>Email <strong style="color:red;"> (*)</strong></td>
        <td><input type="text" name="email" size="30" placeholder="Điền địa chỉ email" required="required"></td>
      </tr>
      <tr>
        <td>Mật Khẩu <strong style="color:red;"> (*)</strong></td>
        <td><input type="password" name="matkhau" size="30" placeholder="Điền mật khẩu" required="required"></td>
      </tr>
     
        <td colspan="2"><div align="right" ><br />
           <input type="submit" style="font-size:20px; color:#036" name="dangky" value="Đăng Ký">
        </div></td>
      </tr>
  </table>
  </div>
</form>

  
 <div align="center">
<table width="650" border="0">
  <tr>
    <td width="42%" height="166"><div class="thongbao">
	<p><img src="images/chu-y-mua-hang.gif" width="100" height="50"></p>
<div class="dangky">
  <p style="font-size:18px; color:red;margin:5px;">Vui lòng điền đầy đủ thông tin vào những trường có dấu * và ghi chính xác địa chỉ(số nhà, ngõ, thôn xóm/ấp, phường/xã, huyện/quận, tỉnh, TP)</p>
<p>Nếu đã có tài khoản xin vui lòng đăng nhập. Đăng nhập để theo dõi đơn đặt hàng, vận chuyển và đặt hàng được thuận lợi.</p>
    	<div align="right">
    	<a href="index.php?xem=dangnhap" style="font-size:20px; color:#00F"  class="btn">Đăng Nhập</a></div>
    </td>
  </tr>
</table></div>