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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `likes`
--

LOCK TABLES `likes` WRITE;
/*!40000 ALTER TABLE `likes` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log`
--

LOCK TABLES `log` WRITE;
/*!40000 ALTER TABLE `log` DISABLE KEYS */;
INSERT INTO `log` VALUES (31,20,18,NULL),(32,20,18,NULL),(34,20,18,NULL),(35,20,18,NULL),(36,20,18,NULL),(37,29,18,NULL),(38,20,18,NULL),(40,20,18,NULL);
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
  `image` varchar(150) DEFAULT 'img/rock.jpg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `song`
--

LOCK TABLES `song` WRITE;
/*!40000 ALTER TABLE `song` DISABLE KEYS */;
INSERT INTO `song` VALUES (2,'Henry Saiz','Dystopian','aaaaa','rrrrrrr',NULL,'songs/01-henry_saiz-dystopian.mp3','img/song/1527528567-1487595539-globo.jpg'),(20,'Air','All I Need','Air','Moon Safari','2017','songs/1503769286-03 All I Need.mp3','https://i.ytimg.com/vi/99myH1orbs4/maxresdefault.jpg'),(29,'fffff','aaaa','ffffff','ooo','2017','songs/1526666317-01 Go.mp3','img/song/1527610799-wok3.jpg'),(40,'sdfgsdfg','oooo','sdfgsdfg','dfgsdfg','2017','songs/1527431173-04 Weird Fishes_Arpeggi.mp3','img/song/1527528535-wok3.jpg');
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
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `songtags`
--

LOCK TABLES `songtags` WRITE;
/*!40000 ALTER TABLE `songtags` DISABLE KEYS */;
INSERT INTO `songtags` VALUES (3,20,1),(4,20,2),(5,2,3),(6,2,4),(17,29,7),(31,29,9),(32,29,14),(33,29,15),(34,29,16),(35,29,17),(50,40,20);
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'lounge'),(2,' chill out'),(3,'techno'),(4,'electronic'),(5,'test'),(6,' test'),(7,''),(8,'asdf'),(9,'pop'),(10,'gfhfg'),(11,'gsfhfgh'),(12,'sdfgsdfg'),(13,' asdf'),(14,' Indi'),(15,'progressive rock'),(16,' classic rock'),(17,' psychedelic rock'),(18,'aste'),(19,'oooo'),(20,'jjjjj');
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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (6,'Jessi',NULL,NULL,'jesmv83@gmail.com','52a533b9b80196e5d7ab30c1004d52d5','img/usuario.png','admin'),(14,'Doggy','Darwin','Cansino','Doggy@doggy.com','f7a3b34fb12e7c3de27d77363f4980a8','img/user/1503866277-Blur.jpg','user'),(18,'Maria',NULL,NULL,'maria@maria.com','dac5c2e22a9749e315736952ab372e09','img/avatar1.png','root'),(20,'usuario',NULL,NULL,'usuario@usuario.com','03a4773b2aff3af0f79c1098a0fbc7fe','img/usuario.png','user'),(21,'administrador',NULL,NULL,'administrador@administrador.com','30e069ee8c25b7165bdd7e0b5d4ba7d4','img/usuario.png','admin'),(22,'superusuario',NULL,NULL,'super@super.com','eea9e4a8ac583953617b9cf9b8a69fab','img/usuario.png','root');
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

-- Dump completed on 2018-06-08 17:06:53
