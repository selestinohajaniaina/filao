-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 27 août 2023 à 16:53
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
-- Structure de la table `detailfilao`
--

DROP TABLE IF EXISTS `detailfilao`;
CREATE TABLE IF NOT EXISTS `detailfilao` (
  `id_poisson` int(11) NOT NULL,
  `qtt` decimal(50,0) NOT NULL,
  `prixUnit` int(50) NOT NULL,
  `NumFac` int(50) NOT NULL,
  `idFournisseur` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `detailfilao`
--

INSERT INTO `detailfilao` (`id_poisson`, `qtt`, `prixUnit`, `NumFac`, `idFournisseur`) VALUES
(6, '2', 5000, 6, 10),
(4, '3', 5000, 6, 10),
(5, '6', 5000, 6, 10),
(7, '7', 8000, 6, 10),
(4, '1', 2000, 6, 10),
(6, '1', 5000, 7, 12),
(8, '5', 5000, 7, 12),
(10, '5', 9000, 7, 12),
(6, '2', 2000, 8, 1),
(8, '5', 15000, 8, 1),
(5, '5', 3000, 8, 1),
(4, '12', 1000, 8, 1),
(10, '12', 10000, 8, 1),
(21, '4', 2000, 8, 1),
(10, '12', 20000, 9, 7),
(5, '2', 2000, 13, 12),
(24, '1', 2000, 14, 12);

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
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `facture`
--

INSERT INTO `facture` (`id`, `id_fou`, `text`, `date`) VALUES
(2, 3, 'uyyfasuyfyasfdyua', '2023-08-24 10:42:53'),
(3, 1, 'vaovao ito ai', '2023-08-24 10:56:33'),
(4, 7, 'iti farany eo', '2023-08-24 10:59:15'),
(5, 1, '', '2023-08-24 11:05:10'),
(6, 10, '', '2023-08-24 11:05:31'),
(7, 12, '', '2023-08-24 12:16:50'),
(8, 1, '', '2023-08-27 12:52:14'),
(9, 7, '', '2023-08-27 17:39:33'),
(10, 8, 'filao', '2023-08-27 18:30:47'),
(11, 12, '', '2023-08-27 18:52:38'),
(12, 12, '', '2023-08-27 18:53:13'),
(13, 12, '', '2023-08-27 18:56:33'),
(14, 12, '', '2023-08-27 18:57:47'),
(15, 12, '', '2023-08-27 19:04:52');

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

DROP TABLE IF EXISTS `fournisseur`;
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `id` int(11) NOT NULL,
  `nomfournisseur` varchar(255) NOT NULL,
  `Adress` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`id`, `nomfournisseur`, `Adress`, `contact`) VALUES
(1, 'FITAHIANTSOA', 'MAHAJANGA', '0345764457'),
(7, 'zao', 'MAHAJANGA', '034576445755454'),
(8, 'krkr', 'tsararano', '032555'),
(10, 'tatatatata', 'vfhdvfh', '558555'),
(11, 'cger', 'fherf', '44989'),
(12, 'arsene', 'Mhjfhj', '554456');

-- --------------------------------------------------------

--
-- Structure de la table `poisson`
--

DROP TABLE IF EXISTS `poisson`;
CREATE TABLE IF NOT EXISTS `poisson` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomFilao` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `poisson`
--

INSERT INTO `poisson` (`id`, `nomFilao`) VALUES
(6, 'tsondro vahiny'),
(5, 'Makoba'),
(4, 'mahaloky'),
(8, 'requin'),
(10, 'drakaka'),
(24, 'koukou');

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
(1, 'user1', '2000'),
(2, 'user2', '2000'),
(3, 'admin', '2000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
