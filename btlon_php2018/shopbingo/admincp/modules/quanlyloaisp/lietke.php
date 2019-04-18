<?php

	$sql_lietkesp="select * from loaisp order by id_loaisp desc ";
	$run=mysqli_query($conn,$sql_lietkesp);

?>
<div class="button_themsp">
<a href="index.php?quanly=loaisp&ac=them">Thêm Mới</a> 
</div>

<table width="100%" border="1">
  <tr>
    <td><div align="center">ID</div></td>
    <td><div align="center">Tên Loại Sản Phẩm</div></td>
    <td><div align="center">Tình Trạng</div></td>
    <td colspan="2"><div align="center">Quản Lý</div></td>
  </tr>
  <?php
  $i=1;
  while($dong=mysqli_fetch_array($run)){

  ?>
  <tr>
    <td><?php  echo $i;?></td>
    <td><?php echo $dong['tenloaisp'] ?></td>
    <td><?php
	if($dong['tinhtrang'] == 1 ){
		echo 'Còn Hàng';
	}else{
		echo 'Hết Hàng';
	}
    ?></td>
    <td><a href="index.php?quanly=loaisp&ac=sua&id=<?php echo $dong['id_loaisp'] ?>"><center><img src="modules/quanlysanpham/images/edit.png" width="30" height="30" /></center></a></td>
    <td><a href="modules/quanlyloaisp/xuly.php?id=<?php echo $dong['id_loaisp']?>" class="delete_link"><center><img src="modules/quanlysanpham/images/delete.png" width="30" height="30" /></center></a></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
