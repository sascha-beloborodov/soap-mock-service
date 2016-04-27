-- MySQL dump 10.13  Distrib 5.7.9, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: wsdl
-- ------------------------------------------------------
-- Server version	5.6.30-0ubuntu0.14.04.1

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
  `wsdl_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `projects_user_id_foreign` (`user_id`),
  CONSTRAINT `projects_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,2,'my_project','web-service-1-4.wsdl','/home/user/ws/php/wsdl-service/storage/wsdl/2/0b0b01fc','2016-04-27 05:09:49','2016-04-27 05:09:49','0b0b01fc','http://wsdl-client.loc/wsdl/2/0b0b01fc/web-service-1-4.wsdl'),(2,2,'nullable','web-service-1-4.wsdl','/home/user/ws/php/wsdl-service/storage/wsdl/2/0b540215','2016-04-27 09:31:53','2016-04-27 09:31:53','0b540215','http://http://wsdl-client.loc/wsdl/2/0b540215/web-service-1-4.wsdl');
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requests`
--

LOCK TABLES `requests` WRITE;
/*!40000 ALTER TABLE `requests` DISABLE KEYS */;
INSERT INTO `requests` VALUES (1,'<soap:Envelope xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\"><soap:Header><ns1:serviceAuth xmlns:ns1=\"urn:tnwebservice\"><ns1:key>123123 # On production server use Jasypt encrypted value with ENC(...)</ns1:key></ns1:serviceAuth></soap:Header><soap:Body><ns1:submitOrderObject xmlns:ns1=\"urn:tnwebservice\"><ns1:order_number>500000206</ns1:order_number><ns1:order_date>14.02.2016</ns1:order_date><ns1:last_name>Гринько</ns1:last_name><ns1:first_name>Дмитрий</ns1:first_name><ns1:phone>+7 (322) 323-23-22</ns1:phone><ns1:dispatch_date>29.02.2016</ns1:dispatch_date><ns1:transport>22</ns1:transport><ns1:addresses><ns1:item><ns1:latitude>55.600201</ns1:latitude><ns1:longitude>37.165765</ns1:longitude><ns1:address>\nРоссия,\n\nМосква, Город Москва,\nулица: Ленина,\nдом: 1,\nквартира: 23.\n</ns1:address><ns1:delivery_date>29.02.2016</ns1:delivery_date><ns1:loading_method>2</ns1:loading_method><ns1:items><ns1:item><ns1:warehouse>00003</ns1:warehouse><ns1:product>TN362079</ns1:product><ns1:qty>111.0000</ns1:qty><ns1:measure_unit>CB081864</ns1:measure_unit><ns1:price>7200.0000</ns1:price><ns1:total>799200.0000</ns1:total></ns1:item><ns1:item><ns1:warehouse>00268</ns1:warehouse><ns1:product>TN352707</ns1:product><ns1:qty>11.0000</ns1:qty><ns1:measure_unit>CB025817</ns1:measure_unit><ns1:price>2265.0000</ns1:price><ns1:total>24915.0000</ns1:total></ns1:item><ns1:item><ns1:warehouse>00226</ns1:warehouse><ns1:product>TN387899</ns1:product><ns1:qty>2.0000</ns1:qty><ns1:measure_unit>CB175052</ns1:measure_unit><ns1:price>3310.0000</ns1:price><ns1:total>6620.0000</ns1:total></ns1:item></ns1:items></ns1:item></ns1:addresses><ns1:services><ns1:item><ns1:service>TN525168</ns1:service><ns1:qty>1</ns1:qty><ns1:price>13000</ns1:price><ns1:total>13000</ns1:total></ns1:item><ns1:item><ns1:service>TN525163</ns1:service><ns1:qty>1</ns1:qty><ns1:price>1000</ns1:price><ns1:total>1000</ns1:total></ns1:item></ns1:services><ns1:request_code>407</ns1:request_code></ns1:submitOrderObject></soap:Body></soap:Envelope>',1461745773,'urn:tnwebservice',0,'0','2016-04-27 05:29:33','2016-04-27 05:29:33','submitOrder','407',NULL),(2,'<soap:Envelope xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\"><soap:Header><ns1:serviceAuth xmlns:ns1=\"urn:tnwebservice\"><ns1:key>123123 # On production server use Jasypt encrypted value with ENC(...)</ns1:key></ns1:serviceAuth></soap:Header><soap:Body><ns1:submitOrderObject xmlns:ns1=\"urn:tnwebservice\"><ns1:order_number>500000206</ns1:order_number><ns1:order_date>14.02.2016</ns1:order_date><ns1:last_name>Гринько</ns1:last_name><ns1:first_name>Дмитрий</ns1:first_name><ns1:phone>+7 (322) 323-23-22</ns1:phone><ns1:dispatch_date>29.02.2016</ns1:dispatch_date><ns1:transport>22</ns1:transport><ns1:addresses><ns1:item><ns1:latitude>55.600201</ns1:latitude><ns1:longitude>37.165765</ns1:longitude><ns1:address>\nРоссия,\n\nМосква, Город Москва,\nулица: Ленина,\nдом: 1,\nквартира: 23.\n</ns1:address><ns1:delivery_date>29.02.2016</ns1:delivery_date><ns1:loading_method>2</ns1:loading_method><ns1:items><ns1:item><ns1:warehouse>00003</ns1:warehouse><ns1:product>TN362079</ns1:product><ns1:qty>111.0000</ns1:qty><ns1:measure_unit>CB081864</ns1:measure_unit><ns1:price>7200.0000</ns1:price><ns1:total>799200.0000</ns1:total></ns1:item><ns1:item><ns1:warehouse>00268</ns1:warehouse><ns1:product>TN352707</ns1:product><ns1:qty>11.0000</ns1:qty><ns1:measure_unit>CB025817</ns1:measure_unit><ns1:price>2265.0000</ns1:price><ns1:total>24915.0000</ns1:total></ns1:item><ns1:item><ns1:warehouse>00226</ns1:warehouse><ns1:product>TN387899</ns1:product><ns1:qty>2.0000</ns1:qty><ns1:measure_unit>CB175052</ns1:measure_unit><ns1:price>3310.0000</ns1:price><ns1:total>6620.0000</ns1:total></ns1:item></ns1:items></ns1:item></ns1:addresses><ns1:services><ns1:item><ns1:service>TN525168</ns1:service><ns1:qty>1</ns1:qty><ns1:price>13000</ns1:price><ns1:total>13000</ns1:total></ns1:item><ns1:item><ns1:service>TN525163</ns1:service><ns1:qty>1</ns1:qty><ns1:price>1000</ns1:price><ns1:total>1000</ns1:total></ns1:item></ns1:services><ns1:request_code>407</ns1:request_code></ns1:submitOrderObject></soap:Body></soap:Envelope>',1461745784,'urn:tnwebservice',1,'0','2016-04-27 05:29:44','2016-04-27 05:30:03','submitOrder','407',NULL),(3,'<soap:Envelope xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\"><soap:Header><ns1:serviceAuth xmlns:ns1=\"urn:tnwebservice\"><ns1:key>123123 # On production server use Jasypt encrypted value with ENC(...)</ns1:key></ns1:serviceAuth></soap:Header><soap:Body><ns1:submitPlanningDepartmentRequest xmlns:ns1=\"urn:tnwebservice\"><ns1:order_number>500000222</ns1:order_number><ns1:dispatch_date>25.02.2016</ns1:dispatch_date><ns1:request_code>408</ns1:request_code></ns1:submitPlanningDepartmentRequest></soap:Body></soap:Envelope>',1461746625,'urn:tnwebservice',1,'0','2016-04-27 05:43:45','2016-04-27 05:44:07','submitPlanningDepartmentRequest','408',NULL),(4,'<soap:Envelope xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\"><soap:Header><ns1:serviceAuth xmlns:ns1=\"urn:tnwebservice\"><ns1:key>123123 # On production server use Jasypt encrypted value with ENC(...)</ns1:key></ns1:serviceAuth></soap:Header><soap:Body><ns1:submitPlanningDepartmentRequest xmlns:ns1=\"urn:tnwebservice\"><ns1:order_number>500000222</ns1:order_number><ns1:dispatch_date>25.02.2016</ns1:dispatch_date><ns1:request_code>408</ns1:request_code></ns1:submitPlanningDepartmentRequest></soap:Body></soap:Envelope>',1461746636,'urn:tnwebservice',0,'0','2016-04-27 05:43:56','2016-04-27 05:43:56','submitPlanningDepartmentRequest','408',NULL),(5,'<soap:Envelope xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\"><soap:Header><ns1:serviceAuth xmlns:ns1=\"urn:tnwebservice\"><ns1:key>123123 # On production server use Jasypt encrypted value with ENC(...)</ns1:key></ns1:serviceAuth></soap:Header><soap:Body><ns1:cancelOrderObject xmlns:ns1=\"urn:tnwebservice\"><ns1:order_number>500000205</ns1:order_number><ns1:request_code>409</ns1:request_code></ns1:cancelOrderObject></soap:Body></soap:Envelope>',1461756637,'urn:tnwebservice',0,'0','2016-04-27 08:30:37','2016-04-27 08:30:37','cancelOrder','409',NULL),(6,'<soap:Envelope xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\"><soap:Header><ns1:serviceAuth xmlns:ns1=\"urn:tnwebservice\"><ns1:key>123123 # On production server use Jasypt encrypted value with ENC(...)</ns1:key></ns1:serviceAuth></soap:Header><soap:Body><ns1:cancelOrderObject xmlns:ns1=\"urn:tnwebservice\"><ns1:order_number>500000205</ns1:order_number><ns1:request_code>409</ns1:request_code></ns1:cancelOrderObject></soap:Body></soap:Envelope>',1461756656,'urn:tnwebservice',1,'0','2016-04-27 08:30:56','2016-04-27 08:32:25','cancelOrder','409',NULL),(7,'<soap:Envelope xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\"><soap:Header><ns1:serviceAuth xmlns:ns1=\"urn:tnwebservice\"><ns1:key>123123 # On production server use Jasypt encrypted value with ENC(...)</ns1:key></ns1:serviceAuth></soap:Header><soap:Body><ns1:allowOrderDeliveryObject xmlns:ns1=\"urn:tnwebservice\"><ns1:order_number>500000205</ns1:order_number><ns1:comment></ns1:comment><ns1:request_code>412</ns1:request_code></ns1:allowOrderDeliveryObject></soap:Body></soap:Envelope>',1461757194,'urn:tnwebservice',0,'0','2016-04-27 08:39:54','2016-04-27 08:39:54','allowOrderDelivery','412',NULL),(8,'<soap:Envelope xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\"><soap:Header><ns1:serviceAuth xmlns:ns1=\"urn:tnwebservice\"><ns1:key>123123 # On production server use Jasypt encrypted value with ENC(...)</ns1:key></ns1:serviceAuth></soap:Header><soap:Body><ns1:allowOrderDeliveryObject xmlns:ns1=\"urn:tnwebservice\"><ns1:order_number>500000205</ns1:order_number><ns1:comment></ns1:comment><ns1:request_code>412</ns1:request_code></ns1:allowOrderDeliveryObject></soap:Body></soap:Envelope>',1461757206,'urn:tnwebservice',1,'0','2016-04-27 08:40:06','2016-04-27 08:41:20','allowOrderDelivery','412',NULL),(9,'<soap:Envelope xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\"><soap:Header><ns1:serviceAuth xmlns:ns1=\"urn:tnwebservice\"><ns1:key>123123 # On production server use Jasypt encrypted value with ENC(...)</ns1:key></ns1:serviceAuth></soap:Header><soap:Body><ns1:submitOrderDeliveryInfoObject xmlns:ns1=\"urn:tnwebservice\"><ns1:order_number>500000205</ns1:order_number><ns1:dispatch_date>16.02.2016</ns1:dispatch_date><ns1:addresses><ns1:item><ns1:latitude>54.114463</ns1:latitude><ns1:longitude>37.563853</ns1:longitude><ns1:address>\nРоссия,\n\nТула, Тульская Область,\nулица: Новая,\nдом: 1,\nквартира: 1.\n</ns1:address><ns1:delivery_date>16.02.2016</ns1:delivery_date></ns1:item></ns1:addresses><ns1:request_code>415</ns1:request_code></ns1:submitOrderDeliveryInfoObject></soap:Body></soap:Envelope>',1461757694,'urn:tnwebservice',0,'0','2016-04-27 08:48:14','2016-04-27 08:48:14','submitOrderDeliveryInfo','415',NULL),(10,'<soap:Envelope xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\"><soap:Header><ns1:serviceAuth xmlns:ns1=\"urn:tnwebservice\"><ns1:key>123123 # On production server use Jasypt encrypted value with ENC(...)</ns1:key></ns1:serviceAuth></soap:Header><soap:Body><ns1:submitOrderDeliveryInfoObject xmlns:ns1=\"urn:tnwebservice\"><ns1:order_number>500000205</ns1:order_number><ns1:dispatch_date>16.02.2016</ns1:dispatch_date><ns1:addresses><ns1:item><ns1:latitude>54.114463</ns1:latitude><ns1:longitude>37.563853</ns1:longitude><ns1:address>\nРоссия,\n\nТула, Тульская Область,\nулица: Новая,\nдом: 1,\nквартира: 1.\n</ns1:address><ns1:delivery_date>16.02.2016</ns1:delivery_date></ns1:item></ns1:addresses><ns1:request_code>415</ns1:request_code></ns1:submitOrderDeliveryInfoObject></soap:Body></soap:Envelope>',1461757707,'urn:tnwebservice',1,'0','2016-04-27 08:48:27','2016-04-27 08:48:58','submitOrderDeliveryInfo','415',NULL),(11,'<soap:Envelope xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\"><soap:Header><ns1:serviceAuth xmlns:ns1=\"urn:tnwebservice\"><ns1:key>123123 # On production server use Jasypt encrypted value with ENC(...)</ns1:key></ns1:serviceAuth></soap:Header><soap:Body><ns1:submitPlanningDepartmentRequest xmlns:ns1=\"urn:tnwebservice\"><ns1:order_number>500000205</ns1:order_number><ns1:dispatch_date>16.02.2016</ns1:dispatch_date><ns1:request_code>416</ns1:request_code></ns1:submitPlanningDepartmentRequest></soap:Body></soap:Envelope>',1461758658,'urn:tnwebservice',0,'0','2016-04-27 09:04:19','2016-04-27 09:04:19','submitPlanningDepartmentRequest','416',NULL),(12,'<soap:Envelope xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\"><soap:Header><ns1:serviceAuth xmlns:ns1=\"urn:tnwebservice\"><ns1:key>123123 # On production server use Jasypt encrypted value with ENC(...)</ns1:key></ns1:serviceAuth></soap:Header><soap:Body><ns1:submitPlanningDepartmentRequest xmlns:ns1=\"urn:tnwebservice\"><ns1:order_number>500000205</ns1:order_number><ns1:dispatch_date>16.02.2016</ns1:dispatch_date><ns1:request_code>416</ns1:request_code></ns1:submitPlanningDepartmentRequest></soap:Body></soap:Envelope>',1461758672,'urn:tnwebservice',1,'0','2016-04-27 09:04:32','2016-04-27 09:04:55','submitPlanningDepartmentRequest','416',NULL),(13,'<soap:Envelope xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\"><soap:Header><ns1:serviceAuth xmlns:ns1=\"urn:tnwebservice\"><ns1:key>123123 # On production server use Jasypt encrypted value with ENC(...)</ns1:key></ns1:serviceAuth></soap:Header><soap:Body><ns1:submitOrderObject xmlns:ns1=\"urn:tnwebservice\"><ns1:order_number>500000205</ns1:order_number><ns1:order_date>14.02.2016</ns1:order_date><ns1:last_name>Рыжов</ns1:last_name><ns1:first_name>Сергей</ns1:first_name><ns1:phone>+7 (952) 566-75-69</ns1:phone><ns1:dispatch_date>16.02.2016</ns1:dispatch_date><ns1:transport>22</ns1:transport><ns1:addresses><ns1:item><ns1:latitude>54.114463</ns1:latitude><ns1:longitude>37.563853</ns1:longitude><ns1:address>\nРоссия,\n\nТула, Тульская Область,\nулица: Новая,\nдом: 1,\nквартира: 1.\n</ns1:address><ns1:delivery_date>16.02.2016</ns1:delivery_date><ns1:loading_method>1</ns1:loading_method><ns1:items><ns1:item><ns1:warehouse>00011</ns1:warehouse><ns1:product>TN395727</ns1:product><ns1:qty>100.0000</ns1:qty><ns1:measure_unit>CB220503</ns1:measure_unit><ns1:price>3267.0000</ns1:price><ns1:total>326700.0000</ns1:total></ns1:item><ns1:item><ns1:warehouse>00007</ns1:warehouse><ns1:product>TN365338</ns1:product><ns1:qty>100.0000</ns1:qty><ns1:measure_unit>CB341497</ns1:measure_unit><ns1:price>1428.0000</ns1:price><ns1:total>142800.0000</ns1:total></ns1:item><ns1:item><ns1:warehouse>00221</ns1:warehouse><ns1:product>TN421030</ns1:product><ns1:qty>100.0000</ns1:qty><ns1:measure_unit>CB294316</ns1:measure_unit><ns1:price>696.0000</ns1:price><ns1:total>69600.0000</ns1:total></ns1:item></ns1:items></ns1:item></ns1:addresses><ns1:services><ns1:item><ns1:service>TN525168</ns1:service><ns1:qty>1</ns1:qty><ns1:price>14000</ns1:price><ns1:total>14000</ns1:total></ns1:item><ns1:item><ns1:service>TN525167</ns1:service><ns1:qty>1</ns1:qty><ns1:price>500</ns1:price><ns1:total>500</ns1:total></ns1:item></ns1:services><ns1:request_code>417</ns1:request_code></ns1:submitOrderObject></soap:Body></soap:Envelope>',1461759131,'urn:tnwebservice',0,'0','2016-04-27 09:12:11','2016-04-27 09:12:11','submitOrder','417',NULL),(14,'<soap:Envelope xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\"><soap:Header><ns1:serviceAuth xmlns:ns1=\"urn:tnwebservice\"><ns1:key>123123 # On production server use Jasypt encrypted value with ENC(...)</ns1:key></ns1:serviceAuth></soap:Header><soap:Body><ns1:submitOrderObject xmlns:ns1=\"urn:tnwebservice\"><ns1:order_number>500000205</ns1:order_number><ns1:order_date>14.02.2016</ns1:order_date><ns1:last_name>Рыжов</ns1:last_name><ns1:first_name>Сергей</ns1:first_name><ns1:phone>+7 (952) 566-75-69</ns1:phone><ns1:dispatch_date>16.02.2016</ns1:dispatch_date><ns1:transport>22</ns1:transport><ns1:addresses><ns1:item><ns1:latitude>54.114463</ns1:latitude><ns1:longitude>37.563853</ns1:longitude><ns1:address>\nРоссия,\n\nТула, Тульская Область,\nулица: Новая,\nдом: 1,\nквартира: 1.\n</ns1:address><ns1:delivery_date>16.02.2016</ns1:delivery_date><ns1:loading_method>1</ns1:loading_method><ns1:items><ns1:item><ns1:warehouse>00011</ns1:warehouse><ns1:product>TN395727</ns1:product><ns1:qty>100.0000</ns1:qty><ns1:measure_unit>CB220503</ns1:measure_unit><ns1:price>3267.0000</ns1:price><ns1:total>326700.0000</ns1:total></ns1:item><ns1:item><ns1:warehouse>00007</ns1:warehouse><ns1:product>TN365338</ns1:product><ns1:qty>100.0000</ns1:qty><ns1:measure_unit>CB341497</ns1:measure_unit><ns1:price>1428.0000</ns1:price><ns1:total>142800.0000</ns1:total></ns1:item><ns1:item><ns1:warehouse>00221</ns1:warehouse><ns1:product>TN421030</ns1:product><ns1:qty>100.0000</ns1:qty><ns1:measure_unit>CB294316</ns1:measure_unit><ns1:price>696.0000</ns1:price><ns1:total>69600.0000</ns1:total></ns1:item></ns1:items></ns1:item></ns1:addresses><ns1:services><ns1:item><ns1:service>TN525168</ns1:service><ns1:qty>1</ns1:qty><ns1:price>14000</ns1:price><ns1:total>14000</ns1:total></ns1:item><ns1:item><ns1:service>TN525167</ns1:service><ns1:qty>1</ns1:qty><ns1:price>500</ns1:price><ns1:total>500</ns1:total></ns1:item></ns1:services><ns1:request_code>417</ns1:request_code></ns1:submitOrderObject></soap:Body></soap:Envelope>',1461759144,'urn:tnwebservice',1,'0','2016-04-27 09:12:24','2016-04-27 09:14:41','submitOrder','417',NULL);
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
  `response_value` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responses`
--

LOCK TABLES `responses` WRITE;
/*!40000 ALTER TABLE `responses` DISABLE KEYS */;
INSERT INTO `responses` VALUES (1,NULL,0,NULL,1,'0','2016-04-27 05:30:39','2016-04-27 05:30:39',NULL,'407','OrderPlanStatus','{\"order_number\":\"500000206\",\"status\":\"OK\",\"vat_amount\":\"110101\",\"purchase_guarantee_date\":\"12.02.2016\",\"items\":\"\",\"services\":\"\",\"class_name\":\"OrderPlanStatus\",\"entity\":[],\"properties\":[{\"name\":\"order_number\",\"type\":\"string\",\"val\":\"\"},{\"name\":\"status\",\"type\":\"OrderPlanStatusValue\",\"val\":\"\"},{\"name\":\"vat_amount\",\"type\":\"float\",\"val\":\"\"},{\"name\":\"purchase_guarantee_date\",\"type\":\"string\",\"val\":\"\"},{\"name\":\"items\",\"type\":\"ArrayOfOrderPlanStatusItem\",\"val\":\"\"},{\"name\":\"services\",\"type\":\"ArrayOfOrderPlanStatusService\",\"val\":\"\"}],\"subEntities\":{\"ArrayOfOrderPlanStatusService\":[{\"class_name\":\"OrderPlanStatusService\",\"entity\":[],\"properties\":[{\"name\":\"service\",\"type\":\"string\",\"val\":\"service\"},{\"name\":\"vat_rate\",\"type\":\"string\",\"val\":\"service\"},{\"name\":\"vat_amount\",\"type\":\"float\",\"val\":\"13123\"}]},{\"class_name\":\"OrderPlanStatusService\",\"entity\":[],\"properties\":[{\"name\":\"service\",\"type\":\"string\",\"val\":\"service232\"},{\"name\":\"vat_rate\",\"type\":\"string\",\"val\":\"service223\"},{\"name\":\"vat_amount\",\"type\":\"float\",\"val\":\"3113123\"}]}]}}'),(2,NULL,0,NULL,1,'0','2016-04-27 05:47:57','2016-04-27 05:47:57',NULL,'408','PlanningDepartmentAnswer','{\"order_number\":\"500000222\",\"is_answered\":\"1\",\"items\":\"\",\"class_name\":\"PlanningDepartmentAnswer\",\"entity\":[],\"properties\":[{\"name\":\"order_number\",\"type\":\"string\",\"val\":\"\"},{\"name\":\"is_answered\",\"type\":\"boolean\",\"val\":\"\"},{\"name\":\"items\",\"type\":\"ArrayOfPlanningDepartmentAnswerItem\",\"val\":\"\"}],\"subEntities\":{\"ArrayOfPlanningDepartmentAnswerItem\":[{\"class_name\":\"PlanningDepartmentAnswerItem\",\"entity\":[],\"properties\":[{\"name\":\"product\",\"type\":\"string\",\"val\":\"TN352609\"},{\"name\":\"dispatch_date\",\"type\":\"string\",\"val\":\"29.09.1982\"},{\"name\":\"comment\",\"type\":\"string\",\"val\":\"kjhasdkfdasfdsa\"}]}]}}'),(3,NULL,0,NULL,1,'0','2016-04-27 08:34:47','2016-04-27 08:34:47',NULL,'409','OrderPlanStatus','{\"order_number\":\"500000205\",\"status\":\"OK\",\"vat_amount\":\"11111\",\"purchase_guarantee_date\":\"12.02.2016\",\"items\":\"\",\"services\":\"\",\"class_name\":\"OrderPlanStatus\",\"entity\":[],\"properties\":[{\"name\":\"order_number\",\"type\":\"string\",\"val\":\"\"},{\"name\":\"status\",\"type\":\"OrderPlanStatusValue\",\"val\":\"\"},{\"name\":\"vat_amount\",\"type\":\"float\",\"val\":\"\"},{\"name\":\"purchase_guarantee_date\",\"type\":\"string\",\"val\":\"\"},{\"name\":\"items\",\"type\":\"ArrayOfOrderPlanStatusItem\",\"val\":\"\"},{\"name\":\"services\",\"type\":\"ArrayOfOrderPlanStatusService\",\"val\":\"\"}],\"subEntities\":{\"ArrayOfOrderPlanStatusService\":[{\"class_name\":\"OrderPlanStatusService\",\"entity\":[],\"properties\":[{\"name\":\"service\",\"type\":\"string\",\"val\":\"ser\"},{\"name\":\"vat_rate\",\"type\":\"string\",\"val\":\"ser\"},{\"name\":\"vat_amount\",\"type\":\"float\",\"val\":\"123\"}]},{\"class_name\":\"OrderPlanStatusService\",\"entity\":[],\"properties\":[{\"name\":\"service\",\"type\":\"string\",\"val\":\"ser1\"},{\"name\":\"vat_rate\",\"type\":\"string\",\"val\":\"ser1\"},{\"name\":\"vat_amount\",\"type\":\"float\",\"val\":\"123123\"}]}]}}'),(4,NULL,0,NULL,1,'0','2016-04-27 08:42:56','2016-04-27 08:42:56',NULL,'412','OrderDeliveryAllowance','{\"order_number\":\"500000205\",\"status\":\"OK\",\"class_name\":\"OrderDeliveryAllowance\",\"entity\":[],\"properties\":[{\"name\":\"order_number\",\"type\":\"string\",\"val\":\"\"},{\"name\":\"status\",\"type\":\"string\",\"val\":\"\"}],\"subEntities\":[]}'),(5,NULL,0,NULL,1,'0','2016-04-27 08:50:59','2016-04-27 08:50:59',NULL,'415','OrderPlanStatus','{\"order_number\":\"500000205\",\"status\":\"OK\",\"vat_amount\":\"10005000\",\"purchase_guarantee_date\":\"24.08.2018\",\"items\":\"\",\"services\":\"\",\"class_name\":\"OrderPlanStatus\",\"entity\":[],\"properties\":[{\"name\":\"order_number\",\"type\":\"string\",\"val\":\"\"},{\"name\":\"status\",\"type\":\"OrderPlanStatusValue\",\"val\":\"\"},{\"name\":\"vat_amount\",\"type\":\"float\",\"val\":\"\"},{\"name\":\"purchase_guarantee_date\",\"type\":\"string\",\"val\":\"\"},{\"name\":\"items\",\"type\":\"ArrayOfOrderPlanStatusItem\",\"val\":\"\"},{\"name\":\"services\",\"type\":\"ArrayOfOrderPlanStatusService\",\"val\":\"\"}],\"subEntities\":{\"ArrayOfOrderPlanStatusService\":[{\"class_name\":\"OrderPlanStatusService\",\"entity\":[],\"properties\":[{\"name\":\"service\",\"type\":\"string\",\"val\":\"qwqw\"},{\"name\":\"vat_rate\",\"type\":\"string\",\"val\":\"eqweqw\"},{\"name\":\"vat_amount\",\"type\":\"float\",\"val\":\"123123123\"}]},{\"class_name\":\"OrderPlanStatusService\",\"entity\":[],\"properties\":[{\"name\":\"service\",\"type\":\"string\",\"val\":\"qwqw222\"},{\"name\":\"vat_rate\",\"type\":\"string\",\"val\":\"eqweqw222\"},{\"name\":\"vat_amount\",\"type\":\"float\",\"val\":\"123123123123\"}]}]}}'),(6,NULL,0,NULL,1,'0','2016-04-27 09:05:44','2016-04-27 09:05:44',NULL,'416','PlanningDepartmentAnswer','{\"order_number\":\"500000205\",\"is_answered\":\"true\",\"items\":\"\",\"class_name\":\"PlanningDepartmentAnswer\",\"entity\":[],\"properties\":[{\"name\":\"order_number\",\"type\":\"string\",\"val\":\"\"},{\"name\":\"is_answered\",\"type\":\"boolean\",\"val\":\"\"},{\"name\":\"items\",\"type\":\"ArrayOfPlanningDepartmentAnswerItem\",\"val\":\"\"}],\"subEntities\":[]}'),(7,NULL,0,NULL,1,'0','2016-04-27 09:15:53','2016-04-27 09:15:53',NULL,'417','OrderPlanStatus','{\"order_number\":\"500000205\",\"status\":\"OK\",\"vat_amount\":\"123\",\"purchase_guarantee_date\":\"25.05.2015\",\"items\":\"\",\"services\":\"\",\"class_name\":\"OrderPlanStatus\",\"entity\":[],\"properties\":[{\"name\":\"order_number\",\"type\":\"string\",\"val\":\"\"},{\"name\":\"status\",\"type\":\"OrderPlanStatusValue\",\"val\":\"\"},{\"name\":\"vat_amount\",\"type\":\"float\",\"val\":\"\"},{\"name\":\"purchase_guarantee_date\",\"type\":\"string\",\"val\":\"\"},{\"name\":\"items\",\"type\":\"ArrayOfOrderPlanStatusItem\",\"val\":\"\"},{\"name\":\"services\",\"type\":\"ArrayOfOrderPlanStatusService\",\"val\":\"\"}],\"subEntities\":{\"ArrayOfOrderPlanStatusService\":[{\"class_name\":\"OrderPlanStatusService\",\"entity\":[],\"properties\":[{\"name\":\"service\",\"type\":\"string\",\"val\":\"asdasd\"},{\"name\":\"vat_rate\",\"type\":\"string\",\"val\":\"asdads\"},{\"name\":\"vat_amount\",\"type\":\"float\",\"val\":\"123\"}]},{\"class_name\":\"OrderPlanStatusService\",\"entity\":[],\"properties\":[{\"name\":\"service\",\"type\":\"string\",\"val\":\"asdasdasdad\"},{\"name\":\"vat_rate\",\"type\":\"string\",\"val\":\"asdads1dwq\"},{\"name\":\"vat_amount\",\"type\":\"float\",\"val\":\"121123\"}]}]}}');
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

-- Dump completed on 2016-04-27 19:02:46
