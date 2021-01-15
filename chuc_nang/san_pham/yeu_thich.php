<?php
    include('database/connect.php');
    $sqlquery = "update san_pham set yeu_thich= yeu_thich +1 where masp= ?";
    $stmt = $db->prepare($sqlquery);
    $stmt->bindParam(1, $_GET['masp']);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    echo "<script> location.href='javascript: history.back(-1);'; </script>";
?>
