-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 11 sep. 2023 à 07:53
-- Version du serveur :  10.4.10-MariaDB
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
-- Base de données :  `filao`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sortie` varchar(50) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `id_sortie`, `nom`, `adresse`, `contact`) VALUES
(1, '1', 'Selestino hajaniaina', '', '025457'),
(2, '1', 'rtwtertre', 'ETUEU', '24867867');

-- --------------------------------------------------------

--
-- Structure de la table `detailavant`
--

DROP TABLE IF EXISTS `detailavant`;
CREATE TABLE IF NOT EXISTS `detailavant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_poisson` varchar(255) NOT NULL,
  `NumFac` varchar(255) NOT NULL,
  `qtt` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `detailavant`
--

INSERT INTO `detailavant` (`id`, `id_poisson`, `NumFac`, `qtt`) VALUES
(1, '30', '31', '7'),
(2, '24', '31', '1.5'),
(3, '5', '33', '7'),
(4, '29', '33', '1'),
(5, '28', '33', '1.5'),
(6, '30', '42', '1.1'),
(7, '10', '42', '52');

-- --------------------------------------------------------

--
-- Structure de la table `detailfilao`
--

DROP TABLE IF EXISTS `detailfilao`;
CREATE TABLE IF NOT EXISTS `detailfilao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_poisson` int(11) NOT NULL,
  `qtt` decimal(50,0) NOT NULL,
  `prixUnit` int(50) NOT NULL,
  `NumFac` int(50) NOT NULL,
  `idFournisseur` int(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `detailfilao`
--

INSERT INTO `detailfilao` (`id`, `id_poisson`, `qtt`, `prixUnit`, `NumFac`, `idFournisseur`, `date`) VALUES
(1, 6, '2', 5000, 6, 10, '2023-09-08 17:08:03'),
(2, 4, '3', 5000, 6, 10, '2023-09-08 17:08:03'),
(3, 5, '6', 5000, 6, 10, '2023-09-08 17:08:03'),
(4, 7, '7', 8000, 6, 10, '2023-09-08 17:08:03'),
(5, 4, '1', 2000, 6, 10, '2023-09-08 17:08:03'),
(6, 6, '1', 5000, 7, 12, '2023-09-07 17:08:03'),
(7, 8, '5', 5000, 7, 12, '2023-09-07 17:08:03'),
(8, 10, '5', 9000, 7, 12, '2023-09-07 17:08:03'),
(9, 6, '2', 2000, 8, 1, '2023-09-09 17:08:03'),
(10, 8, '5', 15000, 8, 1, '2023-09-09 17:08:03'),
(11, 5, '5', 3000, 8, 1, '2023-09-09 17:08:03'),
(12, 4, '12', 1000, 8, 1, '2023-09-09 17:08:03'),
(13, 10, '12', 10000, 8, 1, '2023-09-09 17:08:03'),
(14, 21, '4', 2000, 8, 1, '2023-09-09 17:08:03'),
(15, 10, '12', 20000, 9, 7, '2023-09-09 17:08:03'),
(16, 5, '2', 2000, 13, 12, '2023-09-09 17:08:03'),
(17, 24, '1', 2000, 14, 12, '2023-09-09 17:08:03'),
(18, 10, '12', 12000, 20, 12, '2023-09-09 17:08:03'),
(19, 4, '12', 1000, 20, 12, '2023-09-09 17:08:03'),
(20, 10, '45', 12000, 22, 8, '2023-09-09 17:08:03'),
(21, 4, '45', 80000, 22, 8, '2023-09-09 17:08:03'),
(22, 10, '7', 4000, 23, 6, '2023-09-09 17:08:03'),
(23, 8, '7', 7000, 23, 6, '2023-09-09 17:08:03'),
(24, 10, '5', 5000, 24, 9, '2023-09-09 17:08:03'),
(25, 4, '12', 6000, 24, 9, '2023-09-09 17:08:03'),
(26, 28, '4', 4000, 24, 9, '2023-09-09 17:08:03'),
(27, 4, '2', 1000, 25, 6, '2023-09-09 17:08:03'),
(28, 27, '8', 1000, 25, 6, '2023-09-09 17:08:03'),
(29, 10, '7', 1000, 28, 1, '2023-09-09 17:08:03'),
(30, 4, '5', 2000, 28, 1, '2023-09-09 17:08:03'),
(31, 24, '4', 40000, 29, 4, '2023-09-09 17:08:03'),
(32, 30, '2', 4000, 29, 4, '2023-09-09 17:08:03'),
(33, 30, '5', 1000, 30, 6, '2023-09-09 17:08:03'),
(34, 10, '5', 6000, 30, 6, '2023-09-09 17:08:03'),
(35, 27, '6', 8000, 30, 6, '2023-09-09 17:08:03'),
(36, 30, '7', 1000, 31, 1, '2023-09-09 17:08:03'),
(37, 24, '8', 6000, 31, 1, '2023-09-09 17:08:03'),
(38, 28, '4', 3000, 31, 1, '2023-09-09 17:08:03'),
(39, 30, '12', 3000, 32, 6, '2023-09-09 17:08:03'),
(40, 5, '12', 1000, 33, 4, '2023-09-06 17:08:03'),
(41, 29, '1', 3000, 33, 4, '2023-09-06 17:08:03'),
(42, 28, '2', 3000, 33, 4, '2023-09-06 17:08:03'),
(43, 30, '1', 2000, 34, 6, '2023-09-06 17:08:03'),
(44, 24, '3', 3000, 34, 6, '2023-09-06 17:08:03'),
(45, 30, '3', 2000, 39, 9, '2023-09-09 17:08:03'),
(46, 24, '4', 3000, 39, 9, '2023-09-09 17:08:03'),
(47, 30, '2', 3000, 40, 6, '2023-09-09 17:08:03'),
(48, 30, '2', 12300, 42, 5, '2023-09-10 09:55:34'),
(49, 10, '54', 1700, 42, 5, '2023-09-10 09:57:43'),
(50, 30, '21', 111, 44, 6, '2023-09-11 10:38:06'),
(51, 30, '45', 18000, 45, 3, '2023-09-11 10:41:16'),
(52, 10, '5', 78, 45, 3, '2023-09-11 10:41:26');

-- --------------------------------------------------------

--
-- Structure de la table `detailfilaocontre`
--

DROP TABLE IF EXISTS `detailfilaocontre`;
CREATE TABLE IF NOT EXISTS `detailfilaocontre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_poisson` int(11) NOT NULL,
  `NumFac` varchar(255) NOT NULL,
  `qtt` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `detailfilaocontre`
--

INSERT INTO `detailfilaocontre` (`id`, `id_poisson`, `NumFac`, `qtt`) VALUES
(1, 10, '24', '4'),
(2, 28, '24', '3'),
(3, 27, '25', '5'),
(4, 24, '29', '2'),
(5, 24, '29', '2'),
(6, 30, '29', '1'),
(7, 10, '30', '4'),
(8, 27, '30', '5'),
(9, 30, '30', '5'),
(10, 30, '31', '7'),
(11, 28, '31', '4'),
(12, 24, '31', '2'),
(13, 30, '31', '6'),
(14, 30, '32', '11'),
(15, 5, '33', '10'),
(16, 28, '33', '1.5'),
(17, 29, '33', '1'),
(18, 30, '34', '1'),
(19, 24, '34', '7'),
(20, 30, '42', '1.5'),
(21, 10, '42', '53');

-- --------------------------------------------------------

--
-- Structure de la table `detailfilaosortie`
--

DROP TABLE IF EXISTS `detailfilaosortie`;
CREATE TABLE IF NOT EXISTS `detailfilaosortie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_poisson` varchar(255) NOT NULL,
  `sac` varchar(255) NOT NULL,
  `qtt` double NOT NULL,
  `id_sortie` varchar(255) NOT NULL,
  `place` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `detailfilaosortie`
--

INSERT INTO `detailfilaosortie` (`id`, `id_poisson`, `sac`, `qtt`, `id_sortie`, `place`) VALUES
(1, '5', '1', 40, '1', 2),
(2, '4', '5', 2, '3', 2),
(3, '6', '7', 300, '3', 1);

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

DROP TABLE IF EXISTS `facture`;
CREATE TABLE IF NOT EXISTS `facture` (
  `id` int(11) NOT NULL,
  `id_fou` int(11) NOT NULL,
  `text` varchar(1000) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `facture`
--

INSERT INTO `facture` (`id`, `id_fou`, `text`, `date`) VALUES
(2, 3, 'uyyfasuyfyasfdyua', '2023-08-24 10:42:53'),
(3, 1, 'vaovao ito ai', '2023-08-24 10:56:33'),
(25, 6, '', '2023-09-05 15:10:57'),
(5, 1, '', '2023-08-24 11:05:10'),
(35, 10, '', '2023-09-08 16:22:10'),
(34, 6, '', '2023-09-08 15:41:37'),
(8, 1, '', '2023-08-27 12:52:14'),
(24, 9, '', '2023-09-05 15:09:38'),
(10, 8, 'filao', '2023-08-27 18:30:47'),
(33, 4, '', '2023-09-07 13:43:48'),
(32, 6, '', '2023-09-06 17:49:04'),
(31, 1, '', '2023-09-06 17:09:04'),
(30, 6, '', '2023-09-06 16:11:14'),
(29, 4, '', '2023-09-06 15:16:01'),
(16, 8, '', '2023-09-04 09:22:58'),
(23, 6, '', '2023-09-04 14:58:40'),
(18, 1, '', '2023-09-04 10:37:36'),
(28, 1, '', '2023-09-05 17:36:38'),
(27, 6, '', '2023-09-05 15:53:11'),
(26, 4, '', '2023-09-05 15:14:17'),
(22, 8, '', '2023-09-04 14:15:49'),
(36, 6, '', '2023-09-08 16:27:26'),
(37, 6, '', '2023-09-08 16:31:16'),
(38, 8, '', '2023-09-08 17:23:47'),
(39, 9, '', '2023-09-09 15:16:22'),
(40, 6, '', '2023-09-09 15:17:39'),
(41, 4, '', '2023-09-09 17:18:02'),
(42, 5, '', '2023-09-10 09:55:20'),
(43, 10, '', '2023-09-10 13:10:43'),
(44, 6, '', '2023-09-11 10:37:57'),
(45, 3, '', '2023-09-11 10:41:05');

-- --------------------------------------------------------

--
-- Structure de la table `facturesortie`
--

DROP TABLE IF EXISTS `facturesortie`;
CREATE TABLE IF NOT EXISTS `facturesortie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `destination` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `facturesortie`
--

INSERT INTO `facturesortie` (`id`, `destination`, `date`) VALUES
(1, 'depot', '2023-09-09 10:00:35'),
(2, 'client', '2023-09-09 17:15:22'),
(3, 'depot', '2023-09-10 10:09:54'),
(4, 'client', '2023-09-11 09:30:00'),
(5, 'client', '2023-09-11 09:32:05'),
(6, 'depot', '2023-09-11 09:54:01'),
(7, 'client', '2023-09-11 09:54:07');

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

DROP TABLE IF EXISTS `fournisseur`;
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomfournisseur` varchar(255) NOT NULL,
  `Adress` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`id`, `nomfournisseur`, `Adress`, `contact`) VALUES
(1, 'FITAHIANTSOA', 'MAHAJANGA', '0345764457'),
(2, 'zao', 'MAHAJANGA', '034576445755454'),
(3, 'krkr', 'tsararano', '032555'),
(4, 'tatatatata', 'vfhdvfh', '558555'),
(5, 'cger', 'fherf', '44989'),
(6, 'arsene', 'Mhjfhj', '554456'),
(8, 'Selestino hajaniaina', 'mahajanga, mahajana I', '156468'),
(9, 'Selestino hajaniainajb jb', 'ETUEU', 'RYURETE'),
(10, 'iuglisfuighdliufhgdsgdsfgsdf', 'dfgsdfgdsf', 'dfgsfdgds');

-- --------------------------------------------------------

--
-- Structure de la table `particulier`
--

DROP TABLE IF EXISTS `particulier`;
CREATE TABLE IF NOT EXISTS `particulier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_poisson` varchar(255) NOT NULL,
  `qtt` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `client` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `particulier`
--

INSERT INTO `particulier` (`id`, `id_poisson`, `qtt`, `prix`, `client`, `date`) VALUES
(1, '5', '15', '5000', NULL, '2023-09-09 11:05:10'),
(2, '27', '45', '15000', NULL, '2023-09-06 23:43:43'),
(3, '24', '25', '3500', NULL, '2023-09-06 23:43:43'),
(4, '8', '7', '8000', NULL, '2023-09-09 23:44:12');

-- --------------------------------------------------------

--
-- Structure de la table `poisson`
--

DROP TABLE IF EXISTS `poisson`;
CREATE TABLE IF NOT EXISTS `poisson` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomFilao` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `poisson`
--

INSERT INTO `poisson` (`id`, `nomFilao`) VALUES
(6, 'tsondro vahiny'),
(5, 'Makoba'),
(4, 'mahaloky'),
(27, 'Selestino hajaniaina'),
(8, 'requin'),
(29, 'qwerty'),
(10, 'drakaka'),
(30, '123456'),
(28, 'socice'),
(24, 'koukou');

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_poisson` varchar(255) NOT NULL,
  `qtt` double NOT NULL,
  `nombre_sac` int(11) NOT NULL,
  `place` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `stock`
--

INSERT INTO `stock` (`id`, `id_poisson`, `qtt`, `nombre_sac`, `place`, `date`) VALUES
(1, '10', 56, 3, 1, '2023-09-08 16:52:47'),
(2, '27', 15, 2, 2, '2023-09-08 17:41:04'),
(3, '27', 50, 4, 2, '2023-09-08 17:58:55'),
(4, '4', 30, 2, 2, '2023-09-08 17:59:49'),
(5, '6', 39, 10, 1, '2023-09-08 18:00:08'),
(6, '30', 3, 2, 1, '2023-09-08 18:01:27'),
(7, '5', 15, 1, 2, '2023-09-08 18:01:46'),
(8, '24', 45, 12, 1, '2023-09-08 18:07:26'),
(9, '4', 54, 1, 2, '2023-09-10 10:08:30'),
(10, '6', 26, 3, 2, '2023-09-10 10:08:43'),
(11, '5', 23, 15, 1, '2023-09-10 10:09:01'),
(12, '30', 100, 2, 1, '2023-09-10 10:09:30'),
(13, '30', 250, 2, 1, '2023-09-10 10:16:21');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'user1', '1000'),
(2, 'user2', '2000'),
(3, 'admin', '3000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
