-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : sam. 09 mars 2024 à 10:26
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sushi`
--

-- --------------------------------------------------------

--
-- Structure de la table `Aliment`
--

CREATE TABLE `Aliment` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Aliment`
--

INSERT INTO `Aliment` (`id`, `name`, `image`) VALUES
(1, 'avocat', 'image de avocat'),
(2, 'California Saumon Avocat', 'http://localhost:3000/src/assets/aliment_img/Sushisaumon.jpg'),
(3, 'Sushi Saumon', 'http://localhost:3000/src/assets/aliment_img/Sushisaumon.jpg'),
(4, 'Spring Avocat Cheese', 'http://localhost:3000/src/assets/aliment_img/avocat.jpeg'),
(5, 'California pacific', 'http://localhost:3000/src/assets/aliment_img/pacific.jpeg'),
(6, 'Salade de chou', 'http://localhost:3000/src/assets/aliment_img/saladechou.jpeg'),
(7, 'Maki Salmon Roll', 'http://localhost:3000/src/assets/aliment_img/maki.jpeg'),
(8, 'Spring Saumon Avocat', 'http://localhost:3000/src/assets/aliment_img/maki.jpeg'),
(9, 'Maki Cheese Avocat', 'http://localhost:3000/src/assets/aliment_img/maki.jpeg'),
(10, 'Sushi Thon', 'http://localhost:3000/src/assets/aliment_img/thon.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `box`
--

CREATE TABLE `box` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `pieces` decimal(4,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `box`
--

INSERT INTO `box` (`id`, `name`, `image`, `price`, `pieces`) VALUES
(108, 'Tasty Blend', 'http://localhost:3000/src/assets/box_img/2.jpg', 12.5, '12'),
(109, 'Amateur Mix', 'http://localhost:3000/src/assets/box_img/17.jpg', 15.9, '18'),
(110, 'Saumon Original', 'http://localhost:3000/src/assets/box_img/19.jpg', 12.9, '11'),
(111, 'Salmon Lovers', 'http://localhost:3000/src/assets/box_img/5.jpg', 19.99, '18'),
(112, 'Salmon Classic', 'http://localhost:3000/src/assets/box_img/4.jpg', 9.99, '11'),
(113, 'Sunrise', 'http://localhost:3000/src/assets/box_img/20.jpg', 19.99, '20'),
(114, 'Fresh Mix', 'http://localhost:3000/src/assets/box_img/12.jpg', 24.99, '22'),
(115, 'Gourmet Mix', 'http://localhost:3000/src/assets/box_img/13.jpg', 22.5, '22'),
(117, 'Tasty Blend', 'http://localhost:3000/src/assets/box_img/2.jpg', 12.5, '12'),
(118, 'Tasty Blend', 'http://localhost:4000/src/assets/box_img/2.jpg', 12.5, '12'),
(119, 'Tasty Blend', 'http://localhost:4000/src/assets/box_img/2.jpg', 12.5, '12');

-- --------------------------------------------------------

--
-- Structure de la table `Composition`
--

CREATE TABLE `Composition` (
  `id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `id_box` int(11) DEFAULT NULL,
  `id_aliment` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Composition`
--

INSERT INTO `Composition` (`id`, `quantity`, `id_box`, `id_aliment`) VALUES
(1, 5, 112, 1),
(2, 5, 110, 1),
(3, 3, 108, 2),
(4, 2, 108, 3),
(5, 4, 108, 4),
(6, 3, 108, 5),
(7, 4, 109, 7),
(8, 3, 109, 6),
(9, 2, 109, 8),
(10, 3, 109, 10),
(11, 2, 110, 5),
(12, 2, 110, 10),
(13, 4, 110, 7),
(14, 3, 110, 2),
(15, 4, 111, 2),
(16, 3, 111, 7),
(17, 2, 111, 6),
(18, 3, 111, 3),
(19, 2, 112, 4),
(20, 2, 112, 10),
(21, 3, 112, 6),
(22, 4, 112, 8),
(23, 4, 113, 3),
(24, 3, 113, 7),
(25, 2, 113, 9),
(26, 3, 113, 4),
(27, 3, 114, 5),
(28, 4, 114, 6),
(29, 2, 114, 3),
(30, 3, 114, 2),
(31, 4, 115, 4),
(32, 3, 115, 3),
(33, 2, 115, 6),
(34, 3, 115, 8);

-- --------------------------------------------------------

--
-- Structure de la table `savor`
--

CREATE TABLE `savor` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `savor`
--

INSERT INTO `savor` (`id`, `name`, `image`) VALUES
(1, 'riz', 'image de riz'),
(2, 'riz', 'http://localhost:3000/src/assets/savor_img/rice.jpg'),
(3, 'avocat', 'http://localhost:3000/src/assets/savor_img/avocat.jpg'),
(4, 'Saumon', 'http://localhost:3000/src/assets/savor_img/salmon.jpg'),
(6, 'avocat', 'image de avocat');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Aliment`
--
ALTER TABLE `Aliment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `box`
--
ALTER TABLE `box`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Composition`
--
ALTER TABLE `Composition`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_box_id` (`id_box`),
  ADD KEY `fk_id_aliment` (`id_aliment`);

--
-- Index pour la table `savor`
--
ALTER TABLE `savor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Aliment`
--
ALTER TABLE `Aliment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `box`
--
ALTER TABLE `box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT pour la table `Composition`
--
ALTER TABLE `Composition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `savor`
--
ALTER TABLE `savor`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Composition`
--
ALTER TABLE `Composition`
  ADD CONSTRAINT `fk_box_id` FOREIGN KEY (`id_box`) REFERENCES `box` (`id`),
  ADD CONSTRAINT `fk_id_aliment` FOREIGN KEY (`id_aliment`) REFERENCES `aliment` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
