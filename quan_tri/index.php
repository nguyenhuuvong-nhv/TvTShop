<?php
session_start();
include('./chucnang/quan_tri/security.php');
if (isset($login)) {
	include('./chucnang/quan_tri/trang_chu.php');
} else {
	if (isset($_POST['submit'])) {
		include('../database/connect.php');
		$name = $_POST['username'];
		$pass = $_POST['password'];
		$sqlquery = "select * from quan_tri where name= ? and pass= ?";
		$stmt = $db->prepare($sqlquery);
		$stmt->bindParam(1, $name);
		$stmt->bindParam(2, $pass);
		$stmt->execute();
		$resultSet = $stmt->fetchAll();
		foreach ($resultSet as $row) {
			$_SESSION['user'] = $row['name'];
			$_SESSION['pass'] = $row['pass'];
                        $_SESSION['quyen_truy_cap']= $row['quyen_truy_cap'];
		}
		if (isset($_SESSION['user'])) {
			echo "<script>alert('Login Successfull.'); </script>";
			include('chucnang/quan_tri/trang_chu.php');
		} else {
			echo "<script>alert('Login Failed.'); </script>";
                        include('./chucnang/quan_tri/login.php');
		}
	} else {
            include('./chucnang/quan_tri/login.php');
        }
	
}