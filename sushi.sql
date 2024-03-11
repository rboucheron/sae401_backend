-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2024 at 06:32 PM
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
-- Table structure for table `aliment`
--

CREATE TABLE `aliment` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `aliment`
--

INSERT INTO `aliment` (`id`, `name`, `image`) VALUES
(1, 'California Saumon Avocat', 'http://localhost:3000/src/assets/aliment_img/Sushisaumon.jpg'),
(2, 'Sushi Saumon', 'http://localhost:3000/src/assets/aliment_img/Sushisaumon.jpg'),
(3, 'Spring Avocat Cheese', 'http://localhost:3000/src/assets/aliment_img/avocat.jpeg'),
(4, 'California pacific', 'http://localhost:3000/src/assets/aliment_img/pacific.jpeg'),
(5, 'Salade de chou', 'http://localhost:3000/src/assets/aliment_img/saladechou.jpeg'),
(6, 'Maki Salmon Roll', 'http://localhost:3000/src/assets/aliment_img/maki.jpeg'),
(7, 'Spring Saumon Avocat', 'http://localhost:3000/src/assets/aliment_img/maki.jpeg'),
(8, 'Maki Cheese Avocat', 'http://localhost:3000/src/assets/aliment_img/maki.jpeg'),
(9, 'Sushi Thon', 'http://localhost:3000/src/assets/aliment_img/thon.jpeg'),
(10, 'California Thon Avocat', 'ouais'),
(11, 'California Thon Cuit Avocat', 'oe'),
(12, 'Sando Chicken Katsu', 'oeoe'),
(13, 'Sando Salmon Aburi', 'blablabla'),
(14, 'Maki Salmon', 'bla'),
(15, 'California Crevette', 'frgtgtgt'),
(16, 'Spring tataki Saumon', 'szde'),
(17, 'Signature Dragon Roll', 'jtf'),
(18, 'California French Touch', 'yhtjr'),
(19, 'California French salmon', 'jyr'),
(20, 'California Yellowtail Ponzu', 'yhjr'),
(21, 'Signature Rock\'n Rollv', 'jyyyyyyyyyt'),
(22, 'Sushi Saumon Tsukudani', 'jyr');

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
(1, 'Tasty Blend', 'http://localhost:3000/src/assets/box_img/2.jpg', 12.5, 12),
(2, 'Amateur Mix', 'http://localhost:3000/src/assets/box_img/17.jpg', 15.9, 18),
(3, 'Saumon Original', 'http://localhost:3000/src/assets/box_img/19.jpg', 12.5, 11),
(4, 'Salmon Lovers', 'http://localhost:3000/src/assets/box_img/5.jpg', 15.9, 18),
(5, 'Salmon Classic', 'http://localhost:3000/src/assets/box_img/4.jpg', 15.9, 10),
(6, 'Master Mix', 'http://localhost:3000/src/assets/box_img/20.jpg', 15.9, 12),
(7, 'Sunrise', 'http://localhost:3000/src/assets/box_img/12.jpg', 15.9, 18),
(8, 'Sando Box Chicken Katsu', 'http://localhost:3000/src/assets/box_img/13.jpg', 15.9, 13),
(9, 'Sando Box Salmon Aburi', 'http://localhost:3000/src/assets/box_img/2.jpg', 15.9, 13),
(10, 'Super Salmon', 'http://localhost:4000/src/assets/box_img/2.jpg', 19.9, 24),
(11, 'California Dream', 'http://localhost:4000/src/assets/box_img/2.jpg', 19.9, 24),
(12, 'Gourmet Mix', 'IMAGE', 24.5, 22),
(13, 'Fresh Mix', 'image', 24.5, 22);

-- --------------------------------------------------------

--
-- Table structure for table `composition`
--

CREATE TABLE `composition` (
  `id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `id_box` int(11) DEFAULT NULL,
  `id_aliment` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `composition`
--

INSERT INTO `composition` (`id`, `quantity`, `id_box`, `id_aliment`) VALUES
(1, 3, 1, 1),
(2, 3, 1, 2),
(3, 3, 1, 4),
(4, 1, 1, 5),
(5, 3, 2, 6),
(6, 3, 2, 7),
(7, 3, 2, 8),
(8, 1, 2, 5),
(9, 6, 3, 1),
(10, 5, 2, 2),
(11, 1, 3, 5),
(12, 6, 4, 1),
(13, 6, 4, 7),
(14, 6, 4, 2),
(15, 1, 4, 5),
(16, 10, 5, 2),
(17, 1, 5, 5),
(18, 4, 6, 2),
(19, 2, 6, 9),
(20, 3, 6, 1),
(21, 3, 6, 10),
(22, 1, 6, 5),
(23, 6, 7, 6),
(24, 6, 7, 1),
(25, 6, 7, 11),
(26, 1, 7, 5),
(27, 1, 8, 12),
(28, 6, 8, 6),
(29, 6, 8, 1),
(30, 6, 8, 11),
(31, 1, 8, 5),
(32, 1, 9, 13),
(33, 6, 9, 1),
(34, 6, 9, 11),
(35, 1, 9, 5),
(36, 6, 10, 1),
(37, 6, 10, 6),
(38, 6, 10, 14),
(39, 6, 10, 7),
(40, 1, 10, 5),
(41, 6, 11, 1),
(42, 6, 11, 15),
(43, 6, 11, 11),
(44, 6, 11, 12),
(45, 1, 11, 5),
(46, 6, 12, 16),
(47, 4, 12, 17),
(48, 3, 12, 18),
(49, 6, 12, 19),
(50, 3, 12, 20),
(51, 1, 12, 5),
(52, 4, 13, 21),
(53, 6, 13, 6),
(54, 6, 13, 4),
(55, 4, 13, 2),
(56, 2, 13, 22),
(57, 1, 13, 5);

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

CREATE TABLE `ingredient` (
  `id` int(11) NOT NULL,
  `id_box` int(11) DEFAULT NULL,
  `id_savor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ingredient`
--

INSERT INTO `ingredient` (`id`, `id_box`, `id_savor`) VALUES
(1, 1, 3),
(2, 1, 2),
(3, 1, 4),
(4, 2, 9),
(5, 2, 3),
(6, 2, 2),
(7, 2, 4),
(8, 3, 2),
(9, 3, 3),
(10, 4, 9),
(11, 4, 2),
(12, 4, 3),
(13, 5, 3),
(14, 6, 3),
(15, 6, 5),
(16, 6, 2),
(17, 7, 3),
(18, 7, 5),
(19, 7, 2),
(20, 7, 4),
(21, 8, 3),
(22, 8, 6),
(23, 8, 2),
(24, 8, 4),
(25, 9, 3),
(26, 9, 5),
(27, 9, 2),
(28, 10, 9),
(29, 10, 3),
(30, 10, 2),
(31, 10, 4),
(32, 11, 7),
(33, 11, 3),
(34, 11, 5),
(35, 11, 8),
(36, 11, 6),
(37, 11, 2),
(38, 12, 9),
(39, 12, 7),
(40, 12, 3),
(41, 12, 6),
(42, 12, 2),
(43, 12, 5),
(44, 13, 7),
(45, 13, 3),
(46, 13, 5),
(47, 13, 2),
(48, 13, 4);

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
(1, 'riz', 'http://localhost:3000/src/assets/savor_img/rice.jpg'),
(2, 'avocat', 'http://localhost:3000/src/assets/savor_img/avocat.jpg'),
(3, 'Saumon', 'http://localhost:3000/src/assets/savor_img/salmon.jpg'),
(4, 'Fromage', 'http://localhost:3000/src/assets/savor_img/cheese.jpeg'),
(5, 'Thon', 'http://localhost:3000/src/assets/savor_img/tuna.jpg'),
(6, 'Viande', 'http://localhost:3000/src/assets/savor_img/meat.jpeg'),
(7, 'Pimenté', 'http://localhost:3000/src/assets/savor_img/spicy.jpeg'),
(8, 'Crevette', 'http://localhost:3000/src/assets/savor_img/shrimp.jpeg'),
(9, 'Coriandre', 'http://localhost:3000/src/assets/savor_img/coriandre.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aliment`
--
ALTER TABLE `aliment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `box`
--
ALTER TABLE `box`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `composition`
--
ALTER TABLE `composition`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_box_id` (`id_box`),
  ADD KEY `fk_id_aliment` (`id_aliment`);

--
-- Indexes for table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_box` (`id_box`),
  ADD KEY `fk_id_savor` (`id_savor`);

--
-- Indexes for table `savor`
--
ALTER TABLE `savor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aliment`
--
ALTER TABLE `aliment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `box`
--
ALTER TABLE `box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1093;

--
-- AUTO_INCREMENT for table `composition`
--
ALTER TABLE `composition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `savor`
--
ALTER TABLE `savor`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `composition`
--
ALTER TABLE `composition`
  ADD CONSTRAINT `fk_box_id` FOREIGN KEY (`id_box`) REFERENCES `box` (`id`),
  ADD CONSTRAINT `fk_id_aliment` FOREIGN KEY (`id_aliment`) REFERENCES `aliment` (`id`);

--
-- Constraints for table `ingredient`
--
ALTER TABLE `ingredient`
  ADD CONSTRAINT `fk_id_box` FOREIGN KEY (`id_box`) REFERENCES `box` (`id`),
  ADD CONSTRAINT `fk_id_savor` FOREIGN KEY (`id_savor`) REFERENCES `savor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
