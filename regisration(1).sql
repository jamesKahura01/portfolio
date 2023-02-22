-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2022 at 12:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regisration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `username` varchar(20) NOT NULL,
  `password` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`username`, `password`) VALUES
('jameskahura01', 'james2001');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` int(11) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `category` varchar(39) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_name`, `item_price`, `item_image`, `category`) VALUES
(1, 'Avocado', 15, 'images/631642baebd516.54058784.jpg', 'fruits'),
(2, 'pinapples', 25, 'images/631642dc11ce53.16455152.jpg', 'fruits'),
(4, 'Apples', 15, 'images/631642f80c7cc7.61785659.jpg', 'fruits'),
(7, 'Onion', 50, 'images/onion.jpg', 'vegetables'),
(10, 'spinach', 30, 'images/631c6cc501b313.45485513.jpg', 'leafy vegetables'),
(12, 'kales', 30, 'images/631370e78666a5.14442707.jpg', 'leafy vegetables'),
(14, 'corriander', 30, 'images/631c6b361df992.02952379.jpg', 'leafy vegetables'),
(15, 'cabbages', 25, 'images/images3.jpg', 'leafy vegetables'),
(16, 'Green maize', 40, 'images/green maize.jpg', 'others'),
(18, 'green bananas', 50, 'images/green banana.jpg', 'others'),
(19, 'Potatoes', 60, 'images/images4.jpg', 'others'),
(33, 'pawpaw', 15, 'images/631643155148e4.75404576.jpg', 'fruits'),
(35, 'tomatoes', 45, 'images/631716924d6c74.64820112.jpg', 'vegetables'),
(36, 'cogette', 30, 'images/631714d471bd94.79042868.jpg', 'vegetables'),
(40, 'coffee', 30, 'images/631715085d9265.32497606.jpg', 'others'),
(41, 'red chilly', 30, 'images/6317147c3273b0.38900847.jpg', 'vegetables'),
(43, 'green chillies', 25, 'images/6317149e45cab8.33274960.jpg', 'vegetables'),
(52, 'ripe bananas', 5, 'images/631c6eabc3a7d6.66565195.jpg', 'fruits'),
(53, 'oranges', 5, 'images/631c6d54b52e43.84003393.jpg', 'fruits'),
(54, 'cucumber', 20, 'images/631c6762652d24.19955267.jpg', 'vegetables');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(20) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` varchar(255) NOT NULL,
  `total` int(100) NOT NULL,
  `Uname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `phone` int(100) NOT NULL,
  `Delivery` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `productname`, `quantity`, `price`, `total`, `Uname`, `Email`, `phone`, `Delivery`, `Address`) VALUES
(384, 'Green maize,tomatoes,pinapples,Apples,', 189151, 'Ksh 40,Ksh 45,Ksh 25,Ksh 15,', 1595, 'james', 'jameskahura01@gmail.com', 718239612, 'Home delivery', 'Nyaribo'),
(385, 'Avocado,tomatoes,red chilly,', 1156, 'Ksh 15,Ksh 45,Ksh 30,', 920, 'james', 'jameskahura01@gmail.com', 718239612, 'Home delivery', 'Nyaribo'),
(388, 'cabbages,Avocado,', 1910, 'Ksh 25,Ksh 15,', 675, 'peter', 'jameskahura01@gmail.com', 718239612, 'Home delivery', 'Nyeri view'),
(393, 'tomatoes,', 14, 'Ksh 45,', 660, 'jag', 'jameskahura01@gmail.com', 9876543, 'pickup station', 'kingo\'ngo'),
(394, 'pinapples,cogette,', 11, 'Ksh 25,Ksh 30,', 55, 'john', 'techjk1206@gmail.com', 718239612, 'Home delivery', 'Nyaribo'),
(396, 'pinapples,tomatoes,', 117, 'Ksh 25,Ksh 45,', 820, 'james', 'jameskahura01@gmail.com', 718239612, 'Home delivery', 'Embassy'),
(397, 'Avocado,red chilly,', 110, 'Ksh 15,Ksh 30,', 335, 'james', 'jameskahura01@gmail.com', 718239612, 'Home delivery', 'Nyeri view'),
(398, 'Avocado,kales,', 1313, 'Ksh 15,Ksh 30,', 685, 'james', 'jameskahura01@gmail.com', 718239612, 'Home delivery', 'Nyaribo'),
(399, 'Avocado,kales,', 1313, 'Ksh 15,Ksh 30,', 685, 'james', 'jameskahura01@gmail.com', 718239612, 'Home delivery', 'Nyaribo'),
(400, 'Avocado,kales,', 1313, 'Ksh 15,Ksh 30,', 685, 'peter', 'techjk1206@gmail.com', 708074348, 'Home delivery', 'chania'),
(401, 'Avocado,kales,', 1313, 'Ksh 15,Ksh 30,', 685, 'john', 'jameskahura01@gmail.com', 708074348, 'Home delivery', 'Embassy'),
(402, 'Avocado,kales,', 1313, 'Ksh 15,Ksh 30,', 685, 'name', 'techjk1206@gmail.com', 718239612, 'Home delivery', 'Embassy'),
(403, 'pinapples,green chillies,', 110, 'Ksh 25,Ksh 25,', 295, 'joy', 'techjk1206@gmail.com', 718239612, 'Home delivery', 'chaka'),
(404, 'pinapples,green chillies,', 110, 'Ksh 25,Ksh 25,', 295, 'peter', 'techjk1206@gmail.com', 708074348, 'Home delivery', 'Nyaribo');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(30) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phoneNumber` int(100) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  `verified` int(10) DEFAULT 0,
  `vkey` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `email`, `phoneNumber`, `password`, `verified`, `vkey`) VALUES
(92, 'name1', 'jameskahura01@gmail.com', 718239612, '123456Aa', 1, '4273908a32492206e0476fe15243d0b0'),
(94, 'kahura', 'kahura.j19@students.dkut.ac.ke', 708074348, '222222Qq', 1, 'd2e898e3c1d5022b1e82d7059a0c43dd'),
(101, 'jaymoh', 'techjk1206@gmail.com', 718239612, '123456Qq', 1, '17a6765d7033d2c19fe6f7c7ef1b7886'),
(103, 'sam', 'kahurandoiyo@gmail.com', 718239612, '123456Aa', 0, '8fe7843f9e6f7e47628ad7a44f40e419');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin1`
--
ALTER TABLE `admin1`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=405;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
