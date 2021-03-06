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
(113, 85870000, 0, '123pachirisu@gmail.com', '0123654789', 'VinhLong', 'Th???n Th??nh', '2021-09-06 11:00:20', '2021-09-06 11:00:20'),
(114, 43980000, 0, '123ngothanhtri@gmail.com', '01236412587', 'qwq', 'Audi', '2021-09-07 07:11:56', '2021-09-07 07:11:56'),
(115, 205620000, 0, '123ngothanhtri@gmail.com', '2112', '2121', 'Audi', '2021-09-07 07:59:05', '2021-09-07 07:59:05'),
(116, 879780000, 1, '123pachirisu@gmail.com', '1232123212', 'qweqw', 'Th???n Th??nh', '2021-09-07 09:25:31', '2021-09-07 11:05:18'),
(117, 93970000, 1, '23pachirisu@gmail.com', '2', '2', 'Audi', '2021-09-07 19:28:09', '2021-09-08 07:27:25'),
(118, 14990000, 0, '123pachirisu@gmail.com', '31231231', 'qweqwew', 'Th???n Th??nh', '2021-09-08 08:37:13', '2021-09-08 08:37:13'),
(119, 699800000, 0, '1ngothanhtri@gmail.com', '231231212', 'qweq weqwe qweq', 'Th???n Th??nh t', '2021-09-08 11:43:24', '2021-09-08 11:43:24'),
(120, 131020000, 1, 'wqwe@wew', '31231', 'eweqweq', 'eqweq', '2021-09-08 12:03:09', '2021-09-08 12:04:10'),
(121, 125060000, 0, '123pachirisu@gmail.com', '1', '1', 'Audi', '2021-09-08 12:22:59', '2021-09-08 12:22:59'),
(122, 646910000, 0, 'wqwe@wew', '12', '1212', 'Th???n Th??nh', '2021-09-08 12:48:04', '2021-09-08 12:48:04'),
(123, 39990000, 0, 'admin@gmail.com', '1', '1', 'Audi', '2021-09-08 18:40:38', '2021-09-08 18:40:38'),
(124, 45480000, 0, 'admin@gmail.com', '212', '12', 'Audi', '2021-09-08 18:41:38', '2021-09-08 18:41:38'),
(125, 26990000, 0, 'admin@gmail.com', '232', '32', 'Audi', '2021-09-08 18:49:37', '2021-09-08 18:49:37'),
(126, 39990000, 0, 'admin@gmail.com', '121', '121', 'Th???n Th??nh', '2021-09-08 18:59:14', '2021-09-08 18:59:14'),
(127, 16990000, 1, '123pachirisu@gmail.com', '21', '2121', 'Th???n Th??nh', '2021-09-09 06:27:10', '2021-09-09 06:43:04');

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
(128, '??i???n tho???i Samsung Galaxy Z Fold2 5G ?????c Bi???t', 'Thu???c d??ng smartphone cao c???p, Samsung Galaxy Z Fold2 5G ???????c Samsung trau chu???t kh??ng ch??? v??? ngo??i sang tr???ng, tinh t??? m?? l???n c??? ???n???i th???t??? b??n trong ?????y m???nh m??? khi???n chi???c smartphone n??y ho??n to??n x???ng ????ng ????? ???????c s??? h???u.', 50000000, 'https://cdn.tgdd.vn/Products/Images/42/232668/samsung-galaxy-z-fold-2-den-600x600-600x600.jpg', NULL, 46),
(129, 'iPhone 12 Pro Max 512GB', 'iPhone 12 Pro Max 512GB - ?????ng c???p t??? t??n g???i ?????n t???ng chi ti???t. Ngay t??? khi ch??? l?? tin ?????n th?? chi???c smartphone n??y ???? l??m ?????ng ng???i kh??ng y??n bao ???fan c???ng??? nh?? Apple, v???i nh???ng n??ng c???p v?? c??ng n???i b???t h???a h???n s??? mang ?????n nh???ng tr???i nghi???m t???t nh???t v??? m???i m???t m?? ch??a m???t chi???c iPhone ti???n nhi???m n??o c?? ???????c.iPhone 12 Pro Max 512GB - ?????ng c???p t??? t??n g???i ?????n t???ng chi ti???t. Ngay t??? khi ch??? l?? tin ?????n th?? chi???c smartphone n??y ???? l??m ?????ng ng???i kh??ng y??n bao ???fan c???ng??? nh?? Apple, v???i nh???ng n??ng c???p v?? c??ng n???i b???t h???a h???n s??? mang ?????n nh???ng tr???i nghi???m t???t nh???t v??? m???i m???t m?? ch??a m???t chi???c iPhone ti???n nhi???m n??o c?? ???????c.', 39990000, 'https://cdn.tgdd.vn/Products/Images/42/213033/iphone-12-pro-max-xanh-duong-new-600x600-600x600.jpg', NULL, 47),
(130, 'OPPO Find X3 Pro 5G', 'OPPO ???? l??m khuynh ?????o th??? tr?????ng smartphone khi cho ra ?????i chi???c ??i???n tho???i OPPO Find X3 Pro 5G. ????y l?? m???t s???n ph???m c?? thi???t k??? ?????c ????o, s??? h???u c???m camera kh???ng, c???u h??nh thu???c top ?????u trong th??? gi???i Android.', 26990000, 'https://cdn.tgdd.vn/Products/Images/42/232190/oppo-find-x3-pro-black-001-1-600x600.jpg', NULL, 49),
(131, 'Xiaomi Mi 11 5G', 'Xiaomi Mi 11 m???t si??u ph???m ?????n t??? Xiaomi, m??y cho tr???i nghi???m hi???u n??ng h??ng ?????u v???i vi x??? l?? Qualcomm Snapdragon 888, c??ng lo???t c??ng ngh??? ?????nh cao, khi???n b???t k??? ai c??ng s??? cho??ng ng???p v??? smartphone n??y.', 16990000, 'https://cdn.tgdd.vn/Products/Images/42/226264/xiaomi-mi-11-xanhduong-600x600-600x600.jpg', NULL, 48),
(132, 'Xiaomi Redmi 9T (6GB/128GB)', 'Xiaomi ti???p t???c ???ph?? ?????o??? ph??n kh??c gi?? r??? t???m trung v???i Redmi 9T 6GB/128GB. N???i b???t v???i thi???t k??? tr??? trung, m??n h??nh si??u l???n, b??? 4 camera AI, pin c???c kh???ng, m???u smartphone n??y s??? th???a m??n m???i nhu c???u gi???i tr??, ni???m ??am m?? s??ng t???o v?? kh??m ph?? kh??ng ng???ng c???a gi???i tr???.', 4090000, 'https://cdn.tgdd.vn/Products/Images/42/233130/xiaomi-redmi-9t-6gb-110621-080650-600x600.jpg', NULL, 48),
(133, 'Samsung Galaxy A51 (6GB/128GB)', 'Theo Strategy Analytics, Galaxy A51 l?? Smartphone Android B??n Ch???y Nh???t Th??? Gi???i Qu?? 1/2020, m??y s??? h???u c???m 4 camera, bao g???m camera macro ch???p c???n c???nh l???n ?????u xu???t hi???n tr??n smartphone Samsung, m??n h??nh tr??n vi???n v?? c???c c??ng m???t l??ng h???a ti???t kim c????ng n???i b???t.', 5890000, 'https://cdn.tgdd.vn/Products/Images/42/211570/samsung-galaxy-a51-silver-600x600.jpg', NULL, 46),
(135, 'Vivo Y53s', 'Vivo mang ?????n ni???m vui cho m???i ng?????i tin d??ng khi h??ng ch??nh th???c tung ra chi???c ??i???n tho???i Vivo Y53s v???i nh???ng t??nh n??ng ti??n ti???n ??i c??ng hi???u n??ng m???nh m???. ?????c bi???t, smartphone l???i c??n s??? h???u m???c gi?? h???p d???n trong ph??n kh??c t???m trung ?????y h???a h???n.', 6990000, 'https://cdn.tgdd.vn/Products/Images/42/240286/vivo-y53s-xanh-600x600.jpg', 0, 51),
(136, 'Realme C25s', 'N???i ti???p th??nh c??ng c???a Realme C25, Realme ???? cho ra m???t m???u smartphone mang t??n Realme C25s v???i nhi???u t??nh n??ng v?????t tr???i v??? camera, dung l?????ng pin, con chip m???nh m??? v?? h??n h???t l?? ???????c b??n ra v???i m???c gi?? gi?? v?? c??ng t???t.', 4990000, 'https://cdn.tgdd.vn/Products/Images/42/238483/realme-c25s-grey-7-600x600.jpg', 0, 53),
(137, 'Samsung Galaxy Note 20', 'Th??ng 8/2020, Galaxy Note 20 ch??nh th???c ???????c l??n k???, v???i thi???t k??? camera tr?????c n???t ru???i quen thu???c, c???m camera h??nh ch??? nh???t m???i l??? c??ng v???i vi x??? l?? Exynos 990 cao c???p c???a ch??nh Samsung ch???c h???n s??? mang l???i m???t tr???i nghi???m th?? v??? c??ng hi???u n??ng m???nh m???.', 14990000, 'https://cdn.tgdd.vn/Products/Images/42/218355/samsung-galaxy-note-20-062220-122200-fix-600x600.jpg', 0, 46),
(138, 'Xiaomi Redmi Note 10 5G 8GB', 'Redmi Note 10 5G m???t trong nh???ng m???u ??i???n tho???i thu???c series Redmi Note 10 c???a Xiaomi, kh??ng ch??? s??? h???u hi???u n??ng m???nh m??? ????p ???ng t???t nhu c???u ch??i game, ????y c??n l?? chi???c ??i???n tho???i c?? h??? tr??? m???ng 5G cho t???c ????? k???t n???i nhanh ch??ng.', 5990000, 'https://cdn.tgdd.vn/Products/Images/42/235971/xiaomi-redmi-note-10-5g-xanh-bong-dem-1-600x600.jpg', 0, 48),
(139, 'Vsmart Aris Pro', 'Th????ng hi???u smartphone Vi???t - Vsmart ch??nh th???c tr??nh l??ng Vsmart Aris Pro. M???u ??i???n tho???i n??y ????nh d???u m???t b?????c ngo???c l???n trong l??ng smartphone v???i c??ng ngh??? camera ???n trong m??n h??nh, m???c gi?? h???p l?? gi??p ng?????i Vi???t c?? c?? h???i ti???p c???n nh???ng c??ng ngh??? m???i nh???t.', 5490000, 'https://cdn.tgdd.vn/Products/Images/42/228531/vsmart-aris-pro-green-600jpg-600x600.jpg', 0, 52),
(140, 'Nokia C30', 'Nokia C30 l?? d??ng smartphone gi?? r??? ???????c Nokia ch??m ch??t v?? ?????u t?? k??? l?????ng v???i nh???ng n??ng c???p ????ng k??? v??? hi???u n??ng camera c??ng vi??n pin c???c kh???ng so v???i Nokia C20 ??em l???i tr???i nghi???m tuy???t v???i h??n th??? h??? ti???n nhi???m c???a m??nh.', 2990000, 'https://cdn.tgdd.vn/Products/Images/42/239748/nokia-c30-xam-1-600x600.jpg', 0, 50);

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
