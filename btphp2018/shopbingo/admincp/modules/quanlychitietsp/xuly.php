<?php
	include('../config.php');
	$id=$_GET['id'];
	$tensp=$_POST['tensp'];
	$masp=$_POST['masp'];
	$hinhanh=$_FILES['hinhanh']['name'];
	$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	$soluong=$_POST['soluong'];
	$mota=$_POST['mota'];
	$gia=$_POST['gia'];
	$loaisp=$_POST['loaisp'];
	$tinhtrang=$_POST['tinhtrang'];
	$trang=$_GET['trang'];
	
	if(isset($_POST['them'])){
		//them
		 $sql_them=("insert into chitietsp (tensp,masp,hinhanh,soluong,mota, id_loaisp,tinhtrang,gia) value('$tensp','$masp','$hinhanh','$soluong','$mota','$loaisp','$tinhtrang','$gia')");
		mysqli_query($conn,$sql_them);
		header('location:../../index.php?quanly=sanpham&ac=lietke');
	}elseif(isset($_POST['sua'])){
		//sua
		if($hinhanh!=''){
	  $sql_sua = "update chitietsp set tensp='$tensp',masp='$masp',hinhanh='$hinhanh',soluong='$soluong',mota='$mota',id_loaisp='$loaisp',tinhtrang='$tinhtrang', gia='$gia' where id_sp=$id";
		}else{
			$sql_sua = "update chitietsp set tensp='$tensp',masp='$masp',soluong='$soluong',mota='$mota',id_loaisp='$loaisp',tinhtrang='$tinhtrang',gia='$gia' where id_sp=$id";
		}
		mysqli_query($conn,$sql_sua);
		header('location:../../index.php?quanly=sanpham&ac=lietke');
		//xoa
	}else{
		$sql_xoa = "delete from chitietsp where id_sp = $id";
		mysqli_query($conn,$sql_xoa);
		header('location:../../index.php?quanly=sanpham&ac=lietke');
	}
?>
