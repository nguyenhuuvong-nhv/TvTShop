<?php
	unset($_SESSION['username']);
        unset($_SESSION['pass']) ;
        unset( $_SESSION['hoten'] );
        unset($_SESSION['ma_quyen']);
	echo "<script> location.href='index.php'; </script>";
?>