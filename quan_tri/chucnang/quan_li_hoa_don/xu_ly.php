<?php
	if(!isset($login)){exit();}
?>
<?php 
	$sqlquery='update hoa_don set xu_ly="Đã tiếp nhận" where ma_hoadon=?';
	$stmt = $db->prepare($sqlquery);
	$stmt->bindParam(1,$_GET['ma_hoadon'],PDO::PARAM_INT);
	if($stmt->execute()){
		echo "<script> alert('Đã tiếp nhận hóa đơn'); location.href='javascript:history.back(-1);'; </script>";
	}else{
		echo "<script> alert('Hóa đơn chưa được xử lý'); location.href='javascript:history.back(-1);'; </script>";
	}
?>