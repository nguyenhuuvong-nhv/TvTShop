<?php
	if(!isset($login)){exit();}
?>
<?php 
	$sqlquery='update hoa_don set xu_ly="Hoàn thành" where ma_hoadon=?';
	$stmt = $db->prepare($sqlquery);
	$stmt->bindParam(1,$_GET['ma_hoadon'],PDO::PARAM_INT);
	if($stmt->execute()){
		echo "<script> alert('Đã hoàn thành hóa đơn'); location.href='?menu=quanli_hoa_don'; </script>";
	}else{
		echo "<script> alert('Hóa đơn chưa được xử lý'); location.href='?menu=quanli_hoa_don'; </script>";
	}
?>