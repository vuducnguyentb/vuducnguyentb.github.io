
 <p style="text-align:center;color:white;background:#828282;padding:10px;"><b>Giỏ Hàng</b></p>

<?php
	
	//tru sp
	if(isset($_GET['tru'])){
		$id=$_GET['tru'];
		foreach($_SESSION['sp'] as $cart_item){
			if($id!=$cart_item['id']){
				
				$product[]=array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia']);
				$_SESSION['sp']=$product;
			}else{
				$giam=$cart_item['soluong']-1;
				if($cart_item['soluong']>1){
				$product[]=array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$giam,'gia'=>$cart_item['gia']);
				
				}else{
					$giam=1;
					$product[]=array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$giam,'gia'=>$cart_item['gia']);
				}
				$_SESSION['sp']=$product;
			}

			header('location:index.php?quanly=dathang');
		}
		
	}
	//cong them sp
	if(isset($_GET['cong'])){
		$id=$_GET['cong'];
		foreach($_SESSION['sp'] as $cart_item){
			if($id!=$cart_item['id']){
				
				$product[]=array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia']);
				$_SESSION['sp']=$product;
			}else{
				$tang=$cart_item['soluong']+1;
				if($cart_item['soluong']<9){
				
				$product[]=array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$tang,'gia'=>$cart_item['gia']);
				
			}else{
				
				$product[]=array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia']);
			}
			$_SESSION['sp']=$product;
			}
			
			header('location:index.php?quanly=dathang');
		}
		
	}
	//xoa san pham
	if(isset($_SESSION['sp'])&&isset($_GET['xoa'])){
		$id=$_GET['xoa'];
		foreach($_SESSION['sp'] as $cart_item){
			if($cart_item['id']!= $id){
				$product[]=array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia']);
			}
		$_SESSION['sp']=$product;
		header('location:index.php?quanly=dathang');
		}
	}
	//xoa toan bo giohang
	if(isset($_GET['xoatoanbo'])&&$_GET['xoatoanbo']==1){
		session_destroy();
		header('location:index.php?quanly=dathang');
	}
	//them giohang
	if(isset($_POST['cart'])){
		$id=$_GET['id'];
		$soluong=$_POST['soluong'];
		$sql="select * from chitietsp where id_sp='$id' limit 1";
		$row=mysqli_query($conn,$sql);
		$dong=mysqli_fetch_array($row);
		if($dong){
			$new_product=array(array('tensp'=>$dong['tensp'],'id'=>$id,'soluong'=>$soluong,'gia'=>$dong['gia']));
			if(isset($_SESSION['sp'])){
				$found=false;
				foreach($_SESSION['sp'] as $cart_item){
					if($cart_item['id'] == $id){
						$product[]=array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$soluong,'gia'=>$cart_item['gia']);
						$found=true;
					}else{
						$product[]=array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia']);
					}
					
				}if($found==false){
					$_SESSION['sp']=array_merge($product,$new_product);
				}else{
					$_SESSION['sp']=$product;
				}
			}else{
				$_SESSION['sp']=$new_product;
				
			}
		}
		header('location:index.php?quanly=dathang');
	}
?>

          </div>
              <p style="float:right; background:#FF0;text-decoration:none;"><a href="index.php?xem=tratien" style="color:#000;margin:5px;">Thanh toán</a></p>
			
        	</ul>
    
        </div>
