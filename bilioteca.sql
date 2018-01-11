/*
SQLyog Community v8.71 
MySQL - 5.5.5-10.1.29-MariaDB : Database - biblioteca
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`biblioteca` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `biblioteca`;

/*Table structure for table `documento` */

DROP TABLE IF EXISTS `documento`;

CREATE TABLE `documento` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) DEFAULT NULL,
  `lugar` varchar(50) DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL,
  `fechaingreso` date DEFAULT NULL,
  `numpaginas` tinyint(7) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  `numero` tinyint(7) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `documento` */

/*Table structure for table `libro` */

DROP TABLE IF EXISTS `libro`;

CREATE TABLE `libro` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `edicion` varchar(50) DEFAULT NULL,
  `editorial` varchar(50) DEFAULT NULL,
  `capitulos` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  CONSTRAINT `FK_libro` FOREIGN KEY (`codigo`) REFERENCES `documento` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `libro` */

/*Table structure for table `revista` */

DROP TABLE IF EXISTS `revista`;

CREATE TABLE `revista` (
  `codigo` int(11) NOT NULL,
  `volumen` varchar(50) DEFAULT NULL,
  `fechaEdicion` date DEFAULT NULL,
  `temas` varchar(50) DEFAULT NULL,
  `secciones` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  CONSTRAINT `FK_revista` FOREIGN KEY (`codigo`) REFERENCES `documento` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `revista` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
