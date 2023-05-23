-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 23 Mai 2023 à 09:57
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_arroseur`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_arroseur`
--

CREATE TABLE `t_arroseur` (
  `idArroseur` int(11) NOT NULL,
  `fkPlante` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_humidity`
--

CREATE TABLE `t_humidity` (
  `idHumidity` int(11) NOT NULL,
  `humValues` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `t_humidity`
--

INSERT INTO `t_humidity` (`idHumidity`, `humValues`) VALUES
(1, 4),
(2, 10),
(3, 80),
(4, 100),
(5, 10),
(6, 200),
(7, 200);

-- --------------------------------------------------------

--
-- Structure de la table `t_typplante`
--

CREATE TABLE `t_typplante` (
  `idTypPlante` int(11) NOT NULL,
  `plaNom` varchar(50) NOT NULL,
  `plaFrequece` tinyint(4) NOT NULL,
  `plaTempsArro` int(11) NOT NULL,
  `plaVolume` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_typplante`
--

INSERT INTO `t_typplante` (`idTypPlante`, `plaNom`, `plaFrequece`, `plaTempsArro`, `plaVolume`) VALUES
(3, 'tomate', 3, 1, '10.00'),
(6, 'ciboulette', 10, 3, '10.00'),
(9, 'menthe', 30, 24, '60.00');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `t_arroseur`
--
ALTER TABLE `t_arroseur`
  ADD PRIMARY KEY (`idArroseur`),
  ADD KEY `fkPlante` (`fkPlante`);

--
-- Index pour la table `t_humidity`
--
ALTER TABLE `t_humidity`
  ADD PRIMARY KEY (`idHumidity`);

--
-- Index pour la table `t_typplante`
--
ALTER TABLE `t_typplante`
  ADD PRIMARY KEY (`idTypPlante`),
  ADD UNIQUE KEY `plaNom` (`plaNom`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `t_arroseur`
--
ALTER TABLE `t_arroseur`
  MODIFY `idArroseur` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `t_humidity`
--
ALTER TABLE `t_humidity`
  MODIFY `idHumidity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `t_typplante`
--
ALTER TABLE `t_typplante`
  MODIFY `idTypPlante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `t_arroseur`
--
ALTER TABLE `t_arroseur`
  ADD CONSTRAINT `t_arroseur_ibfk_1` FOREIGN KEY (`fkPlante`) REFERENCES `t_typplante` (`idTypPlante`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
