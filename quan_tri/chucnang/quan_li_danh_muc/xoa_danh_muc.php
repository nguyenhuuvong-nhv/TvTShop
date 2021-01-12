<?php
	if(!isset($login)){exit();}
?>

<?php
   	$id= $_GET['id'];
	$sqlQuery="delete from danhmucsp where id=$id";
	$stmt = $db->prepare($sqlQuery);
	if($stmt->execute()){
		echo "<script> alert('Xóa danh mục thành công'); location.href='?menu=quanli_danh_muc'; </script>";
	}


?>