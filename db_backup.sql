-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: laravel
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `agent_dealing_cities`
--

DROP TABLE IF EXISTS `agent_dealing_cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agent_dealing_cities` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `city_id` bigint(20) unsigned NOT NULL,
  `agent_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `agent_dealing_cities_city_id_foreign` (`city_id`),
  KEY `agent_dealing_cities_agent_id_foreign` (`agent_id`),
  CONSTRAINT `agent_dealing_cities_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id`) ON DELETE CASCADE,
  CONSTRAINT `agent_dealing_cities_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agent_dealing_cities`
--

LOCK TABLES `agent_dealing_cities` WRITE;
/*!40000 ALTER TABLE `agent_dealing_cities` DISABLE KEYS */;
INSERT INTO `agent_dealing_cities` VALUES (1,'2022-08-15 05:46:10','2022-08-15 05:46:10',2,2),(2,'2022-08-15 05:46:10','2022-08-15 05:46:10',6,2),(3,'2022-08-15 05:46:10','2022-08-15 05:46:10',7,2),(4,'2022-08-15 05:46:10','2022-08-15 05:46:10',13,2),(5,'2022-08-15 05:46:10','2022-08-15 05:46:10',14,2),(6,'2022-08-15 05:46:10','2022-08-15 05:46:10',15,2),(7,'2022-08-15 05:46:10','2022-08-15 05:46:10',19,2),(8,'2022-08-15 05:46:10','2022-08-15 05:46:10',20,2),(9,'2022-08-15 05:46:10','2022-08-15 05:46:10',25,2),(10,'2022-08-15 05:46:10','2022-08-15 05:46:10',27,2),(11,'2022-08-15 05:46:10','2022-08-15 05:46:10',28,2),(12,'2022-08-15 05:46:10','2022-08-15 05:46:10',31,2),(13,'2022-08-15 05:46:10','2022-08-15 05:46:10',33,2),(14,'2022-08-15 05:46:10','2022-08-15 05:46:10',35,2),(15,'2022-08-15 05:46:10','2022-08-15 05:46:10',40,2),(16,'2022-08-15 05:46:10','2022-08-15 05:46:10',41,2),(17,'2022-08-15 05:46:10','2022-08-15 05:46:10',42,2),(18,'2022-08-15 05:46:11','2022-08-15 05:46:11',46,2),(19,'2022-08-15 05:46:11','2022-08-15 05:46:11',49,2),(20,'2022-08-15 05:46:11','2022-08-15 05:46:11',50,2),(21,'2022-08-15 05:46:11','2022-08-15 05:46:11',51,2),(22,'2022-08-15 05:46:11','2022-08-15 05:46:11',54,2),(23,'2022-08-15 05:46:11','2022-08-15 05:46:11',55,2),(24,'2022-08-15 05:46:11','2022-08-15 05:46:11',59,2),(25,'2022-08-15 05:46:11','2022-08-15 05:46:11',62,2),(26,'2022-08-15 05:46:11','2022-08-15 05:46:11',64,2),(27,'2022-08-15 05:46:11','2022-08-15 05:46:11',76,2),(28,'2022-08-15 05:46:11','2022-08-15 05:46:11',77,2),(29,'2022-08-15 05:46:11','2022-08-15 05:46:11',79,2),(30,'2022-08-15 05:46:11','2022-08-15 05:46:11',81,2),(31,'2022-08-15 05:46:11','2022-08-15 05:46:11',83,2),(32,'2022-08-15 05:46:11','2022-08-15 05:46:11',84,2),(33,'2022-08-15 05:46:11','2022-08-15 05:46:11',86,2),(34,'2022-08-15 05:46:11','2022-08-15 05:46:11',91,2),(35,'2022-08-15 05:46:11','2022-08-15 05:46:11',92,2),(36,'2022-08-15 05:46:11','2022-08-15 05:46:11',95,2),(37,'2022-08-15 05:46:11','2022-08-15 05:46:11',97,2),(38,'2022-08-15 05:46:11','2022-08-15 05:46:11',98,2),(39,'2022-08-15 05:46:11','2022-08-15 05:46:11',102,2),(40,'2022-08-15 05:46:11','2022-08-15 05:46:11',103,2),(41,'2022-08-15 05:46:12','2022-08-15 05:46:12',106,2),(42,'2022-08-15 05:46:12','2022-08-15 05:46:12',107,2),(43,'2022-08-15 05:46:12','2022-08-15 05:46:12',108,2),(44,'2022-08-15 05:46:12','2022-08-15 05:46:12',110,2),(45,'2022-08-15 05:46:12','2022-08-15 05:46:12',113,2),(46,'2022-08-15 05:46:12','2022-08-15 05:46:12',114,2),(47,'2022-08-15 05:46:12','2022-08-15 05:46:12',117,2),(48,'2022-08-15 05:46:12','2022-08-15 05:46:12',119,2),(49,'2022-08-15 05:46:12','2022-08-15 05:46:12',122,2),(50,'2022-08-15 05:46:12','2022-08-15 05:46:12',123,2),(51,'2022-08-15 05:46:12','2022-08-15 05:46:12',125,2),(52,'2022-08-15 05:46:12','2022-08-15 05:46:12',126,2),(53,'2022-08-15 05:46:12','2022-08-15 05:46:12',127,2),(54,'2022-08-15 05:46:12','2022-08-15 05:46:12',128,2),(55,'2022-08-15 05:46:13','2022-08-15 05:46:13',134,2),(56,'2022-08-15 05:46:13','2022-08-15 05:46:13',135,2),(57,'2022-08-15 05:46:13','2022-08-15 05:46:13',138,2),(58,'2022-08-15 05:46:13','2022-08-15 05:46:13',140,2),(59,'2022-08-15 05:46:13','2022-08-15 05:46:13',141,2),(60,'2022-08-15 05:46:13','2022-08-15 05:46:13',145,2),(61,'2022-08-15 05:46:13','2022-08-15 05:46:13',150,2),(62,'2022-08-15 05:46:13','2022-08-15 05:46:13',152,2),(63,'2022-08-15 05:46:13','2022-08-15 05:46:13',153,2),(64,'2022-08-15 05:46:13','2022-08-15 05:46:13',156,2),(65,'2022-08-15 05:46:13','2022-08-15 05:46:13',158,2);
/*!40000 ALTER TABLE `agent_dealing_cities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `agent_documents`
--

DROP TABLE IF EXISTS `agent_documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agent_documents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `documents` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `agent_documents_agent_id_foreign` (`agent_id`),
  CONSTRAINT `agent_documents_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agent_documents`
--

LOCK TABLES `agent_documents` WRITE;
/*!40000 ALTER TABLE `agent_documents` DISABLE KEYS */;
INSERT INTO `agent_documents` VALUES (1,'1660568955.jpeg',1,'2022-08-15 08:09:15','2022-08-15 08:09:15');
/*!40000 ALTER TABLE `agent_documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `agents`
--

DROP TABLE IF EXISTS `agents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(252) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cell` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review_comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reviewed_by` bigint(20) unsigned DEFAULT NULL,
  `status` enum('unverified','applied','in-review','rejected','verified') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unverified',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `agents_user_id_foreign` (`user_id`),
  KEY `agents_reviewed_by_foreign` (`reviewed_by`),
  CONSTRAINT `agents_reviewed_by_foreign` FOREIGN KEY (`reviewed_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `agents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agents`
--

LOCK TABLES `agents` WRITE;
/*!40000 ALTER TABLE `agents` DISABLE KEYS */;
INSERT INTO `agents` VALUES (1,8,'Real Estate Tiger','lahore America Florida Japan England','ret@gmail.com','03094312025','https://cdn.logo.com/hotlink-ok/logo-social.png',NULL,NULL,'in-review','2022-08-15 04:29:04','2022-08-15 08:09:15'),(2,11,'Bert Jenkins','124 ravi park','fghfghgh3gf@gmsail.com','+1 (759) 365-89524','1660560369.jpeg',NULL,NULL,'unverified','2022-08-15 05:46:09','2022-08-15 05:46:09');
/*!40000 ALTER TABLE `agents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'lifestyle','2022-08-15 04:29:06','2022-08-15 04:29:06'),(2,'food','2022-08-15 04:29:06','2022-08-15 04:29:06'),(3,'fashion','2022-08-15 04:29:06','2022-08-15 04:29:06'),(4,'travel','2022-08-15 04:29:06','2022-08-15 04:29:06');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cities` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `country_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cities_country_id_foreign` (`country_id`),
  CONSTRAINT `cities_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cities`
--

LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` VALUES (1,'Karachi','2022-08-15 04:28:50','2022-08-15 04:28:50',162),(2,'Lahore','2022-08-15 04:28:50','2022-08-15 04:28:50',162),(3,'Faisalabad','2022-08-15 04:28:50','2022-08-15 04:28:50',162),(4,'Rawalpindi','2022-08-15 04:28:50','2022-08-15 04:28:50',162),(5,'Gujranwala','2022-08-15 04:28:50','2022-08-15 04:28:50',162),(6,'Peshawar','2022-08-15 04:28:50','2022-08-15 04:28:50',162),(7,'Multan','2022-08-15 04:28:50','2022-08-15 04:28:50',162),(8,'Saidu Sharif','2022-08-15 04:28:51','2022-08-15 04:28:51',162),(9,'Hyderabad City','2022-08-15 04:28:51','2022-08-15 04:28:51',162),(10,'Islamabad','2022-08-15 04:28:51','2022-08-15 04:28:51',162),(11,'Quetta','2022-08-15 04:28:51','2022-08-15 04:28:51',162),(12,'Bahawalpur','2022-08-15 04:28:51','2022-08-15 04:28:51',162),(13,'Sargodha','2022-08-15 04:28:51','2022-08-15 04:28:51',162),(14,'Sialkot City','2022-08-15 04:28:51','2022-08-15 04:28:51',162),(15,'Sukkur','2022-08-15 04:28:51','2022-08-15 04:28:51',162),(16,'Larkana','2022-08-15 04:28:51','2022-08-15 04:28:51',162),(17,'Chiniot','2022-08-15 04:28:51','2022-08-15 04:28:51',162),(18,'Shekhupura','2022-08-15 04:28:51','2022-08-15 04:28:51',162),(19,'Jhang City','2022-08-15 04:28:51','2022-08-15 04:28:51',162),(20,'Dera Ghazi Khan','2022-08-15 04:28:51','2022-08-15 04:28:51',162),(21,'Gujrat','2022-08-15 04:28:51','2022-08-15 04:28:51',162),(22,'Rahimyar Khan','2022-08-15 04:28:51','2022-08-15 04:28:51',162),(23,'Kasur','2022-08-15 04:28:51','2022-08-15 04:28:51',162),(24,'Mardan','2022-08-15 04:28:51','2022-08-15 04:28:51',162),(25,'Mingaora','2022-08-15 04:28:51','2022-08-15 04:28:51',162),(26,'Nawabshah','2022-08-15 04:28:51','2022-08-15 04:28:51',162),(27,'Sahiwal','2022-08-15 04:28:51','2022-08-15 04:28:51',162),(28,'Mirpur Khas','2022-08-15 04:28:52','2022-08-15 04:28:52',162),(29,'Okara','2022-08-15 04:28:52','2022-08-15 04:28:52',162),(30,'Mandi Burewala','2022-08-15 04:28:52','2022-08-15 04:28:52',162),(31,'Jacobabad','2022-08-15 04:28:52','2022-08-15 04:28:52',162),(32,'Saddiqabad','2022-08-15 04:28:52','2022-08-15 04:28:52',162),(33,'Kohat','2022-08-15 04:28:52','2022-08-15 04:28:52',162),(34,'Muridke','2022-08-15 04:28:52','2022-08-15 04:28:52',162),(35,'Muzaffargarh','2022-08-15 04:28:52','2022-08-15 04:28:52',162),(36,'Khanpur','2022-08-15 04:28:52','2022-08-15 04:28:52',162),(37,'Gojra','2022-08-15 04:28:53','2022-08-15 04:28:53',162),(38,'Mandi Bahauddin','2022-08-15 04:28:53','2022-08-15 04:28:53',162),(39,'Abbottabad','2022-08-15 04:28:53','2022-08-15 04:28:53',162),(40,'Turbat','2022-08-15 04:28:53','2022-08-15 04:28:53',162),(41,'Dadu','2022-08-15 04:28:53','2022-08-15 04:28:53',162),(42,'Bahawalnagar','2022-08-15 04:28:53','2022-08-15 04:28:53',162),(43,'Khuzdar','2022-08-15 04:28:53','2022-08-15 04:28:53',162),(44,'Pakpattan','2022-08-15 04:28:53','2022-08-15 04:28:53',162),(45,'Tando Allahyar','2022-08-15 04:28:53','2022-08-15 04:28:53',162),(46,'Ahmadpur East','2022-08-15 04:28:53','2022-08-15 04:28:53',162),(47,'Vihari','2022-08-15 04:28:53','2022-08-15 04:28:53',162),(48,'Jaranwala','2022-08-15 04:28:54','2022-08-15 04:28:54',162),(49,'New Mirpur','2022-08-15 04:28:54','2022-08-15 04:28:54',162),(50,'Kamalia','2022-08-15 04:28:54','2022-08-15 04:28:54',162),(51,'Kot Addu','2022-08-15 04:28:54','2022-08-15 04:28:54',162),(52,'Nowshera','2022-08-15 04:28:54','2022-08-15 04:28:54',162),(53,'Swabi','2022-08-15 04:28:54','2022-08-15 04:28:54',162),(54,'Khushab','2022-08-15 04:28:54','2022-08-15 04:28:54',162),(55,'Dera Ismail Khan','2022-08-15 04:28:54','2022-08-15 04:28:54',162),(56,'Chaman','2022-08-15 04:28:54','2022-08-15 04:28:54',162),(57,'Charsadda','2022-08-15 04:28:54','2022-08-15 04:28:54',162),(58,'Kandhkot','2022-08-15 04:28:54','2022-08-15 04:28:54',162),(59,'Chishtian','2022-08-15 04:28:54','2022-08-15 04:28:54',162),(60,'Hasilpur','2022-08-15 04:28:54','2022-08-15 04:28:54',162),(61,'Attock Khurd','2022-08-15 04:28:54','2022-08-15 04:28:54',162),(62,'Muzaffarabad','2022-08-15 04:28:54','2022-08-15 04:28:54',162),(63,'Mianwali','2022-08-15 04:28:54','2022-08-15 04:28:54',162),(64,'Jalalpur Jattan','2022-08-15 04:28:54','2022-08-15 04:28:54',162),(65,'Bhakkar','2022-08-15 04:28:54','2022-08-15 04:28:54',162),(66,'Zhob','2022-08-15 04:28:54','2022-08-15 04:28:54',162),(67,'Dipalpur','2022-08-15 04:28:55','2022-08-15 04:28:55',162),(68,'Kharian','2022-08-15 04:28:55','2022-08-15 04:28:55',162),(69,'Mian Channun','2022-08-15 04:28:55','2022-08-15 04:28:55',162),(70,'Bhalwal','2022-08-15 04:28:55','2022-08-15 04:28:55',162),(71,'Jamshoro','2022-08-15 04:28:55','2022-08-15 04:28:55',162),(72,'Pattoki','2022-08-15 04:28:55','2022-08-15 04:28:55',162),(73,'Harunabad','2022-08-15 04:28:55','2022-08-15 04:28:55',162),(74,'Kahror Pakka','2022-08-15 04:28:55','2022-08-15 04:28:55',162),(75,'Toba Tek Singh','2022-08-15 04:28:55','2022-08-15 04:28:55',162),(76,'Samundri','2022-08-15 04:28:55','2022-08-15 04:28:55',162),(77,'Shakargarh','2022-08-15 04:28:55','2022-08-15 04:28:55',162),(78,'Sambrial','2022-08-15 04:28:55','2022-08-15 04:28:55',162),(79,'Shujaabad','2022-08-15 04:28:55','2022-08-15 04:28:55',162),(80,'Hujra Shah Muqim','2022-08-15 04:28:55','2022-08-15 04:28:55',162),(81,'Kabirwala','2022-08-15 04:28:55','2022-08-15 04:28:55',162),(82,'Mansehra','2022-08-15 04:28:55','2022-08-15 04:28:55',162),(83,'Lala Musa','2022-08-15 04:28:55','2022-08-15 04:28:55',162),(84,'Chunian','2022-08-15 04:28:56','2022-08-15 04:28:56',162),(85,'Nankana Sahib','2022-08-15 04:28:56','2022-08-15 04:28:56',162),(86,'Bannu','2022-08-15 04:28:56','2022-08-15 04:28:56',162),(87,'Pasrur','2022-08-15 04:28:56','2022-08-15 04:28:56',162),(88,'Timargara','2022-08-15 04:28:56','2022-08-15 04:28:56',162),(89,'Parachinar','2022-08-15 04:28:56','2022-08-15 04:28:56',162),(90,'Chenab Nagar','2022-08-15 04:28:56','2022-08-15 04:28:56',162),(91,'Gwadar','2022-08-15 04:28:57','2022-08-15 04:28:57',162),(92,'Abdul Hakim','2022-08-15 04:28:57','2022-08-15 04:28:57',162),(93,'Hassan Abdal','2022-08-15 04:28:57','2022-08-15 04:28:57',162),(94,'Tank','2022-08-15 04:28:57','2022-08-15 04:28:57',162),(95,'Hangu','2022-08-15 04:28:57','2022-08-15 04:28:57',162),(96,'Risalpur Cantonment','2022-08-15 04:28:57','2022-08-15 04:28:57',162),(97,'Karak','2022-08-15 04:28:57','2022-08-15 04:28:57',162),(98,'Kundian','2022-08-15 04:28:57','2022-08-15 04:28:57',162),(99,'Umarkot','2022-08-15 04:28:57','2022-08-15 04:28:57',162),(100,'Chitral','2022-08-15 04:28:57','2022-08-15 04:28:57',162),(101,'Dainyor','2022-08-15 04:28:57','2022-08-15 04:28:57',162),(102,'Kulachi','2022-08-15 04:28:57','2022-08-15 04:28:57',162),(103,'Kalat','2022-08-15 04:28:57','2022-08-15 04:28:57',162),(104,'Kotli','2022-08-15 04:28:57','2022-08-15 04:28:57',162),(105,'Gilgit','2022-08-15 04:28:57','2022-08-15 04:28:57',162),(106,'Narowal','2022-08-15 04:28:57','2022-08-15 04:28:57',162),(107,'Khairpur Mirs','2022-08-15 04:28:57','2022-08-15 04:28:57',162),(108,'Khanewal','2022-08-15 04:28:57','2022-08-15 04:28:57',162),(109,'Jhelum','2022-08-15 04:28:58','2022-08-15 04:28:58',162),(110,'Haripur','2022-08-15 04:28:58','2022-08-15 04:28:58',162),(111,'Shikarpur','2022-08-15 04:28:58','2022-08-15 04:28:58',162),(112,'Rawala Kot','2022-08-15 04:28:58','2022-08-15 04:28:58',162),(113,'Hafizabad','2022-08-15 04:28:58','2022-08-15 04:28:58',162),(114,'Lodhran','2022-08-15 04:28:58','2022-08-15 04:28:58',162),(115,'Malakand','2022-08-15 04:28:58','2022-08-15 04:28:58',162),(116,'Attock City','2022-08-15 04:28:58','2022-08-15 04:28:58',162),(117,'Batgram','2022-08-15 04:28:58','2022-08-15 04:28:58',162),(118,'Matiari','2022-08-15 04:28:58','2022-08-15 04:28:58',162),(119,'Ghotki','2022-08-15 04:28:58','2022-08-15 04:28:58',162),(120,'Naushahro Firoz','2022-08-15 04:28:58','2022-08-15 04:28:58',162),(121,'Alpurai','2022-08-15 04:28:58','2022-08-15 04:28:58',162),(122,'Bagh','2022-08-15 04:28:58','2022-08-15 04:28:58',162),(123,'Daggar','2022-08-15 04:28:58','2022-08-15 04:28:58',162),(124,'Leiah','2022-08-15 04:28:58','2022-08-15 04:28:58',162),(125,'Tando Muhammad Khan','2022-08-15 04:28:58','2022-08-15 04:28:58',162),(126,'Chakwal','2022-08-15 04:28:58','2022-08-15 04:28:58',162),(127,'Badin','2022-08-15 04:28:59','2022-08-15 04:28:59',162),(128,'Lakki','2022-08-15 04:28:59','2022-08-15 04:28:59',162),(129,'Rajanpur','2022-08-15 04:28:59','2022-08-15 04:28:59',162),(130,'Dera Allahyar','2022-08-15 04:28:59','2022-08-15 04:28:59',162),(131,'Shahdad Kot','2022-08-15 04:28:59','2022-08-15 04:28:59',162),(132,'Pishin','2022-08-15 04:28:59','2022-08-15 04:28:59',162),(133,'Sanghar','2022-08-15 04:28:59','2022-08-15 04:28:59',162),(134,'Upper Dir','2022-08-15 04:28:59','2022-08-15 04:28:59',162),(135,'Thatta','2022-08-15 04:28:59','2022-08-15 04:28:59',162),(136,'Dera Murad Jamali','2022-08-15 04:28:59','2022-08-15 04:28:59',162),(137,'Kohlu','2022-08-15 04:28:59','2022-08-15 04:28:59',162),(138,'Mastung','2022-08-15 04:28:59','2022-08-15 04:28:59',162),(139,'Dasu','2022-08-15 04:28:59','2022-08-15 04:28:59',162),(140,'Athmuqam','2022-08-15 04:28:59','2022-08-15 04:28:59',162),(141,'Loralai','2022-08-15 04:28:59','2022-08-15 04:28:59',162),(142,'Barkhan','2022-08-15 04:29:00','2022-08-15 04:29:00',162),(143,'Musa Khel Bazar','2022-08-15 04:29:00','2022-08-15 04:29:00',162),(144,'Ziarat','2022-08-15 04:29:00','2022-08-15 04:29:00',162),(145,'Gandava','2022-08-15 04:29:00','2022-08-15 04:29:00',162),(146,'Sibi','2022-08-15 04:29:00','2022-08-15 04:29:00',162),(147,'Dera Bugti','2022-08-15 04:29:00','2022-08-15 04:29:00',162),(148,'Eidgah','2022-08-15 04:29:00','2022-08-15 04:29:00',162),(149,'Uthal','2022-08-15 04:29:01','2022-08-15 04:29:01',162),(150,'Khuzdar','2022-08-15 04:29:01','2022-08-15 04:29:01',162),(151,'Chilas','2022-08-15 04:29:01','2022-08-15 04:29:01',162),(152,'Panjgur','2022-08-15 04:29:01','2022-08-15 04:29:01',162),(153,'Gakuch','2022-08-15 04:29:01','2022-08-15 04:29:01',162),(154,'Qila Saifullah','2022-08-15 04:29:01','2022-08-15 04:29:01',162),(155,'Kharan','2022-08-15 04:29:01','2022-08-15 04:29:01',162),(156,'Aliabad','2022-08-15 04:29:01','2022-08-15 04:29:01',162),(157,'Awaran','2022-08-15 04:29:01','2022-08-15 04:29:01',162),(158,'Dalbandin','2022-08-15 04:29:01','2022-08-15 04:29:01',162);
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` bigint(20) unsigned NOT NULL,
  `reply_to` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_post_id_foreign` (`post_id`),
  CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,'Arturo Kessler','mittie66@example.com','Excepturi quis inventore quis similique et omnis dolores. Voluptatem fuga est sapiente sequi et eius minus. Aspernatur officia qui omnis enim quod a. Quas ut fugiat iusto perferendis ea pariatur quas.',1,NULL,'2022-08-15 04:29:09','2022-08-15 04:29:09'),(2,'Mr. Jerel Schinner DDS','wilkinson.nayeli@example.net','Consequatur placeat quo recusandae qui consequatur. Numquam quia corporis ipsum est recusandae totam ea. Nulla sit ut modi ut explicabo dolorem magnam. Fuga aspernatur quibusdam voluptatem aut.',1,NULL,'2022-08-15 04:29:09','2022-08-15 04:29:09'),(3,'Alverta Runolfsdottir','annalise70@example.org','Aut nobis vitae sequi quia. Laboriosam temporibus numquam animi ut et et. Unde voluptatibus omnis cumque reprehenderit culpa necessitatibus.',2,NULL,'2022-08-15 04:29:09','2022-08-15 04:29:09'),(4,'Gust O\'Hara','fkohler@example.com','Non voluptas recusandae autem alias minima qui. Ea cum molestiae ut et fugiat modi sapiente. Est ut autem eum. Molestiae distinctio nulla voluptatibus velit ex cupiditate voluptatem.',2,NULL,'2022-08-15 04:29:09','2022-08-15 04:29:09'),(5,'Dr. Shaniya Hettinger','larson.davion@example.com','Vero distinctio autem ducimus. Sed officiis excepturi veritatis fuga id iste. Laborum odio hic qui saepe omnis repellendus.',3,NULL,'2022-08-15 04:29:09','2022-08-15 04:29:09'),(6,'Lourdes Conn','tobin.kovacek@example.org','Ducimus consequatur asperiores deleniti adipisci fugiat ex in. Necessitatibus beatae ut est sint quo quae. Harum quaerat possimus quae expedita aut autem. Pariatur pariatur dolor veniam odit aspernatur est blanditiis enim.',3,NULL,'2022-08-15 04:29:09','2022-08-15 04:29:09'),(7,'Gerhard Fisher','jermain36@example.net','Aliquid provident voluptatem recusandae quidem omnis nam nulla voluptas. Unde consequatur eum adipisci quia. Vero ea quidem autem quos deleniti harum. Doloremque quas corporis et necessitatibus. Laborum ab eaque et.',4,NULL,'2022-08-15 04:29:09','2022-08-15 04:29:09'),(8,'Prof. Brisa Tromp DVM','stracke.berniece@example.net','Sint eaque qui magnam fugit et voluptatibus quod. Itaque ut itaque enim nobis. Sequi ut et quae natus. Fugit assumenda rerum voluptatum consequatur esse nulla modi harum.',4,NULL,'2022-08-15 04:29:09','2022-08-15 04:29:09'),(9,'Lia Thompson','dibbert.meghan@example.org','Voluptatibus magni nam culpa voluptas blanditiis repellendus et. Ipsa quos provident dolorem mollitia. Ut veniam ducimus id. Tempore velit nulla omnis laborum voluptatum et illum.',5,NULL,'2022-08-15 04:29:09','2022-08-15 04:29:09'),(10,'Breana Collins','hmorissette@example.net','Et sint sed odio vitae expedita. Id totam dolorum amet et iste id quia. Nulla laboriosam quisquam et accusantium.',5,NULL,'2022-08-15 04:29:09','2022-08-15 04:29:09'),(11,'Mrs. Vada Dicki Jr.','agnes38@example.net','Molestiae est dolor ipsa est. Praesentium et debitis non odit iusto vel. Qui sit dolores ea provident nihil.',6,NULL,'2022-08-15 04:29:10','2022-08-15 04:29:10'),(12,'Theodore Champlin','birdie25@example.com','Cum maiores fugit suscipit unde ut tempore odit dolore. Voluptatem quo et quos ea. Quibusdam optio sint eos est. Aut sed autem est accusamus nesciunt at voluptas.',6,NULL,'2022-08-15 04:29:10','2022-08-15 04:29:10'),(13,'Constance Strosin','velva76@example.org','Non et dolorum repellendus alias error qui. Consequatur quas voluptas corrupti nemo. Et quae dolores voluptas et alias eum qui est.',7,NULL,'2022-08-15 04:29:10','2022-08-15 04:29:10'),(14,'Prof. Annetta Turner I','little.casimer@example.com','Tenetur aut ab similique qui aut inventore. Sed vero nulla officiis. Minima minima ut quo quia. Iusto est debitis et est aliquam.',7,NULL,'2022-08-15 04:29:10','2022-08-15 04:29:10'),(15,'Derek Veum','bobby.schinner@example.com','Debitis quae praesentium iste est eos quae magnam. Illum dolore accusamus praesentium ratione delectus quia deleniti. Voluptas natus ipsa est laboriosam repellat.',8,NULL,'2022-08-15 04:29:10','2022-08-15 04:29:10'),(16,'Prof. Rasheed Parisian II','estel.rohan@example.com','Et sequi eveniet consequuntur molestias voluptates. Quis qui delectus voluptatibus dolores unde. Rem vel ut aut.',8,NULL,'2022-08-15 04:29:10','2022-08-15 04:29:10'),(17,'Kelton Wiza','conrad.gaylord@example.com','Tenetur neque modi excepturi cum. Debitis veritatis praesentium error.',9,NULL,'2022-08-15 04:29:10','2022-08-15 04:29:10'),(18,'Orin Hammes','hettinger.nikko@example.org','Et est dolore magnam. Enim consequatur voluptatem itaque natus adipisci est autem. Vel quae quo ipsum occaecati vitae sed.',9,NULL,'2022-08-15 04:29:10','2022-08-15 04:29:10');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `iso` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nicename` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso3` char(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=254 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'AF','AFGHANISTAN','Afghanistan','AFG',4,93,NULL,NULL),(2,'AL','ALBANIA','Albania','ALB',8,355,NULL,NULL),(3,'DZ','ALGERIA','Algeria','DZA',12,213,NULL,NULL),(4,'AS','AMERICAN SAMOA','American Samoa','ASM',16,1684,NULL,NULL),(5,'AD','ANDORRA','Andorra','AND',20,376,NULL,NULL),(6,'AO','ANGOLA','Angola','AGO',24,244,NULL,NULL),(7,'AI','ANGUILLA','Anguilla','AIA',660,1264,NULL,NULL),(8,'AQ','ANTARCTICA','Antarctica',NULL,NULL,0,NULL,NULL),(9,'AG','ANTIGUA AND BARBUDA','Antigua and Barbuda','ATG',28,1268,NULL,NULL),(10,'AR','ARGENTINA','Argentina','ARG',32,54,NULL,NULL),(11,'AM','ARMENIA','Armenia','ARM',51,374,NULL,NULL),(12,'AW','ARUBA','Aruba','ABW',533,297,NULL,NULL),(13,'AU','AUSTRALIA','Australia','AUS',36,61,NULL,NULL),(14,'AT','AUSTRIA','Austria','AUT',40,43,NULL,NULL),(15,'AZ','AZERBAIJAN','Azerbaijan','AZE',31,994,NULL,NULL),(16,'BS','BAHAMAS','Bahamas','BHS',44,1242,NULL,NULL),(17,'BH','BAHRAIN','Bahrain','BHR',48,973,NULL,NULL),(18,'BD','BANGLADESH','Bangladesh','BGD',50,880,NULL,NULL),(19,'BB','BARBADOS','Barbados','BRB',52,1246,NULL,NULL),(20,'BY','BELARUS','Belarus','BLR',112,375,NULL,NULL),(21,'BE','BELGIUM','Belgium','BEL',56,32,NULL,NULL),(22,'BZ','BELIZE','Belize','BLZ',84,501,NULL,NULL),(23,'BJ','BENIN','Benin','BEN',204,229,NULL,NULL),(24,'BM','BERMUDA','Bermuda','BMU',60,1441,NULL,NULL),(25,'BT','BHUTAN','Bhutan','BTN',64,975,NULL,NULL),(26,'BO','BOLIVIA','Bolivia','BOL',68,591,NULL,NULL),(27,'BA','BOSNIA AND HERZEGOVINA','Bosnia and Herzegovina','BIH',70,387,NULL,NULL),(28,'BW','BOTSWANA','Botswana','BWA',72,267,NULL,NULL),(29,'BV','BOUVET ISLAND','Bouvet Island',NULL,NULL,0,NULL,NULL),(30,'BR','BRAZIL','Brazil','BRA',76,55,NULL,NULL),(31,'IO','BRITISH INDIAN OCEAN TERRITORY','British Indian Ocean Territory',NULL,NULL,246,NULL,NULL),(32,'BN','BRUNEI DARUSSALAM','Brunei Darussalam','BRN',96,673,NULL,NULL),(33,'BG','BULGARIA','Bulgaria','BGR',100,359,NULL,NULL),(34,'BF','BURKINA FASO','Burkina Faso','BFA',854,226,NULL,NULL),(35,'BI','BURUNDI','Burundi','BDI',108,257,NULL,NULL),(36,'KH','CAMBODIA','Cambodia','KHM',116,855,NULL,NULL),(37,'CM','CAMEROON','Cameroon','CMR',120,237,NULL,NULL),(38,'CA','CANADA','Canada','CAN',124,1,NULL,NULL),(39,'CV','CAPE VERDE','Cape Verde','CPV',132,238,NULL,NULL),(40,'KY','CAYMAN ISLANDS','Cayman Islands','CYM',136,1345,NULL,NULL),(41,'CF','CENTRAL AFRICAN REPUBLIC','Central African Republic','CAF',140,236,NULL,NULL),(42,'TD','CHAD','Chad','TCD',148,235,NULL,NULL),(43,'CL','CHILE','Chile','CHL',152,56,NULL,NULL),(44,'CN','CHINA','China','CHN',156,86,NULL,NULL),(45,'CX','CHRISTMAS ISLAND','Christmas Island',NULL,NULL,61,NULL,NULL),(46,'CC','COCOS (KEELING) ISLANDS','Cocos (Keeling) Islands',NULL,NULL,672,NULL,NULL),(47,'CO','COLOMBIA','Colombia','COL',170,57,NULL,NULL),(48,'KM','COMOROS','Comoros','COM',174,269,NULL,NULL),(49,'CG','CONGO','Congo','COG',178,242,NULL,NULL),(50,'CD','CONGO, THE DEMOCRATIC REPUBLIC OF THE','Congo, the Democratic Republic of the','COD',180,242,NULL,NULL),(51,'CK','COOK ISLANDS','Cook Islands','COK',184,682,NULL,NULL),(52,'CR','COSTA RICA','Costa Rica','CRI',188,506,NULL,NULL),(53,'CI','COTE D\'IVOIRE','Cote D\'Ivoire','CIV',384,225,NULL,NULL),(54,'HR','CROATIA','Croatia','HRV',191,385,NULL,NULL),(55,'CU','CUBA','Cuba','CUB',192,53,NULL,NULL),(56,'CY','CYPRUS','Cyprus','CYP',196,357,NULL,NULL),(57,'CZ','CZECH REPUBLIC','Czech Republic','CZE',203,420,NULL,NULL),(58,'DK','DENMARK','Denmark','DNK',208,45,NULL,NULL),(59,'DJ','DJIBOUTI','Djibouti','DJI',262,253,NULL,NULL),(60,'DM','DOMINICA','Dominica','DMA',212,1767,NULL,NULL),(61,'DO','DOMINICAN REPUBLIC','Dominican Republic','DOM',214,1809,NULL,NULL),(62,'EC','ECUADOR','Ecuador','ECU',218,593,NULL,NULL),(63,'EG','EGYPT','Egypt','EGY',818,20,NULL,NULL),(64,'SV','EL SALVADOR','El Salvador','SLV',222,503,NULL,NULL),(65,'GQ','EQUATORIAL GUINEA','Equatorial Guinea','GNQ',226,240,NULL,NULL),(66,'ER','ERITREA','Eritrea','ERI',232,291,NULL,NULL),(67,'EE','ESTONIA','Estonia','EST',233,372,NULL,NULL),(68,'ET','ETHIOPIA','Ethiopia','ETH',231,251,NULL,NULL),(69,'FK','FALKLAND ISLANDS (MALVINAS)','Falkland Islands (Malvinas)','FLK',238,500,NULL,NULL),(70,'FO','FAROE ISLANDS','Faroe Islands','FRO',234,298,NULL,NULL),(71,'FJ','FIJI','Fiji','FJI',242,679,NULL,NULL),(72,'FI','FINLAND','Finland','FIN',246,358,NULL,NULL),(73,'FR','FRANCE','France','FRA',250,33,NULL,NULL),(74,'GF','FRENCH GUIANA','French Guiana','GUF',254,594,NULL,NULL),(75,'PF','FRENCH POLYNESIA','French Polynesia','PYF',258,689,NULL,NULL),(76,'TF','FRENCH SOUTHERN TERRITORIES','French Southern Territories',NULL,NULL,0,NULL,NULL),(77,'GA','GABON','Gabon','GAB',266,241,NULL,NULL),(78,'GM','GAMBIA','Gambia','GMB',270,220,NULL,NULL),(79,'GE','GEORGIA','Georgia','GEO',268,995,NULL,NULL),(80,'DE','GERMANY','Germany','DEU',276,49,NULL,NULL),(81,'GH','GHANA','Ghana','GHA',288,233,NULL,NULL),(82,'GI','GIBRALTAR','Gibraltar','GIB',292,350,NULL,NULL),(83,'GR','GREECE','Greece','GRC',300,30,NULL,NULL),(84,'GL','GREENLAND','Greenland','GRL',304,299,NULL,NULL),(85,'GD','GRENADA','Grenada','GRD',308,1473,NULL,NULL),(86,'GP','GUADELOUPE','Guadeloupe','GLP',312,590,NULL,NULL),(87,'GU','GUAM','Guam','GUM',316,1671,NULL,NULL),(88,'GT','GUATEMALA','Guatemala','GTM',320,502,NULL,NULL),(89,'GN','GUINEA','Guinea','GIN',324,224,NULL,NULL),(90,'GW','GUINEA-BISSAU','Guinea-Bissau','GNB',624,245,NULL,NULL),(91,'GY','GUYANA','Guyana','GUY',328,592,NULL,NULL),(92,'HT','HAITI','Haiti','HTI',332,509,NULL,NULL),(93,'HM','HEARD ISLAND AND MCDONALD ISLANDS','Heard Island and Mcdonald Islands',NULL,NULL,0,NULL,NULL),(94,'VA','HOLY SEE (VATICAN CITY STATE)','Holy See (Vatican City State)','VAT',336,39,NULL,NULL),(95,'HN','HONDURAS','Honduras','HND',340,504,NULL,NULL),(96,'HK','HONG KONG','Hong Kong','HKG',344,852,NULL,NULL),(97,'HU','HUNGARY','Hungary','HUN',348,36,NULL,NULL),(98,'IS','ICELAND','Iceland','ISL',352,354,NULL,NULL),(99,'IN','INDIA','India','IND',356,91,NULL,NULL),(100,'ID','INDONESIA','Indonesia','IDN',360,62,NULL,NULL),(101,'IR','IRAN, ISLAMIC REPUBLIC OF','Iran, Islamic Republic of','IRN',364,98,NULL,NULL),(102,'IQ','IRAQ','Iraq','IRQ',368,964,NULL,NULL),(103,'IE','IRELAND','Ireland','IRL',372,353,NULL,NULL),(104,'IL','ISRAEL','Israel','ISR',376,972,NULL,NULL),(105,'IT','ITALY','Italy','ITA',380,39,NULL,NULL),(106,'JM','JAMAICA','Jamaica','JAM',388,1876,NULL,NULL),(107,'JP','JAPAN','Japan','JPN',392,81,NULL,NULL),(108,'JO','JORDAN','Jordan','JOR',400,962,NULL,NULL),(109,'KZ','KAZAKHSTAN','Kazakhstan','KAZ',398,7,NULL,NULL),(110,'KE','KENYA','Kenya','KEN',404,254,NULL,NULL),(111,'KI','KIRIBATI','Kiribati','KIR',296,686,NULL,NULL),(112,'KP','KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF','Korea, Democratic People\'s Republic of','PRK',408,850,NULL,NULL),(113,'KR','KOREA, REPUBLIC OF','Korea, Republic of','KOR',410,82,NULL,NULL),(114,'KW','KUWAIT','Kuwait','KWT',414,965,NULL,NULL),(115,'KG','KYRGYZSTAN','Kyrgyzstan','KGZ',417,996,NULL,NULL),(116,'LA','LAO PEOPLE\'S DEMOCRATIC REPUBLIC','Lao People\'s Democratic Republic','LAO',418,856,NULL,NULL),(117,'LV','LATVIA','Latvia','LVA',428,371,NULL,NULL),(118,'LB','LEBANON','Lebanon','LBN',422,961,NULL,NULL),(119,'LS','LESOTHO','Lesotho','LSO',426,266,NULL,NULL),(120,'LR','LIBERIA','Liberia','LBR',430,231,NULL,NULL),(121,'LY','LIBYAN ARAB JAMAHIRIYA','Libyan Arab Jamahiriya','LBY',434,218,NULL,NULL),(122,'LI','LIECHTENSTEIN','Liechtenstein','LIE',438,423,NULL,NULL),(123,'LT','LITHUANIA','Lithuania','LTU',440,370,NULL,NULL),(124,'LU','LUXEMBOURG','Luxembourg','LUX',442,352,NULL,NULL),(125,'MO','MACAO','Macao','MAC',446,853,NULL,NULL),(126,'MK','MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF','Macedonia, the Former Yugoslav Republic of','MKD',807,389,NULL,NULL),(127,'MG','MADAGASCAR','Madagascar','MDG',450,261,NULL,NULL),(128,'MW','MALAWI','Malawi','MWI',454,265,NULL,NULL),(129,'MY','MALAYSIA','Malaysia','MYS',458,60,NULL,NULL),(130,'MV','MALDIVES','Maldives','MDV',462,960,NULL,NULL),(131,'ML','MALI','Mali','MLI',466,223,NULL,NULL),(132,'MT','MALTA','Malta','MLT',470,356,NULL,NULL),(133,'MH','MARSHALL ISLANDS','Marshall Islands','MHL',584,692,NULL,NULL),(134,'MQ','MARTINIQUE','Martinique','MTQ',474,596,NULL,NULL),(135,'MR','MAURITANIA','Mauritania','MRT',478,222,NULL,NULL),(136,'MU','MAURITIUS','Mauritius','MUS',480,230,NULL,NULL),(137,'YT','MAYOTTE','Mayotte',NULL,NULL,269,NULL,NULL),(138,'MX','MEXICO','Mexico','MEX',484,52,NULL,NULL),(139,'FM','MICRONESIA, FEDERATED STATES OF','Micronesia, Federated States of','FSM',583,691,NULL,NULL),(140,'MD','MOLDOVA, REPUBLIC OF','Moldova, Republic of','MDA',498,373,NULL,NULL),(141,'MC','MONACO','Monaco','MCO',492,377,NULL,NULL),(142,'MN','MONGOLIA','Mongolia','MNG',496,976,NULL,NULL),(143,'MS','MONTSERRAT','Montserrat','MSR',500,1664,NULL,NULL),(144,'MA','MOROCCO','Morocco','MAR',504,212,NULL,NULL),(145,'MZ','MOZAMBIQUE','Mozambique','MOZ',508,258,NULL,NULL),(146,'MM','MYANMAR','Myanmar','MMR',104,95,NULL,NULL),(147,'NA','NAMIBIA','Namibia','NAM',516,264,NULL,NULL),(148,'NR','NAURU','Nauru','NRU',520,674,NULL,NULL),(149,'NP','NEPAL','Nepal','NPL',524,977,NULL,NULL),(150,'NL','NETHERLANDS','Netherlands','NLD',528,31,NULL,NULL),(151,'AN','NETHERLANDS ANTILLES','Netherlands Antilles','ANT',530,599,NULL,NULL),(152,'NC','NEW CALEDONIA','New Caledonia','NCL',540,687,NULL,NULL),(153,'NZ','NEW ZEALAND','New Zealand','NZL',554,64,NULL,NULL),(154,'NI','NICARAGUA','Nicaragua','NIC',558,505,NULL,NULL),(155,'NE','NIGER','Niger','NER',562,227,NULL,NULL),(156,'NG','NIGERIA','Nigeria','NGA',566,234,NULL,NULL),(157,'NU','NIUE','Niue','NIU',570,683,NULL,NULL),(158,'NF','NORFOLK ISLAND','Norfolk Island','NFK',574,672,NULL,NULL),(159,'MP','NORTHERN MARIANA ISLANDS','Northern Mariana Islands','MNP',580,1670,NULL,NULL),(160,'NO','NORWAY','Norway','NOR',578,47,NULL,NULL),(161,'OM','OMAN','Oman','OMN',512,968,NULL,NULL),(162,'PK','PAKISTAN','Pakistan','PAK',586,92,NULL,NULL),(163,'PW','PALAU','Palau','PLW',585,680,NULL,NULL),(164,'PS','PALESTINIAN TERRITORY, OCCUPIED','Palestinian Territory, Occupied',NULL,NULL,970,NULL,NULL),(165,'PA','PANAMA','Panama','PAN',591,507,NULL,NULL),(166,'PG','PAPUA NEW GUINEA','Papua New Guinea','PNG',598,675,NULL,NULL),(167,'PY','PARAGUAY','Paraguay','PRY',600,595,NULL,NULL),(168,'PE','PERU','Peru','PER',604,51,NULL,NULL),(169,'PH','PHILIPPINES','Philippines','PHL',608,63,NULL,NULL),(170,'PN','PITCAIRN','Pitcairn','PCN',612,0,NULL,NULL),(171,'PL','POLAND','Poland','POL',616,48,NULL,NULL),(172,'PT','PORTUGAL','Portugal','PRT',620,351,NULL,NULL),(173,'PR','PUERTO RICO','Puerto Rico','PRI',630,1787,NULL,NULL),(174,'QA','QATAR','Qatar','QAT',634,974,NULL,NULL),(175,'RE','REUNION','Reunion','REU',638,262,NULL,NULL),(176,'RO','ROMANIA','Romania','ROM',642,40,NULL,NULL),(177,'RU','RUSSIAN FEDERATION','Russian Federation','RUS',643,70,NULL,NULL),(178,'RW','RWANDA','Rwanda','RWA',646,250,NULL,NULL),(179,'SH','SAINT HELENA','Saint Helena','SHN',654,290,NULL,NULL),(180,'KN','SAINT KITTS AND NEVIS','Saint Kitts and Nevis','KNA',659,1869,NULL,NULL),(181,'LC','SAINT LUCIA','Saint Lucia','LCA',662,1758,NULL,NULL),(182,'PM','SAINT PIERRE AND MIQUELON','Saint Pierre and Miquelon','SPM',666,508,NULL,NULL),(183,'VC','SAINT VINCENT AND THE GRENADINES','Saint Vincent and the Grenadines','VCT',670,1784,NULL,NULL),(184,'WS','SAMOA','Samoa','WSM',882,684,NULL,NULL),(185,'SM','SAN MARINO','San Marino','SMR',674,378,NULL,NULL),(186,'ST','SAO TOME AND PRINCIPE','Sao Tome and Principe','STP',678,239,NULL,NULL),(187,'SA','SAUDI ARABIA','Saudi Arabia','SAU',682,966,NULL,NULL),(188,'SN','SENEGAL','Senegal','SEN',686,221,NULL,NULL),(189,'CS','SERBIA AND MONTENEGRO','Serbia and Montenegro',NULL,NULL,381,NULL,NULL),(190,'SC','SEYCHELLES','Seychelles','SYC',690,248,NULL,NULL),(191,'SL','SIERRA LEONE','Sierra Leone','SLE',694,232,NULL,NULL),(192,'SG','SINGAPORE','Singapore','SGP',702,65,NULL,NULL),(193,'SK','SLOVAKIA','Slovakia','SVK',703,421,NULL,NULL),(194,'SI','SLOVENIA','Slovenia','SVN',705,386,NULL,NULL),(195,'SB','SOLOMON ISLANDS','Solomon Islands','SLB',90,677,NULL,NULL),(196,'SO','SOMALIA','Somalia','SOM',706,252,NULL,NULL),(197,'ZA','SOUTH AFRICA','South Africa','ZAF',710,27,NULL,NULL),(198,'GS','SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS','South Georgia and the South Sandwich Islands',NULL,NULL,0,NULL,NULL),(199,'ES','SPAIN','Spain','ESP',724,34,NULL,NULL),(200,'LK','SRI LANKA','Sri Lanka','LKA',144,94,NULL,NULL),(201,'SD','SUDAN','Sudan','SDN',736,249,NULL,NULL),(202,'SR','SURINAME','Suriname','SUR',740,597,NULL,NULL),(203,'SJ','SVALBARD AND JAN MAYEN','Svalbard and Jan Mayen','SJM',744,47,NULL,NULL),(204,'SZ','SWAZILAND','Swaziland','SWZ',748,268,NULL,NULL),(205,'SE','SWEDEN','Sweden','SWE',752,46,NULL,NULL),(206,'CH','SWITZERLAND','Switzerland','CHE',756,41,NULL,NULL),(207,'SY','SYRIAN ARAB REPUBLIC','Syrian Arab Republic','SYR',760,963,NULL,NULL),(208,'TW','TAIWAN, PROVINCE OF CHINA','Taiwan, Province of China','TWN',158,886,NULL,NULL),(209,'TJ','TAJIKISTAN','Tajikistan','TJK',762,992,NULL,NULL),(210,'TZ','TANZANIA, UNITED REPUBLIC OF','Tanzania, United Republic of','TZA',834,255,NULL,NULL),(211,'TH','THAILAND','Thailand','THA',764,66,NULL,NULL),(212,'TL','TIMOR-LESTE','Timor-Leste',NULL,NULL,670,NULL,NULL),(213,'TG','TOGO','Togo','TGO',768,228,NULL,NULL),(214,'TK','TOKELAU','Tokelau','TKL',772,690,NULL,NULL),(215,'TO','TONGA','Tonga','TON',776,676,NULL,NULL),(216,'TT','TRINIDAD AND TOBAGO','Trinidad and Tobago','TTO',780,1868,NULL,NULL),(217,'TN','TUNISIA','Tunisia','TUN',788,216,NULL,NULL),(218,'TR','TURKEY','Turkey','TUR',792,90,NULL,NULL),(219,'TM','TURKMENISTAN','Turkmenistan','TKM',795,7370,NULL,NULL),(220,'TC','TURKS AND CAICOS ISLANDS','Turks and Caicos Islands','TCA',796,1649,NULL,NULL),(221,'TV','TUVALU','Tuvalu','TUV',798,688,NULL,NULL),(222,'UG','UGANDA','Uganda','UGA',800,256,NULL,NULL),(223,'UA','UKRAINE','Ukraine','UKR',804,380,NULL,NULL),(224,'AE','UNITED ARAB EMIRATES','United Arab Emirates','ARE',784,971,NULL,NULL),(225,'GB','UNITED KINGDOM','United Kingdom','GBR',826,44,NULL,NULL),(226,'US','UNITED STATES','United States','USA',840,1,NULL,NULL),(227,'UM','UNITED STATES MINOR OUTLYING ISLANDS','United States Minor Outlying Islands',NULL,NULL,1,NULL,NULL),(228,'UY','URUGUAY','Uruguay','URY',858,598,NULL,NULL),(229,'UZ','UZBEKISTAN','Uzbekistan','UZB',860,998,NULL,NULL),(230,'VU','VANUATU','Vanuatu','VUT',548,678,NULL,NULL),(231,'VE','VENEZUELA','Venezuela','VEN',862,58,NULL,NULL),(232,'VN','VIET NAM','Viet Nam','VNM',704,84,NULL,NULL),(233,'VG','VIRGIN ISLANDS, BRITISH','Virgin Islands, British','VGB',92,1284,NULL,NULL),(234,'VI','VIRGIN ISLANDS, U.S.','Virgin Islands, U.s.','VIR',850,1340,NULL,NULL),(235,'WF','WALLIS AND FUTUNA','Wallis and Futuna','WLF',876,681,NULL,NULL),(236,'EH','WESTERN SAHARA','Western Sahara','ESH',732,212,NULL,NULL),(237,'YE','YEMEN','Yemen','YEM',887,967,NULL,NULL),(238,'ZM','ZAMBIA','Zambia','ZMB',894,260,NULL,NULL),(239,'ZW','ZIMBABWE','Zimbabwe','ZWE',716,263,NULL,NULL),(240,'RS','SERBIA','Serbia','SRB',688,381,NULL,NULL),(241,'AP','ASIA PACIFIC REGION','Asia / Pacific Region','0',0,0,NULL,NULL),(242,'ME','MONTENEGRO','Montenegro','MNE',499,382,NULL,NULL),(243,'AX','ALAND ISLANDS','Aland Islands','ALA',248,358,NULL,NULL),(244,'BQ','BONAIRE, SINT EUSTATIUS AND SABA','Bonaire, Sint Eustatius and Saba','BES',535,599,NULL,NULL),(245,'CW','CURACAO','Curacao','CUW',531,599,NULL,NULL),(246,'GG','GUERNSEY','Guernsey','GGY',831,44,NULL,NULL),(247,'IM','ISLE OF MAN','Isle of Man','IMN',833,44,NULL,NULL),(248,'JE','JERSEY','Jersey','JEY',832,44,NULL,NULL),(249,'XK','KOSOVO','Kosovo','---',0,381,NULL,NULL),(250,'BL','SAINT BARTHELEMY','Saint Barthelemy','BLM',652,590,NULL,NULL),(251,'MF','SAINT MARTIN','Saint Martin','MAF',663,590,NULL,NULL),(252,'SX','SINT MAARTEN','Sint Maarten','SXM',534,1,NULL,NULL),(253,'SS','SOUTH SUDAN','South Sudan','SSD',728,211,NULL,NULL);
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_history`
--

DROP TABLE IF EXISTS `login_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_history` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `login_history_user_id_foreign` (`user_id`),
  CONSTRAINT `login_history_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_history`
--

LOCK TABLES `login_history` WRITE;
/*!40000 ALTER TABLE `login_history` DISABLE KEYS */;
INSERT INTO `login_history` VALUES (1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36','2022-08-15 05:45:28',NULL,10),(2,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36','2022-08-15 05:46:13',NULL,11),(3,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36','2022-08-15 05:46:57',NULL,9),(4,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36','2022-08-15 07:34:55',NULL,9),(5,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36','2022-08-15 08:07:47',NULL,8),(6,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36','2022-08-15 08:10:14',NULL,8),(7,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36','2022-08-15 08:10:56',NULL,9),(8,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36','2022-08-15 09:42:27',NULL,9);
/*!40000 ALTER TABLE `login_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=298 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (271,'2014_10_12_000000_create_users_table',1),(272,'2014_10_12_100000_create_password_resets_table',1),(273,'2019_12_14_000001_create_personal_access_tokens_table',1),(274,'2022_06_03_031615_create_agents_table',1),(275,'2022_06_03_031701_create_property_listings',1),(276,'2022_06_03_031758_create_user_roles_table',1),(277,'2022_06_03_031918_create_agent_dealing_cities_table',1),(278,'2022_06_03_031945_create_cities_table',1),(279,'2022_06_03_032049_create_countries_table',1),(280,'2022_06_03_040948_add_contraints_to_users_table',1),(281,'2022_06_03_063314_add_constraints_to_property_listings_table',1),(282,'2022_06_03_065259_add_constraints_to_agent_dealing_cities_table',1),(283,'2022_06_03_070311_add_constraints_to_cities_table',1),(284,'2022_06_16_055458_create_login_history_table',1),(285,'2022_06_16_055638_add_constraints_to_login_history_table',1),(286,'2022_06_16_072627_add_constraints_to_agents_table',1),(287,'2022_06_29_040000_create_agent_documents_table',1),(288,'2022_06_29_040419_add_constraints_to_agent_documents_table',1),(289,'2022_08_03_050858_create_permission_tables',1),(290,'2022_08_04_214043_add__soft_delet_to_users_table',1),(291,'2022_08_09_141050_create_categories_table',1),(292,'2022_08_09_141234_create_tags_table',1),(293,'2022_08_09_141337_create_posts_table',1),(294,'2022_08_09_141427_create_post_tag_table',1),(295,'2022_08_09_141548_create_comments_table',1),(296,'2022_08_15_050345_create_property_images_table',1),(297,'2022_08_15_072158_add_constraints_to_property_images_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',1),(1,'App\\Models\\User',2),(1,'App\\Models\\User',3),(1,'App\\Models\\User',4),(1,'App\\Models\\User',5),(1,'App\\Models\\User',6),(1,'App\\Models\\User',7),(1,'App\\Models\\User',10),(2,'App\\Models\\User',8),(2,'App\\Models\\User',11),(3,'App\\Models\\User',9);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'role-list','web','2022-08-15 04:29:01','2022-08-15 04:29:01'),(2,'role-create','web','2022-08-15 04:29:02','2022-08-15 04:29:02'),(3,'role-edit','web','2022-08-15 04:29:02','2022-08-15 04:29:02'),(4,'role-delete','web','2022-08-15 04:29:02','2022-08-15 04:29:02'),(5,'property-list','web','2022-08-15 04:29:02','2022-08-15 04:29:02'),(6,'property-create','web','2022-08-15 04:29:02','2022-08-15 04:29:02'),(7,'property-edit','web','2022-08-15 04:29:02','2022-08-15 04:29:02'),(8,'property-delete','web','2022-08-15 04:29:02','2022-08-15 04:29:02');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_tag`
--

DROP TABLE IF EXISTS `post_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_tag` (
  `post_id` bigint(20) unsigned NOT NULL,
  `tag_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  KEY `post_tag_post_id_foreign` (`post_id`),
  KEY `post_tag_tag_name_foreign` (`tag_name`),
  CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  CONSTRAINT `post_tag_tag_name_foreign` FOREIGN KEY (`tag_name`) REFERENCES `tags` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_tag`
--

LOCK TABLES `post_tag` WRITE;
/*!40000 ALTER TABLE `post_tag` DISABLE KEYS */;
INSERT INTO `post_tag` VALUES (1,'tech'),(2,'tech'),(3,'tech'),(4,'tech'),(5,'tech'),(6,'tech'),(7,'tech'),(8,'tech'),(9,'tech');
/*!40000 ALTER TABLE `post_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('published','draft') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'draft',
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `reading_time` int(11) NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_user_id_foreign` (`user_id`),
  CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'/uploads/productivity-banner.jpg','How To Boost Productivity As A Developer','Admin','food','Being a developer involves harmoniously combining various factors and technologies on a day-to-day basis in order to get work done. In this article I share 5 tips on how you can boost your workflow productivity.','how-to-boost-productivity-as-a-developer','draft','<div class=\"blog-post\">\r\n	<header>\r\n		<h2 class=\"heading-2\">\r\n			5 Ways To Boost Productivity As A Developer\r\n		</h2>\r\n	</header>\r\n\r\n	<p class=\"leader\">\r\n		Here\'s a medley of 5 methods you as a developer can use to boost your productivity\r\n	</p>\r\n\r\n	<div class=\"blockquote\">\r\n		<span class=\"content\">\r\n			Being a developer involves harmoniously combining various factors and technologies on a day-to-day basis in order to get work done. In this article I share 5 tips on how you can boost your workflow productivity\r\n		</span>\r\n	</div>\r\n\r\n	<h3 class=\"heading-3\">\r\n		What is Productivity?\r\n	</h3>\r\n\r\n	<p>\r\n		Productivity is the efficiency of production of goods or services expressed by some measure. Measurements of productivity are often expressed as a ratio of an aggregate output to a single input or an aggregate input used in a production process.\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		1. Regular Communication\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-comm.jpg\" />\r\n	</p>\r\n\r\n	<p>\r\n		As a developer, I know that we prefer the company of computers rather than people (at least that\'s the case for me). In the past, Whenever I\'m working on a project, I usually secluded myself up until the project I was working on was production-ready (or until I got to the testing phase). This wasn\'t a good habit and as you can imagine, I got several complaints on the issue from my clients.\r\n	</p>\r\n\r\n	<p>\r\n		Good communication is as essential skill to possess as a developer and you should definitely work towards regular communication with your clients and those around you. \r\n	</p>\r\n\r\n\r\n	<h3 class=\"heading-3\">\r\n		2. Automate Repetitive Tasks\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-automation.jpg\" />\r\n	</p>\r\n\r\n	<div class=\"blockquote\">\r\n		<span class=\"content\">\r\n			If you perform an operation more than 3 times, that\'s probably a good sign that you need to automate it.\r\n		</span>\r\n		<span class=\"author\">\r\n			~ Anonymous\r\n		</span>\r\n	</div>\r\n\r\n	<p>\r\n		Task automation is one of the perks of being a programmer. That abilitty ability to write a script that will automate a task for you is really a life hack.\r\n	</p>\r\n\r\n	<p>\r\n		Whenever you\'re performing an operation which you normally do on a regular basis, it really helps to take sometime out of your day to write a script that can enable you complete that task much easier.\r\n	</p>\r\n\r\n	<p>\r\n		My personal favourite kind of scripts are project scaffolding scripts that can give you a starting template on a project based on particular tech stack. You could also check open source repos on <a href=\"https://github.com/topics/task-automation\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">GitHub</a> for scripts that already automate the task you\'re working on.\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		3. Take Regular Breaks\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-relaxation.jpg\" />\r\n	</p>\r\n\r\n	<div class=\"blockquote\">\r\n		<span class=\"content\">\r\n			Productivity per hour decline sharply when a person works more than 50 hours a week.\r\n		</span>\r\n		<span class=\"author\">\r\n			~ John Pencavel\r\n		</span>\r\n	</div>\r\n\r\n	<p>\r\n		As humans, we are designed to operate in blocks of time. Ideally, we are supposed to work and take regular breaks in-between. But what do we see today? In recent times, I see more people pushing forward endlessly without taking breaks.\r\n	</p>\r\n\r\n	<p>\r\n		To be honest, I used to be guilty of this in the past and I probably am still guilty about this up till this day. In the past I used to work endlessly without taking breaks and I often got frustrated when I ran into bugs I couldn\'t solve.\r\n	</p>\r\n\r\n	<p>\r\n		I switched my workflow to a dynamic pattern which works for me:\r\n	</p>\r\n\r\n	<p>\r\n		<ul>\r\n			<li>\r\n				Work until you get tired or start to plateau <i class=\"fa-regular fa-face-exhaling\"></i>.\r\n			</li>\r\n			<li>\r\n				When you do get tired or plateau, take a break and completely detach from work <i class=\"fa-solid fa-couch\"></i>.\r\n			</li>\r\n			<li>\r\n				In the meantime, you will subconsciously be working on the problem without knowing it <i class=\"fa-regular fa-face-thinking\"></i>.\r\n			</li>\r\n			<li>\r\n				After taking a break, get your hands dirty with the project once more <i class=\"fa-regular fa-face-smile\"></i>.\r\n			</li>\r\n			<li>\r\n				Still can\'t solve the issue? Google it <i class=\"fa-regular fa-face-grin-wink\"></i>!\r\n			</li>\r\n		</ul>\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		4. Use Hot Reload\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-hr.png\" />\r\n	</p>\r\n\r\n	<p>\r\n		If you\'re working on a web app or even a mobile app I believe it would really boost your productivity if you made use of a hot reloading manager in your development workflow. In recent times, most (if not all) mainstream javaScript frontend frameworks come with a hot reloading manager in-built.\r\n	</p>\r\n\r\n	<p>\r\n		Basically, a hot reloading manager, loads code changes into your dev environment. When working on web apps or sites, a hot reload manager syncs the changes you make in your codebase with your browser. \r\n	</p>\r\n\r\n	<p>\r\n		<ul class=\"ml-7\">\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://pypi.org/project/kaki/\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Kaki (Kivy)\r\n				</a>\r\n			</li>\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://vitejs.dev/\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Vite (Web apps)\r\n				</a>\r\n			</li>\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://webpack.js.org/\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Webpack (Web apps)\r\n				</a>\r\n			</li>\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://expo.dev/expo-go\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Expo Go (Mobile apps)\r\n				</a>\r\n			</li>\r\n		</ul>\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		5. Reinforce Good Habits\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-habits.jpg\" />\r\n	</p>\r\n\r\n	<p>\r\n		Good habits are especially important for developers to maintain. If you want to increase your productive as a developer you should reinforce good habits as well as adopt them from other successful people in the field. Some of the good habits I consider are:\r\n	</p>\r\n\r\n	<p>\r\n		<ul class=\"ml-7\">\r\n			<li class=\"list-disc\">Writing down your plans before actually getting on a computer</li>\r\n			<li class=\"list-disc\">Always commenting your code</li>\r\n			<li class=\"list-disc\">Writing good git commit messages</li>\r\n			<li class=\"list-disc\">Solving problems on your own then googling a solution</li>\r\n		</ul>\r\n	</p>\r\n\r\n	<p>\r\n		I belive that these habits listed above are wonderful when they become ingrained in a developer \r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		Conclusion\r\n	</h3>\r\n\r\n	<p>\r\n		These tips I put up are my personal opinion of how to maximize productivity your as a developer. These tips have helped my in my endeavors as a developer and I hope they\'ll be of benefit to you as well. \r\n	</p>\r\n\r\n</div>',4,1,'2022-08-15 04:29:06','2022-08-15 04:29:06',NULL),(2,'/uploads/productivity-banner.jpg','How To Boost Productivity As A Developer','Admin','lifestyle','Being a developer involves harmoniously combining various factors and technologies on a day-to-day basis in order to get work done. In this article I share 5 tips on how you can boost your workflow productivity.','how-to-boost-productivity-as-a-developer-1','draft','<div class=\"blog-post\">\r\n	<header>\r\n		<h2 class=\"heading-2\">\r\n			5 Ways To Boost Productivity As A Developer\r\n		</h2>\r\n	</header>\r\n\r\n	<p class=\"leader\">\r\n		Here\'s a medley of 5 methods you as a developer can use to boost your productivity\r\n	</p>\r\n\r\n	<div class=\"blockquote\">\r\n		<span class=\"content\">\r\n			Being a developer involves harmoniously combining various factors and technologies on a day-to-day basis in order to get work done. In this article I share 5 tips on how you can boost your workflow productivity\r\n		</span>\r\n	</div>\r\n\r\n	<h3 class=\"heading-3\">\r\n		What is Productivity?\r\n	</h3>\r\n\r\n	<p>\r\n		Productivity is the efficiency of production of goods or services expressed by some measure. Measurements of productivity are often expressed as a ratio of an aggregate output to a single input or an aggregate input used in a production process.\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		1. Regular Communication\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-comm.jpg\" />\r\n	</p>\r\n\r\n	<p>\r\n		As a developer, I know that we prefer the company of computers rather than people (at least that\'s the case for me). In the past, Whenever I\'m working on a project, I usually secluded myself up until the project I was working on was production-ready (or until I got to the testing phase). This wasn\'t a good habit and as you can imagine, I got several complaints on the issue from my clients.\r\n	</p>\r\n\r\n	<p>\r\n		Good communication is as essential skill to possess as a developer and you should definitely work towards regular communication with your clients and those around you. \r\n	</p>\r\n\r\n\r\n	<h3 class=\"heading-3\">\r\n		2. Automate Repetitive Tasks\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-automation.jpg\" />\r\n	</p>\r\n\r\n	<div class=\"blockquote\">\r\n		<span class=\"content\">\r\n			If you perform an operation more than 3 times, that\'s probably a good sign that you need to automate it.\r\n		</span>\r\n		<span class=\"author\">\r\n			~ Anonymous\r\n		</span>\r\n	</div>\r\n\r\n	<p>\r\n		Task automation is one of the perks of being a programmer. That abilitty ability to write a script that will automate a task for you is really a life hack.\r\n	</p>\r\n\r\n	<p>\r\n		Whenever you\'re performing an operation which you normally do on a regular basis, it really helps to take sometime out of your day to write a script that can enable you complete that task much easier.\r\n	</p>\r\n\r\n	<p>\r\n		My personal favourite kind of scripts are project scaffolding scripts that can give you a starting template on a project based on particular tech stack. You could also check open source repos on <a href=\"https://github.com/topics/task-automation\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">GitHub</a> for scripts that already automate the task you\'re working on.\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		3. Take Regular Breaks\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-relaxation.jpg\" />\r\n	</p>\r\n\r\n	<div class=\"blockquote\">\r\n		<span class=\"content\">\r\n			Productivity per hour decline sharply when a person works more than 50 hours a week.\r\n		</span>\r\n		<span class=\"author\">\r\n			~ John Pencavel\r\n		</span>\r\n	</div>\r\n\r\n	<p>\r\n		As humans, we are designed to operate in blocks of time. Ideally, we are supposed to work and take regular breaks in-between. But what do we see today? In recent times, I see more people pushing forward endlessly without taking breaks.\r\n	</p>\r\n\r\n	<p>\r\n		To be honest, I used to be guilty of this in the past and I probably am still guilty about this up till this day. In the past I used to work endlessly without taking breaks and I often got frustrated when I ran into bugs I couldn\'t solve.\r\n	</p>\r\n\r\n	<p>\r\n		I switched my workflow to a dynamic pattern which works for me:\r\n	</p>\r\n\r\n	<p>\r\n		<ul>\r\n			<li>\r\n				Work until you get tired or start to plateau <i class=\"fa-regular fa-face-exhaling\"></i>.\r\n			</li>\r\n			<li>\r\n				When you do get tired or plateau, take a break and completely detach from work <i class=\"fa-solid fa-couch\"></i>.\r\n			</li>\r\n			<li>\r\n				In the meantime, you will subconsciously be working on the problem without knowing it <i class=\"fa-regular fa-face-thinking\"></i>.\r\n			</li>\r\n			<li>\r\n				After taking a break, get your hands dirty with the project once more <i class=\"fa-regular fa-face-smile\"></i>.\r\n			</li>\r\n			<li>\r\n				Still can\'t solve the issue? Google it <i class=\"fa-regular fa-face-grin-wink\"></i>!\r\n			</li>\r\n		</ul>\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		4. Use Hot Reload\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-hr.png\" />\r\n	</p>\r\n\r\n	<p>\r\n		If you\'re working on a web app or even a mobile app I believe it would really boost your productivity if you made use of a hot reloading manager in your development workflow. In recent times, most (if not all) mainstream javaScript frontend frameworks come with a hot reloading manager in-built.\r\n	</p>\r\n\r\n	<p>\r\n		Basically, a hot reloading manager, loads code changes into your dev environment. When working on web apps or sites, a hot reload manager syncs the changes you make in your codebase with your browser. \r\n	</p>\r\n\r\n	<p>\r\n		<ul class=\"ml-7\">\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://pypi.org/project/kaki/\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Kaki (Kivy)\r\n				</a>\r\n			</li>\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://vitejs.dev/\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Vite (Web apps)\r\n				</a>\r\n			</li>\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://webpack.js.org/\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Webpack (Web apps)\r\n				</a>\r\n			</li>\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://expo.dev/expo-go\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Expo Go (Mobile apps)\r\n				</a>\r\n			</li>\r\n		</ul>\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		5. Reinforce Good Habits\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-habits.jpg\" />\r\n	</p>\r\n\r\n	<p>\r\n		Good habits are especially important for developers to maintain. If you want to increase your productive as a developer you should reinforce good habits as well as adopt them from other successful people in the field. Some of the good habits I consider are:\r\n	</p>\r\n\r\n	<p>\r\n		<ul class=\"ml-7\">\r\n			<li class=\"list-disc\">Writing down your plans before actually getting on a computer</li>\r\n			<li class=\"list-disc\">Always commenting your code</li>\r\n			<li class=\"list-disc\">Writing good git commit messages</li>\r\n			<li class=\"list-disc\">Solving problems on your own then googling a solution</li>\r\n		</ul>\r\n	</p>\r\n\r\n	<p>\r\n		I belive that these habits listed above are wonderful when they become ingrained in a developer \r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		Conclusion\r\n	</h3>\r\n\r\n	<p>\r\n		These tips I put up are my personal opinion of how to maximize productivity your as a developer. These tips have helped my in my endeavors as a developer and I hope they\'ll be of benefit to you as well. \r\n	</p>\r\n\r\n</div>',4,2,'2022-08-15 04:29:07','2022-08-15 04:29:07',NULL),(3,'/uploads/productivity-banner.jpg','How To Boost Productivity As A Developer','Admin','food','Being a developer involves harmoniously combining various factors and technologies on a day-to-day basis in order to get work done. In this article I share 5 tips on how you can boost your workflow productivity.','how-to-boost-productivity-as-a-developer-2','draft','<div class=\"blog-post\">\r\n	<header>\r\n		<h2 class=\"heading-2\">\r\n			5 Ways To Boost Productivity As A Developer\r\n		</h2>\r\n	</header>\r\n\r\n	<p class=\"leader\">\r\n		Here\'s a medley of 5 methods you as a developer can use to boost your productivity\r\n	</p>\r\n\r\n	<div class=\"blockquote\">\r\n		<span class=\"content\">\r\n			Being a developer involves harmoniously combining various factors and technologies on a day-to-day basis in order to get work done. In this article I share 5 tips on how you can boost your workflow productivity\r\n		</span>\r\n	</div>\r\n\r\n	<h3 class=\"heading-3\">\r\n		What is Productivity?\r\n	</h3>\r\n\r\n	<p>\r\n		Productivity is the efficiency of production of goods or services expressed by some measure. Measurements of productivity are often expressed as a ratio of an aggregate output to a single input or an aggregate input used in a production process.\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		1. Regular Communication\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-comm.jpg\" />\r\n	</p>\r\n\r\n	<p>\r\n		As a developer, I know that we prefer the company of computers rather than people (at least that\'s the case for me). In the past, Whenever I\'m working on a project, I usually secluded myself up until the project I was working on was production-ready (or until I got to the testing phase). This wasn\'t a good habit and as you can imagine, I got several complaints on the issue from my clients.\r\n	</p>\r\n\r\n	<p>\r\n		Good communication is as essential skill to possess as a developer and you should definitely work towards regular communication with your clients and those around you. \r\n	</p>\r\n\r\n\r\n	<h3 class=\"heading-3\">\r\n		2. Automate Repetitive Tasks\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-automation.jpg\" />\r\n	</p>\r\n\r\n	<div class=\"blockquote\">\r\n		<span class=\"content\">\r\n			If you perform an operation more than 3 times, that\'s probably a good sign that you need to automate it.\r\n		</span>\r\n		<span class=\"author\">\r\n			~ Anonymous\r\n		</span>\r\n	</div>\r\n\r\n	<p>\r\n		Task automation is one of the perks of being a programmer. That abilitty ability to write a script that will automate a task for you is really a life hack.\r\n	</p>\r\n\r\n	<p>\r\n		Whenever you\'re performing an operation which you normally do on a regular basis, it really helps to take sometime out of your day to write a script that can enable you complete that task much easier.\r\n	</p>\r\n\r\n	<p>\r\n		My personal favourite kind of scripts are project scaffolding scripts that can give you a starting template on a project based on particular tech stack. You could also check open source repos on <a href=\"https://github.com/topics/task-automation\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">GitHub</a> for scripts that already automate the task you\'re working on.\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		3. Take Regular Breaks\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-relaxation.jpg\" />\r\n	</p>\r\n\r\n	<div class=\"blockquote\">\r\n		<span class=\"content\">\r\n			Productivity per hour decline sharply when a person works more than 50 hours a week.\r\n		</span>\r\n		<span class=\"author\">\r\n			~ John Pencavel\r\n		</span>\r\n	</div>\r\n\r\n	<p>\r\n		As humans, we are designed to operate in blocks of time. Ideally, we are supposed to work and take regular breaks in-between. But what do we see today? In recent times, I see more people pushing forward endlessly without taking breaks.\r\n	</p>\r\n\r\n	<p>\r\n		To be honest, I used to be guilty of this in the past and I probably am still guilty about this up till this day. In the past I used to work endlessly without taking breaks and I often got frustrated when I ran into bugs I couldn\'t solve.\r\n	</p>\r\n\r\n	<p>\r\n		I switched my workflow to a dynamic pattern which works for me:\r\n	</p>\r\n\r\n	<p>\r\n		<ul>\r\n			<li>\r\n				Work until you get tired or start to plateau <i class=\"fa-regular fa-face-exhaling\"></i>.\r\n			</li>\r\n			<li>\r\n				When you do get tired or plateau, take a break and completely detach from work <i class=\"fa-solid fa-couch\"></i>.\r\n			</li>\r\n			<li>\r\n				In the meantime, you will subconsciously be working on the problem without knowing it <i class=\"fa-regular fa-face-thinking\"></i>.\r\n			</li>\r\n			<li>\r\n				After taking a break, get your hands dirty with the project once more <i class=\"fa-regular fa-face-smile\"></i>.\r\n			</li>\r\n			<li>\r\n				Still can\'t solve the issue? Google it <i class=\"fa-regular fa-face-grin-wink\"></i>!\r\n			</li>\r\n		</ul>\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		4. Use Hot Reload\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-hr.png\" />\r\n	</p>\r\n\r\n	<p>\r\n		If you\'re working on a web app or even a mobile app I believe it would really boost your productivity if you made use of a hot reloading manager in your development workflow. In recent times, most (if not all) mainstream javaScript frontend frameworks come with a hot reloading manager in-built.\r\n	</p>\r\n\r\n	<p>\r\n		Basically, a hot reloading manager, loads code changes into your dev environment. When working on web apps or sites, a hot reload manager syncs the changes you make in your codebase with your browser. \r\n	</p>\r\n\r\n	<p>\r\n		<ul class=\"ml-7\">\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://pypi.org/project/kaki/\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Kaki (Kivy)\r\n				</a>\r\n			</li>\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://vitejs.dev/\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Vite (Web apps)\r\n				</a>\r\n			</li>\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://webpack.js.org/\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Webpack (Web apps)\r\n				</a>\r\n			</li>\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://expo.dev/expo-go\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Expo Go (Mobile apps)\r\n				</a>\r\n			</li>\r\n		</ul>\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		5. Reinforce Good Habits\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-habits.jpg\" />\r\n	</p>\r\n\r\n	<p>\r\n		Good habits are especially important for developers to maintain. If you want to increase your productive as a developer you should reinforce good habits as well as adopt them from other successful people in the field. Some of the good habits I consider are:\r\n	</p>\r\n\r\n	<p>\r\n		<ul class=\"ml-7\">\r\n			<li class=\"list-disc\">Writing down your plans before actually getting on a computer</li>\r\n			<li class=\"list-disc\">Always commenting your code</li>\r\n			<li class=\"list-disc\">Writing good git commit messages</li>\r\n			<li class=\"list-disc\">Solving problems on your own then googling a solution</li>\r\n		</ul>\r\n	</p>\r\n\r\n	<p>\r\n		I belive that these habits listed above are wonderful when they become ingrained in a developer \r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		Conclusion\r\n	</h3>\r\n\r\n	<p>\r\n		These tips I put up are my personal opinion of how to maximize productivity your as a developer. These tips have helped my in my endeavors as a developer and I hope they\'ll be of benefit to you as well. \r\n	</p>\r\n\r\n</div>',4,3,'2022-08-15 04:29:08','2022-08-15 04:29:08',NULL),(4,'/uploads/productivity-banner.jpg','How To Boost Productivity As A Developer','Admin','lifestyle','Being a developer involves harmoniously combining various factors and technologies on a day-to-day basis in order to get work done. In this article I share 5 tips on how you can boost your workflow productivity.','how-to-boost-productivity-as-a-developer-3','draft','<div class=\"blog-post\">\r\n	<header>\r\n		<h2 class=\"heading-2\">\r\n			5 Ways To Boost Productivity As A Developer\r\n		</h2>\r\n	</header>\r\n\r\n	<p class=\"leader\">\r\n		Here\'s a medley of 5 methods you as a developer can use to boost your productivity\r\n	</p>\r\n\r\n	<div class=\"blockquote\">\r\n		<span class=\"content\">\r\n			Being a developer involves harmoniously combining various factors and technologies on a day-to-day basis in order to get work done. In this article I share 5 tips on how you can boost your workflow productivity\r\n		</span>\r\n	</div>\r\n\r\n	<h3 class=\"heading-3\">\r\n		What is Productivity?\r\n	</h3>\r\n\r\n	<p>\r\n		Productivity is the efficiency of production of goods or services expressed by some measure. Measurements of productivity are often expressed as a ratio of an aggregate output to a single input or an aggregate input used in a production process.\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		1. Regular Communication\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-comm.jpg\" />\r\n	</p>\r\n\r\n	<p>\r\n		As a developer, I know that we prefer the company of computers rather than people (at least that\'s the case for me). In the past, Whenever I\'m working on a project, I usually secluded myself up until the project I was working on was production-ready (or until I got to the testing phase). This wasn\'t a good habit and as you can imagine, I got several complaints on the issue from my clients.\r\n	</p>\r\n\r\n	<p>\r\n		Good communication is as essential skill to possess as a developer and you should definitely work towards regular communication with your clients and those around you. \r\n	</p>\r\n\r\n\r\n	<h3 class=\"heading-3\">\r\n		2. Automate Repetitive Tasks\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-automation.jpg\" />\r\n	</p>\r\n\r\n	<div class=\"blockquote\">\r\n		<span class=\"content\">\r\n			If you perform an operation more than 3 times, that\'s probably a good sign that you need to automate it.\r\n		</span>\r\n		<span class=\"author\">\r\n			~ Anonymous\r\n		</span>\r\n	</div>\r\n\r\n	<p>\r\n		Task automation is one of the perks of being a programmer. That abilitty ability to write a script that will automate a task for you is really a life hack.\r\n	</p>\r\n\r\n	<p>\r\n		Whenever you\'re performing an operation which you normally do on a regular basis, it really helps to take sometime out of your day to write a script that can enable you complete that task much easier.\r\n	</p>\r\n\r\n	<p>\r\n		My personal favourite kind of scripts are project scaffolding scripts that can give you a starting template on a project based on particular tech stack. You could also check open source repos on <a href=\"https://github.com/topics/task-automation\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">GitHub</a> for scripts that already automate the task you\'re working on.\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		3. Take Regular Breaks\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-relaxation.jpg\" />\r\n	</p>\r\n\r\n	<div class=\"blockquote\">\r\n		<span class=\"content\">\r\n			Productivity per hour decline sharply when a person works more than 50 hours a week.\r\n		</span>\r\n		<span class=\"author\">\r\n			~ John Pencavel\r\n		</span>\r\n	</div>\r\n\r\n	<p>\r\n		As humans, we are designed to operate in blocks of time. Ideally, we are supposed to work and take regular breaks in-between. But what do we see today? In recent times, I see more people pushing forward endlessly without taking breaks.\r\n	</p>\r\n\r\n	<p>\r\n		To be honest, I used to be guilty of this in the past and I probably am still guilty about this up till this day. In the past I used to work endlessly without taking breaks and I often got frustrated when I ran into bugs I couldn\'t solve.\r\n	</p>\r\n\r\n	<p>\r\n		I switched my workflow to a dynamic pattern which works for me:\r\n	</p>\r\n\r\n	<p>\r\n		<ul>\r\n			<li>\r\n				Work until you get tired or start to plateau <i class=\"fa-regular fa-face-exhaling\"></i>.\r\n			</li>\r\n			<li>\r\n				When you do get tired or plateau, take a break and completely detach from work <i class=\"fa-solid fa-couch\"></i>.\r\n			</li>\r\n			<li>\r\n				In the meantime, you will subconsciously be working on the problem without knowing it <i class=\"fa-regular fa-face-thinking\"></i>.\r\n			</li>\r\n			<li>\r\n				After taking a break, get your hands dirty with the project once more <i class=\"fa-regular fa-face-smile\"></i>.\r\n			</li>\r\n			<li>\r\n				Still can\'t solve the issue? Google it <i class=\"fa-regular fa-face-grin-wink\"></i>!\r\n			</li>\r\n		</ul>\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		4. Use Hot Reload\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-hr.png\" />\r\n	</p>\r\n\r\n	<p>\r\n		If you\'re working on a web app or even a mobile app I believe it would really boost your productivity if you made use of a hot reloading manager in your development workflow. In recent times, most (if not all) mainstream javaScript frontend frameworks come with a hot reloading manager in-built.\r\n	</p>\r\n\r\n	<p>\r\n		Basically, a hot reloading manager, loads code changes into your dev environment. When working on web apps or sites, a hot reload manager syncs the changes you make in your codebase with your browser. \r\n	</p>\r\n\r\n	<p>\r\n		<ul class=\"ml-7\">\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://pypi.org/project/kaki/\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Kaki (Kivy)\r\n				</a>\r\n			</li>\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://vitejs.dev/\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Vite (Web apps)\r\n				</a>\r\n			</li>\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://webpack.js.org/\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Webpack (Web apps)\r\n				</a>\r\n			</li>\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://expo.dev/expo-go\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Expo Go (Mobile apps)\r\n				</a>\r\n			</li>\r\n		</ul>\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		5. Reinforce Good Habits\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-habits.jpg\" />\r\n	</p>\r\n\r\n	<p>\r\n		Good habits are especially important for developers to maintain. If you want to increase your productive as a developer you should reinforce good habits as well as adopt them from other successful people in the field. Some of the good habits I consider are:\r\n	</p>\r\n\r\n	<p>\r\n		<ul class=\"ml-7\">\r\n			<li class=\"list-disc\">Writing down your plans before actually getting on a computer</li>\r\n			<li class=\"list-disc\">Always commenting your code</li>\r\n			<li class=\"list-disc\">Writing good git commit messages</li>\r\n			<li class=\"list-disc\">Solving problems on your own then googling a solution</li>\r\n		</ul>\r\n	</p>\r\n\r\n	<p>\r\n		I belive that these habits listed above are wonderful when they become ingrained in a developer \r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		Conclusion\r\n	</h3>\r\n\r\n	<p>\r\n		These tips I put up are my personal opinion of how to maximize productivity your as a developer. These tips have helped my in my endeavors as a developer and I hope they\'ll be of benefit to you as well. \r\n	</p>\r\n\r\n</div>',4,4,'2022-08-15 04:29:08','2022-08-15 04:29:08',NULL),(5,'/uploads/productivity-banner.jpg','How To Boost Productivity As A Developer','Admin','travel','Being a developer involves harmoniously combining various factors and technologies on a day-to-day basis in order to get work done. In this article I share 5 tips on how you can boost your workflow productivity.','how-to-boost-productivity-as-a-developer-4','draft','<div class=\"blog-post\">\r\n	<header>\r\n		<h2 class=\"heading-2\">\r\n			5 Ways To Boost Productivity As A Developer\r\n		</h2>\r\n	</header>\r\n\r\n	<p class=\"leader\">\r\n		Here\'s a medley of 5 methods you as a developer can use to boost your productivity\r\n	</p>\r\n\r\n	<div class=\"blockquote\">\r\n		<span class=\"content\">\r\n			Being a developer involves harmoniously combining various factors and technologies on a day-to-day basis in order to get work done. In this article I share 5 tips on how you can boost your workflow productivity\r\n		</span>\r\n	</div>\r\n\r\n	<h3 class=\"heading-3\">\r\n		What is Productivity?\r\n	</h3>\r\n\r\n	<p>\r\n		Productivity is the efficiency of production of goods or services expressed by some measure. Measurements of productivity are often expressed as a ratio of an aggregate output to a single input or an aggregate input used in a production process.\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		1. Regular Communication\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-comm.jpg\" />\r\n	</p>\r\n\r\n	<p>\r\n		As a developer, I know that we prefer the company of computers rather than people (at least that\'s the case for me). In the past, Whenever I\'m working on a project, I usually secluded myself up until the project I was working on was production-ready (or until I got to the testing phase). This wasn\'t a good habit and as you can imagine, I got several complaints on the issue from my clients.\r\n	</p>\r\n\r\n	<p>\r\n		Good communication is as essential skill to possess as a developer and you should definitely work towards regular communication with your clients and those around you. \r\n	</p>\r\n\r\n\r\n	<h3 class=\"heading-3\">\r\n		2. Automate Repetitive Tasks\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-automation.jpg\" />\r\n	</p>\r\n\r\n	<div class=\"blockquote\">\r\n		<span class=\"content\">\r\n			If you perform an operation more than 3 times, that\'s probably a good sign that you need to automate it.\r\n		</span>\r\n		<span class=\"author\">\r\n			~ Anonymous\r\n		</span>\r\n	</div>\r\n\r\n	<p>\r\n		Task automation is one of the perks of being a programmer. That abilitty ability to write a script that will automate a task for you is really a life hack.\r\n	</p>\r\n\r\n	<p>\r\n		Whenever you\'re performing an operation which you normally do on a regular basis, it really helps to take sometime out of your day to write a script that can enable you complete that task much easier.\r\n	</p>\r\n\r\n	<p>\r\n		My personal favourite kind of scripts are project scaffolding scripts that can give you a starting template on a project based on particular tech stack. You could also check open source repos on <a href=\"https://github.com/topics/task-automation\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">GitHub</a> for scripts that already automate the task you\'re working on.\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		3. Take Regular Breaks\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-relaxation.jpg\" />\r\n	</p>\r\n\r\n	<div class=\"blockquote\">\r\n		<span class=\"content\">\r\n			Productivity per hour decline sharply when a person works more than 50 hours a week.\r\n		</span>\r\n		<span class=\"author\">\r\n			~ John Pencavel\r\n		</span>\r\n	</div>\r\n\r\n	<p>\r\n		As humans, we are designed to operate in blocks of time. Ideally, we are supposed to work and take regular breaks in-between. But what do we see today? In recent times, I see more people pushing forward endlessly without taking breaks.\r\n	</p>\r\n\r\n	<p>\r\n		To be honest, I used to be guilty of this in the past and I probably am still guilty about this up till this day. In the past I used to work endlessly without taking breaks and I often got frustrated when I ran into bugs I couldn\'t solve.\r\n	</p>\r\n\r\n	<p>\r\n		I switched my workflow to a dynamic pattern which works for me:\r\n	</p>\r\n\r\n	<p>\r\n		<ul>\r\n			<li>\r\n				Work until you get tired or start to plateau <i class=\"fa-regular fa-face-exhaling\"></i>.\r\n			</li>\r\n			<li>\r\n				When you do get tired or plateau, take a break and completely detach from work <i class=\"fa-solid fa-couch\"></i>.\r\n			</li>\r\n			<li>\r\n				In the meantime, you will subconsciously be working on the problem without knowing it <i class=\"fa-regular fa-face-thinking\"></i>.\r\n			</li>\r\n			<li>\r\n				After taking a break, get your hands dirty with the project once more <i class=\"fa-regular fa-face-smile\"></i>.\r\n			</li>\r\n			<li>\r\n				Still can\'t solve the issue? Google it <i class=\"fa-regular fa-face-grin-wink\"></i>!\r\n			</li>\r\n		</ul>\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		4. Use Hot Reload\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-hr.png\" />\r\n	</p>\r\n\r\n	<p>\r\n		If you\'re working on a web app or even a mobile app I believe it would really boost your productivity if you made use of a hot reloading manager in your development workflow. In recent times, most (if not all) mainstream javaScript frontend frameworks come with a hot reloading manager in-built.\r\n	</p>\r\n\r\n	<p>\r\n		Basically, a hot reloading manager, loads code changes into your dev environment. When working on web apps or sites, a hot reload manager syncs the changes you make in your codebase with your browser. \r\n	</p>\r\n\r\n	<p>\r\n		<ul class=\"ml-7\">\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://pypi.org/project/kaki/\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Kaki (Kivy)\r\n				</a>\r\n			</li>\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://vitejs.dev/\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Vite (Web apps)\r\n				</a>\r\n			</li>\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://webpack.js.org/\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Webpack (Web apps)\r\n				</a>\r\n			</li>\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://expo.dev/expo-go\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Expo Go (Mobile apps)\r\n				</a>\r\n			</li>\r\n		</ul>\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		5. Reinforce Good Habits\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-habits.jpg\" />\r\n	</p>\r\n\r\n	<p>\r\n		Good habits are especially important for developers to maintain. If you want to increase your productive as a developer you should reinforce good habits as well as adopt them from other successful people in the field. Some of the good habits I consider are:\r\n	</p>\r\n\r\n	<p>\r\n		<ul class=\"ml-7\">\r\n			<li class=\"list-disc\">Writing down your plans before actually getting on a computer</li>\r\n			<li class=\"list-disc\">Always commenting your code</li>\r\n			<li class=\"list-disc\">Writing good git commit messages</li>\r\n			<li class=\"list-disc\">Solving problems on your own then googling a solution</li>\r\n		</ul>\r\n	</p>\r\n\r\n	<p>\r\n		I belive that these habits listed above are wonderful when they become ingrained in a developer \r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		Conclusion\r\n	</h3>\r\n\r\n	<p>\r\n		These tips I put up are my personal opinion of how to maximize productivity your as a developer. These tips have helped my in my endeavors as a developer and I hope they\'ll be of benefit to you as well. \r\n	</p>\r\n\r\n</div>',4,5,'2022-08-15 04:29:08','2022-08-15 04:29:08',NULL),(6,'/uploads/productivity-banner.jpg','How To Boost Productivity As A Developer','Admin','fashion','Being a developer involves harmoniously combining various factors and technologies on a day-to-day basis in order to get work done. In this article I share 5 tips on how you can boost your workflow productivity.','how-to-boost-productivity-as-a-developer-5','draft','<div class=\"blog-post\">\r\n	<header>\r\n		<h2 class=\"heading-2\">\r\n			5 Ways To Boost Productivity As A Developer\r\n		</h2>\r\n	</header>\r\n\r\n	<p class=\"leader\">\r\n		Here\'s a medley of 5 methods you as a developer can use to boost your productivity\r\n	</p>\r\n\r\n	<div class=\"blockquote\">\r\n		<span class=\"content\">\r\n			Being a developer involves harmoniously combining various factors and technologies on a day-to-day basis in order to get work done. In this article I share 5 tips on how you can boost your workflow productivity\r\n		</span>\r\n	</div>\r\n\r\n	<h3 class=\"heading-3\">\r\n		What is Productivity?\r\n	</h3>\r\n\r\n	<p>\r\n		Productivity is the efficiency of production of goods or services expressed by some measure. Measurements of productivity are often expressed as a ratio of an aggregate output to a single input or an aggregate input used in a production process.\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		1. Regular Communication\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-comm.jpg\" />\r\n	</p>\r\n\r\n	<p>\r\n		As a developer, I know that we prefer the company of computers rather than people (at least that\'s the case for me). In the past, Whenever I\'m working on a project, I usually secluded myself up until the project I was working on was production-ready (or until I got to the testing phase). This wasn\'t a good habit and as you can imagine, I got several complaints on the issue from my clients.\r\n	</p>\r\n\r\n	<p>\r\n		Good communication is as essential skill to possess as a developer and you should definitely work towards regular communication with your clients and those around you. \r\n	</p>\r\n\r\n\r\n	<h3 class=\"heading-3\">\r\n		2. Automate Repetitive Tasks\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-automation.jpg\" />\r\n	</p>\r\n\r\n	<div class=\"blockquote\">\r\n		<span class=\"content\">\r\n			If you perform an operation more than 3 times, that\'s probably a good sign that you need to automate it.\r\n		</span>\r\n		<span class=\"author\">\r\n			~ Anonymous\r\n		</span>\r\n	</div>\r\n\r\n	<p>\r\n		Task automation is one of the perks of being a programmer. That abilitty ability to write a script that will automate a task for you is really a life hack.\r\n	</p>\r\n\r\n	<p>\r\n		Whenever you\'re performing an operation which you normally do on a regular basis, it really helps to take sometime out of your day to write a script that can enable you complete that task much easier.\r\n	</p>\r\n\r\n	<p>\r\n		My personal favourite kind of scripts are project scaffolding scripts that can give you a starting template on a project based on particular tech stack. You could also check open source repos on <a href=\"https://github.com/topics/task-automation\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">GitHub</a> for scripts that already automate the task you\'re working on.\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		3. Take Regular Breaks\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-relaxation.jpg\" />\r\n	</p>\r\n\r\n	<div class=\"blockquote\">\r\n		<span class=\"content\">\r\n			Productivity per hour decline sharply when a person works more than 50 hours a week.\r\n		</span>\r\n		<span class=\"author\">\r\n			~ John Pencavel\r\n		</span>\r\n	</div>\r\n\r\n	<p>\r\n		As humans, we are designed to operate in blocks of time. Ideally, we are supposed to work and take regular breaks in-between. But what do we see today? In recent times, I see more people pushing forward endlessly without taking breaks.\r\n	</p>\r\n\r\n	<p>\r\n		To be honest, I used to be guilty of this in the past and I probably am still guilty about this up till this day. In the past I used to work endlessly without taking breaks and I often got frustrated when I ran into bugs I couldn\'t solve.\r\n	</p>\r\n\r\n	<p>\r\n		I switched my workflow to a dynamic pattern which works for me:\r\n	</p>\r\n\r\n	<p>\r\n		<ul>\r\n			<li>\r\n				Work until you get tired or start to plateau <i class=\"fa-regular fa-face-exhaling\"></i>.\r\n			</li>\r\n			<li>\r\n				When you do get tired or plateau, take a break and completely detach from work <i class=\"fa-solid fa-couch\"></i>.\r\n			</li>\r\n			<li>\r\n				In the meantime, you will subconsciously be working on the problem without knowing it <i class=\"fa-regular fa-face-thinking\"></i>.\r\n			</li>\r\n			<li>\r\n				After taking a break, get your hands dirty with the project once more <i class=\"fa-regular fa-face-smile\"></i>.\r\n			</li>\r\n			<li>\r\n				Still can\'t solve the issue? Google it <i class=\"fa-regular fa-face-grin-wink\"></i>!\r\n			</li>\r\n		</ul>\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		4. Use Hot Reload\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-hr.png\" />\r\n	</p>\r\n\r\n	<p>\r\n		If you\'re working on a web app or even a mobile app I believe it would really boost your productivity if you made use of a hot reloading manager in your development workflow. In recent times, most (if not all) mainstream javaScript frontend frameworks come with a hot reloading manager in-built.\r\n	</p>\r\n\r\n	<p>\r\n		Basically, a hot reloading manager, loads code changes into your dev environment. When working on web apps or sites, a hot reload manager syncs the changes you make in your codebase with your browser. \r\n	</p>\r\n\r\n	<p>\r\n		<ul class=\"ml-7\">\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://pypi.org/project/kaki/\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Kaki (Kivy)\r\n				</a>\r\n			</li>\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://vitejs.dev/\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Vite (Web apps)\r\n				</a>\r\n			</li>\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://webpack.js.org/\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Webpack (Web apps)\r\n				</a>\r\n			</li>\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://expo.dev/expo-go\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Expo Go (Mobile apps)\r\n				</a>\r\n			</li>\r\n		</ul>\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		5. Reinforce Good Habits\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-habits.jpg\" />\r\n	</p>\r\n\r\n	<p>\r\n		Good habits are especially important for developers to maintain. If you want to increase your productive as a developer you should reinforce good habits as well as adopt them from other successful people in the field. Some of the good habits I consider are:\r\n	</p>\r\n\r\n	<p>\r\n		<ul class=\"ml-7\">\r\n			<li class=\"list-disc\">Writing down your plans before actually getting on a computer</li>\r\n			<li class=\"list-disc\">Always commenting your code</li>\r\n			<li class=\"list-disc\">Writing good git commit messages</li>\r\n			<li class=\"list-disc\">Solving problems on your own then googling a solution</li>\r\n		</ul>\r\n	</p>\r\n\r\n	<p>\r\n		I belive that these habits listed above are wonderful when they become ingrained in a developer \r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		Conclusion\r\n	</h3>\r\n\r\n	<p>\r\n		These tips I put up are my personal opinion of how to maximize productivity your as a developer. These tips have helped my in my endeavors as a developer and I hope they\'ll be of benefit to you as well. \r\n	</p>\r\n\r\n</div>',4,6,'2022-08-15 04:29:08','2022-08-15 04:29:08',NULL),(7,'/uploads/productivity-banner.jpg','How To Boost Productivity As A Developer','Admin','travel','Being a developer involves harmoniously combining various factors and technologies on a day-to-day basis in order to get work done. In this article I share 5 tips on how you can boost your workflow productivity.','how-to-boost-productivity-as-a-developer-6','draft','<div class=\"blog-post\">\r\n	<header>\r\n		<h2 class=\"heading-2\">\r\n			5 Ways To Boost Productivity As A Developer\r\n		</h2>\r\n	</header>\r\n\r\n	<p class=\"leader\">\r\n		Here\'s a medley of 5 methods you as a developer can use to boost your productivity\r\n	</p>\r\n\r\n	<div class=\"blockquote\">\r\n		<span class=\"content\">\r\n			Being a developer involves harmoniously combining various factors and technologies on a day-to-day basis in order to get work done. In this article I share 5 tips on how you can boost your workflow productivity\r\n		</span>\r\n	</div>\r\n\r\n	<h3 class=\"heading-3\">\r\n		What is Productivity?\r\n	</h3>\r\n\r\n	<p>\r\n		Productivity is the efficiency of production of goods or services expressed by some measure. Measurements of productivity are often expressed as a ratio of an aggregate output to a single input or an aggregate input used in a production process.\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		1. Regular Communication\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-comm.jpg\" />\r\n	</p>\r\n\r\n	<p>\r\n		As a developer, I know that we prefer the company of computers rather than people (at least that\'s the case for me). In the past, Whenever I\'m working on a project, I usually secluded myself up until the project I was working on was production-ready (or until I got to the testing phase). This wasn\'t a good habit and as you can imagine, I got several complaints on the issue from my clients.\r\n	</p>\r\n\r\n	<p>\r\n		Good communication is as essential skill to possess as a developer and you should definitely work towards regular communication with your clients and those around you. \r\n	</p>\r\n\r\n\r\n	<h3 class=\"heading-3\">\r\n		2. Automate Repetitive Tasks\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-automation.jpg\" />\r\n	</p>\r\n\r\n	<div class=\"blockquote\">\r\n		<span class=\"content\">\r\n			If you perform an operation more than 3 times, that\'s probably a good sign that you need to automate it.\r\n		</span>\r\n		<span class=\"author\">\r\n			~ Anonymous\r\n		</span>\r\n	</div>\r\n\r\n	<p>\r\n		Task automation is one of the perks of being a programmer. That abilitty ability to write a script that will automate a task for you is really a life hack.\r\n	</p>\r\n\r\n	<p>\r\n		Whenever you\'re performing an operation which you normally do on a regular basis, it really helps to take sometime out of your day to write a script that can enable you complete that task much easier.\r\n	</p>\r\n\r\n	<p>\r\n		My personal favourite kind of scripts are project scaffolding scripts that can give you a starting template on a project based on particular tech stack. You could also check open source repos on <a href=\"https://github.com/topics/task-automation\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">GitHub</a> for scripts that already automate the task you\'re working on.\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		3. Take Regular Breaks\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-relaxation.jpg\" />\r\n	</p>\r\n\r\n	<div class=\"blockquote\">\r\n		<span class=\"content\">\r\n			Productivity per hour decline sharply when a person works more than 50 hours a week.\r\n		</span>\r\n		<span class=\"author\">\r\n			~ John Pencavel\r\n		</span>\r\n	</div>\r\n\r\n	<p>\r\n		As humans, we are designed to operate in blocks of time. Ideally, we are supposed to work and take regular breaks in-between. But what do we see today? In recent times, I see more people pushing forward endlessly without taking breaks.\r\n	</p>\r\n\r\n	<p>\r\n		To be honest, I used to be guilty of this in the past and I probably am still guilty about this up till this day. In the past I used to work endlessly without taking breaks and I often got frustrated when I ran into bugs I couldn\'t solve.\r\n	</p>\r\n\r\n	<p>\r\n		I switched my workflow to a dynamic pattern which works for me:\r\n	</p>\r\n\r\n	<p>\r\n		<ul>\r\n			<li>\r\n				Work until you get tired or start to plateau <i class=\"fa-regular fa-face-exhaling\"></i>.\r\n			</li>\r\n			<li>\r\n				When you do get tired or plateau, take a break and completely detach from work <i class=\"fa-solid fa-couch\"></i>.\r\n			</li>\r\n			<li>\r\n				In the meantime, you will subconsciously be working on the problem without knowing it <i class=\"fa-regular fa-face-thinking\"></i>.\r\n			</li>\r\n			<li>\r\n				After taking a break, get your hands dirty with the project once more <i class=\"fa-regular fa-face-smile\"></i>.\r\n			</li>\r\n			<li>\r\n				Still can\'t solve the issue? Google it <i class=\"fa-regular fa-face-grin-wink\"></i>!\r\n			</li>\r\n		</ul>\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		4. Use Hot Reload\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-hr.png\" />\r\n	</p>\r\n\r\n	<p>\r\n		If you\'re working on a web app or even a mobile app I believe it would really boost your productivity if you made use of a hot reloading manager in your development workflow. In recent times, most (if not all) mainstream javaScript frontend frameworks come with a hot reloading manager in-built.\r\n	</p>\r\n\r\n	<p>\r\n		Basically, a hot reloading manager, loads code changes into your dev environment. When working on web apps or sites, a hot reload manager syncs the changes you make in your codebase with your browser. \r\n	</p>\r\n\r\n	<p>\r\n		<ul class=\"ml-7\">\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://pypi.org/project/kaki/\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Kaki (Kivy)\r\n				</a>\r\n			</li>\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://vitejs.dev/\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Vite (Web apps)\r\n				</a>\r\n			</li>\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://webpack.js.org/\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Webpack (Web apps)\r\n				</a>\r\n			</li>\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://expo.dev/expo-go\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Expo Go (Mobile apps)\r\n				</a>\r\n			</li>\r\n		</ul>\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		5. Reinforce Good Habits\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-habits.jpg\" />\r\n	</p>\r\n\r\n	<p>\r\n		Good habits are especially important for developers to maintain. If you want to increase your productive as a developer you should reinforce good habits as well as adopt them from other successful people in the field. Some of the good habits I consider are:\r\n	</p>\r\n\r\n	<p>\r\n		<ul class=\"ml-7\">\r\n			<li class=\"list-disc\">Writing down your plans before actually getting on a computer</li>\r\n			<li class=\"list-disc\">Always commenting your code</li>\r\n			<li class=\"list-disc\">Writing good git commit messages</li>\r\n			<li class=\"list-disc\">Solving problems on your own then googling a solution</li>\r\n		</ul>\r\n	</p>\r\n\r\n	<p>\r\n		I belive that these habits listed above are wonderful when they become ingrained in a developer \r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		Conclusion\r\n	</h3>\r\n\r\n	<p>\r\n		These tips I put up are my personal opinion of how to maximize productivity your as a developer. These tips have helped my in my endeavors as a developer and I hope they\'ll be of benefit to you as well. \r\n	</p>\r\n\r\n</div>',4,7,'2022-08-15 04:29:08','2022-08-15 04:29:08',NULL),(8,'/uploads/productivity-banner.jpg','How To Boost Productivity As A Developer','Admin','fashion','Being a developer involves harmoniously combining various factors and technologies on a day-to-day basis in order to get work done. In this article I share 5 tips on how you can boost your workflow productivity.','how-to-boost-productivity-as-a-developer-7','draft','<div class=\"blog-post\">\r\n	<header>\r\n		<h2 class=\"heading-2\">\r\n			5 Ways To Boost Productivity As A Developer\r\n		</h2>\r\n	</header>\r\n\r\n	<p class=\"leader\">\r\n		Here\'s a medley of 5 methods you as a developer can use to boost your productivity\r\n	</p>\r\n\r\n	<div class=\"blockquote\">\r\n		<span class=\"content\">\r\n			Being a developer involves harmoniously combining various factors and technologies on a day-to-day basis in order to get work done. In this article I share 5 tips on how you can boost your workflow productivity\r\n		</span>\r\n	</div>\r\n\r\n	<h3 class=\"heading-3\">\r\n		What is Productivity?\r\n	</h3>\r\n\r\n	<p>\r\n		Productivity is the efficiency of production of goods or services expressed by some measure. Measurements of productivity are often expressed as a ratio of an aggregate output to a single input or an aggregate input used in a production process.\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		1. Regular Communication\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-comm.jpg\" />\r\n	</p>\r\n\r\n	<p>\r\n		As a developer, I know that we prefer the company of computers rather than people (at least that\'s the case for me). In the past, Whenever I\'m working on a project, I usually secluded myself up until the project I was working on was production-ready (or until I got to the testing phase). This wasn\'t a good habit and as you can imagine, I got several complaints on the issue from my clients.\r\n	</p>\r\n\r\n	<p>\r\n		Good communication is as essential skill to possess as a developer and you should definitely work towards regular communication with your clients and those around you. \r\n	</p>\r\n\r\n\r\n	<h3 class=\"heading-3\">\r\n		2. Automate Repetitive Tasks\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-automation.jpg\" />\r\n	</p>\r\n\r\n	<div class=\"blockquote\">\r\n		<span class=\"content\">\r\n			If you perform an operation more than 3 times, that\'s probably a good sign that you need to automate it.\r\n		</span>\r\n		<span class=\"author\">\r\n			~ Anonymous\r\n		</span>\r\n	</div>\r\n\r\n	<p>\r\n		Task automation is one of the perks of being a programmer. That abilitty ability to write a script that will automate a task for you is really a life hack.\r\n	</p>\r\n\r\n	<p>\r\n		Whenever you\'re performing an operation which you normally do on a regular basis, it really helps to take sometime out of your day to write a script that can enable you complete that task much easier.\r\n	</p>\r\n\r\n	<p>\r\n		My personal favourite kind of scripts are project scaffolding scripts that can give you a starting template on a project based on particular tech stack. You could also check open source repos on <a href=\"https://github.com/topics/task-automation\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">GitHub</a> for scripts that already automate the task you\'re working on.\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		3. Take Regular Breaks\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-relaxation.jpg\" />\r\n	</p>\r\n\r\n	<div class=\"blockquote\">\r\n		<span class=\"content\">\r\n			Productivity per hour decline sharply when a person works more than 50 hours a week.\r\n		</span>\r\n		<span class=\"author\">\r\n			~ John Pencavel\r\n		</span>\r\n	</div>\r\n\r\n	<p>\r\n		As humans, we are designed to operate in blocks of time. Ideally, we are supposed to work and take regular breaks in-between. But what do we see today? In recent times, I see more people pushing forward endlessly without taking breaks.\r\n	</p>\r\n\r\n	<p>\r\n		To be honest, I used to be guilty of this in the past and I probably am still guilty about this up till this day. In the past I used to work endlessly without taking breaks and I often got frustrated when I ran into bugs I couldn\'t solve.\r\n	</p>\r\n\r\n	<p>\r\n		I switched my workflow to a dynamic pattern which works for me:\r\n	</p>\r\n\r\n	<p>\r\n		<ul>\r\n			<li>\r\n				Work until you get tired or start to plateau <i class=\"fa-regular fa-face-exhaling\"></i>.\r\n			</li>\r\n			<li>\r\n				When you do get tired or plateau, take a break and completely detach from work <i class=\"fa-solid fa-couch\"></i>.\r\n			</li>\r\n			<li>\r\n				In the meantime, you will subconsciously be working on the problem without knowing it <i class=\"fa-regular fa-face-thinking\"></i>.\r\n			</li>\r\n			<li>\r\n				After taking a break, get your hands dirty with the project once more <i class=\"fa-regular fa-face-smile\"></i>.\r\n			</li>\r\n			<li>\r\n				Still can\'t solve the issue? Google it <i class=\"fa-regular fa-face-grin-wink\"></i>!\r\n			</li>\r\n		</ul>\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		4. Use Hot Reload\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-hr.png\" />\r\n	</p>\r\n\r\n	<p>\r\n		If you\'re working on a web app or even a mobile app I believe it would really boost your productivity if you made use of a hot reloading manager in your development workflow. In recent times, most (if not all) mainstream javaScript frontend frameworks come with a hot reloading manager in-built.\r\n	</p>\r\n\r\n	<p>\r\n		Basically, a hot reloading manager, loads code changes into your dev environment. When working on web apps or sites, a hot reload manager syncs the changes you make in your codebase with your browser. \r\n	</p>\r\n\r\n	<p>\r\n		<ul class=\"ml-7\">\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://pypi.org/project/kaki/\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Kaki (Kivy)\r\n				</a>\r\n			</li>\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://vitejs.dev/\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Vite (Web apps)\r\n				</a>\r\n			</li>\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://webpack.js.org/\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Webpack (Web apps)\r\n				</a>\r\n			</li>\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://expo.dev/expo-go\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Expo Go (Mobile apps)\r\n				</a>\r\n			</li>\r\n		</ul>\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		5. Reinforce Good Habits\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-habits.jpg\" />\r\n	</p>\r\n\r\n	<p>\r\n		Good habits are especially important for developers to maintain. If you want to increase your productive as a developer you should reinforce good habits as well as adopt them from other successful people in the field. Some of the good habits I consider are:\r\n	</p>\r\n\r\n	<p>\r\n		<ul class=\"ml-7\">\r\n			<li class=\"list-disc\">Writing down your plans before actually getting on a computer</li>\r\n			<li class=\"list-disc\">Always commenting your code</li>\r\n			<li class=\"list-disc\">Writing good git commit messages</li>\r\n			<li class=\"list-disc\">Solving problems on your own then googling a solution</li>\r\n		</ul>\r\n	</p>\r\n\r\n	<p>\r\n		I belive that these habits listed above are wonderful when they become ingrained in a developer \r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		Conclusion\r\n	</h3>\r\n\r\n	<p>\r\n		These tips I put up are my personal opinion of how to maximize productivity your as a developer. These tips have helped my in my endeavors as a developer and I hope they\'ll be of benefit to you as well. \r\n	</p>\r\n\r\n</div>',4,8,'2022-08-15 04:29:09','2022-08-15 04:29:09',NULL),(9,'/uploads/productivity-banner.jpg','How To Boost Productivity As A Developer','Admin','food','Being a developer involves harmoniously combining various factors and technologies on a day-to-day basis in order to get work done. In this article I share 5 tips on how you can boost your workflow productivity.','how-to-boost-productivity-as-a-developer-8','draft','<div class=\"blog-post\">\r\n	<header>\r\n		<h2 class=\"heading-2\">\r\n			5 Ways To Boost Productivity As A Developer\r\n		</h2>\r\n	</header>\r\n\r\n	<p class=\"leader\">\r\n		Here\'s a medley of 5 methods you as a developer can use to boost your productivity\r\n	</p>\r\n\r\n	<div class=\"blockquote\">\r\n		<span class=\"content\">\r\n			Being a developer involves harmoniously combining various factors and technologies on a day-to-day basis in order to get work done. In this article I share 5 tips on how you can boost your workflow productivity\r\n		</span>\r\n	</div>\r\n\r\n	<h3 class=\"heading-3\">\r\n		What is Productivity?\r\n	</h3>\r\n\r\n	<p>\r\n		Productivity is the efficiency of production of goods or services expressed by some measure. Measurements of productivity are often expressed as a ratio of an aggregate output to a single input or an aggregate input used in a production process.\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		1. Regular Communication\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-comm.jpg\" />\r\n	</p>\r\n\r\n	<p>\r\n		As a developer, I know that we prefer the company of computers rather than people (at least that\'s the case for me). In the past, Whenever I\'m working on a project, I usually secluded myself up until the project I was working on was production-ready (or until I got to the testing phase). This wasn\'t a good habit and as you can imagine, I got several complaints on the issue from my clients.\r\n	</p>\r\n\r\n	<p>\r\n		Good communication is as essential skill to possess as a developer and you should definitely work towards regular communication with your clients and those around you. \r\n	</p>\r\n\r\n\r\n	<h3 class=\"heading-3\">\r\n		2. Automate Repetitive Tasks\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-automation.jpg\" />\r\n	</p>\r\n\r\n	<div class=\"blockquote\">\r\n		<span class=\"content\">\r\n			If you perform an operation more than 3 times, that\'s probably a good sign that you need to automate it.\r\n		</span>\r\n		<span class=\"author\">\r\n			~ Anonymous\r\n		</span>\r\n	</div>\r\n\r\n	<p>\r\n		Task automation is one of the perks of being a programmer. That abilitty ability to write a script that will automate a task for you is really a life hack.\r\n	</p>\r\n\r\n	<p>\r\n		Whenever you\'re performing an operation which you normally do on a regular basis, it really helps to take sometime out of your day to write a script that can enable you complete that task much easier.\r\n	</p>\r\n\r\n	<p>\r\n		My personal favourite kind of scripts are project scaffolding scripts that can give you a starting template on a project based on particular tech stack. You could also check open source repos on <a href=\"https://github.com/topics/task-automation\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">GitHub</a> for scripts that already automate the task you\'re working on.\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		3. Take Regular Breaks\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-relaxation.jpg\" />\r\n	</p>\r\n\r\n	<div class=\"blockquote\">\r\n		<span class=\"content\">\r\n			Productivity per hour decline sharply when a person works more than 50 hours a week.\r\n		</span>\r\n		<span class=\"author\">\r\n			~ John Pencavel\r\n		</span>\r\n	</div>\r\n\r\n	<p>\r\n		As humans, we are designed to operate in blocks of time. Ideally, we are supposed to work and take regular breaks in-between. But what do we see today? In recent times, I see more people pushing forward endlessly without taking breaks.\r\n	</p>\r\n\r\n	<p>\r\n		To be honest, I used to be guilty of this in the past and I probably am still guilty about this up till this day. In the past I used to work endlessly without taking breaks and I often got frustrated when I ran into bugs I couldn\'t solve.\r\n	</p>\r\n\r\n	<p>\r\n		I switched my workflow to a dynamic pattern which works for me:\r\n	</p>\r\n\r\n	<p>\r\n		<ul>\r\n			<li>\r\n				Work until you get tired or start to plateau <i class=\"fa-regular fa-face-exhaling\"></i>.\r\n			</li>\r\n			<li>\r\n				When you do get tired or plateau, take a break and completely detach from work <i class=\"fa-solid fa-couch\"></i>.\r\n			</li>\r\n			<li>\r\n				In the meantime, you will subconsciously be working on the problem without knowing it <i class=\"fa-regular fa-face-thinking\"></i>.\r\n			</li>\r\n			<li>\r\n				After taking a break, get your hands dirty with the project once more <i class=\"fa-regular fa-face-smile\"></i>.\r\n			</li>\r\n			<li>\r\n				Still can\'t solve the issue? Google it <i class=\"fa-regular fa-face-grin-wink\"></i>!\r\n			</li>\r\n		</ul>\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		4. Use Hot Reload\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-hr.png\" />\r\n	</p>\r\n\r\n	<p>\r\n		If you\'re working on a web app or even a mobile app I believe it would really boost your productivity if you made use of a hot reloading manager in your development workflow. In recent times, most (if not all) mainstream javaScript frontend frameworks come with a hot reloading manager in-built.\r\n	</p>\r\n\r\n	<p>\r\n		Basically, a hot reloading manager, loads code changes into your dev environment. When working on web apps or sites, a hot reload manager syncs the changes you make in your codebase with your browser. \r\n	</p>\r\n\r\n	<p>\r\n		<ul class=\"ml-7\">\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://pypi.org/project/kaki/\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Kaki (Kivy)\r\n				</a>\r\n			</li>\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://vitejs.dev/\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Vite (Web apps)\r\n				</a>\r\n			</li>\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://webpack.js.org/\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Webpack (Web apps)\r\n				</a>\r\n			</li>\r\n			<li class=\"list-disc\">\r\n				<a href=\"https://expo.dev/expo-go\" target=\"_blank\" class=\"hyperlink\" rel=\"noopener noreferrer\">\r\n					Expo Go (Mobile apps)\r\n				</a>\r\n			</li>\r\n		</ul>\r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		5. Reinforce Good Habits\r\n	</h3>\r\n\r\n	<p class=\"cover\">\r\n		<img src=\"/uploads/productivity-habits.jpg\" />\r\n	</p>\r\n\r\n	<p>\r\n		Good habits are especially important for developers to maintain. If you want to increase your productive as a developer you should reinforce good habits as well as adopt them from other successful people in the field. Some of the good habits I consider are:\r\n	</p>\r\n\r\n	<p>\r\n		<ul class=\"ml-7\">\r\n			<li class=\"list-disc\">Writing down your plans before actually getting on a computer</li>\r\n			<li class=\"list-disc\">Always commenting your code</li>\r\n			<li class=\"list-disc\">Writing good git commit messages</li>\r\n			<li class=\"list-disc\">Solving problems on your own then googling a solution</li>\r\n		</ul>\r\n	</p>\r\n\r\n	<p>\r\n		I belive that these habits listed above are wonderful when they become ingrained in a developer \r\n	</p>\r\n\r\n	<h3 class=\"heading-3\">\r\n		Conclusion\r\n	</h3>\r\n\r\n	<p>\r\n		These tips I put up are my personal opinion of how to maximize productivity your as a developer. These tips have helped my in my endeavors as a developer and I hope they\'ll be of benefit to you as well. \r\n	</p>\r\n\r\n</div>',4,9,'2022-08-15 04:29:09','2022-08-15 04:29:09',NULL);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_images`
--

DROP TABLE IF EXISTS `property_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `property_images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `listing_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `property_images_listing_id_foreign` (`listing_id`),
  CONSTRAINT `property_images_listing_id_foreign` FOREIGN KEY (`listing_id`) REFERENCES `property_listings` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_images`
--

LOCK TABLES `property_images` WRITE;
/*!40000 ALTER TABLE `property_images` DISABLE KEYS */;
INSERT INTO `property_images` VALUES (1,'1660566633.233911527062388 - Copy.jpeg',1,'2022-08-15 07:30:33','2022-08-15 07:30:33'),(2,'1660566633.233911527062388.jpeg',1,'2022-08-15 07:30:33','2022-08-15 07:30:33'),(3,'1660574659.233911527062388 - Copy.jpeg',2,'2022-08-15 09:44:19','2022-08-15 09:44:19'),(4,'1660574659.233911527062388.jpeg',2,'2022-08-15 09:44:19','2022-08-15 09:44:19');
/*!40000 ALTER TABLE `property_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_listings`
--

DROP TABLE IF EXISTS `property_listings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `property_listings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(252) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('home','commercial') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'home',
  `purpose` enum('sale','rent') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sale',
  `address` varchar(252) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` enum('active','sold Out','pending','unlist','rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `user_id` bigint(20) unsigned NOT NULL,
  `updated_by` bigint(20) unsigned DEFAULT NULL,
  `location` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `property_listings_user_id_foreign` (`user_id`),
  KEY `property_listings_updated_by_foreign` (`updated_by`),
  KEY `property_listings_location_foreign` (`location`),
  CONSTRAINT `property_listings_location_foreign` FOREIGN KEY (`location`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  CONSTRAINT `property_listings_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `property_listings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_listings`
--

LOCK TABLES `property_listings` WRITE;
/*!40000 ALTER TABLE `property_listings` DISABLE KEYS */;
INSERT INTO `property_listings` VALUES (1,'hwelll','home','sale','Bahria Town Lahore',12,1222222,'hyy','2022-08-15 07:30:33','2022-08-15 07:30:33',NULL,'active',9,NULL,18),(2,'hello world','commercial','sale','Bahria Town Lahore',122,122222223,'hello','2022-08-15 09:44:19','2022-08-15 09:44:19',NULL,'active',9,NULL,2);
/*!40000 ALTER TABLE `property_listings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,3),(2,3),(3,3),(4,3),(5,3),(6,3),(7,3),(8,3);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'User','web',NULL,NULL),(2,'Agent','web',NULL,NULL),(3,'Admin','web',NULL,NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES ('gaming','2022-08-15 04:29:06','2022-08-15 04:29:06'),('tech','2022-08-15 04:29:06','2022-08-15 04:29:06');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(252) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cell_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_status` enum('active','inactive','blocked','archived') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) unsigned DEFAULT NULL,
  `updated_by` bigint(20) unsigned DEFAULT NULL,
  `deleted_by` bigint(20) unsigned DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` bigint(20) unsigned NOT NULL,
  `country_id` bigint(20) unsigned NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_cell_no_unique` (`cell_no`),
  KEY `users_created_by_foreign` (`created_by`),
  KEY `users_updated_by_foreign` (`updated_by`),
  KEY `users_deleted_by_foreign` (`deleted_by`),
  KEY `users_city_id_foreign` (`city_id`),
  KEY `users_country_id_foreign` (`country_id`),
  CONSTRAINT `users_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  CONSTRAINT `users_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  CONSTRAINT `users_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `users_deleted_by_foreign` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `users_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'User','user@gmail.com','03091312025','$2y$10$LMm6vu3.vFzWrqmulFgr4ephN5RUFO4B.xm3SuYhCZSxhXJhnulha','active','2022-08-15 04:29:02','2022-08-15 04:29:02',NULL,1,1,NULL,NULL,2,162,NULL,NULL,NULL),(2,'User3','user3@gmail.com','03091312023','$2y$10$yIx0QgKUK.PmD6nXHIrGLehSX2baFYmGUQWjbsfkuSndvLhGLX5I2','active','2022-08-15 04:29:02','2022-08-15 04:29:03',NULL,2,2,NULL,NULL,2,162,NULL,NULL,NULL),(3,'User4','user4@gmail.com','03091312024','$2y$10$FnviQwnoxtLlLU5fccGCu.K/87XYxl3d62.4wseTmYzb559.JLWBG','active','2022-08-15 04:29:03','2022-08-15 04:29:03',NULL,3,3,NULL,NULL,2,162,NULL,NULL,NULL),(4,'User5','user5@gmail.com','03091312055','$2y$10$JNgee89.1ttfWnNFI67wOuhu.8EsYKU3C7uQwI3r6IIU5uJXzOe8W','active','2022-08-15 04:29:03','2022-08-15 04:29:03',NULL,4,4,NULL,NULL,2,162,NULL,NULL,NULL),(5,'User6','user6@gmail.com','03091312066','$2y$10$9dOF/5u8bf1IxldgI8RGWO04VoKs/1FvyTl7F8kvJ.sK5xiUZb5fu','active','2022-08-15 04:29:03','2022-08-15 04:29:03',NULL,5,5,NULL,NULL,2,162,NULL,NULL,NULL),(6,'User7','user7@gmail.com','03091312077','$2y$10$XDbzYqhDnd0KKd1IFzfcWOYWNY3xyL1rPHbbGk8LZGpfxh7SYjUMq','active','2022-08-15 04:29:04','2022-08-15 04:29:04',NULL,6,6,NULL,NULL,2,162,NULL,NULL,NULL),(7,'User8','user8@gmail.com','03091312088','$2y$10$mOcK5McRov5/MY6Eh2FiFutpTYSumZyNLPU0boK0YtqshAWCkoMsG','active','2022-08-15 04:29:04','2022-08-15 04:29:04',NULL,7,7,NULL,NULL,2,162,NULL,NULL,NULL),(8,'Agent','Agent@gmail.com','03091312026','$2y$10$dgtINRS7TJsH7JVbtihwwu8dVy.vmWn/emlkSs2.9903FoJWqCa0C','active','2022-08-15 04:29:04','2022-08-15 04:29:04',NULL,8,8,NULL,NULL,2,162,NULL,NULL,NULL),(9,'Admin','Admin@gmail.com','03394312113','$2y$10$/Ui22cjFSAlGbSc5ZdEdu.ehUs8Z7sw5yAFzxfqNhdq8P9SxIEjXK','active','2022-08-15 04:29:04','2022-08-15 04:29:04',NULL,9,9,NULL,NULL,2,162,NULL,NULL,NULL),(10,'Nelle Booth','muqe@mailinator.com','+1 (679) 569-7278','$2y$10$pK1DcpC4Z.cvXZN/Qas1P.DXN9StLwjfDxsd789E/SscBwh4QQEeS','active','2022-08-15 05:45:28','2022-08-15 05:45:28',NULL,10,NULL,NULL,'1660560328.jpeg',18,162,NULL,NULL,NULL),(11,'Mira Sullivan','nedeby@mailinator.com','+1 (745) 583-3301','$2y$10$lMzM./KG4m5LS3K3EPafyuYNwMQppZpevHMM9cs8zpP27c7h.6wku','active','2022-08-15 05:46:09','2022-08-15 05:46:09',NULL,11,NULL,NULL,'1660560369.jpeg',4,162,NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-08-15 19:49:52
