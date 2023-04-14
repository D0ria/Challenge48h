-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 14 avr. 2023 à 10:02
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS ynoresto
USE ynoresto;
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ynoresto`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  `Mdp` text NOT NULL,
  `Email` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `campus`
--

DROP TABLE IF EXISTS `campus`;
CREATE TABLE IF NOT EXISTS `campus` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Campus` text NOT NULL,
  `Adresse` text NOT NULL,
  `Longitude` float NOT NULL,
  `Lattitude` float NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `campus`
--

INSERT INTO `campus` (`Id`, `Campus`, `Adresse`, `Longitude`, `Lattitude`) VALUES
(1, 'Jean Macé', '27 Rue Raoul Servant, 69007 Lyon', 4.83757, 45.7458),
(2, 'Impulse', '67 Av. Galline, 69100 Villeurbanne', 4.87044, 45.7765);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  `Commentaire` text NOT NULL,
  `Prix` float NOT NULL,
  `Note` float NOT NULL,
  `Idetablissement` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `etablissement`
--

DROP TABLE IF EXISTS `etablissement`;
CREATE TABLE IF NOT EXISTS `etablissement` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  `Adresse` text NOT NULL,
  `Lattitude` float NOT NULL,
  `Longitude` float NOT NULL,
  `Type` text NOT NULL,
  `Notemoyenne` float DEFAULT NULL,
  `Prixmoyen` float DEFAULT NULL,
  `Idcampus` int(11) NOT NULL,
  `Logo` text NOT NULL,
  `Carte` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etablissement`
--

INSERT INTO `etablissement` (`Id`, `Nom`, `Adresse`, `Lattitude`, `Longitude`, `Type`, `Notemoyenne`, `Prixmoyen`, `Idcampus`, `Logo`, `Carte`) VALUES
(1, 'Kinoko', '34 Rue Bancel, 69007 Lyon', 4.83895, 45.7474, 'restaurant', NULL, NULL, 1, 'https://kinokorestaurant.files.wordpress.com/2022/04/white_logo_transparent_background.png?w=173', 'https://kinokorestaurant.wordpress.com'),
(2, 'Le Vivaldi', '49 Av. Berthelot, 69007 Lyon', 4.84008, 45.7461, 'pizzeria', NULL, NULL, 1, 'https://pizzeriavivaldilyon.fr/images/upload/pizzeriavivaldilyon/photos/-1676738480.png', 'https://pizzeriavivaldilyon.fr'),
(3, 'Mister Kebab', '2 Av. Berthelot, 69007 Lyon', 4.83406, 45.7477, 'fast food', NULL, NULL, 1, 'https://pizzeriavivaldilyon.fr/images/upload/pizzeriavivaldilyon/photos/-1676738480.png', 'https://pizzeriavivaldilyon.fr'),
(4, 'Kenbo', '3 Av. Berthelot, 69007 Lyon', 4.83449, 45.7479, 'restaurant végétarien', NULL, NULL, 1, 'https://lh5.googleusercontent.com/p/AF1QipPCs60y6nPTutuQjpOL5Y_ABITJaJF7Mn_29kbb=w408-h544-k-no', 'https://cdn.website.dish.co/media/b6/92/5166487/Menu-1.jpg'),
(5, 'Against The Grain', '135 Rue Sébastien Gryphe, 69007 Lyon', 4.83871, 45.7477, 'boulengerie', NULL, NULL, 1, 'https://lh5.googleusercontent.com/p/AF1QipNJhwvyyiIDi4ZMTqTYYGjBIdMirlEVRXKxBQJg=w408-h544-k-no', 'https://www.instagram.com/atg_vegan/'),
(6, 'Le Fournil des Traditions', '36 Av. Berthelot, 69007 Lyon', 4.83784, 45.7463, 'boulengerie', NULL, NULL, 1, 'https://lh5.googleusercontent.com/p/AF1QipOF5rnX0ZoSgvjxn_2kJj4w_aM79qTK3GXk2Oqj=w408-h306-k-no', ''),
(7, 'Fresh Burritos', '24 Av. Berthelot, 69007 Lyon', 4.83696, 45.7466, 'restaurant mexicain', NULL, NULL, 1, 'https://lh5.googleusercontent.com/p/AF1QipOPDN-Yhsk2VxYGNUcn-MB07V6akpY4UCJt_ETC=w408-h271-k-no', 'https://freshburritos.fr/notre-carte/'),
(8, 'La Dernière Séance - Chez Paolo', '39 Av. Berthelot, 69007 Lyon', 4.83838, 45.7465, 'restaurant italien', NULL, NULL, 1, 'https://lh5.googleusercontent.com/p/AF1QipNQX6XNRlsKUmVX0HRI6Oklx5c9lxenzsMEriDP=w493-h240-k-no', 'http://www.la-derniere-seance.com'),
(9, 'Mot Hai Ba Viêt Nam !', '29 Av. Berthelot, 69007 Lyon', 45.747, 4.83754, 'restaurant asiatque', NULL, NULL, 1, 'https://lh5.googleusercontent.com/p/AF1QipO7RAOLCMDrrAQtgNTGf4pxcFmwGa_fpLxg8VYi=w427-h240-k-no', 'https://www.subway.com/fr-FR/MenuNutrition/Menu?utm_source=yxt-goog&utm_medium=local&utm_term=acq&utm_content=51929&utm_campaign=evergreen-2020&y_source=1_MTQ5MjUyMDMtNzE1LWxvY2F0aW9uLm1lbnVfdXJs'),
(10, 'L\'Atelier Salengro', '8 Pl. Jules Guesde, 69007 Lyon', 45.776, 4.87057, 'boulangerie', NULL, NULL, 2, 'https://lh5.googleusercontent.com/p/AF1QipOLQdbTqePruiv4FL9VCAs8-yqRaEC0qnCZTyR4=w408-h544-k-no', 'https://www.facebook.com/MotHaiBaVietNam/'),
(11, 'Basilic & Co', '37 A Av. Roger Salengro, 69100 Villeurbanne', 45.7758, 4.8704, 'pizzeria', NULL, NULL, 2, 'https://lh5.googleusercontent.com/p/AF1QipOFAGj5Zt2_7bBDnYjYOCZTsfSKdH8Yq72LgAkT=w408-h725-k-no', ''),
(12, 'Kebab Lyonnais', '7 Av. Roger Salengro, 69100 Villeurbanne', 45.7748, 4.86849, 'fast food', NULL, NULL, 2, 'https://basilic-and-co.com/wp-content/uploads/2020/02/Menu-carte-restaurant-Basilic-and-Co-Villeurbanne-Wilson.pdf', 'https://lh5.googleusercontent.com/p/AF1QipPLF2CM5fmimEXTdTSnTeleJTaS6EqundBN2Upp=w408-h272-k-no'),
(13, 'Ristretto', '2 Rue Descartes, 69100 Villeurbanne', 45.7762, 4.87199, 'restaurant italien', NULL, NULL, 2, 'https://www.order.store/store/goumet-famille/rX0xAQDNRfiLwHrF0tn_AQ%20%20%20%20https://borneoapp.com/BarriosGratinesSalengro', 'https://borneoapp.com/BarriosGratinesSalengro'),
(14, 'Salengro Tandoori', '41 Av. Roger Salengro, 69100 Villeurbanne', 45.7765, 4.87203, 'restaurant indien', NULL, NULL, 2, 'https://www.order.store/store/goumet-famille/rX0xAQDNRfiLwHrF0tn_AQ%20%20%20%20https://borneoapp.com/BarriosGratinesSalengro', 'https://borneoapp.com/BarriosGratinesSalengro'),
(15, 'Viand\'o Chwa', '39 Av. Roger Salengro, 69100 Villeurbanne', 45.7765, 4.87172, 'restaurant', NULL, NULL, 2, 'https://lh3.googleusercontent.com/p/AF1QipO69nBI_kJpyVv8725vzRDI-Xj0pdcFzYzkeXlO=w1080-h608-p-k-no-v0', 'https://deliveroo.fr/fr/menu/lyon/villeurbanne-gratte-ciel/ristretto'),
(16, 'Pizza Capricci', '55 Av. Roger Salengro, 69100 Villeurbanne', 45.7766, 4.87349, 'pizzeria à emporter', NULL, NULL, 2, 'https://lh3.googleusercontent.com/p/AF1QipNI9gzDUmnq6rc4TEFsa8W9X_VxT7HpRgiJi5mm=s1360-w1360-h1020', 'https://tandoori-salengro.eatbu.com/?lang=fr'),
(17, 'A la Bonne Frnaquette', '11 Rue Marteret, 69100 Villeurbanne', 45.7772, 4.87215, 'restaurant', NULL, NULL, 2, 'https://lh3.googleusercontent.com/p/AF1QipN7huI2BrnlWIVNPFFuocMTkqsUo3JFHdj9PFnL=s1360-w1360-h1020', 'https://cdn.website.dish.co/media/23/e4/2258497/O-Chwa-Menu.pdf'),
(18, 'La Panetière des Charpennes', '3 Rue de Milan, 69100 Villeurbanne', 45.7739, 4.86901, 'boulangerie', NULL, NULL, 2, 'https://www.plexysign.com/public/img/medium/Capriccijpg_61bafed2cacc0.jpg', 'https://deliveroo.fr/fr/menu/lyon/lyon-la-doua/pizza-capricci?utm_medium=affiliate&utm_source=google_maps_link'),
(19, 'Picaflores', '41 Rue Professeur Grignard, 69007 Lyon', 45.7472, 4.83884, 'restaurant latino américain', NULL, NULL, 1, 'https://cdn.eat-list.fr/establishment/photo/gallery_photo/69100-villeurbanne/a-la-bonne-franquette_85148_540.jpg', 'https://cdn.eat-list.fr/establishment/menu/gallery_menu/69100-villeurbanne/a-la-bonne-franquette_85148_5d1.jpg'),
(20, 'Le 12.2', '12 Cr de Verdun Rambaud, 69002 Lyon', 45.7542, 4.8309, 'restaurant français', NULL, NULL, 3, 'https://www.plexysign.com/public/img/medium/Capriccijpg_61bafed2cacc0.jpg', 'https://deliveroo.fr/fr/menu/lyon/lyon-la-doua/pizza-capricci?utm_medium=affiliate&utm_source=google_maps_link'),
(21, 'Chez Micheline', '14 Pl. Carnot, 69002 Lyon', 45.7503, 4.82869, 'restaurant français', NULL, NULL, 3, 'https://lyon.direct/restos/wp-content/uploads/2022/10/photo-427.jpg', 'https://www.picaflores-restaurant.fr/la-carte'),
(22, 'Il Palio', '2 Rue Duhamel, 69002 Lyon', 45.7504, 4.82884, 'restaurant italien', NULL, NULL, 3, 'https://lh3.googleusercontent.com/p/AF1QipNyZ5Eqx8HNwFBVCEdo_dksm3_VLBgAZ9Z_5b-D=s1360-w1360-h1020', 'https://bit.ly/Menu-12-2-Hiver2122'),
(23, 'Yokohama', '28 Rue de Condé, 69002 Lyon', 45.7512, 4.82978, 'restaurant japonais', NULL, NULL, 3, 'https://lh3.googleusercontent.com/p/AF1QipPwk8E1Ox0biZlkUmCPT6OsAQ5hxSflRLx1Su20=s1360-w1360-h1020', ''),
(24, 'Les 9 Lotus', '56 Rue de la Charité, 69002 Lyon', 45.7516, 4.83083, 'restaurant vietnamien', NULL, NULL, 3, 'https://cdn.eat-list.fr/establishment/photo/gallery_photo/69002-lyon-2/il-palio_62684_318.jpg', 'https://cdn.website.dish.co/media/a0/99/5386473/Menu-2.pdf'),
(25, 'Chollet Charité', '62B Rue de la Charité, 69002 Lyon', 45.7539, 4.8321, 'boulangerie patisserie', NULL, NULL, 3, 'https://10619-2.s.cdn12.com/rests/original/106_507241566.jpg', 'https://yokohama.eatbu.com/?lang=fr'),
(26, 'Banette Pep\'Steve', '24 Rue Franklin, 69002 Lyon', 45.7515, 4.83241, 'boulangerie patisserie', NULL, NULL, 3, 'https://cdn.eat-list.fr/establishment/photo/gallery_photo/69002-lyon-2/les-9-lotus_67343_bdd.jpg', 'https://lacarte.menu/restaurants/lyon/les-9-lotus'),
(27, 'JIN JOO', '59 Rue Victor Hugo, 69002 Lyon', 45.7522, 4.82875, 'ramen', NULL, NULL, 3, 'https://lh3.googleusercontent.com/p/AF1QipNmCc7Xlw839Pj9HgIK_wErUOpLRTS59b8bR4A7=s1360-w1360-h1020', ''),
(28, 'Subway', '29 Av. Berthelot, 69007 Lyon', 45.7469, 4.83736, 'Sandwicherie', NULL, NULL, 1, 'https://lh5.googleusercontent.com/p/AF1QipO7RAOLCMDrrAQtgNTGf4pxcFmwGa_fpLxg8VYi=w427-h240-k-no', 'https://www.subway.com/fr-FR/MenuNutrition/Menu?utm_source=yxt-goog&utm_medium=local&utm_term=acq&utm_content=51929&utm_campaign=evergreen-2020&y_source=1_MTQ5MjUyMDMtNzE1LWxvY2F0aW9uLm1lbnVfdXJs');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
