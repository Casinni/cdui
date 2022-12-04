-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 04 déc. 2022 à 15:30
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cdui`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE `adresse` (
  `id_adr` int(9) NOT NULL,
  `Numero` int(3) NOT NULL,
  `Rue` varchar(50) NOT NULL,
  `CodePostal` int(5) NOT NULL,
  `Ville` varchar(50) NOT NULL,
  `id_pers` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`id_adr`, `Numero`, `Rue`, `CodePostal`, `Ville`, `id_pers`) VALUES
(2, 36, 'rue des pigeons', 44000, 'Nantes', 2),
(3, 1, 'rue  des Champs-Elysées', 75000, 'Paris', 6),
(14, 1, 'boulevard Victor Hugo', 75010, 'Paris', 46);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id_pers` int(9) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `DateNaiss` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id_pers`, `Prenom`, `Nom`, `DateNaiss`) VALUES
(2, 'Emmanuel', 'Macron', '1977-12-22'),
(3, 'Bernadette', 'Chirac', '1940-12-09'),
(5, 'qsdqs', 'sqdsqqsd', '2022-12-21'),
(6, 'Bernadette', 'Chirac', '1930-12-21'),
(7, 'qsdqs', 'sqdsqqsd', '2022-12-21'),
(8, 'sss', 'sqdsqqsd', '2022-12-30'),
(9, 'qsdsqsd', 'ssqds', '2022-12-29'),
(10, 'Ss', 'sq', '2022-12-13'),
(11, 'Ss', 'sq', '2022-12-13'),
(12, 'xwxww', 'wx<', '2022-12-28'),
(13, 'dssds', 'dsd', '2022-12-14'),
(14, 'sdsdq', 'ddsd', '2022-12-16'),
(15, 'dqd', 'ddqds', '2022-12-29'),
(16, 'dqd', 'ddqds', '2022-12-29'),
(17, 'dqd', 'ddqds', '2022-12-29'),
(18, 'dqd', 'ddqds', '2022-12-29'),
(19, 'sss', 'bvvvvcxxvcxvc', '2022-12-16'),
(20, 'vvv', 'aaa', '2022-12-20'),
(21, 'vvv', 'aaa', '2022-12-20'),
(22, 'vvv', 'aaa', '2022-12-20'),
(23, 'sss', 'qfffdq', '2022-12-09'),
(24, 'sss', 'qfffdq', '2022-12-09'),
(25, 'sss', 'qfffdq', '2022-12-09'),
(26, 'sss', 'qfffdq', '2022-12-09'),
(27, 'aaaa', 'ddd', '2022-12-14'),
(28, 'aaaa', 'ddd', '2022-12-14'),
(29, 'aaaa', 'ddd', '2022-12-14'),
(30, 'aaaa', 'ddd', '2022-12-14'),
(31, 'aaaa', 'ddd', '2022-12-14'),
(32, 'aaaa', 'ddd', '2022-12-14'),
(33, 'aaaa', 'ddd', '2022-12-14'),
(34, 'aaaa', 'ddd', '2022-12-14'),
(35, 'sss', 'qfffdq', '2022-12-09'),
(36, 'sss', 'qfffdq', '2022-12-09'),
(46, 'Jean', 'Valjean', '1972-09-10');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`id_adr`),
  ADD KEY `id_pers` (`id_pers`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id_pers`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `id_adr` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id_pers` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD CONSTRAINT `Adresse_ibfk_1` FOREIGN KEY (`id_pers`) REFERENCES `personne` (`id_pers`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
