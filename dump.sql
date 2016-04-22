-- MySQL dump 10.13  Distrib 5.7.9, for linux-glibc2.5 (x86_64)
--
-- Host: 127.0.0.1    Database: wsdl
-- ------------------------------------------------------
-- Server version	5.6.28-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_04_08_090926_create_projects_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wsdl_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wsdl_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dir_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `projects_user_id_foreign` (`user_id`),
  CONSTRAINT `projects_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (2,1,'test','web-service-1-5.wsdl','/home/user/ws/php/wsdl-service/storage/wsdl/1','2016-04-12 10:09:55','2016-04-12 10:09:55',''),(3,2,'new project','web-service-1-4.wsdl','/home/user/ws/php/wsdl-service/storage/wsdl/2/a847410f060dec8270a8eabf242cf45b','2016-04-18 04:34:15','2016-04-18 04:34:15','a847410f060dec8270a8eabf242cf45b'),(4,2,'super project','web-service-1-4.wsdl','/home/user/ws/php/wsdl-service/storage/wsdl/2/0af60202','2016-04-18 06:37:15','2016-04-18 06:37:15','0af60202');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requests`
--

DROP TABLE IF EXISTS `requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `body` text COLLATE utf8_unicode_ci,
  `time` int(40) NOT NULL,
  `service` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `project_id` int(11) DEFAULT '0',
  `resolved` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `soap_action` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `request_code` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `response_object` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requests`
--

LOCK TABLES `requests` WRITE;
/*!40000 ALTER TABLE `requests` DISABLE KEYS */;
INSERT INTO `requests` VALUES (1,'<soap:Envelope xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\"><soap:Header><ns1:serviceAuth xmlns:ns1=\"urn:tnwebservice\"><ns1:key>123123 # On production server use Jasypt encrypted value with ENC(...)</ns1:key></ns1:serviceAuth></soap:Header><soap:Body><ns1:allowOrderDeliveryObject xmlns:ns1=\"urn:tnwebservice\"><ns1:order_number>500000222</ns1:order_number><ns1:comment></ns1:comment><ns1:request_code>398</ns1:request_code></ns1:allowOrderDeliveryObject></soap:Body></soap:Envelope>',1461331639,'urn:tnwebservice',4,'0','2016-04-22 10:27:21','2016-04-22 10:29:08','allowOrderDelivery','398',NULL),(2,'<soap:Envelope xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\"><soap:Header><ns1:serviceAuth xmlns:ns1=\"urn:tnwebservice\"><ns1:key>123123 # On production server use Jasypt encrypted value with ENC(...)</ns1:key></ns1:serviceAuth></soap:Header><soap:Body><ns1:allowOrderDeliveryObject xmlns:ns1=\"urn:tnwebservice\"><ns1:order_number>500000222</ns1:order_number><ns1:comment></ns1:comment><ns1:request_code>399</ns1:request_code></ns1:allowOrderDeliveryObject></soap:Body></soap:Envelope>',1461332168,'urn:tnwebservice',4,'0','2016-04-22 10:36:09','2016-04-22 10:36:42','allowOrderDelivery','399',NULL),(3,'<x:Envelope xmlns:x=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:urn=\"urn:tnwebservice\">\n    <x:Header>\n        <urn:serviceAuth>\n            <urn:key>?</urn:key>\n        </urn:serviceAuth>\n    </x:Header>\n    <x:Body>\n        <urn:allowOrderDeliveryObject>\n            <urn:order_number>1</urn:order_number>\n            <urn:comment>?</urn:comment>\n            <urn:request_code>152</urn:request_code>\n        </urn:allowOrderDeliveryObject>\n    </x:Body>\n</x:Envelope>',1461334732,'urn:tnwebservice',0,'0','2016-04-22 11:34:47','2016-04-22 11:34:47','allowOrderDelivery','152',NULL);
/*!40000 ALTER TABLE `requests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `responses`
--

DROP TABLE IF EXISTS `responses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `responses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `body` text COLLATE utf8_unicode_ci,
  `time` int(40) NOT NULL,
  `service` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `project_id` int(11) DEFAULT '0',
  `resolved` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `soap_action` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `request_code` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `response_object` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responses`
--

LOCK TABLES `responses` WRITE;
/*!40000 ALTER TABLE `responses` DISABLE KEYS */;
INSERT INTO `responses` VALUES (1,NULL,0,NULL,4,'0','2016-04-22 10:29:08','2016-04-22 10:29:08',NULL,'398','OrderDeliveryAllowance'),(2,NULL,0,NULL,4,'0','2016-04-22 10:36:42','2016-04-22 10:36:42',NULL,'399','OrderDeliveryAllowance');
/*!40000 ALTER TABLE `responses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'test','test@test.ru','$2y$10$pN7HOU/a.Okm.P1wUfLVKe/hYyvff3bk9s8YIS2qjY6Fw2cf4M6OC','Y6T6f4zIRtwWW2q8Dt4eDr0Xn7dLjmf5msr0NpNXLVnaaaPywmrRhuDiqm4N','2016-04-08 06:00:40','2016-04-18 04:27:19'),(2,'another','another@another.ru','$2y$10$S0Shq4F9ZBl6.D92gV5GeOCtALGIyXZqKNSkzLME0OLihcVQJPoUG','hiTY29UPMhUEUS7a7YInWUeDcYMmat3736vDqtHa1LmJKt1fNWIJmkTswloL','2016-04-18 04:27:48','2016-04-18 09:23:50');
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

-- Dump completed on 2016-04-22 19:07:48
