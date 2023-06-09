/*
SQLyog Professional v12.5.1 (64 bit)
MySQL - 5.7.33 : Database - gudang
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`gudang` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `gudang`;

/*Table structure for table `log_akses` */

DROP TABLE IF EXISTS `log_akses`;

CREATE TABLE `log_akses` (
  `id_log_akses` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) DEFAULT NULL,
  `waktu` varchar(255) DEFAULT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_log_akses`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `log_akses` */

insert  into `log_akses`(`id_log_akses`,`ip`,`waktu`,`id_pegawai`) values 
(1,'::1','2022-06-04 13:04',1),
(2,'::1','2022-06-04 13:05',1),
(3,'::1','2022-06-04 13:27',1);

/*Table structure for table `mst_pegawai` */

DROP TABLE IF EXISTS `mst_pegawai`;

CREATE TABLE `mst_pegawai` (
  `id_pegawai` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_pegawai` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `mst_pegawai` */

insert  into `mst_pegawai`(`id_pegawai`,`username`,`password`,`nama_pegawai`) values 
(1,'admin','123','Indra Ardiansyah');

/*Table structure for table `mst_site` */

DROP TABLE IF EXISTS `mst_site`;

CREATE TABLE `mst_site` (
  `id_site` varchar(255) NOT NULL,
  `nama_site` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_site`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mst_site` */

insert  into `mst_site`(`id_site`,`nama_site`) values 
('03BGR136','JL_RAYA_BARU_BGR'),
('03CBN171','CIHERANG'),
('03CBX028','BANJARWANGI_CIAWI_CBX_PL'),
('03CBX030','PASARBARU_LEUWILIANG_CBX_PL'),
('03CBX055','VETERAN_TAPOS_CBX_TB');

/*Table structure for table `trx_produk` */

DROP TABLE IF EXISTS `trx_produk`;

CREATE TABLE `trx_produk` (
  `kd_produk` varchar(255) NOT NULL,
  `id_site` varchar(255) DEFAULT NULL,
  `nm_produk` varchar(255) DEFAULT NULL,
  `uom` varchar(255) DEFAULT NULL,
  `qty` float DEFAULT NULL,
  `kg` float DEFAULT NULL,
  `barcode` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`kd_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `trx_produk` */

insert  into `trx_produk`(`kd_produk`,`id_site`,`nm_produk`,`uom`,`qty`,`kg`,`barcode`) values 
('BFL901009/1','03CBX030','Testing','pcs',8,36.77,'BR88278003');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
