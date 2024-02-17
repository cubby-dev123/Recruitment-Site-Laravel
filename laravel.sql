/*
SQLyog Professional v12.5.1 (64 bit)
MySQL - 10.4.28-MariaDB : Database - laravel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`laravel` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */;

USE `laravel`;

/*Table structure for table `degrees` */

DROP TABLE IF EXISTS `degrees`;

CREATE TABLE `degrees` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `degree` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `degrees` */

insert  into `degrees`(`id`,`degree`,`created_at`,`updated_at`) values 
(1,'自動車整備士1級','2024-01-18 15:59:59','2024-01-22 09:58:45'),
(2,'自動車整備士2級','2024-01-18 16:01:33','2024-01-22 09:58:52'),
(3,'自動車整備士3級','2024-01-18 16:01:38','2024-01-22 09:58:59'),
(6,'自動車検査員','2024-01-18 16:02:57','2024-01-22 09:59:06'),
(7,'危険物取扱者乙種4類','2024-01-18 16:03:03','2024-01-22 09:59:15'),
(11,'大型自動車免許（第一種）','2024-01-26 18:01:48','2024-01-26 18:01:48');

/*Table structure for table `jobs` */

DROP TABLE IF EXISTS `jobs`;

CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `job_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jobs` */

insert  into `jobs`(`id`,`job_type`,`created_at`,`updated_at`) values 
(1,'整備士','2024-01-18 14:58:43','2024-01-22 09:59:58'),
(2,'板金・塗装','2024-01-18 15:24:01','2024-01-22 10:00:04'),
(3,'サービスフロント','2024-01-18 15:24:08','2024-01-22 10:00:11'),
(4,'自動車検査員','2024-01-18 15:24:16','2024-01-22 09:57:27'),
(7,'営業・販売','2024-01-22 05:47:47','2024-01-22 10:00:34'),
(8,'受付','2024-01-22 05:47:53','2024-01-22 10:00:42'),
(9,'事務','2024-01-22 10:01:00','2024-01-22 10:01:00'),
(10,'回送','2024-01-22 10:01:14','2024-01-22 10:01:14'),
(11,'開発・製作・設計','2024-01-22 10:01:21','2024-01-22 10:01:21'),
(13,'その他','2024-01-26 18:00:14','2024-01-26 18:00:14');

/*Table structure for table `mains` */

DROP TABLE IF EXISTS `mains`;

CREATE TABLE `mains` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `c_name` varchar(255) NOT NULL,
  `c_address` varchar(255) NOT NULL,
  `c_member` varchar(255) NOT NULL,
  `c_phone` varchar(255) NOT NULL,
  `c_site` varchar(255) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `em_type` varchar(255) NOT NULL,
  `em_num` int(11) NOT NULL,
  `work_time` varchar(255) NOT NULL,
  `rest_time` int(11) NOT NULL,
  `pay_amount` varchar(255) NOT NULL,
  `rest_day` varchar(255) NOT NULL,
  `insurance` varchar(255) NOT NULL,
  `commuting_allowance` varchar(255) NOT NULL,
  `academic_history` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `other` varchar(255) NOT NULL,
  `t_message` varchar(255) DEFAULT NULL,
  `c_message` longtext NOT NULL,
  `img_1` varchar(255) DEFAULT NULL,
  `img_2` varchar(255) DEFAULT NULL,
  `img_3` varchar(255) DEFAULT NULL,
  `img_4` varchar(255) DEFAULT NULL,
  `img_5` varchar(255) DEFAULT NULL,
  `img_6` varchar(255) DEFAULT NULL,
  `img_7` varchar(255) DEFAULT NULL,
  `img_8` varchar(255) DEFAULT NULL,
  `img_9` varchar(255) DEFAULT NULL,
  `img_10` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mains` */

insert  into `mains`(`id`,`c_name`,`c_address`,`c_member`,`c_phone`,`c_site`,`job_type`,`em_type`,`em_num`,`work_time`,`rest_time`,`pay_amount`,`rest_day`,`insurance`,`commuting_allowance`,`academic_history`,`degree`,`other`,`t_message`,`c_message`,`img_1`,`img_2`,`img_3`,`img_4`,`img_5`,`img_6`,`img_7`,`img_8`,`img_9`,`img_10`,`created_at`,`updated_at`) values 
(14,'株式会社1','但馬 豊岡市','事業者1','111-1111-1111','https://company1.jp','整備士 板金・塗装 サービスフロント 自動車検査員 開発・製作・設計 その他','正社員以外',2,'8時30分 ～ 17時30分',30,'月給200000円 ～ 330000円','土 日','雇用保険 労災保険 社会保険','いいえ','不問','自動車整備士1級 自動車整備士3級 大型自動車免許（第一種）','その他1',NULL,'メッセージ1','http://localhost:8000/uploads/img/240129021816.jpg','http://localhost:8000/uploads/img/240129021820.jpg','http://localhost:8000/uploads/img/240129021824.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-01-29 01:56:40','2024-01-29 02:18:28'),
(15,'株式会社2','播磨 明石市','事業者2','222-2222-2222','https://company2.jp','サービスフロント 営業・販売 事務 開発・製作・設計 その他','正社員以外',5,'7時30分 ～ 16時30分',80,'月給150000円 ～ 200000円','土 日 祝日 (休日)','雇用保険 労災保険 社会保険','いいえ','大卒以上','自動車整備士2級 自動車整備士3級 自動車検査員 大型自動車免許（第一種）','その他2',NULL,'メッセージ2','http://localhost:8000/uploads/img/240129022253.jpg','http://localhost:8000/uploads/img/240129022256.jpg','http://localhost:8000/uploads/img/240129022259.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-01-29 02:23:02','2024-01-29 02:23:02'),
(16,'株式会社3','丹波 丹波市','事業者3','333-3333-3333','https://company3.jp','板金・塗装 サービスフロント 営業・販売 回送 その他','正社員',10,'8時00分 ～ 16時00分',40,'月給250000円 ～ 300000円','土 日 祝日 (休日)','雇用保険 労災保険 健康保険','あり','不問','自動車整備士2級 自動車整備士3級 自動車検査員 大型自動車免許（第一種）','その他3',NULL,'メッセージ3','http://localhost:8000/uploads/img/240129022535.jpg','http://localhost:8000/uploads/img/240129022537.jpg','http://localhost:8000/uploads/img/240129022539.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-01-29 02:25:43','2024-01-29 02:25:43'),
(17,'株式会社4','神戸 東灘区','事業者4','444-4444-4444','https://company4.jp','板金・塗装 サービスフロント 自動車検査員 受付 事務 回送 開発・製作・設計','正社員以外',6,'10時30分 ～ 18時30分',60,'月給220000円 ～ 300000円','日 祝日 (休日)','雇用保険 労災保険 健康保険 社会保険','いいえ','不問','自動車整備士2級 自動車検査員 大型自動車免許（第一種）','その他4',NULL,'メッセージ4','http://localhost:8000/uploads/img/240129030034.jpg','http://localhost:8000/uploads/img/240129030038.jpg','http://localhost:8000/uploads/img/240129030043.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-01-29 02:35:13','2024-01-29 03:00:45'),
(18,'株式会社5','阪神 尼崎市','事業者5','555-5555-5555','https://company5.jp','整備士 板金・塗装 自動車検査員 受付 開発・製作・設計 その他','正社員以外',5,'9時30分 ～ 17時30分',40,'月給150000円 ～ 180000円','日 祝日 (休日)','雇用保険 健康保険','いいえ','不問','自動車整備士2級 自動車整備士3級 自動車検査員 大型自動車免許（第一種）','その他5',NULL,'メッセージ5','http://localhost:8000/uploads/img/240129025938.jpg','http://localhost:8000/uploads/img/240129025940.jpg','http://localhost:8000/uploads/img/240129025948.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-01-29 02:37:42','2024-01-29 02:59:52'),
(19,'株式会社6','淡路 淡路市','事業者6','666-6666-6666','https://company6.jp','整備士 板金・塗装 営業・販売 その他','正社員以外',6,'8時30分 ～ 17時30分',80,'月給200000円 ～ 330000円','日 祝日 (休日)','労災保険 健康保険','いいえ','不問','自動車整備士2級 大型自動車免許（第一種）','その他6',NULL,'メッセージ6','http://localhost:8000/uploads/img/240129054029.jpg','http://localhost:8000/uploads/img/240129054035.jpg','http://localhost:8000/uploads/img/240129054037.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-01-29 02:43:28','2024-01-29 05:40:40');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_reset_tokens_table',1),
(3,'2014_10_12_100000_create_password_resets_table',1),
(4,'2019_08_19_000000_create_failed_jobs_table',1),
(5,'2019_12_14_000001_create_personal_access_tokens_table',1),
(6,'2024_01_15_180700_create_jobs_table',1),
(7,'2024_01_16_092548_create_cars_table',1),
(8,'2024_01_18_155300_create_degrees_table',2),
(9,'2024_01_18_203414_create__main_infomations_table',3),
(10,'2024_01_18_212353_create_mains_table',4);

/*Table structure for table `password_reset_tokens` */

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `c_name` char(50) DEFAULT NULL,
  `c_address` varchar(255) DEFAULT NULL,
  `c_member` char(30) DEFAULT NULL,
  `c_phone` char(30) DEFAULT NULL,
  `c_site` varchar(255) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`email`,`password`,`c_name`,`c_address`,`c_member`,`c_phone`,`c_site`,`role`,`created_at`,`updated_at`) values 
(1,'admin@gmail.com','$2y$10$rqom66jeUMC8jW9DUd96R.zkro1ulW127Xw.iPyCJY77JhIDATgWu',NULL,NULL,NULL,NULL,NULL,1,'2024-01-17 05:39:22','2024-01-17 05:39:27'),
(102,'fantastic.dev0106@gmail.com','$2y$12$8Fhlp8ZyTgU0ZOzxIiqiFOrE6HehIUZ1a6vbWUSDxkvVNU.JMKSye','株式会社1','但馬 豊岡市','事業者1','111-1111-1111','https://company1.jp',2,'2024-01-29 01:45:41','2024-01-29 01:45:41'),
(103,'b@gmail.com','$2y$12$f/TERbDXhXfpxPBwhNzV9eD9K8nUkjgsfBgcS5dmHAVynvU0Qdypu','株式会社2','播磨 明石市','事業者2','222-2222-2222','https://company2.jp',2,'2024-01-29 01:45:43','2024-01-29 01:45:43'),
(104,'c@gmail.com','$2y$12$xhQUNcJ5u8VmNw99BUjObe4AKSsfcbEaxLsfUmn1Vv0Imqxf6ORqS','株式会社3','丹波 丹波市','事業者3','333-3333-3333','https://company3.jp',2,'2024-01-29 01:45:44','2024-01-29 01:45:44'),
(105,'d@gmail.com','$2y$12$jlm.0MHn8.97i5k9Mr5nhewo2k3G3ODIwFzluqtQzc1aPXa4NC8v6','株式会社4','神戸 東灘区','事業者4','444-4444-4444','https://company4.jp',2,'2024-01-29 01:45:45','2024-01-29 01:45:45'),
(106,'e@gmail.com','$2y$12$xZExXZDPPsGbF/W1S971Ze30tmFb2nGLAPqvyjNLIOeshIwmI3Oea','株式会社5','阪神 尼崎市','事業者5','555-5555-5555','https://company5.jp',2,'2024-01-29 01:45:47','2024-01-29 01:45:47'),
(107,'f@gmail.com','$2y$12$pmTdb/3npb4MJS4pfmTMiuXH2.sT/fbrtuI/1ifQeGx4iS79IJKf.','株式会社6','淡路 淡路市','事業者6','666-6666-6666','https://company6.jp',2,'2024-01-29 01:45:49','2024-01-29 01:45:49');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
