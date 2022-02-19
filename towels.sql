-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 03:12 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `towels`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(5) NOT NULL,
  `pd_name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pd_name`, `price`, `category`, `img`) VALUES
(1, 'White 100% Cotton 8 Pieces 550 GSM Towel Set', 2249, 'Towel set', '..\\images\\f1.jpg'),
(2, 'Frozen Pink Microfiber Bath Towel', 199, 'kids towel', '..\\images\\f2.jpg'),
(3, 'Pink Cotton 280 GSM Ladies Bath Towel', 229, 'bath towel', '..\\images\\f3.jpg'),
(4, 'Set Of 5 Blue Cotton 500 GSM Face Towels', 349, 'Towel set', '..\\images\\f4.jpg'),
(5, 'Red Cotton 450 GSM Bath Towel', 949, 'bath towel', '..\\images\\f5.jpg'),
(6, 'Black Cotton 390 GSM Bath Towel', 829, 'bath towel', '..\\images\\f6.jpg'),
(7, 'Grey Cotton 370 GSM Bath Towel', 599, 'bath towel', '..\\images\\f7.jpg'),
(8, 'Apple Green Microfiber 425 GSM Kid Towel', 499, 'kids towel', '..\\images\\f8.jpg'),
(9, 'Red Cotton 450  Bath Towel', 799, 'bath towel', '..\\images\\f9.jpg'),
(10, 'Peach Cotton Casper Solid 550 GSM Large Bath Towel', 1299, 'bath towel', '..\\images\\f10.jpg'),
(11, 'Coral Textured Stripe Cotton 550 GSM Bath Towel', 749, 'bath towel', '..\\images\\f11.jpg'),
(12, 'Mark Home 100% Cotton 500 GSM Zero Twist Anti Micr', 519, 'hand towel , towel set', '..\\images\\f12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `items` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `customer`, `items`) VALUES
(33, 'user3', '  Frozen Pink Microfiber Bath Towel , Pink Cotton 280 GSM Ladies Bath Towel , Red Cotton 450 GSM Bath Towel'),
(36, 'viya', '  Frozen Pink Microfiber Bath Towel , Pink Cotton 280 GSM Ladies Bath Towel'),
(37, 'keerthana', '  Apple Green Microfiber 425 GSM Kid Towel'),
(40, 'Sam', 'Black Cotton 390 GSM Bath Towel');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'keerthana', 'keer', 'keerthikumaresh30@gmail.com'),
(2, 'user3', 'admin2', 'admin@gmail.com'),
(6, 'viya', 'viyana', 'abc@gmail.com'),
(7, 'Amsha', '1978', 'am@gmail.com'),
(10, 'Sam', '123456', 'ags@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pd_name` (`pd_name`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10002;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
