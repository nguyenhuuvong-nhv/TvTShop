<?php
if (isset($_SESSION['username'])) {
	include('database/connect.php'); 
	$sqlquery="select * from nguoidung where user=?";
	$stmt = $db->prepare($sqlquery);
	$stmt->bindParam(1,$_SESSION['username'],PDO::PARAM_STR);
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$stmt->execute();
	$row = $stmt->fetch();
	 ?>
	<form action="?menu=binh_luan&masp=<?= $_GET['masp'] ?>" method="post">
		<table class="table">
			<input type="hidden" name="masp" value="<?php echo $row['masp']; ?>">
			<tr>
				<td colspan="2"><label>Bình luận</label></td>
			</tr>
			<tr>
				<td>Nick name: </td>
				<td><input type="text" class="form-control" name="nickname" disabled value="<?php echo $row['hoten'] ?>"></td>
			</tr>
			<tr>
				<td>Nội dung: </td>
				<td><textarea name="noi_dung" style="resize: none;" id="noi_dung" cols="40" rows="5" class="form-control" placeholder="Nhập nội dung bình luận.."></textarea></td>
			</tr>
			<tr class="text-center">
				<td colspan="2"><input class="btn btn-primary" type="submit" name="submit" value="Bình luận"></td>
			</tr>
		</table>
	</form>
<?php } else { ?>
	<p class="alert alert-warning">Bạn chưa đăng nhập.. Vui lòng <a href="?menu=dang_nhap">đăng nhập</a> để nhận xét.<br></p>
	<?php include('chuc_nang/dang_ky_dang_nhap/dang_nhap.php'); ?>
	<p class="alert alert-warning">
		Nếu bạn chưa có tài khoản thì có thể bấm <a href="?menu=dang_ky">vào đây</a> để tạo tài khoản mới</p>
<?php
}
?>