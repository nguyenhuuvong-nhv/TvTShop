<?php
include('database/connect.php');
$sqlquery = "select user from nguoidung";
$stmt = $db->prepare($sqlquery);
$stmt->execute();
$resultSet = $stmt->fetchAll();
$check1=0;
$check2=0;
foreach ($resultSet as $row) {
    if ($row['user'] == $_POST['user']) {
        $check1 = 1;
    }
}
if ($_POST['password'] != $_POST['password1']) {
    $check2 = 1;
}
if ($check1 == 1) {
    $_SESSION['check1']="Tên tài khoản đã tồn tại.";
    echo "<script> location.href='javascript: history.back(-1);'; </script>";
} elseif ($check2 == 1) {
     $_SESSION['check2']="Mật khẩu không trùng nhau.";
    echo "<script> location.href='javascript: history.back(-1);'; </script>";
} else {
    $hoten = $_POST['name'];
    $user = $_POST['user'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $gt = $_POST['gioitinh'];

    $sqlquery = "insert into nguoidung(hoten,user,pass,gioitinh,sdt,email,diachi) values(?,?,?,?,?,?,?)";
    $stmt = $db->prepare($sqlquery);

    $stmt->bindParam(1, $hoten);
    $stmt->bindParam(2, $user);
    $pass = md5(md5($_POST['password']));
    $stmt->bindParam(3, $pass);
    $stmt->bindParam(4, $gt);
    $stmt->bindParam(5, $number);
    $stmt->bindParam(6, $email);
    $stmt->bindParam(7, $address);
    $exec = $stmt->execute();
    if ($exec) {
        ?>
        <p class="alert alert-success">Đăng ký thành công.. Chúng tôi đã gửi bạn email thông tin tài khoản của bạn..<br> Bấm<a href="?menu=dang_nhap"> vào đây </a> để đăng nhập và mua hàng</p>
        <?php

    } else {
        echo "Đăng ký thất bại <br>";
        echo 'Bấm<a href="javascript:history.back(-1);"> vào đây </a> để quay lại trang đăng ký';
    }
}
?>