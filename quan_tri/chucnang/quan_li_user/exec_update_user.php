<?php
if (isset($_POST['submit'])) {
	$hoten = $_POST['hoten'];
	$gioitinh = $_POST['gioitinh'];
	$email = $_POST['email'];
	$sdt = $_POST['sdt'];
	$diachi = $_POST['diachi'];
        $trangthai= $_POST['stt'];
	$sqlquery = "update nguoidung set hoten=?,gioitinh=?,sdt=?,email=?,diachi= ?,trangthai=? where user= ?";
	$stmt = $db->prepare($sqlquery);
	$stmt->bindParam(1, $hoten);
	$stmt->bindParam(2, $gioitinh);
	$stmt->bindParam(3, $sdt);
	$stmt->bindParam(4, $email);
	$stmt->bindParam(5, $diachi);
        $stmt->bindParam(6, $trangthai);
	$stmt->bindParam(7, $_GET['id']);
	$exec = $stmt->execute();
	if ($exec) { 
		
                echo "<script> alert('Cập nhật thông tin thành công !'); location.href='javascript:history.back(-1);'; </script>";
    } else {
                echo "<script> alert('Cập nhật thông tin thất bại !'); location.href='javascript:history.back(-1);'; </script>";
	}
}
?>