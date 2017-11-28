-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 14 Novembre 2017 à 15:36
-- Version du serveur :  5.7.20-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `CB`
--

-- --------------------------------------------------------

--
-- Structure de la table `bankAccount`
--

CREATE TABLE `bankAccount` (
  `idAccount` int(11) NOT NULL,
  `nameAccount` varchar(25) NOT NULL,
  `amountOfMoney` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `bankAccount`
--

INSERT INTO `bankAccount` (`idAccount`, `nameAccount`, `amountOfMoney`) VALUES
(1, 'Michel', 2300),
(2, 'Robert', 34000),
(3, 'Claude', 1200),
(4, 'Micheline', 12000),
(5, 'Josiane', 200),
(6, 'Ginette', 23900),
(7, 'Hubert', 120000);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `bankAccount`
--
ALTER TABLE `bankAccount`
  ADD PRIMARY KEY (`idAccount`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `bankAccount`
--
ALTER TABLE `bankAccount`
  MODIFY `idAccount` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
