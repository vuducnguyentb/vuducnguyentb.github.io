	
<?php
	$sql_chitiet="select * from chitietsp where id_loaisp='$_GET[id]'";
	$query=mysqli_query($conn,$sql_chitiet);
?>
 <?php
	$sql_loaisp="select * from loaisp where id_loaisp='$_GET[id]'";
	$query_loaisp=mysqli_query($conn,$sql_loaisp);
	$dong_loaisp=mysqli_fetch_array($query_loaisp);
?>
        	 <p style="text-align:center;color:white;background:#828282;padding:10px;"><b><?php echo $dong_loaisp['tenloaisp'] ?></b></p>
             <table width="auto" border="0">
  <tr>
    <td> <div class="sanphamall">
             	<ul><br />
                <?php
				while($dong_chitiet=mysqli_fetch_array($query)){
				?>
                	<li><a href="index.php?xem=chitietsanpham&idloaisp=<?php echo $dong_chitiet['id_loaisp']?>&id=<?php echo $dong_chitiet['id_sp'] ?>">
                    	<img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_chitiet['hinhanh'] ?> " width="100" height="100" />
                        <p><?php echo $dong_chitiet['tensp'] ?></p>
                        
                        
                        <p style="color:#F00;">Giá SP: <?php echo number_format($dong_chitiet['gia']).' VND' ?> </p>
                        <p style="color:#000;text-align:center"> Chi tiết </p>
                    </a></li>
                    <?php
				}
					?>
                    
                </ul>
             </div>
             
             </td>
  </tr>
</table>

<br />            
            

 <?php
 	$sql_moi="select * from chitietsp where id_sp>65";
	$query_moi=mysqli_query($conn,$sql_moi);
 ?>
 
 
        	 <p style="text-align:center;color:white;background:#828282;padding:10px;"><b>Sản Phẩm Mới</b></p>
             <table width="auto" border="0">
  <tr>
    <td><div class="sanphamall">
             	<ul><br />
                <?php
					while($dong_moi=mysqli_fetch_array($query_moi)){
				?>
                	<li><a href="index.php?xem=chitietsanpham&idloaisp=<?php echo $dong_moi['id_loaisp']?>&id=<?php echo $dong_moi['id_sp'] ?>">
                    	<img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_moi['hinhanh'] ?> " width="100" height="100" />
                        <p><?php echo $dong_moi['tensp'] ?></p>
                        <p style="color:#F00;">Giá SP: <?php echo number_format($dong_moi['gia']).' VND' ?> </p>
                        <p style="color:#000;text-align:center"> Chi tiết </p>
                    </a></li>
                
                    <?php
					}
					
					?>
                    
                   
                </ul>
               
             </div></td>
  </tr>
</table>      
 