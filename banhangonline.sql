-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 09, 2021 at 02:08 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banhangonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hbhb', 'admin@gmail.com', '$2y$10$TgU3/z4UQAMANbP3Wiyij.gC5X/Ful.Es4zWJn3H.Yn1Ok7C4OqXi', NULL, NULL, '2021-04-17 13:21:17');

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id_ctdh` int(11) NOT NULL,
  `id_donhang` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id_ctdh`, `id_donhang`, `id_sanpham`, `quantity`) VALUES
(60, 113, 129, 2),
(61, 113, 133, 1),
(62, 114, 130, 1),
(63, 114, 131, 1),
(64, 115, 130, 1),
(65, 115, 132, 7),
(66, 115, 128, 3),
(67, 116, 129, 22),
(68, 117, 130, 2),
(69, 117, 129, 1),
(70, 118, 137, 1),
(71, 119, 130, 6),
(72, 119, 138, 3),
(73, 119, 129, 9),
(74, 119, 128, 3),
(75, 119, 133, 1),
(76, 119, 132, 1),
(77, 120, 130, 2),
(78, 120, 136, 2),
(79, 120, 131, 1),
(80, 120, 138, 1),
(81, 120, 132, 1),
(82, 120, 129, 1),
(83, 121, 131, 1),
(84, 121, 128, 1),
(85, 121, 132, 1),
(86, 121, 130, 2),
(87, 122, 129, 7),
(88, 122, 130, 5),
(89, 122, 133, 1),
(90, 122, 131, 4),
(91, 122, 132, 2),
(92, 122, 128, 3),
(93, 123, 129, 1),
(94, 124, 129, 1),
(95, 124, 139, 1),
(96, 125, 130, 1),
(97, 126, 129, 1),
(98, 127, 131, 1);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id_donhang` int(11) NOT NULL,
  `total_donhang` int(11) NOT NULL DEFAULT '0',
  `status_donhang` tinyint(1) DEFAULT '0',
  `email_donhang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_donhang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_donhang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_donhang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id_donhang`, `total_donhang`, `status_donhang`, `email_donhang`, `phone_donhang`, `address_donhang`, `name_donhang`, `created_at`, `updated_at`) VALUES
(113, 85870000, 0, '123pachirisu@gmail.com', '0123654789', 'VinhLong', 'Thần Thánh', '2021-09-06 11:00:20', '2021-09-06 11:00:20'),
(114, 43980000, 0, '123ngothanhtri@gmail.com', '01236412587', 'qwq', 'Audi', '2021-09-07 07:11:56', '2021-09-07 07:11:56'),
(115, 205620000, 0, '123ngothanhtri@gmail.com', '2112', '2121', 'Audi', '2021-09-07 07:59:05', '2021-09-07 07:59:05'),
(116, 879780000, 1, '123pachirisu@gmail.com', '1232123212', 'qweqw', 'Thần Thánh', '2021-09-07 09:25:31', '2021-09-07 11:05:18'),
(117, 93970000, 1, '23pachirisu@gmail.com', '2', '2', 'Audi', '2021-09-07 19:28:09', '2021-09-08 07:27:25'),
(118, 14990000, 0, '123pachirisu@gmail.com', '31231231', 'qweqwew', 'Thần Thánh', '2021-09-08 08:37:13', '2021-09-08 08:37:13'),
(119, 699800000, 0, '1ngothanhtri@gmail.com', '231231212', 'qweq weqwe qweq', 'Thần Thánh t', '2021-09-08 11:43:24', '2021-09-08 11:43:24'),
(120, 131020000, 1, 'wqwe@wew', '31231', 'eweqweq', 'eqweq', '2021-09-08 12:03:09', '2021-09-08 12:04:10'),
(121, 125060000, 0, '123pachirisu@gmail.com', '1', '1', 'Audi', '2021-09-08 12:22:59', '2021-09-08 12:22:59'),
(122, 646910000, 0, 'wqwe@wew', '12', '1212', 'Thần Thánh', '2021-09-08 12:48:04', '2021-09-08 12:48:04'),
(123, 39990000, 0, 'admin@gmail.com', '1', '1', 'Audi', '2021-09-08 18:40:38', '2021-09-08 18:40:38'),
(124, 45480000, 0, 'admin@gmail.com', '212', '12', 'Audi', '2021-09-08 18:41:38', '2021-09-08 18:41:38'),
(125, 26990000, 0, 'admin@gmail.com', '232', '32', 'Audi', '2021-09-08 18:49:37', '2021-09-08 18:49:37'),
(126, 39990000, 0, 'admin@gmail.com', '121', '121', 'Thần Thánh', '2021-09-08 18:59:14', '2021-09-08 18:59:14'),
(127, 16990000, 1, '123pachirisu@gmail.com', '21', '2121', 'Thần Thánh', '2021-09-09 06:27:10', '2021-09-09 06:43:04');

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `id_loaisanpham` int(11) NOT NULL,
  `name_loaisanpham` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`id_loaisanpham`, `name_loaisanpham`) VALUES
(46, 'Samsung'),
(47, 'iPhone'),
(48, 'Xiaomi'),
(49, 'OPPO'),
(50, 'Nokia'),
(51, 'Vivo'),
(52, 'Vsmart'),
(53, 'Realme');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `name_sanpham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description_sanpham` text COLLATE utf8_unicode_ci NOT NULL,
  `price_sanpham` int(11) NOT NULL DEFAULT '0',
  `image_sanpham` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `discount_sanpham` int(11) DEFAULT '0',
  `id_loaisanpham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `name_sanpham`, `description_sanpham`, `price_sanpham`, `image_sanpham`, `discount_sanpham`, `id_loaisanpham`) VALUES
(128, 'Điện thoại Samsung Galaxy Z Fold2 5G Đặc Biệt', 'Thuộc dòng smartphone cao cấp, Samsung Galaxy Z Fold2 5G được Samsung trau chuốt không chỉ vẻ ngoài sang trọng, tinh tế mà lẫn cả “nội thất” bên trong đầy mạnh mẽ khiến chiếc smartphone này hoàn toàn xứng đáng để được sở hữu.', 50000000, 'https://cdn.tgdd.vn/Products/Images/42/232668/samsung-galaxy-z-fold-2-den-600x600-600x600.jpg', NULL, 46),
(129, 'iPhone 12 Pro Max 512GB', 'iPhone 12 Pro Max 512GB - đẳng cấp từ tên gọi đến từng chi tiết. Ngay từ khi chỉ là tin đồn thì chiếc smartphone này đã làm đứng ngồi không yên bao “fan cứng” nhà Apple, với những nâng cấp vô cùng nổi bật hứa hẹn sẽ mang đến những trải nghiệm tốt nhất về mọi mặt mà chưa một chiếc iPhone tiền nhiệm nào có được.iPhone 12 Pro Max 512GB - đẳng cấp từ tên gọi đến từng chi tiết. Ngay từ khi chỉ là tin đồn thì chiếc smartphone này đã làm đứng ngồi không yên bao “fan cứng” nhà Apple, với những nâng cấp vô cùng nổi bật hứa hẹn sẽ mang đến những trải nghiệm tốt nhất về mọi mặt mà chưa một chiếc iPhone tiền nhiệm nào có được.', 39990000, 'https://cdn.tgdd.vn/Products/Images/42/213033/iphone-12-pro-max-xanh-duong-new-600x600-600x600.jpg', NULL, 47),
(130, 'OPPO Find X3 Pro 5G', 'OPPO đã làm khuynh đảo thị trường smartphone khi cho ra đời chiếc điện thoại OPPO Find X3 Pro 5G. Đây là một sản phẩm có thiết kế độc đáo, sở hữu cụm camera khủng, cấu hình thuộc top đầu trong thế giới Android.', 26990000, 'https://cdn.tgdd.vn/Products/Images/42/232190/oppo-find-x3-pro-black-001-1-600x600.jpg', NULL, 49),
(131, 'Xiaomi Mi 11 5G', 'Xiaomi Mi 11 một siêu phẩm đến từ Xiaomi, máy cho trải nghiệm hiệu năng hàng đầu với vi xử lý Qualcomm Snapdragon 888, cùng loạt công nghệ đỉnh cao, khiến bất kỳ ai cũng sẽ choáng ngợp về smartphone này.', 16990000, 'https://cdn.tgdd.vn/Products/Images/42/226264/xiaomi-mi-11-xanhduong-600x600-600x600.jpg', NULL, 48),
(132, 'Xiaomi Redmi 9T (6GB/128GB)', 'Xiaomi tiếp tục “phá đảo” phân khúc giá rẻ tầm trung với Redmi 9T 6GB/128GB. Nổi bật với thiết kế trẻ trung, màn hình siêu lớn, bộ 4 camera AI, pin cực khủng, mẫu smartphone này sẽ thỏa mãn mọi nhu cầu giải trí, niềm đam mê sáng tạo và khám phá không ngừng của giới trẻ.', 4090000, 'https://cdn.tgdd.vn/Products/Images/42/233130/xiaomi-redmi-9t-6gb-110621-080650-600x600.jpg', NULL, 48),
(133, 'Samsung Galaxy A51 (6GB/128GB)', 'Theo Strategy Analytics, Galaxy A51 là Smartphone Android Bán Chạy Nhất Thế Giới Quý 1/2020, máy sở hữu cụm 4 camera, bao gồm camera macro chụp cận cảnh lần đầu xuất hiện trên smartphone Samsung, màn hình tràn viền vô cực cùng mặt lưng họa tiết kim cương nổi bật.', 5890000, 'https://cdn.tgdd.vn/Products/Images/42/211570/samsung-galaxy-a51-silver-600x600.jpg', NULL, 46),
(135, 'Vivo Y53s', 'Vivo mang đến niềm vui cho mọi người tin dùng khi hãng chính thức tung ra chiếc điện thoại Vivo Y53s với những tính năng tiên tiến đi cùng hiệu năng mạnh mẽ. Đặc biệt, smartphone lại còn sở hữu mức giá hấp dẫn trong phân khúc tầm trung đầy hứa hẹn.', 6990000, 'https://cdn.tgdd.vn/Products/Images/42/240286/vivo-y53s-xanh-600x600.jpg', 0, 51),
(136, 'Realme C25s', 'Nối tiếp thành công của Realme C25, Realme đã cho ra mắt mẫu smartphone mang tên Realme C25s với nhiều tính năng vượt trội về camera, dung lượng pin, con chip mạnh mẽ và hơn hết là được bán ra với mức giá giá vô cùng tốt.', 4990000, 'https://cdn.tgdd.vn/Products/Images/42/238483/realme-c25s-grey-7-600x600.jpg', 0, 53),
(137, 'Samsung Galaxy Note 20', 'Tháng 8/2020, Galaxy Note 20 chính thức được lên kệ, với thiết kế camera trước nốt ruồi quen thuộc, cụm camera hình chữ nhật mới lạ cùng với vi xử lý Exynos 990 cao cấp của chính Samsung chắc hẳn sẽ mang lại một trải nghiệm thú vị cùng hiệu năng mạnh mẽ.', 14990000, 'https://cdn.tgdd.vn/Products/Images/42/218355/samsung-galaxy-note-20-062220-122200-fix-600x600.jpg', 0, 46),
(138, 'Xiaomi Redmi Note 10 5G 8GB', 'Redmi Note 10 5G một trong những mẫu điện thoại thuộc series Redmi Note 10 của Xiaomi, không chỉ sở hữu hiệu năng mạnh mẽ đáp ứng tốt nhu cầu chơi game, đây còn là chiếc điện thoại có hỗ trợ mạng 5G cho tốc độ kết nối nhanh chóng.', 5990000, 'https://cdn.tgdd.vn/Products/Images/42/235971/xiaomi-redmi-note-10-5g-xanh-bong-dem-1-600x600.jpg', 0, 48),
(139, 'Vsmart Aris Pro', 'Thương hiệu smartphone Việt - Vsmart chính thức trình làng Vsmart Aris Pro. Mẫu điện thoại này đánh dấu một bước ngoặc lớn trong làng smartphone với công nghệ camera ẩn trong màn hình, mức giá hợp lý giúp người Việt có cơ hội tiếp cận những công nghệ mới nhất.', 5490000, 'https://cdn.tgdd.vn/Products/Images/42/228531/vsmart-aris-pro-green-600jpg-600x600.jpg', 0, 52),
(140, 'Nokia C30', 'Nokia C30 là dòng smartphone giá rẻ được Nokia chăm chút và đầu tư kỹ lưỡng với những nâng cấp đáng kể về hiệu năng camera cùng viên pin cực khủng so với Nokia C20 đem lại trải nghiệm tuyệt vời hơn thế hệ tiền nhiệm của mình.', 2990000, 'https://cdn.tgdd.vn/Products/Images/42/239748/nokia-c30-xam-1-600x600.jpg', 0, 50);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `name_slider` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image_slider` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `name_slider`, `image_slider`) VALUES
(25, 'hihi', 'd53IAMAdXvlLGyGqbhXbNeTitWLdeNAyWahe5Vgz.jpg'),
(26, 'a', '0Cbqf2OIXNi0yIyspXO46glbZLEAVpen2cyYw351.jpg'),
(28, 'qw', 'eYh0f24ptSuJ7hIrgX05EsleSMpFFflzmBuZuWcx.jpg'),
(29, 'zd', '8Z7ovn1DsUMsDRQdKyDsVayZXwLA6Fnj42Jojs1T.jpg'),
(30, 'zc', 'O4iNeLSXlI0VruFJWR7TY7j99khglOzaoy9e4KQY.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id_ctdh`),
  ADD KEY `id_donhang` (`id_donhang`),
  ADD KEY `id_sanpham` (`id_sanpham`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_donhang`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`id_loaisanpham`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `id_loaisanpham` (`id_loaisanpham`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id_ctdh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `id_loaisanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`id_donhang`) REFERENCES `donhang` (`id_donhang`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id_sanpham`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_loaisanpham`) REFERENCES `loaisanpham` (`id_loaisanpham`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
