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
            <th >Ảnh</th>
            <th>Loại SP</th>
            <th>NB</th>
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
            <td class="center"><a class='submit' href="?menu=chi_tiet_sp&masp=<?php echo($row['masp']); ?>">Chi Tiết</a></td>
            <td class="center"><a class='submit' href="?menu=cap_nhat_sp&masp=<?php echo($row['masp']); ?>">Cập Nhật</a></td>
            <td class="center"><a onclick="return confirm('Xóa danh mục này!');" class='submit' href="?menu=xoa_sp&masp=<?php echo($row['masp']); ?>">Xóa</a></td>
        </tr>
        <?php
        }
      
        ?>
    </tbody>
</table>