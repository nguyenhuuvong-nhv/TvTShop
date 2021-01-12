<?php
if (!isset($_SESSION['user'])) {
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin</title>
        <link rel="stylesheet" href="css/style_for_admin.css">
    </head>
    <body>
    <head>
    <div class="top-admin">
        <h2>TRANG QUẢN TRỊ</h2>
    </div>
</head>

<main>
    <div class="menu">
        <ul>
            <li><a href="?menu=quanli_san_pham"> Quản lí sản phẩm </a></li>
            <li><a  href="?menu=quanli_danh_muc"> Quản lí danh mục sản phẩm </a></li>
            <li><a  href="?menu=quanli_user"> Quản lí user </a></li>
            <li><a  href="?menu=quanli_slideshow"> Quản lí slide show </a></li>
            <li><a  href="?menu=quanli_menu_ngang"> Quản lí menu ngang </a></li>
            <li><a  href="?menu=quanli_quang_cao"> Quản lí quảng cáo </a></li>
            <li><a  href="?menu=logout"> Đăng xuất </a></li>
        </ul>
    </div>

    <div class="noidung-admin">
        <?php
        include '../database/connect.php';
        include './dieuhuong.php';
        ?>
    </div>
</main>
<footer>

</footer>