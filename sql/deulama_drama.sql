-- MySQL dump 10.13  Distrib 8.0.22, for macos10.15 (x86_64)
--
-- Host: localhost    Database: deulama
-- ------------------------------------------------------
-- Server version	8.0.22

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `drama`
--

DROP TABLE IF EXISTS `drama`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `drama` (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(45) DEFAULT NULL,
  `cast` longtext,
  `detail` longtext,
  `foto` varchar(255) DEFAULT NULL,
  `author` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `drama`
--

LOCK TABLES `drama` WRITE;
/*!40000 ALTER TABLE `drama` DISABLE KEYS */;
INSERT INTO `drama` VALUES (2,'Start Up','Bae Suzy sebagai Seo Dal Mi\r\nNam Joo Hyuk sebagai Nam Do San\r\nKim Seon Ho sebagai Han Ji Pyung\r\nKang Han Na sebagai Won In Jae','Judul: 스타트업 / Seutateueop / 샌드박스 / Saendeubakseu / Startup / Sandbox\r\nGenre: Bisnis, Komedi, Romantis, Masa Muda, Drama\r\nSutradara: Oh Choong Hwan\r\nProduser: Hwang Ki Yong\r\nPenulis Naskah: Park Hye Ryun\r\nChannel TV: tvN\r\nJumlah Episode: 16','startup.jpg','admin'),(3,'Search','Bae Suzy sebagai Seo Dal Mi\r\nNam Joo Hyuk sebagai Nam Do San\r\nKim Seon Ho sebagai Han Ji Pyung\r\nKang Han Na sebagai Won In Jae','Judul: 스타트업 / Seutateueop / 샌드박스 / Saendeubakseu / Startup / Sandbox\r\nGenre: Bisnis, Komedi, Romantis, Masa Muda, Drama\r\nSutradara: Oh Choong Hwan\r\nProduser: Hwang Ki Yong\r\nPenulis Naskah: Park Hye Ryun\r\nChannel TV: tvN\r\nJumlah Episode: 16','search.jpg','admin'),(4,'More Than Friends','Bae Suzy sebagai Seo Dal Mi\r\nNam Joo Hyuk sebagai Nam Do San\r\nKim Seon Ho sebagai Han Ji Pyung\r\nKang Han Na sebagai Won In Jae','Judul: 스타트업 / Seutateueop / 샌드박스 / Saendeubakseu / Startup / Sandbox\r\nGenre: Bisnis, Komedi, Romantis, Masa Muda, Drama\r\nSutradara: Oh Choong Hwan\r\nProduser: Hwang Ki Yong\r\nPenulis Naskah: Park Hye Ryun\r\nChannel TV: tvN\r\nJumlah Episode: 16','More-Than-Friends.jpg','admin'),(5,'Do Do Sol Sol La La Sol','Bae Suzy sebagai Seo Dal Mi\r\nNam Joo Hyuk sebagai Nam Do San\r\nKim Seon Ho sebagai Han Ji Pyung\r\nKang Han Na sebagai Won In Jae','Judul: 스타트업 / Seutateueop / 샌드박스 / Saendeubakseu / Startup / Sandbox\r\nGenre: Bisnis, Komedi, Romantis, Masa Muda, Drama\r\nSutradara: Oh Choong Hwan\r\nProduser: Hwang Ki Yong\r\nPenulis Naskah: Park Hye Ryun\r\nChannel TV: tvN\r\nJumlah Episode: 16','Do_Do_Sol_Sol_La_La_Sol_main_poster.jpg','admin');
/*!40000 ALTER TABLE `drama` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-14 23:58:57
