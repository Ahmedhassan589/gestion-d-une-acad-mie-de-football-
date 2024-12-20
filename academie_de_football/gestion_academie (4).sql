-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 04 Octobre 2024 à 18:27
-- Version du serveur :  5.7.10
-- Version de PHP :  5.6.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestion_academie`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `num_admin` int(101) NOT NULL,
  `nom_admin` varchar(44) DEFAULT NULL,
  `prenom_admin` varchar(44) DEFAULT NULL,
  `adresse_admin` varchar(66) DEFAULT NULL,
  `email_admin` varchar(66) DEFAULT NULL,
  `tel_admin` varchar(110) DEFAULT NULL,
  `mot_passe_admin` varchar(66) DEFAULT NULL,
  `num_parent` int(66) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `administrateur`
--

INSERT INTO `administrateur` (`num_admin`, `nom_admin`, `prenom_admin`, `adresse_admin`, `email_admin`, `tel_admin`, `mot_passe_admin`,`num_parent`) VALUES
(1, 'Badria', 'omar', 'hayabley', 'Badria@gmail.com', 77471462, 112233,9);

-- --------------------------------------------------------

--
-- Structure de la table `entraineur`
--

CREATE TABLE `entraineur` (
  `Id_En` int(11) NOT NULL,
  `Nom_En` varchar(20) DEFAULT NULL,
  `Prenom_En` varchar(20) DEFAULT NULL,
  `Addr_En` varchar(20) DEFAULT NULL,
  `Salaire_En` int(11) DEFAULT NULL,
  `Id_jou` int(11) NOT NULL,
  `Id_equipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `entraineur`
--

INSERT INTO `entraineur` (`Id_En`, `Nom_En`, `Prenom_En`, `Addr_En`, `Salaire_En`,`Id_jou`,`Id_equipe`) VALUES
(1, 'Badria', 'omar', ' hayabley', 2100,1,2);

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE `equipe` (
  `Id_equipe` int(11) NOT NULL,
  `Nom_equipe` varchar(20) DEFAULT NULL,
  `Logo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `equipe`
--

INSERT INTO `equipe` (`Id_equipe`, `Nom_equipe`, `Logo`) VALUES
(1, 'center', 'vil'),
(2, 'U12', 'villa12');

-- --------------------------------------------------------

--
-- Structure de la table `formateur`
--

CREATE TABLE `formateur` (
  `Id_For` int(11) NOT NULL,
  `Nom_For` varchar(20) DEFAULT NULL,
  `Prenom_For` varchar(20) DEFAULT NULL,
  `Addr_For` varchar(20) DEFAULT NULL,
  `Id_equipe` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `formateur`
--

INSERT INTO `formateur` (`Id_For`, `Nom_For`, `Prenom_For`, `Addr_For`, `Id_equipe`) VALUES
(1, 'Fathi', 'Youssouf', ' Haramous', 1),
(2, 'Abass', 'Abdillahi', 'Q7', 2),
(3, 'Albert', 'Fred', 'Hodane', 1),
(4, 'Phil', 'Dav', '  Q21', 1),
(5, 'abdirahaman', 'ali', 'Q5', 2);

-- --------------------------------------------------------

--
-- Structure de la table `information`
--

CREATE TABLE `information` (
  `id_info` int(10) NOT NULL,
  `info` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `information`
--

INSERT INTO `information` (`id_info`, `info`,`num_admin`) VALUES
(54, 'demain vers 9h',2),
(10, 'aujourd hui y a pas de d entrainement reste chez vous',1),
(24, 'cette soir vers 21h',2),
(55, 'reste demain chez Abdi-Aziz',1);

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE `joueur` (
  `Id_Jou` int(11) NOT NULL,
  `Nom_Jou` varchar(20) DEFAULT NULL,
  `Prenom_Jou` varchar(20) DEFAULT NULL,
  `Addr_Jou` varchar(20) DEFAULT NULL,
  `Age_Jou` int(11) DEFAULT NULL,
  `Date_Naissance` date DEFAULT NULL,
  `Id_equipe` int(11) DEFAULT NULL,
  `num_parent` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `joueur`
--

INSERT INTO `joueur` (`Id_Jou`, `Nom_Jou`, `Prenom_Jou`, `Addr_Jou`, `Age_Jou`, `Date_Naissance`, `Id_equipe`, `num_parent`) VALUES
(1, 'ahmed', 'hassan', ' balbala', 21, '2002-05-20', 2, 8),
(2, 'abdillahi', 'youssouf', 'Arta', 23, '2001-02-02', 2, 2),
(7, 'Abdillahi', 'Abass', 'Q3', 11, '2001-02-02', 1, 1),
(8, 'Farah', 'Elmi', 'T3', 11, '2011-02-02', 1, 7),
(9, 'Doualeh', 'Ibrahim', 'PK12', 11, '2011-01-30', 1, 8),
(10, 'Daher', 'Ahmed', 'T3', 11, '2011-01-03', 1, 9),
(12, 'Abdillahi', 'Med', 'Hodan', 10, '2012-01-23', 1, 11),
(13, 'Houssein', 'Khalid', 'Q4', 10, '2012-01-02', 1, 12),
(14, 'Oscar', 'Hakimi', 'Heron', 10, '2012-01-03', 1, 14),
(15, 'Houssein', 'Hassan', 'Q7', 10, '2012-01-17', 1, 13),
(16, 'Ali', 'Robleh', 'Q3', 9, '2013-01-17', 2, 16),
(17, 'Salem', 'Hamze', 'Q3', 10, '2012-01-19', 2, 17),
(18, '0mar', 'Moustapha', 'Q3', 10, '2012-01-25', 2, 18),
(19, 'Ali', 'Kadir', 'Q3', 10, '2012-01-27', 2, 19),
(20, 'Kader', 'Tamim', 'Q7', 10, '2012-01-12', 2, 20),
(21, 'Houmad', 'Fouad', 'Q5', 10, '2012-01-03', 2, 21),
(22, 'Farah', 'Abdo', 'Q7', 9, '2012-01-31', 2, 22),
(23, 'Yacin', 'Nasri', 'Q3', 10, '2012-01-26', 2, 23),
(24, 'Farah', 'Waiss', 'Q2', 10, '2012-01-19', 2, 24),
(25, 'Bourhan', 'Ali', 'Q4', 11, '2011-01-20', 2, 25),
(26, 'Ali', 'Souhaib', 'Hodane', 10, '2012-01-11', 2, 26),
(27, 'Zaid', 'Chouaib', 'Q1', 10, '2012-01-29', 2, 27),
(28, 'Abdi', 'Yacin', 'Ambouli', 10, '2012-01-07', 2, 28),
(30, 'Daouda', 'Tamira', ' Q2', 13, '2011-01-14', 2, 30);

-- --------------------------------------------------------

--
-- Structure de la table `parent`
--

CREATE TABLE `parent` (
  `num_parent` int(11) NOT NULL,
  `Nom_parent` varchar(20) DEFAULT NULL,
  `Prenom_parent` varchar(20) DEFAULT NULL,
  `adresse` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pasword` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `parent`
--

INSERT INTO `parent` (`num_parent`, `Nom_parent`, `Prenom_parent`, `adresse`, `email`, `pasword`) VALUES
(2, 'Hassan Awaleh', 'Warsameh', 'cite cheik-osman', 'Hassanawaleh@gmail.com', '010201'),
(7, 'Zak', 'Farah', 'heron', 'zak@gmail.com', '23412'),
(8, 'Ali', 'Doualeh', 'Q2', 'ALI@gmail.com', '25261'),
(9, 'Awaleh', 'Daher', 'HERON', 'AWALEH@gmail.com', '14523'),
(10, 'Houssein', 'Ali', 'Q3', 'HOUSSEIN@gmail.com', '78977'),
(11, 'Omar', 'Abdillahi', 'Q1', 'OMAR@gmail.com', '54769'),
(12, 'Hakim', 'Houssein', 'Balbala', 'hakim@gmail.com', '45128'),
(13, 'Daher', 'Houssein', 'Q3', 'DAHER@gmail.com', '20870'),
(14, 'Cesar', 'Oscar', 'Heron', 'cesar@gmail.com', '85568'),
(15, 'Abass', 'Ade', 'Q2', 'abass@gmail.com', '65710'),
(16, 'Kader', 'Ali', 'Q3', 'Kader@gmail,com', '46789'),
(17, 'Abdichakour', 'Salem', 'Q7', 'abdicha@gmail,com', '98763'),
(18, 'Abdiladif', 'Omar', 'Q2', 'abdi@gmail,com', '64321'),
(19, 'Abdo', 'Ali', 'Ambouli', 'abdo1@gmail,com', '64320'),
(20, 'Youssouf', 'Kader', 'Q4', 'yous@gmail,com', '64390'),
(21, 'Abadir', 'Houmad', 'Q7', 'abadir@gmail,com', '34210'),
(22, 'Daoud', 'Farah', 'Q5', 'daoud@gmail,com', '54329'),
(23, 'Fouad', 'Yacin', 'HERON', 'fouad@gmail,com', '12345'),
(24, 'Hamoud', 'Farah', 'Q1', 'hamoud@gmail,com', '98765'),
(25, 'Abdirazak', 'Bourhan', 'Haramous', 'abdirazak@gmail,com', '43289'),
(26, 'Souhaib', 'Ali', 'Q5', 'souhaib@gamil,com', '32194'),
(27, 'Daher', 'Zaid', 'Einguella', 'daher@gmail,com', '76834'),
(28, 'Djibril', 'Abdi', 'Q6', 'djib@gmail,com', '12657'),
(29, 'Abdimajid', 'Youssouf', 'Q5', 'abdimaj@gmail,com', '76834'),
(30, 'Waiss', 'Daoud', 'Balballa', 'waiss@gmail,com', '80235'),
(54, 'momo', 'mimi', ' CIte', 'mimi@gmail.com', 'mimi');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `entraineur`
--
ALTER TABLE `entraineur`
  ADD PRIMARY KEY (`Id_En`),
   ADD KEY `FK_entraineur_equipe` (`Id_equipe`),
   ADD KEY `FK_entraineur_joueur` (`Id_jou`);

--
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`Id_equipe`);

--
-- Index pour la table `formateur`
--
ALTER TABLE `formateur`
  ADD PRIMARY KEY (`Id_For`),
  ADD KEY `FK_formateur_equipe` (`Id_equipe`);

--
-- Index pour la table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id_info`),
  ADD KEY `FK_information_administateur` (`num_admin`);

--
-- Index pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD PRIMARY KEY (`Id_Jou`),
  ADD KEY `FK_joueur_equipe` (`Id_equipe`),
  ADD KEY `FK_joueur_parent` (`num_parent`);

--
-- Index pour la table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`num_parent`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `information`
--
ALTER TABLE `information`
  MODIFY `id_info` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `formateur`
--
ALTER TABLE `formateur`
  ADD CONSTRAINT `FK_formateur_equipe` FOREIGN KEY (`Id_equipe`) REFERENCES `equipe` (`Id_equipe`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
