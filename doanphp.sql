-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 18, 2021 lúc 02:50 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doanphp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `nickname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`id`, `masp`, `nickname`, `noi_dung`) VALUES
(3, 11, 'Nguyễn Hữu Vọng', 'Ok\r\n'),
(10, 4, 'Ngô Hoàng Minh', 'ok đó'),
(11, 5, 'Nguyễn Hữu Vọng', 'Ok'),
(12, 6, 'Nguyễn Hữu Vọng', 'sản phẩm rất tốt\r\n'),
(13, 6, 'Ngô Hoàng Minh', 'sản phẩm ok'),
(15, 4, 'Nguyễn Hữu Vọng', 'sản phẩm tốt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cau_hinh`
--

CREATE TABLE `cau_hinh` (
  `id` int(11) NOT NULL,
  `masp` int(11) DEFAULT NULL,
  `man_hinh` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `do_phan_giai` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `kich_thuoc_man_hinh` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `loai_man_hinh` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `ngon_ngu` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `cpu` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ram` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `he_dieu_hanh` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `camera_truoc` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `camera_sau` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bo_nho_trong` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `danh_ba` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `chipset` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `so_nhan` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `toc_do_cpu` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `quay_phim` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `video_call` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `den_flash` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `chip_do_hoa` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `single3g4g` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `ket_noi` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loai_sim` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `so_sim` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `wifi` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `gps` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `bluetooth` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `gprs_edge` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `the_nho` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `da_phuong_tien` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `chuc_nang_khac` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `kich_thuoc` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `khoi_luong` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `pin` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cau_hinh`
--

INSERT INTO `cau_hinh` (`id`, `masp`, `man_hinh`, `do_phan_giai`, `kich_thuoc_man_hinh`, `loai_man_hinh`, `ngon_ngu`, `cpu`, `ram`, `he_dieu_hanh`, `camera_truoc`, `camera_sau`, `bo_nho_trong`, `danh_ba`, `chipset`, `so_nhan`, `toc_do_cpu`, `quay_phim`, `video_call`, `den_flash`, `chip_do_hoa`, `single3g4g`, `ket_noi`, `loai_sim`, `so_sim`, `wifi`, `gps`, `bluetooth`, `gprs_edge`, `the_nho`, `da_phuong_tien`, `chuc_nang_khac`, `kich_thuoc`, `khoi_luong`, `pin`) VALUES
(86, 4, '6.1', 'Đang cập nhật', '6.1', 'Super Retina XDR', 'Hỗ trợ đa ngôn ngữ', '	A14 Bionic', '128gb', 'IOS', '12.0 MP', '12.0 MP', '128gb', 'Đang Cập nhật', 'iOS 14', 'Apple GPU 4 nhân', '	Hexa-Core', 'có', 'có', 'có', 'AMOLED', '3G/4G', '', 'Sim thường', '1', 'có', 'có', 'có', 'có', 'Không', 'Có', 'Cảm biến tiệm cận, ánh sáng, la bàn, trọng lực, hồng ngoại', '	6.1', '	189 g', '	2815 mAh'),
(87, 5, 'OLED, 6.1\", Super Retina XDR', 'Đang cập nhật', 'Dài 146.7 mm - Ngang 71.5 mm - Dày 7.4 mm', 'OLED', 'Hỗ trợ đa ngôn ngữ', '	A14 Bionic', '128gb', 'IOS', '12.0 MP', '2 camera 12 MP', '128gb', 'Đang Cập nhật', 'iOS 14', 'Apple A14 Bionic 6 nhân', '2 nhân 3.1 GHz & 4 nhân 1.8 GHz', 'có', 'có', 'có', 'Apple GPU 6 nhân', '3G/4G', '', 'Sim thường', '1', 'có', 'có', 'có', 'có', 'Không', 'Có', 'Cảm biến tiệm cận, ánh sáng, la bàn, trọng lực, hồng ngoại', '	6.1\"', '164 g', '	2815 mAh'),
(88, 6, '	6.8', 'FHD+', '6.8', 'IPS LCD', 'Hỗ trợ đa ngôn ngữ', '	Snapdragon 765G', '	8 GB', 'Android 10.0', '	24.0 MP', '64.0 MP, 12.0 MP, 2.0 MP, 2.0 MP', '128 GB', 'Tùy bộ nhớ', '	Adreno 620', 'Đang cập nhật', '	2.4Ghz', 'có', 'có', 'có', '	Adreno 620', '3G/4G', '', 'Sim thường', '2', 'có', 'có', 'có', 'có', 'Hỗ trợ thẻ nhớ 128gb', 'Có', 'Đa chức năng', '6.8', 'Đang cập nhật', '4500 mAh'),
(89, 7, '	6.55\", HD+, IPS LCD, 720 x 1600 Pixel', '720 x 1600 Pixel', '6.55\'', 'IPS LCD', 'Hỗ trợ đa ngôn ngữ', 'Snapdragon 665', '3 GB', 'Android 10.0', '12.0 MP', '	13.0 MP, Đang cập nhật, CMOS, ƒ/1.8', '64GB', 'Tùy bộ nhớ', 'Adreno 610', 'Đang cập nhật', '	2.24Ghz', 'có', 'có', 'có', 'Adreno 610', '3G/4G', '', 'Sim thường', '2', 'có', 'có', 'có', 'có', 'Hỗ trợ thẻ nhớ 128gb', 'Có', 'Đa chức năng', '6.55\'\'', '	180 g', '4000 mAh'),
(90, 8, '6.5\", HD+, IPS LCD, 720 x 1600 Pixel', '720 x 1600 Pixel', '6.5\'', 'IPS LCD', 'Hỗ trợ đa ngôn ngữ', '	Helio P22', '2 GB', 'Android 10.0', '	5.0 MP', 'Đang cập nhật', '32 GB', 'Tùy bộ nhớ', 'Đang cập nhật', 'Octa-Core', '	2.0 GHz', 'có', 'có', 'có', '	PowerVR', '3G/4G', '', 'Sim thường', '2', 'có', 'có', 'có', 'có', 'Hỗ trợ thẻ nhớ 128gb', 'Có', 'Đang Cập Nhật', '6.5\'\'', '189g', '4500 mAh'),
(91, 9, '6.4\", FHD+, AMOLED, 1080 x 2400 Pixel', 'FHD+', '6.4\"', 'AMOLED', 'Hỗ trợ đa ngôn ngữ', 'Snapdragon 720G', '	8 GB', 'Android 10.0', '12.0 MP', '12.0 MP', '128gb', 'Đang Cập nhật', '	Adreno 618', 'Đang cập nhật', '	2.30 GHz', 'có', 'có', 'có', '	Octa-Core', '3G', '', 'Sim thường', '2', 'có', 'có', 'có', 'có', 'Hỗ trợ thẻ nhớ 128gb', 'Có', 'Đang Cập Nhật', '6.4\"', '164 g', '4500 mAh'),
(92, 10, 'Dynamic AMOLED 2X, 6.9\", Quad HD+ (2K+)', '2K+ (1440 x 3088 Pixels)', '6.9\"', 'Dynamic AMOLED 2X', 'Hỗ trợ đa ngôn ngữ', 'Exynos 990 8 nhân', '	8 GB', 'Android 10.0', '10 MP', 'Chính 108 MP & Phụ 12 MP, 12 MP, cảm biến Laser AF', '128gb', 'Tùy bộ nhớ', 'Mali-G77 MP11', '8 nhân', '2 nhân 2.73 GHz, 2 nhân 2.5 GHz & 4 nhân 2.0 Ghz', 'có', 'có', 'có', 'Mali-G77 MP11', '3G', '', 'Sim thường', '2', 'có', 'có', 'có', 'có', 'Hỗ trợ thẻ nhớ 128gb', 'Có', 'Đang Cập Nhật', 'Dài 164.8 mm - Ngang 77.2 mm - Dày 8.1 mm', '208 g', '4500 mAh'),
(93, 11, 'Chính: Dynamic AMOLED, Phụ: Super AMOLED', 'Full HD+ (1768 x 2208 Pixels)', 'Chính 7.59\" & Phụ 6.23\"', 'Kính cường lực Corning Gorilla Glass Victus', 'Hỗ trợ đa ngôn ngữ', 'Snapdragon 865+ 8 nhân', '12gb', 'Android 10.0', '10 MP', '3 camera 12 MP', '256 Gb', 'Tùy bộ nhớ', 'Adreno 650', 'Snapdragon 865+ 8 nhân', '1 nhân 3.09 Ghz & 3 nhân 2.4 Ghz & 4 nhân 1.8 Ghz', 'có', 'có', 'có', 'Snapdragon 865+ 8 nhân', '3G', '', 'Sim thường', '2', 'có', 'có', 'có', 'có', 'Hỗ trợ thẻ nhớ 128gb', 'Có', 'Đang Cập Nhật', 'Mở: Dài 159.2 mm - Ngang 128.2 mm - Dày 6.9 mm; Gập: Dài 159.2 mm - Ngang 68 mm ', '282 g', '4500 mAh'),
(94, 12, 'IPS LCD, 6.67\", Full HD+', 'Full HD+ (1080 x 2440 Pixels)', '6.67\"', 'Kính cường lực Corning Gorilla Glass 5', 'Hỗ trợ đa ngôn ngữ', 'Snapdragon 865 8 nhân', '	8 GB', 'Android 10.0', '20 MP', 'Chính 108 MP & Phụ 13 MP, 5 MP', '256 Gb', 'Tùy bộ nhớ', 'Adreno 650', '8 nhân', '1 nhân 2.84 GHz, 3 nhân 2.42 GHz & 4 nhân 1.8 GHz', 'có', 'có', 'có', 'Adreno 650', '3G', '', 'Sim thường', '2', 'có', 'có', 'có', 'có', 'Đang cập nhật', 'Có', 'Đang Cập Nhật', 'Dài 165.1 mm - Ngang 76.4 mm - Dày 9.33 mm', '218 g', '5000 mAh'),
(95, 13, 'AMOLED, 6.47\", Full HD+', 'Full HD+ (1080 x 2340 Pixels)', '6.47\"', 'Kính cường lực Corning Gorilla Glass 5', 'Hỗ trợ đa ngôn ngữ', 'Snapdragon 730G 8 nhân', '	8 GB', 'Android 10.0', '16 MP', 'Chính 64 MP & Phụ 8 MP, 5 MP, 2 MP', '128gb', 'Tùy bộ nhớ', 'Adreno 618', '8 nhân', '2 nhân 2.2 GHz & 6 nhân 1.8 GHz', 'có', 'có', 'có', 'Adreno 618', '3G', '', 'Sim thường', '2', 'có', 'có', 'có', 'có', 'Hỗ trợ thẻ nhớ 128gb', 'Có', 'Đang Cập Nhật', 'Dài 157.8 mm - Ngang 74.2 mm - Dày 9.67 mm', '204 g', '5260 mAh'),
(96, 14, 'IPS LCD, 6.67\", Full HD+', 'Full HD+ (1080 x 2400 Pixels)', '6.67\"', 'Kính cường lực Corning Gorilla Glass 5', 'Hỗ trợ đa ngôn ngữ', 'Snapdragon 720G 8 nhân', '	6 GB', 'Android 10.0', '16 MP', 'Chính 64 MP & Phụ 8 MP, 5 MP, 2 MP', '128gb', 'Tùy bộ nhớ', 'Adreno 618', '8 nhân', '2 nhân 2.3 Ghz & 6 nhân 1.8 Ghz', 'có', 'có', 'có', 'Adreno 618', '3G', '', 'Sim thường', '2', 'có', 'có', 'có', 'có', 'Hỗ trợ thẻ nhớ 128gb', 'Có', 'Đang Cập Nhật', 'Dài 165.7 mm - Ngang 76.68 mm - Dày 8.8 mm', '209 g', '5020 mAh'),
(97, 15, 'AMOLED, 6.78\", Quad HD+ (2K+)', '2K+ (1440 x 3168 Pixels)', '6.78\"', 'Kính cường lực Corning Gorilla Glass 6', 'Hỗ trợ đa ngôn ngữ', 'Snapdragon 865 8 nhân', '12gb', 'Android 10.0', '32 MP', 'Chính 48 MP & Phụ 13 MP, 12 MP', '256 Gb', 'Đang Cập nhật', 'Adreno 650', '8 nhân', '1 nhân 2.84 GHz, 3 nhân 2.42 GHz & 4 nhân 1.8 GHz', 'có', 'có', 'có', 'Adreno 650', '3G', '', 'Sim thường', '2', 'có', 'có', 'có', 'có', 'Đang cập nhật', 'Có', 'Đang Cập Nhật', 'Dài 164.9 mm - Ngang 74.5 mm - Dày 8 mm', 'Màu đen 209 g - Màu xanh 192 g', '4200 mAh'),
(98, 16, 'Sunlight Super AMOLED, 6.4\", Full HD+', 'Full HD+ (1080 x 2400 Pixels)', '6.4\"', 'Kính cường lực Corning Gorilla Glass 5', 'Hỗ trợ đa ngôn ngữ', 'MediaTek Helio P95 8 nhân', '	8 GB', 'Android 10.0', 'Chính 44 MP & Phụ 2 MP', 'Chính 64 MP & Phụ 13 MP, 8 MP, 2 MP', '128gb', 'Đang Cập nhật', 'IMG PowerVR GM94446', '8 nhân', '2 nhân 2.2 GHz & 6 nhân 2.0 GHz', 'có', 'có', 'có', 'IMG PowerVR GM94446', '3G', '', 'Sim thường', '2', 'có', 'có', 'có', 'có', 'Đang cập nhật', 'Có', 'Đang Cập Nhật', 'Dài 158.8 mm - Ngang 73.4 mm - Dày 8.1 mm', '175 g', '4025 mAh'),
(99, 17, 'Chính: Dynamic AMOLED, Phụ: Super AMOLED, 6.7\", Quad HD (2K)', 'Full HD+ (1080 x 2636 Pixels)', '6.7\"', 'Kính siêu mỏng Ultra Thin Glass (UTG)', 'Hỗ trợ đa ngôn ngữ', 'Snapdragon 855+ 8 nhân', '	8 GB', 'Android 10.0', '10 MP', '2 camera 12 MP', '256 Gb', 'Tùy bộ nhớ', 'Adreno 640 (700 Hz)', '8 nhân', '1 nhân 2.96 GHz, 3 nhân 2.42 GHz & 4 nhân 1.8 GHz', 'có', 'có', 'có', 'Adreno 640 (700 Hz)', '3G', '', 'Sim thường', '2', 'có', 'có', 'có', 'có', 'Đang cập nhật', 'Có', 'Đang Cập Nhật', 'Dài 167.3 mm - Ngang 73.6 mm - Dày 7.2 mm', '183 g', '3300 mAh'),
(100, 18, 'OLED, 6.7\", Super Retina XDR', '1284 x 2778 Pixels', '6.7\"', 'Kính cường lực Ceramic Shield', 'Hỗ trợ đa ngôn ngữ', 'Apple A14 Bionic 6 nhân', '512 GB', 'iOS 14', '12 MP', '3 camera 12 MP', '512 GB', 'Đang Cập nhật', 'Apple GPU 6 nhân', '6 Nhân', '2 nhân 3.1 GHz & 4 nhân 1.8 GHz', 'có', 'có', 'có', 'Apple GPU 6 nhân', '3G', '', 'Sim thường', '1', 'có', 'có', 'có', 'có', 'Không', 'Có', 'Đang Cập Nhật', 'Dài 160.8 mm - Ngang 78.1 mm - Dày 7.4 mm', '228 g', '3687 mAh'),
(101, 19, 'IPS LCD, 6.1\", Liquid Retina', '828 x 1792 Pixels', '6.1\"', 'Kính cường lực Oleophobic (ion cường lực)', 'Hỗ trợ đa ngôn ngữ', 'Apple A13 Bionic 6 nhân', '256 GB', 'iOS 13', '12 MP', '2 camera 12 MP', '256 Gb', 'Đang Cập nhật', 'Apple A13 Bionic 6 nhân', '6 Nhân', '2 nhân 2.65 GHz & 4 nhân 1.8 GHz', 'có', 'có', 'có', 'Apple A13 Bionic 6 nhân', '3G', '', 'Sim thường', '1', 'có', 'có', 'có', 'có', 'Không', 'Có', 'Đang Cập Nhật', 'Dài 150.9 mm - Ngang 75.7 mm - Dày 8.3 mm', '194 g', '3110 mAh'),
(102, 20, 'OLED, 5.8\", Super Retina', '1125 x 2436 Pixels', '5.8\"', 'Kính cường lực Oleophobic (ion cường lực)', 'Hỗ trợ đa ngôn ngữ', 'Apple A12 Bionic 6 nhân', '64GB', 'iOS 12', '7 MP', '2 camera 12 MP', '64GB', 'Tùy bộ nhớ', 'Apple GPU 4 nhân', '6 Nhân', '2 nhân 2.5 GHz & 4 nhân 1.6 GHz', 'có', 'có', 'có', 'Apple GPU 4 nhân', '3G', '', 'Sim thường', '1', 'có', 'có', 'có', 'có', 'Không', 'Có', 'Đang Cập Nhật', 'Dài 143.6 mm - Ngang 70.9 mm - Dày 7.7 mm', '177 g', '2658 mAh'),
(103, 21, 'AMOLED, 6.4\", Full HD+', 'Full HD+ (1080 x 2400 Pixels)', '6.4\"', 'Kính cường lực Corning Gorilla Glass 5', 'Hỗ trợ đa ngôn ngữ', 'MediaTek Helio P90 8 nhân', '8 GB', 'Android 10.0', '44 MP', 'Chính 48 MP & Phụ 13 MP, 8 MP, 2 MP', '128gb', 'Tùy bộ nhớ', 'IMG PowerVR GM94446', '8 nhân', '2 nhân 2.2 GHz & 6 nhân 2.0 GHz', 'có', 'có', 'có', 'IMG PowerVR GM94446', '3G', '', 'Sim thường', '2', 'có', 'có', 'có', 'có', 'Hỗ trợ thẻ nhớ 128gb', 'Có', 'Đang Cập Nhật', 'Dài 160.2 mm - Ngang 73.3 mm - Dày 7.9 mm', '170 g', '4025 mAh'),
(104, 22, 'TFT LCD, 6.5\", Full HD+', 'Full HD+ (1080 x 2400 Pixels)', '6.5\"', 'Kính cường lực Corning Gorilla Glass 3', 'Hỗ trợ đa ngôn ngữ', 'Snapdragon 665 8 nhân', '	6 GB', 'Android 10.0', '16 MP', 'Chính 12 MP & Phụ 8 MP, 2 MP, 2 MP', '128 GB', 'Tùy bộ nhớ', 'Adreno 610', '8 nhân', '4 nhân 2.0 GHz & 4 nhân 1.8 GHz', 'có', 'có', 'có', 'Adreno 610', '3G', '', 'Sim thường', '2', 'có', 'có', 'có', 'có', 'Hỗ trợ thẻ nhớ 128gb', 'Có', 'Đang Cập Nhật', 'Dài 162 mm - Ngang 75.5 mm - Dày 8.9 mm', '192 g', '5000 mAh'),
(105, 23, 'IPS LCD, 5.7\", HD+', 'HD+ (720 x 1440 Pixels)', '5.7\"', 'Kính cường lực', 'Hỗ trợ đa ngôn ngữ', 'Spreadtrum SC9832E 4 nhân', '1Gb', 'Spreadtrum SC9832E 4 nhân', '5 MP', '5 MP', '16GB', 'Tùy bộ nhớ', 'Mali-400 MP2', '4 Nhân', '4 nhân 1.4 GHz', 'có', 'có', 'có', 'Mali-400 MP2', '3G', '', 'Sim thường', '2', 'có', 'có', 'có', 'có', 'Hỗ trợ thẻ nhớ 128gb', 'Có', 'Đang Cập Nhật', 'Dài 154.8 mm - Ngang 75.59 mm - Dày 8.85 mm', '161 g', '2800 mAh'),
(106, 24, 'TFT LCD, 2.8\", QVGA', 'QVGA (240 x 320 Pixels)', '2.8\"', 'Không có cảm ứng', 'Hỗ trợ đa ngôn ngữ', 'KaiOS', '512 MB', 'KaiOS', 'Không', '2 MP', '4 GB', 'Đang Cập nhật', 'Adreno 304', '4 Nhân', '4 nhân 1.1 GHz', 'có', 'không', 'không', 'Adreno 304', '3G', '', 'Sim thường', '2', 'không', 'không', 'có', 'có', '12Gb', 'Có', 'Không', 'Dài 132.2 mm - Ngang 56.5 mm - Dày 12.3 mm', '110.2 g', '1500 mAh'),
(107, 25, 'Dynamic AMOLED 2X, 6.7\", Quad HD+ (2K+)', '2K+ (1440 x 3200 Pixels)', '6.7\"', 'Kính cường lực Corning Gorilla Glass 6', 'Hỗ trợ đa ngôn ngữ', 'Exynos 990 8 nhân', '	8 GB', 'Android 10.0', '10 MP', 'Chính 12 MP & Phụ 64 MP, 12 MP, TOF 3D', '128 GB', 'Tùy bộ nhớ', 'Mali-G77 MP11', '8 nhân', '2 nhân 2.73 GHz, 2 nhân 2.6 GHz & 4 nhân 2.0 GHz', 'có', 'có', 'có', 'Mali-G77 MP11', '3G', '', 'Sim thường', '2', 'có', 'có', 'có', 'có', 'Hỗ trợ thẻ nhớ 128gb', 'Có', 'Đang Cập Nhật', 'Dài 161.9 mm - Ngang 73.7 mm - Dày 7.8 mm', '188 g', '4500 mAh'),
(108, 26, 'Dynamic AMOLED, 6.8\", Quad HD+ (2K+)', '2K+ (1440 x 3040 Pixels)', '6.8\"', 'Kính cường lực Corning Gorilla Glass', 'Hỗ trợ đa ngôn ngữ', 'Exynos 9825 8 nhân', '12 GB', 'Android 10.0', '10 MP', 'Chính 12 MP & Phụ 12 MP, 16 MP, TOF 3D', '128gb', 'Tùy bộ nhớ', 'IMG PowerVR GM94446', '8 nhân', '2 nhân 2.2 GHz & 6 nhân 2.0 GHz', 'có', 'có', 'có', 'IMG PowerVR GM94446', '3G', '', 'Sim thường', '2', 'có', 'có', 'có', 'có', 'Hỗ trợ thẻ nhớ 128gb', 'Có', 'Đang Cập Nhật', 'Dài 164.8 mm - Ngang 77.2 mm - Dày 8.1 mm', '164 g', '4500 mAh'),
(109, 27, 'IPS LCD, 6.67\", Full HD+', 'Full HD+ (1080 x 2400 Pixels)', '6.67\"', 'Kính cường lực Corning Gorilla Glass 6', 'Hỗ trợ đa ngôn ngữ', 'Snapdragon 865 8 nhân', '	6 GB', 'Android 10.0', '10 MP', '	13.0 MP, Đang cập nhật, CMOS, ƒ/1.8', '64GB', 'Tùy bộ nhớ', 'Adreno 610', '8 nhân', '1 nhân 2.84 GHz, 3 nhân 2.42 GHz & 4 nhân 1.8 GHz', 'có', 'có', 'có', 'Adreno 610', '3G', '', 'Sim thường', '2', 'có', 'có', 'có', 'có', 'Đang cập nhật', 'Có', 'Đang Cập Nhật', 'Dài 165.7 mm - Ngang 76.68 mm - Dày 8.8 mm', '209 g', '5020 mAh'),
(110, 28, 'IPS LCD, 6.53\", Full HD+', 'Full HD+ (1080 x 2340 Pixels)', '6.53\"', 'Kính cường lực Corning Gorilla Glass 5', 'Hỗ trợ đa ngôn ngữ', 'MediaTek Helio G90T 8 nhân', '	8 GB', 'Android 9 (Pie)', '20 MP', 'Chính 64 MP & Phụ 8 MP, 2 MP, 2 MP', '128 GB', 'Đang Cập nhật', 'Mali-G76 MC4', '8 nhân', '2 nhân 2.05 GHz & 6 nhân 2.0 GHz', 'có', 'có', 'có', 'Mali-G76 MC4', '3G', '', 'Sim thường', '2', 'có', 'có', 'có', 'có', 'Hỗ trợ thẻ nhớ 128gb', 'Có', 'Đang Cập Nhật', 'Dài 161.3 mm - Ngang 76.4 mm - Dày 8.8 mm', '199 g', '4500 mAh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsp`
--

CREATE TABLE `danhmucsp` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucsp`
--

INSERT INTO `danhmucsp` (`id`, `tendanhmuc`) VALUES
(1, 'Apple'),
(2, 'Nokia'),
(3, 'Oppo'),
(4, 'Samsung'),
(5, 'Xiaomi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma_hoadon` int(11) NOT NULL,
  `id_kh` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `ten_kh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sp_mua` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_mua` timestamp NOT NULL DEFAULT current_timestamp(),
  `xu_ly` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tong_tien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`ma_hoadon`, `id_kh`, `ten_kh`, `email`, `sdt`, `dia_chi`, `sp_mua`, `ngay_mua`, `xu_ly`, `tong_tien`) VALUES
(19, 'nhvong', 'Nguyễn Hữu Vọng', 'nguyenhuuvong.nhv@gmail.com', '0389251012', 'Quảng Nam', '4,1,30990000|10,1,24990000|', '2020-12-16 07:08:04', 'Chưa xử lý', 55980000),
(20, 'nhvong', 'Nguyễn Hữu Vọng', 'nguyenhuuvong.nhv@gmail.com', '0389251012', 'Quảng Nam', '4,1,30990000|6,1,10990000|15,1,19990000|', '2021-01-16 13:22:52', 'Hoàn thành', 61970000),
(21, 'nhvong', 'Nguyễn Hữu Vọng', 'nguyenhuuvong.nhv@gmail.com', '0389251012', 'Quảng Nam', '11,1,50000000|', '2021-01-16 13:23:00', 'Chưa xử lý', 50000000),
(22, 'nhvong', 'Nguyễn Hữu Vọng', 'nguyenhuuvong.nhv@gmail.com', '0389251012', 'Quảng Nam', '10,1,24990000|13,1,9490000|28,1,5990000|', '2021-01-16 13:23:15', 'Đã tiếp nhận', 40470000),
(23, 'nhminh', 'Ngô Hoàng Minh', 'hoangminh@gmail.com', '0919873677', '200 Văn Tiến Dũng, Hòa Xuân, Cẩm Lệ, Đà Nẵng', '9,3,7210000|', '2021-01-16 13:25:00', 'Chưa xử lý', 21630000),
(24, 'leuyen', 'Lê Uyên', 'leuyen@gmail.com', '0978978999', 'Quảng Nam', '18,1,42990000|', '2021-01-16 13:27:17', 'Hoàn thành', 42990000),
(25, 'nhvong', 'Nguyễn Hữu Vọng', 'nguyenhuuvong.nhv@gmail.com', '0389251012', 'Quảng Nam', '7,1,2790000|', '2021-01-18 05:13:01', 'Hoàn thành', 2790000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `navbar`
--

CREATE TABLE `navbar` (
  `id` int(11) NOT NULL,
  `navitemname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `navbar`
--

INSERT INTO `navbar` (`id`, `navitemname`, `content`) VALUES
(1, 'TRẢ GÓP', 'Trả góp 0%'),
(4, 'BẢO HÀNH', 'Bảo hành 36 tháng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `IdND` int(11) NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 1,
  `ma_quyen` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`IdND`, `hoten`, `user`, `pass`, `gioitinh`, `sdt`, `email`, `diachi`, `trangthai`, `ma_quyen`) VALUES
(3, 'Nguyễn Hữu Vọng', 'nhvong', '9baaa3b9fb8e1dad2d4c1ba8a08fc94c', 'Nam', '0389251012', 'nguyenhuuvong.nhv@gmail.com', 'Quảng Nam', 1, 3),
(4, 'Ngô Hoàng Minh', 'nhminh', '9baaa3b9fb8e1dad2d4c1ba8a08fc94c', 'Nam', '0919873677', 'hoangminh@gmail.com', '200 Văn Tiến Dũng, Hòa Xuân, Cẩm Lệ, Đà Nẵng', 1, 3),
(7, 'Quản Trị Viên', 'admin', 'c3284d0f94606de1fd2af172aba15bf3', 'Nam', '0978978901', 'admin@tvt.com', 'Đà Nẵng', 1, 1),
(8, 'Nhân Viên', 'nhanvien', '6165b77a5ee53f7487842b7bc3089ead', 'Nữ', '0378987654', 'nhanvien@tvt.com', 'Đà Nẵng', 1, 2),
(9, 'Lê Uyên', 'leuyen', '9baaa3b9fb8e1dad2d4c1ba8a08fc94c', 'Nữ', '0978978999', 'leuyen@gmail.com', 'Quảng Nam', 1, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phan_quyen`
--

CREATE TABLE `phan_quyen` (
  `ma_quyen` int(11) NOT NULL,
  `ten_quyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chi_tiet` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phan_quyen`
--

INSERT INTO `phan_quyen` (`ma_quyen`, `ten_quyen`, `chi_tiet`) VALUES
(1, 'Quản trị', 'admin'),
(2, 'Nhân viên', 'nv1'),
(3, 'Người dùng', 'khách hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `masp` int(11) NOT NULL,
  `tensp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `giasp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `loaisp` int(11) NOT NULL,
  `img` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img1` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img2` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img3` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img4` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `thongtin` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `noi_bat` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mua_nhieu` int(11) DEFAULT NULL,
  `yeu_thich` int(11) DEFAULT NULL,
  `rate1` int(11) DEFAULT NULL,
  `rate2` int(11) DEFAULT NULL,
  `rate3` int(11) DEFAULT NULL,
  `rate4` int(11) DEFAULT NULL,
  `rate5` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`masp`, `tensp`, `giasp`, `soluong`, `loaisp`, `img`, `img1`, `img2`, `img3`, `img4`, `thongtin`, `noi_bat`, `mua_nhieu`, `yeu_thich`, `rate1`, `rate2`, `rate3`, `rate4`, `rate5`) VALUES
(4, 'IPHONE 12 PRO', 30990000, 6, 1, 'ip-12-pro-xanh-1.png', 'iphone-12-pro-2.jpg', 'iphone-12-pro-3.jpg', 'iphone-12-pro-8.jpg', 'iphone-12-pro-9.jpeg', '', 'có', 9, 8, 0, 0, 0, 1, 3),
(5, 'IPHONE 12', 22990000, 50, 1, 'ip12_1.png', 'ip12_2.jpg', 'ip12_3.jpg', 'ip12_4.jpg', 'ip12_5.jpg', '', 'không', 8, 7, 1, 0, 0, 0, 1),
(6, 'NOKIA 8.3', 10990000, 44, 2, 'nokia1.png', 'nokia2.png', 'nokia1.1.png', 'nokia1.3.png', 'nokia1.4.jpg', '', 'không', 8, 3, 0, 0, 0, 0, 0),
(7, 'NOKIA 5.3', 2790000, 55, 2, 'nokia2.0.png', 'nka2.1.png', 'nka2.3.png', 'nka2.4.jpg', 'nka2.1.png', '', 'không', 8, 0, 0, 0, 0, 0, 0),
(8, 'NOKIA 2.4', 2290000, 13, 2, 'nka3.1.png', 'nka3.2.png', 'nka3.png', 'nka3.3.png', 'nka3.4.jpg', '', 'không', 0, 3, 0, 0, 0, 0, 0),
(9, 'OPPO RENO4', 7210000, 245, 3, 'op1.0.png', 'op1.1.png', 'op1.2.png', 'op1.4.jpg', 'op1.0.png', '', 'không', 5, 3, 0, 0, 0, 0, 0),
(10, 'SAMSUNG GALAXY NOTE 20 ULTRA', 24990000, 400, 4, 'ss.1.1.jpg', 'ss.1.jpg', 'ss.1.2.jpg', 'ss.1.3.jpg', 'ss.1.4.jpg', '', 'có', 5, 5, 0, 0, 0, 0, 0),
(11, 'SAMSUNG GALAXY Z FOLD2 5G', 50000000, 55, 4, 'ss2.1.jpg', 'ss2.2.jpg', 'ss2.3.jpg', 'ss2.4.jpg', 'ss2.jpg', '', 'có', 1, 2, 0, 0, 0, 0, 0),
(12, 'XIAOMI MI 10T PRO 5G', 12990000, 30, 5, 'x1.jpg', 'x1.4.jpg', 'x1.3.jpg', 'x1.2.jpg', 'x1.1.jpg', '', 'có', 0, 0, 0, 0, 0, 0, 0),
(13, 'XIAOMI MI NOTE 10 LITE', 9490000, 100, 5, 'x2.jpg', 'x2.1.jpg', 'x2.2.jpg', 'x2.3.jpg', 'x2.4.jpg', '', 'không', 1, 0, 0, 0, 0, 0, 0),
(14, 'XIAOMI REDMI NOTE 9 PRO', 6990000, 111, 5, 'x3.jpg', 'x3.5.jpg', 'x3.4.jpg', 'x3.3.jpg', 'x3.2.jpg', '', 'không', 2, 2, 0, 0, 0, 0, 0),
(15, 'OPPO FIND X2', 19990000, 233, 3, 'o3.5.jpg', 'o3.4.jpg', 'o3.3.jpg', 'o3.2.jpg', 'o3.1.jpg', '', 'không', 1, 0, 0, 0, 0, 0, 0),
(16, 'OPPO RENO3 PRO', 8990000, 322, 3, 'o2.jpg', 'o2.3.jpg', 'o2.2.jpg', 'o2.4.jpg', 'o2.1.jpg', '', 'không', 3, 4, 0, 0, 0, 0, 0),
(17, 'SAMSUNG GALAXY Z FLIP', 36000000, 242, 4, 's3.jpg', 's3.1.jpg', 's3.2.jpg', 's3.3.jpg', 's3.4.jpg', '', 'không', 1, 0, 0, 0, 0, 0, 0),
(18, 'IPHONE 12 PRO MAX 512GB', 42990000, 123, 1, 'i2.jpg', 'i3.jpg', 'i1.jpg', 'i4.jpg', 'i5.jpg', '', 'có', 3, 0, 0, 0, 0, 0, 0),
(19, 'IPHONE 11 256GB (HỘP MỚI)', 22990000, 256, 1, 'i2.1.jpg', 'i2.5.jpg', 'i2.3.jpg', 'i2.6.jpg', 'i2.2.jpg', '', 'có', 1, 0, 0, 0, 0, 0, 0),
(20, 'IPHONE XS 64GB', 17490000, 1234, 1, 'i3.5.jpg', 'i3.4.jpg', 'i3.1.jpg', 'i3.2.jpg', 'i3.3.jpg', '', 'không', 0, 1, 0, 0, 0, 0, 0),
(21, 'OPPO RENO3', 6990000, 69, 3, 'o4.jpg', 'o4.``.jpg', 'o4.2.jpg', 'o4.5.jpg', 'o4.3.jpg', '', 'không', 0, 2, 0, 0, 0, 0, 0),
(22, 'OPPO A52', 5990000, 123, 3, 'o5.jpg', 'o5.1.jpg', 'o5.2.jpg', 'o5.3.jpg', 'o5.4.jpg', '', 'không', 0, 0, 0, 0, 0, 0, 0),
(23, 'NOKIA C2', 1490000, 123, 2, 'n4.jpg', 'n4.3.jpg', 'n4.4.jpg', 'n4.2.jpg', 'n4.1.jpg', '', 'không', 0, 0, 0, 0, 0, 0, 0),
(24, 'NOKIA 8000 4G', 1790000, 222, 2, 'n5.jpg', 'n5.1.jpg', 'n5.2.jpg', 'n5.3.jpg', 'n5.4.jpg', '', 'không', 1, 0, 0, 0, 0, 0, 0),
(25, 'SAMSUNG GALAXY S20+', 23990000, 22, 4, 's4.jpg', 's4.4.jpg', 's4.1.jpg', 's4.2.jpg', 's4.3.jpg', '', 'không', 1, 0, 0, 0, 0, 0, 0),
(26, 'SAMSUNG GALAXY NOTE 10+', 17000000, 17, 4, 's5.jpg', 's5.4.jpg', 's5.2.jpg', 's5.3.jpg', 's5.1.jpg', '', 'không', 0, 0, 0, 0, 0, 0, 0),
(27, 'XIAOMI REDMI NOTE 9 PRO', 6450000, 65, 5, 'x4.jpg', 'x4.1.jpg', 'x4.2.jpg', 'x4.3.jpg', 'x4.4.jpg', '', 'không', 0, 0, 0, 0, 0, 0, 0),
(28, 'XIAOMI REDMI NOTE 8 PRO', 5990000, 59, 5, 'x5.jpg', 'x5.1.jpg', 'x5.2.jpg', 'x5.3.jpg', 'x5.4.jpg', '', 'không', 2, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slideshow`
--

CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `loai` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slideshow`
--

INSERT INTO `slideshow` (`id`, `name`, `note`, `loai`) VALUES
(3, 'Banner3.jpg', 'active', 'sl'),
(4, 'slide1.png', '', 'sl'),
(7, 'slide2.png', '', 'sl'),
(8, 'slide3.png', '', 'sl'),
(13, 'deal.png', 'ảnh 1', 'qc'),
(14, 'guaranteed.png', 'ảnh 2', 'qc'),
(17, 'free-shipping.png', 'ảnh 3', 'qc');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `cau_hinh`
--
ALTER TABLE `cau_hinh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `danhmucsp`
--
ALTER TABLE `danhmucsp`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma_hoadon`);

--
-- Chỉ mục cho bảng `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`IdND`),
  ADD KEY `FK_nguoidung_phan_quyen` (`ma_quyen`);

--
-- Chỉ mục cho bảng `phan_quyen`
--
ALTER TABLE `phan_quyen`
  ADD PRIMARY KEY (`ma_quyen`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `loaisp` (`loaisp`);

--
-- Chỉ mục cho bảng `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `cau_hinh`
--
ALTER TABLE `cau_hinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT cho bảng `danhmucsp`
--
ALTER TABLE `danhmucsp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma_hoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `navbar`
--
ALTER TABLE `navbar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `IdND` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `phan_quyen`
--
ALTER TABLE `phan_quyen`
  MODIFY `ma_quyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `san_pham` (`masp`);

--
-- Các ràng buộc cho bảng `cau_hinh`
--
ALTER TABLE `cau_hinh`
  ADD CONSTRAINT `cau_hinh_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `san_pham` (`masp`);

--
-- Các ràng buộc cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `FK_nguoidung_phan_quyen` FOREIGN KEY (`ma_quyen`) REFERENCES `phan_quyen` (`ma_quyen`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`loaisp`) REFERENCES `danhmucsp` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
