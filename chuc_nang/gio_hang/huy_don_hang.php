<?php 
	include('database/connect.php');
	$sql= "delete from hoa_don where ma_hoadon=?";
	$stmt= $db->prepare($sql);
	$stmt->bindParam(1,$_GET['ma_hoadon'],PDO::PARAM_INT);
	if($stmt->execute()){
		echo "<script> alert('Hủy hóa đơn thành công'); location.href='?menu=theo_doi_dh'; </script>";
	}else{
		echo "<script> alert('Hủy hóa đơn không thành công'); location.href='?menu=hoa_don'; </script>";
	}
?>