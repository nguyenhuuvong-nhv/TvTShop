<?php
	include('database/connect.php');
	if(md5(md5($_POST['password_old'])) == $_SESSION['pass']){
		$newpassword= md5(md5($_POST['password_new']));
		$re_password= md5(md5($_POST['password_re']));
		if ($newpassword==$re_password){
			$sqlquery = "update nguoidung set pass = ? where user = ?";
			$stmt = $db->prepare($sqlquery);
			$stmt->bindParam(1,$newpassword);
			$stmt->bindParam(2,$_SESSION['username']);
			$stmt->execute(); 
                        $_SESSION['check1']="Đổi mật khẩu thành công !";
                        echo "<script> location.href='javascript: history.back(-1);'; </script>";?>
		<?php
		}
		else{ 
                        $_SESSION['check1']="Mật khẩu bạn nhập lại không khớp !";
			echo "<script> location.href='javascript: history.back(-1);'; </script>";	
		}
	}else{
                $_SESSION['check1']="Mật khẩu hiện tại không đúng !";
		echo "<script> location.href='javascript: history.back(-1);'; </script>";	
	}
?>