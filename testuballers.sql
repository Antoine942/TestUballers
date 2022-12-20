-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 19 déc. 2022 à 23:56
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `testuballers`
--

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `Prenom` varchar(100) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`Prenom`, `Nom`, `email`, `password`) VALUES
('Antoinee', 'Sandro', '1234', 'jeanbon'),
('Antoine', 'CHARLES', 'antoine.charlesweber@gmail.com44', 'SSZDZD'),
('Antoine', 'CHARLES', 'antoine.charlesweber@gmail.com24445789', 'motdepasse'),
('Antoine', 'CHARLES', 'antoine.charlesweber@gmail.com2444578', 'motdepasse'),
('Antoine', 'CHARLES', 'antoine.charlesweber@gmail.com244457', 'FEFEFE'),
('Antoine', 'CHARLES', 'antoine.charlesweber@gmail.com244456', 'KSZDZ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
