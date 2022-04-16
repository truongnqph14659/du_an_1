-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 12, 2022 lúc 05:53 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_binh_luan` int(10) NOT NULL,
  `noi_dung_bl` text NOT NULL,
  `anh_bl` varchar(255) DEFAULT NULL,
  `thoi_gian_bl` date NOT NULL DEFAULT current_timestamp(),
  `parent_bl` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `ma_san_pham` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_binh_luan`, `noi_dung_bl`, `anh_bl`, `thoi_gian_bl`, `parent_bl`, `user_id`, `ma_san_pham`) VALUES
(58, 'anh', '', '2022-04-09', 0, 1, 4),
(59, 'rr', '', '2022-04-09', 58, 1, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_sp`
--

CREATE TABLE `chi_tiet_sp` (
  `ma_ct_sp` int(10) NOT NULL,
  `chung_loai` varchar(225) NOT NULL,
  `part_number` varchar(255) NOT NULL,
  `mau_sac` varchar(255) NOT NULL,
  `CPU` varchar(255) NOT NULL,
  `RAM` varchar(255) NOT NULL,
  `VGA` varchar(255) NOT NULL,
  `ROM` varchar(255) NOT NULL,
  `man_hinh` float NOT NULL,
  `ma_san_pham` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_sp`
--

INSERT INTO `chi_tiet_sp` (`ma_ct_sp`, `chung_loai`, `part_number`, `mau_sac`, `CPU`, `RAM`, `VGA`, `ROM`, `man_hinh`, `ma_san_pham`) VALUES
(1, 'Asus', 'Ideapad Slim 5', 'Đen và vàng', 'Ryzen 7-4700U', '25GB', 'AMD Radeon ', '250GB', 157, 4),
(2, 'Samsung', 'UAV123TR', 'Trắng', 'Intel Core i7', '16GB', 'không', 'SSD 250GB', 135, 9),
(3, 'Dell', '455TR34', 'Bạch Kim', 'Intel Core i7-1165G7 (12MB, upto 4.70GHz)', '8GB DDR4 3200MHz (1x8GB)', 'NVIDIA GeForce MX330 2GB GDDR5', 'SSD 512GB M.2 PCIe NVMe 3x4', 146, 6),
(4, 'Macbook', '443TR6382', 'Trắng', 'Apple M1 chip 8-core', '8GB', '7-core GPU', '\r\nSSD 256GB', 137, 5),
(5, 'Lenovo', '56TR3423', 'Đen', 'AMD Ryzen R5 5600H', '32GB', 'NVIDIA GeForce RTX 3060 6GB GDDR6', '512GB M.2 2280 SSD up to 1TB', 154, 10),
(6, 'Acer', 'TR4424E', 'Đen', 'i51 035G11.00 GHz', '8GB DDR4', 'Card rời, MX330 2GB', '8GB', 134, 11),
(13, 'Apple', '43423t', 'vàng', 'core i7', '26GB', 'AMD Radeon au', '280GB', 498, 13),
(14, 'Apple', '43423', 'Đen và vàng', 'core i7', '26GB', 'AMD Radeon au', '289GB', 457, 14);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `library_img_sp`
--

CREATE TABLE `library_img_sp` (
  `id_img_sp` int(10) NOT NULL,
  `ma_san_pham` int(10) NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `library_img_sp`
--

INSERT INTO `library_img_sp` (`id_img_sp`, `ma_san_pham`, `images`) VALUES
(15, 13, 'http://localhost:80/du_an_1/public/images_stores/images/6254393a4169d184694348_976327999838405_549098381863129312_n.jpg'),
(16, 13, 'http://localhost:80/du_an_1/public/images_stores/images/6254393a422feCapture.JPG'),
(17, 13, 'http://localhost:80/du_an_1/public/images_stores/images/6254393a43cedfpt software.jpg'),
(18, 14, 'http://localhost:80/du_an_1/public/images_stores/images/625457e027f37ct_sp_2.JPG'),
(19, 14, 'http://localhost:80/du_an_1/public/images_stores/images/625447163dbdcCapture.JPG'),
(20, 14, 'http://localhost:80/du_an_1/public/images_stores/images/625447163ef50fpt software.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_san_pham`
--

CREATE TABLE `loai_san_pham` (
  `ma_loai_sp` int(10) NOT NULL,
  `ten_loai` varchar(225) NOT NULL,
  `parent_id` int(10) NOT NULL DEFAULT 0,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai_san_pham`
--

INSERT INTO `loai_san_pham` (`ma_loai_sp`, `ten_loai`, `parent_id`, `slug`) VALUES
(1, 'Asus', 0, 'Asus'),
(2, 'Dell', 0, 'Dell'),
(3, 'Macbook', 0, 'Macbook'),
(4, 'Samsung', 0, 'Samsung'),
(5, 'MSI', 0, 'MSI'),
(6, 'Lennovo', 0, 'Lennovo'),
(7, 'acer', 0, 'acer'),
(8, 'Sony', 0, 'Sony'),
(9, 'Sony a1', 8, 'Sony a1'),
(10, 'Sony a2', 8, 'Sony a2'),
(11, 'LG eclectronic', 0, 'LG eclectronic'),
(12, 'samsung Galasy S20', 4, 'samsung Galasy S20'),
(15, 'Asus X541U', 1, 'Asus X541U'),
(17, 'Asus X542U', 1, 'Asus X542U'),
(19, 'Dell', 0, 'Dell'),
(20, 'dell 205', 2, 'dell 205');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `options`
--

CREATE TABLE `options` (
  `ma_option` int(10) NOT NULL,
  `RAM` varchar(225) NOT NULL,
  `ROM` varchar(255) NOT NULL,
  `VGA` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `options`
--

INSERT INTO `options` (`ma_option`, `RAM`, `ROM`, `VGA`) VALUES
(1, '8GB', '250GB', 'Nvidia GT 1030'),
(2, '16GB', '500GB', 'Nvidia GTX 1050 Ti'),
(3, '32GB', '1TB', 'Nvidia GTX 1650'),
(4, '4GB', '120GB', 'NVIDIA T400');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id_order` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `order_date` date NOT NULL DEFAULT current_timestamp(),
  `status_order` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id_order`, `user_id`, `order_date`, `status_order`) VALUES
(6, 1, '2022-03-28', ''),
(7, 1, '2022-03-28', ''),
(8, 1, '2022-03-28', ''),
(9, 1, '2022-03-28', ''),
(10, 1, '2022-03-28', ''),
(11, 1, '2022-03-28', ''),
(12, 1, '2022-03-28', ''),
(13, 1, '2022-03-28', ''),
(14, 1, '2022-03-28', ''),
(15, 1, '2022-03-30', ''),
(16, 1, '2022-03-30', ''),
(17, 1, '2022-03-30', ''),
(18, 1, '2022-03-30', ''),
(19, 1, '2022-03-30', ''),
(20, 1, '2022-03-30', ''),
(21, 1, '2022-03-30', ''),
(22, 1, '2022-03-30', ''),
(23, 1, '2022-03-30', ''),
(24, 1, '2022-03-30', ''),
(25, 1, '2022-03-30', ''),
(26, 1, '2022-03-30', ''),
(27, 1, '2022-03-30', ''),
(28, 1, '2022-03-30', ''),
(29, 1, '2022-03-30', ''),
(30, 1, '2022-03-30', ''),
(31, 1, '2022-03-30', ''),
(32, 1, '2022-03-30', ''),
(33, 1, '2022-03-30', ''),
(34, 1, '2022-03-30', ''),
(35, 1, '2022-03-30', ''),
(36, 1, '2022-03-30', ''),
(37, 1, '2022-03-30', ''),
(38, 1, '2022-03-30', ''),
(39, 1, '2022-03-30', ''),
(40, 1, '2022-03-30', ''),
(41, 1, '2022-03-30', ''),
(42, 1, '2022-04-01', ''),
(43, 1, '2022-04-05', ''),
(44, 1, '2022-04-06', 'đang xử lý');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id_order_detail` int(10) NOT NULL,
  `so_luong` int(10) NOT NULL,
  `don_gia` float NOT NULL,
  `thanh_tien` float NOT NULL,
  `discount` float NOT NULL DEFAULT 0,
  `id_order` int(10) NOT NULL,
  `ma_san_pham` int(10) NOT NULL,
  `ma_option` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id_order_detail`, `so_luong`, `don_gia`, `thanh_tien`, `discount`, `id_order`, `ma_san_pham`, `ma_option`) VALUES
(1, 1, 10790000, 10790000, 0, 6, 4, NULL),
(2, 1, 20790000, 20790000, 0, 7, 9, NULL),
(3, 4, 10790000, 43160000, 0, 8, 4, NULL),
(4, 2, 20790000, 41580000, 0, 8, 9, NULL),
(5, 1, 9590000, 9590000, 0, 8, 10, NULL),
(6, 1, 20790000, 20790000, 0, 9, 5, NULL),
(7, 1, 20790000, 20790000, 0, 10, 5, NULL),
(8, 19, 20790000, 395010000, 0, 11, 5, NULL),
(9, 3, 20790000, 62370000, 0, 12, 9, NULL),
(10, 1, 10790000, 10790000, 0, 12, 11, NULL),
(11, 1, 20790000, 20790000, 0, 13, 9, NULL),
(12, 2, 10790000, 21580000, 0, 14, 4, NULL),
(13, 2, 9590000, 19180000, 0, 14, 10, NULL),
(14, 19, 20790000, 395010000, 0, 11, 5, NULL),
(15, 3, 15590000, 46770000, 0, 15, 9, NULL),
(16, 3, 20790000, 62370000, 0, 17, 11, 3),
(17, 1, 39000300, 39000300, 0, 28, 4, 3),
(18, 1, 40134000, 40134000, 0, 29, 5, 3),
(20, 1, 20790000, 20790000, 0, 37, 5, 0),
(21, 1, 10790000, 10790000, 0, 38, 4, 0),
(22, 1, 39000300, 39000300, 0, 39, 4, 3),
(23, 2, 19590000, 39180000, 0, 40, 4, 2),
(24, 3, 19590000, 58770000, 0, 41, 4, 2),
(25, 1, 39000300, 39000300, 0, 42, 4, 3),
(26, 1, 10790000, 10790000, 0, 43, 4, 0),
(27, 1, 10790000, 10790000, 0, 44, 11, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `ma_san_pham` int(10) NOT NULL,
  `ten_sp` text NOT NULL,
  `don_gia` float NOT NULL,
  `giam_gia` double(10,2) NOT NULL DEFAULT 0.00,
  `images_sp` varchar(255) NOT NULL,
  `dac_biet` int(11) NOT NULL DEFAULT 0,
  `mo_ta_ct` text NOT NULL,
  `so_luot_xem` int(11) NOT NULL DEFAULT 0,
  `ngay_nhap` date NOT NULL DEFAULT current_timestamp(),
  `sl_luu_kho` int(10) NOT NULL,
  `images_banner_sp` varchar(255) DEFAULT NULL,
  `thoi_gian_bat_dau` date DEFAULT NULL,
  `thoi_gian_ket_thuc` date DEFAULT NULL,
  `ma_loai_sp` int(10) NOT NULL,
  `ma_option` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`ma_san_pham`, `ten_sp`, `don_gia`, `giam_gia`, `images_sp`, `dac_biet`, `mo_ta_ct`, `so_luot_xem`, `ngay_nhap`, `sl_luu_kho`, `images_banner_sp`, `thoi_gian_bat_dau`, `thoi_gian_ket_thuc`, `ma_loai_sp`, `ma_option`) VALUES
(4, 'Laptop Asus VivoBook 15 X515EP-EJ449W', 10790000, 0.00, 'http://localhost:80/du_an_1/public/images_stores/img/asusu.jpg', 0, '', 2, '2022-03-09', 26, NULL, NULL, NULL, 1, NULL),
(5, 'MacBook Air 13 inch 2020 M1 MGN63SA/A', 20790000, 0.00, 'http://localhost:80/du_an_1/public/images_stores/img/macbook.jpg', 1, '', 0, '2022-03-07', 4, 'http://localhost:80/du_an_1/public/images_stores/img/banner4.jpg', NULL, NULL, 3, NULL),
(6, 'Laptop Dell Vostro 3400 V4I7015W1', 19590000, 0.00, 'http://localhost:80/du_an_1/public/images_stores/img/dell.jpg', 1, '', 0, '2022-03-02', 0, 'http://localhost:80/du_an_1/public/images_stores/img/banner6.jpg', NULL, NULL, 2, NULL),
(9, 'Samsung Galaxy Book Flex', 20790000, 0.00, 'http://localhost:80/du_an_1/public/images_stores/img/samsung.jpg', 1, '', 0, '2022-03-18', 0, NULL, NULL, NULL, 4, NULL),
(10, 'Laptop Lenovo IdeaPad Slim 5 ', 9590000, 0.00, 'http://localhost:80/du_an_1/public/images_stores/img/lenovo.jpg', 0, '', 1, '2022-03-18', 8, 'http://localhost:80/du_an_1/public/images_stores/img/banner3.png', NULL, NULL, 6, NULL),
(11, 'Laptop Acer Aspire 3 A315 57G 573F i5 1035G1', 10790000, 0.00, 'http://localhost:80/du_an_1/public/images_stores/img/acer3.jpg', 1, '', 0, '2022-03-03', 15, 'http://localhost:80/du_an_1/public/images_stores/img/banner3.png', NULL, '2022-03-02', 7, NULL),
(13, 'MacBook Pro 2021 13 inch (MYD82/MYDA2) ', 30908, 0.00, 'http://localhost:80/du_an_1/public/images_stores/images/62543851c5c8aCapture.JPG', 0, 'hàng để test chương trình', 0, '2022-04-11', 20, '', '0000-00-00', '0000-00-00', 10, NULL),
(14, 'Macbook 13 pro max', 234232, 0.00, 'http://localhost:80/du_an_1/public/images_stores/images/62543f2c55fdaCapture.JPG', 0, 'hàng đang còn test', 0, '2022-04-11', 34, '', '0000-00-00', '0000-00-00', 9, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sp_option`
--

CREATE TABLE `sp_option` (
  `ma_san_pham` int(10) NOT NULL,
  `ma_option` int(10) NOT NULL,
  `don_gia` float NOT NULL,
  `sl_luu_kho` int(11) NOT NULL,
  `giam_gia` float DEFAULT 0,
  `thoi_gian_bat_dau` date DEFAULT NULL,
  `thoi_gian_ket_thuc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sp_option`
--

INSERT INTO `sp_option` (`ma_san_pham`, `ma_option`, `don_gia`, `sl_luu_kho`, `giam_gia`, `thoi_gian_bat_dau`, `thoi_gian_ket_thuc`) VALUES
(4, 3, 39000300, 3, 3000, '2022-04-12', '2022-04-14'),
(4, 4, 7600500, 0, 0, '0000-00-00', '0000-00-00'),
(5, 2, 31790000, 7, 0, NULL, NULL),
(5, 3, 40134000, 10, 0, NULL, NULL),
(6, 2, 25590000, 20, 0, NULL, NULL),
(6, 3, 29000300, 10, 0, NULL, NULL),
(6, 4, 10990000, 11, 0, NULL, NULL),
(9, 1, 15590000, 40, 0, NULL, NULL),
(9, 3, 29700300, 5, 0, NULL, NULL),
(9, 4, 10790000, 0, 0, NULL, NULL),
(10, 1, 7500500, 0, 0, NULL, NULL),
(11, 3, 20790000, 5, 0, NULL, NULL),
(11, 4, 7590000, 0, 0, NULL, NULL),
(13, 1, 453453, 34, 4345, '2022-04-05', '2022-04-05'),
(13, 2, 34563, 33, 345, '2022-04-06', '2022-04-13'),
(14, 1, 34564, 45, 0, '0000-00-00', '0000-00-00'),
(14, 2, 43533, 4, 0, '2022-04-05', '2022-04-13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(225) NOT NULL,
  `image` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0,
  `dia_chi` varchar(255) NOT NULL,
  `xa_phuong` varchar(255) NOT NULL,
  `quan_huyen` varchar(255) NOT NULL,
  `tinh_thanh` varchar(255) NOT NULL,
  `sdt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `image`, `email`, `password`, `role`, `status`, `dia_chi`, `xa_phuong`, `quan_huyen`, `tinh_thanh`, `sdt`) VALUES
(1, 'Trường Nguyễn', 'http://localhost/du_an_1/public/images_stores/img/Capture.JPG', 'truongrubi717@gmail.com', '1234', 0, 1, '123 tan xuân', 'xuân đỉnh', 'bắc từ liêm', 'hà nội', '0869919717'),
(2, 'Ngọc Diệu', 'http://localhost/du_an_1/public/images_stores/img/logo_user.png', 'dieurubi717@gmail.com', '1234', 0, 1, '21 tân xuân', 'xuân đỉnh', 'bắc từ liêm', 'hà nội', '0869919718');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_binh_luan`),
  ADD KEY `fk_user_bl` (`user_id`),
  ADD KEY `fk_sp_bl` (`ma_san_pham`);

--
-- Chỉ mục cho bảng `chi_tiet_sp`
--
ALTER TABLE `chi_tiet_sp`
  ADD PRIMARY KEY (`ma_ct_sp`),
  ADD KEY `fk_ct_sp` (`ma_san_pham`);

--
-- Chỉ mục cho bảng `library_img_sp`
--
ALTER TABLE `library_img_sp`
  ADD PRIMARY KEY (`id_img_sp`),
  ADD KEY `images_sp` (`ma_san_pham`);

--
-- Chỉ mục cho bảng `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  ADD PRIMARY KEY (`ma_loai_sp`);

--
-- Chỉ mục cho bảng `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`ma_option`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `fk_order_user` (`user_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id_order_detail`),
  ADD KEY `fk_san_pham` (`ma_san_pham`),
  ADD KEY `fk_order` (`id_order`),
  ADD KEY `fk_ma_option_order` (`ma_option`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ma_san_pham`),
  ADD KEY `fk_ma_loai` (`ma_loai_sp`),
  ADD KEY `fk_option` (`ma_option`);

--
-- Chỉ mục cho bảng `sp_option`
--
ALTER TABLE `sp_option`
  ADD PRIMARY KEY (`ma_san_pham`,`ma_option`),
  ADD KEY `fk_op_option` (`ma_option`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_binh_luan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_sp`
--
ALTER TABLE `chi_tiet_sp`
  MODIFY `ma_ct_sp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `library_img_sp`
--
ALTER TABLE `library_img_sp`
  MODIFY `id_img_sp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  MODIFY `ma_loai_sp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `options`
--
ALTER TABLE `options`
  MODIFY `ma_option` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id_order_detail` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `ma_san_pham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `fk_sp_bl` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`ma_san_pham`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_bl` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chi_tiet_sp`
--
ALTER TABLE `chi_tiet_sp`
  ADD CONSTRAINT `fk_ct_sp` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`ma_san_pham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `library_img_sp`
--
ALTER TABLE `library_img_sp`
  ADD CONSTRAINT `images_sp` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`ma_san_pham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_order_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `fk_order` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_san_pham` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`ma_san_pham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `fk_ma_loai` FOREIGN KEY (`ma_loai_sp`) REFERENCES `loai_san_pham` (`ma_loai_sp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_option` FOREIGN KEY (`ma_option`) REFERENCES `options` (`ma_option`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sp_option`
--
ALTER TABLE `sp_option`
  ADD CONSTRAINT `fk_op_option` FOREIGN KEY (`ma_option`) REFERENCES `options` (`ma_option`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_sp_option` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`ma_san_pham`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
