<?php
	$sql_lietkesp="select * from tintuc
	
	 order by tintuc.idtintuc desc ";
	$row_lietkesp=mysqli_query($conn,$sql_lietkesp);

?>
<div class="button_themsp">
<a href="index.php?quanly=tintuc&ac=them">Thêm Mới</a> 
</div>

<table width="100%" border="1">
  <tr>
    <td><div align="center">ID</div></td>
    <td><div align="center">Tên Tin Tức</div></td>
    <td><div align="center">Mã Tin</div></td>
    <td><div align="center">Hình Ảnh</div></td>
    <td><div align="center">Tình Trạng</div></td>
    <td colspan="2"><div align="center">Quản Lý</div></td>
  </tr>
  <?php
  $i=1;
  while($dong=mysqli_fetch_array($row_lietkesp)){

  ?>
  <tr>
    <td><?php  echo $i;?></td>
    <td><?php echo $dong['tentintuc'] ?></td>
    <td><?php echo $dong['matin'] ?></td>
    <td><img src="modules/quanlytintuc/uploads/<?php echo $dong['hinhanh'] ?>" width="300" height="80" /></td>
    
    <td><?php $sql_tinhtrang = "select tinhtrang from tintuc";
	$row_tinhtrang = mysqli_query($conn,$sql_tinhtrang);
	$dong_tinhtrang=mysqli_fetch_array($row_tinhtrang);
	if($dong_tinhtrang['tinhtrang'] == 1 ){
		echo 'Kích hoạt';
	}elseif($dong_tinhtrang['tinhtrang'] ==2){
		echo 'Không kích hoạt';
	}
    ?></td>
    <td><a  href="index.php?quanly=tintuc&ac=sua&id=<?php echo $dong['idtintuc'] ?>"><center><img src="modules/quanlychitietsp/images/edit.png" width="30" height="30" /></center></a></td>
    <td><a class="delete_link" href="modules/quanlytintuc/xuly.php?id=<?php echo $dong['idtintuc']?>"><center><img src="modules/quanlychitietsp/images/delete.png" width="30" height="30" /></center></a></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
