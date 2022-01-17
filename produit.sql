-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 16 nov. 2021 à 10:22
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `produit`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id_Ar` int(11) NOT NULL,
  `Nom_AR` varchar(50) NOT NULL,
  `Prix_AR` double NOT NULL,
  `pic_Ar` varchar(300) NOT NULL,
  `Descr` varchar(300) NOT NULL,
  `Quant` double NOT NULL,
  `Etat` int(11) NOT NULL,
  `Type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id_Ar`, `Nom_AR`, `Prix_AR`, `pic_Ar`, `Descr`, `Quant`, `Etat`, `Type`) VALUES
(1, 'Pomme', 800, 'product2.jpg', 'Pomme est la une tres bon solution pour vous santé ', 0.5, 0, 'fruits'),
(2, 'Fraise', 270, 'product8.jpg', 'Miam miam les fraise pour vous tartes et pour vous dessert...', 1, 0, 'fruits'),
(3, 'Pomme de terre', 160, 'pommes-de-terre.jpg', 'Pomme de terre pour vous plats et vous gratin ', 0.5, 0, 'legumes'),
(5, 'Peche', 180, 'p5.jpg', 'miam miam...Peche comme dessert', 1, 0, 'fruits'),
(6, 'Abricot', 3500, 'p4.jpg', 'Abricot comme juus', 0, 0, 'fruits'),
(7, 'Poivre', 130, 'p6.jpeg', 'Riche du vitamine A et vitamine B9', 0.5, 0, 'legumes'),
(8, 'Salade vert', 70, 'p7.jpg', 'Riche de vitamine A,vitamine B9 et vitamine C', 1, 0, 'legumes'),
(9, 'Kiwi', 800, 'Kiwi.jpeg', 'fruits frais', 1, 0, 'fruits'),
(10, 'Ananas', 5700, 'ananas.jpeg', 'Fruits frais', 0, 0, 'fruits'),
(11, 'Banan', 230, 'banane.jpeg', 'Fruits frais', 2, 0, 'fruits'),
(12, 'Cerise', 820, 'cerise.jpeg', 'Fruits frais', 0, 0, 'fruits'),
(13, 'Orange', 150, 'orange.jpeg', 'Fruits frais', 0, 0, 'fruits'),
(14, 'Amande', 2600, 'amande.jpeg', 'Fruits frais', 0, 0, 'fruits'),
(15, 'Noisette', 2800, 'noisette.jpeg', 'Fruits frais', 0, 0, 'fruits'),
(16, 'Tomate', 10, 'tomate.jpeg', 'Riche de vitamine C et Potassium', 0, 0, 'legumes');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_Ar`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_Ar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
