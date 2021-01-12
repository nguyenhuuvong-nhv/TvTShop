<?php
	$masp= $_GET['masp'];
	if($masp==0){
		unset($_SESSION['giohang']);
	}
	else{
		unset($_SESSION['giohang'][$masp]);
	}
	include('gio_hang.php');
?>