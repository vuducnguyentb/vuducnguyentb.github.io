
<?php
	$sql_chitietsp="select * from chitietsp where id_sp=$_GET[id]";
	$query_chitietsp=mysqli_query($conn,$sql_chitietsp);
	$dong_chitietsp=mysqli_fetch_array($query_chitietsp);
?>
<div align="center">
	 <p style="text-align:center;color:white;background:#828282;padding:10px;"><b>Chi Tiết Sản Phẩm</b></p><br />
  <form action="index.php?xem=dathang&add=<?php echo $dong_chitietsp['id_sp'] ?>" method="post" enctype="multipart/form-data">
    <table width="500" border="0" style="border-collapse:collapse">
    <tr>
      <td rowspan="6"><img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_chitietsp['hinhanh'] ?>" width="200" height="200"/></td
    ></tr>
    
    <tr>
    <td height="53"><p><strong>Tên Sản Phẩm: </strong><em style="color:red"><?php echo $dong_chitietsp['tensp'] ?></em></p></td>
    </tr>
    
    <tr>
      <td height="33"> <p><strong>Mã Sản Phẩm: </strong><em style="color:red"><?php echo $dong_chitietsp['masp'] ?></em> </p> </td>
    </tr>
    
    <tr>
      <td height="39"><p><strong> Tình trạng:</strong><span style="color:blue;"> Còn Hàng </p> </td>
    </tr>
    
    <tr>
      <td height="39"><p><strong>Số Lượng: </strong><?php echo $dong_chitietsp['soluong'] ?></p></td>
    </tr>
    
    <tr>
      <td><p><strong>Giá SP: </strong><span style="color:red;"> <?php echo number_format($dong_chitietsp['gia']).' '.'VNĐ'?></span></p> 
    </tr>
    
    <tr>
      <td colspan="2"><div align="right">
        <input type="submit" name="cart" value="Mua hàng" style="margin:10px;width:100px;height:40px;background:#9F6;color:#000;font-size:18px;border-radius:8px;" />
      </div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center" style="font-size:23px; color:#606">
        <div align="left">Thông Số Kỹ Thuật      </div>
      </div></td>
    </tr>
    <tr>
      <td colspan="2"><br /><?php echo $dong_chitietsp['mota'] ?></td>
    </tr>
  </table></form><br />
<?php
  $sql = "select * from chitietsp where id_loaisp='$_GET[idloaisp]' and chitietsp.id_sp <> $_GET[id]";
	$sql_spcungloai=mysqli_query($conn,$sql);
?>
     
    <p style="text-align:center;color:white;background:#828282;padding:10px;"><b>Sản Phẩm Cùng Loại</b></p>
         <br />    <div class="sanphamall">
             	<ul>
                <?php
				while($dong_spcungloai=mysqli_fetch_array($sql_spcungloai)){
				?>
                	<li><a href="index.php?xem=chitietsanpham&idloaisp=<?php echo $dong_spcungloai['id_loaisp']?>&id=<?php echo $dong_spcungloai['id_sp'] ?>">
                    	<img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_spcungloai['hinhanh'] ?> " width="100" height="100" />
                        <p><?php echo $dong_spcungloai['tensp'] ?></p>
                        <p style="color:#F00;">Giá SP: <?php echo  number_format($dong_spcungloai['gia']).' VND' ?> </p>
                        <p style="color:#000;text-align:center"> Chi tiết </p>
                    </a></li>
                
                    <?php
					
				}
				
					
					?>
                    
                   
                </ul>
               
             </div>
    
</div>





























