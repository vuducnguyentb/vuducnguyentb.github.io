<?php
	if(isset($_POST['logout'])){
		unset($_SESSION['dangnhap']);
		header('location:login.php');
	}
?>
<div class="menu">
    	<ul>
        	<li><a href="index.php?quanly=loaisp&ac=them">QL Loại SP</a></li>
            <li><a href="index.php?quanly=sanpham&ac=them">QL Sản Phẩm</a></li>
			<li><a href="index.php?quanly=tintuc&ac=them">QL Tin Tức</a></li>
            <li><a href="index.php?quanly=khachhang&ac=lietke">QL Khách Hàng</a></li>
             <li><a href="index.php?quanly=donhang&ac=lietke">QL Đơn Hàng</a></li>
            <li><a href="index.php?quanly=doimk&ac=doimatkhau">Đổi Mật Khẩu</a></li>
            <form action="" method="post" enctype="multipart/form-data">
            <input type="submit" name="logout" value="Đăng xuất" style="background:#06F;color:#fff;width:100px;height:30px;" />
            </form>
        </ul>
       
    </div>
<br />
 <form action="index.php?quanly=timkiem&ac=sp" method="post" enctype="multipart/form-data">
     <p><input type="text" name="masp" placeholder="Nhập mã sản phẩm..." id="timkiem" required="required" />
        <input type="submit" id="button_timkiem" name="timkiem" value="Tìm sản phẩm" />
        </p>
        </form>
        <br />