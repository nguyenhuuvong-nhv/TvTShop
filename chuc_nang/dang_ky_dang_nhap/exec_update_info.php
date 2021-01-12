<?php
if (isset($_POST['submit'])) {
	include('database/connect.php');
	$hoten = $_POST['name'];
	$gioitinh = $_POST['gioitinh'];
	$email = $_POST['email'];
	$sdt = $_POST['sdt'];
	$diachi = $_POST['address'];
	$sqlquery = "update nguoidung set hoten=?,gioitinh=?,sdt=?,email=?,diachi= ? where user= ?";
	$stmt = $db->prepare($sqlquery);
	$stmt->bindParam(1, $hoten);
	$stmt->bindParam(2, $gioitinh);
	$stmt->bindParam(3, $sdt);
	$stmt->bindParam(4, $email);
	$stmt->bindParam(5, $diachi);
	$stmt->bindParam(6, $_SESSION['username']);
	$exec = $stmt->execute();
	if ($exec) { 
		$_SESSION['check1']="Cập nhật thông tin thành công !";
                echo "<script> location.href='?menu=my_user'; </script>";
    } else {
		$_SESSION['check1']="Cập nhật thông tin thất bại !";
		echo "<script> location.href='javascript: history.back(-1);'; </script>";
	}
}
?>
