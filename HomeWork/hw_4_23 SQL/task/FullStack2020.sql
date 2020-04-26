-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.18 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for fullstack
CREATE DATABASE IF NOT EXISTS `fullstack` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `fullstack`;

-- Dumping structure for table fullstack.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `salary` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table fullstack.employees: 15 rows
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` (`id`, `name`, `surname`, `position`, `salary`) VALUES
	(1, 'Tomas', 'Sinickis', 'Direktorius', 1800),
	(2, 'Milda', 'Pilvelytė', 'Direktoriaus pavaduotoja', 1200),
	(3, 'Gediminas', 'Stumbrys', 'Technologas', 800),
	(4, 'Marius', 'Siurplys', 'Vyr. technologas', 1100),
	(5, 'Eglė', 'Genytė', 'Vadybininkė', 750),
	(6, 'Fausta', 'Butkienė', 'Vadybininkė', 750),
	(7, 'Lilija', 'Austienė', 'Vadybininkė', 860),
	(8, 'Rima', 'Rimkienė', 'Vadybininkė', 900),
	(9, 'Austėja', 'Kurmytė', 'Operatorė', 700),
	(11, 'Mantas', 'Kielis', 'Operatorius', 1000),
	(12, 'Silvija', 'Malkytė', 'Operatorė', 800),
	(13, 'Ineta', 'Timbergytė', 'Operatorė', 830),
	(14, 'Tadas', 'Urbonas', 'Vadybininkas', 850),
	(15, 'Audrius', 'Česnauskas', 'Operatorius', 1000),
	(16, 'Marius', 'Toliušis', 'Vadybininkas', 850);
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
