<?php
	if(!isset($login)){exit();}
?>
<?php 
	$sql= "delete from hoa_don where ma_hoadon=?";
	$stmt= $db->prepare($sql);
	$stmt->bindParam(1,$_GET['ma_hoadon'],PDO::PARAM_INT);
	if($stmt->execute()){
		echo "<script> alert('Xóa hóa đơn thành công'); location.href='?menu=hoa_don'; </script>";
	}else{
		echo "<script> alert('Xóa hóa đơn không thành công'); location.href='?menu=hoa_don'; </script>";
	}
?>