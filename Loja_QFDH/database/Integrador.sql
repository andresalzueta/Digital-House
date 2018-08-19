CREATE DATABASE  IF NOT EXISTS `mydb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `mydb`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: mydb
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.32-MariaDB

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
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `idCategorias` int(11) NOT NULL AUTO_INCREMENT,
  `Nome_Categorias` varchar(50) DEFAULT NULL,
  `idsubcategoria_av1` int(11) DEFAULT NULL,
  `idsubcategoria_av2` int(11) DEFAULT NULL,
  PRIMARY KEY (`idCategorias`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'Eletrônicos, Áudio e Vídeo',1,1),(2,'Jóias e Relógios',2,2),(3,'Acessórios da Moda',3,3),(4,'Acessórios para Veículos',4,4);
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marcas`
--

DROP TABLE IF EXISTS `marcas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marcas` (
  `idMarcas` int(11) NOT NULL AUTO_INCREMENT,
  `Nome_Marcas` varchar(50) NOT NULL,
  PRIMARY KEY (`idMarcas`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marcas`
--

LOCK TABLES `marcas` WRITE;
/*!40000 ALTER TABLE `marcas` DISABLE KEYS */;
INSERT INTO `marcas` VALUES (1,'Acer'),(2,'AOC'),(3,'BakBlackBerry'),(4,'Dell'),(5,'Lennox'),(6,'Lenovo'),(7,'LG'),(8,'Microsoft'),(9,'Mirage'),(10,'Motorola'),(11,'Multilaser'),(12,'Nokia'),(13,'Samsung'),(14,'Sony'),(15,'Outras Marcas');
/*!40000 ALTER TABLE `marcas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtos` (
  `idCategoria` int(11) DEFAULT NULL,
  `idMarca` int(11) DEFAULT NULL,
  `idprodutos` int(11) NOT NULL AUTO_INCREMENT,
  `Nome_Produtos` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idprodutos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subcategoria_av1`
--

DROP TABLE IF EXISTS `subcategoria_av1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subcategoria_av1` (
  `idsubcategoria_av1` int(11) NOT NULL AUTO_INCREMENT,
  `nome_subcategoria_av1` varchar(45) NOT NULL,
  PRIMARY KEY (`idsubcategoria_av1`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subcategoria_av1`
--

LOCK TABLES `subcategoria_av1` WRITE;
/*!40000 ALTER TABLE `subcategoria_av1` DISABLE KEYS */;
INSERT INTO `subcategoria_av1` VALUES (1,'Tablets e Acessórios'),(2,'Relógios de Pulso'),(3,'Calçados, Roupas e Bolsas'),(4,'Acessórios de Carros');
/*!40000 ALTER TABLE `subcategoria_av1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subcategoria_av2`
--

DROP TABLE IF EXISTS `subcategoria_av2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subcategoria_av2` (
  `idsubcategoria_av2` int(11) NOT NULL AUTO_INCREMENT,
  `Nome_Subcategoria_av2` varchar(80) DEFAULT NULL,
  `idsubcategoria_av1` int(11) DEFAULT NULL,
  PRIMARY KEY (`idsubcategoria_av2`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subcategoria_av2`
--

LOCK TABLES `subcategoria_av2` WRITE;
/*!40000 ALTER TABLE `subcategoria_av2` DISABLE KEYS */;
INSERT INTO `subcategoria_av2` VALUES (1,'Tablets e Acessórios',1),(2,'Relógios de Pulso',2),(3,'Calçados, Roupas e Bolsas',3),(4,'Acessórios de Carros',4);
/*!40000 ALTER TABLE `subcategoria_av2` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-24 20:34:18
