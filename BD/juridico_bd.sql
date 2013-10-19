-- MySQL dump 10.13  Distrib 5.1.63, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: juridico_bd
-- ------------------------------------------------------
-- Server version	5.1.63-0ubuntu0.11.10.1

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
-- Table structure for table `abogado`
--

DROP TABLE IF EXISTS `abogado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `abogado` (
  `id_abogado` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `apellido` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `dni` int(10) NOT NULL,
  `matricula` varchar(45) NOT NULL,
  `telefono` varchar(40) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `contrasenia` char(8) NOT NULL,
  PRIMARY KEY (`id_abogado`),
  UNIQUE KEY `contrasenia` (`contrasenia`),
  UNIQUE KEY `dni` (`dni`),
  UNIQUE KEY `matricula` (`matricula`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abogado`
--

LOCK TABLES `abogado` WRITE;
/*!40000 ALTER TABLE `abogado` DISABLE KEYS */;
INSERT INTO `abogado` VALUES (1,'ARDILES','Silvina',22430373,'Tº 97/Fº 957','0280 55555555','ardiles_silvina@yahoo.com.ar','ardiles1'),(2,'BAEZA MORALES','Irma Isidora',5791849,'Tº 81/Fº 712','0280 4483395','baeza_morales_irma_isidora@yahoo.com.ar','asin1234'),(3,'BASTIDA Tomas','Oscar',30246820,'Tº 90/Fº 605','0280 4433611','bastida_tomas_oscar@yahoo.com.ar','nancifab'),(4,'BAUDES','Jorge Alberto',4275902,'Tº 107/Fº 727','0280 4480432','baudes_jorge_alberto@yahoo.com.ar','baezamor'),(5,'BOWMAN','Marcela',21626350,'Tº 82/Fº 424','0280 4474900','bowman_marcela@yahoo.com.ar','irmaisid'),(6,'BUSTAMANTE','Carlos Daniel',8907255,'Tº 68/Fº 494','0280 4496358','bustamante_carlos_daniel@yahoo.com.ar','bastidat'),(7,'BUSTOS','Silvia Alejandra',28620498,'Tº 108/Fº 962','0280 4438899','bustos_silvia_alejandra@yahoo.com.ar','oscar123'),(8,'CALVELO PEREZ','Ana María de los A',7837714,'Tº 76/Fº 349','0280 4469317','calvelo_perez_ana_maría de los a@yahoo.com.ar','baudes12'),(9,'CERRA CASTRO','Esteban Augusto',28387833,'Tº 21/Fº 206','0280 4480480','cerra_castro_esteban_augusto@yahoo.com.ar','jorgealb'),(10,'CHAVES','Miguel Angel',8373295,'Tº 116/Fº 917','0280 4452467','chaves_miguel_angel@gmail.com','bowman12'),(11,'COMINETTI','Romano Paolo',30345307,'Tº 61/Fº 709','0280 4425197','cominetti_romano_paolo@gmail.com','marcela1'),(12,'CONTI','Carlos Alberto',41568400,'Tº 98/Fº 128','0280 4480043','conti_carlos_alberto@gmail.com','bustaman'),(13,'CÓRDOBA','Carolina Silvia',34954050,'Tº 114/Fº 687','0280 4457543','cordoba_carolina_silvia@gmail.com','carlosda'),(14,'CUENCA','Pablo',5297796,'Tº 22/Fº 283','0280 4426902','_Pablo@gmail.com','bustos12'),(15,'CURTALE','Sebastián Andrés',22725716,'Tº 46/Fº 523','0280 4486085','curtale_sebastian_andres@gmail.com','silvia12'),(16,'CURTO','Fernando Andrés',15664704,'Tº 96/Fº 65','0280 4489012','curto_fernando_andrés@gmail.com','calvelop'),(17,'DAVIES','Malvina Argentina',36953552,'Tº 13/Fº 457','0280 4449574','davies_malvina_argentina@gmail.com','anamaria'),(18,'DI FILIPPO','CARAMÉS',0,'17823276','Tº 39/Fº 404','0280 4432495','di_filip'),(19,'DI PALMA','MEISEN Estefanía',5102788,'Tº 17/Fº 40','0280 4409492','di_palma_meisen_estefania@gmail.com','estebana'),(20,'ESCUDERO','Magalí',14611297,'Tº 20/Fº 941','0280 4441372','escudero_magali@gmail.com','chaves12'),(21,'ESPIRO','Federico Carlos',32979981,'Tº 78/Fº 360','0280 4464318','espiro_federico_carlos@gmail.com','miguelan'),(22,'FERNANDEZ','Claudio Alfredo',15017226,'Tº 22/Fº 270','0280 4431432','fernandez_claudio_alfredo@hotmail.com','cominett'),(23,'FERNANDEZ','Marcela Patricia E.',25708717,'Tº 27/Fº 721','0280 4458958','fernandez_marcela_patricia_e.@hotmail.com','romanopa'),(24,'FERNANDEZ','Myriam Alejandra',13340168,'Tº 77/Fº 915','0280 4405652','fernandez_myriam_alejandra@hotmail.com','conti123'),(25,'GIMENEZ','Ceferino',30805610,'Tº 47/Fº 246','0280 4440976','gimenez_ceferino@hotmail.com','carlosal'),(26,'GONZALEZ AYESA','Juan Carlos',17992689,'Tº 86/Fº 278','0280 4483527','gonzalez_ayesa_juan_carlos@hotmail.com','cordoba1'),(27,'GONZALEZ','Daniel Hugo',13726723,'Tº 68/Fº 941','0280 4454591','gonzalez_daniel_hugo@hotmail.com','carolina'),(28,'GONZALEZ','Humberto',13860268,'Tº 47/Fº 4','0280 4444871','gonzalez_humberto@hotmail.com','cuenca12'),(29,'GONZALEZ','Liliana Beatriz',21945316,'Tº 112/Fº 467','0280 4464853','gonzalez_liliana_beatriz@hotmail.com','pablo123'),(30,'GONZALEZ','Próspero',10556557,'Tº 106/Fº 537','0280 4498704','gonzalez_prospero@hotmail.com','curtale1'),(31,'GONZALEZ RODRIGUEZ','Laura',9427993,'Tº 64/Fº 550','0280 4475183','gonzalez_rodriguez_laura@hotmail.com','sebastia');
/*!40000 ALTER TABLE `abogado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `id_cliente` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `apellido` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `dni` int(15) NOT NULL,
  `domicilio_real` varchar(45) NOT NULL,
  `telefono` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `mail` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `dni` (`dni`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (2,'Alvarez Baena','Analia',69187249,'San Lorenzo 936','0280 4483395','Alvarez_Baena_Analia_@yahoo.com.ar;'),(3,'Bachiller Gines','Manuel',80609600,'Lisandro de la Torre 187','0280 4433611','Bachiller_Gines_Manuel_@yahoo.com.ar;'),(4,'Barcelo Garcia','Elisa',2107090,'Belgrano 1108','0280 4480432','Barcelo_Garcia_Elisa_@yahoo.com.ar;'),(5,'Barriuso de Miguel','Maria',85419967,'Islas Malvinas sin Nro.','0280 4474900','Barriuso_de_Miguel_Maria_Reyes_@yahoo.com.ar;'),(6,'Berciano Lopez','Araceli',33183450,'Carlos Pellegrini 2064','0280 4496358','Berciano_Lopez_Araceli_@yahoo.com.ar;'),(8,'Calvo PiÃ±eira','Maria Jesus',57931018,'San Martin 486','0280 4438899','Calvo_PiÃ±eira_Maria_Jesus_@yahoo.com.ar;'),(9,'Campo Pedrero','Cristina',87376660,'Quintana 515','0280 4469317','Campo_Pedrero_Cristina_@yahoo.com.ar;'),(11,'Huerta','Alberto',48558072,'Estanislao Lopez 172','0280 4452467','De_la_O_Huerta_Alberto_@gmail.com;'),(12,'De Rivera Parga','Maria',39219807,'Av.9 de Julio 1087','0280 4425197','De_Rivera_Parga_Maria_@gmail.com;'),(14,'Dominguez de la Parra','Luz',84070129,'Bv. Ledesma 646','0280 4457543','Dominguez_de_la_Parra_Luz_@gmail.com;'),(15,'Donado Manzanares','Marcial',32056639,'Av. San Martin 169','0280 4426902','Donado_Manzanares_Marcial_@gmail.com;'),(17,'Fuente Garcia','Jose Miguel',98430724,'9 de Julio 237','0280 4489012','Fuente_Garcia_Jose_Miguel_@gmail.com;'),(18,'Gallardo Pinto','Francisco Jose',89820087,'Av. San Martin 390','0280 4449574','Gallardo_Pinto_Francisco_Jose_@gmail.com;'),(19,'Garcia Burgos','Maria Carmen',18922090,'Santa Fe 270','0280 4432495','Garcia_Burgos_Maria_Carmen_@gmail.com;'),(20,'Garcia Perez','Maria Paloma',19759398,'Sarmiento 184','0280 4409492','Garcia_Perez_Maria_Paloma_@gmail.com;'),(21,'Guardia Cordero','Margarita',37214437,'Calle 12 n° 680','0280 4441372','Guardia_Cordero_Margarita_@hotmail.com;'),(22,'Isac Marugan','Antonia',97310426,'Amaghino 206','0280 4464318','Isac_Marugan_Antonia_@hotmail.com;'),(23,'Izquierdo Albelda','Blanca',87097736,'Santa Fe sin n°','0280 4431432','Izquierdo_Albelda_Blanca_@hotmail.com;'),(24,'Lara Aliaga','Maria Dolores',39755928,'Rogelio Terre 901','0280 4458958','Lara_Aliaga_Maria_Dolores_@hotmail.com;'),(25,'Magan Revuelta','Mario',65089933,'Sophie Miche s/n°','0280 4405652','Magan_Revuelta_Mario_@hotmail.com;'),(26,'Martin Marinas','Paloma',26915178,'Av. Sarmiento 585','0280 4440976','Martin_Marinas_Paloma_@hotmail.com;'),(27,'Martinez Iglesias','Yolanda',79396502,'Sarmiento 653','0280 4483527','Martinez_Iglesias_Yolanda_@hotmail.com;'),(28,'Molina Gallego','Manuela',2192971,'Altamirano 584','0280 4454591','Molina_Gallego_Manuela_@hotmail.com;'),(29,'Navarro Contreras','Concepcion',6274010,'Moreno 190','0280 4444871','Navarro_Contreras_Concepcion_@hotmail.com;'),(30,'Negueroles EspaÃ±a','Maria del Rosario',47142506,'San Martin 784','0280 4464853','Negueroles_EspaÃ±a_Maria_del_Rosario_@hotmail.com;'),(31,'Orta Gonzalez OrduÃ±a','Marisol',38021031,'Zona Urbana','0280 4498704','Orta_Gonzalez__OrduÃ±a_Marisol_@speedy.com.ar;'),(32,'Pastor Montero','Cesar Javier',77500326,'Moreno 852','0280 4475183','Pastor_Montero_Cesar_Javier_@speedy.com.ar;'),(33,'Pereira Valcarcel','Secundino',80476363,'R.Saenz Peña 1109','0280 4457952','Pereira_Valcarcel_Secundino_@speedy.com.ar;'),(34,'Perez Bahamonde','Jose Francisco',10019664,'Av. Julio B. Oroño 423','0280 4438330','Perez_Bahamonde_Jose_Francisco_@speedy.com.ar;'),(35,'Real Barba','Jose Maria',69171664,'H. Yrigoyen 227','0280 4459839','Real_Barba_Jose_Maria_@speedy.com.ar;'),(36,'Rios Alcantarilla','Ana Isabel',86313967,'Urquiza 750','0280 4465055','Rios_Alcantarilla_Ana_Isabel_@speedy.com.ar;'),(37,'Rodriguez Cabezas','Miguel Angel',11999664,'Rivadavia 630','0280 4403771','Rodriguez_Cabezas_Miguel_Angel_@speedy.com.ar;'),(39,'Miranda','MarÃ­a del Rosario',22987512,'Brasil 85','0280 154352178','maria_del_rosario_miranda@hotmail.com'),(40,'Barreda','Juana',26543668,'Pedro Paramo 234','0280 4439064','juana_barreda@yahoo.com'),(42,'GoÃ±i','MÃ³nica',25355449,'Juan Manuel de Rosas 234','0280 4439065','monica_goÃ±i@yahoo.com'),(43,'Pasos','Nancy',21786002,'San Martin 650','0280 154778098','nancy_pasos@gmail.com'),(44,'Sosa','Patricia',17908412,'Larrea 1289','0280 4456098','patricia_sosa@gmail.com'),(45,'Perez','Sandra',10341823,'Mitre 439','0280 447865','sandra_perez@yahoo.com'),(46,'Argento','Pepe',17098623,'Av. Colombia 214','0280 154673290','pepe_argento@hotmail.com');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consulta`
--

DROP TABLE IF EXISTS `consulta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consulta` (
  `id_consulta` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `descripcion` text,
  `abogado` tinyint(3) unsigned NOT NULL,
  `cliente` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id_consulta`),
  KEY `abogado` (`abogado`),
  KEY `cliente` (`cliente`),
  CONSTRAINT `consulta_ibfk_1` FOREIGN KEY (`abogado`) REFERENCES `abogado` (`id_abogado`),
  CONSTRAINT `consulta_ibfk_2` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id_cliente`),
  CONSTRAINT `consulta_ibfk_3` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consulta`
--

LOCK TABLES `consulta` WRITE;
/*!40000 ALTER TABLE `consulta` DISABLE KEYS */;
INSERT INTO `consulta` VALUES (9,'2013-10-17 17:34:00',NULL,31,45),(10,'2013-10-17 17:40:27','',31,45),(11,'2013-10-18 20:03:56',NULL,1,46),(12,'2013-10-18 20:05:27','Quiere demandar a su mujer por acoso sexual. Le digo que el debito conyugal es un deber por parte del marido...Se va enojado.',1,46);
/*!40000 ALTER TABLE `consulta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expediente`
--

DROP TABLE IF EXISTS `expediente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expediente` (
  `id_expediente` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `caratula` varchar(90) NOT NULL,
  `num_expte` int(10) NOT NULL,
  `anio` year(4) NOT NULL,
  `juzgado` varchar(45) NOT NULL,
  `tipo_de_parte` char(1) NOT NULL,
  `abogado_contraparte` varchar(45) DEFAULT NULL,
  `nombre_contraparte` varchar(45) NOT NULL,
  `domicilio_const_contraparte` varchar(45) DEFAULT NULL,
  `domicilio_real_contraparte` varchar(45) DEFAULT NULL,
  `circunscripcion` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_expediente`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=hp8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expediente`
--

LOCK TABLES `expediente` WRITE;
/*!40000 ALTER TABLE `expediente` DISABLE KEYS */;
INSERT INTO `expediente` VALUES (1,'AUTOSUR S.A. c/ BARCELO GARCIA, Elisa s/ Ejecucion Prendaria',342,2013,'Juzgado de Ejecucion Nro 1','d','FERNANDEZ, Juan Pablo','AUTOSUR S.A','Av. Hipolito Yrigoyen 1403','Av. Hipolito Yrigoyen 1403',''),(2,'GALLARDO PINTO, Francisco JosÃ? c/ GIMENEZ, Graciela s/ Divorcio Vincular',455,2013,'Familia NÂ°1','A','PASO, Juan AndrÃ?s','GIMENEZ, Graciela','Av. Yrigoyen  NÂ° 344 5to A','Moreno NÂ° 788','Trelew'),(3,' VON BROCKE, Evelyn c/DOMAN, Fabian s/ ALIMENTOS',1290,2013,'Familia NÂ°12','D','D\' Allesandro, Carlos',' VON BROCKE, Evelyn ','Av. Callao 455 3ro A','Av. Santa Fe 4678 1ro C','CABA'),(4,' VON BROCKE, Evelyn c/DOMAN, Fabian s/ ALIMENTOS',1290,2013,'Familia NÂ°12','D','D\' Allesandro, Carlos',' VON BROCKE, Evelyn ','Av. Callao 455 3ro A','Av. Santa Fe 4678 1ro C','CABA'),(5,'HUERTA, Alberto c/ HUERTA, Gladys s/ USUCAPION',98,2012,'Juzgado Civil y Comercial Nro 2','A','PAEZ, MarÃ?a Cristina','HUERTA, Gladys','Galina 234','Chacra 206 A Gaiman','Trelew'),(6,'PEREZ, Sandra c/ ISAC MARUGON, Antonia s/ EJECUCION HIPOTECARIA',1123,2012,'Juzgado de EjecuciÃ?n Nro 2','D','PASO, Juan AndrÃ?s','PEREZ, Sandra','Av. Yrigoyen  NÂ° 344 5to A','Urquiza 89','Trelew'),(7,'PEREZ, Sandra c/ ISAC MARUGON, Antonia s/ EJECUCION HIPOTECARIA',1123,2012,'Juzgado de EjecuciÃ?n Nro 2','D','PASO, Juan AndrÃ?s','PEREZ, Sandra','Av. Yrigoyen  NÂ° 344 5to A','Urquiza 89','Trelew'),(8,' VON BROCKE, Evelyn c/DOMAN, Fabian s/ ALIMENTOS',1123,2013,'Familia NÂ°12','D','D\' Allesandro, Carlos',' VON BROCKE, Evelyn ','Av. Callao 455 3ro A','Av. Santa Fe 4678 1ro C','CABA'),(9,' VON BROCKE, Evelyn c/DOMAN, Fabian s/ ALIMENTOS',1123,2013,'Familia NÂ°12','D','Perez, Francisco',' VON BROCKE, Evelyn ','Av. Callao 455 3ro A','Av. Santa Fe 4678 1ro C','CABA'),(10,' BROCKE, Evelyn c/DOMAN, Fabian s/ ALIMENTOS',1123,1965,'Familia NÂ°12','D','D',' VON BROCKE, Evelyn ','Av. Callao 455 3ro A','Av. Santa Fe 4678 1ro C','Trelew'),(11,' VON BROCKE, Evelyn c/DOMAN, Fabian s/ ALIMENTOS',1123,2013,'Familia NÂ°12','D','D\' Allesandro, Carlos',' VON BROCKE, Evelyn ','Av. Callao 455 3ro A','Av. Santa Fe 4678 1ro C','CABA'),(12,' VON BROCKE, Evelyn c/DOMAN, Fabian s/ ALIMENTOS',1123,2013,'Familia NÂ°12','D','D\' Allesandro, Carlos',' VON BROCKE, Evelyn ','Av. Callao 455 3ro A','Av. Santa Fe 4678 1ro C','CABA'),(13,' VON BROCKE, Evelyn c/DOMAN, Fabian s/ ALIMENTOS',1123,2013,'Familia NÂ°12','D','D\' Allesandro, Carlos',' VON BROCKE, Evelyn ','Av. Callao 455 3ro A','Av. Santa Fe 4678 1ro C','CABA'),(16,'FERRERO, Manuel s/ SUCESION',2,2013,'Familia NÂ°12','A','D','PEREZ, Sandra','Av. Callao 455 3ro A','Moreno NÂ° 788','Trelew'),(17,'PEREZ, RaÃºl c/ GIMENEZ, Graciela s/ Divorcio Vincular',455,2013,'Familia NÂ°1','A','PASO, Juan AndrÃ?s','GIMENEZ, Graciela','Av. Yrigoyen  NÂ° 344 5to A','Moreno NÂ° 788','Trelew'),(18,'PEREZ, RaÃºl c/ GIMENEZ, Graciela s/ Divorcio Vincular',455,2013,'Familia NÂ°1','A','PASO, Juan AndrÃ?s',' VON BROCKE, Evelyn ','Av. Yrigoyen  NÂ° 344 5to A','Moreno NÂ° 788','Trelew'),(19,'PEREZ, RaÃºl c/ GIMENEZ, Graciela s/ Divorcio Vincular',455,2013,'Familia NÂ°1','A','PASO, Juan AndrÃ?s','GIMENEZ, Graciela','Av. Yrigoyen  NÂ° 344 5to A','Moreno NÂ° 788','Trelew'),(20,' PINTO, Francisco Carlos c/ GIMENEZ, Graciela s/ Divorcio Vincular',10,2012,'Familia NÂ°2','d','Sosa, Juan Andres','Fernandez, Graciela','Moreno 345','Av. Hipolito Yrigoyen 1403','Trelew'),(21,'Elascar, Carlos c/ Lanata, Jorge s/ DAÃ?OS Y PERJUICIOS',23,2013,'Civil y Comercial Nro 2','D','PEREZ GALIMBERTI, Gabriel','Elascar, Carlos','Colombia 513','Barrio Los Olmos','Trelew');
/*!40000 ALTER TABLE `expediente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expediente_cliente_abogado`
--

DROP TABLE IF EXISTS `expediente_cliente_abogado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expediente_cliente_abogado` (
  `cliente` smallint(5) unsigned NOT NULL DEFAULT '0',
  `abogado` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `expediente` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`cliente`,`abogado`,`expediente`),
  KEY `expediente` (`expediente`),
  KEY `abogado` (`abogado`),
  CONSTRAINT `expediente_cliente_abogado_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id_cliente`),
  CONSTRAINT `expediente_cliente_abogado_ibfk_2` FOREIGN KEY (`abogado`) REFERENCES `abogado` (`id_abogado`),
  CONSTRAINT `expediente_cliente_abogado_ibfk_3` FOREIGN KEY (`expediente`) REFERENCES `expediente` (`id_expediente`),
  CONSTRAINT `expediente_cliente_abogado_ibfk_4` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `expediente_cliente_abogado_ibfk_5` FOREIGN KEY (`abogado`) REFERENCES `abogado` (`id_abogado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expediente_cliente_abogado`
--

LOCK TABLES `expediente_cliente_abogado` WRITE;
/*!40000 ALTER TABLE `expediente_cliente_abogado` DISABLE KEYS */;
INSERT INTO `expediente_cliente_abogado` VALUES (3,1,1),(4,1,9),(12,1,1),(14,1,20),(20,1,12);
/*!40000 ALTER TABLE `expediente_cliente_abogado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ultimo_prov`
--

DROP TABLE IF EXISTS `ultimo_prov`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ultimo_prov` (
  `id_prov` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_expediente` int(10) unsigned NOT NULL,
  `ultimo_movimiento` text NOT NULL,
  PRIMARY KEY (`id_prov`),
  KEY `id_expediente` (`id_expediente`),
  CONSTRAINT `ultimo_prov_ibfk_1` FOREIGN KEY (`id_expediente`) REFERENCES `expediente` (`id_expediente`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ultimo_prov`
--

LOCK TABLES `ultimo_prov` WRITE;
/*!40000 ALTER TABLE `ultimo_prov` DISABLE KEYS */;
INSERT INTO `ultimo_prov` VALUES (3,1,'El lunes presentamos las copias certificadas de los titulos de propiedad.'),(4,10,'if($bandera_insert == 1)//Avisa si el ingreso fue exitoso o fallÃ³\r\n						{\r\n							$mensaje_error = \'El ingreso fue exitoso\';\r\n						}else\r\n						{\r\n							$mensaje_error = \'El ingreso ha fallado, intente nuevamente\';\r\n						}'),(5,17,'Sentencia definitiva'),(6,17,'Sentencia definitiva'),(7,6,'le remataron todo'),(8,5,'Le ocuparon la casa'),(9,20,'Se estÃ¡n matando'),(10,20,'La madre no le cumple con el rÃ©gimen de comunicaciÃ³n con los chicos. Se prepara la cautelar.'),(11,10,''),(12,10,'holasssssss');
/*!40000 ALTER TABLE `ultimo_prov` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-10-19 12:15:07
