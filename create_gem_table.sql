-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for php_gem
CREATE DATABASE IF NOT EXISTS `php_gem` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `php_gem`;

-- Dumping structure for table php_gem.gem
CREATE TABLE IF NOT EXISTS `gem` (
  `gem_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `remaining` int(11) DEFAULT NULL,
  KEY `Index 1` (`gem_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COMMENT='產品資料.....';

-- Dumping data for table php_gem.gem: ~0 rows (approximately)
/*!40000 ALTER TABLE `gem` DISABLE KEYS */;
INSERT INTO `gem` (`gem_id`, `name`, `price`, `image`, `remaining`) VALUES
	(1, '白珍珠', 12, '1.jpg', 5),
	(2, '紅心寶石', 100, '2.jpg', 5),
	(3, '鑽石', 500, '3.jpg', 5),
	(4, '綠寶石', 250, '4.jpg', 5);
/*!40000 ALTER TABLE `gem` ENABLE KEYS */;

-- Dumping structure for table php_gem.order
CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(255) NOT NULL DEFAULT '0',
  `client_email` varchar(255) NOT NULL DEFAULT '0',
  `quantity` int(11) NOT NULL DEFAULT '0',
  `order_time` timestamp NOT NULL,
  KEY `Index 1` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table php_gem.order: ~0 rows (approximately)
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
/*!40000 ALTER TABLE `order` ENABLE KEYS */;

-- Dumping structure for table php_gem.staff
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  KEY `Index 1` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table php_gem.staff: ~4 rows (approximately)
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` (`id`, `email`, `password`, `name`) VALUES
	(1, 'hello@leunghoyin.hk', 'password123', 'Ho Yin'),
	(4, 'peterlau@leunghoyin.hk', '12345', 'Peter Lau'),
	(5, 'staff@gmail.com', '56789', 'John');
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
