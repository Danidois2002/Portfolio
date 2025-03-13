-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 09, 2025 at 11:27 PM
-- Server version: 9.2.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `projets`
--

DROP TABLE IF EXISTS `projets`;
CREATE TABLE IF NOT EXISTS `projets` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fichier` varchar(255) NOT NULL,
  `icone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projets`
--

INSERT INTO `projets` (`id`, `titre`, `description`, `fichier`, `icone`) VALUES
(1, 'Projet 1', 'Ce projet est un site web dynamique dédié au Real Madrid C.F., permettant d\'afficher les actualités, les équipes et les informations du club. Il intègre un système d\'authentification pour différencier les utilisateurs et les administrateurs.', 'assets/projets/EVAL_V2.zip', ''),
(2, 'Projet 2', 'Le CSS Zen Garden est un projet conçu pour démontrer la puissance et la flexibilité du CSS (Cascading Style Sheets) dans la conception web. L\'objectif principal du projet est de montrer comment un même fichier HTML peut être stylisé de multiples façons en utilisant uniquement du CSS, sans modifier la structure du HTML.', 'assets/projets/ZenGarden.zip', ''),
(3, 'Projet 3', 'Ce projet est une application web de gestion d’albums photo permettant aux utilisateurs de créer, afficher et organiser leurs albums. Une interface administrateur permet d\'ajouter, supprimer des albums et uploader des photos, tandis que les utilisateurs peuvent consulter les albums disponibles.', 'assets/projets/Album-Photo.zip', ''),
(4, 'Projet 4', 'Ce projet est une maquette front-end d’un site moderne et interactif, mettant en avant un design futuriste avec une mise en page soignée et des sections animées. Il inclut une page d’accueil avec un héros visuel percutant, des colonnes de contenu, une citation stylisée et un formulaire de contact élégant.', 'assets/projets/Archive%20-Better.zip', ''),
(5, 'Projet 5', 'Ce projet de portfolio est un site web dynamique et interactif présentant mes compétences, mes projets et mon parcours en développement web et back-end. Il intègre un design personnalisé avec animations, un affichage responsive et une navigation fluide pour offrir une expérience utilisateur immersive.', 'assets/projets/portfolio.zip', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
