<table class="table">
<thead>
	<tr>
		<td scope="col"><label>Mã hóa đơn</label></td>
		<td scope="col"><label>Ngày mua</label></td>
        <td scope="col"><label>Tình trạng</label></td>
        <td scope="col"><label>Chi tiết</label></td>
		<td scope="col"><label>Hủy đơn hàng</label></td>
    </tr>
</thead>
<tbody>
<?php 
	include('database/connect.php');
	$sqlquery="select * from hoa_don where id_kh =? order by ngay_mua desc";
	$stmt = $db->prepare($sqlquery);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->bindParam(1,$_SESSION['username']);
	$stmt->execute(); 
	$resultSet = $stmt->fetchAll();
	foreach ($resultSet as $row){ 
?>
	<tr>
		<td scope="row"><?php echo $row['ma_hoadon']; ?></td>
        <td><?php echo $row['ngay_mua']; ?></td>
        <td><?php echo $row['xu_ly']; ?></td>
        <td><a href="?menu=chi_tiet_dh&ma_hoadon=<?php echo $row['ma_hoadon']; ?>">Xem chi tiết</a></td>
        <td><?php
            if(strcmp($row['xu_ly'],"Chưa xử lý") == 0){ ?>
                <a  style="text-decoration: none; padding: 5px 15px; background-color: #1D388F; color: #fffafa;" onclick="return confirm('Bạn có mún hủy đơn hàng?');" href="?menu=huy_don_hang&ma_hoadon=<?php echo $row['ma_hoadon']; ?>">Hủy</a>
           <?php }
         ?></td>
	</tr>
    <?php } ?>
</tbody>
</table>