<?php
if (isset($_POST['submit'])) {
        $tk = $_POST['username'];
        $mk = md5(md5($_POST['pass']));
	$hoten = $_POST['hoten'];
	$gioitinh = $_POST['gioitinh'];
	$email = $_POST['email'];
	$sdt = $_POST['sdt'];
	$diachi = $_POST['diachi'];
        
	$sqlquery = "insert into nguoidung(hoten,user,pass,gioitinh,sdt,email,diachi,ma_quyen)"
                . "values (?,?,?,?,?,?,?,2)";
	$stmt = $db->prepare($sqlquery);
	$stmt->bindParam(1, $hoten);
	$stmt->bindParam(2, $tk);
	$stmt->bindParam(3, $mk);
	$stmt->bindParam(4, $gioitinh);
	$stmt->bindParam(5, $sdt);
        $stmt->bindParam(6, $email);
	$stmt->bindParam(7, $diachi);
	$exec = $stmt->execute();
	if ($exec) { 
		
                echo "<script> alert('Thêm nhân viên thành công !'); location.href='?menu=quanli_user'; </script>";
    } else {
                echo "<script> alert('Thêm nhân viên thất bại !'); location.href='?menu=quanli_user'; </script>";
	}
}
?>