<?php
	if(!isset($login)){header('location: ../quan_tri/login.php');}
?>
<table class="table">
    <thead>
        <tr>
            <th> Tên file</th>
            <th> Hình ảnh</th>
            <th> Ghi chú</th>
            <th> <a href="?menu=them_anh_qc">Thêm</a></th>
            <th></th>
	</tr>
    </thead>
	
<?php
	include('../database/connect.php');
	$sql= "select * from slideshow where loai='qc'";
	$stmt= $db->prepare($sql);
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$stmt->execute(); 
	$resultSet = $stmt->fetchAll();
	foreach ($resultSet as $row){
?>
	<tr>
		<td><?php echo $row['name']; ?></td>
		<td><img src="../images/slideshow/<?php echo $row['name']; ?>" width="360px" height="150px" alt=""></td>
		<td><?php echo $row['note']; ?></td>
		<td><a class="submit" href="?menu=sua_anh_qc&id=<?php echo $row['id']; ?>">Sửa</a></td>
                <td><a class="submit" onclick="return confirm('Bạn có mún xóa ảnh này?');" href="?menu=xoa_anh_qc&id=<?php echo $row['id']; ?>">Xóa</a></td>
	</tr>
<?php } ?>
</table