/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.7.33 : Database - tracer
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tracer` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `tracer`;

/*Table structure for table `daftars` */

DROP TABLE IF EXISTS `daftars`;

CREATE TABLE `daftars` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `no_rm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pasien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tgl_daftar` date NOT NULL,
  `poli` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `daftars` */

insert  into `daftars`(`id`,`no_rm`,`nama_pasien`,`tgl_lahir`,`tgl_daftar`,`poli`,`user`,`created_at`,`updated_at`) values (1,'000001','Zulfiqar Tamin','1985-08-14','2022-07-08',NULL,'1','2022-07-08 14:32:23','2022-07-08 14:32:25'),(2,'000001','Pasien Test','1990-07-01','2022-07-08',NULL,'1','2022-07-08 08:18:44','2022-07-08 08:18:44'),(3,'000001','Pasien Test','2022-07-01','2022-07-08',NULL,'1','2022-07-08 09:20:15','2022-07-08 09:20:15'),(4,'000001','Pasien Test','2022-07-01','2022-07-08',NULL,'1','2022-07-08 09:21:33','2022-07-08 09:21:33'),(5,'000001','Pasien Test','2022-07-01','2022-07-08',NULL,'1','2022-07-08 09:22:36','2022-07-08 09:22:36'),(6,'000001','Pasien Test','2022-07-01','2022-07-08',NULL,'1','2022-07-08 09:27:14','2022-07-08 09:27:14'),(7,'0000002','Rizky','2000-08-01','2022-07-08',NULL,'1','2022-07-08 09:36:47','2022-07-08 09:36:47'),(8,'000001','Pasien Test','1985-08-14','2022-07-11',NULL,'1','2022-07-11 02:20:48','2022-07-11 02:20:48'),(9,'000001','Pasien Test','1985-08-14','2022-07-11',NULL,'1','2022-07-11 02:23:28','2022-07-11 02:23:28'),(10,'000001','Pasien Test','1985-08-14','2022-07-11',NULL,'1','2022-07-11 02:25:37','2022-07-11 02:25:37'),(11,'000001','Pasien Test','1985-08-14','2022-07-11',NULL,'1','2022-07-11 02:26:31','2022-07-11 02:26:31'),(12,'000001','Pasien Test','2000-08-19','2022-07-11',NULL,'1','2022-07-11 02:27:28','2022-07-11 02:27:28'),(13,'000001','Pasien Test','2000-08-08','2022-07-11',NULL,'1','2022-07-11 02:34:13','2022-07-11 02:34:13'),(14,'000001','Pasien Test','2000-01-08','2022-07-11','Poli KIA','1','2022-07-11 02:41:33','2022-07-11 02:41:33'),(15,'000002','Nama Test Saja','2000-07-12','2022-07-12','Poli KIA','1','2022-07-12 07:45:47','2022-07-12 07:45:47'),(16,'000001','Pasien Test','2000-07-13','2022-07-12','Poli KIA','1','2022-07-12 14:43:48','2022-07-12 14:43:48'),(17,'000003','Iko Ha','2000-07-13','2022-07-12','Poli Gigi','1','2022-07-12 14:45:55','2022-07-12 14:45:55'),(18,'000001','Pasien Test','2000-07-18','2022-07-18','Poli Umum','1','2022-07-18 14:28:38','2022-07-18 14:28:38'),(19,'0000004','test pasien ini','2022-07-29','2022-07-29','Poli Umum','1','2022-07-29 08:01:52','2022-07-29 08:01:52'),(20,'0000004','test pasien ini','2022-07-28','2022-07-29','Poli Umum','1','2022-07-29 08:03:35','2022-07-29 08:03:35'),(21,'0000004','test pasien ini','2022-07-31','2022-07-29','Poli KIA','1','2022-07-29 08:06:56','2022-07-29 08:06:56'),(22,'0000001','IMEL','2000-07-30','2022-07-30','Poli Umum','1','2022-07-30 04:41:58','2022-07-30 04:41:58'),(23,'000085','syarial','1997-12-05','2022-07-30','Poli KIA','1','2022-07-30 05:10:25','2022-07-30 05:10:25'),(24,'0000004','Zulfiqar','2022-07-30','2022-07-30','Poli Umum','1','2022-07-30 05:15:23','2022-07-30 05:15:23'),(25,'000001','Zulfiqar Tamin','1985-08-14','2022-08-02','Poli Umum','1','2022-08-02 14:22:36','2022-08-02 14:22:36');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2019_12_14_000001_create_personal_access_tokens_table',1),(2,'2022_02_11_040657_create_tb_user_table',1),(3,'2022_07_08_063847_create_daftars_table',2);

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `user_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `tb_user_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_user` */

insert  into `tb_user`(`user_id`,`name`,`username`,`password`,`created_at`,`updated_at`) values (1,'Fiqar Tamin','tamin','$2y$10$MN0ZLvNNo87JwoIzA/5t3.gazl.o8f6yu29H5LdOEzsUEWOqDSCOu','2022-07-08 04:55:45','2022-07-08 04:55:45');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
