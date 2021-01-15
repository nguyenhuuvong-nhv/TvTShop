<?php
	include('database/connect.php');
	$sqlquery= "insert into binh_luan(masp,nickname,noi_dung) values(?,?,?)";
	$stmt = $db->prepare($sqlquery);
	$stmt->bindParam(1,$_GET['masp']);
	$stmt->bindParam(2,$_SESSION['username']);
	$stmt->bindParam(3,$_POST['noi_dung']);
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$stmt->execute();
	echo "<script> location.href='javascript: history.back(-1);'; </script>";
?>