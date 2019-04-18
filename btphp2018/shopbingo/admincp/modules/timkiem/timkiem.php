
<?php
	if(isset($_POST['timkiem'])){
	$search=$_POST['masp'];
	echo 'Mã tìm kiếm :<strong>'.' '.$search.'</strong><br/>';
	$sql_timkiem="select * from chitietsp,loaisp where chitietsp.id_loaisp=loaisp.id_loaisp and masp LIKE '%$search%'";
	$row_timkiem=mysqli_query($conn,$sql_timkiem);
	$count=mysqli_num_rows($row_timkiem);
	if($count>0){
	
?>
<br />
<h3>Kết quả tìm kiếm</h3>

<table width="100%" border="1">
  <tr>
    <td>ID</td>
    <td>Tên sản phẩm</td>
    <td>Mã sp</td>
    <td>Hình ảnh</td>
    <td>Giá </td>
    <td>Số lượng</td>
    <td>Loại hàng</td>
    <td>Tình trạng</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  $i=1;
  while($dong=mysqli_fetch_array($row_timkiem)){

  ?>
  <tr>
    <td><?php  echo $i;?></td>
    <td><?php echo $dong['tensp'] ?></td>
    <td><?php echo $dong['masp'] ?></td>
    <td><img src="modules/quanlychitietsp/uploads/<?php echo $dong['hinhanh'] ?>" width="80" height="80" /></td>
    <td><?php echo $dong['gia'] ?></td>
    <td><?php echo $dong['soluong'] ?></td>
    <td><?php echo $dong['tenloaisp'] ?></td>
    <td><?php $sql_tinhtrang = "select tinhtrang from chitietsp";
	$row_tinhtrang = mysqli_query($conn,$sql_tinhtrang);
	$dong_tinhtrang=mysqli_fetch_array($row_tinhtrang);
	if($dong_tinhtrang['tinhtrang'] == 1 ){
		echo 'Kích hoạt';
	}elseif($dong_tinhtrang['tinhtrang'] ==2){
		echo 'Không kích hoạt';
	}
    ?></td>
   <td><a href="index.php?quanly=sanpham&amp;ac=sua&amp;id=<?php echo $dong['id_sp'] ?>" ><center><img src="modules/quanlychitietsp/images/edit.png" width="30" height="30" /></center></a></td>
    <td><a href="modules/quanlychitietsp/xuly.php?id=<?php echo $dong['id_sp']?>" class="delete_link"><center><img src="modules/quanlychitietsp/images/delete.png" width="30" height="30"   /></center></a></td>
  </tr>
  <?php
  $i++;
  }
	}else{
	  echo 'Không tìm thấy kết quả';
  }
  }
  ?>
</table>
