-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2020 at 04:28 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watchstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `accessory_id` int(11) NOT NULL,
  `accessory_name` varchar(100) NOT NULL,
  `accessory_url` varchar(100) NOT NULL,
  `accessory_price` int(11) NOT NULL,
  `accessory_status` int(11) NOT NULL,
  `create_day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`accessory_id`, `accessory_name`, `accessory_url`, `accessory_price`, `accessory_status`, `create_day`) VALUES
(1, 'Dây đồng hồ Casio', '1', 80, 1, '2020-04-02'),
(2, 'Dây đông hồ Bulova', '2', 100, 0, '2020-04-01'),
(3, 'Dây đồng hồ SR', '3', 900, 0, '2020-03-31'),
(4, 'Dây đồng da bò Bulova', '4', 1000, 0, '2020-04-03'),
(5, 'Dây đồng hồ da bò hãng SEIKO', '5', 80, 0, '2020-03-29'),
(6, 'Dây đồ hồ da cá sấu hãng Casio', '6', 90, 0, '2020-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `bill_id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `phone_number` varchar(50) CHARACTER SET utf8 NOT NULL,
  `bill_status` int(11) NOT NULL,
  `bill_quantity` int(11) NOT NULL,
  `bill_total` int(11) NOT NULL,
  `create_day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`bill_id`, `content`, `name`, `email`, `address`, `phone_number`, `bill_status`, `bill_quantity`, `bill_total`, `create_day`) VALUES
(58, '89,90,91,97', 'Nguyễn Tấn Hà', 'NTH@gmail.com', 'Hà huy tập - Quang Trung - Tp.Kontum', '0012312111', 1, 6, 1020, '2020-01-20'),
(60, '97,98', 'Nguyễn Tấn Hà', 'NTH@gmail.com', 'Hà huy tập - Quang Trung - Tp.Kontum', '0012312111', 0, 4, 369, '2020-02-02'),
(61, '90', 'Nguyễn Tấn Hà', 'NTH@gmail.com', 'Hà huy tập - Quang Trung - Tp.Kontum', '0012312111', 0, 1, 200, '2020-03-01'),
(62, '91,97', 'Nguyễn Tấn Hà', 'NTH@gmail.com', 'Hà huy tập - Quang Trung - Tp.Kontum', '0012312111', 1, 4, 570, '2020-05-11'),
(63, '89', 'Nguyễn Tấn Hà', 'NTH@gmail.com', 'Hà huy tập - Quang Trung - Tp.Kontum', '0012312111', 1, 1, 250, '2020-04-25'),
(64, '94,99,100', 'Vũ Xuân Cương', 'vuxuancuong98gl@gmail.com', 'Thôn 8 - Chợ Lớn - Kongchoro - Gia lai', '09654654012', 0, 6, 900, '2020-06-10'),
(65, '94,99,100,101', 'Vũ Xuân Cương', 'vuxuancuong98gl@gmail.com', 'Thôn 8 - Chợ Lớn - Kongchoro - Gia lai', '09654654012', 0, 12, 5012, '2020-07-01'),
(66, '104,102,103', 'Vũ Minh Hoàng', 'VMH@gmail.com', 'Đức Cơ - Gia Lai', '0977777799', 0, 8, 1798, '2020-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `cart_id` int(11) NOT NULL,
  `cart_user_id` int(11) NOT NULL,
  `cart_product_id` int(11) NOT NULL,
  `cart_price` int(11) NOT NULL,
  `cart_quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `create_day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`cart_id`, `cart_user_id`, `cart_product_id`, `cart_price`, `cart_quantity`, `total`, `create_day`) VALUES
(51, 20, 28, 100, 3, 300, '2020-06-17'),
(52, 20, 33, 34, 6, 204, '2020-06-17'),
(53, 20, 34, 44, 1, 44, '2020-06-17'),
(89, 21, 32, 250, 1, 250, '2020-06-22'),
(90, 21, 29, 200, 1, 200, '2020-06-22'),
(91, 21, 31, 300, 1, 300, '2020-06-22'),
(92, 17, 28, 100, 2, 200, '2020-06-30'),
(93, 17, 29, 200, 1, 200, '2020-06-30'),
(94, 16, 29, 200, 3, 600, '2020-06-30'),
(97, 21, 35, 90, 3, 270, '2020-07-04'),
(98, 21, 39, 99, 1, 99, '2020-07-04'),
(99, 16, 36, 100, 1, 100, '2020-07-06'),
(100, 16, 28, 100, 2, 200, '2020-07-06'),
(101, 16, 38, 10000, 6, 60000, '2020-07-06'),
(102, 22, 31, 300, 4, 1200, '2020-07-07'),
(103, 22, 39, 99, 2, 198, '2020-07-07'),
(104, 22, 29, 200, 2, 400, '2020-07-07');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `create_day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `create_day`) VALUES
(1, 'Casio', '2020-03-13'),
(2, 'BULOVA', '2020-03-31'),
(3, 'ORIENT', '0000-00-00'),
(4, 'OGIVAL\r\n', '0000-00-00'),
(5, 'SENKO', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_descript` varchar(255) NOT NULL,
  `product_url` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_gender` int(11) NOT NULL,
  `product_status` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `create_day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_category_id`, `product_name`, `product_descript`, `product_url`, `product_price`, `product_gender`, `product_status`, `type`, `product_quantity`, `create_day`) VALUES
(27, 1, 'Dây đồng hồ', ' Dây đồng hồ', 'Day-dong-ho-seiko.jpg', 10, 1, 1, 2, 12, '2020-05-20'),
(28, 5, 'Đồng hồ Seiko', ' ', 'seiko.jpg', 100, 1, 1, 1, 6, '2020-05-20'),
(29, 1, 'Đồng hồ Casio', ' Đồng hồ Casio', 'Casio-GD.png', 200, 1, 0, 1, 2, '2020-05-20'),
(30, 3, 'Đồng hồ Orient', ' Đồng hồ Orien', 'dong-ho-orient-fgw01004a0-10_1588734904.jpg', 1000, 1, 0, 1, 0, '2020-05-20'),
(31, 2, 'Đồng hồ Bulova', ' Đồng hồ Bulova\r\nKích thước mặt kính 40mm', 'bulova.jpg', 300, 1, 2, 1, 5, '2020-05-20'),
(32, 4, 'Đồng hồ Ogival', ' Đồng hồ Ogival\r\nKích thước mặt kính 35mm', 'olympia-star-opa58089ms-gl-t_1588210233.jpg', 250, 1, 1, 1, 15, '2020-05-20'),
(33, 1, 'Phụ kiện đồng hồ', ' Phụ kiện đồng hồ dây da casio', 'pk-dd-kyda-s22d_1577270812.jpg', 34, 1, 1, 2, 2, '2020-05-20'),
(34, 2, 'Phụ kiện đồng hồ', ' Khoá cánh bướm vàng', 'pk-khoabuom-s16v_1577328865.jpg', 44, 1, 0, 2, 10, '2020-05-20'),
(35, 3, 'Đồng hồ', 'Đường kính mặt 40mm - Chống nước 3at', 'ogival-og30328ms-x_1584026868.jpg', 90, 1, 0, 1, 7, '2020-05-20'),
(36, 5, 'Đồng hồ', 'Đồng hồ Casio Đường kính mặt 35cm', 'dong-ho-ogival-og35861amr-gl-t_1588044703.jpg', 100, 1, 1, 1, 8, '2020-05-20'),
(38, 2, 'Đồng hồ cơ BULOVA', ' Đồng hồ Bulova\r\nKích thước mặt kính 40mm', 'bulova-nam-96b210_1562839212.jpg', 10000, 1, 0, 1, 2, '2020-06-15'),
(39, 3, 'Đồng hồ SL1056', ' Đường kính 3.5', 'srwatch-sl10564602te_1572333188.jpg', 99, 1, 1, 1, 0, '2020-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `slider_id` int(11) NOT NULL,
  `slider_name` varchar(255) NOT NULL,
  `slider_url` varchar(100) NOT NULL,
  `create_day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`slider_id`, `slider_name`, `slider_url`, `create_day`) VALUES
(1, 'CASIO', '1', '0000-00-00'),
(2, 'BULOVA', '2', '0000-00-00'),
(3, 'SR', '3', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `statistic_id` int(11) NOT NULL,
  `statistic_quantity` int(11) NOT NULL,
  `statistic_money` int(11) NOT NULL,
  `statistic_month` int(11) NOT NULL,
  `create_day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`statistic_id`, `statistic_quantity`, `statistic_money`, `statistic_month`, `create_day`) VALUES
(1, 6, 1020, 1, '2020-07-06'),
(2, 4, 369, 2, '2020-06-10'),
(3, 1, 200, 3, '0000-00-00'),
(4, 1, 250, 4, '0000-00-00'),
(5, 12, 2368, 5, '0000-00-00'),
(6, 6, 900, 6, '2020-06-09'),
(7, 12, 5012, 7, '0000-00-00'),
(8, 0, 0, 8, '0000-00-00'),
(9, 0, 0, 9, '0000-00-00'),
(10, 0, 0, 10, '0000-00-00'),
(11, 0, 0, 11, '0000-00-00'),
(12, 0, 0, 12, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `create_day` date NOT NULL,
  `rule` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `name`, `password`, `email`, `address`, `phone_number`, `create_day`, `rule`) VALUES
(16, 'CuongAdmin', 'Vũ Xuân Cương', '$2y$10$swm9DPaEnNp8K/y1GS6PCufIyPvDYDn7AKFmX.VfH6AFT/P51kSbu', 'vuxuancuong98gl@gmail.com', 'Thôn 8 - Chợ Lớn - Kongchoro - Gia lai', '09654654012', '2020-06-21', 1),
(17, '16152480201002', 'Hoàng Thao Nam', '$2y$10$vCZ/WpgcoH9KDEQeRgtbluUpoyv9En23LL4WUmcbeENEDuZFKXdT2', 'HTNgl@gmail.com', '35 Nguyễn Sinh Sắc - Kontum - Tình Kontum', '09654654012', '2020-04-13', 0),
(20, 'VuXuanCuong', 'vũ xuân cương', '$2y$10$jA0MRL7b86X6yeEdh00sx.F4or6K68SE/Fy9HybVQOcmMMC37CsQG', 'vuxuancuong98gl@gmail.com', 'Kongchoro - Gia lai', '0963719679', '2020-06-17', 0),
(21, 'NTH', 'Nguyễn Tấn Hà', '$2y$10$iPgTPX2XVcsRZxoVv0dRH.jjDhFykRun1mqBvDdHuLv/Bsis0O9w.', 'NTH@gmail.com', 'Hà huy tập - Quang Trung - Tp.Kontum', '0012312111', '2020-06-22', 0),
(22, 'VuMinhHoang', 'Vũ Minh Hoàng', '$2y$10$l8yHiWR6WxNpINCckeCUyOqJlmIeELzOlpWUmcXYFkCi7xakuKB8W', 'VMH@gmail.com', 'Đức Cơ - Gia Lai', '0977777799', '2020-07-07', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`accessory_id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `cart_product_id` (`cart_product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`statistic_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `accessory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `statistic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`cart_product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
