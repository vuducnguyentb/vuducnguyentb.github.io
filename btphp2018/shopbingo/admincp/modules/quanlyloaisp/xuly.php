<?php
	include('../config.php');
	$tenloaisp=$_POST['loaisp'];
	$tinhtrang=$_POST['tinhtrang'];
	
	if(isset($_POST['them'])){
		//them
		$sql_them=("insert into loaisp (tenloaisp,tinhtrang) value('$tenloaisp','$tinhtrang')");
		mysqli_query($conn,$sql_them);
		header('location:../../index.php?quanly=loaisp&ac=lietke');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql_sua = "update loaisp set tenloaisp='$tenloaisp',tinhtrang='$tinhtrang' where id_loaisp='$_GET[id]'";
		mysqli_query($conn,$sql_sua);
		header('location:../../index.php?quanly=loaisp&ac=lietke');
	}else{
		$sql_xoa = "delete from loaisp where id_loaisp = $_GET[id]";
		mysqli_query($conn,$sql_xoa);
		header('location:../../index.php?quanly=loaisp&ac=lietke');
	}
?>
