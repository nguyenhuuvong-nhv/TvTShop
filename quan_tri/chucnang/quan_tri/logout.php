<?php
	unset($_SESSION['user']);
	unset($_SESSION['pass']);
        unset($_SESSION['quyen_truy_cap']);
	echo "<script>alert('Logout Successfull.'); location.href='./index.php';</script>";
?>