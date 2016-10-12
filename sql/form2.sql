-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 12 Octobre 2016 à 14:27
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
-- Structure de la table `form2`
--

CREATE TABLE `form2` (
  `pitch` varchar(150) DEFAULT NULL,
  `brief` text,
  `client_surname` varchar(150) DEFAULT NULL,
  `client_lastname` varchar(150) DEFAULT NULL,
  `client_phone` int(11) DEFAULT NULL,
  `client_mail` varchar(150) DEFAULT NULL,
  `client_city` varchar(150) DEFAULT NULL,
  `client_postal` int(11) DEFAULT NULL,
  `client_adress` varchar(150) DEFAULT NULL,
  `deci_surname` varchar(150) DEFAULT NULL,
  `deci_lastname` varchar(150) DEFAULT NULL,
  `deci_phone` int(11) DEFAULT NULL,
  `deci_mail` varchar(150) DEFAULT NULL,
  `deci_city` varchar(150) DEFAULT NULL,
  `deci_postal` int(11) DEFAULT NULL,
  `deci_adress` varchar(150) DEFAULT NULL,
  `debproj` varchar(150) DEFAULT NULL,
  `finproj` varchar(150) DEFAULT NULL,
  `id` int(11) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `form2`
--

INSERT INTO `form2` (`pitch`, `brief`, `client_surname`, `client_lastname`, `client_phone`, `client_mail`, `client_city`, `client_postal`, `client_adress`, `deci_surname`, `deci_lastname`, `deci_phone`, `deci_mail`, `deci_city`, `deci_postal`, `deci_adress`, `debproj`, `finproj`, `id`) VALUES
('j', 'i', 'mjo', 'nk:j', 0, 'm', 'oj', 0, 'lkjo', 'jb', 'jbkb', 0, 'ihonm', 'ionm', 0, 'ikn', NULL, NULL, 1),
('j', 'i', 'mjo', 'nk:j', 0, 'm', 'oj', 0, 'lkjo', 'jb', 'jbkb', 0, 'ihonm', 'ionm', 0, 'ikn', NULL, NULL, 2),
('j', 'i', 'mjo', 'nk:j', 0, 'm', 'oj', 0, 'lkjo', 'jb', 'jbkb', 0, 'ihonm', 'ionm', 0, 'ikn', NULL, NULL, 3),
('j', 'i', 'mjo', 'nk:j', 0, 'm', 'oj', 0, 'lkjo', 'jb', 'jbkb', 0, 'ihonm', 'ionm', 0, 'ikn', NULL, NULL, 4),
('j', 'i', 'mjo', 'nk:j', 0, 'm', 'oj', 64634, 'lkjo', 'jb', 'jbkb', 0, 'ihonm', 'gtrd', 78330, 'ikn', NULL, NULL, 5),
('le 30 janvier', 'i', 'mjo', 'nk:j', 0, 'm', 'oj', 64634, 'lkjo', 'jb', 'jbkb', 0, 'ihonm', 'gtrd', 78330, 'ikn', NULL, NULL, 6),
('le 30 janvier', 'i', 'mjo', 'nk:j', 0, 'm', 'oj', 64634, 'lkjo', 'jb', 'jbkb', 0, 'ihonm', 'gtrd', 78330, 'ikn', NULL, NULL, 7),
('lAHJVGAGHVJHJGAHJVEJKJHK', 'i', 'mjo', 'nk:j', 0, 'm', 'oj', 64634, 'lkjo', 'jb', 'jbkb', 0, 'ihonm', 'gtrd', 78330, 'ikn', NULL, NULL, 8);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `form2`
--
ALTER TABLE `form2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `form2`
--
ALTER TABLE `form2`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
