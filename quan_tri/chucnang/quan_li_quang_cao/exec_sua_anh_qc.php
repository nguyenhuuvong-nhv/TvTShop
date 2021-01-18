<?php
	if(!isset($login)){header('location: ../quan_tri/login.php');}
?>
<?php
	if(isset($_POST['submit'])){
	include('../database/connect.php');
	$id=$_POST['id'];
	$img_location ='../images/slideshow/';
	$image_upload = $_FILES['image']['name'];
	$error= $_FILES['image']['error'];
	$tmp_name= $_FILES['image']['tmp_name'];
		if($image_upload==""){
			$image= $_POST['imagename'];
		}
		if($image_upload!=""){
			$image= $image_upload;
			$new_img_location= $img_location.basename($image);
			move_uploaded_file($tmp_name,$new_img_location);
			$old_image_location= $img_location.basename($_POST['imagename']);
			unlink($old_image_location);
		}
	$note= $_POST['note'];
	$sql= "update slideshow set name=?, note=? where id=?";
	$stmt= $db->prepare($sql);
	$stmt->bindParam(1,$image);
	$stmt->bindParam(2,$note);
	$stmt->bindParam(3,$id,PDO::PARAM_INT);
	if($stmt->execute()){
		echo "<script> alert('Sửa sản phẩm thành công');
		location.href='?menu=quanli_quang_cao'; </script>";
}
	else{
		echo "<script> alert('Sửa sản phẩm không thành công'); location.href='?menu=quanli_quang_cao'; </script>";
	}
}
	if(isset($_POST['cancel'])){
		header('location:index.php?menu=quanli_quang_cao');
	}
?>