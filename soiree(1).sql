-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 03 Février 2015 à 13:04
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `soiree`
--
CREATE DATABASE IF NOT EXISTS `soiree_alexia` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `soiree_alexia`;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` text NOT NULL,
  `mot_de_passe` text NOT NULL,
  `clef` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `pseudo`, `mot_de_passe`, `clef`) VALUES
(1, 'seb', 'genevieve', '1401622201');

-- --------------------------------------------------------

--
-- Structure de la table `reponse_clients`
--

CREATE TABLE IF NOT EXISTS `reponse_clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` text NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `presence_soiree` tinyint(1) NOT NULL,
  `message` text NOT NULL,
  `reponse_vue` tinyint(1) NOT NULL DEFAULT '0',
  `mail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `reponse_clients`
--

-- INSERT INTO `reponse_clients` (`id`, `titre`, `nom`, `prenom`, `presence_soiree`, `message`, `reponse_vue`, `mail`) VALUES
-- (1, 'm', 'seb', 'seby', 0, 'seb', 0, ''),
-- (2, 'seb', 'deb', 'seb', 1, 'truc', 0, ''),
-- (3, 'm', 'de beauffort', 'sebastien', 1, 'top', 0, ''),
-- (4, 'm', 'de beauffort', 'sebastien', 0, 'top', 0, ''),
-- (5, 'sfs', 'sdgfg', 'sdfgdfg', 1, 'sdgdfg', 0, 'sdfgdfsg'),
-- (6, 'sfs', 'sdgfg', 'sdfgdfg', 0, 'sdgdfg', 0, 'sdfgdfsg'),
-- (7, 'comte', 'de Beauffort', 'SÃ©bastien', 1, 'blabla																', 0, 'sewelseb@hotmail.com'),
-- (8, 'sdgfdfg', 'fhsh', 'sdfghdf', 1, '							qsdgsdf''dvsdfvgsdf									', 0, 'sdfgdsf''dgqsdf'),
-- (9, 'seb', 'seb', 'seb', 1, '													seb			', 0, 'sebv'),
-- (10, 'seb2''d', 'seb2''d', 'seb2''d', 1, 'seb2''d																', 0, 'seb2''d');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
