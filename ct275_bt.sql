-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2022 at 04:46 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ct275_bt`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `brand_id` int(5) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(1, 'Nike'),
(2, 'Adidas'),
(3, 'Vans');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `prd_id` int(11) NOT NULL AUTO_INCREMENT,
  `prd_name` varchar(255) NOT NULL,
  `image` char(50) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`prd_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`prd_id`, `prd_name`, `image`, `price`, `quantity`) VALUES
(1, 'Air Max Plus', 'giay1.png', 150, 5),
(2, 'Air Trainer 1 SP', 'giay2.png', 160, 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `prd_id` int(5) NOT NULL AUTO_INCREMENT,
  `prd_name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `image` char(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `brand_id` int(5) NOT NULL,
  PRIMARY KEY (`prd_id`),
  KEY `brand_id` (`brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prd_id`, `prd_name`, `image`, `price`, `quantity`, `description`, `brand_id`) VALUES
(12, 'Air Max Plus', 'giay1.png', 150, 10, ' fashion design', 1),
(13, 'Air Trainer 1 SP', 'giay2.png', 160, 50, ' quality, cheap price', 1),
(14, 'PG 6 NRG', 'giay3.png', 110, 100, 'Nice', 1),
(17, 'Air Force ', 'giay4.png', 110, 50, 'Unique design', 1),
(19, 'Zoom Air Fire ', 'giay5.png', 120, 45, ' there are 4 colors', 3),
(20, 'Blazer', 'giay6.png', 95, 90, 'best seller 2022', 2),
(21, 'Jordan 13 Retro', 'giay7.png', 200, 120, 'Latest Design', 3),
(23, 'React Phantom', 'giay9.png', 140, 200, 'Youthful design, beautiful colors', 2),
(24, 'Free Run ', 'giay10.png', 100, 5, 'Nice', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `username` varchar(40) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `address` varchar(400) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `gender`, `email`, `address`, `role`) VALUES
(6, 'Huynh Minh Anh', 'anh', '123', 'male', 'anhb1910030@student.ctu.edu.vn', 'Can Tho\r\n', 1),
(12, 'Tang Hoang Phuc', 'phuc', '123', 'female', 'phuc@gmail.com', 'Can Tho', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
