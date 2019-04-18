<div class="header">
    	<div align="right"><img src="images/banner-phu-kien-nu-png.png" width="100%" height="200px"/>
 
  <?php
	session_start();
?>
	
  <?php
	if(isset($_SESSION['dangnhap'])){
		echo 'Xin chào : '.$_SESSION['dangnhap'];
	}
	?>
      <a href="index.php?xem=dangxuat">Đăng Xuất</a>
         
                    
    </div>
   
    