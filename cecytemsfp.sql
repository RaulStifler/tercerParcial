-- MySQL dump 10.16  Distrib 10.1.9-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: cecytemsfp
-- ------------------------------------------------------
-- Server version	10.1.9-MariaDB

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
-- Table structure for table `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumnos` (
  `n_control` varchar(5) NOT NULL,
  `ap_paterno` varchar(30) NOT NULL,
  `ap_materno` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `fec_nac` date NOT NULL,
  `edad` tinyint(4) NOT NULL,
  `sexo` tinytext NOT NULL,
  `estado_civil` tinytext NOT NULL,
  `grado_estudios` tinytext NOT NULL,
  `semestre` tinyint(4) NOT NULL,
  `grupo` tinytext NOT NULL,
  `estatus` tinytext NOT NULL,
  `entidad_nac` tinytext NOT NULL,
  `curp` tinytext NOT NULL,
  `calle` tinytext NOT NULL,
  `num_ext` tinyint(4) NOT NULL,
  `num_int` tinyint(4) NOT NULL,
  `entre_calle` tinytext NOT NULL,
  `y_calle` tinytext NOT NULL,
  `otra_referencia` tinytext NOT NULL,
  `colonia` tinytext NOT NULL,
  `localidad` tinytext NOT NULL,
  `municipio` tinytext NOT NULL,
  `entidad` tinytext NOT NULL,
  `cp` tinytext NOT NULL,
  `tel_fijo` tinytext NOT NULL,
  `tel_cel` tinytext NOT NULL,
  `mail` tinytext NOT NULL,
  `tipo_beca` tinytext NOT NULL,
  `tutor` tinytext NOT NULL,
  PRIMARY KEY (`n_control`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumnos`
--

LOCK TABLES `alumnos` WRITE;
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
INSERT INTO `alumnos` VALUES ('00001','pedraza','alonso','valentin','2017-01-26',35,'hombre','soltero','media superior',3,'303','activo','mexico','peproer3434ww','prolongacion',23,1,'av. principal','av. principal','ninguna','centro','acambay','acambay','mexico','50300','23232323','23242423','wwe@gmail.com','no se','00001'),('00002','perez','rodriguez','juan carlos','2017-01-18',34,'hombre','soltero','kinder',5,'5001','activo','queretaro','wererer434werewrwer','manzanas',23,0,'peras','guayabas','al lado del arbol','centro','san lucas','san felipe del progreso','mexico','34004','71212121212','71212313133','ddfdfd@gmail.com','pro mazahua','00002'),('00003','jimenez','sanchez','perla','2017-01-23',13,'mujer','soltero','prepa',3,'303','activo','mexico','dhfjdhfjk4343','ddfgfgdfg',4,0,'dfdfdsfsdfdsfsdf','dfsdfvcvgfhghgfh','lkffgkfjkfdjgklfg','centro','xalpa','san felipe del progreso','mexico','48549','7347387483924','734873748392','dffgfdg@hotmail.com','escolaridad','00003');
/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tutor`
--

DROP TABLE IF EXISTS `tutor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tutor` (
  `id_tutor` varchar(5) NOT NULL,
  `ap_paterno` varchar(30) NOT NULL,
  `ap_materno` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `fec_nac` date NOT NULL,
  `sexo` tinytext NOT NULL,
  `estado_civil` tinytext NOT NULL,
  `grado_estudios` tinytext NOT NULL,
  `ident_oficial` tinytext NOT NULL,
  `clave_elector` tinytext NOT NULL,
  `num_ine` tinytext NOT NULL,
  `entidad_nac` tinytext NOT NULL,
  `curp` tinytext NOT NULL,
  `calle` tinytext NOT NULL,
  `num_ext` tinyint(4) NOT NULL,
  `num_int` tinyint(4) NOT NULL,
  `entre_calle` tinytext NOT NULL,
  `y_calle` tinytext NOT NULL,
  `otra_referencia` tinytext NOT NULL,
  `colonia` tinytext NOT NULL,
  `localidad` tinytext NOT NULL,
  `municipio` tinytext NOT NULL,
  `entidad` tinytext NOT NULL,
  `cp` tinytext NOT NULL,
  `tel_fijo` tinytext NOT NULL,
  `tel_cel` tinytext NOT NULL,
  `mail` tinytext NOT NULL,
  PRIMARY KEY (`id_tutor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutor`
--

LOCK TABLES `tutor` WRITE;
/*!40000 ALTER TABLE `tutor` DISABLE KEYS */;
/*!40000 ALTER TABLE `tutor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id_user` varchar(10) NOT NULL,
  `password` varchar(8) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES ('admin','admin','valentin');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-15 10:41:27
