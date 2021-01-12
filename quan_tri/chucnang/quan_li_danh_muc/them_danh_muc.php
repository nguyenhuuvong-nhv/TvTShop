<?php
	if(!isset($login)){exit();}
?>
<?php
    if(isset($_POST['submit'])){
        $dm= $_POST['new-dm'];
        $sql= "insert into danhmucsp(tendanhmuc) values('$dm')";
	$stmt= $db->prepare($sql);
        if($stmt->execute()){
		echo "<script> alert('Thêm danh mục  thành công'); location.href='?menu=quanli_danh_muc'; </script>";
	}
	else{
		echo "<script> alert('Thêm danh mục không thành công'); location.href='?menu=quanli_danh_muc'; </script>";
	}
        
    }



?>

