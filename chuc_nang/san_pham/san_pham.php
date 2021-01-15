<section class="box-main1">
    <?php
    include('database/connect.php');
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $start = 1;
    $page = $page - 1;
    $limit = 16;
    $sqlquery = "select * from san_pham";
    $stmt = $db->prepare($sqlquery);
    $stmt->bindParam(1, $iddm, PDO::PARAM_INT);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $total = 0;
    $resultSet = $stmt->fetchAll();
    foreach ($resultSet as $row) {
        $total = $total + 1;
    }
    $total = $total / $limit;
    $total = ceil($total);
    $start = $limit * $page;

    $sqlQuery = "select * from san_pham LIMIT " . $start . ", " . $limit;
    $stmt = $db->prepare($sqlQuery);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $resultSet = $stmt->fetchAll();
    foreach ($resultSet as $row) {
        ?>
        <div class="showitem" >

            <div class="col-md-3 item-product bor">
                <a href="?menu=product_info&masp=<?php echo $row['masp']; ?>"><img src="images/<?php echo $row['img']; ?>" alt="" width="100%" height="180px" ></a>
                <div class="info-item" style="height: 70px">
                    <a href="?menu=product_info&masp=<?php echo $row['masp']; ?>"><?php echo $row['tensp']; ?></a>
                    <p style="color: red"><?php echo number_format($row['giasp'], 0, ",", ".") . "đ"; ?></p>
                </div>
                <div class="hidenitem">
                    <p><a href="?menu=yeu_thich&masp=<?php echo $row['masp']; ?>"><i class="fa fa-heart"></i></a></p>
                    <p><a href="?menu=add_cart&masp=<?php echo $row['masp']; ?>&soluong=1""><i class="fa fa-shopping-basket"></i></a></p>
                </div>
            </div>
        </div>
    <?php } ?> 
</section>
<div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <td align="center">
    <nav>
        <ul class="pagination">
            <?php
            for ($i = 1; $i <= $total; $i++) {
                ?>
                <li><a href="?menu=san_pham&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
<?php } ?>
        </ul>
    </nav>
</td>
</div>
