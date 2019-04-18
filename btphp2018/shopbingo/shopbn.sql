-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 11, 2018 lúc 05:52 AM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopbn`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(0, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsp`
--

CREATE TABLE `chitietsp` (
  `id_sp` int(11) NOT NULL,
  `tensp` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `id_loaisp` int(100) NOT NULL,
  `tinhtrang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietsp`
--

INSERT INTO `chitietsp` (`id_sp`, `tensp`, `masp`, `hinhanh`, `gia`, `soluong`, `id_loaisp`, `tinhtrang`, `mota`) VALUES
(46, 'Nháº«n CÃ¡', 'NC1', 'N8.jpg', '150000', 4, 19, '1', '<p>Cháº¥t Liá»‡u: Báº¡c</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° H&igrave;nh</p>\r\n<p>Báº¡c c&oacute; t&aacute;c dá»¥ng c&acirc;n báº±ng c&aacute;c nguá»“n nÄƒng lÆ°á»£ng trong cÆ¡ thá»ƒ, máº¡ch m&aacute;u c&oacute; thá»ƒ Ä‘&agrave;n há»“i tá»‘t nhá» báº¡c. Ngo&agrave;i ra báº¡c c&ograve;n c&oacute; t&aacute;c dá»¥ng chá»¯a l&agrave;nh c&aacute;c cÆ¡n Ä‘au khá»›p.</p>\r\n<p>&nbsp;</p>'),
(47, 'Nháº«n LÃ¡', 'NL3', 'N3.jpg', '250000', 7, 19, '1', '<p>Cháº¥t Liá»‡u: Báº¡c</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° H&igrave;nh</p>\r\n<p>Báº¡c c&oacute; t&aacute;c dá»¥ng c&acirc;n báº±ng c&aacute;c nguá»“n nÄƒng lÆ°á»£ng trong cÆ¡ thá»ƒ, máº¡ch m&aacute;u c&oacute; thá»ƒ Ä‘&agrave;n há»“i tá»‘t nhá» báº¡c. Ngo&agrave;i ra báº¡c c&ograve;n c&oacute; t&aacute;c dá»¥ng chá»¯a l&agrave;nh c&aacute;c cÆ¡n Ä‘au khá»›p.</p>\r\n<p>&nbsp;</p>'),
(48, 'Nháº«n Kim CÆ°Æ¡ng', 'NKC1', 'N1.jpg', '450000', 3, 19, '1', '<p>Cháº¥t Liá»‡u: Báº¡c</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° H&igrave;nh</p>\r\n<p>Báº¡c c&oacute; t&aacute;c dá»¥ng c&acirc;n báº±ng c&aacute;c nguá»“n nÄƒng lÆ°á»£ng trong cÆ¡ thá»ƒ, máº¡ch m&aacute;u c&oacute; thá»ƒ Ä‘&agrave;n há»“i tá»‘t nhá» báº¡c. Ngo&agrave;i ra báº¡c c&ograve;n c&oacute; t&aacute;c dá»¥ng chá»¯a l&agrave;nh c&aacute;c cÆ¡n Ä‘au khá»›p.</p>\r\n<p>&nbsp;</p>'),
(49, 'Nháº«n Titan', 'NT2', 'N2.png', '500000', 5, 19, '1', '<p>Cháº¥t Liá»‡u: Titan</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° H&igrave;nh</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>'),
(50, 'DÃ¢y LÆ°ng Loáº¡i 1', 'DL1', 'DL01.jpg', '150000', 10, 12, '1', '<p>Cháº¥t Liá»‡u: Da</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° H&igrave;nh</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>'),
(51, 'DÃ¢y LÆ°ng Loáº¡i 2', 'DL7', 'DL07.jpg', '170000', 9, 12, '1', '<p>Cháº¥t Liá»‡u: Da B&oacute;ng</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° H&igrave;nh</p>\r\n<p>&nbsp;</p>'),
(52, 'KhÄƒn Len', 'K9', 'K9.jpg', '210000', 8, 14, '1', '<p>Cháº¥t Liá»‡u: Len</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° H&igrave;nh</p>\r\n<p>&nbsp;</p>'),
(53, 'KhÄƒn Loáº¡i 1', 'KL10', 'K10.jpg', '180000', 6, 14, '1', '<p>Cháº¥t Liá»‡u: Cotton</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° H&igrave;nh</p>\r\n<p>&nbsp;</p>'),
(54, 'GÄƒng MÃ¨o', 'GM7', 'GT7.jpg', '150000', 12, 14, '1', '<p>Cháº¥t Liá»‡u: Ná»‰</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° H&igrave;nh</p>\r\n<p>&nbsp;</p>'),
(55, 'GÄƒng Chá»‘ng Náº¯ng', 'GCN5', 'GT5.jpg', '50000', 20, 14, '1', '<p>Cháº¥t Liá»‡u: Váº£i thun co d&atilde;n 4 chiá»u</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° H&igrave;nh</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>'),
(56, 'KÃ­nh Máº¯t Loáº¡i 1', 'KM2', 'KM2.jpg', '180000', 7, 13, '1', '<p>&nbsp;</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° H&igrave;nh</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>'),
(57, 'KÃ­nh Máº¯t Lá»¥c GiÃ¡c', 'KM5', 'KM5.jpg', '250000', 15, 13, '1', '<p>M&agrave;u Sáº¯c : NhÆ° h&igrave;nh</p>'),
(58, 'KhuyÃªn Titan', 'KT6', 'KT06.jpg', '120000', 20, 16, '1', '<p>Cháº¥t Liá»‡u: Titan</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° H&igrave;nh</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>'),
(59, 'KhuyÃªn HÃ¬nh CÃ¡nh ', 'KC9', 'KT09.png', '150000', 11, 16, '1', '<p>Cháº¥t Liá»‡u: Báº¡c</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° H&igrave;nh</p>\r\n<p>Báº¡c c&oacute; t&aacute;c dá»¥ng c&acirc;n báº±ng c&aacute;c nguá»“n nÄƒng lÆ°á»£ng trong cÆ¡ thá»ƒ, máº¡ch m&aacute;u c&oacute; thá»ƒ Ä‘&agrave;n há»“i tá»‘t nhá» báº¡c. Ngo&agrave;i ra báº¡c c&ograve;n c&oacute; t&aacute;c dá»¥ng chá»¯a l&agrave;nh c&aacute;c cÆ¡n Ä‘au khá»›p.</p>\r\n<p>&nbsp;</p>'),
(60, 'KhuyÃªn Giá»t NÆ°á»›c', 'KGN10', 'KT10.jpg', '100000', 8, 16, '1', '<p>Cháº¥t Liá»‡u: Báº¡c</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° H&igrave;nh</p>\r\n<p>Báº¡c c&oacute; t&aacute;c dá»¥ng c&acirc;n báº±ng c&aacute;c nguá»“n nÄƒng lÆ°á»£ng trong cÆ¡ thá»ƒ, máº¡ch m&aacute;u c&oacute; thá»ƒ Ä‘&agrave;n há»“i tá»‘t nhá» báº¡c. Ngo&agrave;i ra báº¡c c&ograve;n c&oacute; t&aacute;c dá»¥ng chá»¯a l&agrave;nh c&aacute;c cÆ¡n Ä‘au khá»›p.</p>\r\n<p>&nbsp;</p>'),
(61, 'KhuyÃªn ÄÃ­nh ÄÃ¡', 'KD3', 'KT03.jpg', '250000', 4, 16, '1', '<p>Cháº¥t Liá»‡u: Má»¹ K&yacute;</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° H&igrave;nh</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>'),
(62, 'Láº¯c ChÃ¢n Quáº£ ChuÃ´ng', 'LC7', 'LTLC7.jpg', '150000', 10, 17, '1', '<p>Cháº¥t Liá»‡u: Báº¡c</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° H&igrave;nh</p>\r\n<p>Báº¡c c&oacute; t&aacute;c dá»¥ng c&acirc;n báº±ng c&aacute;c nguá»“n nÄƒng lÆ°á»£ng trong cÆ¡ thá»ƒ, máº¡ch m&aacute;u c&oacute; thá»ƒ Ä‘&agrave;n há»“i tá»‘t nhá» báº¡c. Ngo&agrave;i ra báº¡c c&ograve;n c&oacute; t&aacute;c dá»¥ng chá»¯a l&agrave;nh c&aacute;c cÆ¡n Ä‘au khá»›p.</p>\r\n<p>&nbsp;</p>'),
(63, 'Láº¯c Tay Hoa', 'LT9', 'LTLC9.jpg', '180000', 5, 17, '1', '<p>Cháº¥t Liá»‡u: Báº¡c</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° H&igrave;nh</p>\r\n<p>Báº¡c c&oacute; t&aacute;c dá»¥ng c&acirc;n báº±ng c&aacute;c nguá»“n nÄƒng lÆ°á»£ng trong cÆ¡ thá»ƒ, máº¡ch m&aacute;u c&oacute; thá»ƒ Ä‘&agrave;n há»“i tá»‘t nhá» báº¡c. Ngo&agrave;i ra báº¡c c&ograve;n c&oacute; t&aacute;c dá»¥ng chá»¯a l&agrave;nh c&aacute;c cÆ¡n Ä‘au khá»›p.</p>\r\n<p>&nbsp;</p>'),
(64, 'Láº¯c Tay Cá» 4 LÃ¡', 'LT3', 'LTLC3.jpg', '150.000', 7, 17, '1', '<p>Cháº¥t Liá»‡u: Báº¡c</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° H&igrave;nh</p>\r\n<p>Báº¡c c&oacute; t&aacute;c dá»¥ng c&acirc;n báº±ng c&aacute;c nguá»“n nÄƒng lÆ°á»£ng trong cÆ¡ thá»ƒ, máº¡ch m&aacute;u c&oacute; thá»ƒ Ä‘&agrave;n há»“i tá»‘t nhá» báº¡c. Ngo&agrave;i ra báº¡c c&ograve;n c&oacute; t&aacute;c dá»¥ng chá»¯a l&agrave;nh c&aacute;c cÆ¡n Ä‘au khá»›p.</p>\r\n<p>&nbsp;</p>'),
(65, 'Láº¯c Tay Quáº£ ChuÃ´ng', 'LT10', 'LTLC10.jpg', '180000', 8, 17, '1', '<p>Cháº¥t Liá»‡u: Báº¡c</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° H&igrave;nh</p>\r\n<p>Báº¡c c&oacute; t&aacute;c dá»¥ng c&acirc;n báº±ng c&aacute;c nguá»“n nÄƒng lÆ°á»£ng trong cÆ¡ thá»ƒ, máº¡ch m&aacute;u c&oacute; thá»ƒ Ä‘&agrave;n há»“i tá»‘t nhá» báº¡c. Ngo&agrave;i ra báº¡c c&ograve;n c&oacute; t&aacute;c dá»¥ng chá»¯a l&agrave;nh c&aacute;c cÆ¡n Ä‘au khá»›p.</p>\r\n<p>&nbsp;</p>'),
(66, 'Láº¯c ChÃ¢n Hoa Sao', 'LC9', 'LTLC9.jpg', '180000', 9, 17, '1', '<p>Cháº¥t Liá»‡u: Báº¡c</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° H&igrave;nh</p>\r\n<p>Báº¡c c&oacute; t&aacute;c dá»¥ng c&acirc;n báº±ng c&aacute;c nguá»“n nÄƒng lÆ°á»£ng trong cÆ¡ thá»ƒ, máº¡ch m&aacute;u c&oacute; thá»ƒ Ä‘&agrave;n há»“i tá»‘t nhá» báº¡c. Ngo&agrave;i ra báº¡c c&ograve;n c&oacute; t&aacute;c dá»¥ng chá»¯a l&agrave;nh c&aacute;c cÆ¡n Ä‘au khá»›p.</p>\r\n<p>&nbsp;</p>'),
(67, 'MÅ© LÆ°á»¡i Trai', 'M10', 'M10.jpg', '150000', 18, 20, '1', '<p>Cháº¥t Liá»‡u: Kaki</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° H&igrave;nh</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>'),
(68, 'MÅ© VÃ nh', 'M4', 'M4.jpg', '180000', 5, 20, '1', '<p>Cháº¥t Liá»‡u: Váº£i Th&ocirc;</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° h&igrave;nh</p>'),
(69, 'MÅ© LÆ°á»¡i Trai 2', 'M11', 'M11.jpg', '100000', 9, 20, '1', '<p>Cháº¥t Liá»‡u: Váº£i da</p>\r\n<p>M&agrave;u Sáº¯c : NhÆ° h&igrave;nh</p>'),
(70, 'VÆ°Æ¡ng Niá»‡m', 'VN1', 'PKT02.jpg', '250000', 8, 11, '1', '<p>Cháº¥t Liá»‡u: Báº¡c</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° H&igrave;nh</p>\r\n<p>Báº¡c c&oacute; t&aacute;c dá»¥ng c&acirc;n báº±ng c&aacute;c nguá»“n nÄƒng lÆ°á»£ng trong cÆ¡ thá»ƒ, máº¡ch m&aacute;u c&oacute; thá»ƒ Ä‘&agrave;n há»“i tá»‘t nhá» báº¡c. Ngo&agrave;i ra báº¡c c&ograve;n c&oacute; t&aacute;c dá»¥ng chá»¯a l&agrave;nh c&aacute;c cÆ¡n Ä‘au khá»›p.</p>\r\n<p>&nbsp;</p>'),
(71, 'XÆ°á»£c LÃ¡', 'XL3', 'PKT03.jpg', '180000', 10, 11, '1', '<p>Cháº¥t Liá»‡u: Titan</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° H&igrave;nh</p>\r\n<p>&nbsp;</p>'),
(72, 'DÃ¢y  Buá»™c TÃ³c', 'DBT5', 'PKT05.jpg', '20000', 8, 11, '1', '<p>Cháº¥t Liá»‡u: Váº£i</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° H&igrave;nh</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>'),
(73, 'VÃ²ng ÄÃ´i TrÃ¡i Tim', 'VC8', 'V8.jpg', '180000', 8, 18, '1', '<p>Cháº¥t Liá»‡u: Báº¡c</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° H&igrave;nh</p>\r\n<p>Báº¡c c&oacute; t&aacute;c dá»¥ng c&acirc;n báº±ng c&aacute;c nguá»“n nÄƒng lÆ°á»£ng trong cÆ¡ thá»ƒ, máº¡ch m&aacute;u c&oacute; thá»ƒ Ä‘&agrave;n há»“i tá»‘t nhá» báº¡c. Ngo&agrave;i ra báº¡c c&ograve;n c&oacute; t&aacute;c dá»¥ng chá»¯a l&agrave;nh c&aacute;c cÆ¡n Ä‘au khá»›p.</p>\r\n<p>&nbsp;</p>'),
(74, 'VÃ²ng Cá»• Cá» 4 LÃ¡', 'V3', 'V3.jpg', '150000', 9, 18, '1', '<p>Cháº¥t Liá»‡u: Báº¡c</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° H&igrave;nh</p>\r\n<p>Báº¡c c&oacute; t&aacute;c dá»¥ng c&acirc;n báº±ng c&aacute;c nguá»“n nÄƒng lÆ°á»£ng trong cÆ¡ thá»ƒ, máº¡ch m&aacute;u c&oacute; thá»ƒ Ä‘&agrave;n há»“i tá»‘t nhá» báº¡c. Ngo&agrave;i ra báº¡c c&ograve;n c&oacute; t&aacute;c dá»¥ng chá»¯a l&agrave;nh c&aacute;c cÆ¡n Ä‘au khá»›p.</p>\r\n<p>&nbsp;</p>'),
(75, 'VÃ²ng Cá»• Máº·t Há»“ Ly', 'V5', 'V5.jpg', '500000', 7, 18, '1', '<p>Cháº¥t Liá»‡u: Báº¡c</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° H&igrave;nh</p>\r\n<p>Báº¡c c&oacute; t&aacute;c dá»¥ng c&acirc;n báº±ng c&aacute;c nguá»“n nÄƒng lÆ°á»£ng trong cÆ¡ thá»ƒ, máº¡ch m&aacute;u c&oacute; thá»ƒ Ä‘&agrave;n há»“i tá»‘t nhá» báº¡c. Ngo&agrave;i ra báº¡c c&ograve;n c&oacute; t&aacute;c dá»¥ng chá»¯a l&agrave;nh c&aacute;c cÆ¡n Ä‘au khá»›p.</p>\r\n<p>&nbsp;</p>'),
(76, 'VÃ²ng Cá»• Máº·t ÄÃ¡', 'VC2', 'V2.jpg', '300000', 2, 18, '1', '<p>Cháº¥t Liá»‡u: Báº¡c Ä‘&iacute;nh Ä‘&aacute;</p>\r\n<p>M&agrave;u Sáº¯c: NhÆ° h&igrave;nh</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangky`
--

CREATE TABLE `dangky` (
  `id` int(11) NOT NULL,
  `tenkhachhang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `diachi` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dangky`
--

INSERT INTO `dangky` (`id`, `tenkhachhang`, `matkhau`, `email`, `dienthoai`, `diachi`) VALUES
(1, '123', '123', '123@gmail.com', 123456, 'HÃ  Ná»™i'),
(2, 'abc', '123', 'abc@gmail.com', 12345678, 'Quang Ninh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id_kh` int(11) NOT NULL,
  `tenkh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sp` int(11) NOT NULL,
  `ghichu` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id_kh`, `tenkh`, `diachi`, `sdt`, `email`, `id_sp`, `ghichu`) VALUES
(1, 'Ã¡dgg', 'Ã dergfrhn', 24235, 'abc@gmail.com', 12345, 'Ã¡dfgjki'),
(6, 'AdAd', 'dfghjk', 1111, '123456@gmail.com', 0, 'dfvghjkl;'),
(7, 'q3rq3w', 'ADASF', 0, 'a@gmail.com', 0, 'AGSDG'),
(8, 'áºº', 'áº¤D', 0, 'aa@gmail.com', 0, 'ÃG');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `id_loaisp` int(11) NOT NULL,
  `tenloaisp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinhtrang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`id_loaisp`, `tenloaisp`, `tinhtrang`) VALUES
(11, 'Phá»¥ Kiá»‡n TÃ³c', '1'),
(12, 'DÃ¢y LÆ°ng', '1'),
(13, 'KÃ­nh Máº¯t', '1'),
(14, 'KhÄƒn, GÄƒng Tay', '1'),
(16, 'KhuyÃªn Tai', '1'),
(17, 'Láº¯c Tay, ChÃ¢n', '1'),
(18, 'VÃ²ng Cá»•', '1'),
(19, 'Nháº«n', '1'),
(20, 'MÅ©', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `idtintuc` int(11) NOT NULL,
  `tentintuc` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `matin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinhtrang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`idtintuc`, `tentintuc`, `matin`, `hinhanh`, `noidung`, `tinhtrang`) VALUES
(2, 'Khuyáº¿n Máº¡i', 'KM1', '1.jpg', '<p>Má»«ng Xu&acirc;n Máº­u Tuáº¥t 2018, B&iacute; Ng&ocirc; Shop k&iacute;nh gá»­i lá»i ch&uacute;c Ä‘áº¿n táº¥t cáº£ Qu&yacute; kh&aacute;ch má»™t nÄƒm má»›i An khang thá»‹nh vÆ°á»£ng - Váº¡n sá»± nhÆ° &yacute;!</p>\r\n<p>&nbsp;</p>\r\n<p>Äáº§u xu&acirc;n nÄƒm má»›i Shop xin gá»­i Ä‘áº¿n Qu&yacute; kh&aacute;ch chÆ°Æ¡ng tr&igrave;nh khuyáº¿n m&atilde;i v&ocirc; c&ugrave;ng háº¥p dáº«n nhÆ° sau:</p>\r\n<p>&nbsp;</p>\r\n<p>+) Khi Qu&yacute; Kh&aacute;ch h&agrave;ng mua h&agrave;ng c&oacute; h&oacute;a Ä‘Æ¡n tr&ecirc;n 300.000 VND sáº½ Ä‘Æ°á»£c giáº£m gi&aacute; 5% tr&ecirc;n tá»•ng gi&aacute; trá»‹ h&oacute;a Ä‘Æ¡n.</p>\r\n<p>+) Vá»›i Ä‘Æ¡n h&agrave;ng tr&ecirc;n 500.000 VND sáº½ Ä‘Æ°á»£c táº·ng 1 sáº£n pháº©m c&oacute; gi&aacute; trá»‹ 50.000 VND.</p>\r\n<p>+) C&ograve;n vá»›i h&oacute;a Ä‘Æ¡n tr&ecirc;n 1.000.000 VND sáº½ Ä‘Æ°á»£c táº·ng 1 sáº£n pháº©m c&oacute; gi&aacute; trá»‹ 100.000 VND v&agrave; 1 m&atilde; giáº£m gi&aacute; 10% cho h&oacute;a Ä‘Æ¡n tiáº¿p theo.</p>\r\n<p>ChÆ°Æ¡ng tr&igrave;nh Ä‘Æ°á»£c &aacute;p dá»¥ng tá»« 1/2-15/2 nÄƒm 2018 cho má»i kh&aacute;ch khi mua trá»±c tiáº¿p táº¡i shop hoáº·c online.</p>\r\n<p>Má»i chi tiáº¿t xin li&ecirc;n há»‡:</p>\r\n<p>ÄT: 88 8888 8888</p>\r\n<p>Email: bingoshop@gmail.com<br />&nbsp; &nbsp; &nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp; &nbsp;</p>', '1'),
(3, '8/3', '8/3', '2.jpg', '<p>Nh&acirc;n dá»‹p 8/3 shop giáº£m 20% cho táº¥t cáº£ c&aacute;c kh&aacute;ch h&agrave;ng mua online</p>\r\n<p>Äáº·c biá»‡t giáº£m 30% cho táº¥t cáº£ kh&aacute;ch h&agrave;ng khi mua trá»±c tiáº¿p táº¡i shop</p>\r\n<p>ChÆ°Æ¡ng tr&igrave;nh &aacute;p dá»¥ng tá»« 7/3-8/3 nÄƒm 2018</p>\r\n<p>Má»i chi tiáº¿t xin li&ecirc;n há»‡:</p>\r\n<p>ÄT: 88 8888 8888</p>\r\n<p>&nbsp;</p>\r\n<p>Email: bingoshop@gmail.com<br />&nbsp;</p>', '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD PRIMARY KEY (`id_sp`);

--
-- Chỉ mục cho bảng `dangky`
--
ALTER TABLE `dangky`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id_loaisp`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`idtintuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `dangky`
--
ALTER TABLE `dangky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id_loaisp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `idtintuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
