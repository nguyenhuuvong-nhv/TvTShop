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
?>
<form action="?menu=exec_sua_anh_qc" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td><label for="image">Hình ảnh: </label></td>
			<td><img src="../images/slideshow/<?php echo $row['name']; ?>" width="200px" height="150px" alt=""><br><input type="file" name="image" id="image">
		</tr>
		<tr>
			<td><label for="note">Ghi chú</label></td>
			<td>
                            <input type="text" name="note" value="<?php echo $row['note']; ?>">
			        <input type="hidden" name="imagename" value="<?php echo $row['name']; ?>">
				<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
			</td>
		</tr>
		<tr>
			<td><input class="submit" type="submit" name="submit" value="Sửa"></td>
			<td><input class="submit"type="submit" name="cancel" value="Hủy"></td>
		</tr>
	</table>
</form>