
 <?php
 	if(isset($_POST['search'])){
		$search=$_POST['searchtext'];
		$sql_search="select * from chitietsp where tensp LIKE '%$search%' ";
		$query_search=mysqli_query($conn,$sql_search);
	}
?>
        	 <p style="text-align:center;color:#FFF;background:#828282;padding:10px;"><b>Sản Phẩm Tìm Thấy</b></p><br />
            
             <div class="sanphamall">
             <?php
			 	if($count=mysqli_num_rows($query_search)==0){?>
				 <p>Không Tìm Thấy Sản Phẩm Nào</p>
              <?php
			 }else{
			 ?>
             	<ul>
                <?php
				while($dong_search=mysqli_fetch_array($query_search)){
				?>
                	<li><a href="index.php?xem=chitietsanpham&id=<?php echo $dong_search['id_sp'] ?>">
                    	<img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_search['hinhanh'] ?> " width="100" height="100" />
                        <p><?php echo $dong_search['tensp'] ?></p>
                        <p style="color:#F00;">Giá sp:<?php echo $dong_search['gia'] ?> </p>
                        <p style="color:#F00;text-align:center"> Chi tiết </p>
                    </a></li>
                    <?php
				}
			 }
					?>
                </ul>
             </div>
             
 