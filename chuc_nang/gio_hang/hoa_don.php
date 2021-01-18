<?php
	include('database/connect.php');
	if(isset($_POST['submit'])){
		$tenkh= $_POST['tenkh'];
                if(!isset($_POST['email'])){
                    $email= 'null';
                }else{
                    $email= $_POST['email'];
                }
		$sdt= $_POST['sdt'];
		$diachi= $_POST['diachi'];
                $tong_tien = $_POST['tong_tien'];
		if(isset($_SESSION['username'])){
                        $id_kh= $_SESSION['username'];
			$sp_mua=$_POST['sp_mua'];
			$list_id= $_POST['list_id'];
		}
		else{
			foreach($_SESSION['giohang'] as $masp=> $sp){
				$id_array[]= $masp;
				}
                        $id_kh='khtd';
			$list_id= implode(',',$id_array);
			$sqlquery= 'select * from san_pham where masp in ('.$list_id.')';
			$stmt = $db->prepare($sqlquery);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->execute();
			$resultSet = $stmt->fetchAll();
			$sp_mua="";
			foreach ($resultSet as $row){
				$soluong= $_SESSION['giohang'][$row['masp']];
				$gia_sp=$row['giasp'];
				$sp_mua= $sp_mua.$row['masp'].",".$soluong.",".$gia_sp."|";		
			}
		}
		$sqlquery= "insert into hoa_don(id_kh,ten_kh,email,sdt,dia_chi,sp_mua,xu_ly,tong_tien) values(?,?,?,?,?,?,'Chưa xử lý',?)";
		$stmt = $db->prepare($sqlquery);
		$stmt->bindParam(1,$id_kh);
		$stmt->bindParam(2,$tenkh);
		$stmt->bindParam(3,$email);
		$stmt->bindParam(4,$sdt);
		$stmt->bindParam(5,$diachi);		
                $stmt->bindParam(6,$sp_mua);
                $stmt->bindParam(7,$tong_tien);
		$stmt->execute();
		$sqlquery= "update san_pham set mua_nhieu=mua_nhieu + 1 where masp in (".$list_id.")";
		$stmt = $db->prepare($sqlquery);
		$stmt->execute();
				unset($_SESSION['giohang']);
			echo '<p class="alert alert-success">Mua hàng thành công.. Vui lòng kiểm tra mail của bạn và luôn giữ liên lạc khi nhân viên giao hàng liên hệ..</p>';
			echo '<p class="alert alert-success">Bấm <a href="?menu=san_pham">vào đây</a> để quay lại mua hàng tiếp</p>';
		}
                if(isset($_POST['cancel'])){
                    echo "<script>location.href='?menu=san_pham'; </script>";
                }
?>
