-- MySQL dump 10.13  Distrib 5.7.12, for osx10.9 (x86_64)
--
-- Host: localhost    Database: songtosong
-- ------------------------------------------------------
-- Server version	5.7.13

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
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) DEFAULT NULL,
  `idsong` int(11) DEFAULT NULL,
  `like` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user_idx` (`iduser`),
  KEY `idsong_idx` (`idsong`),
  CONSTRAINT `id_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idsong` FOREIGN KEY (`idsong`) REFERENCES `song` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `likes`
--

LOCK TABLES `likes` WRITE;
/*!40000 ALTER TABLE `likes` DISABLE KEYS */;
INSERT INTO `likes` VALUES (3,12,20,NULL),(4,12,2,NULL),(5,12,20,NULL),(6,15,2,NULL),(7,15,2,NULL);
/*!40000 ALTER TABLE `likes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idsong` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `data` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idsong_idx` (`idsong`),
  KEY `iduser_fk_idx` (`iduser`),
  CONSTRAINT `idsong_fk` FOREIGN KEY (`idsong`) REFERENCES `song` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `iduser_fk` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log`
--

LOCK TABLES `log` WRITE;
/*!40000 ALTER TABLE `log` DISABLE KEYS */;
INSERT INTO `log` VALUES (1,2,12,NULL),(2,20,12,NULL),(3,20,12,NULL),(4,20,12,NULL),(5,2,12,NULL),(6,20,12,NULL),(7,2,12,NULL),(8,2,12,NULL),(9,20,12,NULL),(10,20,12,NULL),(11,2,12,NULL),(12,20,12,NULL),(13,20,12,NULL),(14,20,12,NULL),(15,20,12,NULL),(16,2,12,NULL),(17,20,12,NULL),(18,2,12,NULL),(19,20,12,NULL),(20,20,12,NULL),(21,20,15,NULL),(22,2,15,NULL),(23,20,15,NULL),(24,2,15,NULL),(25,20,15,NULL),(26,2,15,NULL),(27,20,15,NULL),(28,20,17,NULL);
/*!40000 ALTER TABLE `log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message` (
  `iduserfrom` int(11) NOT NULL,
  `iduserto` int(11) NOT NULL,
  `message` varchar(150) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `from_idx` (`iduserfrom`),
  KEY `to_idx` (`iduserto`),
  CONSTRAINT `fromfk` FOREIGN KEY (`iduserfrom`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tofk` FOREIGN KEY (`iduserto`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `song`
--

DROP TABLE IF EXISTS `song`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `song` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(45) DEFAULT NULL,
  `title` varchar(45) NOT NULL,
  `group` varchar(45) DEFAULT NULL,
  `album` varchar(45) DEFAULT NULL,
  `year` varchar(45) DEFAULT NULL,
  `file` varchar(150) NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `song`
--

LOCK TABLES `song` WRITE;
/*!40000 ALTER TABLE `song` DISABLE KEYS */;
INSERT INTO `song` VALUES (2,'Henry Saiz','Dystopian',NULL,NULL,NULL,'songs/01-henry_saiz-dystopian.mp3',NULL),(20,'Air','All I Need','Air','Moon Safari','2017','songs/1503769286-03 All I Need.mp3','https://i.ytimg.com/vi/99myH1orbs4/maxresdefault.jpg');
/*!40000 ALTER TABLE `song` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `songtags`
--

DROP TABLE IF EXISTS `songtags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `songtags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idsong` int(11) NOT NULL,
  `idtag` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `songfk_idx` (`idsong`),
  KEY `tagfk_idx` (`idtag`),
  CONSTRAINT `songfk` FOREIGN KEY (`idsong`) REFERENCES `song` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tagfk` FOREIGN KEY (`idtag`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `songtags`
--

LOCK TABLES `songtags` WRITE;
/*!40000 ALTER TABLE `songtags` DISABLE KEYS */;
INSERT INTO `songtags` VALUES (3,20,1),(4,20,2),(5,2,3),(6,2,4);
/*!40000 ALTER TABLE `songtags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'lounge'),(2,' chill out'),(3,'techno'),(4,'electronic');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nick` varchar(45) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `surname` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `image` varchar(100) DEFAULT 'img/usuario.png',
  `type` varchar(45) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nick_UNIQUE` (`nick`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (6,'Jessi',NULL,NULL,'jesmv83@gmail.com','81dc9bdb52d04dc20036dbd8313ed055','img/usuario.png','admin'),(12,'Guapa','Jessica','Manso','kajshdf@asdfs.com','f141009cf56f2ff4f8e847e929c9de91','img/user/1503860119-verduras.jpg','admin'),(14,'Doggy','Darwin','Cansino','Doggy@doggy.com','6cbcadc831a860f52cc0e2cc931b28ed','img/user/1503866277-Blur.jpg','user'),(15,'uno',NULL,NULL,'asdf@adsfasd.com','dac5c2e22a9749e315736952ab372e09','img/usuario.png','admin'),(16,'hols',NULL,NULL,'skdjfgh@adlkfg.com','dac5c2e22a9749e315736952ab372e09','img/usuario.png','user'),(17,'1234',NULL,NULL,'1234@asdfas.com','354818fe24c62b1ea015029a6057143b','img/usuario.png','admin');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-14 20:46:48
