<?php
header("Content-type: application/octet-stream"); 
header("Content-Disposition: attachment; filename=data.xls"); 
header("Pragma: no-cache");
header("Expires: 0"); 
	$sql="select * from donhang order by id_kh desc ";
	$run=mysqli_query($conn,$sql);

?>


<table width="100%" border="1">
  <tr>
    <td><div align="center">STT</div></td>
    <td><div align="center">ID Khách Hàng</div></td>
    <td><div align="center">Tên Khách Hàng</div></td>
    <td><div align="center">Email</div></td>
    <td><div align="center">ID Sản Phẩm</div></td>
    <td><div align="center">Điện Thoại</div></td>
    <td><div align="center">Địa Chỉ</div></td>
    <td><div align="center">Ghi Chú</div></td>
  </tr>
  <?php
  $i=1;
  while($dong=mysqli_fetch_array($run)){

  ?>
  <tr>
    <td><?php  echo $i;?></td>
    <td><?php echo $dong['id_kh'] ?></td>
    <td><?php echo $dong['tenkh'] ?></td>
    <td><?php echo $dong['email'] ?></td>
    <td><?php echo $dong['id_sp'] ?></td>
    <td><?php echo $dong['sdt'] ?></td>
    <td><?php echo $dong['diachi'] ?></td>
    <td><?php echo $dong['ghichu'] ?></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
