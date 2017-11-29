/*
SQLyog Ultimate v12.4.1 (64 bit)
MySQL - 10.1.26-MariaDB : Database - test_api
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `user_review` */

DROP TABLE IF EXISTS `user_review`;

CREATE TABLE `user_review` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(255) DEFAULT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `rating` float(5,1) DEFAULT NULL,
  `review` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `user_review` */

insert  into `user_review`(`id`,`order_id`,`product_id`,`user_id`,`rating`,`review`,`created_at`,`updated_at`) values 
(2,'2','1','2',0.9,'Test 002','2017-11-30 01:57:58','0000-00-00 00:00:00'),
(3,'3','1','3',0.9,'Test 003','2017-11-30 01:58:19','0000-00-00 00:00:00'),
(8,'4','2','4',0.9,'Test123','2017-11-30 02:39:55','0000-00-00 00:00:00'),
(9,'5','1','5',4.9,'Test1234','2017-11-30 02:40:50','0000-00-00 00:00:00'),
(10,'4','1','4',3.5,'Test 004','2017-11-30 02:43:47','0000-00-00 00:00:00'),
(11,'4','1','4',3.5,'Test 004','2017-11-30 02:44:10','0000-00-00 00:00:00'),
(12,'11','1','3',1.0,'Test 345','2017-11-30 03:00:23','0000-00-00 00:00:00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
