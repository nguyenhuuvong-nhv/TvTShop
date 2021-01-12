<?php
	if(!isset($login)){exit();}
?>
<?php
	include('../database/connect.php');
	$id= $_GET['id'];
	$sqlQuery="delete from navbar where id=?";
	$stmt = $db->prepare($sqlQuery);
	$stmt->bindParam(1,$id,PDO::PARAM_INT);
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	if($stmt->execute()){
		echo "<script> alert('Xóa menu thành công'); location.href='?menu=quanli_menu_ngang'; </script>";
	}
?>