/*
SQLyog Ultimate - MySQL GUI v8.22 
MySQL - 5.5.5-10.1.32-MariaDB : Database - sigmusik
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sigmusik` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sigmusik`;

/*Table structure for table `item_rating` */

DROP TABLE IF EXISTS `item_rating`;

CREATE TABLE `item_rating` (
  `ratingId` int(11) NOT NULL AUTO_INCREMENT,
  `itemId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `ratingNumber` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comments` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = Block, 0 = Unblock',
  PRIMARY KEY (`ratingId`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `item_rating` */

insert  into `item_rating`(`ratingId`,`itemId`,`userId`,`ratingNumber`,`title`,`comments`,`created`,`modified`,`status`) values (17,9,1234567,4,'','','2019-10-31 17:11:04','2019-10-31 17:11:04',1),(23,18,1234567,5,'','','2019-11-01 18:02:43','2019-11-01 18:02:43',1),(24,16,1234567,4,'','','2019-11-01 18:02:49','2019-11-01 18:02:49',1),(25,17,1234567,4,'','','2019-11-01 18:02:56','2019-11-01 18:02:56',1),(26,15,1234567,3,'','','2019-11-01 18:03:02','2019-11-01 18:03:02',1),(27,19,1234567,3,'','','2019-11-06 05:37:35','2019-11-06 05:37:35',1);

/*Table structure for table `tbl_alatmusik` */

DROP TABLE IF EXISTS `tbl_alatmusik`;

CREATE TABLE `tbl_alatmusik` (
  `id_alatmusik` int(11) NOT NULL AUTO_INCREMENT,
  `merek` varchar(100) NOT NULL,
  `nama_alatmusik` varchar(100) NOT NULL,
  `jenis_alatmusik` varchar(100) NOT NULL,
  `produksi` varchar(50) NOT NULL,
  PRIMARY KEY (`id_alatmusik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_alatmusik` */

/*Table structure for table `tbl_detailtoko` */

DROP TABLE IF EXISTS `tbl_detailtoko`;

CREATE TABLE `tbl_detailtoko` (
  `id_detailtoko` int(11) NOT NULL AUTO_INCREMENT,
  `id_toko` int(11) NOT NULL,
  `id_alatmusik` int(11) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_detailtoko`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_detailtoko` */

insert  into `tbl_detailtoko`(`id_detailtoko`,`id_toko`,`id_alatmusik`,`harga`,`keterangan`) values (8,2,10,'2000000','<p>-</p>'),(9,2,5,'3000000','<p>-</p>'),(10,6,5,'3500000','<p>-</p>'),(11,6,7,'4000000','<p>-</p>'),(12,3,11,'500.000','<p>-</p>'),(13,3,11,'600000','<p>-</p>'),(14,3,11,'400000','<p>-</p>'),(15,3,11,'500000','<p>-</p>'),(16,3,11,'550000','<p>-</p>'),(17,7,12,'30000','<p>/jam</p>'),(18,8,12,'30000','<p>/jam</p>'),(19,9,12,'35000','<p>/jam</p>'),(20,12,12,'30000','<p>/jam</p>'),(21,13,11,'1000000','<p>test</p>');

/*Table structure for table `tbl_gambar` */

DROP TABLE IF EXISTS `tbl_gambar`;

CREATE TABLE `tbl_gambar` (
  `id_gambar` int(11) NOT NULL AUTO_INCREMENT,
  `id_detailtoko` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  PRIMARY KEY (`id_gambar`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_gambar` */

insert  into `tbl_gambar`(`id_gambar`,`id_detailtoko`,`gambar`) values (3,2,'1_1.png'),(4,2,'71IhWfkMi+L._SL1500_.jpg'),(5,1,'LPC-AWGH1-Finish-Shot.jpg'),(6,3,'Hertz-HZA-4010-Acoustic-Guitar-In-India.jpg'),(7,3,'YF325DGUITAR.jpg'),(8,4,'71IhWfkMi+L._SL1500_.jpg'),(9,5,'Hydrangeas.jpg'),(13,7,'ampli1.jpg'),(16,9,'ampli1.jpg'),(17,10,'ampli2.jpg'),(18,10,''),(19,11,'ampli5.jpg'),(20,11,''),(21,11,''),(22,12,'acoustic1.jpg'),(23,12,''),(24,13,'acoustic2.jpg'),(25,14,'acoustic3.jpg'),(26,14,''),(27,15,'acoustic5.jpg'),(28,15,''),(29,16,'acoustic7.jpg'),(30,16,''),(33,17,'studio2.jpg'),(34,18,'studio3.jpg'),(35,19,'studio4.jpg'),(36,20,'studio8.jpg'),(37,21,'Penguins.jpg');

/*Table structure for table `tbl_komentar` */

DROP TABLE IF EXISTS `tbl_komentar`;

CREATE TABLE `tbl_komentar` (
  `id_komentar` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `komentar` text NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_komentar`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_komentar` */

insert  into `tbl_komentar`(`id_komentar`,`nama`,`email`,`komentar`,`tgl`) values (1,'rizki','admin@sjp.com','fdhsh','2019-11-01 09:10:09');

/*Table structure for table `tbl_toko` */

DROP TABLE IF EXISTS `tbl_toko`;

CREATE TABLE `tbl_toko` (
  `id_toko` int(11) NOT NULL AUTO_INCREMENT,
  `nama_toko` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Lat` varchar(20) NOT NULL,
  `Lng` varchar(20) NOT NULL,
  `Pemilik` varchar(50) NOT NULL,
  `medsos` text,
  `buka` varchar(50) DEFAULT NULL,
  `tutup` varchar(50) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tipe` varchar(20) DEFAULT 'Toko',
  PRIMARY KEY (`id_toko`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_toko` */

insert  into `tbl_toko`(`id_toko`,`nama_toko`,`alamat`,`no_telp`,`email`,`Lat`,`Lng`,`Pemilik`,`medsos`,`buka`,`tutup`,`id_user`,`tipe`) values (15,'GOLYGUS STORE','<p>Jl. Urip Sumoharjo no.15 Kedaton Bandar Lampung</p>','082176614403','golygusstrore@gmail.com','-5.387300513997566','105.26206734289815','HAFIZ','<p><a class=\"www\" title=\"Golygus STORE\" href=\"http://www.instagram.com/golygusstore\" target=\"_blank\" rel=\"nofollow noopener\">golygusstore</a></p>','10.00','21.00',0,'Toko'),(16,'Otsky Store','<p>Jl.Z.A Pagar Alam no.59</p>','082181714441','OtskyStore@gmail.com','-5.380911781633231','105.25513086089359','KARYAWAN','<p>otskystore</p>','9.20','22.30',0,''),(17,'The Don House','<p>Jl. Perintis Kemerdekaan No.1, Kota Baru, Tj. Karang Tim., Kota Bandar Lampung, Lampung 35121, Ko','081273005557','thedonshouse@gmail.com','-5.4184349423303875','105.26976610351835','Yocky Yolanda','<div class=\"TbwUpd\"><cite class=\"iUh30 bc\">thedonshouse</cite></div>\r\n<p>&nbsp;</p>','09.30','22.00',0,''),(18,'ORAQLE STROE','<p>Jl. ZA. Pagar Alam No.12E, Gedong Meneng, Kec. Rajabasa, Kota Bandar Lampung, Lampung 35145</p>','(0721) 7721989','oraqle@gmail.com','-5.375819283368367','105.24803255039592','Marcho Renaldi','<div class=\"TbwUpd\"><cite class=\"iUh30 bc\">oraqle</cite></div>\r\n<p>&nbsp;</p>','08.30','21.00',0,'');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `level` varchar(20) DEFAULT 'User',
  `foto` text,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id_user`,`nama`,`password`,`username`,`level`,`foto`) values (8,'admin','202cb962ac59075b964b07152d234b70','admin','Admin','a.jpg');

/*Table structure for table `vw_detail` */

DROP TABLE IF EXISTS `vw_detail`;

/*!50001 DROP VIEW IF EXISTS `vw_detail` */;
/*!50001 DROP TABLE IF EXISTS `vw_detail` */;

/*!50001 CREATE TABLE  `vw_detail`(
 `id_detailtoko` int(11) ,
 `id_toko` int(11) ,
 `nama_toko` varchar(100) ,
 `id_alatmusik` int(11) ,
 `nama_alatmusik` varchar(100) ,
 `merek` varchar(100) ,
 `jenis_alatmusik` varchar(100) ,
 `produksi` varchar(50) ,
 `harga` varchar(50) ,
 `keterangan` text 
)*/;

/*View structure for view vw_detail */

/*!50001 DROP TABLE IF EXISTS `vw_detail` */;
/*!50001 DROP VIEW IF EXISTS `vw_detail` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_detail` AS (select `tbl_detailtoko`.`id_detailtoko` AS `id_detailtoko`,`tbl_detailtoko`.`id_toko` AS `id_toko`,`tbl_toko`.`nama_toko` AS `nama_toko`,`tbl_detailtoko`.`id_alatmusik` AS `id_alatmusik`,`tbl_alatmusik`.`nama_alatmusik` AS `nama_alatmusik`,`tbl_alatmusik`.`merek` AS `merek`,`tbl_alatmusik`.`jenis_alatmusik` AS `jenis_alatmusik`,`tbl_alatmusik`.`produksi` AS `produksi`,`tbl_detailtoko`.`harga` AS `harga`,`tbl_detailtoko`.`keterangan` AS `keterangan` from ((`tbl_detailtoko` join `tbl_toko` on((`tbl_detailtoko`.`id_toko` = `tbl_toko`.`id_toko`))) join `tbl_alatmusik` on((`tbl_detailtoko`.`id_alatmusik` = `tbl_alatmusik`.`id_alatmusik`)))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
