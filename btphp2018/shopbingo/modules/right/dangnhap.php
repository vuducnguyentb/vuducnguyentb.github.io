<?php
	session_destroy();
	session_start();
	
	
	if(isset($_POST['dangnhap'])){
		$email=$_POST['email'];
		$matkhau=$_POST['matkhau'];
		$sql_dangnhap="select * from dangky where email='$email' and matkhau='$matkhau' limit 1";
		$run_dangnhap=mysqli_query($conn,$sql_dangnhap);
		$count_dangnhap=mysqli_num_rows($run_dangnhap);
		if($count_dangnhap==0){
			echo '<script>alert("Bạn đã nhập sai email hoặc mật khẩu ! Vui lòng nhập lại !")</script>';
		}else{
			$_SESSION['dangnhap']=$email;
			header('location:index.php');
		}
	}
?>
 <p style="text-align:center;color:white;background:#828282;padding:10px;"><b>Đăng Nhập</b></p>
<form action="" method="post" enctype="multipart/form-data"><br />
  <div align="center">
	
<td colspan="2"><div align="center" style="font-size:30px; color:#036">
  <p><b>Đăng Nhập</b></p><br />
  <table width="auto" height="auto" border="0" style="font-size:20px; color:#036" >
    <tr>
        <td width="108">Email</td>
        <td width="182"><input type="text" name="email" size="30" placeholder="Điền địa chỉ email"></td>
        </tr>
      <tr>
        <td>Mật Khẩu</td>
        <td><input type="password" name="matkhau" size="30" placeholder="Điền mật khẩu"></td>
        </tr>
      <td colspan="2"><div align="right"><br />
        <input type="submit" style="font-size:15px; color:#036" name="dangnhap" value="Đăng Nhập">
        </div></td>
        </tr>
</table>
  </div>
  </div></form>
  
  <form action="" method="post" enctype="multipart/form-data"><br />
  <div align="center">
<table width="650" height="auto" border="0" style="font-size:17px; color:#609">
  <tr>
    <td><p><img src="images/chu-y-mua-hang.gif" width="100" height="50"></p>
    Nếu bạn chưa có tài khoản hãy ấn vào đăng ký. Đăng ký tài khoản để mua hàng nhanh hơn. Theo dõi đơn đặt hàng, vận chuyển. Cập nhật các sự kiện và chương trình giảm giá của chúng tôi.</td>
  </tr>
  <tr>
    <td><div align="right">
      <a href="index.php?xem=dangky" style="font-size:20px; color:#00C" class="btn">Đăng ký</a></div></td>
  </tr>
</table>
</div>
</form>

						




			