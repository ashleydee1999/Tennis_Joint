-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2020 at 04:25 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tennisjoint`
--
CREATE DATABASE IF NOT EXISTS `tennisjoint` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tennisjoint`;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--
-- Creation: Aug 14, 2020 at 08:04 PM
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE `brand` (
  `idBrand` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `brand`:
--

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`idBrand`, `name`) VALUES
(1, 'NIKE'),
(2, 'ADIDAS'),
(3, 'PUMA'),
(4, 'NEW bALANCE'),
(5, 'ASICS'),
(6, 'SKECHERS'),
(7, 'FILA'),
(8, 'BATA'),
(9, 'BURBERRY'),
(10, 'LOUIS vUITTON'),
(11, 'GUCCI'),
(12, 'HERMES'),
(13, 'PRADA'),
(14, 'CHANEL'),
(15, 'RALPH lAUREN'),
(16, 'VERSACE');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--
-- Creation: Aug 14, 2020 at 08:04 PM
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `idcategories` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `categories`:
--

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`idcategories`, `name`) VALUES
(1, 'Clothing'),
(2, 'Shoes'),
(3, 'Accessories'),
(4, 'Technology'),
(5, 'Equipment'),
(6, 'Boys Clothing'),
(7, 'Girls Clothing'),
(8, 'Boys Shoes'),
(9, 'Girls Shoes');

-- --------------------------------------------------------

--
-- Table structure for table `clothing`
--
-- Creation: Aug 14, 2020 at 08:04 PM
--

DROP TABLE IF EXISTS `clothing`;
CREATE TABLE `clothing` (
  `idProducts` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `color` varchar(45) NOT NULL,
  `price` float NOT NULL,
  `size` varchar(45) NOT NULL,
  `targetMarket` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `Type` int(11) NOT NULL,
  `Brand` int(11) NOT NULL,
  `picture` text NOT NULL,
  `picture2` text NOT NULL,
  `picture3` text NOT NULL,
  `dateAdded` date NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `clothing`:
--   `Brand`
--       `brand` -> `idBrand`
--   `idProducts`
--       `products` -> `idProducts`
--   `Type`
--       `types` -> `idTypes`
--   `category`
--       `categories` -> `idcategories`
--   `targetMarket`
--       `targetmarket` -> `idtargetMarket`
--

--
-- Dumping data for table `clothing`
--

INSERT INTO `clothing` (`idProducts`, `name`, `color`, `price`, `size`, `targetMarket`, `category`, `Type`, `Brand`, `picture`, `picture2`, `picture3`, `dateAdded`, `quantity`) VALUES
(4, 'MEN\'S NEW BALANCE CLASSIC CORE LOGO WHITE TEE', 'White', 399.99, 'Extra Large', 1, 1, 1, 4, 'Tshirt1A.JPG', 'Tshirt1B.JPG', 'Tshirt1C.JPG', '2020-08-14', 500),
(4, 'MEN\'S NEW BALANCE CLASSIC CORE LOGO WHITE TEE', 'White', 399.99, 'Large', 1, 1, 1, 4, 'Tshirt1A.JPG', 'Tshirt1B.JPG', 'Tshirt1C.JPG', '2020-08-14', 500),
(4, 'MEN\'S NEW BALANCE CLASSIC CORE LOGO WHITE TEE', 'White', 399.99, 'Medium', 1, 1, 1, 4, 'Tshirt1A.JPG', 'Tshirt1B.JPG', 'Tshirt1C.JPG', '2020-08-14', 500),
(4, 'MEN\'S NEW BALANCE CLASSIC CORE LOGO WHITE TEE', 'White', 399.99, 'Small', 1, 1, 1, 4, 'Tshirt1A.JPG', 'Tshirt1B.JPG', 'Tshirt1C.JPG', '2020-08-14', 500),
(5, 'Ladies Training Tights', 'Maroon', 699, '32', 2, 1, 5, 1, 'Tights1A.JPG', 'Tights1B.JPG', 'Tights1C.JPG', '2020-08-14', 22),
(6, 'GIRLS NIKE TRICOT BRIGHT PINK TRACKSUIT', 'Pink', 399, '6-8 Years', 4, 7, 7, 2, 'tracksuit1A.JPG', 'tracksuit1B.JPG', 'tracksuit1C.JPG', '2020-08-14', 52),
(7, 'BOYS NIKE AIR BLACK/WHITE TRACKSUIT', 'Black', 300, '12-14 Years', 3, 6, 7, 1, 'tracksuit2A.JPG', 'tracksuit2B.JPG', 'tracksuit2C.JPG', '2020-08-14', 52),
(8, 'WOMEN\'S ADIDAS BADGE OF SPORT FOIL PURPLE TINT TEE', 'White & Purple', 1299, '28', 2, 1, 5, 2, 'Tshirt3A.JPG', 'Tshirt3B.JPG', 'Tshirt3C.JPG', '2020-08-14', 50);

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--
-- Creation: Aug 14, 2020 at 08:04 PM
--

DROP TABLE IF EXISTS `equipment`;
CREATE TABLE `equipment` (
  `idProducts` int(11) NOT NULL,
  `size` varchar(45) NOT NULL,
  `name` varchar(255) NOT NULL,
  `color` varchar(45) NOT NULL,
  `price` double NOT NULL,
  `category` int(11) NOT NULL,
  `Type` int(11) NOT NULL,
  `Brand` int(11) NOT NULL,
  `picture` text NOT NULL,
  `picture2` text NOT NULL,
  `picture3` text NOT NULL,
  `dateAdded` date NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `equipment`:
--   `Brand`
--       `brand` -> `idBrand`
--   `idProducts`
--       `products` -> `idProducts`
--   `Type`
--       `types` -> `idTypes`
--   `category`
--       `categories` -> `idcategories`
--

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`idProducts`, `size`, `name`, `color`, `price`, `category`, `Type`, `Brand`, `picture`, `picture2`, `picture3`, `dateAdded`, `quantity`) VALUES
(5, 'Standard', 'WILSON TRIAD 133 SQUASH RACQUET', 'Black', 2499.95, 5, 29, 1, 'Equipment1A.jpg', 'Equipment1B.jpg', 'Equipment1C.jpg', '2020-08-14', 500),
(6, 'Regular', 'Nike Headband', 'Pink', 300, 5, 18, 1, 'headBand.jpg', 'headBand2.jpg', 'headBand3.jpg', '2020-09-07', 50);

-- --------------------------------------------------------

--
-- Table structure for table `footware`
--
-- Creation: Aug 14, 2020 at 08:04 PM
--

DROP TABLE IF EXISTS `footware`;
CREATE TABLE `footware` (
  `idProducts` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `color` varchar(45) NOT NULL,
  `size` int(11) NOT NULL,
  `price` float NOT NULL,
  `category` int(11) NOT NULL,
  `targetMarket` int(11) NOT NULL,
  `Type` int(11) NOT NULL,
  `Brand` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `picture2` varchar(255) NOT NULL,
  `picture3` varchar(255) NOT NULL,
  `dateAdded` date NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `footware`:
--   `Brand`
--       `brand` -> `idBrand`
--   `idProducts`
--       `products` -> `idProducts`
--   `Type`
--       `types` -> `idTypes`
--   `category`
--       `categories` -> `idcategories`
--   `targetMarket`
--       `targetmarket` -> `idtargetMarket`
--

--
-- Dumping data for table `footware`
--

INSERT INTO `footware` (`idProducts`, `name`, `color`, `size`, `price`, `category`, `targetMarket`, `Type`, `Brand`, `picture`, `picture2`, `picture3`, `dateAdded`, `quantity`) VALUES
(1, 'MEN\'S NIKE DOWNSHIFTER 10 NAVY/CRIMSON SHOE', 'Red', 4, 500, 2, 1, 9, 1, 'shoe1A.JPG', 'shoe1B.JPG', 'shoe1C.JPG', '2020-08-14', 500),
(1, 'MEN\'S NIKE DOWNSHIFTER 10 NAVY/CRIMSON SHOE', 'Red', 5, 500, 2, 1, 9, 1, 'shoe1A.JPG', 'shoe1B.JPG', 'shoe1C.JPG', '2020-08-14', 500),
(1, 'MEN\'S NIKE DOWNSHIFTER 10 NAVY/CRIMSON SHOE', 'Red', 7, 500, 2, 1, 9, 1, 'shoe1A.JPG', 'shoe1B.JPG', 'shoe1C.JPG', '2020-08-14', 500),
(1, 'MEN\'S NIKE DOWNSHIFTER 10 NAVY/CRIMSON SHOE', 'Red', 9, 500, 2, 1, 9, 1, 'shoe1A.JPG', 'shoe1B.JPG', 'shoe1C.JPG', '2020-08-14', 500),
(2, 'WOMEN\'S NEW BALANCE DRAFT GREY/BLACK/BERRY SHOE', 'Pink', 5, 749.96, 2, 2, 9, 4, 'shoe2A.JPG', 'shoe2B.JPG', 'shoe2C.JPG', '2020-08-14', 500),
(3, 'MEN\'S ASICS GEL EXCITE 7 NAVY SHOE', 'Navy', 9, 459, 2, 1, 9, 5, 'shoe3A.JPG', 'shoe3B.JPG', 'shoe3C.JPG', '2020-08-14', 500),
(4, 'Nike Ladies Trainers', 'Pink', 5, 1799, 2, 2, 10, 1, 'shoe4A.JPG', 'shoe4B.JPG', 'shoe4C.JPG', '2020-08-14', 40);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--
-- Creation: Aug 14, 2020 at 08:04 PM
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `idorders` int(11) NOT NULL,
  `customerEmail` varchar(100) NOT NULL,
  `dateTime` date NOT NULL,
  `orderStatus` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `orders`:
--   `customerEmail`
--       `users` -> `email`
--

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`idorders`, `customerEmail`, `dateTime`, `orderStatus`) VALUES
(6, 'ashDee@gmail.com', '2020-09-07', 'processed');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--
-- Creation: Aug 14, 2020 at 08:04 PM
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `idProducts` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `products`:
--

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`idProducts`, `quantity`) VALUES
(1, 55),
(2, 548),
(3, 848),
(4, 443),
(5, 455),
(6, 564),
(7, 784),
(8, 444),
(9, 14),
(10, 8949),
(11, 449),
(12, 4949),
(13, 4646),
(14, 894),
(15, 48450),
(16, 5866),
(17, 46843),
(18, 46664),
(19, 6846),
(20, 64663),
(21, 31),
(22, 2686),
(23, 8604),
(24, 4049),
(25, 49796),
(26, 9790),
(27, 79790),
(28, 90709),
(29, 709667),
(30, 90970),
(31, 87970),
(32, 97960),
(33, 7960),
(34, 979),
(35, 9709),
(36, 97990),
(37, 876697),
(38, 9009),
(39, 66),
(40, 49466),
(41, 0),
(42, 790),
(43, 8979),
(44, 848),
(45, 49796),
(46, 455),
(47, 31),
(48, 784),
(49, 757),
(50, 686),
(51, 54),
(52, 966),
(53, 21),
(54, 5454),
(55, 4848),
(56, 6446),
(57, 876),
(58, 766),
(59, 6820),
(60, 1240),
(61, 769),
(62, 5044),
(63, 8809),
(64, 6870),
(65, 4460),
(66, 654),
(67, 63);

-- --------------------------------------------------------

--
-- Table structure for table `targetmarket`
--
-- Creation: Aug 14, 2020 at 08:04 PM
--

DROP TABLE IF EXISTS `targetmarket`;
CREATE TABLE `targetmarket` (
  `idtargetMarket` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `targetmarket`:
--

--
-- Dumping data for table `targetmarket`
--

INSERT INTO `targetmarket` (`idtargetMarket`, `Name`) VALUES
(1, 'Men'),
(2, 'Ladies'),
(3, 'Boys'),
(4, 'Girls'),
(5, 'Anyone');

-- --------------------------------------------------------

--
-- Table structure for table `trolley`
--
-- Creation: Aug 14, 2020 at 08:04 PM
--

DROP TABLE IF EXISTS `trolley`;
CREATE TABLE `trolley` (
  `idProducts` int(11) NOT NULL,
  `customerEmail` varchar(100) NOT NULL,
  `quantity` int(10) NOT NULL,
  `size` varchar(45) NOT NULL,
  `theTable` varchar(45) NOT NULL,
  `orderStatus` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `trolley`:
--   `idProducts`
--       `products` -> `idProducts`
--   `customerEmail`
--       `users` -> `email`
--

--
-- Dumping data for table `trolley`
--

INSERT INTO `trolley` (`idProducts`, `customerEmail`, `quantity`, `size`, `theTable`, `orderStatus`) VALUES
(5, 'ashDee@gmail.com', 2, '32', 'clothing', 'processed');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--
-- Creation: Aug 14, 2020 at 08:04 PM
--

DROP TABLE IF EXISTS `types`;
CREATE TABLE `types` (
  `idTypes` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `types`:
--

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`idTypes`, `Name`) VALUES
(1, 'T-Shirt'),
(2, 'Golf'),
(3, 'Vests'),
(4, 'Pants'),
(5, 'Tights'),
(6, 'Shorts'),
(7, 'Tracksuits'),
(8, 'Base Layer'),
(9, 'Running'),
(10, 'Training'),
(11, 'Sandals'),
(12, 'Squash'),
(13, 'Sports Bra\'s'),
(14, 'Skorts'),
(15, 'Towels'),
(16, 'Hats'),
(17, 'Bottles'),
(18, 'Headband & Wristband'),
(19, 'Fitness Tracker'),
(20, 'Sports Watches'),
(21, 'Heart Rate Monitor'),
(22, 'Balls'),
(23, 'Strings'),
(24, 'Grips'),
(25, 'Vibration Dampner'),
(26, 'Nets'),
(27, 'Lifestyle'),
(28, 'Bags'),
(29, 'Rackets');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: Aug 14, 2020 at 08:04 PM
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `email` varchar(100) NOT NULL,
  `name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(45) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `profPic` text NOT NULL,
  `userLevel` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `users`:
--

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `name`, `surname`, `phone`, `address`, `password`, `dob`, `gender`, `profPic`, `userLevel`) VALUES
('ashDee@gmail.com', 'John', 'Dube', '0838642247', '14 Vrede Street', '123456', '1-September-1999', 'Male', 'Test.jpg', 'customer'),
('ashleydee1999@gmail.com', 'Ashley', 'Dube', '0838642247', '14 Vrede Street', '123456', '1-January-1999', 'Male', 'AshDee.jpg', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`idBrand`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`idcategories`);

--
-- Indexes for table `clothing`
--
ALTER TABLE `clothing`
  ADD PRIMARY KEY (`idProducts`,`size`),
  ADD KEY `fk_Clothing_targetMarket1_idx` (`targetMarket`),
  ADD KEY `fk_Clothing_categories1_idx` (`category`),
  ADD KEY `fk_Clothing_Types1_idx` (`Type`),
  ADD KEY `fk_Clothing_Brand1_idx` (`Brand`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`idProducts`,`size`),
  ADD KEY `fk_Equipment_categories1_idx` (`category`),
  ADD KEY `fk_Equipment_Types1_idx` (`Type`),
  ADD KEY `fk_Equipment_Brand1_idx` (`Brand`);

--
-- Indexes for table `footware`
--
ALTER TABLE `footware`
  ADD PRIMARY KEY (`idProducts`,`size`),
  ADD KEY `fk_Footware_categories1_idx` (`category`),
  ADD KEY `fk_Footware_targetMarket1_idx` (`targetMarket`),
  ADD KEY `fk_Footware_Types1_idx` (`Type`),
  ADD KEY `fk_Footware_Brand1_idx` (`Brand`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`idorders`,`customerEmail`),
  ADD KEY `fk_orders_Users1_idx` (`customerEmail`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idProducts`);

--
-- Indexes for table `targetmarket`
--
ALTER TABLE `targetmarket`
  ADD PRIMARY KEY (`idtargetMarket`);

--
-- Indexes for table `trolley`
--
ALTER TABLE `trolley`
  ADD PRIMARY KEY (`idProducts`,`customerEmail`,`size`),
  ADD KEY `fk_Trolley_Users1_idx` (`customerEmail`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`idTypes`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `idBrand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `idcategories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `clothing`
--
ALTER TABLE `clothing`
  MODIFY `idProducts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `idProducts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `footware`
--
ALTER TABLE `footware`
  MODIFY `idProducts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `idorders` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `idProducts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `targetmarket`
--
ALTER TABLE `targetmarket`
  MODIFY `idtargetMarket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `idTypes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clothing`
--
ALTER TABLE `clothing`
  ADD CONSTRAINT `fk_Clothing_Brand1` FOREIGN KEY (`Brand`) REFERENCES `brand` (`idBrand`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Clothing_Products1` FOREIGN KEY (`idProducts`) REFERENCES `products` (`idProducts`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Clothing_Types1` FOREIGN KEY (`Type`) REFERENCES `types` (`idTypes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Clothing_categories1` FOREIGN KEY (`category`) REFERENCES `categories` (`idcategories`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Clothing_targetMarket1` FOREIGN KEY (`targetMarket`) REFERENCES `targetmarket` (`idtargetMarket`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `equipment`
--
ALTER TABLE `equipment`
  ADD CONSTRAINT `fk_Equipment_Brand1` FOREIGN KEY (`Brand`) REFERENCES `brand` (`idBrand`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Equipment_Products1` FOREIGN KEY (`idProducts`) REFERENCES `products` (`idProducts`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Equipment_Types1` FOREIGN KEY (`Type`) REFERENCES `types` (`idTypes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Equipment_categories1` FOREIGN KEY (`category`) REFERENCES `categories` (`idcategories`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `footware`
--
ALTER TABLE `footware`
  ADD CONSTRAINT `fk_Footware_Brand1` FOREIGN KEY (`Brand`) REFERENCES `brand` (`idBrand`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Footware_Products` FOREIGN KEY (`idProducts`) REFERENCES `products` (`idProducts`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Footware_Types1` FOREIGN KEY (`Type`) REFERENCES `types` (`idTypes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Footware_categories1` FOREIGN KEY (`category`) REFERENCES `categories` (`idcategories`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Footware_targetMarket1` FOREIGN KEY (`targetMarket`) REFERENCES `targetmarket` (`idtargetMarket`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_Users1` FOREIGN KEY (`customerEmail`) REFERENCES `users` (`email`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `trolley`
--
ALTER TABLE `trolley`
  ADD CONSTRAINT `fk_Trolley_Products1` FOREIGN KEY (`idProducts`) REFERENCES `products` (`idProducts`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Trolley_Users1` FOREIGN KEY (`customerEmail`) REFERENCES `users` (`email`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
