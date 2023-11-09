-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 09, 2023 lúc 04:15 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangki`
--

CREATE TABLE `dangki` (
  `ID` int(11) NOT NULL,
  `HO_TEN` varchar(100) DEFAULT NULL,
  `MAT_KHAU` varchar(32) DEFAULT NULL,
  `DIEN_THOAI` varchar(30) DEFAULT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `NGAY_SINH` datetime DEFAULT NULL,
  `GIOI_TINH` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dangki`
--

INSERT INTO `dangki` (`ID`, `HO_TEN`, `MAT_KHAU`, `DIEN_THOAI`, `EMAIL`, `NGAY_SINH`, `GIOI_TINH`) VALUES
(0, 'adsad', 'sadsad', 'sadsad', 'dsadas@gmail', '2023-12-31 00:00:00', 1),
(1, 'Lê Trung Kiên', '2210900034', '0913088169', 'kienlee14@gmail.com', '2013-02-04 00:00:00', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dangki`
--
ALTER TABLE `dangki`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dangki`
--
ALTER TABLE `dangki`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
