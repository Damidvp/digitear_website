-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 03 Septembre 2019 à 14:56
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `digitear`
--

-- --------------------------------------------------------

--
-- Structure de la table `download`
--

CREATE TABLE `download` (
  `idUser` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numVersion` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeVersion` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateHeure` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `download`
--

INSERT INTO `download` (`idUser`, `numVersion`, `typeVersion`, `dateHeure`) VALUES
('damien@overline-systems.com', '1.0', 'BELTPACK', '2019-09-17 17:50:54'),
('damien@overline-systems.com', '1.0', 'TXBOX', '2019-09-18 06:16:24'),
('virginie@overline-systems.com', '1.0', 'TXBOX', '2019-09-16 08:24:23');

-- --------------------------------------------------------

--
-- Structure de la table `edit`
--

CREATE TABLE `edit` (
  `idUser` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numVersion` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeVersion` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateHeure` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `edit`
--

INSERT INTO `edit` (`idUser`, `numVersion`, `typeVersion`, `dateHeure`) VALUES
('damien@overline-systems.com', '1.0', 'BELTPACK', '2019-09-11 05:07:16'),
('virginie@overline-systems.com', '1.0', 'BELTPACK', '2019-09-06 12:46:36'),
('virginie@overline-systems.com', '1.0', 'TXBOX', '2019-09-05 20:59:36');

-- --------------------------------------------------------

--
-- Structure de la table `grade`
--

CREATE TABLE `grade` (
  `numGrade` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libGrade` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `grade`
--

INSERT INTO `grade` (`numGrade`, `libGrade`) VALUES
('1', 'Personnel Overline'),
('2', 'Distributeur');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `idUser` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numGrade` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`idUser`, `password`, `numGrade`) VALUES
('damien@overline-systems.com', 'dada', '1'),
('virginie@overline-systems.com', 'vivi', '2');

-- --------------------------------------------------------

--
-- Structure de la table `version`
--

CREATE TABLE `version` (
  `numVersion` varchar(15) CHARACTER SET utf8 NOT NULL,
  `typeVersion` varchar(10) CHARACTER SET utf8 NOT NULL,
  `notePatch` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `version`
--

INSERT INTO `version` (`numVersion`, `typeVersion`, `notePatch`) VALUES
('1.0', 'BELTPACK', 'Hello ! Moi c\'est la 1.0 du Beltpack, downloadez moiiii'),
('1.0', 'TXBOX', 'Coucou ! Je suis la version 1.0 de la TxBox ! Téléchargez moiiiiiii');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`idUser`,`numVersion`,`typeVersion`,`dateHeure`),
  ADD KEY `FK2_DOWNLOAD` (`numVersion`,`typeVersion`);

--
-- Index pour la table `edit`
--
ALTER TABLE `edit`
  ADD PRIMARY KEY (`idUser`,`numVersion`,`typeVersion`,`dateHeure`),
  ADD KEY `FK2_EDIT` (`numVersion`,`typeVersion`);

--
-- Index pour la table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`numGrade`),
  ADD KEY `numGrade` (`numGrade`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `numGrade` (`numGrade`);

--
-- Index pour la table `version`
--
ALTER TABLE `version`
  ADD PRIMARY KEY (`numVersion`,`typeVersion`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
