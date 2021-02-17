
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='產品資料.....';

-- Data exporting was unselected.

-- Dumping structure for table php_gem.order
CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(255) NOT NULL DEFAULT '0',
  `client_email` varchar(255) NOT NULL DEFAULT '0',
  `quantity` int(11) NOT NULL DEFAULT '0',
  `order_time` timestamp NOT NULL,
  KEY `Index 1` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table php_gem.staff
CREATE TABLE IF NOT EXISTS `staff` (
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  KEY `Index 1` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
