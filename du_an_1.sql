-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 24, 2022 lúc 06:45 PM
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
  `thoi_gian_bl` date NOT NULL,
  `user_id` int(10) NOT NULL,
  `ma_san_pham` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Asus', 'Ideapad Slim 5', 'Đen', 'Ryzen 7-4700U', '8GB', 'AMD Radeon', '250GB', 156, 4),
(2, 'Samsung', 'UAV123TR', 'Trắng', 'Intel Core i7', '16GB', 'không', 'SSD 250GB', 135, 9),
(3, 'Dell', '455TR34', 'Bạch Kim', 'Intel Core i7-1165G7 (12MB, upto 4.70GHz)', '8GB DDR4 3200MHz (1x8GB)', 'NVIDIA GeForce MX330 2GB GDDR5', 'SSD 512GB M.2 PCIe NVMe 3x4', 146, 6),
(4, 'Macbook', '443TR6382', 'Trắng', 'Apple M1 chip 8-core', '8GB', '7-core GPU', '\r\nSSD 256GB', 137, 5),
(5, 'Lenovo', '56TR3423', 'Đen', 'AMD Ryzen R5 5600H', '32GB', 'NVIDIA GeForce RTX 3060 6GB GDDR6', '512GB M.2 2280 SSD up to 1TB', 154, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `library_img_sp`
--

CREATE TABLE `library_img_sp` (
  `id_img_sp` int(10) NOT NULL,
  `ma_san_pham` int(10) NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(6, 'Lennovo', 0, 'Lennovo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `options`
--

CREATE TABLE `options` (
  `ma_option` int(10) NOT NULL,
  `RAM` varchar(225) NOT NULL,
  `ROM` varchar(255) NOT NULL,
  `don_gia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `options`
--

INSERT INTO `options` (`ma_option`, `RAM`, `ROM`, `don_gia`) VALUES
(1, '8GB', '250GB', 10790000),
(2, '16GB', '500GB', 19590000),
(3, '32GB', '1TB', 30790000),
(4, '4GB', '120GB', 9590000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id_order` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id_order_detail` int(10) NOT NULL,
  `so_luong` int(10) NOT NULL,
  `don_gia` float NOT NULL,
  `thanh_tien` float NOT NULL,
  `discount` float NOT NULL,
  `id_order` int(10) NOT NULL,
  `ma_san_pham` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `so_luot_xem` int(11) NOT NULL DEFAULT 0,
  `ngay_nhap` date NOT NULL,
  `sl_luu_kho` int(10) NOT NULL,
  `images_banner_sp` varchar(255) DEFAULT NULL,
  `thoi_gian_giam_gia` date DEFAULT NULL,
  `ma_loai_sp` int(10) NOT NULL,
  `ma_option` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`ma_san_pham`, `ten_sp`, `don_gia`, `giam_gia`, `images_sp`, `dac_biet`, `so_luot_xem`, `ngay_nhap`, `sl_luu_kho`, `images_banner_sp`, `thoi_gian_giam_gia`, `ma_loai_sp`, `ma_option`) VALUES
(4, 'Laptop Asus VivoBook 15 X515EP-EJ449W', 10790000, 0.00, 'http://localhost:80/du_an_1/public/images_stores/img/asusu.jpg', 0, 2, '2022-03-09', 30, NULL, NULL, 1, NULL),
(5, 'MacBook Air 13 inch 2020 M1 MGN63SA/A', 20790000, 0.00, 'http://localhost:80/du_an_1/public/images_stores/img/macbook.jpg', 1, 0, '2022-03-07', 20, 'http://localhost:80/du_an_1/public/images_stores/img/banner.jpg', NULL, 3, NULL),
(6, 'Laptop Dell Vostro 3400 V4I7015W1', 19590000, 0.00, 'http://localhost:80/du_an_1/public/images_stores/img/dell.jpg', 1, 0, '2022-03-02', 0, 'http://localhost:80/du_an_1/public/images_stores/img/banner2.jpg', NULL, 2, NULL),
(9, 'Samsung Galaxy Book Flex', 20790000, 0.00, 'http://localhost:80/du_an_1/public/images_stores/img/samsung.jpg', 1, 0, '2022-03-18', 7, NULL, NULL, 4, NULL),
(10, 'Laptop Lenovo IdeaPad Slim 5 ', 9590000, 0.00, 'http://localhost:80/du_an_1/public/images_stores/img/lenovo.jpg', 0, 0, '2022-03-18', 10, 'http://localhost:80/du_an_1/public/images_stores/img/banner3.jpg', NULL, 6, NULL);

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
  ADD KEY `fk_img_sp` (`ma_san_pham`);

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
  ADD KEY `fk_order` (`id_order`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ma_san_pham`),
  ADD KEY `fk_ma_loai` (`ma_loai_sp`),
  ADD KEY `fk_option` (`ma_option`);

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
  MODIFY `ma_binh_luan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_sp`
--
ALTER TABLE `chi_tiet_sp`
  MODIFY `ma_ct_sp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `library_img_sp`
--
ALTER TABLE `library_img_sp`
  MODIFY `id_img_sp` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  MODIFY `ma_loai_sp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `options`
--
ALTER TABLE `options`
  MODIFY `ma_option` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id_order_detail` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `ma_san_pham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `fk_img_sp` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`ma_san_pham`) ON DELETE CASCADE ON UPDATE CASCADE;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
