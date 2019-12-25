-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 02, 2019 lúc 05:18 AM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mvcexample4`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ho_dan`
--

CREATE TABLE `ho_dan` (
  `id` int(11) NOT NULL,
  `tenchuho` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sothanhvien` int(11) DEFAULT '0',
  `sonha` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ho_dan`
--

INSERT INTO `ho_dan` (`id`, `tenchuho`, `sothanhvien`, `sonha`) VALUES
(1, 'NGUYEN VAN A', 2, '40'),
(2, 'Vu Ngoc AB', 3, '41'),
(8, 'CCCC', 1, '45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanh_vien`
--

CREATE TABLE `thanh_vien` (
  `id` int(11) NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tuoi` int(11) DEFAULT NULL,
  `namsinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nghenghiep` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_hodan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanh_vien`
--

INSERT INTO `thanh_vien` (`id`, `hoten`, `tuoi`, `namsinh`, `nghenghiep`, `id_hodan`) VALUES
(1, 'NGUYEN VAN A', 22, '1997', 'tu do', 1),
(2, 'NGUYEN VAN B', 22, '1997', 'tu do', 1),
(3, 'A', 22, '1997', 'Tu DO', 2),
(4, 'B', 22, '1997', 'Tu Do', 2),
(5, 'C', 22, '1997', 'Tu Do', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ho_dan`
--
ALTER TABLE `ho_dan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thanh_vien`
--
ALTER TABLE `thanh_vien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk1` (`id_hodan`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ho_dan`
--
ALTER TABLE `ho_dan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `thanh_vien`
--
ALTER TABLE `thanh_vien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `thanh_vien`
--
ALTER TABLE `thanh_vien`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`id_hodan`) REFERENCES `ho_dan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
