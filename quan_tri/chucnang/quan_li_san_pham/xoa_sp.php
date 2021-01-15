<?php
	if(!isset($login)){exit();}
?>
<?php
	$masp= $_GET['masp'];
	$sql= "select * from san_pham where masp=?";
	$stmt= $db->prepare($sql);
	$stmt->bindParam(1,$masp,PDO::PARAM_INT);
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$stmt->execute(); 
	$row = $stmt->fetch();
	$img_link= '../images/'.$row['img'];
	if(is_file($img_link)){
		unlink($img_link);
	}
        $sql="delete from cau_hinh where masp=?";
	$stmt= $db->prepare($sql);
	$stmt->bindParam(1,$masp,PDO::PARAM_INT);
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
	$sql="delete from san_pham where masp=?";
	$stmt= $db->prepare($sql);
	$stmt->bindParam(1,$masp,PDO::PARAM_INT);
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	if($stmt->execute()){
		header('location:?menu=quanli_san_pham');
		echo "<script> alert('Xóa sản phẩm thành công'); location.href='?menu=quanli_san_pham'; </script>";
	}
	else{
		echo "<script> alert('Xóa sản phẩm không thành công'); location.href='?menu=quanli_san_pham'; </script>";
	}
?>