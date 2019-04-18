<?php
	$sql_loaisp="select * from loaisp order by id_loaisp desc";
	$query=mysqli_query($conn,$sql_loaisp);
?>
<table width="200" border="0">
  <tr>
    <td><p style="text-align:center;color:white;background:#828282;padding:10px;"><marquee><b> Loại Sản Phẩm</b></marquee></p>
     <div class="danhsachsanpham">
         <ul>
            <?php
				while($dong_sp=mysqli_fetch_array($query)){
			?>
        	<li><a href="index.php?xem=chitietloaisp&id=<?php echo $dong_sp['id_loaisp'] ?>"><?php echo $dong_sp['tenloaisp']?></a></li>
            <?php
			  }
			?></td>
  </tr>
</table>


   <br /> <div align="right"><img src="images/slide-lotgiaytangchieucao.jpg" width="100%" height="150px"/>
       </ul>
       </div>
       
  
                 
<br /><p style="text-align:center;color:white;background:#828282;padding:10px;"><marquee direction="right"><b>Hỗ Trợ Trực Tuyến</b></marquee></p>  
 	<div class="danhsachsanpham">
    	<div align="center">
    	  <table width="100%" border="0">
    	    <tr>
    	      <td><div align="center"><b>Tư Vấn Bán Hàng</b><br /></div>
              Mrs.Hoa: (04) 6666 8888<br>
    	      Mrs.Lan: (04).8888 6666<br />
              Email:shopbingo@gmail.com
   	          </td>
   	        </tr>
  </table>

  	  </div>
 	</div>
        	
   
