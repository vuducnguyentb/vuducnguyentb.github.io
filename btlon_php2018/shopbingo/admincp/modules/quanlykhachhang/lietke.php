<?php
	$sql="select * from dangky order by id desc ";
	$run=mysqli_query($conn,$sql);

?>


<table width="100%" border="1">
  <tr>
    <td><div align="center">ID</div></td>
    <td><div align="center">Tên Khách Hàng</div></td>
    <td><div align="center">Email</div></td>
    <td><div align="center">Mật Khẩu</div></td>
    <td><div align="center">Điện Thoại</div></td>
    <td><div align="center">Địa Chỉ</div></td>
  </tr>
  <?php
  $i=1;
  while($dong=mysqli_fetch_array($run)){

  ?>
  <tr>
    <td><?php  echo $i;?></td>
    <td><?php echo $dong['tenkhachhang'] ?></td>
    <td><?php echo $dong['email'] ?></td>
    <td><?php echo $dong['matkhau'] ?></td>
    <td><?php echo $dong['dienthoai'] ?></td>
    <td><?php echo $dong['diachi'] ?></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
