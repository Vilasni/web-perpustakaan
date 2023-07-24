-- MariaDB dump 10.19  Distrib 10.7.3-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: perpustakaan
-- ------------------------------------------------------
-- Server version	10.7.3-MariaDB-log

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
-- Table structure for table `buku`
--

DROP TABLE IF EXISTS `buku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buku` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `kode_buku` varchar(100) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `pengarang` varchar(250) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `penerbit` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buku`
--

LOCK TABLES `buku` WRITE;
/*!40000 ALTER TABLE `buku` DISABLE KEYS */;
INSERT INTO `buku` VALUES
(1,'BK-929229','1984','George Orwell','1964','-');
/*!40000 ALTER TABLE `buku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mahasiswa`
--

DROP TABLE IF EXISTS `mahasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mahasiswa` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `nim` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mahasiswa`
--

LOCK TABLES `mahasiswa` WRITE;
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peminjaman`
--

DROP TABLE IF EXISTS `peminjaman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peminjaman` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `buku_id` int(5) NOT NULL,
  `mahasiswa_id` int(4) NOT NULL,
  `tanggal_dipinjam` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Dipinjam',
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Kartu_Perpustakaan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peminjaman`
--

LOCK TABLES `peminjaman` WRITE;
/*!40000 ALTER TABLE `peminjaman` DISABLE KEYS */;
INSERT INTO `peminjaman` VALUES
(1,1,5,'2023-07-24','Dikembalikan','test');
/*!40000 ALTER TABLE `peminjaman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(5) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `User_ID` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES
(3,'admin','$2y$10$mRCJJYeVDLJ.5rAoXSWVLOsKEPAo7Ffiu3gMhsS12zSIfh2YAtBNK','Admin 1');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'perpustakaan'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-24 17:15:54
