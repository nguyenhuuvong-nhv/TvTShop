<?php
	if(!isset($login)){exit();}
?>
<?php
	if(isset($_POST['submit'])){
	include('database/connect.php');
	$img_location ='../images/';
	if($_FILES['image']['name']!=""){
		$image = rand().$_FILES['image']['name'];
		$error= $_FILES['image']['error'];
		$tmp_name= $_FILES['image']['tmp_name'];
		$img_local= $img_location.basename($image);
		if(move_uploaded_file($tmp_name, $img_local)){

		}else{
			unlink('../images/'.$image);
		}
	if($_FILES['image1']['name']!=""){
		$image1= rand().$_FILES['image1']['name'];
		$tmp_name1= $_FILES['image1']['tmp_name'];
		$img_location1= $img_location.basename($image1);
		if(move_uploaded_file($tmp_name1, $img_location1)){

		}else{
			unlink('../images/'.$image1);
		}
	}
	else{
		$image1="";
	}
	if($_FILES['image2']['name']!=""){
		$image2= rand().$_FILES['image2']['name'];
		$tmp_name2= $_FILES['image2']['tmp_name'];
		$img_location2= $img_location.basename($image2);
		if(move_uploaded_file($tmp_name2, $img_location2)){

		}else{
			unlink('../images/'.$image2);
		}
	}
	else{
		$image2="";
	}
	if($_FILES['image3']['name']!=""){
		$image3= rand().$_FILES['image3']['name'];
		$tmp_name3= $_FILES['image3']['tmp_name'];
		$img_location3= $img_location.basename($image3);
		if(move_uploaded_file($tmp_name3, $img_location3)){

		}else{
			unlink('../images/'.$image3);
		}
	}
	else{
		$image3="";
	}
	if($_FILES['image4']['name']!=""){
		$image4= rand().$_FILES['image4']['name'];
		$tmp_name4= $_FILES['image4']['tmp_name'];
		$img_location4= $img_location.basename($image4);
		if(move_uploaded_file($tmp_name4, $img_location4)){

		}else{
			unlink('../images/'.$image4);
		}
	}
	else{
		$image4="";
	}
	$name = $_POST['name'];
	$name= mb_strtoupper($name);
	$cost = $_POST['cost'];
	if($cost ==""){
		echo "<script> alert('Giá sản phẩm không được để trống'); </script> ";
	}
	$sql= "select max(masp) from san_pham";
	$stmt = $db->prepare($sql);
	$stmt->bindParam(1,$_GET['masp']);
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$stmt->execute();
	$row = $stmt->fetch();
        $masp= $row['max(masp)']+1;
	$soluong=$_POST['soluong'];
	if($soluong==""){
		$soluong=0;
	}
	$man_hinh = $_POST['man_hinh'];
	$do_phan_giai = $_POST['do_phan_giai'];
	$kich_thuoc_man_hinh = $_POST['kich_thuoc_man_hinh'];
	$loai_man_hinh = $_POST['loai_man_hinh'];
	$ngon_ngu = $_POST['ngon_ngu'];
	$cpu = $_POST['cpu'];
	$ram = $_POST['ram'];
	$he_dieu_hanh = $_POST['he_dieu_hanh'];
	$camera_truoc = $_POST['camera_truoc'];
	$camera_sau = $_POST['camera_sau'];
	$bo_nho_trong = $_POST['bo_nho_trong'];
	$danh_ba = $_POST['danh_ba'];
	$chipset = $_POST['chipset'];
	$so_nhan = $_POST['so_nhan'];
	$toc_do_cpu = $_POST['toc_do_cpu'];
	$quay_phim = $_POST['quay_phim'];
	$video_call = $_POST['video_call'];
	$den_flash = $_POST['den_flash'];
	$chip_do_hoa = $_POST['chip_do_hoa'];
	$single3g4g = $_POST['single3g4g'];
	$loai_sim = $_POST['loai_sim'];
	$so_sim = $_POST['so_sim'];
	$wifi = $_POST['wifi'];
	$gps = $_POST['gps'];
	$bluetooth = $_POST['bluetooth'];
	$gprs_edge = $_POST['gprs_edge'];
	$the_nho = $_POST['the_nho'];
	$da_phuong_tien = $_POST['da_phuong_tien'];
	$chuc_nang_khac = $_POST['chuc_nang_khac'];
	$kich_thuoc = $_POST['kich_thuoc'];
	$khoi_luong = $_POST['khoi_luong'];
	$pin = $_POST['pin'];
	$loaisp = $_POST['loaisp'];
	$sql= "insert into san_pham(tensp,giasp,soluong,loaisp,img,img1,img2,img3,img4,noi_bat) values(?,?,?,?,?,?,?,?,?,?)";
	$stmt= $db->prepare($sql);
	$stmt->bindParam(1,$name);
	$stmt->bindParam(2,$cost);
	$stmt->bindParam(3,$soluong);
        $stmt->bindParam(4,$loaisp,PDO::PARAM_INT);
	$stmt->bindParam(5,$image);
	$stmt->bindParam(6,$image1);
	$stmt->bindParam(7,$image2);
	$stmt->bindParam(8,$image3);
	$stmt->bindParam(9,$image4);            
	$stmt->bindParam(10,$_POST['noi_bat']);
	if($stmt->execute()){
		$sql= "insert into cau_hinh(masp,man_hinh,do_phan_giai,kich_thuoc_man_hinh,loai_man_hinh,ngon_ngu,cpu,ram,he_dieu_hanh,camera_truoc, camera_sau,bo_nho_trong,danh_ba, chipset,so_nhan, toc_do_cpu, quay_phim,video_call,den_flash,chip_do_hoa,single3g4g,loai_sim, so_sim,wifi,gps,bluetooth,gprs_edge,the_nho,da_phuong_tien,chuc_nang_khac,kich_thuoc, khoi_luong,pin) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$stmt= $db->prepare($sql);
		$stmt->bindParam(1,$masp,PDO::PARAM_INT);
		$stmt->bindParam(2,$man_hinh);
		$stmt->bindParam(3,$do_phan_giai);
		$stmt->bindParam(4,$kich_thuoc_man_hinh);
		$stmt->bindParam(5,$loai_man_hinh);
		$stmt->bindParam(6,$ngon_ngu);
		$stmt->bindParam(7,$cpu);
		$stmt->bindParam(8,$ram);
		$stmt->bindParam(9,$he_dieu_hanh);
		$stmt->bindParam(10,$camera_truoc);
		$stmt->bindParam(11,$camera_sau);
		$stmt->bindParam(12,$bo_nho_trong);
		$stmt->bindParam(13,$danh_ba);
		$stmt->bindParam(14,$chipset);
		$stmt->bindParam(15,$so_nhan);
		$stmt->bindParam(16,$toc_do_cpu);
		$stmt->bindParam(17,$quay_phim);
		$stmt->bindParam(18,$video_call);
		$stmt->bindParam(19,$den_flash);
		$stmt->bindParam(20,$chip_do_hoa);
		$stmt->bindParam(21,$single3g4g);
		$stmt->bindParam(22,$loai_sim);
		$stmt->bindParam(23,$so_sim);
		$stmt->bindParam(24,$wifi);
		$stmt->bindParam(25,$gps);
		$stmt->bindParam(26,$bluetooth);
		$stmt->bindParam(27,$gprs_edge);
		$stmt->bindParam(28,$the_nho);
		$stmt->bindParam(29,$da_phuong_tien);
		$stmt->bindParam(30,$chuc_nang_khac);
		$stmt->bindParam(31,$kich_thuoc);
		$stmt->bindParam(32,$khoi_luong);
		$stmt->bindParam(33,$pin);
		if($stmt->execute()){
			echo "<script> alert('Thêm sản phẩm thành công'); location.href='?menu=quanli_san_pham'; </script>";
		}else{
			echo "<script> alert('Thêm sản phẩm không thành công'); location.href='?menu=?menu=quanli_san_pham'; </script>";
		}
	}
	else{
		echo "<script> alert('Thêm sản phẩm không thành công'); location.href='?menu=?menu=quanli_san_pham'; </script>";
	}
}
}
	if(isset($_POST['cancel'])){
		header('location:index.php?menu=quanli_san_pham');
	}
?>