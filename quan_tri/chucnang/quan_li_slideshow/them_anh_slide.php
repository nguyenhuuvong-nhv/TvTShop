<?php
	if(!isset($login)){header('location: ../quan_tri/login.php');}
?>
<form action="?menu=exec_them_anh_slide" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td><label for="image">Hình ảnh: </label></td>
			<td><input type="file" name="image" id="image"></td>
		</tr>
		<tr>
			<td><label for="note">Ghi chú</label></td>
			<td>
				<select name="note" id="note">
					<option value="">None</option>
					<option value="active">Active</option>	
				</select>
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Thêm"></td>
			<td><input type="submit" name="cancel" value="Hủy"></td>
		</tr>
	</table>
</form>