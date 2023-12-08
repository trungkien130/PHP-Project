-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 08, 2023 lúc 01:29 PM
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
-- Cấu trúc bảng cho bảng `danhmucsach`
--

CREATE TABLE `danhmucsach` (
  `TEN_SP` varchar(200) NOT NULL,
  `IMG_SP` char(255) DEFAULT NULL,
  `THONG_TIN` text DEFAULT NULL,
  `GIA_NHAP` float NOT NULL,
  `GIA_CU` float DEFAULT NULL,
  `GIA_MOI` float DEFAULT NULL,
  `LUOT_MUA` int(11) NOT NULL,
  `NGAY_CAP_NHAT` datetime DEFAULT NULL,
  `SL_TON` float NOT NULL,
  `MA_NHOM` int(11) DEFAULT NULL,
  `MA_SP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucsach`
--

INSERT INTO `danhmucsach` (`TEN_SP`, `IMG_SP`, `THONG_TIN`, `GIA_NHAP`, `GIA_CU`, `GIA_MOI`, `LUOT_MUA`, `NGAY_CAP_NHAT`, `SL_TON`, `MA_NHOM`, `MA_SP`) VALUES
('Sự im lặng của bầy cừu', '372414_su-im-lang-cua-bay-cuu-tai-ban-2022.jpg', 'Những cuộc phỏng vấn ở xà lim với kẻ ăn thịt người ham thích trò đùa trí tuệ, những tiết lộ nửa chừng hắn chỉ dành cho kẻ nào thông minh, những cái nhìn xuyên thấu thân phận và suy tư của cô mà đôi khi cô muốn lảng tránh... Clarice Starling đã dấn thân vào cuộc điều tra án giết người lột da hàng loạt như thế, để rồi trong tiếng bức bối của chiếc đồng hồ đếm ngược về cái chết, cô phải vật lộn để chấm dứt tiếng kêu bao lâu nay vẫn đeo đẳng giấc mơ mình: tiếng kêu của bầy cừu sắp bị đem đi giết thịt.\r\n\r\nSự im lặng của bầy cừu hội tụ đầy đủ những yếu tố làm nên một cuốn tiểu thuyết trinh thám kinh dị xuất sắc nhất: không một dấu vết lúng túng trong những chi tiết thuộc lĩnh vực chuyên môn, với các tình tiết giật gân, cái chết luôn lơ lửng, với cuộc so găng của những bộ óc lớn mà không có chỗ cho kẻ ngu ngốc để cuộc chơi trí tuệ trở nên dễ dàng. Bồi đắp vào cốt truyện lôi cuốn đó là cơ hội được trải nghiệm trong trí não của cả kẻ gây tội lẫn kẻ thi hành công lý, khi mỗi bên phải vật vã trong ngục tù của đau đớn để tìm kiếm, khẩn thiết và liên tục, một sự lắng dịu cho tâm hồn.', 20000, 35000, 50000, 0, '2023-12-07 17:03:48', 1, NULL, 1),
('Lôi thần và nhân viên văn phòng tập 1', '372419_loi-than-va-nhan-vien-van-phong-tap-1.jpg', 'Trong thời gian hòa nhập vào thế giới con người, Raiyu càng ngày càng nhận ra rằng anh và Omura có thật ít thời gian để ở bên nhau, vì vậy anh muốn tranh thủ thực hiện tất cả những điều mà cả hai cùng muốn làm. Đồng thời, đây cũng chính là khoảng thời gian Omura sống thật với bản thân mình trong suốt bao nhiêu năm qua. Anh cùng Raiyu đối mặt với bạn bè, với gia đình, người thân,... để giới thiệu với họ rằng Raiyu chính là người quan trọng sẽ bầu bạn cùng anh đến cuối đời. Cả hai đã tìm được cho mình chốn về bình yên, ấm áp và tràn đầy hy vọng về tương lai.\r\n\r\nHành trình 5 tập truyện của Raiyu và Omura với đầy đủ cung bậc cảm xúc của tình yêu, tình bạn, tình thân đã khép lại tại đây. Xin chân thành cảm ơn tác giả Rena đã đem tới cho chúng ta một bộ truyện đáng yêu, trọn vẹn mà đầy triết lý đáng suy ngẫm như “Lôi thần và nhân viên văn phòng”. Hãy cùng đón chờ một tác phẩm khác của sensei trong thời gian gần nhất cùng Daisy nhé!', 230000, 130000, 300000, 0, '2023-11-28 14:19:10', 1, NULL, 2),
('Lôi thần và nhân viên văn phòng tập 2', '371474_loi-than-va-nhan-vien-van-phong-tap-2.jpg', 'Nối tiếp câu chuyện là quá trình hòa nhập vào với cuộc sống con người của Lôi Thần khi gặp những người bạn của Omura, trải nghiệm thế giới loài người mà anh chưa từng biết tới. Từ những thứ nhỏ nhặt nhất như món cơm nắm siêu to siêu ngon do Omura làm mà anh cực kỳ khoái khẩu, cho đến việc làm quen với tàu điện ngầm, thư viện,… tất cả những điều tưởng chừng như nhàm chán, chẳng có gì lạ lẫm với người khác, thì đối với Raiyu đều mới mẻ vô cùng', 123, 231, 321, 0, '2023-11-29 19:04:46', 1, NULL, 3),
('Lôi thần và nhân viên văn phòng tập 3', '372415_loi-than-va-nhan-vien-van-phong-tap-3.jpg', 'Nối tiếp câu chuyện là quá trình hòa nhập vào với cuộc sống con người của Lôi Thần khi gặp những người bạn của Omura, trải nghiệm thế giới loài người mà anh chưa từng biết tới. Từ những thứ nhỏ nhặt nhất như món cơm nắm siêu to siêu ngon do Omura làm mà anh cực kỳ khoái khẩu, cho đến việc làm quen với tàu điện ngầm, thư viện,… tất cả những điều tưởng chừng như nhàm chán, chẳng có gì lạ lẫm với người khác, thì đối với Raiyu đều mới mẻ vô cùng.', 132, 213, 213123, 0, '2023-11-29 19:05:13', 1, NULL, 4),
('Lôi thần và nhân viên văn phòng tập 4', '372418_loi-than-va-nhan-vien-van-phong-tap-4.jpg', 'Sau chuyến du lịch nông thôn và trải nghiệm những thứ mới lạ ở quê của Omura, cả hai trở về thành phố. Lôi thần Raiyu bỗng dưng biến thành quả bóng tròn bay lơ lửng không ai có thể sờ vào ngoài Omura, cũng chẳng thể tự mình biến thân lại. Omura nhờ đến sự giúp đỡ từ những người bạn của Raiyu để giải đáp xem tại sao hình dáng của Raiyu trong thời gian này luôn thay đổi thất thường. Những trải nghiệm khi chung sống với con người khiến một vị thần như Raiyu bắt đầu mơ hồ cảm nhận được hỉ nộ ai lạc, đồng thời nhận ra cảm xúc của mình đối với Omura. Thế nhưng song song với điều đó, Raiyu cũng hiểu ra rằng mình chẳng thể mãi ở bên cạnh Omura đến cả ngàn năm', 231, 3213, 321321, 0, '2023-11-29 19:05:38', 1, NULL, 5),
('Lôi thần và nhân viên văn phòng tập 5', '372416_loi-than-va-nhan-vien-van-phong-tap-5.jpg', 'Trong thời gian hòa nhập vào thế giới con người, Raiyu càng ngày càng nhận ra rằng anh và Omura có thật ít thời gian để ở bên nhau, vì vậy anh muốn tranh thủ thực hiện tất cả những điều mà cả hai cùng muốn làm. Đồng thời, đây cũng chính là khoảng thời gian Omura sống thật với bản thân mình trong suốt bao nhiêu năm qua. Anh cùng Raiyu đối mặt với bạn bè, với gia đình, người thân,... để giới thiệu với họ rằng Raiyu chính là người quan trọng sẽ bầu bạn cùng anh đến cuối đời. Cả hai đã tìm được cho mình chốn về bình yên, ấm áp và tràn đầy hy vọng về tương lai.\r\n\r\nHành trình 5 tập truyện của Raiyu và Omura với đầy đủ cung bậc cảm xúc của tình yêu, tình bạn, tình thân đã khép lại tại đây. Xin chân thành cảm ơn tác giả Rena đã đem tới cho chúng ta một bộ truyện đáng yêu, trọn vẹn mà đầy triết lý đáng suy ngẫm như “Lôi thần và nhân viên văn phòng”. Hãy cùng đón chờ một tác phẩm khác của sensei trong thời gian gần nhất cùng Daisy nhé!', 213, 213, 123, 0, '2023-12-05 13:25:46', 1, NULL, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MA_KH` int(11) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `HO_TEN` varchar(50) DEFAULT NULL,
  `MAT_KHAU` varchar(32) DEFAULT NULL,
  `DIA_CHI` varchar(200) DEFAULT NULL,
  `DIEN_THOAI` varchar(30) DEFAULT NULL,
  `NGAY_SINH` date DEFAULT NULL,
  `NGAY_CAP_NHAT` datetime DEFAULT NULL,
  `GIOI_TINH` tinyint(4) DEFAULT NULL,
  `TICH_DIEM` int(11) NOT NULL,
  `TRANG_THAI` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MA_KH`, `EMAIL`, `HO_TEN`, `MAT_KHAU`, `DIA_CHI`, `DIEN_THOAI`, `NGAY_SINH`, `NGAY_CAP_NHAT`, `GIOI_TINH`, `TICH_DIEM`, `TRANG_THAI`) VALUES
(0, 'kien14@gmail.com', 'dsa', 'dsdas', '321', 'dsa', '2004-02-13', '2023-12-05 13:37:01', 0, 0, NULL),
(1, 'kien14@gmail.com', '321', '321', '321', '321', '2004-02-13', '2023-12-05 13:20:42', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhom_sach`
--

CREATE TABLE `nhom_sach` (
  `MA_NHOM` int(11) NOT NULL,
  `TEN_NHOM` varchar(100) NOT NULL,
  `TRANG_THAI` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quantri`
--

CREATE TABLE `quantri` (
  `EMAIL` varchar(50) NOT NULL,
  `MAT_KHAU` varchar(32) NOT NULL,
  `TRANG_THAI` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `quantri`
--

INSERT INTO `quantri` (`EMAIL`, `MAT_KHAU`, `TRANG_THAI`) VALUES
('Admin', 'Admin', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `ID` int(11) NOT NULL,
  `TEN_SLIDE` varchar(50) NOT NULL,
  `IMG_SLIDE` char(255) NOT NULL,
  `NGAY_CAP_NHAT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`ID`, `TEN_SLIDE`, `IMG_SLIDE`, `NGAY_CAP_NHAT`) VALUES
(1, 'Slide quảng cáo sách', 'sach onlie.jpg', '2023-11-28 20:11:35'),
(3, '', 'images (1).jfif', '2023-11-28 21:50:25'),
(10, '', 'tải xuống.jfif', '2023-11-29 13:30:18'),
(11, '', 'images (2).jfif', '2023-11-29 13:30:43');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmucsach`
--
ALTER TABLE `danhmucsach`
  ADD PRIMARY KEY (`MA_SP`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MA_KH`);

--
-- Chỉ mục cho bảng `nhom_sach`
--
ALTER TABLE `nhom_sach`
  ADD PRIMARY KEY (`MA_NHOM`);

--
-- Chỉ mục cho bảng `quantri`
--
ALTER TABLE `quantri`
  ADD PRIMARY KEY (`EMAIL`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
