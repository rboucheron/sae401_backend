-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2024 at 08:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sushi`
--

-- --------------------------------------------------------

--
-- Table structure for table `box`
--

CREATE TABLE `box` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` longtext NOT NULL,
  `price` double NOT NULL,
  `pieces` decimal(4,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `box`
--

INSERT INTO `box` (`id`, `name`, `image`, `price`, `pieces`) VALUES
(108, 'Tasty Blend', 'http://localhost:3000/src/assets/box_img/2.jpg', 12.5, '12'),
(109, 'Amateur Mix', 'http://localhost:3000/src/assets/box_img/17.jpg', 15.9, '18'),
(110, 'Saumon Original', 'http://localhost:3000/src/assets/box_img/19.jpg', 12.9, '11'),
(111, 'Salmon Lovers', 'http://localhost:3000/src/assets/box_img/5.jpg', 19.99, '18'),
(112, 'Salmon Classic', 'http://localhost:3000/src/assets/box_img/4.jpg', 9.99, '11'),
(113, 'Sunrise', 'http://localhost:3000/src/assets/box_img/20.jpg', 19.99, '20');

-- --------------------------------------------------------

--
-- Table structure for table `savor`
--

CREATE TABLE `savor` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `savor`
--

INSERT INTO `savor` (`id`, `name`, `image`) VALUES
(1, 'riz', 'http://localhost:3000/src/assets/savor_img/rice.jpg');
(2, 'avocat', 'http://localhost:3000/src/assets/savor_img/avocat.jpg');
(3, 'Saumon', 'http://localhost:3000/src/assets/savor_img/salmon.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `box`
--
ALTER TABLE `box`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `box`
--
ALTER TABLE `box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
