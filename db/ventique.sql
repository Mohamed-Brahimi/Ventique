-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 28 août 2025 à 19:29
-- Version du serveur : 8.0.43
-- Version de PHP : 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ventique`
--

-- --------------------------------------------------------

--
-- Structure de la table `antiques`
--

CREATE TABLE `antiques` (
  `id` int NOT NULL,
  `utilisateur_id` int NOT NULL,
  `nom` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `image` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `antiques`
--

INSERT INTO `antiques` (`id`, `utilisateur_id`, `nom`, `prix`, `description`, `image`) VALUES
(2, 2, 'Vase Grecque', 102, 'C\'est un vase représentant la mort de Chronos', 'image.png'),
(3, 1, 'Vase Grecque', 100, 'C\'est un vase représentant la mort de Médusa', 'image.png'),
(6, 1, 'Vase Romain', 100, 'C\'est un vase représentant la mort de Saturne', 'image.png');

-- --------------------------------------------------------

--
-- Structure de la table `offres`
--

CREATE TABLE `offres` (
  `id` int NOT NULL,
  `utilisateur_id` int NOT NULL,
  `antique_id` int NOT NULL,
  `prix_propose` decimal(10,0) NOT NULL,
  `dateOffre` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `offres`
--

INSERT INTO `offres` (`id`, `utilisateur_id`, `antique_id`, `prix_propose`, `dateOffre`) VALUES
(1, 1, 3, 123, '2025-08-28'),
(2, 2, 3, 123, '2025-08-28'),
(3, 2, 2, 10, '2025-08-28'),
(4, 2, 2, 10, '2025-08-28'),
(11, 2, 3, 10, '2025-08-28'),
(12, 1, 2, 100, '2025-08-28'),
(13, 1, 2, 100, '2025-08-28');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int NOT NULL,
  `nom` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `email`, `password`) VALUES
(1, 'Mohamed A', 'mohare@gmail.com', 'Password'),
(2, 'Mohamed', 'mohare@gmail.com', 'Password');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `antiques`
--
ALTER TABLE `antiques`
  ADD PRIMARY KEY (`id`),
  ADD KEY `utilisateur_id` (`utilisateur_id`) USING BTREE;

--
-- Index pour la table `offres`
--
ALTER TABLE `offres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `utilisateur_id` (`utilisateur_id`) USING BTREE,
  ADD KEY `antique_id` (`antique_id`) USING BTREE;

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `antiques`
--
ALTER TABLE `antiques`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `offres`
--
ALTER TABLE `offres`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `antiques`
--
ALTER TABLE `antiques`
  ADD CONSTRAINT `antiques_ibfk_1` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `offres`
--
ALTER TABLE `offres`
  ADD CONSTRAINT `offres_ibfk_1` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `offres_ibfk_2` FOREIGN KEY (`antique_id`) REFERENCES `antiques` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
