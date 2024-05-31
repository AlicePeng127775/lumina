-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 07:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lumina_userlogin`
--
CREATE DATABASE IF NOT EXISTS `lumina_userlogin` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `lumina_userlogin`;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(8) NOT NULL,
  `date` date NOT NULL,
  `postCode` varchar(8) NOT NULL,
  `shippedAddress` varchar(256) NOT NULL,
  `shippedDate` date NOT NULL,
  `comments` text NOT NULL,
  `userId` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `date`, `postCode`, `shippedAddress`, `shippedDate`, `comments`, `userId`) VALUES
(1, '2024-05-30', '85300', 'test', '2024-05-31', 'test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `productId` int(8) NOT NULL,
  `orderId` int(8) NOT NULL,
  `orderedQuantity` int(8) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`productId`, `orderId`, `orderedQuantity`, `price`) VALUES
(2, 1, 10, 200);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(8) NOT NULL,
  `name` varchar(128) NOT NULL,
  `price` varchar(8) NOT NULL,
  `quantity` int(8) NOT NULL,
  `image` varchar(64) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `quantity`, `image`, `description`) VALUES
(2, 'Pumpkin Spice Candle\r\n', '29.99', 30, 'Pumpkin.jpeg', 'Embrace the warm, inviting aroma of freshly baked pumpkin pie, rich spices, and a hint of vanilla in a candle. Hand-poured and perfect for creating a welcoming atmosphere in your home during this fall season'),
(3, 'Maple Leaf Candle', '29.99', 30, 'Maple.jpeg', 'Transport yourself to the stunning fall landscape of Vancouver with our Mpale leaf candle. This elegantly designed candle captures the spirit of the beautiful autumn scenery offering a comforting and earthy fragrance that will make your home or space feel like a cozy foreset retreat.'),
(4, 'Mistletoe Magic Candle', '29.99', 30, 'Mistletoe.jpeg', 'Step into a world of holiday wonder with our Mistletoe Magic candle. This enchanting scent captures the essence of the season, blending your home with fresh mistletoe, a hint of evergreen and a touch of holiday magic. Light it up and let the festive spirit come alive in every corner of your space'),
(5, 'Hot Chocolate Candle', '39.99', 30, 'Chocolate.jpeg', 'Wrap yourself with our delicious warm Hot chocolate candle. Its rich and relaxing scent makes it like having warm cocoa by your side during the cold season. let the fragrance of the creamy chocolate and hint of marshmallow complete your space and create an ambiance that is perfect for relaxation and unwinding.'),
(6, 'Sunkissed Candle', '39.99', 30, 'Sunkissed.jpeg', 'Level up the fun with this delightful scent that captures the warmth of the summer sun, combining citrus, coconut and a touch of sea breeze called Sunkissed candle this summer season. Create an ambiance for your sunny adventure or moment of relaxation wherever you go this time of the year.'),
(7, 'Vanilla Candle', '39.99', 30, 'Vanilla.jpeg', 'Experience the summer vibes with our new Vanilla bean creme candle. This scent is crafted for those who enjoy anything but vanilla flavours. featuring pure vanilla bean and extracts ensuring the rich scent to be added to your space. Complete your day with this sweet and comforting vibe of summer.'),
(8, 'Lavender Flied Candle', '49.99', 30, 'Lavender.jpeg', 'Bring the enchanting beauty of a lavender field into your home this spring season with our Lavender field candle. This scent will illuminate your space, elevate your spirit, and let the soothing smell of lavender bring you to a new world full of lavender.'),
(9, 'Cherry Blossom Candle', '49.99', 30, 'CherryBlossom.jpeg', 'Experience renewal and growth with our Cherry blossom candle. This scent is not just a normal scent; it’s a journey to a season of renewal. Allow the scent of cherry blossom to fill each corner of your home with a fresh, calming, and soothing smell.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(8) NOT NULL,
  `fn` varchar(64) NOT NULL,
  `ln` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(256) NOT NULL,
  `province` varchar(32) NOT NULL,
  `postcode` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fn`, `ln`, `password`, `email`, `phone`, `address`, `province`, `postcode`) VALUES
(1, 'alice', 'peng', 'yuan1207', 'yuan127775@gmail.com', '2368650127', '7611 mayfield st', 'British Columbia', 'V5E 2J2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`productId`,`orderId`),
  ADD KEY `orderId` (`orderId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`id`);

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`orderId`) REFERENCES `order` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
