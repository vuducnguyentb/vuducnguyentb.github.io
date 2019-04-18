<div class="content">        
    <div class="left">
    <?php
		include('modules/left/danhsach.php');
		?>
    </div>
    <div class="right">
    	<?php
		if(isset($_GET['xem'])){
					$tam=$_GET['xem'];
				}else{
					$tam='';
				}if($tam=='chitietloaisp'){
					include('modules/right/chitietloaisp.php');
				}elseif($tam=='chitietsanpham'){
					include('modules/right/chitietsp.php');
				}elseif($tam=='dangky'){
					include('modules/right/dangky.php');
				//}elseif($tam=='giohang'){
					//include('modules/right/cart.php');
				}elseif(isset($_POST['search'])){
					include('modules/right/search.php');
				}elseif($tam=='thongbao'){
					include('modules/right/thongbao.php');
				}elseif($tam=='thanhtoan'){
					include('modules/right/thanhtoan.php');
				}elseif($tam=='giaohang'){
					include('modules/right/giaohang.php');
				}elseif($tam=='dangnhap'){
					include('modules/right/dangnhap.php');
				}elseif($tam=='tratien'){
					include('modules/right/tratien.php');
				}elseif($tam=='lienhe'){
					include('modules/right/lienhe.php');
				}elseif($tam=='huongdan'){
					include('modules/right/huongdan.php');
				}elseif($tam=='dangxuat'){
					include('modules/right/dangxuat.php');
				}elseif($tam=='sukien'){
					include('modules/right/sukien.php');
				//}elseif($tam=='giohang'){
					//include('modules/right/2cart.php');
				}elseif($tam == 'dathang'){
					include('modules/right/dathang.php');

				}else{
					include('modules/right/tatcasanpham.php');
				}
		?>
    </div>
</div>  
        <div class="clear">
        </div> 