<?php 
if(isset($_POST['submit'])){
	$title = $_POST['new-mn'];
        $content = $_POST['new-content'];
	$sql= "insert into navbar(navitemname,content) values(?,?)";
	$stmt= $db->prepare($sql);
	$stmt->bindParam(1,$title);
	$stmt->bindParam(2,$content);
	if($stmt->execute()){
		echo "<script> alert('Thêm menu thành công'); location.href='?menu=quanli_menu_ngang'; </script>";
	}
	else{
		echo "<script> alert('Thêm menu không thành công'); location.href='?menu=quanli_menu_ngang'; </script>";
	}
}
?>
