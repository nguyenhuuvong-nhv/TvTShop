<?php
	$sqlquery = "update nguoidung set trangthai=1 where user= ?";
	$stmt = $db->prepare($sqlquery);
	$stmt->bindParam(1, $_GET['id']);
	$exec = $stmt->execute();
        echo "<script>location.href='javascript:history.back(-1);'; </script>";
?>


