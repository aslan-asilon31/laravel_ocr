-- MySQL dump 10.13  Distrib 8.4.1, for Win64 (x86_64)
--
-- Host: localhost    Database: laravel_ocr
-- ------------------------------------------------------
-- Server version	8.4.1

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

--
-- Table structure for table `academic_transcripts`
--

DROP TABLE IF EXISTS `academic_transcripts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `academic_transcripts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `universitas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan_studi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenjang_gelar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ipk` decimal(4,2) DEFAULT NULL,
  `fakultas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `academic_transcripts_nim_unique` (`nim`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `academic_transcripts`
--

LOCK TABLES `academic_transcripts` WRITE;
/*!40000 ALTER TABLE `academic_transcripts` DISABLE KEYS */;
INSERT INTO `academic_transcripts` VALUES (65,'academic-transcript.jpg','Universitas A','123456789','Alice Johnson','Teknik Informatika','S.T.',3.75,'Fakultas Teknik','2024-09-09 09:19:36','2024-09-09 09:19:36'),(66,'academic-transcript.jpg','Universitas B','987654321','Bob Smith','Sistem Informasi','S.Kom.',3.60,'Fakultas Ilmu Komputer','2024-09-09 09:19:36','2024-09-09 09:19:36'),(67,'academic-transcript.jpg','Universitas C','456789123','Charlie Brown','Ekonomi','S.E.',3.85,'Fakultas Ekonomi','2024-09-09 09:19:36','2024-09-09 09:19:36'),(68,'academic-transcript.jpg','Universitas D','321654987','Diana Prince','Pendidikan','S.Pd.',3.50,'Fakultas Pendidikan','2024-09-09 09:19:36','2024-09-09 09:19:36'),(69,'academic-transcript.jpg','Universitas E','789123456','Ethan Hunt','Teknik Mesin','S.T.',3.70,'Fakultas Teknik','2024-09-09 09:19:36','2024-09-09 09:19:36'),(70,'academic-transcript.jpg','Universitas F','654789321','Fiona Gallagher','Kebidanan','S.Keb.',3.65,'Fakultas Kedokteran','2024-09-09 09:19:36','2024-09-09 09:19:36'),(71,'academic-transcript.jpg','Universitas G','123987456','George Clooney','Hukum','S.H.',3.80,'Fakultas Hukum','2024-09-09 09:19:36','2024-09-09 09:19:36'),(72,'academic-transcript.jpg','Universitas H','987321654','Hannah Montana','Psikologi','S.Psi.',3.90,'Fakultas Psikologi','2024-09-09 09:19:36','2024-09-09 09:19:36'),(73,'academic-transcript.jpg','Universitas I','456321987','Ian Malcolm','Sosiologi','S.Sos.',3.55,'Fakultas Ilmu Sosial','2024-09-09 09:19:36','2024-09-09 09:19:36'),(74,'academic-transcript.jpg','Universitas J','321987654','Julia Roberts','Farmasi','S.Farm.',3.70,'Fakultas Farmasi','2024-09-09 09:19:36','2024-09-09 09:19:36'),(75,'academic-transcript.jpg','Universitas K','789456123','Kevin Spacey','Teknik Elektro','S.T.',3.60,'Fakultas Teknik','2024-09-09 09:19:36','2024-09-09 09:19:36'),(76,'academic-transcript.jpg','Universitas L','654123987','Laura Croft','Akuntansi','S.Ak.',3.75,'Fakultas Ekonomi','2024-09-09 09:19:36','2024-09-09 09:19:36'),(77,'academic-transcript.jpg','Universitas M','123654789','Michael Scott','Ilmu Komunikasi','S.I.Kom.',3.85,'Fakultas Ilmu Komunikasi','2024-09-09 09:19:36','2024-09-09 09:19:36'),(78,'academic-transcript.jpg','Universitas N','987456321','Nina Simone','Teknik Sipil','S.T.',3.50,'Fakultas Teknik','2024-09-09 09:19:36','2024-09-09 09:19:36'),(79,'academic-transcript.jpg','Universitas O','456789321','Oliver Queen','Kedokteran','S.Ked.',3.90,'Fakultas Kedokteran','2024-09-09 09:19:36','2024-09-09 09:19:36'),(80,'academic-transcript.jpg','Universitas P','321456987','Paul Atreides','Filsafat','S.Fil.',3.65,'Fakultas Filsafat','2024-09-09 09:19:36','2024-09-09 09:19:36'),(81,'academic-transcript.jpg','Universitas Q','789123654','Quinn Fabray','Teknik Kimia','S.T.',3.70,'Fakultas Teknik','2024-09-09 09:19:36','2024-09-09 09:19:36'),(82,'academic-transcript.jpg','Universitas R','654789123','Rachel Green','Seni & Teknologi','S.S.T.',3.80,'Fakultas Seni dan Teknologi','2024-09-09 09:19:36','2024-09-09 09:19:36'),(83,'academic-transcript.jpg','Universitas S','123987654','Steve Rogers','Psikologi dan Teknologi','S.P.T.',3.55,'Fakultas Psikologi dan Teknologi','2024-09-09 09:19:36','2024-09-09 09:19:36'),(84,'academic-transcript.jpg','Universitas T','987321456','Tracy Jordan','Kesehatan','S.Kep.',3.90,'Fakultas Kesehatan','2024-09-09 09:19:36','2024-09-09 09:19:36'),(85,'academic-transcript.jpg','Universitas U','456123789','Ursula K. Le Guin','Sosiologi','S.Sos.',3.65,'Fakultas Ilmu Sosial','2024-09-09 09:19:36','2024-09-09 09:19:36'),(86,'academic-transcript.jpg','Universitas V','321987456','Victor Frankenstein','Teknik Biomedis','S.T.',3.80,'Fakultas Teknik Biomedis','2024-09-09 09:19:36','2024-09-09 09:19:36'),(87,'academic-transcript.jpg','Universitas W','789456321','Wanda Maximoff','Humaniora','S.Hum.',3.50,'Fakultas Humaniora','2024-09-09 09:19:36','2024-09-09 09:19:36'),(88,'academic-transcript.jpg','Universitas X','654123456','Xena Warrior','Kedokteran Gigi','S.KG.',3.75,'Fakultas Kedokteran Gigi','2024-09-09 09:19:36','2024-09-09 09:19:36'),(89,'academic-transcript.jpg','Universitas Y','321654123','Yara Shahidi','Teknik Lingkungan','S.T.',3.70,'Fakultas Teknik Lingkungan','2024-09-09 09:19:36','2024-09-09 09:19:36'),(90,'academic-transcript.jpg','Universitas Z','987654123','Zane Grey','Ilmu Lingkungan','S.I.L.',3.60,'Fakultas Ilmu Lingkungan','2024-09-09 09:19:36','2024-09-09 09:19:36'),(91,'academic-transcript.jpg','Universitas AA','456123654','Ariel Winter','Teknik Komputer','S.T.',3.90,'Fakultas Teknik','2024-09-09 09:19:36','2024-09-09 09:19:36'),(92,'academic-transcript.jpg','Universitas BB','321789654','Bella Hadid','Ilmu Keperawatan','S.Kep.',3.80,'Fakultas Keperawatan','2024-09-09 09:19:36','2024-09-09 09:19:36'),(93,'academic-transcript.jpg','Universitas CC','789654321','Chris Evans','Teknik Perkapalan','S.T.',3.55,'Fakultas Teknik Perkapalan','2024-09-09 09:19:36','2024-09-09 09:19:36'),(94,'academic-transcript.jpg','Universitas DD','654321789','Daisy Ridley','Teknik Geologi','S.T.',3.65,'Fakultas Teknik Geologi','2024-09-09 09:19:36','2024-09-09 09:19:36'),(95,'academic-transcript.jpg','Universitas EE','123456987','Edward Norton','Ilmu Komputer','S.Kom.',3.75,'Fakultas Ilmu Komputer','2024-09-09 09:19:36','2024-09-09 09:19:36'),(96,'academic-transcript.jpg','Universitas FF','987321450','Felicity Jones','Arsitektur','S.Ar.',3.80,'Fakultas Arsitektur','2024-09-09 09:19:36','2024-09-09 09:19:36');
/*!40000 ALTER TABLE `academic_transcripts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `certificate`
--

DROP TABLE IF EXISTS `certificate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `certificate` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_universitas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gelar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ijazah_atau_skl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan_penandatangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_tahun_lulus` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `certificate`
--

LOCK TABLES `certificate` WRITE;
/*!40000 ALTER TABLE `certificate` DISABLE KEYS */;
INSERT INTO `certificate` VALUES (1,'ijasah.jpg','Alice Johnson','123456789','Universitas A','S.T.','Teknik Informatika','Lulus','Ijazah','Rektor','2022-06-15','2024-09-09 09:17:19','2024-09-09 09:17:19'),(2,'ijasah.jpg','Bob Smith','987654321','Universitas B','S.Kom.','Sistem Informasi','Lulus','SKL','Dekan','2021-12-01','2024-09-09 09:17:19','2024-09-09 09:17:19'),(3,'ijasah.jpg','Charlie Brown','456789123','Universitas C','S.E.','Ekonomi','Lulus','Ijazah','Rektor','2020-08-20','2024-09-09 09:17:19','2024-09-09 09:17:19'),(4,'ijasah.jpg','Diana Prince','321654987','Universitas D','S.Pd.','Pendidikan','Lulus','SKL','Dekan','2019-05-10','2024-09-09 09:17:19','2024-09-09 09:17:19'),(5,'ijasah.jpg','Ethan Hunt','789123456','Universitas E','S.T.','Teknik Mesin','Lulus','Ijazah','Rektor','2022-03-25','2024-09-09 09:17:19','2024-09-09 09:17:19'),(6,'ijasah.jpg','Fiona Gallagher','654789321','Universitas F','S.Keb.','Kebidanan','Lulus','SKL','Dekan','2021-11-15','2024-09-09 09:17:19','2024-09-09 09:17:19'),(7,'ijasah.jpg','George Clooney','123987456','Universitas G','S.H.','Hukum','Lulus','Ijazah','Rektor','2020-09-12','2024-09-09 09:17:19','2024-09-09 09:17:19'),(8,'ijasah.jpg','Hannah Montana','987321654','Universitas H','S.Psi.','Psikologi','Lulus','SKL','Dekan','2019-06-18','2024-09-09 09:17:19','2024-09-09 09:17:19'),(9,'ijasah.jpg','Ian Malcolm','456321987','Universitas I','S.Sos.','Sosiologi','Lulus','Ijazah','Rektor','2022-07-30','2024-09-09 09:17:19','2024-09-09 09:17:19'),(10,'ijasah.jpg','Julia Roberts','321987654','Universitas J','S.Farm.','Farmasi','Lulus','SKL','Dekan','2021-04-05','2024-09-09 09:17:19','2024-09-09 09:17:19'),(11,'ijasah.jpg','Kevin Spacey','789456123','Universitas K','S.T.','Teknik Elektro','Lulus','Ijazah','Rektor','2020-11-23','2024-09-09 09:17:19','2024-09-09 09:17:19'),(12,'ijasah.jpg','Laura Croft','654123987','Universitas L','S.Ak.','Akuntansi','Lulus','SKL','Dekan','2019-08-27','2024-09-09 09:17:19','2024-09-09 09:17:19'),(13,'ijasah.jpg','Michael Scott','123654789','Universitas M','S.I.Kom.','Ilmu Komunikasi','Lulus','Ijazah','Rektor','2022-02-19','2024-09-09 09:17:19','2024-09-09 09:17:19'),(14,'ijasah.jpg','Nina Simone','987456321','Universitas N','S.T.','Teknik Sipil','Lulus','SKL','Dekan','2021-07-15','2024-09-09 09:17:19','2024-09-09 09:17:19'),(15,'ijasah.jpg','Oliver Queen','456789321','Universitas O','S.Ked.','Kedokteran','Lulus','Ijazah','Rektor','2020-10-09','2024-09-09 09:17:19','2024-09-09 09:17:19'),(16,'ijasah.jpg','Paul Atreides','321456987','Universitas P','S.Fil.','Filsafat','Lulus','SKL','Dekan','2019-03-11','2024-09-09 09:17:19','2024-09-09 09:17:19'),(17,'ijasah.jpg','Quinn Fabray','789123654','Universitas Q','S.T.','Teknik Kimia','Lulus','Ijazah','Rektor','2022-01-25','2024-09-09 09:17:19','2024-09-09 09:17:19'),(18,'ijasah.jpg','Rachel Green','654789123','Universitas R','S.S.T.','Seni & Teknologi','Lulus','SKL','Dekan','2021-09-30','2024-09-09 09:17:19','2024-09-09 09:17:19'),(19,'ijasah.jpg','Steve Rogers','123987654','Universitas S','S.P.T.','Psikologi dan Teknologi','Lulus','Ijazah','Rektor','2020-06-05','2024-09-09 09:17:19','2024-09-09 09:17:19'),(20,'ijasah.jpg','Tracy Jordan','987321456','Universitas T','S.Kep.','Kesehatan','Lulus','SKL','Dekan','2019-12-20','2024-09-09 09:17:19','2024-09-09 09:17:19'),(21,'ijasah.jpg','Ursula K. Le Guin','456123789','Universitas U','S.Sos.','Sosiologi','Lulus','Ijazah','Rektor','2022-08-12','2024-09-09 09:17:19','2024-09-09 09:17:19'),(22,'ijasah.jpg','Victor Frankenstein','321987456','Universitas V','S.T.','Teknik Biomedis','Lulus','SKL','Dekan','2021-06-24','2024-09-09 09:17:19','2024-09-09 09:17:19'),(23,'ijasah.jpg','Wanda Maximoff','789456321','Universitas W','S.Hum.','Humaniora','Lulus','Ijazah','Rektor','2020-02-14','2024-09-09 09:17:19','2024-09-09 09:17:19');
/*!40000 ALTER TABLE `certificate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ktp`
--

DROP TABLE IF EXISTS `ktp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ktp` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `golongan_darah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `rt_rw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_perkawinan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kewarganegaraan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `berlaku_hingga` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ktp_nik_unique` (`nik`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ktp`
--

LOCK TABLES `ktp` WRITE;
/*!40000 ALTER TABLE `ktp` DISABLE KEYS */;
INSERT INTO `ktp` VALUES (1,'9101061710990004_KTP_235818-v1.jpeg','Alice Johnson','1234567891','Bandung','1995-02-14','A','Jl. Merdeka No. 10','02/03','Kelurahan A','Kecamatan B','Kabupaten C','Provinsi D','Kristen','Belum Menikah','Desainer Grafis','WNI','2035-02-14','2024-09-09 09:07:32','2024-09-09 09:07:32'),(2,'9101061710990004_KTP_235818-v1.jpeg','Bob Smith','1234567892','Jakarta','1988-11-21','B','Jl. Sudirman No. 20','05/06','Kelurahan B','Kecamatan C','Kabupaten D','Provinsi E','Islam','Menikah','Manager','WNI','2033-11-21','2024-09-09 09:07:32','2024-09-09 09:07:32'),(3,'9101061710990004_KTP_235818-v1.jpeg','Charlie Brown','1234567893','Surabaya','1975-07-30','AB','Jl. Raya No. 5','07/08','Kelurahan C','Kecamatan D','Kabupaten E','Provinsi F','Buddha','Menikah','Pengacara','WNI','2030-07-30','2024-09-09 09:07:32','2024-09-09 09:07:32'),(4,'9101061710990004_KTP_235818-v1.jpeg','Diana Prince','1234567894','Medan','1992-09-12','O','Jl. Pahlawan No. 8','01/01','Kelurahan D','Kecamatan E','Kabupaten F','Provinsi G','Hindu','Belum Menikah','Dokter','WNI','2032-09-12','2024-09-09 09:07:32','2024-09-09 09:07:32'),(5,'9101061710990004_KTP_235818-v1.jpeg','Edward Norton','1234567895','Yogyakarta','1985-06-16','A','Jl. Suryatman No. 15','03/04','Kelurahan E','Kecamatan F','Kabupaten G','Provinsi H','Kristen','Menikah','Guru','WNI','2030-06-16','2024-09-09 09:07:32','2024-09-09 09:07:32'),(6,'9101061710990004_KTP_235818-v1.jpeg','Fiona Apple','1234567896','Bandung','1990-10-05','B','Jl. Cendrawasih No. 7','06/07','Kelurahan F','Kecamatan G','Kabupaten H','Provinsi I','Islam','Belum Menikah','Arsitek','WNI','2035-10-05','2024-09-09 09:07:32','2024-09-09 09:07:32'),(7,'9101061710990004_KTP_235818-v1.jpeg','George Clooney','1234567897','Bali','1982-04-20','O','Jl. Pantai No. 3','02/03','Kelurahan G','Kecamatan H','Kabupaten I','Provinsi J','Hindu','Menikah','Sutradara','WNI','2030-04-20','2024-09-09 09:07:32','2024-09-09 09:07:32'),(8,'9101061710990004_KTP_235818-v1.jpeg','Hannah Montana','1234567898','Jakarta','2000-01-01','AB','Jl. Bahagia No. 12','04/05','Kelurahan H','Kecamatan I','Kabupaten J','Provinsi K','Kristen','Belum Menikah','Mahasiswa','WNI','2040-01-01','2024-09-09 09:07:32','2024-09-09 09:07:32'),(9,'9101061710990004_KTP_235818-v1.jpeg','Ian Somerhalder','1234567899','Medan','1993-12-25','A','Jl. Kenanga No. 9','08/09','Kelurahan I','Kecamatan J','Kabupaten K','Provinsi L','Islam','Menikah','Penulis','WNI','2032-12-25','2024-09-09 09:07:32','2024-09-09 09:07:32'),(10,'9101061710990004_KTP_235818-v1.jpeg','Julia Roberts','1234567800','Surabaya','1980-03-15','B','Jl. Mawar No. 18','09/10','Kelurahan J','Kecamatan K','Kabupaten L','Provinsi M','Buddha','Menikah','Aktor','WNI','2030-03-15','2024-09-09 09:07:32','2024-09-09 09:07:32'),(11,'9101061710990004_KTP_235818-v1.jpeg','Kevin Spacey','1234567801','Yogyakarta','1978-08-22','O','Jl. Cinta No. 6','11/12','Kelurahan K','Kecamatan L','Kabupaten M','Provinsi N','Kristen','Menikah','Produser','WNI','2035-08-22','2024-09-09 09:07:32','2024-09-09 09:07:32');
/*!40000 ALTER TABLE `ktp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2014_10_12_100000_create_password_resets_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2024_09_09_084818_create_ktp_table',2),(7,'2024_09_09_085131_create_tax_ppn_table',3),(8,'2024_09_09_085428_create_purchase_order_table',4),(9,'2024_09_09_085734_create_certificate_table',5),(10,'2024_09_09_091249_create_academic_transcript_table',6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchase_order`
--

DROP TABLE IF EXISTS `purchase_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `purchase_order` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_vendor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_invoice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_invoice` date DEFAULT NULL,
  `periode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_kontrak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dpp` decimal(15,2) DEFAULT NULL,
  `tax` decimal(15,2) DEFAULT NULL,
  `total` decimal(15,2) DEFAULT NULL,
  `type_tax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_rek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_rek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_bank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meterai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_meterai` decimal(15,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchase_order`
--

LOCK TABLES `purchase_order` WRITE;
/*!40000 ALTER TABLE `purchase_order` DISABLE KEYS */;
INSERT INTO `purchase_order` VALUES (1,'invoice1.jpg','Vendor A','INV001','2024-01-15','Q1-2024','KONTR001',1000000.00,100000.00,1100000.00,'PPN','1234567890','John Doe','Bank A','Transfer','METERAI A',10000.00,'2024-09-09 09:22:09','2024-09-09 09:22:09'),(2,'invoice1.jpg','Vendor B','INV002','2024-01-18','Q1-2024','KONTR002',1500000.00,150000.00,1650000.00,'PPN','0987654321','Jane Smith','Bank B','Cheque','METERAI B',15000.00,'2024-09-09 09:22:09','2024-09-09 09:22:09'),(3,'invoice1.jpg','Vendor C','INV003','2024-02-10','Q2-2024','KONTR003',2000000.00,200000.00,2200000.00,'PPN','1230984567','Alice Johnson','Bank C','Transfer','METERAI C',20000.00,'2024-09-09 09:22:09','2024-09-09 09:22:09'),(4,'invoice1.jpg','Vendor D','INV004','2024-02-20','Q2-2024','KONTR004',2500000.00,250000.00,2750000.00,'PPN','7654321098','Bob Smith','Bank D','Transfer','METERAI D',25000.00,'2024-09-09 09:22:09','2024-09-09 09:22:09'),(5,'invoice1.jpg','Vendor E','INV005','2024-03-05','Q3-2024','KONTR005',3000000.00,300000.00,3300000.00,'PPN','1928374650','Charlie Brown','Bank E','Cheque','METERAI E',30000.00,'2024-09-09 09:22:09','2024-09-09 09:22:09'),(6,'invoice1.jpg','Vendor F','INV006','2024-03-15','Q3-2024','KONTR006',3500000.00,350000.00,3850000.00,'PPN','5647382910','Diana Prince','Bank F','Transfer','METERAI F',35000.00,'2024-09-09 09:22:09','2024-09-09 09:22:09'),(7,'invoice1.jpg','Vendor G','INV007','2024-04-02','Q4-2024','KONTR007',4000000.00,400000.00,4400000.00,'PPN','2837469102','Ethan Hunt','Bank G','Transfer','METERAI G',40000.00,'2024-09-09 09:22:09','2024-09-09 09:22:09'),(8,'invoice1.jpg','Vendor H','INV008','2024-04-12','Q4-2024','KONTR008',4500000.00,450000.00,4950000.00,'PPN','9102837465','Fiona Gallagher','Bank H','Cheque','METERAI H',45000.00,'2024-09-09 09:22:09','2024-09-09 09:22:09'),(9,'invoice1.jpg','Vendor I','INV009','2024-05-01','Q1-2024','KONTR009',5000000.00,500000.00,5500000.00,'PPN','3748291056','George Clooney','Bank I','Transfer','METERAI I',50000.00,'2024-09-09 09:22:09','2024-09-09 09:22:09'),(10,'invoice1.jpg','Vendor J','INV010','2024-05-15','Q1-2024','KONTR010',5500000.00,550000.00,6050000.00,'PPN','4657382910','Hannah Montana','Bank J','Cheque','METERAI J',55000.00,'2024-09-09 09:22:09','2024-09-09 09:22:09'),(11,'invoice1.jpg','Vendor K','INV011','2024-06-05','Q2-2024','KONTR011',6000000.00,600000.00,6600000.00,'PPN','2837461920','Ian Malcolm','Bank K','Transfer','METERAI K',60000.00,'2024-09-09 09:22:09','2024-09-09 09:22:09'),(12,'invoice1.jpg','Vendor L','INV012','2024-06-20','Q2-2024','KONTR012',6500000.00,650000.00,7150000.00,'PPN','0928374651','Julia Roberts','Bank L','Transfer','METERAI L',65000.00,'2024-09-09 09:22:09','2024-09-09 09:22:09'),(13,'invoice1.jpg','Vendor M','INV013','2024-07-01','Q3-2024','KONTR013',7000000.00,700000.00,7700000.00,'PPN','1902837465','Kevin Spacey','Bank M','Cheque','METERAI M',70000.00,'2024-09-09 09:22:09','2024-09-09 09:22:09'),(14,'invoice1.jpg','Vendor N','INV014','2024-07-15','Q3-2024','KONTR014',7500000.00,750000.00,8250000.00,'PPN','2837461910','Laura Croft','Bank N','Transfer','METERAI N',75000.00,'2024-09-09 09:22:09','2024-09-09 09:22:09'),(15,'invoice1.jpg','Vendor O','INV015','2024-08-02','Q4-2024','KONTR015',8000000.00,800000.00,8800000.00,'PPN','3748291056','Michael Scott','Bank O','Cheque','METERAI O',80000.00,'2024-09-09 09:22:09','2024-09-09 09:22:09'),(16,'invoice1.jpg','Vendor P','INV016','2024-08-20','Q4-2024','KONTR016',8500000.00,850000.00,9350000.00,'PPN','4657382910','Nina Simone','Bank P','Transfer','METERAI P',85000.00,'2024-09-09 09:22:09','2024-09-09 09:22:09'),(17,'invoice1.jpg','Vendor Q','INV017','2024-09-05','Q1-2024','KONTR017',9000000.00,900000.00,9900000.00,'PPN','2837461920','Oliver Queen','Bank Q','Transfer','METERAI Q',90000.00,'2024-09-09 09:22:09','2024-09-09 09:22:09'),(18,'invoice1.jpg','Vendor R','INV018','2024-09-20','Q1-2024','KONTR018',9500000.00,950000.00,10450000.00,'PPN','0928374651','Paul Atreides','Bank R','Cheque','METERAI R',95000.00,'2024-09-09 09:22:09','2024-09-09 09:22:09'),(19,'invoice1.jpg','Vendor S','INV019','2024-10-01','Q2-2024','KONTR019',10000000.00,1000000.00,11000000.00,'PPN','1902837465','Quinn Fabray','Bank S','Transfer','METERAI S',100000.00,'2024-09-09 09:22:09','2024-09-09 09:22:09'),(20,'invoice1.jpg','Vendor T','INV020','2024-10-15','Q2-2024','KONTR020',10500000.00,1050000.00,11550000.00,'PPN','2837461910','Rachel Green','Bank T','Cheque','METERAI T',105000.00,'2024-09-09 09:22:09','2024-09-09 09:22:09');
/*!40000 ALTER TABLE `purchase_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tax_ppn`
--

DROP TABLE IF EXISTS `tax_ppn`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tax_ppn` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_faktur_pajak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_faktur_pajak` date DEFAULT NULL,
  `npwp_penjual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_penjual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_penjual` text COLLATE utf8mb4_unicode_ci,
  `no_npwp_lawan_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_lawan_transaksi` text COLLATE utf8mb4_unicode_ci,
  `harga_total` decimal(15,2) DEFAULT NULL,
  `diskon` decimal(15,2) DEFAULT NULL,
  `dpp` decimal(15,2) DEFAULT NULL,
  `ppn` decimal(15,2) DEFAULT NULL,
  `ppnbm` decimal(15,2) DEFAULT NULL,
  `referensi` text COLLATE utf8mb4_unicode_ci,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi_item` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tax_ppn`
--

LOCK TABLES `tax_ppn` WRITE;
/*!40000 ALTER TABLE `tax_ppn` DISABLE KEYS */;
INSERT INTO `tax_ppn` VALUES (1,'Faktur_pajak12.pdf','FPJ001','2024-01-15','01.234.567.8-901.000','PT. Maju Jaya','Jl. Raya No. 1, Jakarta','02.345.678.9-012.000','Jl. Kebon Jeruk No. 3, Jakarta',1000000.00,50000.00,950000.00,57000.00,0.00,'Pembelian Barang A','https://example.com/fpj001','Barang A - 10 unit','2024-09-09 09:09:35','2024-09-09 09:09:35'),(2,'Faktur_pajak12.pdf','FPJ002','2024-01-16','01.234.567.8-902.000','CV. Sejahtera','Jl. Merdeka No. 10, Bandung','02.345.678.9-013.000','Jl. Sudirman No. 5, Bandung',2000000.00,100000.00,1900000.00,114000.00,0.00,'Pembelian Barang B','https://example.com/fpj002','Barang B - 20 unit','2024-09-09 09:09:35','2024-09-09 09:09:35'),(3,'Faktur_pajak12.pdf','FPJ003','2024-01-17','01.234.567.8-903.000','PT. Global Utama','Jl. Semangka No. 15, Surabaya','02.345.678.9-014.000','Jl. Cendrawasih No. 8, Surabaya',3000000.00,150000.00,2850000.00,171000.00,0.00,'Pembelian Barang C','https://example.com/fpj003','Barang C - 30 unit','2024-09-09 09:09:35','2024-09-09 09:09:35'),(4,'Faktur_pajak12.pdf','FPJ004','2024-01-18','01.234.567.8-904.000','PT. Sukses Makmur','Jl. Pahlawan No. 2, Medan','02.345.678.9-015.000','Jl. Garuda No. 4, Medan',4000000.00,200000.00,3800000.00,228000.00,0.00,'Pembelian Barang D','https://example.com/fpj004','Barang D - 40 unit','2024-09-09 09:09:35','2024-09-09 09:09:35'),(5,'Faktur_pajak12.pdf','FPJ005','2024-01-19','01.234.567.8-905.000','CV. Mandiri','Jl. Pusaka No. 5, Yogyakarta','02.345.678.9-016.000','Jl. Kenangan No. 6, Yogyakarta',5000000.00,250000.00,4750000.00,285000.00,0.00,'Pembelian Barang E','https://example.com/fpj005','Barang E - 50 unit','2024-09-09 09:09:35','2024-09-09 09:09:35'),(6,'Faktur_pajak12.pdf','FPJ006','2024-01-20','01.234.567.8-906.000','PT. Abadi Sejahtera','Jl. Harapan No. 7, Jakarta','02.345.678.9-017.000','Jl. Sentosa No. 9, Jakarta',6000000.00,300000.00,5700000.00,342000.00,0.00,'Pembelian Barang F','https://example.com/fpj006','Barang F - 60 unit','2024-09-09 09:09:35','2024-09-09 09:09:35'),(7,'Faktur_pajak12.pdf','FPJ007','2024-01-21','01.234.567.8-907.000','CV. Tani Makmur','Jl. Melati No. 8, Bandung','02.345.678.9-018.000','Jl. Melati No. 10, Bandung',7000000.00,350000.00,6650000.00,399000.00,0.00,'Pembelian Barang G','https://example.com/fpj007','Barang G - 70 unit','2024-09-09 09:09:35','2024-09-09 09:09:35'),(8,'Faktur_pajak12.pdf','FPJ008','2024-01-22','01.234.567.8-908.000','PT. Jaya Abadi','Jl. Raya No. 9, Surabaya','02.345.678.9-019.000','Jl. Bumi No. 11, Surabaya',8000000.00,400000.00,7600000.00,456000.00,0.00,'Pembelian Barang H','https://example.com/fpj008','Barang H - 80 unit','2024-09-09 09:09:35','2024-09-09 09:09:35'),(9,'Faktur_pajak12.pdf','FPJ009','2024-01-23','01.234.567.8-909.000','CV. Ratu Indah','Jl. Suka Maju No. 10, Medan','02.345.678.9-020.000','Jl. Maju No. 12, Medan',9000000.00,450000.00,8550000.00,513000.00,0.00,'Pembelian Barang I','https://example.com/fpj009','Barang I - 90 unit','2024-09-09 09:09:35','2024-09-09 09:09:35'),(10,'Faktur_pajak12.pdf','FPJ010','2024-01-24','01.234.567.8-910.000','PT. Harapan Baru','Jl. Kemenangan No. 11, Yogyakarta','02.345.678.9-021.000','Jl. Kemenangan No. 13, Yogyakarta',10000000.00,500000.00,9500000.00,570000.00,0.00,'Pembelian Barang J','https://example.com/fpj010','Barang J - 100 unit','2024-09-09 09:09:35','2024-09-09 09:09:35'),(11,'Faktur_pajak12.pdf','FPJ011','2024-01-25','01.234.567.8-911.000','PT. Sentosa','Jl. Kebangkitan No. 12, Jakarta','02.345.678.9-022.000','Jl. Damai No. 14, Jakarta',11000000.00,550000.00,10450000.00,627000.00,0.00,'Pembelian Barang K','https://example.com/fpj011','Barang K - 110 unit','2024-09-09 09:09:35','2024-09-09 09:09:35'),(12,'Faktur_pajak12.pdf','FPJ012','2024-01-26','01.234.567.8-912.000','CV. Prima','Jl. Sejahtera No. 13, Bandung','02.345.678.9-023.000','Jl. Sejahtera No. 15, Bandung',12000000.00,600000.00,11400000.00,684000.00,0.00,'Pembelian Barang L','https://example.com/fpj012','Barang L - 120 unit','2024-09-09 09:09:35','2024-09-09 09:09:35'),(13,'Faktur_pajak12.pdf','FPJ013','2024-01-27','01.234.567.8-913.000','PT. Sumber Rejeki','Jl. Victory No. 14, Surabaya','02.345.678.9-024.000','Jl. Harapan No. 16, Surabaya',13000000.00,650000.00,12350000.00,741000.00,0.00,'Pembelian Barang M','https://example.com/fpj013','Barang M - 130 unit','2024-09-09 09:09:35','2024-09-09 09:09:35'),(14,'Faktur_pajak12.pdf','FPJ014','2024-01-28','01.234.567.8-914.000','CV. Mandiri Sejahtera','Jl. Impian No. 15, Medan','02.345.678.9-025.000','Jl. Impian No. 17, Medan',14000000.00,700000.00,13300000.00,798000.00,0.00,'Pembelian Barang N','https://example.com/fpj014','Barang N - 140 unit','2024-09-09 09:09:35','2024-09-09 09:09:35'),(15,'Faktur_pajak12.pdf','FPJ015','2024-01-29','01.234.567.8-915.000','PT. Prosperitas','Jl. Bahagia No. 16, Yogyakarta','02.345.678.9-026.000','Jl. Bahagia No. 18, Yogyakarta',15000000.00,750000.00,14250000.00,855000.00,0.00,'Pembelian Barang O','https://example.com/fpj015','Barang O - 150 unit','2024-09-09 09:09:35','2024-09-09 09:09:35'),(16,'Faktur_pajak12.pdf','FPJ016','2024-01-30','01.234.567.8-916.000','CV. Lestari','Jl. Amanah No. 17, Jakarta','02.345.678.9-027.000','Jl. Sejahtera No. 19, Jakarta',16000000.00,800000.00,15200000.00,912000.00,0.00,'Pembelian Barang P','https://example.com/fpj016','Barang P - 160 unit','2024-09-09 09:09:35','2024-09-09 09:09:35'),(17,'Faktur_pajak12.pdf','FPJ017','2024-01-31','01.234.567.8-917.000','PT. Abadi Jaya','Jl. Harapan Baru No. 18, Bandung','02.345.678.9-028.000','Jl. Cendana No. 20, Bandung',17000000.00,850000.00,16150000.00,969000.00,0.00,'Pembelian Barang Q','https://example.com/fpj017','Barang Q - 170 unit','2024-09-09 09:09:35','2024-09-09 09:09:35'),(18,'Faktur_pajak12.pdf','FPJ018','2024-02-01','01.234.567.8-918.000','CV. Sejahtera Abadi','Jl. Gemilang No. 19, Surabaya','02.345.678.9-029.000','Jl. Bahagia No. 21, Surabaya',18000000.00,900000.00,17100000.00,1026000.00,0.00,'Pembelian Barang R','https://example.com/fpj018','Barang R - 180 unit','2024-09-09 09:09:35','2024-09-09 09:09:35'),(19,'Faktur_pajak12.pdf','FPJ019','2024-02-02','01.234.567.8-919.000','PT. Jaya Sentosa','Jl. Maju No. 20, Medan','02.345.678.9-030.000','Jl. Kemenangan No. 22, Medan',19000000.00,950000.00,18050000.00,1083000.00,0.00,'Pembelian Barang S','https://example.com/fpj019','Barang S - 190 unit','2024-09-09 09:09:35','2024-09-09 09:09:35'),(20,'Faktur_pajak12.pdf','FPJ020','2024-02-03','01.234.567.8-920.000','CV. Lestari Abadi','Jl. Sejahtera No. 21, Yogyakarta','02.345.678.9-031.000','Jl. Harapan No. 23, Yogyakarta',20000000.00,1000000.00,19000000.00,1140000.00,0.00,'Pembelian Barang T','https://example.com/fpj020','Barang T - 200 unit','2024-09-09 09:09:35','2024-09-09 09:09:35');
/*!40000 ALTER TABLE `tax_ppn` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin12345','admin12345@gmail.com',NULL,'$2y$10$OUAttdQvXuYUQyt7bOek.O1AdReK38tf5JI1vqf0mOyyxlHwuuH1m',NULL,'2024-08-25 16:34:22','2024-08-25 16:34:22'),(2,'admin123','admin123@gmail.com',NULL,'$2y$10$9.PDtj2r/RjlxrAWIPJAvujH/JSCdfMflNahIK2QmIQjO.ZR/MvBW',NULL,'2024-09-09 01:44:06','2024-09-09 01:44:06');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-10  8:09:55
