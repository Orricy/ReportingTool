-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 12 Octobre 2016 à 16:02
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `iim_reporting`
--

-- --------------------------------------------------------

--
-- Structure de la table `communication`
--

CREATE TABLE IF NOT EXISTS `communication` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `autre_lien3` varchar(150) NOT NULL,
  `piece_of` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `communication`
--

INSERT INTO `communication` (`id`, `fb`, `lien_fb`, `mdp_fb`, `drive`, `lien_drive`, `mdp_drive`, `git`, `lien_git`, `mdp_git`, `autre_nom1`, `autre_lien1`, `autre_nom2`, `autre_lien2`, `autre_nom3`, `autre_lien3`, `piece_of`) VALUES
(1, 0, 'vd', 'jn', 0, 'jn', 'jn', 0, 'jn', 'jn', 'jn', 'jn', 'jn', 'jn', 'jn', 'jn', 1),
(2, 0, 'vd', 'jn', 0, 'jn', 'jn', 0, 'jn', 'jn', 'jn', 'jn', 'jn', 'jn', 'jn', 'jn', 0);

-- --------------------------------------------------------

--
-- Structure de la table `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `piece_of` int(11) NOT NULL,
  `path_to` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `document`
--

INSERT INTO `document` (`id`, `name`, `piece_of`, `path_to`, `created_at`) VALUES
(2, 'mario2.png', 1, '157fd15369ab73.png', '2016-10-11 16:37:10'),
(3, 'bureau - 02-06-2016.PNG', 1, '157fd16159e989.png', '2016-10-11 16:40:53'),
(4, 'ITH.exe', 1, '157fe2680a77bd.exe', '2016-10-12 12:03:12');

-- --------------------------------------------------------

--
-- Structure de la table `form2`
--

CREATE TABLE IF NOT EXISTS `form2` (
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
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `piece_of` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `form2`
--

INSERT INTO `form2` (`pitch`, `brief`, `client_surname`, `client_lastname`, `client_phone`, `client_mail`, `client_city`, `client_postal`, `client_adress`, `deci_surname`, `deci_lastname`, `deci_phone`, `deci_mail`, `deci_city`, `deci_postal`, `deci_adress`, `debproj`, `finproj`, `id`, `piece_of`) VALUES
('j', 'i', 'mjo', 'nk:j', 0, 'm', 'oj', 0, 'lkjo', 'jb', 'jbkb', 0, 'ihonm', 'ionm', 0, 'ikn', NULL, NULL, 1, 1),
('j', 'i', 'mjo', 'nk:j', 0, 'm', 'oj', 0, 'lkjo', 'jb', 'jbkb', 0, 'ihonm', 'ionm', 0, 'ikn', NULL, NULL, 2, 0),
('j', 'i', 'mjo', 'nk:j', 0, 'm', 'oj', 0, 'lkjo', 'jb', 'jbkb', 0, 'ihonm', 'ionm', 0, 'ikn', NULL, NULL, 3, 0),
('j', 'i', 'mjo', 'nk:j', 0, 'm', 'oj', 0, 'lkjo', 'jb', 'jbkb', 0, 'ihonm', 'ionm', 0, 'ikn', NULL, NULL, 4, 0),
('j', 'i', 'mjo', 'nk:j', 0, 'm', 'oj', 64634, 'lkjo', 'jb', 'jbkb', 0, 'ihonm', 'gtrd', 78330, 'ikn', NULL, NULL, 5, 0),
('le 30 janvier', 'i', 'mjo', 'nk:j', 0, 'm', 'oj', 64634, 'lkjo', 'jb', 'jbkb', 0, 'ihonm', 'gtrd', 78330, 'ikn', NULL, NULL, 6, 0),
('le 30 janvier', 'i', 'mjo', 'nk:j', 0, 'm', 'oj', 64634, 'lkjo', 'jb', 'jbkb', 0, 'ihonm', 'gtrd', 78330, 'ikn', NULL, NULL, 7, 0),
('lAHJVGAGHVJHJGAHJVEJKJHK', 'i', 'mjo', 'nk:j', 0, 'm', 'oj', 64634, 'lkjo', 'jb', 'jbkb', 0, 'ihonm', 'gtrd', 78330, 'ikn', NULL, NULL, 8, 0);

-- --------------------------------------------------------

--
-- Structure de la table `informations`
--

CREATE TABLE IF NOT EXISTS `informations` (
  `info_client` varchar(40) NOT NULL,
  `info_personne` text NOT NULL,
  `cible` text NOT NULL,
  `objectif` text NOT NULL,
  `solution` varchar(150) NOT NULL,
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `piece_of` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `informations`
--

INSERT INTO `informations` (`info_client`, `info_personne`, `cible`, `objectif`, `solution`, `id`, `piece_of`) VALUES
('moi', 'moi', 'moi', 'moi', 'moi', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `recettage`
--

CREATE TABLE IF NOT EXISTS `recettage` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `doc_key` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `finished_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `recettage`
--

INSERT INTO `recettage` (`id`, `name`, `doc_key`, `created_at`, `finished_at`) VALUES
(1, '', '157fd0beeebb32', '2016-10-11 15:57:34', NULL),
(2, '', '157fe2b462091d', '2016-10-12 12:23:34', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
