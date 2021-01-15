<?php
if (!isset($login)) {
	exit();
}
?>
<?php
if (isset($_POST['submit'])) {
	$img_location = '../images/';
	$masp = $_POST['masp'];
	$name = $_POST['name'];
	$name = mb_strtoupper($name);
	$cost = $_POST['cost'];
	$loaisp = $_POST['loaisp'];
	$image_upload = $_FILES['image']['name'];
	$image1 = $_FILES['image1']['name'];
	$image2 = $_FILES['image2']['name'];
	$image3 = $_FILES['image3']['name'];
	$image4 = $_FILES['image4']['name'];
	$tmp_name1 = $_FILES['image1']['tmp_name'];
	$tmp_name2 = $_FILES['image2']['tmp_name'];
	$tmp_name3 = $_FILES['image3']['tmp_name'];
	$tmp_name4 = $_FILES['image4']['tmp_name'];
	$error = $_FILES['image']['error'];
	$tmp_name = $_FILES['image']['tmp_name'];
	if ($image_upload== "") {
		$image = $_POST['img'];
	}else {
		$image = rand().$image_upload;
		$new_img_location = $img_location . basename($image);
		move_uploaded_file($tmp_name, $new_img_location);
		if($_POST['img'] != ""){
			$old_image_location= $img_location.basename($_POST['img']);
			unlink($old_image_location);
		}
	}
	if ($image1 == "") {
		$img1 = $_POST['img1'];
	}
	else{
		$img1 = rand().$image1;
		$new_img_location = $img_location . basename($img1);
		move_uploaded_file($tmp_name1, $new_img_location);
		if($_POST['img1'] != ""){
			$old_image_location= $img_location.basename($_POST['img1']);
			unlink($old_image_location);
		}
	}
	if ($image2 == "") {
		$img2 = $_POST['img2'];
	}
	else{
		$img2 =rand(). $image2;
		$new_img_location = $img_location . basename($img2);
		move_uploaded_file($tmp_name2, $new_img_location);
		if($_POST['img2'] != ""){
			$old_image_location= $img_location.basename($_POST['img2']);
			unlink($old_image_location);
		}
	}
	if ($image3 == "") {
		$img3 = $_POST['img3'];
	}
	else{
		$img3 = rand().$image3;
		$new_img_location = $img_location . basename($img3);
		move_uploaded_file($tmp_name3, $new_img_location);
		if($_POST['img3'] != ""){
			$old_image_location= $img_location.basename($_POST['img3']);
			unlink($old_image_location);
		}
	}
	if ($image4 == ""){
		$img4 = $_POST['img4'];
	}
	else{
		$img4 =rand(). $image4;
		$new_img_location = $img_location. basename($img4);
		move_uploaded_file($tmp_name4, $new_img_location);
		if($_POST['img4'] != ""){
			$old_image_location= $img_location.basename($_POST['img4']);
			unlink($old_image_location);
		}
	}
	$soluong = $_POST['soluong'];
	if ($soluong == "") {
		$soluong = 0;
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
	$sql = "update san_pham set tensp=?,giasp=?,soluong=?,img=?,img1=?,img2=?,img3=?,img4=?,loaisp=?,noi_bat=? where masp=?";
	$stmt = $db->prepare($sql);
	$stmt->bindParam(1, $name);
	$stmt->bindParam(2, $cost);
	$stmt->bindParam(3, $soluong);
	$stmt->bindParam(4, $image);
	$stmt->bindParam(5, $img1);
	$stmt->bindParam(6, $img2);
	$stmt->bindParam(7, $img3);
	$stmt->bindParam(8, $img4);
	$stmt->bindParam(9, $loaisp,PDO::PARAM_INT);
	$stmt->bindParam(10,$_POST['noi_bat']);
	$stmt->bindParam(11,$masp, PDO::PARAM_INT);
	$stmt->execute();
	if ($stmt->execute() == true ) {
		$sql = "update cau_hinh set man_hinh=?,do_phan_giai=?,kich_thuoc_man_hinh=?,loai_man_hinh=?,ngon_ngu=?,cpu=?,ram=?,he_dieu_hanh=?,camera_truoc=?,camera_sau=?,bo_nho_trong=?,danh_ba=?,chipset=?,so_nhan=?,toc_do_cpu=?,quay_phim=?,video_call=?,den_flash=?,chip_do_hoa=?,single3g4g=?,loai_sim=?,so_sim = ?,wifi=?,gps=?,bluetooth=?,gprs_edge=?,the_nho=?,da_phuong_tien=?,chuc_nang_khac=?,kich_thuoc=?,khoi_luong=?,pin=? where masp=?";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(1, $man_hinh);
		$stmt->bindParam(2, $do_phan_giai);
		$stmt->bindParam(3, $kich_thuoc_man_hinh);
		$stmt->bindParam(4, $loai_man_hinh);
		$stmt->bindParam(5, $ngon_ngu);
		$stmt->bindParam(6, $cpu);
		$stmt->bindParam(7, $ram);
		$stmt->bindParam(8, $he_dieu_hanh);
		$stmt->bindParam(9, $camera_truoc);
		$stmt->bindParam(10, $camera_sau);
		$stmt->bindParam(11, $bo_nho_trong);
		$stmt->bindParam(12, $danh_ba);
		$stmt->bindParam(13, $chipset);
		$stmt->bindParam(14, $so_nhan);
		$stmt->bindParam(15, $toc_do_cpu);
		$stmt->bindParam(16, $quay_phim);
		$stmt->bindParam(17, $video_call);
		$stmt->bindParam(18, $den_flash);
		$stmt->bindParam(19, $chip_do_hoa);
		$stmt->bindParam(20, $single3g4g);
		$stmt->bindParam(21, $loai_sim);
		$stmt->bindParam(22, $so_sim);
		$stmt->bindParam(23, $wifi);
		$stmt->bindParam(24, $gps);
		$stmt->bindParam(25, $bluetooth);
		$stmt->bindParam(26, $gprs_edge);
		$stmt->bindParam(27, $the_nho);
		$stmt->bindParam(28, $da_phuong_tien);
		$stmt->bindParam(29, $chuc_nang_khac);
		$stmt->bindParam(30, $kich_thuoc);
		$stmt->bindParam(31, $khoi_luong);
		$stmt->bindParam(32, $pin);
		$stmt->bindParam(33, $masp, PDO::PARAM_INT);
		if ($stmt->execute()) {
			echo "<script> alert('Sửa sản phẩm thành công');
			location.href='?menu=quanli_san_pham'; </script>";
			
		} else {
			echo "<script> alert('Sửa sản phẩm không thành công'); location.href='?menu=quanli_san_pham'; </script>";
			
		}
	} else {
		echo "<script> alert('Sửa sản phẩm không thành công'); location.href='?menu=quanli_san_pham'; </script>";
		
	}
}
if (isset($_POST['cancel'])) {
	header('location:index.php?menu=quanli_san_pham');
	
}
?>