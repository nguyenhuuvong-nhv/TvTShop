<table class="table">
    <thead>
        <tr>
            <th class="cart_product">STT</th>
            <th>Họ Và Tên</th>
            <th>Tên Đăng Nhập</th>

            <th>Mật Khẩu</th>
            <th>Địa Chỉ</th>
            <th>Số Điện Thoại</th>
            <th>Trạng Thái</th>
            <th></th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sqlquery = "select * from nguoidung";
        $stmt = $db->prepare($sqlquery);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $resultSet = $stmt->fetchAll();
        $i = 1;
        foreach ($resultSet as $row){
        ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row['hoten']; ?></td>
            <td><?php echo $row['user']; ?></td>
            
            <td><?php echo $row['pass']; ?></td>
            <td><?php echo $row['diachi']; ?></td>
            <td><?php echo $row['sdt']; ?></td>
            <td><?php echo $row['trangthai']; ?></td>
            <td class="center"><a class='submit' href="cap-nhat-thong-tin-user.php?id=<?php echo($row[0]); ?>">Cập nhật</a></td>

            <?php
            if($row['trangthai'] == '0'){
            ?>
            <td class="center"><a onclick="return confirm('Vô Hiệu Hóa User này!');" class='submit' href="disable-user.php?id=<?php echo($row['IdND']); ?>">Vô Hiệu Hóa</a></td>
            <?php
            }else{
            ?>
            <td class="center"><a onclick="return confirm('Hủy Bỏ Vô Hiệu Hóa User này!');" class='submit' href="enable-user.php?id=<?php echo($row['IdND']); ?>">Hủy</a></td>
            <?php
            }
            ?>

        </tr>
        <?php
        }
       
        ?>
    </tbody>
</table>