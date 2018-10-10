<?php
require('../config.php');
$conn= connectTodb();
//run sql
$sql="select * from dt";
$result=mysqli_query($conn,$sql);
?>
<?php 
include('./modules/header.php');
?>
<style type="text/css" media="screen">
#container .right-container p{
	text-align: right;
	margin-bottom: 4px;
}
#container .right-container a{
	text-decoration: none;
	margin-right: 20px;
	font-weight: 600;
}
#container .right-container a:hover{
	color: red;
}
#container .right-container table{
	width: 100%;
	height: auto;
	text-align: left;
	margin-left:0;
}
#container .right-container table th,#container .right-container table td{
	border-bottom: 1px solid #ccc;
}
#container .right-container table td{
	width: auto;
}
</style>
<?php
include ('./modules/left.php');
?>
<div class="right-container">
	<h1>Trang quan trị điện thoại.</h1>
	<p><a href="">Thêm mới<i class="fas fa-plus"></i></a></p>
	<table>
		<thead>
			<tr>
				<th>Id</th>
				<th>Tên điện thoại</th>
				<th>Sửa</th>
				<th>Xóa</th>
			</tr>
		</thead>
		<tbody>
			<?php while($row = mysqli_fetch_array($result)) {  ?>                    
				<tr>
					<td><?php echo $row['id_dt'] ?></td>
					<td><?php echo $row['ten_dt'] ?></td>
					<td><a href="" title=""><i class="fas fa-pen"></i></a></td>
					<td><a href="" title=""><i class="fas fa-trash-alt"></i></a></td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
</div>
</div>
<?php
include ('./modules/footer.php');
?>