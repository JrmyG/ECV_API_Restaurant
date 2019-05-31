-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 31 mai 2019 à 15:06
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `restaurant`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `Id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Created_at` datetime(6) DEFAULT NULL,
  `Updated_at` datetime(6) DEFAULT NULL,
  `Id_commande` int(20) UNSIGNED DEFAULT NULL,
  `Id_reservation` int(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id_réservation` (`Id_reservation`),
  KEY `Id_commande` (`Id_commande`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_client` int(11) UNSIGNED DEFAULT NULL,
  `id_plat` int(20) UNSIGNED DEFAULT NULL,
  `Created_at` datetime(6) DEFAULT NULL,
  `Updated_at` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_client` (`id_client`),
  KEY `id_plat` (`id_plat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commandes_plats`
--

DROP TABLE IF EXISTS `commandes_plats`;
CREATE TABLE IF NOT EXISTS `commandes_plats` (
  `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Plats_ID` int(20) UNSIGNED DEFAULT NULL,
  `Commandes_ID` int(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Plats_ID` (`Plats_ID`),
  KEY `Commandes_ID` (`Commandes_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `factures`
--

DROP TABLE IF EXISTS `factures`;
CREATE TABLE IF NOT EXISTS `factures` (
  `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Date_Heure` datetime NOT NULL,
  `ID_Reservation` int(20) UNSIGNED DEFAULT NULL,
  `Etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Created_at` datetime(6) DEFAULT NULL,
  `Updated_at` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ID_Reservation` (`ID_Reservation`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2019_05_16_145338_create_factures_table', 1),
(12, '2019_05_16_145402_create_reservations_table', 1),
(13, '2019_05_16_145420_create_clients_table', 1),
(14, '2019_05_16_145430_create_commandes_table', 1),
(15, '2019_05_16_145440_create_plats_table', 1),
(16, '2019_05_25_094223_clients', 2),
(17, '2019_05_25_150111_commandes', 3);

-- --------------------------------------------------------

--
-- Structure de la table `plats`
--

DROP TABLE IF EXISTS `plats`;
CREATE TABLE IF NOT EXISTS `plats` (
  `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Created_at` datetime(6) DEFAULT NULL,
  `Updated_at` datetime(6) DEFAULT NULL,
  `plat_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=217 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `plats`
--

INSERT INTO `plats` (`id`, `Created_at`, `Updated_at`, `plat_id`) VALUES
(199, '2019-05-30 20:29:03.000000', '2019-05-30 20:29:03.000000', 52959),
(200, '2019-05-30 20:29:03.000000', '2019-05-30 20:29:03.000000', 52819),
(201, '2019-05-30 20:29:03.000000', '2019-05-30 20:29:03.000000', 52944),
(202, '2019-05-30 20:29:03.000000', '2019-05-30 20:29:03.000000', 52802),
(203, '2019-05-30 20:29:03.000000', '2019-05-30 20:29:03.000000', 52918),
(204, '2019-05-30 20:29:04.000000', '2019-05-30 20:29:04.000000', 52764),
(205, '2019-05-30 20:29:04.000000', '2019-05-30 20:29:04.000000', 52773),
(206, '2019-05-30 20:29:04.000000', '2019-05-30 20:29:04.000000', 52887),
(207, '2019-05-30 20:29:04.000000', '2019-05-30 20:29:04.000000', 52946),
(208, '2019-05-30 20:29:04.000000', '2019-05-30 20:29:04.000000', 52821),
(209, '2019-05-30 20:29:04.000000', '2019-05-30 20:29:04.000000', 52809),
(210, '2019-05-30 20:29:04.000000', '2019-05-30 20:29:04.000000', 52960),
(211, '2019-05-30 20:29:04.000000', '2019-05-30 20:29:04.000000', 52823),
(212, '2019-05-30 20:29:05.000000', '2019-05-30 20:29:05.000000', 52936),
(213, '2019-05-30 20:29:05.000000', '2019-05-30 20:29:05.000000', 52836),
(214, '2019-05-30 20:29:05.000000', '2019-05-30 20:29:05.000000', 52953),
(215, '2019-05-30 20:29:05.000000', '2019-05-30 20:29:05.000000', 52882),
(216, '2019-05-30 20:29:05.000000', '2019-05-30 20:29:05.000000', 52852);

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Date_heure` datetime NOT NULL,
  `Id_client` int(11) UNSIGNED DEFAULT NULL,
  `Created_at` datetime(6) DEFAULT NULL,
  `Updated_at` datetime(6) DEFAULT NULL,
  `id_facture` int(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Id_client` (`Id_client`),
  KEY `id_facture` (`id_facture`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `FK_Client_Commande` FOREIGN KEY (`Id_commande`) REFERENCES `commandes` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Client_Reservation` FOREIGN KEY (`Id_reservation`) REFERENCES `reservations` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `fk_commande_clients` FOREIGN KEY (`id_client`) REFERENCES `clients` (`Id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_commande_plats` FOREIGN KEY (`id_plat`) REFERENCES `commandes_plats` (`Plats_ID`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Contraintes pour la table `commandes_plats`
--
ALTER TABLE `commandes_plats`
  ADD CONSTRAINT `fk_commandes_plats` FOREIGN KEY (`Commandes_ID`) REFERENCES `commandes` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_plats_commande` FOREIGN KEY (`Plats_ID`) REFERENCES `plats` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Contraintes pour la table `factures`
--
ALTER TABLE `factures`
  ADD CONSTRAINT `fk_facture_reservation` FOREIGN KEY (`ID_Reservation`) REFERENCES `reservations` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Contraintes pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `fk_reservation_facture` FOREIGN KEY (`id_facture`) REFERENCES `factures` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_reservations_client` FOREIGN KEY (`Id_client`) REFERENCES `clients` (`Id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
