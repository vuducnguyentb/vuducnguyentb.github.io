 <?php
 	
	 //phan trang
			 if(isset($_GET['trang'])){
			 	$trang=$_GET['trang'];
			 }else{
					$trang='';
				}
			 if($trang==''||$trang=='1'){
				 $trang1=0;
			 }else{
				 $trang1=($trang*11)-11;
			 }
			 
			
 	$sql_all="select * from chitietsp limit $trang1,12 ";
	$query_all=mysqli_query($conn,$sql_all);
 ?>
 
 <?php
 	$sql_hot="select * from chitietsp where gia>=300000";
	$query_hot=mysqli_query($conn,$sql_hot);
 ?>
 
        	 <p style="text-align:center;color:white;background:#828282;padding:10px;"><b>Sản Phẩm Hot</b></p>
             <table width="auto" border="0">
  <tr>
    <td><div class="sanphamall">
             	<ul><br />
                <?php
					while($dong_hot=mysqli_fetch_array($query_hot)){
				?>
                	<li><a href="index.php?xem=chitietsanpham&idloaisp=<?php echo $dong_hot['id_loaisp']?>&id=<?php echo $dong_hot['id_sp'] ?>">
                    	<img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_hot['hinhanh'] ?> " width="100" height="100" />
                        <p><?php echo $dong_hot['tensp'] ?></p>
                        <p style="color:#F00;">Giá SP: <?php echo number_format($dong_hot['gia']).' VND' ?> </p>
                        <p style="color:#000;text-align:center"> Chi tiết </p>
                    </a></li>
                
                    <?php
					}
					
					?>
                    
                   
                </ul>
               
             </div></td>
  </tr>
</table>

             
 <br />

 
        	 <p style="text-align:center;color:white;background:#828282;padding:10px;"><b>Tất Cả Sản Phẩm</b></p>
             <div class="sanphamall">
             	<ul><br />
                <?php
				while($dong_all=mysqli_fetch_array($query_all)){
				?>
                	<li><a href="index.php?xem=chitietsanpham&idloaisp=<?php echo $dong_all['id_loaisp']?>&id=<?php echo $dong_all['id_sp'] ?>">
                    	<img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_all['hinhanh'] ?> " width="100" height="100" />
                        <p><?php echo $dong_all['tensp'] ?></p>
                        <p style="color:#F00;">Giá SP:  <?php echo number_format($dong_all['gia']).' VND' ?> </p>
                        <p style="color:#000;text-align:center"> Chi tiết </p>
                    </a></li>
                
                    <?php
					}
					
					?>
                    
                   
                </ul>
               
             </div>
             
             <p style="clear:both;">
               
			   <?php
				//dem so trang
					
					$sql="select * from chitietsp";
					$dong_cou=mysqli_query($conn,$sql);
				
					$cou=mysqli_num_rows($dong_cou);
					
					$a=ceil($cou/7);
					echo 'Trang: ';
					for($b=1;$b<$a;$b++){
						echo ' <a href="index.php?trang='.$b.'">'.$b.'</a>'.' ' ;
					}
			?>
             </p>
             
 