CREATE DATABASE  IF NOT EXISTS `nostaledata` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `nostaledata`;
-- MySQL dump 10.13  Distrib 5.5.55, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: nostaledata
-- ------------------------------------------------------
-- Server version	5.5.55-0+deb8u1

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
-- Table structure for table `cards`
--

DROP TABLE IF EXISTS `cards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cards` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `character_id` int(11) NOT NULL,
  `image_url` text,
  `name` varchar(45) NOT NULL,
  `level` int(11) NOT NULL,
  `upgrade` int(11) DEFAULT NULL,
  `reinforcement` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cards`
--

LOCK TABLES `cards` WRITE;
/*!40000 ALTER TABLE `cards` DISABLE KEYS */;
/*!40000 ALTER TABLE `cards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `characters`
--

DROP TABLE IF EXISTS `characters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `characters` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(20) NOT NULL,
  `image_url` text,
  `metier` varchar(45) NOT NULL,
  `server` int(11) NOT NULL,
  `battlelv` int(11) NOT NULL,
  `battleprog` float NOT NULL,
  `joblv` int(11) NOT NULL,
  `jobprog` float NOT NULL,
  `herolv` int(11) NOT NULL,
  `heroprog` float NOT NULL,
  `gold` int(11) NOT NULL,
  `reput` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `characters`
--

LOCK TABLES `characters` WRITE;
/*!40000 ALTER TABLE `characters` DISABLE KEYS */;
/*!40000 ALTER TABLE `characters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipments`
--

DROP TABLE IF EXISTS `equipments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipments` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `character_id` int(11) NOT NULL,
  `image_url` text,
  `equiptype` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `level` int(11) NOT NULL,
  `rare` varchar(45) NOT NULL,
  `upgrade` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipments`
--

LOCK TABLES `equipments` WRITE;
/*!40000 ALTER TABLE `equipments` DISABLE KEYS */;
/*!40000 ALTER TABLE `equipments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fairies`
--

DROP TABLE IF EXISTS `fairies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fairies` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `character_id` int(11) NOT NULL,
  `image_url` text,
  `name` varchar(45) NOT NULL,
  `fireelem` int(11) DEFAULT NULL,
  `waterelem` int(11) DEFAULT NULL,
  `lightelem` int(11) DEFAULT NULL,
  `darkelem` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fairies`
--

LOCK TABLES `fairies` WRITE;
/*!40000 ALTER TABLE `fairies` DISABLE KEYS */;
/*!40000 ALTER TABLE `fairies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jewelries`
--

DROP TABLE IF EXISTS `jewelries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jewelries` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `character_id` int(11) NOT NULL,
  `image_url` text,
  `jeweltype` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jewelries`
--

LOCK TABLES `jewelries` WRITE;
/*!40000 ALTER TABLE `jewelries` DISABLE KEYS */;
/*!40000 ALTER TABLE `jewelries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partnercards`
--

DROP TABLE IF EXISTS `partnercards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partnercards` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `character_id` int(11) NOT NULL,
  `image_url` text,
  `pcardtype` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `skillsrank` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partnercards`
--

LOCK TABLES `partnercards` WRITE;
/*!40000 ALTER TABLE `partnercards` DISABLE KEYS */;
/*!40000 ALTER TABLE `partnercards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partnerequipments`
--

DROP TABLE IF EXISTS `partnerequipments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partnerequipments` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `partner_id` int(11) NOT NULL,
  `pequiptype` varchar(45) NOT NULL,
  `level` int(11) NOT NULL,
  `rare` int(11) DEFAULT NULL,
  `upgrade` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partnerequipments`
--

LOCK TABLES `partnerequipments` WRITE;
/*!40000 ALTER TABLE `partnerequipments` DISABLE KEYS */;
/*!40000 ALTER TABLE `partnerequipments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partners` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `character_id` int(11) NOT NULL,
  `image_url` text,
  `parttype` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partners`
--

LOCK TABLES `partners` WRITE;
/*!40000 ALTER TABLE `partners` DISABLE KEYS */;
/*!40000 ALTER TABLE `partners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pets`
--

DROP TABLE IF EXISTS `pets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pets` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `character_id` int(11) NOT NULL,
  `image_url` text,
  `name` varchar(45) NOT NULL,
  `level` int(11) NOT NULL,
  `atqlv` int(11) DEFAULT NULL,
  `deflv` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pets`
--

LOCK TABLES `pets` WRITE;
/*!40000 ALTER TABLE `pets` DISABLE KEYS */;
/*!40000 ALTER TABLE `pets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resists`
--

DROP TABLE IF EXISTS `resists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resists` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `character_id` int(11) NOT NULL,
  `image_url` text,
  `restype` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `level` int(11) NOT NULL,
  `fireres` int(11) DEFAULT NULL,
  `waterres` int(11) DEFAULT NULL,
  `lightres` int(11) DEFAULT NULL,
  `darkres` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resists`
--

LOCK TABLES `resists` WRITE;
/*!40000 ALTER TABLE `resists` DISABLE KEYS */;
/*!40000 ALTER TABLE `resists` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-11 13:23:42
