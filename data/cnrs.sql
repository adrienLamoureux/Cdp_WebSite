-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 24 Septembre 2014 à 15:24
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `cnrs`
--

-- --------------------------------------------------------

--
-- Structure de la table `atelier`
--

CREATE TABLE IF NOT EXISTS `atelier` (
  `titre` varchar(100) NOT NULL,
  `thematique` varchar(150) NOT NULL,
  `type` varchar(50) NOT NULL,
  `horaire` date NOT NULL,
  `nomlab` varchar(50) NOT NULL,
  `Lieu` varchar(150) NOT NULL,
  `durée` int(11) NOT NULL,
  `capacité` int(11) NOT NULL,
  PRIMARY KEY (`titre`),
  UNIQUE KEY `titre` (`titre`),
  KEY `atelier_ibfk_1` (`nomlab`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `atelier`
--

INSERT INTO `atelier` (`titre`, `thematique`, `type`, `horaire`, `nomlab`, `Lieu`, `durée`, `capacité`) VALUES
('atelier1', 'sport', 'course', '2014-09-01', 'recherche1', 'je sais pas', 1, 8),
('atelier2', 'robot', 'robo1515', '2014-09-12', 'recherche7', 'bordeaux', 5, 7);

-- --------------------------------------------------------

--
-- Structure de la table `labo`
--

CREATE TABLE IF NOT EXISTS `labo` (
  `Nomlabo` varchar(150) NOT NULL,
  `Nomresp` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `motdepasse` varchar(20) NOT NULL,
  PRIMARY KEY (`Nomlabo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `labo`
--

INSERT INTO `labo` (`Nomlabo`, `Nomresp`, `tel`, `mail`, `motdepasse`) VALUES
('recherche1', 'youssef', '04251547', 'lesahri@hotmail.fr', 'omarsa'),
('recherche2', 'youssef', '04251547', 'lesahri@hotmail.fr', 'omarsa'),
('recherche3', 'youssef', '04251547', 'lesahri@hotmail.fr', 'omarsa'),
('recherche5', 'youssef', '04251547', 'lesahri@hotmail.fr', 'omarsa'),
('recherche7', 'youssef', '04251547', 'lesahri@hotmail.fr', 'omarsa');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `atelier`
--
ALTER TABLE `atelier`
  ADD CONSTRAINT `atelier_ibfk_1` FOREIGN KEY (`nomlab`) REFERENCES `labo` (`Nomlabo`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
