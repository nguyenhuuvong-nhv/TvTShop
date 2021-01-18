<?php
if(isset($_GET['category'])){
    include 'chuc_nang/tim_kiem/exec_tim_kiem.php';
}
elseif(isset($_GET['menu'])) {
    $menu = $_GET['menu'];
    switch ($menu) {
        case 'gio_hang':
            include('chuc_nang/gio_hang/gio_hang.php');
            break;
        case 'san_pham':
            include('chuc_nang/san_pham/san_pham.php');
            break;
        case 'product_info':
            include('chuc_nang/san_pham/product_info.php');
            break;
        case 'danhmuc':
            include('chuc_nang/san_pham/sanphamtheodm.php');
            break;
        case 'dang_ky':
            include('chuc_nang/dang_ky_dang_nhap/dang_ky.php');
            break;
        case 'dang_nhap':
            include('chuc_nang/dang_ky_dang_nhap/dang_nhap.php');
            break;
        case 'exec_dang_ky':
            include('chuc_nang/dang_ky_dang_nhap/exec_dang_ky.php');
            break;      
        case 'exec_dang_nhap':
            include('chuc_nang/dang_ky_dang_nhap/exec_dang_nhap.php');
            break;
        case 'my_user':
            include('chuc_nang/dang_ky_dang_nhap/my_user.php');
            break;
        case 'doi_mk':
            include('chuc_nang/dang_ky_dang_nhap/exec_doi_mk.php');
            break; 
        case 'update_info':
            include('chuc_nang/dang_ky_dang_nhap/exec_update_info.php');
            break; 
        case 'logout':
            include('chuc_nang/dang_ky_dang_nhap/logout.php');
            break;
        case 'mua_ngay':
            include('chuc_nang/gio_hang/mua_ngay.php');
            break;
        case 'mua_hang':
            include('chuc_nang/gio_hang/gio_hang.php');
            break;
        case 'del_cart':
            include('chuc_nang/gio_hang/del_cart.php');
            break;
        case 'add_cart':
            include('chuc_nang/san_pham/add_cart.php');
            break;
        case 'thanh_toan':
            include('chuc_nang/gio_hang/thanh_toan.php');
            break;
        case 'khach_hang':
            include('chuc_nang/gio_hang/thong_tin_khach_hang.php');
            break;
        case 'hoa_don':
            include('chuc_nang/gio_hang/hoa_don.php');
            break;
        case 'theo_doi_dh':
            include('chuc_nang/gio_hang/theo_doi_dh.php');
            break;
        case 'chi_tiet_dh':
            include('chuc_nang/gio_hang/chi_tiet_dh.php');
            break;
        case 'huy_don_hang':
            include('chuc_nang/gio_hang/huy_don_hang.php');
            break;
        case 'yeu_thich':
            include('chuc_nang/san_pham/yeu_thich.php');
            break;
        case 'binh_luan':
            include('chuc_nang/binh_luan/exec_binh_luan.php');
            break;
        case 'rate':
            include('chuc_nang/rate/rate.php');
            break;
        case 'ngan_luong':
            include('chuc_nang/ngan_luong/thanh_toan.php');
            break;
        case 'quan_tri':
            echo "<script> location.href='/quan_tri/index.php';  </script>";
            break;
    }
} else {
    include('view/slide_show.php');
    include('chuc_nang/san_pham/san_pham.php');
}
