
<div class="formSearch">

    <form action="?menu=them_menu_ngang" method="POST">
        <input class="txttext" type="text" placeholder="Nhập Tên Menu..." name="new-mn" required="">
        <input class="txttext" type="text" placeholder="Nhập Content..." name="new-content" required=""><br>
        <input type="submit" value="Thêm mới " class="submit" name="submit">
    </form>

</div>

<table class="table">
    <thead>
        <tr>
            <th class="cart_product">STT</th>
            <th>Tên</th>
            <th>Content</th>
            <th style="text-align: center;"></th>
            <th style="text-align: center;"></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sqlquery = "select * from navbar";
        $stmt = $db->prepare($sqlquery);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $resultSet = $stmt->fetchAll();
        $i = 1;
        foreach ($resultSet as $row){
        ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row['navitemname']; ?></td>
            <td><?php echo $row['content']; ?></td>
            <td class="center"><a class='submit' href="?menu=sua_menu_ngang&id=<?php echo($row['id']); ?>">Cập nhật</a></td>
            <td class="center"><a class='submit' href="?menu=xoa_menu_ngang&id=<?php echo($row['id']); ?>">Xóa</a></td>


        </tr>
        <?php
        }
       
        ?>
    </tbody>
</table>

