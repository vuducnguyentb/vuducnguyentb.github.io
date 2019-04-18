<?php
	 	$sql="select * from tintuc order by idtintuc desc";
		$run=mysqli_query($conn,$sql);
 ?>
 <p style="text-align:center;color:white;background:#828282;padding:10px;"><b>Các Sự Kiện Mới</b></p><br />

<table width="100%" border="0">
 <?php
					while($dong=mysqli_fetch_array($run)){
				?>
  <tr>
    <td><a href="index.php?xem=chitietsanpham&idtintuc=<?php echo $dong_hot['idtintuc']?>&id=<?php echo $dong['idtintuc'] ?>">
    <div align="center">
        <img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong['hinhanh'] ?> "  width="900" height="150" />
       </div></a>
       </td>
  </tr>
  <tr>
    <td><br /><?php echo $dong['noidung'] ?></td>

  </tr>
  <?php
					}
  ?>
</table>
