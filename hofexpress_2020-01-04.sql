# ************************************************************
# Sequel Pro SQL dump
# Version 5438
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 8.0.18)
# Database: hofexpress
# Generation Time: 2020-01-04 18:07:15 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table delivery_types
# ------------------------------------------------------------

DROP TABLE IF EXISTS `delivery_types`;

CREATE TABLE `delivery_types` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `delivery_types` WRITE;
/*!40000 ALTER TABLE `delivery_types` DISABLE KEYS */;

INSERT INTO `delivery_types` (`id`, `name`, `description`, `deleted_at`, `created_at`, `updated_at`)
VALUES
	('149ef6b0-2630-11ea-8932-af7a21eb3d18','To My Location',NULL,NULL,'2019-12-24 09:30:53','2019-12-24 09:30:53'),
	('14b22e80-2630-11ea-81b2-f720d4a741ab','Pick Up From Store',NULL,NULL,'2019-12-24 09:30:53','2019-12-24 09:30:53'),
	('33f0b350-2630-11ea-ac9d-0182fa84c8c8','To My Location',NULL,NULL,'2019-12-24 09:31:45','2019-12-24 09:31:45'),
	('33f32010-2630-11ea-b91d-4f3b107a0b4d','Pick Up From Store',NULL,NULL,'2019-12-24 09:31:46','2019-12-24 09:31:46'),
	('85b04940-2630-11ea-a10a-9b287efdd239','To My Location',NULL,NULL,'2019-12-24 09:34:03','2019-12-24 09:34:03'),
	('85b4d450-2630-11ea-a756-316d5ff9c076','Pick Up From Store',NULL,NULL,'2019-12-24 09:34:03','2019-12-24 09:34:03'),
	('95d36520-2630-11ea-8a29-69a5579ca66f','To My Location',NULL,NULL,'2019-12-24 09:34:30','2019-12-24 09:34:30'),
	('95d776a0-2630-11ea-8c0e-2129585040a6','Pick Up From Store',NULL,NULL,'2019-12-24 09:34:30','2019-12-24 09:34:30');

/*!40000 ALTER TABLE `delivery_types` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table failed_jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table featured_restaurants
# ------------------------------------------------------------

DROP TABLE IF EXISTS `featured_restaurants`;

CREATE TABLE `featured_restaurants` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restaurant_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table food_order
# ------------------------------------------------------------

DROP TABLE IF EXISTS `food_order`;

CREATE TABLE `food_order` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `food_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table foods
# ------------------------------------------------------------

DROP TABLE IF EXISTS `foods`;

CREATE TABLE `foods` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restaurant_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'food.jpg',
  `price` double NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `tags` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `foods` WRITE;
/*!40000 ALTER TABLE `foods` DISABLE KEYS */;

INSERT INTO `foods` (`id`, `restaurant_id`, `menu_id`, `name`, `image`, `price`, `description`, `tags`, `deleted_at`, `created_at`, `updated_at`)
VALUES
	('164956a0-2ec9-11ea-9660-331d8dde5e85','35bf7370-2e39-11ea-b779-0f801903347e','c760c220-2e46-11ea-83f3-9945a2c61863','Check','34393801.jpg',20,'Check',NULL,NULL,'2020-01-04 08:06:18','2020-01-04 08:06:18'),
	('f6858140-2e51-11ea-a0c8-43260b302d10','35bf7370-2e39-11ea-b779-0f801903347e','d2e6fba0-2e46-11ea-8e7a-55a0384f0b72','error','39359986.jpg',2121,'21212',NULL,NULL,'2020-01-03 17:53:35','2020-01-03 17:53:35');

/*!40000 ALTER TABLE `foods` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table locations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `locations`;

CREATE TABLE `locations` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `houseNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;

INSERT INTO `locations` (`id`, `user_id`, `name`, `houseNumber`, `street`, `deleted_at`, `created_at`, `updated_at`)
VALUES
	('040ef8a0-264b-11ea-971c-559633eabd3d','85992e80-2649-11ea-95fd-1f9457fdcabf','Tss dsdes','Golf Hills','Golf Hills',NULL,'2019-12-24 12:43:42','2019-12-24 12:43:42'),
	('27670cc0-264b-11ea-86d3-b98773a8ad80','85992e80-2649-11ea-95fd-1f9457fdcabf','Tss dsdes','Golf Hills','Golf Hills',NULL,'2019-12-24 12:44:41','2019-12-24 12:44:41');

/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table menus
# ------------------------------------------------------------

DROP TABLE IF EXISTS `menus`;

CREATE TABLE `menus` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restaurant_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;

INSERT INTO `menus` (`id`, `name`, `restaurant_id`, `description`, `deleted_at`, `created_at`, `updated_at`)
VALUES
	('c760c220-2e46-11ea-83f3-9945a2c61863','Breakfast','35bf7370-2e39-11ea-b779-0f801903347e','sasdsdasd',NULL,'2020-01-03 16:33:31','2020-01-03 16:33:31'),
	('d2e6fba0-2e46-11ea-8e7a-55a0384f0b72','Frucstuck','35bf7370-2e39-11ea-b779-0f801903347e','Breakfast For champions',NULL,'2020-01-03 16:33:50','2020-01-03 16:33:50');

/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(63,'2014_10_12_000000_create_users_table',1),
	(64,'2014_10_12_100000_create_password_resets_table',1),
	(65,'2019_08_19_000000_create_failed_jobs_table',1),
	(66,'2019_11_05_172623_create_orders_table',1),
	(67,'2019_11_09_142901_create_restaurants_table',1),
	(68,'2019_11_09_143108_create_locations_table',1),
	(69,'2019_11_21_190024_create_settings_table',1),
	(70,'2019_11_21_192233_create_user_types_table',1),
	(71,'2019_11_22_113321_create_restaurant_types_table',1),
	(72,'2019_11_22_143139_add_restaturant_type_to_restaurants',1),
	(73,'2019_12_05_085244_add_restaurant_id_to_users',1),
	(74,'2019_12_06_134857_create_payment_types_table',1),
	(75,'2019_12_06_142758_create_menus_table',1),
	(76,'2019_12_06_143254_add_ownership_verified_to_users',1),
	(77,'2019_12_06_143406_add_verified_to_restaurant',1),
	(78,'2019_12_07_073345_create_profiles_table',1),
	(79,'2019_12_07_081004_create_riders_table',1),
	(80,'2019_12_07_170311_create_order_statuses_table',1),
	(81,'2019_12_20_161015_create_delivery_types_table',1),
	(82,'2019_12_20_161457_create_ratings_table',1),
	(83,'2019_12_20_162124_create_foods_table',1),
	(84,'2019_12_20_162218_create_preferences_table',1),
	(85,'2019_12_20_162742_create_supports_table',1),
	(86,'2019_12_20_163228_create_reservations_table',1),
	(87,'2019_12_20_163548_create_tags_table',1),
	(88,'2019_12_20_163725_create_featured_restaurants_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table order_statuses
# ------------------------------------------------------------

DROP TABLE IF EXISTS `order_statuses`;

CREATE TABLE `order_statuses` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `order_statuses` WRITE;
/*!40000 ALTER TABLE `order_statuses` DISABLE KEYS */;

INSERT INTO `order_statuses` (`id`, `name`, `description`, `deleted_at`, `created_at`, `updated_at`)
VALUES
	('14b4ea60-2630-11ea-8d60-150cb00310f6','new',NULL,NULL,'2019-12-24 09:30:53','2019-12-24 09:30:53'),
	('14b83320-2630-11ea-80d3-8de9a570abb1','preparing',NULL,NULL,'2019-12-24 09:30:53','2019-12-24 09:30:53'),
	('14b86370-2630-11ea-bd52-3f989511969e','on-the-way',NULL,NULL,'2019-12-24 09:30:53','2019-12-24 09:30:53'),
	('14b8bd20-2630-11ea-997d-cb335a71ec7b','delivered',NULL,NULL,'2019-12-24 09:30:53','2019-12-24 09:30:53'),
	('14b8e480-2630-11ea-961a-97bb212121ad','cancelled',NULL,NULL,'2019-12-24 09:30:53','2019-12-24 09:30:53'),
	('33f3a9a0-2630-11ea-ab73-d573844c96c3','new',NULL,NULL,'2019-12-24 09:31:46','2019-12-24 09:31:46'),
	('33f4d810-2630-11ea-a4f2-ff5e7f1e9c38','preparing',NULL,NULL,'2019-12-24 09:31:46','2019-12-24 09:31:46'),
	('33f554a0-2630-11ea-a227-316af76b619c','on-the-way',NULL,NULL,'2019-12-24 09:31:46','2019-12-24 09:31:46'),
	('33f79350-2630-11ea-aa63-5537cb3c8b5d','delivered',NULL,NULL,'2019-12-24 09:31:46','2019-12-24 09:31:46'),
	('33f7d290-2630-11ea-bd4a-af672d0a73f8','cancelled',NULL,NULL,'2019-12-24 09:31:46','2019-12-24 09:31:46'),
	('85b59fc0-2630-11ea-8687-a941004c45e4','new',NULL,NULL,'2019-12-24 09:34:03','2019-12-24 09:34:03'),
	('85b5db80-2630-11ea-8bb5-d92b09f4fca8','preparing',NULL,NULL,'2019-12-24 09:34:03','2019-12-24 09:34:03'),
	('85b60d70-2630-11ea-9266-7fe14bbd9eae','on-the-way',NULL,NULL,'2019-12-24 09:34:03','2019-12-24 09:34:03'),
	('85b68340-2630-11ea-b9f9-33875c93f4a1','delivered',NULL,NULL,'2019-12-24 09:34:03','2019-12-24 09:34:03'),
	('85b6c4e0-2630-11ea-bf65-5f05aaabc49b','cancelled',NULL,NULL,'2019-12-24 09:34:03','2019-12-24 09:34:03'),
	('95d8b9b0-2630-11ea-8b12-03136f2b37c5','new',NULL,NULL,'2019-12-24 09:34:30','2019-12-24 09:34:30'),
	('95d90fb0-2630-11ea-aaf7-6fb3bc9a03ff','preparing',NULL,NULL,'2019-12-24 09:34:30','2019-12-24 09:34:30'),
	('95d95400-2630-11ea-b944-8d8ac405e9fa','on-the-way',NULL,NULL,'2019-12-24 09:34:30','2019-12-24 09:34:30'),
	('95d9d940-2630-11ea-bc3a-fdf6236533f5','delivered',NULL,NULL,'2019-12-24 09:34:30','2019-12-24 09:34:30'),
	('95da04d0-2630-11ea-9d8e-3b16fd8111f2','cancelled',NULL,NULL,'2019-12-24 09:34:30','2019-12-24 09:34:30');

/*!40000 ALTER TABLE `order_statuses` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table orders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restaurant_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rider_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtotal` double NOT NULL DEFAULT '0',
  `delivery_fees` double NOT NULL DEFAULT '0',
  `total` double NOT NULL DEFAULT '0',
  `order_status_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table payment_types
# ------------------------------------------------------------

DROP TABLE IF EXISTS `payment_types`;

CREATE TABLE `payment_types` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `payment_types` WRITE;
/*!40000 ALTER TABLE `payment_types` DISABLE KEYS */;

INSERT INTO `payment_types` (`id`, `name`, `description`, `deleted_at`, `created_at`, `updated_at`)
VALUES
	('14b95100-2630-11ea-9e5e-0bd4ce19d68d','cash',NULL,NULL,'2019-12-24 09:30:53','2019-12-24 09:30:53'),
	('14bb1390-2630-11ea-9f50-435d5cc34318','bank transfer',NULL,NULL,'2019-12-24 09:30:53','2019-12-24 09:30:53'),
	('14bb5ae0-2630-11ea-9e1c-1170654b70f0','loyalty points',NULL,NULL,'2019-12-24 09:30:53','2019-12-24 09:30:53'),
	('33f83050-2630-11ea-85b8-03db1a13a4f1','cash',NULL,NULL,'2019-12-24 09:31:46','2019-12-24 09:31:46'),
	('33f8f870-2630-11ea-86c1-b32f55dd812d','bank transfer',NULL,NULL,'2019-12-24 09:31:46','2019-12-24 09:31:46'),
	('33f97a00-2630-11ea-b735-2703a0c5541c','loyalty points',NULL,NULL,'2019-12-24 09:31:46','2019-12-24 09:31:46'),
	('85b73c80-2630-11ea-b401-41484bc0d155','cash',NULL,NULL,'2019-12-24 09:34:03','2019-12-24 09:34:03'),
	('85b785a0-2630-11ea-9094-03f5f1b6395a','bank transfer',NULL,NULL,'2019-12-24 09:34:03','2019-12-24 09:34:03'),
	('85b7b810-2630-11ea-adb1-8d94dbfccba8','loyalty points',NULL,NULL,'2019-12-24 09:34:03','2019-12-24 09:34:03'),
	('95da7ca0-2630-11ea-bc73-fba353d4c751','cash',NULL,NULL,'2019-12-24 09:34:30','2019-12-24 09:34:30'),
	('95dab960-2630-11ea-8c09-2f92270d5fe9','bank transfer',NULL,NULL,'2019-12-24 09:34:30','2019-12-24 09:34:30'),
	('95daebf0-2630-11ea-b7f6-911c8c910851','loyalty points',NULL,NULL,'2019-12-24 09:34:30','2019-12-24 09:34:30');

/*!40000 ALTER TABLE `payment_types` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table preferences
# ------------------------------------------------------------

DROP TABLE IF EXISTS `preferences`;

CREATE TABLE `preferences` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restaurant_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weekends` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weekdays` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `holidays` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery` double DEFAULT NULL,
  `reservationsAllowed` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `preferences` WRITE;
/*!40000 ALTER TABLE `preferences` DISABLE KEYS */;

INSERT INTO `preferences` (`id`, `restaurant_id`, `weekends`, `weekdays`, `holidays`, `delivery`, `reservationsAllowed`, `deleted_at`, `created_at`, `updated_at`)
VALUES
	('d484e010-2e45-11ea-b53a-b771a553385f','35bf7370-2e39-11ea-b779-0f801903347e','08:00 - 19:00','08:00 - 19:00','08:00 - 19:00',0,'yes',NULL,'2020-01-03 16:26:44','2020-01-03 16:26:44');

/*!40000 ALTER TABLE `preferences` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table profiles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `profiles`;

CREATE TABLE `profiles` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date DEFAULT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;

INSERT INTO `profiles` (`id`, `phonenumber`, `gender`, `user_id`, `dob`, `occupation`, `avatar`, `deleted_at`, `created_at`, `updated_at`)
VALUES
	('040b07b0-264b-11ea-af0d-4d216b784c2b','0500262011',NULL,'85992e80-2649-11ea-95fd-1f9457fdcabf',NULL,'Carpenter',NULL,NULL,'2019-12-24 12:43:42','2019-12-24 12:43:42'),
	('27648010-264b-11ea-986f-43b55b40f007','0500262011',NULL,'85992e80-2649-11ea-95fd-1f9457fdcabf',NULL,'Carpenter',NULL,NULL,'2019-12-24 12:44:41','2019-12-24 12:44:41'),
	('35d62f70-2e39-11ea-8932-037b973c475a','0500262011',NULL,'35d3e990-2e39-11ea-8237-972df9eec3ee',NULL,NULL,NULL,NULL,'2020-01-03 14:56:23','2020-01-03 14:56:23'),
	('cdf4f630-2630-11ea-b925-3da746694f43','+1 (552) 414-5232',NULL,'cdf3c410-2630-11ea-a3a7-3136dd5c379d',NULL,NULL,NULL,NULL,'2019-12-24 09:36:04','2019-12-24 09:36:04');

/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ratings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ratings`;

CREATE TABLE `ratings` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restaurant_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table reservations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `reservations`;

CREATE TABLE `reservations` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restaurant_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_people` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table restaurant_types
# ------------------------------------------------------------

DROP TABLE IF EXISTS `restaurant_types`;

CREATE TABLE `restaurant_types` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `restaurant_types` WRITE;
/*!40000 ALTER TABLE `restaurant_types` DISABLE KEYS */;

INSERT INTO `restaurant_types` (`id`, `name`, `description`, `deleted_at`, `created_at`, `updated_at`)
VALUES
	('95db4330-2630-11ea-a994-bb886e8d268e','Indian',NULL,NULL,'2019-12-24 09:34:30','2019-12-24 09:34:30'),
	('95db99d0-2630-11ea-8f75-431fd8394c3d','Italian',NULL,NULL,'2019-12-24 09:34:30','2019-12-24 09:34:30'),
	('95dbe370-2630-11ea-a09c-adec2c920dcd','African',NULL,NULL,'2019-12-24 09:34:30','2019-12-24 09:34:30'),
	('95dd3a30-2630-11ea-b21b-17491a24b97c','Cafe',NULL,NULL,'2019-12-24 09:34:30','2019-12-24 09:34:30'),
	('95ddb100-2630-11ea-ad57-79eedfa7942d','Mexican',NULL,NULL,'2019-12-24 09:34:30','2019-12-24 09:34:30'),
	('95dde920-2630-11ea-bbf5-95628194c1ba','American',NULL,NULL,'2019-12-24 09:34:30','2019-12-24 09:34:30');

/*!40000 ALTER TABLE `restaurant_types` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table restaurants
# ------------------------------------------------------------

DROP TABLE IF EXISTS `restaurants`;

CREATE TABLE `restaurants` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'logo.png',
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'cover.png',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `restaurant_type_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verified` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT 'no',
  `completed` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `restaurants` WRITE;
/*!40000 ALTER TABLE `restaurants` DISABLE KEYS */;

INSERT INTO `restaurants` (`id`, `user_id`, `name`, `location`, `description`, `logo`, `cover_image`, `deleted_at`, `created_at`, `updated_at`, `restaurant_type_id`, `verified`, `completed`)
VALUES
	('35bf7370-2e39-11ea-b779-0f801903347e',NULL,'Halla Wall','Accra','Somwere','89259963.jpg','16329624.jpg',NULL,'2020-01-03 14:56:23','2020-01-03 15:48:41','95db99d0-2630-11ea-8f75-431fd8394c3d','yes','yes'),
	('cdda7670-2630-11ea-8407-6b0adc5c5200',NULL,'Cathleen Marks','Ducimus ipsam quisq','Itaque placeat enim','logo.png','cover.png',NULL,'2019-12-24 09:36:04','2020-01-03 14:26:50','95dbe370-2630-11ea-a09c-adec2c920dcd','yes','no');

/*!40000 ALTER TABLE `restaurants` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table riders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `riders`;

CREATE TABLE `riders` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motor` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `riders` WRITE;
/*!40000 ALTER TABLE `riders` DISABLE KEYS */;

INSERT INTO `riders` (`id`, `firstname`, `lastname`, `email`, `phonenumber`, `motor`, `student`, `license`, `mobile`, `deleted_at`, `created_at`, `updated_at`)
VALUES
	('1d12a530-2359-11ea-8332-6f0397d339d8','Justina','Gilmore','vafapajywa@mailinator.com','+1 (123) 401-3997',NULL,NULL,NULL,NULL,NULL,'2019-12-20 18:47:03','2019-12-20 18:47:03');

/*!40000 ALTER TABLE `riders` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table settings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sitename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `phoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table supports
# ------------------------------------------------------------

DROP TABLE IF EXISTS `supports`;

CREATE TABLE `supports` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restaurant_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table tags
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tags`;

CREATE TABLE `tags` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table user_types
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_types`;

CREATE TABLE `user_types` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `user_types` WRITE;
/*!40000 ALTER TABLE `user_types` DISABLE KEYS */;

INSERT INTO `user_types` (`id`, `name`, `description`, `deleted_at`, `created_at`, `updated_at`)
VALUES
	('95de59a0-2630-11ea-98c1-1148b276f9b6','Admin',NULL,NULL,'2019-12-24 09:34:30','2019-12-24 09:34:30'),
	('95de96b0-2630-11ea-af9a-f90b741ae730','Customer',NULL,NULL,'2019-12-24 09:34:30','2019-12-24 09:34:30'),
	('95dec9b0-2630-11ea-8df2-4921e37699d2','Manager',NULL,NULL,'2019-12-24 09:34:30','2019-12-24 09:34:30');

/*!40000 ALTER TABLE `user_types` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `user_type_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `restaurant_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ownership_verified` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT 'no',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `email_verified_at`, `user_type_id`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`, `restaurant_id`, `ownership_verified`)
VALUES
	('35d3e990-2e39-11ea-8237-972df9eec3ee','francis-opoku-amoako670','Francis','Opoku-Amoako','francis@gloappsgh.com',NULL,'95dec9b0-2630-11ea-8df2-4921e37699d2','$2y$10$UnRW07dweVMYeIDbyP6PA.yXW5Gow7uuLaUJsdBbMaSJi8re/FGiq',NULL,NULL,'2020-01-03 14:56:23','2020-01-03 14:56:23','35bf7370-2e39-11ea-b779-0f801903347e','no'),
	('85992e80-2649-11ea-95fd-1f9457fdcabf','travislykes','Travis','Lykes','hello@travislykes.com',NULL,'95de96b0-2630-11ea-af9a-f90b741ae730','$2y$10$zmhafuKeBAHiuMaF/uvz0e7lW7azZlHCqf2gmBcJrJp2cZ/bWEtg2',NULL,NULL,'2019-12-24 12:33:00','2019-12-24 12:33:00',NULL,'no'),
	('cdf3c410-2630-11ea-a3a7-3136dd5c379d','quemby-bean797','Quemby','Bean','navu@mailinator.com',NULL,'95dec9b0-2630-11ea-8df2-4921e37699d2','$2y$10$YfT5dd4hTiRIakasA3KADutRghkJE3wwGFi3.0Dm4J7hyUAul.kQq',NULL,NULL,'2019-12-24 09:36:04','2020-01-03 14:54:25','cdda7670-2630-11ea-8407-6b0adc5c5200','yes');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
