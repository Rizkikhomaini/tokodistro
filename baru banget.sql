/*
SQLyog Ultimate - MySQL GUI v8.22 
MySQL - 5.5.5-10.1.13-MariaDB : Database - sigmusik
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

/*Table structure for table `tbl_alatmusik` */

DROP TABLE IF EXISTS `tbl_alatmusik`;

CREATE TABLE `tbl_alatmusik` (
  `id_alatmusik` int(11) NOT NULL AUTO_INCREMENT,
  `merek` varchar(100) NOT NULL,
  `nama_alatmusik` varchar(100) NOT NULL,
  `jenis_alatmusik` varchar(100) NOT NULL,
  `produksi` varchar(50) NOT NULL,
  PRIMARY KEY (`id_alatmusik`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_alatmusik` */

insert  into `tbl_alatmusik`(`id_alatmusik`,`merek`,`nama_alatmusik`,`jenis_alatmusik`,`produksi`) values (4,'Orange','Amplifier','Micro Terror 20W Hybrid','USA'),(5,'Orange','Amplifier','Dark Terror 15 watt ','USA'),(6,'Marshal','Amplifier','JCM 900','USA'),(7,'Marshal','Amplifier','Laney 6000','USA'),(8,'Marshal','Amplifier','Vintage C','USA'),(9,'Behringer','Amplifier','Pro','USA'),(10,'Behringer','Amplifier','Pro Black','USA'),(11,'Custom Artcoustic','guitar Acoustic','-','Bandar Lampung'),(12,'-','Studio','-','-');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_komentar` */

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_toko` */

insert  into `tbl_toko`(`id_toko`,`nama_toko`,`alamat`,`no_telp`,`email`,`Lat`,`Lng`,`Pemilik`,`medsos`,`buka`,`tutup`,`id_user`,`tipe`) values (2,'GM MUSIK','<p>JL. GAJAH MADA NO. 76 C, KOTA BARU, BANDAR LAMPUNG</p>','0813 1041 5106','GMMUSIKLAMPUNG940@GMAIL.COM','-5.415087384119311','105.266694018527','ANTON','','10.00','22.00',2,'Studio'),(3,'ARTCOUSTIC','<p>JL. WAY MESUJI NO. 9, PAHOMAN, BANDAR LAMPUNG</p>','0899 2893 448','ARTCOUSTIC@GMAIL.COM','-5.426492874622222','105.27131096044297','RENO ZEINICO','','09.30','21.00',3,'Recording'),(6,'RAMA SWARA','<p>JL. DR. HARUN 1, NO. 67, KOTA BARU, BANDAR LAMPUNG</p>','0721 251 652','R.SWARA@YMAIL.COM','-5.414655459926912','105.26588751965483','YUDHISTIRA TANSO','','11.00','22.00',4,'Toko'),(7,'BIAN STUDIO','<p>JL. JATI NO. 12, TANJUNG RAYA, BANDAR LAMPUNG&nbsp;</p>','0813 7979 7722','KUZ.FABIAN@GMAIL.COM','-5.422343049277258','105.27460189559577','KUS WIDHARSO','','10.00','22.00',NULL,'Toko'),(8,'MAESTRO MUSIC','<p>JL. DANAU TOBA, NO. 98, GUNUNG SULAH, BANDAR LAMPUNG</p>','0852 1889 5000','SAMSULMAESTRO75@GMAIL.COM','-5.391630629465972','105.2705508805202','SAMSUL','','10.00','22.00',5,'All'),(9,'SR STUDIO','<p>JL. DAKWAH, NO. 25, LABUHAN RATU, BANDAR LAMPUNG</p>','0813 6614 2731','SR.STUDIO57@GMAIL.COM','-5.375921317602748','105.25290565767818','ERWAN','','11.00','22.00',NULL,'Toko'),(10,'R.O.D MUSIC','<p>JL. PAGAR ALAM NO. 32, GUNUNG TERANG, BANDAR LAMPUNG</p>','0898 2266 347','ROD.76@GMAIL.COM','-5.392286839918541','105.22968688135165','DENI ','','10.00','22.00',NULL,'Toko'),(11,'ANDHIKA ENTERPRISE','<p>JL. URIP SUMOHARJO, GG. WARTAWAN. NO. 3A, GUNUNG SULAH, BANDAR LAMPUNG</p>','0813 6973 7370','DARIWIBOWO55@GMAIL.COM','-5.3907326997622205','105.27329927427854','DHARWATI','','13.00','22.30',NULL,'Toko'),(12,'DAVI STUDIO','<p>JL. KIMAJA GG. PERTAMA NO. 14, WAYHALIM, BANDAR LAMPUNG</p>','0857 8977 7843','STUDIOMUSIKDAVI@GMAIL.COM','-5.3853844511990845','105.2677014715714','RIKO','','10.00','22.00',NULL,'Toko'),(13,'new toko','<p>test</p>','085377504156','putra.libra00@gmail.com','-5.409478933522356','105.2600849009441','new toko','<p>fb</p>\r\n<p>ig</p>','09.00','17.00',6,'Studio');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id_user`,`nama`,`password`,`username`,`level`,`foto`) values (1,'admin','202cb962ac59075b964b07152d234b70','admin','Admin',NULL),(2,'GM Musik','202cb962ac59075b964b07152d234b70','gm','User','Penguins.jpg'),(3,'ARTCOUSTIC','202cb962ac59075b964b07152d234b70','ARTCOUSTIC','User','Hydrangeas.jpg'),(4,'RAMA SWARA','202cb962ac59075b964b07152d234b70','RAMA SWARA','User','Tulips.jpg'),(5,'MAESTRO MUSIC','202cb962ac59075b964b07152d234b70','MAESTRO MUSIC','User','Jellyfish.jpg'),(6,'new toko','202cb962ac59075b964b07152d234b70','new toko','User','Hydrangeas.jpg');

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
