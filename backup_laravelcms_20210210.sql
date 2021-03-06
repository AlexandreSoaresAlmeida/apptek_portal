-- MariaDB dump 10.18  Distrib 10.5.8-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: laravelcms
-- ------------------------------------------------------
-- Server version	10.5.8-MariaDB

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
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `body` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Teste 2','teste-2','<p><img src=\"http://144.202.40.85/media/images/1612911411.png\" alt=\"\" width=\"292\" height=\"119\" /></p>'),(4,'Principal','principal','p├ígina principal'),(5,'teste3','teste3','<p><img src=\"http://144.202.40.85/media/images/1613003431.png\" alt=\"\" width=\"868\" height=\"470\" /></p>');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `content` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'title','Pizza Interessante'),(2,'subtitle','Site muito legal'),(3,'email','contato@site.com'),(4,'bgcolor','#2b65ee'),(5,'textcolor','#e4f40b');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Alexandre Almeida','alexandre.almeida@apptek.com.br','$2y$10$8YTljvkHoa2FV7ta29UideYY0s57AMauIy.IcyLTz4AH9xpXgo.5e','ZA8qRd1IBEHRX4aACrSSGOAdFy6zpuXunAuHl90ekSih2Ipw4IPAu8UWWvuF',1),(2,'Paulo Melo','paulo@gmail.com','$2y$10$Z7il1g6hf15GuW6Lc3/nFe/7s5qUpvvi8nUhxkTQi6R9c2E.c7zDe','mDbIPAZMEVqOiGY62edmN4cCxC1UBtUeXGMANNzEx3RpYj0eAGa3I246AxCx',0),(3,'Andre','andre@hotmail.com','$2y$10$OYh7iggPHZ01XlFSzjie/eGV7V4dxtlsxezdjrKjigZiGVbKTkcwC',NULL,0),(4,'Maria','andre@gmail.com','$2y$10$hwS/r.qQ715WX2O/6RmKhOcAz4tHLSDSe8sHVUjY2jfJJqZRxyn06',NULL,0),(6,'Ana Maria','am@gmail.com','$2y$10$RJ7dk.34bOzugt.XvoJ0OO2IKN/XtajVEaubPC8dy3VD4MuLTcIVy',NULL,0),(7,'Alexandre','asoares73@gmail.com','$2y$10$ptvPE8eRY7Cu1AzeqXdfUeGD8snqGagPDYA1SWHyw2lK12efl6ol6',NULL,0),(8,'Rogerio','rog@yool.com','$2y$10$g2gMVfMYID7Cok3O9TTQmelwpfE1N0TS4TKYF4bGRJWFENHytWVZ2',NULL,0),(10,'Guilherme','gui@voltou.com','$2y$10$fuwRs4Ra3fSE9pWXTc/JcewXIOCfjOwb94u.ca5YngXsrOJgMgGbK','Fanw3d1fJJN3wUvH9I3pfYuiWc6oVvFVMLper4ty8D9DIHmPm2fG05DbYB89',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visitors`
--

DROP TABLE IF EXISTS `visitors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visitors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(100) DEFAULT NULL,
  `date_access` datetime DEFAULT NULL,
  `page` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visitors`
--

LOCK TABLES `visitors` WRITE;
/*!40000 ALTER TABLE `visitors` DISABLE KEYS */;
INSERT INTO `visitors` VALUES (1,'1','2019-11-11 11:11:11','/'),(2,'1','2019-11-11 11:11:11','/'),(3,'1','2019-11-11 11:11:11','teste'),(4,'1','2010-11-11 11:11:11','teste'),(5,'1','2020-11-11 11:11:11','teste'),(6,'1','2020-12-11 11:11:11','teste'),(7,'1','2021-01-11 11:11:11','teste'),(8,'1','2021-02-11 11:11:11','teste'),(9,'1','2021-02-11 11:11:11','teste'),(10,'1','2021-02-11 11:11:11','teste');
/*!40000 ALTER TABLE `visitors` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-10 21:34:30
