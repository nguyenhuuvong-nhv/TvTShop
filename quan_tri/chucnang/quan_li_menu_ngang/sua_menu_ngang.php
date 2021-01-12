<?php 
	include('../database/connect.php');
	$id= $_GET['id'];
	$sqlQuery="select * from navbar where id=?";
	$stmt = $db->prepare($sqlQuery);
	$stmt->bindParam(1,$id,PDO::PARAM_INT);
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$stmt->execute();
	$row = $stmt->fetch();


?>
<a href="quan_li_menu_ngang.php"> Về Quản Lí Menu</a>
<form action="?menu=exec_sua_menu_ngang" method="POST">
        <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>">
        
        <input class="txttext" type="text" placeholder="Nhập Tên Menu..." name="title" value="<?php echo $row['navitemname'] ?>"	> <br>
	<input class="txttext" type="text" placeholder="Nhập Content..." name="content" value="<?php echo $row['content'] ?>"	> <br>
	<input type="submit" value="Cập Nhật" class="submit" name="submit">
        <input type="submit" value="Hủy" class="submit" name="cancel">
</form>