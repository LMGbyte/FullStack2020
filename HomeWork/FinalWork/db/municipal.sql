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

-- Dumping data for table municipal.data: ~34 rows (approximately)
/*!40000 ALTER TABLE `data` DISABLE KEYS */;
INSERT IGNORE INTO `data` (`id`, `period`, `util_id`, `d_from`, `d_to`, `qty`, `price`, `d_sum`) VALUES
	(1, '202001', 1, NULL, NULL, NULL, NULL, 22.6900),
	(2, '202001', 2, 67.50, 69.60, 2.10, 0.8200, 1.7220),
	(3, '202001', 3, 74.20, 78.00, 3.80, 0.7400, 2.8120),
	(4, '202001', 9, 67.50, 69.60, 2.10, 0.7900, 1.6590),
	(5, '202001', 10, 74.20, 78.00, 3.80, 0.7100, 2.6980),
	(6, '202001', 11, NULL, NULL, NULL, NULL, 1.5600),
	(7, '202001', 12, NULL, NULL, NULL, NULL, 0.6300),
	(8, '202001', 4, NULL, NULL, NULL, NULL, 16.2700),
	(9, '202001', 6, NULL, NULL, NULL, NULL, 15.8000),
	(10, '202001', 7, 1560.00, 1645.00, 85.00, 0.1680, 14.2800),
	(11, '202001', 8, 1380.00, 1500.00, 120.00, 0.1070, 12.8400),
	(12, '202001', 5, NULL, NULL, NULL, NULL, 3.0400),
	(13, '202002', 1, NULL, NULL, NULL, NULL, 21.5800),
	(14, '202002', 2, 69.60, 71.30, 1.70, 0.9000, 1.5300),
	(15, '202002', 9, 69.60, 71.30, 1.70, 0.7700, 1.3090),
	(16, '202002', 3, 78.00, 81.50, 3.50, 0.8100, 2.8350),
	(17, '202002', 10, 78.00, 81.50, 3.50, 0.7000, 2.4500),
	(18, '202002', 4, NULL, NULL, NULL, NULL, 18.5000),
	(19, '202002', 6, NULL, NULL, NULL, NULL, 17.9000),
	(20, '202002', 7, 1645.00, 1735.00, 90.00, 0.1680, 15.1200),
	(21, '202002', 8, 1500.00, 1610.00, 110.00, 0.1070, 11.7700),
	(22, '202002', 5, NULL, NULL, NULL, NULL, 3.0400),
	(23, '202003', 1, NULL, NULL, NULL, NULL, 21.1900),
	(24, '202003', 2, 71.30, 73.17, 1.87, 0.9000, 1.6830),
	(25, '202003', 9, 71.30, 73.17, 1.87, 0.7700, 1.4399),
	(26, '202003', 3, 81.50, 85.30, 3.80, 0.8100, 3.0780),
	(27, '202003', 10, 81.50, 85.30, 3.80, 0.7000, 2.6600),
	(28, '202003', 11, NULL, NULL, NULL, NULL, 1.5200),
	(29, '202003', 12, NULL, NULL, NULL, NULL, 0.6300),
	(30, '202003', 4, NULL, NULL, NULL, NULL, 18.7500),
	(31, '202003', 6, NULL, NULL, NULL, NULL, 17.9000),
	(32, '202003', 7, 1735.00, 1830.00, 95.00, 0.1680, 15.9600),
	(33, '202003', 8, 1610.00, 1720.00, 110.00, 0.1070, 11.7700),
	(34, '202003', 5, NULL, NULL, NULL, NULL, 3.0400);
/*!40000 ALTER TABLE `data` ENABLE KEYS */;

-- Dumping structure for table municipal.lastcounters
DROP TABLE IF EXISTS `lastcounters`;
CREATE TABLE IF NOT EXISTS `lastcounters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `util_id` int(10) unsigned DEFAULT NULL,
  `lastvalue` decimal(10,2) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumping data for table municipal.lastcounters: ~6 rows (approximately)
/*!40000 ALTER TABLE `lastcounters` DISABLE KEYS */;
INSERT IGNORE INTO `lastcounters` (`id`, `util_id`, `lastvalue`) VALUES
	(3, 7, 1830.00),
	(4, 8, 1720.00),
	(5, 2, 73.17),
	(6, 3, 85.30),
	(7, 9, 73.17),
	(8, 10, 85.30);
/*!40000 ALTER TABLE `lastcounters` ENABLE KEYS */;

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

-- Dumping data for table municipal.utilities: ~12 rows (approximately)
/*!40000 ALTER TABLE `utilities` DISABLE KEYS */;
INSERT IGNORE INTO `utilities` (`id`, `util_name`, `price`, `counter`) VALUES
	(1, 'Šildymas', 21.1900, b'0'),
	(2, 'Vanduo (šaltas)', 0.9000, b'1'),
	(3, 'Vanduo (šiltas)', 0.8100, b'1'),
	(4, 'Namų valda', 18.7500, b'0'),
	(5, 'Šiukšlės', 3.0400, b'0'),
	(6, 'Internetas', 17.9000, b'0'),
	(7, 'Elektra (dienos)', 0.1680, b'1'),
	(8, 'Elektra (nakties)', 0.1070, b'1'),
	(9, 'Nuotekos (šaltas)', 0.7700, b'1'),
	(10, 'Nuotekos (šiltas)', 0.7000, b'1'),
	(11, 'Vanduo (abonimentas)', 1.5200, b'0'),
	(12, 'Vanduo (palaikymas)', 0.6300, b'0');
/*!40000 ALTER TABLE `utilities` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
