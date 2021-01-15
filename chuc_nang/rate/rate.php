<?php
include('database/connect.php');
$sqlquery = "update san_pham set rate? = rate?+1 where masp = ?";
$stmt = $db->prepare($sqlquery);
$stmt->bindParam(1, $_POST['rate'], \PDO::PARAM_INT);
$stmt->bindParam(2, $_POST['rate'], \PDO::PARAM_INT);
$stmt->bindParam(3, $_POST['masp'], \PDO::PARAM_INT);
$exec = $stmt->execute();
if ($exec) {
    ?>
    <p class="alert alert-success">Đánh giá thành công. Cảm ơn bạn đã đánh giá sản phẩm của chúng tôi. Bấm<a href="javascript:history.back(-1);"> vào đây </a>để quay lại trang sản phẩm.</p>
    <?php

} else {
    ?>
    <p class="alert alert-warning">Đánh giá thất bại. Bấm<a href="javascript:history.back(-1);"> vào đây </a>để quay lại trang sản phẩm.</p>
    <?php

}
?>