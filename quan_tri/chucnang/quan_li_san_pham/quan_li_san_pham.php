<div class="formSearch">

    <form action="?menu=them_san_pham" method="POST">
        <input type="submit" value="Thêm mới " class="submit" name="submit">
    </form>

</div>
<table class="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên SP</th>
            <th>Giá</th>
            <th >Số Lượng</th>
            <th >Ảnh</th>
            <th>Loại SP</th>
            <th>Nổi Bật</th>
            <th>Đã Mua</th>
            
            <th></th>   
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sqlquery = "select * from san_pham";
        $stmt = $db->prepare($sqlquery);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $resultSet = $stmt->fetchAll();
        $i = 1;
        foreach ($resultSet as $row){
        
        ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row['tensp']; ?></td>
            <td><?php echo $row['giasp']; ?></td>
            <td><?php echo $row['soluong']; ?></td>
            <td> <img src="../images/<?php echo $row['img']; ?>" width="80px" height="80px" alt=""></td>
            
            <?php 
            $sqlquery1 = "select * from danhmucsp where id =".$row['loaisp'];
            $stmt1 = $db->prepare($sqlquery1);
            $stmt1->setFetchMode(PDO::FETCH_ASSOC);
            $stmt1->execute();
            $resultSet1 = $stmt1->fetchAll();
            foreach ($resultSet1 as $row1){ ?>
                <td><?php echo $row1['tendanhmuc']; ?></td>
                
              <?php  
            }
            ?>
            
            
            
            <td><?php echo $row['noi_bat']; ?></td>
            <td><?php echo $row['mua_nhieu']; ?></td>
            <td class="center"><a class='submit' href="?menu=cap_nhat_danh_muc&id=<?php echo($row['id']); ?>">Chi Tiết</a></td>
            <td class="center"><a class='submit' href="?menu=cap_nhat_danh_muc&id=<?php echo($row['id']); ?>">Cập Nhật</a></td>
            <td class="center"><a onclick="return confirm('Xóa danh mục này!');" class='submit' href="?menu=xoa_danh_muc&id=<?php echo($row['id']); ?>">Xóa</a></td>
        </tr>
        <?php
        }
      
        ?>
    </tbody>
</table>