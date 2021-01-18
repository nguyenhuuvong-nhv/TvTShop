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
        <link href="public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/./sb-admin-2.min.css" rel="stylesheet" type="text/css">
        <script src="public/vendor/jquery/jquery.min.js"></script>

        <!-- summernote-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <!-- Data table -->
        <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    </head>
    <body>
    <head>
    <div class="top-admin">
        <h2 style="display: inline">TRANG QUẢN TRỊ</h2>
        <a href="../../../index.php" style="background: #396;color: #fff;font-size: 18px;font-weight: bold;padding-left: 15px;">TvT SHOP</a>   
        <h2>Xin chào <?php echo $_SESSION['user']; ?></h2>
    </div>
</head>

<main>
    <div class="menu">
        <ul>
            <?php
            if ($_SESSION['quyen_truy_cap'] == 1) {
                ?>
                <li><a href="?menu=thong_ke"> Trang chủ </a></li> 
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