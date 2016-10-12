-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 12 Octobre 2016 à 14:24
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `iim_reporting`
--

-- --------------------------------------------------------

--
-- Structure de la table `communication`
--

CREATE TABLE `communication` (
  `fb` tinyint(1) NOT NULL,
  `lien_fb` varchar(150) NOT NULL,
  `mdp_fb` varchar(150) NOT NULL,
  `drive` tinyint(1) NOT NULL,
  `lien_drive` varchar(150) NOT NULL,
  `mdp_drive` varchar(150) NOT NULL,
  `git` tinyint(1) NOT NULL,
  `lien_git` varchar(150) NOT NULL,
  `mdp_git` varchar(150) NOT NULL,
  `autre_nom1` varchar(150) NOT NULL,
  `autre_lien1` varchar(150) NOT NULL,
  `autre_nom2` varchar(150) NOT NULL,
  `autre_lien2` varchar(150) NOT NULL,
  `autre_nom3` varchar(150) NOT NULL,
  `autre_lien3` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `communication`
--

INSERT INTO `communication` (`fb`, `lien_fb`, `mdp_fb`, `drive`, `lien_drive`, `mdp_drive`, `git`, `lien_git`, `mdp_git`, `autre_nom1`, `autre_lien1`, `autre_nom2`, `autre_lien2`, `autre_nom3`, `autre_lien3`) VALUES
(0, 'vd', 'jn', 0, 'jn', 'jn', 0, 'jn', 'jn', 'jn', 'jn', 'jn', 'jn', 'jn', 'jn'),
(0, 'vd', 'jn', 0, 'jn', 'jn', 0, 'jn', 'jn', 'jn', 'jn', 'jn', 'jn', 'jn', 'jn');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
