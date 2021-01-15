<?php
if (!isset($login)) {
    exit();
}
?>
<table  class="table">
    <thead>
        <tr>
            <th><label>Mã hóa đơn</label></th>
            <th><label>Tên khách hàng</label></th>
            <th><label>Ngày mua</label></th>
            <th><label>Tình trạng</label></th>
            <th><label></label></th>
            <th><label></label></th>
        </tr>
    </thead>    
    <?php
    $sqlquery = "select * from hoa_don order by ngay_mua desc";
    $stmt = $db->prepare($sqlquery);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $resultSet = $stmt->fetchAll();
    foreach ($resultSet as $row) {
        ?>
        <tr>
            <td ><?php echo $row['ma_hoadon']; ?></td>
            <td><p ><?php echo $row['ten_kh']; ?></p></td>
            <td><?php echo $row['ngay_mua']; ?></td>
            <td <?php if($row['xu_ly']=='Chưa xử lý'){echo 'style="color: red"';} 
                      if($row['xu_ly']=='Hoàn thành'){echo 'style="color: yellow"';}?>><?php echo $row['xu_ly']; ?></td>
            <td><a  class='submit' href="?menu=chi_tiet_hoa_don&ma_hoadon=<?php echo $row['ma_hoadon']; ?>">Chi tiết</a></td>
            <td><a  class='submit' onclick="return confirm('Bạn có mún xóa hóa đơn?');" href="?menu=xoa&ma_hoadon=<?php echo $row['ma_hoadon']; ?>">Xóa</a></td>
        </tr>
<?php } ?>
</table>