-- MySQL dump 10.13  Distrib 8.0.19, for osx10.14 (x86_64)
--
-- Host: 127.0.0.1    Database: hayato210663
-- ------------------------------------------------------
-- Server version	8.0.19-debug

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
SET @old_autocommit=@@autocommit;

--
-- Current Database: `hayato210663`
--

/*!40000 DROP DATABASE IF EXISTS `hayato210663`*/;

CREATE DATABASE `hayato210663` DEFAULT CHARACTER SET utf8mb4;

USE `hayato210663`;

--
-- Table structure for table `card`
--

DROP TABLE IF EXISTS `card`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `card` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Name` char(35) NOT NULL DEFAULT '',
  `syasinurl` text NOT NULL DEFAULT '',
  `setumeibun` text NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `card`
--
-- ORDER BY:  `ID`

set autocommit=0;
INSERT INTO `card` VALUES (1,'シェル','https://point.recruit.co.jp/pontaweb/doc/common/assets/img/about/ponta/card/shell_ponta01.png','シェルのポンタカード');
commit;

set autocommit=0;
INSERT INTO `card` VALUES (2,'ローソン','https://point.recruit.co.jp/pontaweb/doc/common/assets/img/about/ponta/card/lowson_ponta01.png','ローソンのポンタカード');
commit;

set autocommit=0;
INSERT INTO `card` VALUES (3,'ゲオ','https://point.recruit.co.jp/pontaweb/doc/common/assets/img/about/ponta/card/geo_ponta01.png','ゲオのポンタカード');
commit;

set autocommit=0;
INSERT INTO `card` VALUES (4,'ユニデイ','https://point.recruit.co.jp/pontaweb/doc/common/assets/img/about/ponta/card/uniliv_ponta01.png','ユニデイのポンタカード');
commit;

set autocommit=0;
INSERT INTO `card` VALUES (5,'ONIX','https://point.recruit.co.jp/pontaweb/doc/common/assets/img/about/ponta/card/onix_ponta01.png','ONIXのポンタカード');
commit;

set autocommit=0;
INSERT INTO `card` VALUES (6,'ルートイン','https://point.recruit.co.jp/pontaweb/doc/common/assets/img/about/ponta/card/routeinn_hotels_ponta01.png','ルートインのポンタカード');
commit;

set autocommit=0;
INSERT INTO `card` VALUES (7,'スポーツヒマラヤ','https://point.recruit.co.jp/pontaweb/doc/common/assets/img/about/ponta/card/himaraya_ponta01.png','スポーツヒマラヤのポンタカード');
commit;

set autocommit=0;
INSERT INTO `card` VALUES (8,'JAL','https://point.recruit.co.jp/pontaweb/doc/common/assets/img/about/ponta/card/jal_ponta01.png','JALのポンタカード');
commit;


--
-- Dumping events for database 'hayato210663'
--

--
-- Dumping routines for database 'hayato210663'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
SET autocommit=@old_autocommit;

-- Dump completed on 2020-01-22  9:56:18
