<?php

if (isset($_GET['menu'])) {
    $menu = $_GET['menu'];
    switch ($menu) {
        case 'quanli_san_pham':
            include('./chucnang/quan_li_san_pham/quan_li_san_pham.php');
            break;
        case 'them_san_pham':
            include('./chucnang/quan_li_san_pham/them_san_pham.php');
            break;
        case 'exec_them_sp':
            include('./chucnang/quan_li_san_pham/exec_them_sp.php');
            break;
        case 'quanli_danh_muc':
            include('./chucnang/quan_li_danh_muc/quan-li-danh-muc.php');
            break;
        case 'them_danh_muc':
            include('./chucnang/quan_li_danh_muc/them_danh_muc.php');
            break;
        case 'xoa_danh_muc':
            include('./chucnang/quan_li_danh_muc/xoa_danh_muc.php');
            break;
        case 'quanli_user':
            include('./chucnang/quan_li_user/quan-li-user.php');
            break;
        case 'logout':
            include('./chucnang/quan_tri/logout.php');
            break;
        case 'quanli_slideshow':
            include('./chucnang/quan_li_slideshow/ql_slideshow.php');
            break;
        case 'them_anh_slide':
            include('./chucnang/quan_li_slideshow/them_anh_slide.php');
            break;
        case 'sua_anh_slide':
            include('./chucnang/quan_li_slideshow/sua_anh_slide.php');
            break;
        case 'xoa_anh_slide':
            include('./chucnang/quan_li_slideshow/xoa_anh_slide.php');
            break;
        case 'exec_them_anh_slide':
            include('./chucnang/quan_li_slideshow/exec_them_anh_slide.php');
            break;
        case 'exec_sua_anh_slide':
            include('./chucnang/quan_li_slideshow/exec_sua_anh_slide.php');
            break;
        case 'quanli_menu_ngang':
            include('./chucnang/quan_li_menu_ngang/quan_li_menu_ngang.php');
            break;
        case 'them_menu_ngang':
            include('./chucnang/quan_li_menu_ngang/them_menu_ngang.php');
            break;
        case 'sua_menu_ngang':
            include('./chucnang/quan_li_menu_ngang/sua_menu_ngang.php');
            break;
        case 'xoa_menu_ngang':
            include('./chucnang/quan_li_menu_ngang/xoa_menu_ngang.php');
            break;
        case 'exec_sua_menu_ngang':
            include('./chucnang/quan_li_menu_ngang/exec_sua_menu_ngang.php');
            break;
    }
} else {
    include('./chucnang/quan_li_san_pham/quan_li_san_pham.php');
}
?>