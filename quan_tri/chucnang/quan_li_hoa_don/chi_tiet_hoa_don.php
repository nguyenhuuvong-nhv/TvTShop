<?php
	if(!isset($login)){exit();}
?>
<?php
	$sql="select * from hoa_don where ma_hoadon=?";
	$stmt= $db->prepare($sql);
	$stmt->bindParam(1,$_GET['ma_hoadon'],PDO::PARAM_INT);
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$stmt->execute(); 
	$row = $stmt->fetch();
?>
<table>
	<tr>
		<td colspan="2" class="title" style="color: #187a24">THÔNG TIN KHÁCH HÀNG</td>
	</tr>
	<tr>
		<td>Họ tên khách hàng: </td>
		<td><?php echo $row['ten_kh']; ?></td>
	</tr>
	<tr>
		<td>Địa chỉ: </td>
		<td><?php echo $row['dia_chi']; ?></td>
	</tr>
	<tr>
		<td>Số điện thoại: </td>
		<td><?php echo $row['sdt']; ?></td>
	</tr>
	<tr>
		<td>Email: </td>
		<td><?php echo $row['email']; ?></td>
	</tr>
</table>
<table class="table">
    <thead>
        <tr>
            <td></td>
            <td colspan="4" class="title" style="color: #187a24">THÔNG TIN SẢN PHẨM ĐÃ MUA</td>
	</tr></thead>
        <thead>
	<tr>
		<th>Tên sản phẩm</th>
		<th>Đơn giá</th>
		<th>Số lượng</th>
		<th>Thành tiền</th>
	</tr>
        </thead>
	<?php 
		$sp_mua= $row['sp_mua'];
		$thanh_tien1=0;
		$sp= explode("|", $sp_mua);
		for($i=0; $i<count($sp); $i++){
			if($sp[$i]!=""){
				$sp_mua= explode(",",$sp[$i]);
				$masp= $sp_mua[0];
				$soluong= $sp_mua[1];
				$gia_sp= $sp_mua[2];
				$thanh_tien= $soluong*$gia_sp;
				$sqlquery= "select * from san_pham where masp=".$masp;
				$stmt = $db->prepare($sqlquery);
				$stmt->setFetchMode(PDO::FETCH_ASSOC);
				$stmt->execute(); 
				$row2= $stmt->fetch();
			?>
		<tr>
			<td><?php echo $row2['tensp']; ?></td>
			<td><?php echo number_format($gia_sp,0,",",".")."đ"; ?></td>
			<td><?php echo $soluong; ?></td>
			<td><?php echo number_format($thanh_tien,0,",",".")."đ"; ?></td>
		</tr>
			<?php
			$thanh_tien1=$thanh_tien1+$thanh_tien;
			}
		}
	?>
	
	<tr>
		<td class="title" colspan="3">Tổng tiền đơn hàng: </td>
                <td style="color: red;"><?php echo number_format($thanh_tien1,0,",",".")."đ"; ?></td>
	</tr>
	<tr>
		<td >Tình trạng đơn hàng:</td>
		<td><?php echo '<span style="color: blue;" >'.$row['xu_ly'].'</span>'; ?></td>
		<td>
			<?php
				if(strcmp($row['xu_ly'],"Chưa xử lý") == 0){ ?>
				<a class='submit' href="?menu=xu_ly&ma_hoadon=<?php echo $row['ma_hoadon']; ?>">Tiếp nhận</a>
			<?php }
				if(strcmp($row['xu_ly'],"Đã tiếp nhận") == 0) { ?>
				<a class='submit' href="?menu=hoanthanh&ma_hoadon=<?php echo $row['ma_hoadon']; ?>">Hoàn thành</a>
			<?php } ?>
		</td>
		<td><a class='submit'  onclick="return confirm('Bạn có mún xóa hóa đơn?');"  href="?menu=xoa&ma_hoadon=<?php echo $row['ma_hoadon']; ?>">Xóa hóa đơn</a></td>
	</tr>
</table>