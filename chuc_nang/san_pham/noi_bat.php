<div class="box-left box-menu">
    <h3 class="box-title"><i class="fa fa-warning"></i>  Sản phẩm nổi bật </h3>
    <ul>
        <?php
        $sqlquery = "select * from san_pham where noi_bat='có' limit 0,4";
        $stmt = $db->prepare($sqlquery);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $resultSet = $stmt->fetchAll();
        foreach ($resultSet as $row) {
            ?>

        <li class="clearfix">
            <a href="?menu=product_info&masp=<?php echo $row['masp']; ?>">
                <img src="images/<?php echo $row['img']; ?>" width="80" height="80">
                <div class="info pull-right">
                    <p class="name"> <?php echo $row['tensp']; ?></p >
                    <b class="price"><?php echo number_format($row['giasp'],0,",",".")."đ"; ?></b><br>
                    <span class="view"><i class="fa fa-eye"></i> 100000 : <i class="fa fa-heart-o"></i> 10</span>
                </div>
            </a>
        </li>
        
        
        <?php }?>

    </ul>
</div>