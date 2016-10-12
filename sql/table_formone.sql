-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Mer 12 Octobre 2016 à 14:21
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.0

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
-- Structure de la table `informations`
--

CREATE TABLE `informations` (
  `info_client` varchar(40) NOT NULL,
  `info_personne` text NOT NULL,
  `cible` text NOT NULL,
  `objectif` text NOT NULL,
  `solution` varchar(150) NOT NULL,
  `id` int(11) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `informations`
--

INSERT INTO `informations` (`info_client`, `info_personne`, `cible`, `objectif`, `solution`, `id`) VALUES
('Bonjour', 'Bonjour', 'Bonjour', 'Bonjour', 'Bonjour', 1),
('test un', 'test deux', 'test quatre', 'test trois', 'test cinq', 2),
('bonjour deux', 'fzrgzr', 'qrgtrgqegt', 'Zrgrgf', 'qrsgrqerg', 3),
('bonjour deux', 'fzrgzr', 'qrgtrgqegt', 'Zrgrgf', 'qrsgrqerg', 4),
('bonjour deux', 'fzrgzr', 'qrgtrgqegt', 'Zrgrgf', 'qrsgrqerg', 5),
('test', 'stockage', 'deux', 'un', 'gfjfsyj', 6),
('test', 'stockage', 'deux', 'un', 'melissa', 7),
('test', 'test', 'test', 'test', 'testfin', 8),
('test', 'test', 'test', 'test', 'test', 9),
('ok', 'ok', 'ok', 'ok', 'okk', 10),
('ok', 'ok', 'ok', 'ok', 'okk', 11),
('test', 'test', 'test', 'test', 'test cinq', 12),
('test', 'test', 'test', 'test', 'cdg', 13),
('test', 'test', 'test', 'test', 'testdeuxtrois', 14),
('test', 'test', 'test', 'test', 'testdeuxtrois', 15);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `informations`
--
ALTER TABLE `informations`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
