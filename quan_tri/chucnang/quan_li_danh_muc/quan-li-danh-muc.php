<div class="formSearch">

    <form action="?menu=them_danh_muc" method="POST">
        <input class="txttext" type="text" placeholder="Nhập Tên Danh mục..." name="new-dm" required=""><br>
        <input type="submit" value="Thêm mới " class="submit" name="submit">
    </form>

</div>
<table class="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>Mã danh mục</th>
            <th>Tên Danh mục</th>
            <th ></th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sqlquery = "select * from danhmucsp";
        $stmt = $db->prepare($sqlquery);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $resultSet = $stmt->fetchAll();
        $i = 1;
        foreach ($resultSet as $row){
        
        ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['tendanhmuc']; ?></td>
            <td class="center"><a class='submit' href="?menu=cap_nhat_danh_muc&id=<?php echo($row['id']); ?>">Cập Nhật</a></td>
            <td class="center"><a onclick="return confirm('Xóa danh mục này!');" class='submit' href="?menu=xoa_danh_muc&id=<?php echo($row['id']); ?>">Xóa</a></td>
        </tr>
        <?php
        }
      
        ?>
    </tbody>
</table>