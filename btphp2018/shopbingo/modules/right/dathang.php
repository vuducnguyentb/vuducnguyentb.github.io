<p style="text-align:center;color:white;background:#828282;padding:10px;"><b>Giỏ Hàng</b></p><br />	
<?php
	@session_start();
	
	if(isset($_SESSION['sp'])){
	
			
			echo '<div class="box_giohang">';
			echo '  <table width="100%" border="1" style="border-collapse:collapse; margin:5px; text-align:center;">';
			
			echo'  <tr>';
			echo '<td>Mã SP</td>';
			echo'<td>Tên SP</td>';
			echo'<td>Hình ảnh</td>';
			echo'<td>Giá sp</td>';
			echo'<td>SL</td>';
			echo'<td>Tổng tiền</td>';
			echo'<td>Quản lý</td>';
			echo'</tr>';
	$thanhtien=0;
	foreach($_SESSION['sp'] as $cart_item){
			$id=$cart_item['add'];
			$sql="select * from chitietsp where id_sp='$id'";
			$row=mysqli_query($conn,$sql);
			$dong=mysqli_fetch_array($row);
		 	echo'<tr>';
			echo'<td>'.$dong['masp'].'</td>';
			echo'<td>'.$dong['tensp'].'</td>';
			echo'<td><img src="admincp/modules/quanlychitietsp/uploads/'.$dong['hinhanh'].'" width="100" height="100" /></td>';
			echo'<td>'.number_format($dong['gia']).'</td>';
			
			echo'<td><a href="index.php?xem=dathang&cong='.$cart_item['id'].'" style="margin-right:2px;"><img src="images/plus.png" width="20" height="20"></a>'.$cart_item['soluong'].'<a href="index.php?xem=dathang&tru='.$cart_item['id'].'" style="margin-left:2px;"><img src="images/subtract.png" width="20" height="20"></a></td>';
			$tongtien=0;
			$tongtien=$cart_item['soluong']*$cart_item['gia'];
			$thanhtien=($thanhtien + $tongtien);
			echo'<td>'.number_format($tongtien).'</td>';
			echo'<td><a href="index.php?xem=dathang&xoa='.$cart_item['id'].'"><img src="images/deletered.png" width="30" height="30"></a></td>';
			echo'</tr>';
			echo '<tr>';
			echo'</tr>';
			
  	}
			echo '<tr>
				
				<td colspan="6"><a href="index.php?xem=dathang&xoatoanbo=1"  style="text-decoration:none;" >Xóa toàn bộ</a>	
				
				</td>
				
				
				<td>Thành tiền : '.number_format($thanhtien).'VNĐ'.'</td>
				
			
			</tr>';
			
	}else{
		
		echo 'Giỏ hàng của bạn trống';
	}
	

 	echo'</table>';
	
	
  ?>
  
 

            <ul	class="control">
              <div align="center">
                <table width="634" height="30" border="0">
                  <tr>
                    <td width="229"><p align="center"><a href="?xem=trangchu" style="font-size:18px">Tiếp tục mua hàng</a></p></td>
                    <td width="169"> <p align="center"><a href="?xem=dangky" style="font-size:18px">Đăng ký mới</a></p></td>
                    <td width="222"><p align="center"><a href="?xem=dangnhap" style="font-size:18px">Bạn đã có tài khoản</a></p></td>
                  </tr>
  </table>
                
                
                
                
                
              </div>
              <p style="float:right;text-decoration:none;"><a href="index.php?xem=tratien" style="color:#F00;margin:10px; font-size:25px">Thanh Toán</a></p>
				
        	</ul>
    
        </div>
