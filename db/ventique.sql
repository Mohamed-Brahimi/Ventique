-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 21, 2025 at 11:04 PM
-- Server version: 8.0.43
-- PHP Version: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ventique`
--

-- --------------------------------------------------------

--
-- Table structure for table `antiques`
--

CREATE TABLE `antiques` (
  `id` int NOT NULL,
  `utilisateur_id` int NOT NULL,
  `nom` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `antiques`
--

INSERT INTO `antiques` (`id`, `utilisateur_id`, `nom`, `prix`, `description`, `image`) VALUES
(2, 2, 'Vase Grecque', 102, 'C\'est un vase représentant la mort de Chronos', 'image.png'),
(3, 1, 'Vase Grecque', 100, 'C\'est un vase représentant la mort de Médusa', 'image.png'),
(6, 1, 'Vase Romain', 100, 'C\'est un vase représentant la mort de Saturne', 'image.png'),
(7, 1, 'Holy', 213, 'It had the blood of jesus frfr', 'image.png'),
(8, 1, 'Holy Grail', 321, 'it might be jesus', 'image.png'),
(9, 5, 'asd', 321, 'Hope', 'image.png'),
(10, 5, 'asdd', 321, 'Hope', 'image.png');

-- --------------------------------------------------------

--
-- Table structure for table `offres`
--

CREATE TABLE `offres` (
  `id` int NOT NULL,
  `utilisateur_id` int NOT NULL,
  `antique_id` int NOT NULL,
  `prix_propose` decimal(10,0) NOT NULL,
  `dateOffre` date NOT NULL,
  `efface` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offres`
--

INSERT INTO `offres` (`id`, `utilisateur_id`, `antique_id`, `prix_propose`, `dateOffre`, `efface`) VALUES
(4, 2, 2, 10, '2025-08-28', 0),
(13, 1, 2, 100, '2025-08-28', 0),
(17, 2, 2, 23, '2025-08-29', 0),
(22, 1, 2, 3, '2025-09-04', 0),
(23, 1, 6, 213, '2025-09-04', 0),
(24, 1, 2, 132, '2025-09-04', 0),
(25, 1, 2, 2, '2025-09-04', 0),
(26, 1, 6, 21, '2025-09-04', 0),
(27, 1, 7, 214, '2025-09-20', 0),
(28, 1, 8, 322, '2025-09-20', 0),
(29, 1, 8, 322, '2025-09-20', 0),
(30, 1, 8, 322, '2025-09-20', 0),
(31, 1, 8, 322, '2025-09-20', 0),
(32, 1, 8, 322, '2025-09-20', 0),
(33, 1, 8, 322, '2025-09-20', 0),
(34, 1, 8, 322, '2025-09-20', 0),
(35, 1, 8, 325, '2025-09-20', 0),
(36, 1, 10, 2122, '2025-09-20', 1),
(37, 5, 10, 322, '2025-09-21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int NOT NULL,
  `nom` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `email`, `password`) VALUES
(1, 'Mohamed A', 'mohare1@gmail.com', 'Password'),
(2, 'Mohamed', 'mohare2@gmail.com', 'Password'),
(3, 'Lucas', 'mohare3@gmail.com', 'Password'),
(5, 'MohTset', 'bramo@gmail.com', 'Pas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antiques`
--
ALTER TABLE `antiques`
  ADD PRIMARY KEY (`id`),
  ADD KEY `utilisateur_id` (`utilisateur_id`) USING BTREE;

--
-- Indexes for table `offres`
--
ALTER TABLE `offres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `utilisateur_id` (`utilisateur_id`) USING BTREE,
  ADD KEY `antique_id` (`antique_id`) USING BTREE;

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antiques`
--
ALTER TABLE `antiques`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `offres`
--
ALTER TABLE `offres`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `antiques`
--
ALTER TABLE `antiques`
  ADD CONSTRAINT `antiques_ibfk_1` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `offres`
--
ALTER TABLE `offres`
  ADD CONSTRAINT `offres_ibfk_1` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `offres_ibfk_2` FOREIGN KEY (`antique_id`) REFERENCES `antiques` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
ALTER TABLE `antiques`
  ADD CONSTRAINT `antiques_ibfk_1` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `offres`
--
ALTER TABLE `offres`
  ADD CONSTRAINT `offres_ibfk_1` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `offres_ibfk_2` FOREIGN KEY (`antique_id`) REFERENCES `antiques` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
