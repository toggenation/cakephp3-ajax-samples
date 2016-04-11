-- MySQL dump 10.16  Distrib 10.1.13-MariaDB, for osx10.11 (x86_64)
--
-- Host: localhost    Database: posts
-- ------------------------------------------------------
-- Server version	10.1.13-MariaDB

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
-- Current Database: `posts`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `posts` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `posts`;

--
-- Table structure for table `bookmarks`
--

DROP TABLE IF EXISTS `bookmarks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bookmarks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` text,
  `url` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_key` (`user_id`),
  CONSTRAINT `user_key` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookmarks`
--

LOCK TABLES `bookmarks` WRITE;
/*!40000 ALTER TABLE `bookmarks` DISABLE KEYS */;
INSERT INTO `bookmarks` VALUES (1,1,'Title ','Description','http://jmits.com.au','2016-04-03 10:26:56','2016-04-03 10:26:56'),(2,1,'New Bookmark','Description','http://www.2test.com','2016-04-03 10:36:16','2016-04-10 04:52:46'),(3,1,'Tittion','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula\r\neget dolor. Aenean massa. \r\n\r\nCum sociis natoque penatibus et magnis dis parturient\r\nmontes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque\r\neu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,\r\nfringilla vel, aliquet nec, vulputate eget, arcu. \r\nIn enim justo, rhoncus ut,\r\nimperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.\r\nInteger tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate\r\neleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac,','http://wokenup.com.au','2016-04-03 10:53:37','2016-04-03 10:53:37'),(4,1,'Added Title','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula\r\neget dolor. Aenean massa. \r\nCum sociis natoque penatibus et magnis dis parturient\r\nmontes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque\r\neu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,','http://url.url.com\r\n','2016-04-03 11:17:34','2016-04-03 11:17:34'),(5,2,'Book mark','Hi James A McD','http://jmits.com.au','2016-04-10 04:18:53','2016-04-10 04:49:12'),(6,2,'Title','Hi ','Title','2016-04-10 04:51:20','2016-04-10 04:51:20'),(7,2,'And another one','Another','N','2016-04-10 04:51:38','2016-04-10 04:51:38'),(8,2,'Tission','And the helper','hep','2016-04-10 05:01:52','2016-04-10 06:30:00'),(9,2,'Title','Hey','thidsahf','2016-04-10 06:26:03','2016-04-10 06:26:03'),(10,2,'adfa','adfa','adfa','2016-04-10 06:27:57','2016-04-10 06:27:57'),(11,2,'dsjfak','jakdjfka','ajdkfal','2016-04-10 06:28:54','2016-04-10 06:28:54'),(12,2,'dadfa','adfadf','adfasdfa','2016-04-10 06:29:03','2016-04-10 06:29:03'),(13,2,'adfa','adfa','adfa','2016-04-10 06:29:49','2016-04-10 06:29:49'),(14,2,'adfa','adfa','adfas','2016-04-10 06:30:17','2016-04-10 06:30:17'),(15,2,'adf','adf','afda','2016-04-10 06:33:47','2016-04-10 06:33:47'),(16,2,'s','s','s','2016-04-10 06:34:50','2016-04-10 06:34:50'),(17,2,'Hi','hi','hi','2016-04-10 06:35:24','2016-04-10 06:35:24'),(18,2,'sds','ss','s','2016-04-10 06:35:36','2016-04-10 09:48:07'),(22,2,'bookmar','less','less','2016-04-10 10:04:10','2016-04-10 10:04:10');
/*!40000 ALTER TABLE `bookmarks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bookmarks_tags`
--

DROP TABLE IF EXISTS `bookmarks_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bookmarks_tags` (
  `bookmark_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`bookmark_id`,`tag_id`),
  KEY `tag_key` (`tag_id`),
  CONSTRAINT `bookmark_key` FOREIGN KEY (`bookmark_id`) REFERENCES `bookmarks` (`id`),
  CONSTRAINT `tag_key` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookmarks_tags`
--

LOCK TABLES `bookmarks_tags` WRITE;
/*!40000 ALTER TABLE `bookmarks_tags` DISABLE KEYS */;
INSERT INTO `bookmarks_tags` VALUES (1,1),(2,2),(3,3),(3,4),(4,2),(4,5),(4,6),(5,2),(6,3),(7,2),(8,1),(8,3),(9,2),(9,3),(9,4),(9,5),(10,3),(11,3),(12,4),(13,2),(14,2),(15,4),(16,4),(17,2),(18,2),(18,4),(22,2),(22,5);
/*!40000 ALTER TABLE `bookmarks_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phinxlog`
--

DROP TABLE IF EXISTS `phinxlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phinxlog`
--

LOCK TABLES `phinxlog` WRITE;
/*!40000 ALTER TABLE `phinxlog` DISABLE KEYS */;
/*!40000 ALTER TABLE `phinxlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (13,'Action man man o man','All over'),(19,'A Title and a helping hand','ana booo ben adam'),(23,'Hebrews','hebrews\r\n'),(24,'Cute with me','Hello there'),(25,'Hello there','hello there'),(26,'Jacky the jack','Jacqualine'),(27,'Ah hah man','this is a test'),(28,'Testing','Testing...'),(29,'one two three four','A b c'),(30,'Test two people test','test one two three'),(31,'A helping hand','A helping hand\r\n'),(32,'Nothing but the best','Don\'t forget'),(33,'Something Like the Best','I got nothing'),(34,'A stranger with the best moments','And how do you know'),(35,'Test ing','124 5'),(36,'James ','A profe'),(37,'A man with a dog','this is a test'),(38,'39 and counting','hi james a mcdonald'),(39,'abandoned man','a sheet'),(40,'Misleading headlines','Headlines'),(41,'hello man','long babe');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'Tag1','2016-04-03 10:27:13','2016-04-03 10:27:13'),(2,'Tag2','2016-04-03 10:27:27','2016-04-03 10:27:27'),(3,'Tag3','2016-04-03 10:36:27','2016-04-03 10:36:27'),(4,'Tag5','2016-04-10 05:01:30','2016-04-10 05:01:30'),(5,'tag6','2016-04-10 05:05:19','2016-04-10 05:05:19'),(6,'Tag7','2016-04-10 09:33:25','2016-04-10 09:33:25'),(7,'Lambchops','2016-04-10 09:34:52','2016-04-10 09:34:52'),(8,'Tag11','2016-04-11 00:58:36','2016-04-11 00:58:43');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'james@jamesmcdonald.id.au','$2y$10$aUzKWZw.Z0MbhzzigzMhsOHVXcZBfzCUkxayC1rvGWzKhboa4Vjsy','2016-04-03 09:51:40','2016-04-10 04:52:03'),(2,'me@example.com','$2y$10$KCUMn5DhRfgHYVUePLunw.hggCyZsg1hkuiAurRoCXXn74Ws6dH22','2016-04-06 09:24:38','2016-04-06 09:24:38'),(3,'james@jmits.com.au','$2y$10$DS9dzQY20R7o27VUWcrCLe8QxZO99mjYQQW98XLgT4PPP1Kb.DqKi','2016-04-10 03:58:11','2016-04-10 03:58:11'),(4,'james@jmits2.com.au','$2y$10$WsyHP2MqQdHQxAR8c4ptR.zYXXkZrC1w2wpKwXdyPyZIrcl.jE486','2016-04-10 04:05:42','2016-04-10 04:05:42'),(5,'james@jmits3.com.au','$2y$10$sW5KHQsZ80pYHEExJ.EhHeqhL4kLEILMFXAyQW5Felj6oSsAjOsPW','2016-04-10 04:06:40','2016-04-10 04:06:40'),(6,'james@jmits4.com.au','$2y$10$EgAqlrT/JDXGetOkCUiuX.Dsb/4b.YT7j2ajf/c5ZSMmRJC6YpAHO','2016-04-10 04:07:01','2016-04-10 04:07:01'),(7,'james@jmits6.com.au','$2y$10$AXm5oGFe/35jnhdm7SNK2.fQQ/Ebykmoozes678DFTxsnh8lnmhr.','2016-04-10 09:42:37','2016-04-10 09:42:37'),(8,'james@jmits8.com.au','$2y$10$VQwkQowsKsFYEsC8gw/oku09pVQ2nmnhTE/Ktz4LXGN3s22N8ZxES','2016-04-10 09:42:41','2016-04-10 09:42:41'),(9,'james@jmits9.com.au','$2y$10$uoJNfwUIXf4oxwXxbI4.IeZQpLimXc0p.aacBdB.8QYNnihirjuHe','2016-04-10 09:42:47','2016-04-10 09:42:47'),(10,'james@jmits11.com.au','$2y$10$FSGsLv5.kCDfY/mU9UAgdO25ICix3GCLFC9tKXPz.ORYiNzNgsWQ2','2016-04-10 09:51:42','2016-04-10 09:51:42');
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

-- Dump completed on 2016-04-11 22:46:49
