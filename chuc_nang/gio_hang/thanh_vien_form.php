<?php 
	$sqlquery= "select * from nguoidung where user=?";
	$stmt = $db->prepare($sqlquery);
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$stmt->bindParam(1,$_SESSION['username']);
	$stmt->execute(); 
	$row = $stmt->fetch();
	$tenkh= $row['hoten'];
	$email= $row['email'];
	$sdt= $row['sdt'];
	$diachi= $row['diachi'];
	foreach($_SESSION['giohang'] as $masp=> $sp){
		$id_array[]= $masp;
	}
	$list_id= implode(',',$id_array);
	$sqlquery= 'select * from san_pham where masp in ('.$list_id.')';
	$stmt = $db->prepare($sqlquery);
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$stmt->execute(); 
	$resultSet = $stmt->fetchAll();
	$sp_mua="";
	$tg=0;
	$list_product="";
	echo "Xin chào ".$tenkh.", bạn đã mua các sản phẩm của chúng tôi là: <br>";
?>
<script type="text/javascript">

    $(document).ready(function() {
        document.title = 'Giỏ hàng';
    });

</script>
<table style="border-collapse: collapse; width: 600px;">
	<tr  height="40px" style="font-weight: bold; ">
		<td>Tên sản phẩm</td>
		<td>Đơn giá</td>
		<td>Số lượng</td>
		<td>Thành tiền</td>
	</tr>
<?php 
foreach ($resultSet as $row){
	$soluong= $_SESSION['giohang'][$row['masp']];
	$gia_sp=$row['giasp'];
	$masp= $row['masp'];
	$sp_mua= $sp_mua.$masp.",".$soluong.",".$gia_sp."|";
?>
	<tr>
		<td><?php echo $row['tensp']; ?></td>
		<td><?php echo number_format($gia_sp,0,",",".")."đ"; ?></td>
		<td><?php echo $soluong; ?></td>
		<td><?php echo number_format(($gia_sp*$soluong),0,",",".")."đ"; ?></td>
	</tr>
<?php
	$tg= $tg+ ($soluong*$gia_sp);
}
?>
	<tr height="40px" style="font-weight: bold;">
		<td colspan="3">Tổng giá trị đơn hàng:</td>
		<td><?php echo number_format($tg,0,",",".")."đ"; ?></td>
	</tr>
</table>
<p class="alert alert-success">Vui lòng bấm vào nút mua hàng bên dưới để xác nhận mua hàng.<br>Trân trọng cảm ơn bạn.</p>
<form method="post" action="?menu=hoa_don">
	<form id="form" action="?menu=hoa_don" method="post">
	<table style="width: 150px;">
		<tr>
			<td><input type="hidden" name="sp_mua" value="<?php echo $sp_mua; ?>">
			</td>
			<td><input type="hidden" name="tenkh" value="<?php echo $tenkh; ?>"></td>
			
			<td><input type="hidden" name="email" value="<?php echo $email; ?>">
			</td>
			<td><input type="hidden" name="sdt" value="<?php echo $sdt; ?>">
			</td>
			<td><input type="hidden" name="diachi" value="<?php echo $diachi; ?>">
			<input type="hidden" name="list_id" value="<?php echo $list_id; ?>">
                        <td><input type="hidden" name="tong_tien" value="<?php echo $tg; ?>">
			</td>
			</td>
		</tr>
		<tr >
			<td><input class="btn btn-primary" type="submit" name="submit" value="Mua hàng"></td>
			<td><input class="btn btn-primary" type="submit" name="cancel" value="Hủy"></td>
		</tr>
	</table>
</form>