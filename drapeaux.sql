-- Adminer 4.7.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `continent`;
CREATE TABLE `continent` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `continent` (`id`, `name`) VALUES
(1,	'Europe'),
(2,	'Amérique du Sud'),
(6,	'Afrique'),
(4,	'Asie'),
(5,	'Moyen-Orient'),
(3,	'Amérique du Nord');

DROP TABLE IF EXISTS `flag`;
CREATE TABLE `flag` (
  `id` int(10) unsigned NOT NULL,
  `nation` varchar(255) NOT NULL,
  `flag` varchar(255) NOT NULL,
  `motto` varchar(255) NOT NULL,
  `capitale` varchar(255) NOT NULL,
  `continent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `flag` (`id`, `nation`, `flag`, `motto`, `capitale`, `continent`) VALUES
(1,	'Afrique du Sud',	'afrique_du_sud.png',	'L\'unité dans la diversité',	'Pretoria',	'Afrique'),
(2,	'Belgique',	'belgique.png',	'L\'union fait la force',	'Bruxelles',	'Europe'),
(3,	'Brésil',	'bresil.png',	'Ordre et progrès',	'Brasilia',	'Amérique du Sud'),
(4,	'Cameroun',	'cameroun.png',	'Paix, travail et patrie',	'Yaoundé',	'Afrique'),
(5,	'Canada',	'canada.png',	'D\'un océan à l\'autre',	'Ottawa',	'Amérique du Nord'),
(6,	'Chili',	'chili.png',	'Par la raison ou par la force',	'Santiago',	'Amérique du Sud'),
(7,	'Espagne',	'espagne.png',	'Encore au-delà',	'Madrid',	'Europe'),
(8,	'Indonésie',	'indonesie.png',	'Unité dans la diversité',	'Jakarta',	'Asie'),
(9,	'Malte',	'malte.png',	'Par le courage et la constance',	'La Valette',	'Europe'),
(10,	'Norvège',	'norvege.png',	'Tout pour la Norvège',	'Oslo',	'Europe'),
(11,	'Paraguay',	'paraguay.png',	'Paix et justice',	'Asuncion',	'Amérique du Sud'),
(12,	'Royaume-Uni',	'royaume_uni.png',	'Dieu est mon droit',	'Londres',	'Europe'),
(13,	'Suède',	'suede.png',	'Toujours pour la Suède',	'Stockholm',	'Europe'),
(14,	'Turquie',	'turquie.png',	'Paix dans le pays, paix dans le monde',	'Ankara',	'Moyen-Orient');

-- 2021-02-19 13:19:21
