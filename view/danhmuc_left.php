<div class="box-left box-menu" >
    <h3 class="box-title"><i class="fa fa-list"></i>  Danh mục</h3>
    <ul>
        <?php
        $sqlquery = "select * from danhmucsp";
        $stmt = $db->prepare($sqlquery);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $resultSet = $stmt->fetchAll();
        foreach ($resultSet as $row) {
            ?>  
            <li>
                <a href="?menu=danhmuc&id=<?php echo $row['id']; ?>"><?php echo $row['tendanhmuc']; ?></a>
            </li>
        <?php } ?>
      
    </ul>
</div>