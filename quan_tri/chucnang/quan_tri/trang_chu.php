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
        <link rel="shortcut icon" type="image/png" href="../images/img_logo.png"/>
        <link rel="stylesheet" href="css/style_for_admin.css">
    </head>
    <body>
    <head>
    <div class="top-admin">
        <h2>TRANG QUẢN TRỊ TvT SHOP</h2>
        <h2>Xin chào <?php echo $_SESSION['user']; ?></h2>
    </div>
</head>

<main>
    <div class="menu">
        <ul>
            <?php
            if ($_SESSION['quyen_truy_cap'] == 1) {
                ?>

                <li><a href="?menu=quanli_san_pham"> Quản lí sản phẩm </a></li>
                <li><a  href="?menu=quanli_danh_muc"> Quản lí danh mục sản phẩm </a></li>
                <li><a  href="?menu=quanli_user"> Quản lí user </a></li>
                <li><a  href="?menu=quanli_slideshow"> Quản lí slide show </a></li>
                <li><a  href="?menu=quanli_menu_ngang"> Quản lí menu ngang </a></li>
                <li><a  href="?menu=quanli_quang_cao"> Quản lí quảng cáo </a></li>
                <li><a  href="?menu=quanli_hoa_don"> Quản lí hóa đơn </a></li>
                <li><a  href="?menu=logout"> Đăng xuất </a></li>

            <?php } elseif ($_SESSION['quyen_truy_cap'] == 2) {
                ?>
                <li><a href="?menu=quanli_san_pham"> Quản lí sản phẩm </a></li>
                <li><a  href="?menu=quanli_slideshow"> Quản lí slide show </a></li>
                <li><a  href="?menu=quanli_quang_cao"> Quản lí quảng cáo </a></li>                
                <li><a  href="?menu=quanli_hoa_don"> Quản lí hóa đơn </a></li>
                <li><a  href="?menu=logout"> Đăng xuất </a></li>       
            <?php }
            ?>
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