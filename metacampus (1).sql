-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 14 nov. 2022 à 15:23
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
-- Base de données : `metacampus`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Jeton` varchar(150) NOT NULL,
  `Sel` varchar(50) NOT NULL,
  `Prof` tinyint(1) NOT NULL,
  `Points` int(11) NOT NULL,
  `Golds` int(11) NOT NULL,
  `Telephone` varchar(50) NOT NULL,
  `Pseudo` varchar(50) NOT NULL,
  `mdp` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `Nom`, `Prenom`, `Mail`, `Jeton`, `Sel`, `Prof`, `Points`, `Golds`, `Telephone`, `Pseudo`, `mdp`) VALUES
(1, 'Laurain', 'Yoan', 'yoan.laurain0@gmail.com', '4c8dab9637baf409f1ca43c79f1866d818b0cedc1682e029f6b450c2a93c7440', 'AAAA', 0, 10000, 10000, '06.46.56.03.88', 'VerozGames', '29fabfe5447b3d92ebe4d9cd2fd8e55f');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
