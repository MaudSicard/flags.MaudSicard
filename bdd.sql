-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 24 Décembre 2018 à 17:05
-- Version du serveur :  5.7.24-0ubuntu0.18.04.1
-- Version de PHP :  7.1.25-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @O

-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 24 Décembre 2018 à 17:05
-- Version du serveur :  5.7.24-0ubuntu0.18.04.1
-- Version de PHP :  7.1.25-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `drapeaux`
--

-- --------------------------------------------------------

--
-- Structure de la table `drapeaux``
--

CREATE TABLE `drapeaux` (
  `id` int(10) UNSIGNED NOT NULL,
  `nation` varchar(255) NOT NULL,
  `flag`varchar(255) NOT NULL,
  `motto` varchar(255) NOT NULL,
  `capitale` varchar(255) NOT NULL,
  `continent`varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `drapeaux`
--

INSERT INTO `drapeaux` (`id`, `nation`, `flag`, `motto`, `capitale`, `continent`) VALUES
(1,'Afrique du Sud', 'afrique_du_sud.png', "L'unité dans la diversité", 'Pretoria', 'Afrique'),
(2, 'Belgique', 'belgique.png', "L'union fait la force", 'Bruxelles', 'Europe'), 
(3, 'Brésil', 'bresil.png', "Ordre et progrès", 'Brasilia', 'Amérique du Sud'),
(4, 'Cameroun', 'cameroun.png', "Paix, travail et patrie", 'Yaoundé', 'Afrique'),
(5, 'Canada', 'canada.png', "D'un océan à l'autre", 'Ottawa', 'Amérique du Nord'),
(6, 'Chili', 'chili.png', "Par la raison ou par la force", 'Santiago', 'Amérique du Sud'),
(7, 'Espagne', 'espagne.png', "Encore au-delà", 'Madrid', 'Europe'),
(8, 'Indonésie', 'indonesie.png', "Unité dans la diversité", 'Jakarta', 'Asie'), 
(9, 'Malte', 'malte.png', "Par le courage et la constance", 'La Valette', 'Europe'),
(10, 'Norvège', 'norvège.png', "Tout pour la Norvège", 'Oslo', 'Europe'),
(11, 'Paraguay', 'paraguay.png', "Paix et justice", 'Asuncion', 'Amérique du Sud'),
(12, 'Royaume-Uni', 'royaume_uni.png', "Dieu est mon droit", 'Londres', 'Europe'),
(13, 'Suède', 'suede.png', "Toujours pour la Suède", 'Stockholm', 'Europe'),
(14, 'Turquie', 'turquie.png', "Paix dans le pays, paix dans le monde", 'Ankara', 'Moyen-Orient');
-- --------------------------------------------------------

--
-- Structure de la table `continent`
--

CREATE TABLE `continent` (
  `id` int(10) UNSIGNED NOT NULL,
  `name`varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `continent`
--

INSERT INTO `continent` (`id`, `name`) VALUES
(1, 'Europe'),
(2, 'Amérique du Sud'),
(3, 'Amérique du Nord'),
(4, 'Moyen-Orient'),
(5, 'Afrique'),
(6, 'Asie');