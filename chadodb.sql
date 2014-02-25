-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Sam 15 Février 2014 à 14:53
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `chadodb`
--
CREATE DATABASE IF NOT EXISTS `chadodb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `chadodb`;

-- --------------------------------------------------------

--
-- Structure de la table `chadoarticle`
--

CREATE TABLE IF NOT EXISTS `chadoarticle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Date` datetime NOT NULL,
  `online` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Contenu de la table `chadoarticle`
--

INSERT INTO `chadoarticle` (`id`, `Title`, `Slug`, `Content`, `Date`, `online`) VALUES
(20, 'Here is my first post', 'here-20', 'Here is the content of my first post.<br>Very deceiving<br>', '2014-02-15 14:52:17', 1);

-- --------------------------------------------------------

--
-- Structure de la table `chadoarticle_chadotag`
--

CREATE TABLE IF NOT EXISTS `chadoarticle_chadotag` (
  `chadoarticle_id` int(11) NOT NULL,
  `chadotag_id` int(11) NOT NULL,
  PRIMARY KEY (`chadoarticle_id`,`chadotag_id`),
  KEY `IDX_45D293C911765DA` (`chadoarticle_id`),
  KEY `IDX_45D293C9D6C049` (`chadotag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `chadoarticle_chadotag`
--

INSERT INTO `chadoarticle_chadotag` (`chadoarticle_id`, `chadotag_id`) VALUES
(20, 2);

-- --------------------------------------------------------

--
-- Structure de la table `chadocomments`
--

CREATE TABLE IF NOT EXISTS `chadocomments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `Content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Date` datetime NOT NULL,
  `article_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_282B2983A76ED395` (`user_id`),
  KEY `IDX_282B2983727ACA70` (`parent_id`),
  KEY `IDX_282B29837294869C` (`article_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `chadocomments`
--

INSERT INTO `chadocomments` (`id`, `user_id`, `parent_id`, `Content`, `Date`, `article_id`) VALUES
(2, 7, NULL, 'Hey, this is my first post !', '2014-02-15 14:52:49', 20);

-- --------------------------------------------------------

--
-- Structure de la table `chadotag`
--

CREATE TABLE IF NOT EXISTS `chadotag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Tagname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `chadotag`
--

INSERT INTO `chadotag` (`id`, `Tagname`) VALUES
(1, 'webGL'),
(2, 'javascript'),
(3, 'html5');

-- --------------------------------------------------------

--
-- Structure de la table `chadouser`
--

CREATE TABLE IF NOT EXISTS `chadouser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nickname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Twitter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Date` datetime NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Contenu de la table `chadouser`
--

INSERT INTO `chadouser` (`id`, `Nickname`, `Mail`, `Password`, `Website`, `Twitter`, `Salt`, `Token`, `Date`, `roles`) VALUES
(7, 'admin', 'admin@admin.com', 'dmEX/aT3z7PeRb3C0PNsbf29RJgrU575hd8DCjDis++RG8l4Gv6WdU0+QCNeOZ4Ada2gEJVxpy6N6iobvd0itg==', NULL, NULL, 'I9Z6lmKAqqKuhu40b4j+iLdodR8Z9zRe13pDyAxCl8l3V+Z91xRHlNDNUahWf7dmkwU=', 'JuVzZ/32o4fQpqB+IkcH', '2014-02-15 14:51:05', 'a:1:{i:0;s:10:"ROLE_ADMIN";}');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `chadoarticle_chadotag`
--
ALTER TABLE `chadoarticle_chadotag`
  ADD CONSTRAINT `FK_45D293C911765DA` FOREIGN KEY (`chadoarticle_id`) REFERENCES `chadoarticle` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_45D293C9D6C049` FOREIGN KEY (`chadotag_id`) REFERENCES `chadotag` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `chadocomments`
--
ALTER TABLE `chadocomments`
  ADD CONSTRAINT `FK_282B2983727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `chadocomments` (`id`),
  ADD CONSTRAINT `FK_282B29837294869C` FOREIGN KEY (`article_id`) REFERENCES `chadoarticle` (`id`),
  ADD CONSTRAINT `FK_282B2983A76ED395` FOREIGN KEY (`user_id`) REFERENCES `chadouser` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
