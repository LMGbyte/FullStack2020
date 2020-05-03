-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.14 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for municipal
DROP DATABASE IF EXISTS `municipal`;
CREATE DATABASE IF NOT EXISTS `municipal` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `municipal`;

-- Dumping structure for table municipal.data
DROP TABLE IF EXISTS `data`;
CREATE TABLE IF NOT EXISTS `data` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `period` varchar(50) NOT NULL DEFAULT '',
  `util_id` int(11) NOT NULL,
  `d_from` decimal(10,2) DEFAULT NULL,
  `d_to` decimal(10,2) DEFAULT NULL,
  `qty` decimal(10,2) DEFAULT NULL,
  `price` decimal(10,4) DEFAULT NULL,
  `d_sum` decimal(10,4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

-- Dumping structure for table municipal.lastcounters
DROP TABLE IF EXISTS `lastcounters`;
CREATE TABLE IF NOT EXISTS `lastcounters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `util_id` int(10) unsigned DEFAULT NULL,
  `lastvalue` decimal(10,2) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

-- Dumping structure for table municipal.utilities
DROP TABLE IF EXISTS `utilities`;
CREATE TABLE IF NOT EXISTS `utilities` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `util_name` varchar(50) NOT NULL DEFAULT '0',
  `price` decimal(10,4) unsigned DEFAULT NULL,
  `counter` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `util_name` (`util_name`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
