<table class="table">
    <thead>
        <tr>
            <th class="cart_product">STT</th>
            <th>Họ Và Tên</th>
            <th>Tên Đăng Nhập</th>
            <th>Địa Chỉ</th>
            <th>Số Điện Thoại</th>
            <th>Trạng Thái</th>
            <th></th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sqlquery = "select * from nguoidung where ma_quyen !=1";
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
            <td><?php echo $row['diachi']; ?></td>
            <td><?php echo $row['sdt']; ?></td>
            <td><?php echo $row['trangthai']; ?></td>
            <td class="center"><a class='submit' href="?menu=update_user&id=<?php echo($row['user']); ?>">Cập nhật</a></td>

            <?php
            if($row['trangthai'] == '1'){
            ?>
            <td class="center"><a onclick="return confirm('Vô Hiệu Hóa User này!');" class='submit' href="?menu=disable_user&id=<?php echo($row['user']); ?>">Khóa</a></td>
            <?php
            }else{
            ?>
            <td class="center"><a onclick="return confirm('Hủy Bỏ Vô Hiệu Hóa User này!');" class='submit' href="?menu=enable_user&id=<?php echo($row['user']); ?>">Mở</a></td>
            <?php
            }
            ?>

        </tr>
        <?php
        }
       
        ?>
    </tbody>
</table>