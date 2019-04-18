<?php
	if(isset($_POST['doimatkhau'])){
		$taikhoan=$_POST['tentaikhoan'];
		$matkhaucu=$_POST['matkhaucu'];
		$matkhaumoi=$_POST['matkhaumoi'];
		$sql_doimk=mysqli_query($conn,"select * from admin where username='$taikhoan' and password='$matkhaucu' limit 1");
		$get_rows=mysqli_num_rows($sql_doimk);
		if($get_rows==0){
			echo "<script> alert('Sai tài khoản hoặc mật khẩu. Làm ơn điền lại !') </script>";
		}else{
			$sql_capnhat=mysqli_query($conn,"update admin set password='$matkhaumoi'");
					echo "<script> alert ('Bạn đã thay đổi mật khẩu admin thành công !') </script>";
	}
}
?>


<div align="center">
<form action="" method="post">
<table width="300" border="1">
  <tr>
    <td height="83" colspan="2"><div align="center"  style="font-size:30px; color:#036">Đổi Mật Khẩu</div></td>
  </tr>
  <tr>
    <td width="117" height="30"  style="font-size:20px; color:#036">Tên tài khoản </td>
    <td width="167"><input type="text" name="tentaikhoan"></td>
  </tr>
  <tr>
    <td  style="font-size:20px; color:#036">Mật khẩu cũ</td>
    <td><input type="password" name="matkhaucu"></td>
  </tr>
  <tr>
    <td height="30"  style="font-size:20px; color:#036">Mật khẩu mới</td>
    <td><input type="password" name="matkhaumoi"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="doimatkhau" id="doimatkhau"  style="font-size:15px; color:#036" value="OK">
    </div></td>
  </tr>
  </table>
  </form>

</div>