-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 22 mai 2023 à 10:01
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sapishoes`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(127) NOT NULL,
  `prenom` varchar(127) NOT NULL,
  `nom` varchar(127) NOT NULL,
  `mail` varchar(127) NOT NULL,
  `password` varchar(127) NOT NULL,
  PRIMARY KEY (`client_id`),
  UNIQUE KEY `mail` (`mail`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`client_id`, `username`, `prenom`, `nom`, `mail`, `password`) VALUES
(3, 'EuFloR1aa', 'Maéva', 'PHAN', 'eifygzuefbuzi@gmail.com', '$2y$10$7szq/XD60F/Bxvk8j76wXOj59tQ2UEuswWv/bDPeMcwkcMe0D.ybC');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
