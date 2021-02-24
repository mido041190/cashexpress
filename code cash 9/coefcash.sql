-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 25 sep. 2020 à 18:26
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `coefcash`
--

-- --------------------------------------------------------

--
-- Structure de la table `coefs`
--

DROP TABLE IF EXISTS `coefs`;
CREATE TABLE IF NOT EXISTS `coefs` (
  `coef1` float DEFAULT NULL,
  `coef2` float DEFAULT NULL,
  `coef3` float DEFAULT NULL,
  `coef4` float DEFAULT NULL,
  `coef5` float DEFAULT NULL,
  `coef6` float DEFAULT NULL,
  `coef7` float DEFAULT NULL,
  `coef8` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `coefs`
--

INSERT INTO `coefs` (`coef1`, `coef2`, `coef3`, `coef4`, `coef5`, `coef6`, `coef7`, `coef8`) VALUES
(0.75, 0.65, 0.6, 0.55, 0.5, 0.4, 0.85, 0.82);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'adriendelvolgo', 'cashcahors');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
