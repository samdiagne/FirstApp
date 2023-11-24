-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 24 nov. 2023 à 04:55
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `atelier1_dev_web`
--

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `budget` decimal(10,2) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `statut` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id`, `code`, `nom`, `description`, `budget`, `date_debut`, `date_fin`, `statut`) VALUES
(7, 'pY52', 'Telechargement de packages', 'mettre a jour tous les packages', '10000.00', '2023-11-23', '2023-12-10', 1),
(8, 'isi01', 'Collectes de points', 'Recueillir des points géographiques', '50000.00', '2024-01-02', '2024-01-10', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`code`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
