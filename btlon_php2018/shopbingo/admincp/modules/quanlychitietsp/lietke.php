
<?php
	if(isset($_GET['trang'])){
		$trang=$_GET['trang'];
	}else{
		$trang='';
	}
	if($trang =='' || $trang =='1'){
		$trang1=0;
	}else{
		$trang1=($trang*10)-10;
	}
	$sql_lietkesp="select * from chitietsp,loaisp where loaisp.id_loaisp=chitietsp.id_loaisp order by chitietsp.id_sp desc limit $trang1,10 ";
	$run_lietkesp=mysqli_query($conn,$sql_lietkesp);

?>
<div class="button_themsp">
<a href="index.php?quanly=sanpham&amp;ac=them">Thêm Mới</a> 
</div>

<table width="100%" border="1">
  <tr>
    <td><div align="center">ID</div></td>
    <td><div align="center">Tên Sản Phẩm</div></td>
    <td><div align="center">Mã SP</div></td>
    <td><div align="center">Hình Ảnh</div></td>
    <td><div align="center">Giá SP</div></td>
    <td><div align="center">Số Lượng</div></td>
    <td><div align="center">Loại Hàng</div></td>
    <td><div align="center">Tình Trạng</div></td>
    <td colspan="2"><div align="center">Quản Lý</div></td>
  </tr>
  <?php
  $i=1;
  while($dong=mysqli_fetch_array($run_lietkesp)){

  ?>
  <tr>
  	
    <td><?php  echo $i;?></td>
    <td><?php echo $dong['tensp'] ?></td>
    <td><?php echo $dong['masp'] ?></td>
    <td><img src="modules/quanlychitietsp/uploads/<?php echo $dong['hinhanh'] ?>" width="80" height="80" />
    </td>
    <td><?php echo $dong['gia'] ?></td>
    <td><?php echo $dong['soluong'] ?></td>
    <td><?php echo $dong['tenloaisp'] ?></td>
    
    <td><?php $sql_tinhtrang = "select tinhtrang from chitietsp";
	$row_tinhtrang = mysqli_query($conn,$sql_tinhtrang);
	$dong_tinhtrang=mysqli_fetch_array($row_tinhtrang);
	if($dong_tinhtrang['tinhtrang'] == 1 ){
		echo 'Còn Hàng';
	}elseif($dong_tinhtrang['tinhtrang'] ==2){
		echo 'Hết Hàng';
	}
    ?></td>
    
    <td><a href="index.php?quanly=sanpham&amp;ac=sua&amp;id=<?php echo $dong['id_sp'] ?>" ><center><img src="modules/quanlychitietsp/images/edit.png" width="30" height="30" /></center></a></td>
    <td><a href="modules/quanlychitietsp/xuly.php?id=<?php echo $dong['id_sp']?>" class="delete_link"><center><img src="modules/quanlychitietsp/images/delete.png" width="30" height="30"   /></center></a></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
<div class="trang">
	Trang :
    <?php
	$sql_trang=mysqli_query($conn,"select * from chitietsp");
	$count_trang=mysqli_num_rows($sql_trang);
	$a=ceil($count_trang/10);
	for($b=1;$b<=$a;$b++){
		
		if($trang==$b){
		
		echo '<a href="index.php?quanly=sanpham&ac=lietke&trang='.$b.'" style="text-decoration:underline;color:red;">'.$b.' ' .'</a>';
        
	}else{
		echo '<a href="index.php?quanly=sanpham&ac=lietke&trang='.$b.'" style="text-decoration:none;color:#000;">'.$b.' ' .'</a>';
	}
	}
	?>
</div>
