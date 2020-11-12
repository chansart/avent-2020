-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 11 nov. 2020 à 22:28
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `adventcalendar`
--

-- --------------------------------------------------------

--
-- Structure de la table `calendars`
--

CREATE TABLE `calendars` (
  `calendar_id` int(11) NOT NULL,
  `calendar_userId` int(11) NOT NULL,
  `calendar_nbrofuser` int(11) NOT NULL,
  `calendar_date` date NOT NULL,
  `calendar_layout` varchar(50) NOT NULL,
  `calendar_background` varchar(50) NOT NULL,
  `calendar_menu` varchar(7) NOT NULL,
  `calendar_title` longtext NOT NULL,
  `calendar_1` longtext NOT NULL,
  `calendar_1_type` varchar(30) NOT NULL,
  `calendar_2` longtext NOT NULL,
  `calendar_2_type` varchar(30) NOT NULL,
  `calendar_3` longtext NOT NULL,
  `calendar_3_type` varchar(30) NOT NULL,
  `calendar_4` longtext NOT NULL,
  `calendar_4_type` varchar(30) NOT NULL,
  `calendar_5` longtext NOT NULL,
  `calendar_5_type` varchar(30) NOT NULL,
  `calendar_6` longtext NOT NULL,
  `calendar_6_type` varchar(30) NOT NULL,
  `calendar_7` longtext NOT NULL,
  `calendar_7_type` varchar(30) NOT NULL,
  `calendar_8` longtext NOT NULL,
  `calendar_8_type` varchar(30) NOT NULL,
  `calendar_9` longtext NOT NULL,
  `calendar_9_type` varchar(30) NOT NULL,
  `calendar_10` longtext NOT NULL,
  `calendar_10_type` varchar(30) NOT NULL,
  `calendar_11` longtext NOT NULL,
  `calendar_11_type` varchar(30) NOT NULL,
  `calendar_12` longtext NOT NULL,
  `calendar_12_type` varchar(30) NOT NULL,
  `calendar_13` longtext NOT NULL,
  `calendar_13_type` varchar(30) NOT NULL,
  `calendar_14` longtext NOT NULL,
  `calendar_14_type` varchar(30) NOT NULL,
  `calendar_15` longtext NOT NULL,
  `calendar_15_type` varchar(30) NOT NULL,
  `calendar_16` longtext NOT NULL,
  `calendar_16_type` varchar(30) NOT NULL,
  `calendar_17` longtext NOT NULL,
  `calendar_17_type` varchar(30) NOT NULL,
  `calendar_18` longtext NOT NULL,
  `calendar_18_type` varchar(30) NOT NULL,
  `calendar_19` longtext NOT NULL,
  `calendar_19_type` varchar(30) NOT NULL,
  `calendar_20` longtext NOT NULL,
  `calendar_20_type` varchar(30) NOT NULL,
  `calendar_21` longtext NOT NULL,
  `calendar_21_type` varchar(30) NOT NULL,
  `calendar_22` longtext NOT NULL,
  `calendar_22_type` varchar(30) NOT NULL,
  `calendar_23` longtext NOT NULL,
  `calendar_23_type` varchar(30) NOT NULL,
  `calendar_24` longtext NOT NULL,
  `calendar_24_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_nom` varchar(30) NOT NULL,
  `user_prenom` varchar(30) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_mdp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_nom`, `user_prenom`, `user_email`, `user_mdp`) VALUES
(4, 'Hansart', 'Marine', 'hansart.marine@gmail.com', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `calendars`
--
ALTER TABLE `calendars`
  ADD PRIMARY KEY (`calendar_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `calendars`
--
ALTER TABLE `calendars`
  MODIFY `calendar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
