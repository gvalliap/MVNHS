-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.6.17 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for mvnhs
DROP DATABASE IF EXISTS `mvnhs`;
CREATE DATABASE IF NOT EXISTS `mvnhs` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `mvnhs`;


-- Dumping structure for table mvnhs.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) DEFAULT NULL,
  `fname` tinytext,
  `lname` tinytext,
  `grade` int(11) DEFAULT NULL,
  `so1` int(11) DEFAULT NULL,
  `so2` int(11) DEFAULT NULL,
  `ju1` int(11) DEFAULT NULL,
  `ju2` int(11) DEFAULT NULL,
  `se1` int(11) DEFAULT NULL,
  `se2` int(11) DEFAULT NULL,
  `start_sem` int(11) DEFAULT NULL,
  `email` text,
  `pass` text,
  `admin` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
