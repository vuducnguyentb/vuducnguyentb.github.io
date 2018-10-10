<?php
require('../config.php');
$conn= connectTodb();
//run sql
$sql="select * from users";
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
	<h1>Trang quan trị user.</h1>
	<p><a href="user_them.php">Thêm mới<i class="fas fa-plus"></i></a></p>
	<table>
		<thead>
			<tr>
				<th>Username</th>
				<th>Password</th>
				<th>Email</th>
				<th>Tên</th>
				<th>Địa chỉ</th>
				<th>Sửa</th>
				<th>Xóa</th>
			</tr>
		</thead>
		<tbody>
			<?php while($row = mysqli_fetch_array($result)) {  
				$username= $row['username'];
				$password=$row['password'];
				$email=$row['email'];
				$name=$row['name'];
				$address=$row['address'];
				?>                    
				<tr>
					<td><?php echo $username ?></td>
					<td><?php echo $password ?></td>
					<td><?php echo $email ?></td>
					<td><?php echo $name ?></td>
					<td><?php echo $address ?></td>
					<td><a href="user_sua.php?username=<?php echo $row['username']?>" title=""><i class="fas fa-pen"></i></a></td>
					<td><a href="user_xoa.php?username=<?php echo $row['username']?>" title=""><i class="fas fa-trash-alt"></i></a></td>
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