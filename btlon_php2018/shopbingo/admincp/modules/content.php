 <div class="content">
    	<div class="box_contains">
        	<?php
				if(isset($_GET['quanly'])&&$_GET['ac']){
					$tam=$_GET['quanly'];
					$tam1=$_GET['ac'];
					}else{
						$tam='';
					}if(($tam == 'loaisp')&&($tam1 == 'them')){
						include('modules/quanlyloaisp/them.php');
						
					}elseif(($tam == 'loaisp')&&($tam1 == 'lietke')){
						include('modules/quanlyloaisp/lietke.php');
						
					}elseif(($tam == 'loaisp')&&($tam1 == 'sua')){
						include('modules/quanlyloaisp/sua.php');
						
					
					}elseif(($tam == 'sanpham')&&($tam1 == 'them')){
						include('modules/quanlychitietsp/them.php');
						
					}elseif(($tam == 'sanpham')&&($tam1 == 'lietke')){
						include('modules/quanlychitietsp/lietke.php');
						
					}elseif(($tam == 'sanpham')&&($tam1 == 'sua')){
						include('modules/quanlychitietsp/sua.php');
						
					}elseif(($tam == 'tintuc')&&($tam1 == 'them')){
						include('modules/quanlytintuc/them.php');
						
					}elseif(($tam == 'tintuc')&&($tam1 == 'lietke')){
						include('modules/quanlytintuc/lietke.php');
						
					}elseif(($tam == 'tintuc')&&($tam1 == 'sua')){
						include('modules/quanlytintuc/sua.php');
						
					}elseif(($tam == 'timkiem')&&($tam1 == 'sp')){
						include('modules/timkiem/timkiem.php');
					
					}elseif(($tam == 'khachhang')&&($tam1 == 'lietke')){
						include('modules/quanlykhachhang/lietke.php');
						
					}elseif(($tam=='doimk')&&($tam1 =='doimatkhau')){
						include('doimk/doimatkhau.php');
					
					}elseif(($tam=='donhang')&&($tam1 =='lietke')){
						include('modules/quanlydonhang/lietke.php');
					
					}else{
						include('modules/quanlychitietsp/lietke.php');
					
					}
			?>
        
        </div>
    </div>
    <div class="clear"></div>