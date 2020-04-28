/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `position_id` tinyint(3) unsigned NOT NULL,
  `salary` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_employees_positions` (`position_id`),
  CONSTRAINT `FK_employees_positions` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` (`name`, `surname`, `position_id`, `salary`) VALUES
	('Vytautas', 'Vytas', 2, 1800),
	('Darius', 'Gricius', 2, 950),
	('Monika', 'Linkyte', 1, 800),
	('Edgaras', 'Genys', 3, 999),
	('Simonas', 'Petravicius', 1, 1001),
	('Kamelija', 'Zukaite', 4, 998),
	('Karolis', 'Kapocius', 4, 1009),
	('Mindaugas', 'Railinis', 3, 650);
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;

DROP TABLE IF EXISTS `positions`;
CREATE TABLE IF NOT EXISTS `positions` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `positions` DISABLE KEYS */;
INSERT INTO `positions` (`id`, `name`) VALUES
	(1, 'finance'),
	(2, 'maneger'),
	(3, 'sales-maneger'),
	(4, 'management-acaountant'),
	(6, 'janitor');
/*!40000 ALTER TABLE `positions` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
