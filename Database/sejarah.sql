-- MySQL dump 10.13  Distrib 5.6.21, for Win32 (x86)
--
-- Host: localhost    Database: sejarah
-- ------------------------------------------------------
-- Server version	5.6.21

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
-- Table structure for table `acehs`
--

DROP TABLE IF EXISTS `acehs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acehs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acehs`
--

LOCK TABLES `acehs` WRITE;
/*!40000 ALTER TABLE `acehs` DISABLE KEYS */;
INSERT INTO `acehs` VALUES (1,'1','2015-02-16 09:44:43','2015-02-16 09:44:43');
/*!40000 ALTER TABLE `acehs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'Rmaijayanto@gmail.com','Jakarta48','2015-02-17 06:39:27','2015-02-17 06:39:27'),(2,'Jakarta123','Jakarta456','2015-02-17 18:16:32','2015-02-17 18:16:32'),(3,'jaj@gmail.com','jaj','2015-02-19 19:02:00','2015-02-19 19:02:00'),(4,'RM@gmail.com','qwerty123','2015-02-20 00:00:09','2015-02-20 00:00:09'),(5,'Jakarta48@gmail.com','123','2015-02-20 00:49:28','2015-02-20 00:49:28'),(6,'RM@gmail.com','asdad','2015-02-22 23:46:15','2015-02-22 23:46:15'),(7,'dads@gmail.com','123','2015-02-23 00:07:37','2015-02-23 00:07:37'),(8,'ahdshah@yahoo.co.id','askdja','2015-02-23 00:12:08','2015-02-23 00:12:08');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `balis`
--

DROP TABLE IF EXISTS `balis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `balis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `balis`
--

LOCK TABLES `balis` WRITE;
/*!40000 ALTER TABLE `balis` DISABLE KEYS */;
/*!40000 ALTER TABLE `balis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bantens`
--

DROP TABLE IF EXISTS `bantens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bantens` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bantens`
--

LOCK TABLES `bantens` WRITE;
/*!40000 ALTER TABLE `bantens` DISABLE KEYS */;
/*!40000 ALTER TABLE `bantens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bengkulus`
--

DROP TABLE IF EXISTS `bengkulus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bengkulus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bengkulus`
--

LOCK TABLES `bengkulus` WRITE;
/*!40000 ALTER TABLE `bengkulus` DISABLE KEYS */;
/*!40000 ALTER TABLE `bengkulus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gorontalos`
--

DROP TABLE IF EXISTS `gorontalos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gorontalos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gorontalos`
--

LOCK TABLES `gorontalos` WRITE;
/*!40000 ALTER TABLE `gorontalos` DISABLE KEYS */;
/*!40000 ALTER TABLE `gorontalos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jakartas`
--

DROP TABLE IF EXISTS `jakartas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jakartas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jakartas`
--

LOCK TABLES `jakartas` WRITE;
/*!40000 ALTER TABLE `jakartas` DISABLE KEYS */;
INSERT INTO `jakartas` VALUES (1,'<p><strong>Jakarta adalah ibukota negara indonesia. indonesia terkenal dengan keramahannya para penduduk indonesia terhadap wisatawan mancanegara. indonesia juga mempunyai objek berwisata yang cukup menarik yaitu monas (Monumen Nasional). monas ini adalah monumen yang sangar bersejarah.</strong></p>\r\n','2015-02-17 06:59:48','2015-02-17 06:59:48'),(2,'<p>Jakarta Adlah</p>\r\n','2015-02-17 19:57:55','2015-02-17 19:57:55');
/*!40000 ALTER TABLE `jakartas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jambis`
--

DROP TABLE IF EXISTS `jambis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jambis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jambis`
--

LOCK TABLES `jambis` WRITE;
/*!40000 ALTER TABLE `jambis` DISABLE KEYS */;
/*!40000 ALTER TABLE `jambis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jawabarats`
--

DROP TABLE IF EXISTS `jawabarats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jawabarats` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jawabarats`
--

LOCK TABLES `jawabarats` WRITE;
/*!40000 ALTER TABLE `jawabarats` DISABLE KEYS */;
/*!40000 ALTER TABLE `jawabarats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jawatengahs`
--

DROP TABLE IF EXISTS `jawatengahs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jawatengahs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jawatengahs`
--

LOCK TABLES `jawatengahs` WRITE;
/*!40000 ALTER TABLE `jawatengahs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jawatengahs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jawatimurs`
--

DROP TABLE IF EXISTS `jawatimurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jawatimurs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jawatimurs`
--

LOCK TABLES `jawatimurs` WRITE;
/*!40000 ALTER TABLE `jawatimurs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jawatimurs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jogjas`
--

DROP TABLE IF EXISTS `jogjas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jogjas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jogjas`
--

LOCK TABLES `jogjas` WRITE;
/*!40000 ALTER TABLE `jogjas` DISABLE KEYS */;
/*!40000 ALTER TABLE `jogjas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kalbars`
--

DROP TABLE IF EXISTS `kalbars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kalbars` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kalbars`
--

LOCK TABLES `kalbars` WRITE;
/*!40000 ALTER TABLE `kalbars` DISABLE KEYS */;
/*!40000 ALTER TABLE `kalbars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kalsels`
--

DROP TABLE IF EXISTS `kalsels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kalsels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kalsels`
--

LOCK TABLES `kalsels` WRITE;
/*!40000 ALTER TABLE `kalsels` DISABLE KEYS */;
/*!40000 ALTER TABLE `kalsels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kaltengs`
--

DROP TABLE IF EXISTS `kaltengs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kaltengs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kaltengs`
--

LOCK TABLES `kaltengs` WRITE;
/*!40000 ALTER TABLE `kaltengs` DISABLE KEYS */;
/*!40000 ALTER TABLE `kaltengs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kaltims`
--

DROP TABLE IF EXISTS `kaltims`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kaltims` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kaltims`
--

LOCK TABLES `kaltims` WRITE;
/*!40000 ALTER TABLE `kaltims` DISABLE KEYS */;
/*!40000 ALTER TABLE `kaltims` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kaluts`
--

DROP TABLE IF EXISTS `kaluts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kaluts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kaluts`
--

LOCK TABLES `kaluts` WRITE;
/*!40000 ALTER TABLE `kaluts` DISABLE KEYS */;
/*!40000 ALTER TABLE `kaluts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kepbangkas`
--

DROP TABLE IF EXISTS `kepbangkas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kepbangkas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kepbangkas`
--

LOCK TABLES `kepbangkas` WRITE;
/*!40000 ALTER TABLE `kepbangkas` DISABLE KEYS */;
/*!40000 ALTER TABLE `kepbangkas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kepriaus`
--

DROP TABLE IF EXISTS `kepriaus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kepriaus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kepriaus`
--

LOCK TABLES `kepriaus` WRITE;
/*!40000 ALTER TABLE `kepriaus` DISABLE KEYS */;
/*!40000 ALTER TABLE `kepriaus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lampungs`
--

DROP TABLE IF EXISTS `lampungs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lampungs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lampungs`
--

LOCK TABLES `lampungs` WRITE;
/*!40000 ALTER TABLE `lampungs` DISABLE KEYS */;
/*!40000 ALTER TABLE `lampungs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `malukus`
--

DROP TABLE IF EXISTS `malukus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `malukus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `malukus`
--

LOCK TABLES `malukus` WRITE;
/*!40000 ALTER TABLE `malukus` DISABLE KEYS */;
/*!40000 ALTER TABLE `malukus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `malukuutaras`
--

DROP TABLE IF EXISTS `malukuutaras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `malukuutaras` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `malukuutaras`
--

LOCK TABLES `malukuutaras` WRITE;
/*!40000 ALTER TABLE `malukuutaras` DISABLE KEYS */;
/*!40000 ALTER TABLE `malukuutaras` ENABLE KEYS */;
UNLOCK TABLES;

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
INSERT INTO `migrations` VALUES ('2015_02_14_233348_create_table_adminnn',1),('2015_02_15_040310_create_table_adminnn',2),('2015_02_15_041704_create_table_adminnn',3),('2015_02_16_020045_create_table_sejarahindonesiaa',4),('2015_02_16_064949_create_table_adminn',5),('2015_02_16_132612_create_table_jakarta',6),('2015_02_16_161224_create_table_jakartaa',7),('2015_02_16_162653_create_table_acehh',8),('2015_02_16_174510_create_table_balis',9),('2015_02_16_174638_create_table_bantenn',10),('2015_02_16_174728_create_table_bengkuluu',11),('2015_02_16_191104_create_table_jambii',12),('2015_02_16_191159_create_table_gorontaloo',13),('2015_02_16_191732_create_table_jawabaratt',14),('2015_02_16_191839_create_table_jawatengahh',15),('2015_02_16_193242_create_table_jawatimurr',16),('2015_02_17_003604_create_table_presiden1',17),('2015_02_17_003925_create_table_presiden1',18),('2015_02_17_004033_create_table_presiden2',19),('2015_02_17_004231_create_table_presiden3',19),('2015_02_17_004357_create_table_presiden4',19),('2015_02_17_133748_create_table_adminn',20),('2015_02_17_135141_create_table_jakartaa',21),('2015_02_17_140819_create_table_presiden1',22),('2015_02_19_142144_create_table_sumutt',23),('2015_02_19_142523_create_table_sumbarr',24),('2015_02_19_142537_create_table_sumsell',24),('2015_02_19_142547_create_table_riauu',24),('2015_02_19_142655_create_table_lampungg',24),('2015_02_19_142714_create_table_kepriauu',24),('2015_02_19_142726_create_table_kepbangkaa',24),('2015_02_19_142815_create_table_jogjaa',24),('2015_02_19_142841_create_table_nttt',24),('2015_02_19_142853_create_table_ntbb',24),('2015_02_19_142913_create_table_malukuuataraa',24),('2015_02_19_142922_create_table_malukuu',24),('2015_02_19_142950_create_table_kalbarr',24),('2015_02_19_142959_create_table_kaltengg',24),('2015_02_19_143008_create_table_kaltimm',24),('2015_02_19_143019_create_table_kalutt',24),('2015_02_19_143029_create_table_kalsell',24),('2015_02_19_143044_create_table_sulutt',24),('2015_02_19_143055_create_table_sultengg',24),('2015_02_19_143105_create_table_sulsell',24),('2015_02_19_143123_create_table_sultenggarr',24),('2015_02_19_143133_create_table_sulbarr',24),('2015_02_19_143143_create_table_papuaa',24),('2015_02_19_143151_create_table_papuabaratt',24);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ntbs`
--

DROP TABLE IF EXISTS `ntbs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ntbs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ntbs`
--

LOCK TABLES `ntbs` WRITE;
/*!40000 ALTER TABLE `ntbs` DISABLE KEYS */;
/*!40000 ALTER TABLE `ntbs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ntts`
--

DROP TABLE IF EXISTS `ntts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ntts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ntts`
--

LOCK TABLES `ntts` WRITE;
/*!40000 ALTER TABLE `ntts` DISABLE KEYS */;
/*!40000 ALTER TABLE `ntts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `papuabarats`
--

DROP TABLE IF EXISTS `papuabarats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `papuabarats` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `papuabarats`
--

LOCK TABLES `papuabarats` WRITE;
/*!40000 ALTER TABLE `papuabarats` DISABLE KEYS */;
/*!40000 ALTER TABLE `papuabarats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `papuas`
--

DROP TABLE IF EXISTS `papuas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `papuas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `papuas`
--

LOCK TABLES `papuas` WRITE;
/*!40000 ALTER TABLE `papuas` DISABLE KEYS */;
/*!40000 ALTER TABLE `papuas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `presiden1s`
--

DROP TABLE IF EXISTS `presiden1s`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `presiden1s` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bio` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `presiden1s`
--

LOCK TABLES `presiden1s` WRITE;
/*!40000 ALTER TABLE `presiden1s` DISABLE KEYS */;
INSERT INTO `presiden1s` VALUES (1,'<p>Soekarno</p>','2015-02-17 07:09:42','2015-02-17 07:09:42');
/*!40000 ALTER TABLE `presiden1s` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `presiden2s`
--

DROP TABLE IF EXISTS `presiden2s`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `presiden2s` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `presiden2s`
--

LOCK TABLES `presiden2s` WRITE;
/*!40000 ALTER TABLE `presiden2s` DISABLE KEYS */;
/*!40000 ALTER TABLE `presiden2s` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `presiden3s`
--

DROP TABLE IF EXISTS `presiden3s`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `presiden3s` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `presiden3s`
--

LOCK TABLES `presiden3s` WRITE;
/*!40000 ALTER TABLE `presiden3s` DISABLE KEYS */;
/*!40000 ALTER TABLE `presiden3s` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `presiden4s`
--

DROP TABLE IF EXISTS `presiden4s`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `presiden4s` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `presiden4s`
--

LOCK TABLES `presiden4s` WRITE;
/*!40000 ALTER TABLE `presiden4s` DISABLE KEYS */;
/*!40000 ALTER TABLE `presiden4s` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `riaus`
--

DROP TABLE IF EXISTS `riaus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `riaus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `riaus`
--

LOCK TABLES `riaus` WRITE;
/*!40000 ALTER TABLE `riaus` DISABLE KEYS */;
/*!40000 ALTER TABLE `riaus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sulbars`
--

DROP TABLE IF EXISTS `sulbars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sulbars` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sulbars`
--

LOCK TABLES `sulbars` WRITE;
/*!40000 ALTER TABLE `sulbars` DISABLE KEYS */;
/*!40000 ALTER TABLE `sulbars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sulsels`
--

DROP TABLE IF EXISTS `sulsels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sulsels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sulsels`
--

LOCK TABLES `sulsels` WRITE;
/*!40000 ALTER TABLE `sulsels` DISABLE KEYS */;
/*!40000 ALTER TABLE `sulsels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sultenggaras`
--

DROP TABLE IF EXISTS `sultenggaras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sultenggaras` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sultenggaras`
--

LOCK TABLES `sultenggaras` WRITE;
/*!40000 ALTER TABLE `sultenggaras` DISABLE KEYS */;
/*!40000 ALTER TABLE `sultenggaras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sultengs`
--

DROP TABLE IF EXISTS `sultengs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sultengs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sultengs`
--

LOCK TABLES `sultengs` WRITE;
/*!40000 ALTER TABLE `sultengs` DISABLE KEYS */;
/*!40000 ALTER TABLE `sultengs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suluts`
--

DROP TABLE IF EXISTS `suluts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suluts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suluts`
--

LOCK TABLES `suluts` WRITE;
/*!40000 ALTER TABLE `suluts` DISABLE KEYS */;
/*!40000 ALTER TABLE `suluts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sumbars`
--

DROP TABLE IF EXISTS `sumbars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sumbars` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sumbars`
--

LOCK TABLES `sumbars` WRITE;
/*!40000 ALTER TABLE `sumbars` DISABLE KEYS */;
INSERT INTO `sumbars` VALUES (1,'<p>Sumatera Barat</p>','2015-02-19 17:34:39','2015-02-19 17:34:39');
/*!40000 ALTER TABLE `sumbars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sumsels`
--

DROP TABLE IF EXISTS `sumsels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sumsels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sumsels`
--

LOCK TABLES `sumsels` WRITE;
/*!40000 ALTER TABLE `sumsels` DISABLE KEYS */;
INSERT INTO `sumsels` VALUES (1,'<p>Sumatera 5elatan</p>','2015-02-19 18:08:55','2015-02-19 18:08:55');
/*!40000 ALTER TABLE `sumsels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sumuts`
--

DROP TABLE IF EXISTS `sumuts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sumuts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sumuts`
--

LOCK TABLES `sumuts` WRITE;
/*!40000 ALTER TABLE `sumuts` DISABLE KEYS */;
INSERT INTO `sumuts` VALUES (1,'<p>SumUtatera ara</p>','2015-02-19 17:31:23','2015-02-19 17:31:23');
/*!40000 ALTER TABLE `sumuts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-02-27 11:06:10
