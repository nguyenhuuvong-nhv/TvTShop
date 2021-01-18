<?php
$iddm = $_GET['id'];
$sqlquery = "select * from danhmucsp where id = ?";
$stmt = $db->prepare($sqlquery);
$stmt->bindParam(1, $iddm, PDO::PARAM_INT);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
$dm = $stmt->fetch();
?>

<div >
    <h3 class="title-main" style="text-align: center; text-transform: uppercase"><?php echo $dm['tendanhmuc']; ?></h3>
    <div class="showitem">
        <div class="product">
            <?php
            include('database/connect.php');
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 1;
            }
            $start = 1;
            $page = $page - 1;
            $limit = 10;
            $sqlquery = "select * from san_pham where loaisp = ?";
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
            ?>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="product">
                <?php
                $sqlquery = "select * from san_pham where loaisp = ? limit ?,?";
                $stmt = $db->prepare($sqlquery);
                $stmt->bindParam(1, $iddm, PDO::PARAM_INT);
                $stmt->bindParam(2, $start, \PDO::PARAM_INT);
                $stmt->bindParam(3, $limit, \PDO::PARAM_INT);
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $stmt->execute();
                $resultSet = $stmt->fetchAll();
                foreach ($resultSet as $row) {
                    ?>
                    <div class="col-md-3 item-product bor">
                        <a href="?menu=product_info&masp=<?php echo $row['masp']; ?>"><img src="images/<?php echo $row['img']; ?>" alt="" width="100%" height="180"></a>
                        <div class="info-item" style="height: 70px">
                            <a href="?menu=product_info&masp=<?php echo $row['masp']; ?>"><?php echo $row['tensp']; ?></a>
                            <p style="color: red"><?php echo number_format($row['giasp'], 0, ",", ".") . "đ"; ?></p>
                        </div>
                        <div class="buy" style="margin-left: 25px" >
                            <a class="btn btn-primary" href="?menu=product_info&masp=<?php echo $row['masp']; ?>">Chi tiết</a>
                            <a class="btn btn-warning" href="?menu=add_cart&masp=<?php echo $row['masp']; ?>&soluong=1"><b class="fa fa-cart-plus"></b></a>
                        </div>
                    </div>



                <?php } ?>
            </div>
            <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div  >
                    <ul class="pagination">



                        <?php
                        for ($i = 1; $i <= $total; $i++) {
                            echo '<li> <a href="?menu=san_pham&id=' . $iddm . '&page=' . $i . '">' . $i . '</a> <li>  ';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>