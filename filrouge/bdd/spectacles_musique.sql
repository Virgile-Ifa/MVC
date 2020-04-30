-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  jeu. 30 avr. 2020 à 14:46
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `spectacles_musique`
--

-- --------------------------------------------------------

--
-- Structure de la table `groupes`
--

DROP TABLE IF EXISTS `groupes`;
CREATE TABLE IF NOT EXISTS `groupes` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nom_groupe` varchar(100) NOT NULL,
  `date_creation` datetime NOT NULL,
  `del` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `groupes`
--

INSERT INTO `groupes` (`id`, `nom_groupe`, `date_creation`, `del`) VALUES
(7, 'Pendulum', '2020-04-02 00:00:00', 0),
(6, 'Casseurs Flowteurs', '2020-04-03 00:00:00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `groupes_musiciens_relation`
--

DROP TABLE IF EXISTS `groupes_musiciens_relation`;
CREATE TABLE IF NOT EXISTS `groupes_musiciens_relation` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `id_groupe` int(255) NOT NULL,
  `id_musicien` int(255) NOT NULL,
  `id_roles` int(11) NOT NULL,
  `del` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `groupes_musiciens_relation`
--

INSERT INTO `groupes_musiciens_relation` (`id`, `id_groupe`, `id_musicien`, `id_roles`, `del`) VALUES
(12, 6, 11, 0, 0),
(11, 6, 9, 0, 0),
(10, 7, 10, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `musiciens`
--

DROP TABLE IF EXISTS `musiciens`;
CREATE TABLE IF NOT EXISTS `musiciens` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `date_creation` datetime NOT NULL,
  `date_modif` datetime NOT NULL,
  `del` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `musiciens`
--

INSERT INTO `musiciens` (`id`, `nom`, `prenom`, `date_creation`, `date_modif`, `del`) VALUES
(10, 'Swire', 'Rob', '2020-04-10 00:00:00', '0000-00-00 00:00:00', 0),
(9, 'Cotentin', 'Aurelien', '2020-04-06 00:00:00', '0000-00-00 00:00:00', 0),
(11, 'Tranchant', 'Guillaume', '2020-04-08 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  `del` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `libelle`, `del`) VALUES
(1, 'batteur', 0),
(2, 'guitariste', 0),
(3, 'chanteur', 0),
(6, 'vocaliste', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
