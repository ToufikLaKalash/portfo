-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 30 juin 2019 à 19:13
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
-- Base de données :  `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

DROP TABLE IF EXISTS `experiences`;
CREATE TABLE IF NOT EXISTS `experiences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `date` varchar(32) DEFAULT NULL,
  `lieu` varchar(255) DEFAULT NULL,
  `poste` varchar(255) DEFAULT NULL,
  `texte` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `experiences`
--

INSERT INTO `experiences` (`id`, `nom`, `date`, `lieu`, `poste`, `texte`) VALUES
(1, 'Stage de 3ème', '2015', 'Gréasque - R\'Sud Médical', 'Architecte réseau, développeur web', 'Ce stage consistait en l\'apprentissage de différents domaines de l\informatique, tels que le développement Web et la gestion d\'infrastructure réseau et de tickets d\'incidences.');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Structure de la table `projets`
--

DROP TABLE IF EXISTS `projets`;
CREATE TABLE IF NOT EXISTS `projets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `date` varchar(32) DEFAULT NULL,
  `texte` text,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id`, `nom`, `date`, `texte`, `image`) VALUES
(1, 'Projet UF Infra', '2018 - 2019', 'CECI EST LE TEXTE DU PROJET UF INFRA', NULL),
(2, 'Projet UF Dev', '2018 - 2019', 'CECI EST LE TEXTE DU PROJET UF DEV', NULL),
(3, 'Projet UF Dev', '2018 - 2019', 'CECI EST LE TEXTE DU PROJET UF DEV', NULL),
(4, 'Projet BAC', '2017 - 2018', 'CECI EST LE TEXTE DU PROJET BAC DE LA SERRE HYDROPONIQUE', NULL),
(5, 'PROJET TESTE', '2099 - 2099', 'LE TEXTE JAJAJAJAJAJAJ', NULL),
(6, 'qzdzqdzqd', 'zqdzqdzqdqzd', 'Le texte zqdzqdzqdqzqzddu projet', NULL),
(7, 'qzdzqdzqd', 'zqdzqdzqdqzd', 'Le texte zqdzqdzqdqzqzddu projet', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
