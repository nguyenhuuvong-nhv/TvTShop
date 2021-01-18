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
        case 'chi_tiet_sp':
            include('./chucnang/quan_li_san_pham/chi_tiet.php');
            break;
        case 'cap_nhat_sp':
            include('./chucnang/quan_li_san_pham/cap_nhat_sp.php');
            break;
        case 'exec_cap_nhat_sp':
            include('./chucnang/quan_li_san_pham/exec_cap_nhat_sp.php');
            break;
        case 'xoa_sp':
            include('./chucnang/quan_li_san_pham/xoa_sp.php');
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
        case 'update_user':
            include('./chucnang/quan_li_user/update_user.php');
            break;
        case 'exec_update_user':
            include('./chucnang/quan_li_user/exec_update_user.php');
            break;
        case 'disable_user':
            include('./chucnang/quan_li_user/disable_user.php');
            break;
        case 'enable_user':
            include('./chucnang/quan_li_user/enable_user.php');
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
        case 'quanli_quang_cao':
            include('./chucnang/quan_li_quang_cao/ql_quang_cao.php');
            break;
        case 'them_anh_qc':
            include('./chucnang/quan_li_quang_cao/them_anh_qc.php');
            break;
        case 'sua_anh_qc':
            include('./chucnang/quan_li_quang_cao/sua_anh_qc.php');
            break;
        case 'exec_sua_anh_qc':
            include('./chucnang/quan_li_quang_cao/exec_sua_anh_qc.php');
            break;
        case 'xoa_anh_qc':
            include('./chucnang/quan_li_quang_cao/xoa_anh_qc.php');
            break;
        
        
        
        case 'exec_them_anh_qc':
            include('./chucnang/quan_li_quang_cao/exec_them_anh_qc.php');
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
        case 'quanli_hoa_don':
            include('./chucnang/quan_li_hoa_don/hoa_don.php');
            break;
        case 'chi_tiet_hoa_don':
            include('./chucnang/quan_li_hoa_don/chi_tiet_hoa_don.php');
            break;
        case 'xu_ly':
            include('./chucnang/quan_li_hoa_don/xu_ly.php');
            break;
        case 'hoanthanh':
            include('./chucnang/quan_li_hoa_don/hoanthanh.php');
            break;
        case 'xoa':
            include('./chucnang/quan_li_hoa_don/xoa.php');
            break;
        case 'thong_ke':
            include('./chucnang/thong_ke/thong_ke.php');
            break;
        
        
        
    }
} else {
    if ($_SESSION['quyen_truy_cap'] == 1){
        include('./chucnang/thong_ke/thong_ke.php');
    }
    elseif($_SESSION['quyen_truy_cap'] == 2) {
    include('./chucnang/quan_li_san_pham/quan_li_san_pham.php');}
}
?>