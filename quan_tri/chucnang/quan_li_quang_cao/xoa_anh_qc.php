<?php
	if(!isset($login)){header('location: ../quan_tri/login.php');}
?>
<?php
	include('../database/connect.php');
	$id=$_GET['id'];
	$sql= "select * from slideshow where id=?";
	$stmt= $db->prepare($sql);
	$stmt->bindParam(1,$id,PDO::PARAM_INT);
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$stmt->execute(); 
	$row = $stmt->fetch();
	$img_link= '../images/slideshow/'.$row['name'];
	if(is_file($img_link)){
		unlink($img_link);
	}
	$sql= "delete from slideshow where id=?";
	$stmt= $db->prepare($sql);
	$stmt->bindParam(1,$id,PDO::PARAM_INT);
	if($stmt->execute()){
		echo "<script> alert('Xóa ảnh thành công'); location.href='?menu=quanli_quang_cao'; </script>";
	}
	else{
		echo "<script> alert('Xóa ảnh không thành công'); location.href='?menu=quanli_quang_cao'; </script>";
	}	
?>