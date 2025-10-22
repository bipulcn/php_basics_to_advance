-- MySQL dump 10.13  Distrib 5.5.47, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: test
-- ------------------------------------------------------
-- Server version	5.5.47-0ubuntu0.14.04.1

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
-- Table structure for table `pet`
--

DROP TABLE IF EXISTS `pet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pet` (
  `name` varchar(20) DEFAULT NULL,
  `owner` varchar(20) DEFAULT NULL,
  `species` varchar(20) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `death` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pet`
--

LOCK TABLES `pet` WRITE;
/*!40000 ALTER TABLE `pet` DISABLE KEYS */;
INSERT INTO `pet` VALUES ('jimy','jon','bear','m','1999-09-30','2014-02-15'),('tomy','jimi','dog','m','1998-02-22','2006-12-28'),('jony','samia','cat','f','2012-09-03','2015-02-15'),('jon','Sara','cat','f','2012-09-03','2015-02-15');
/*!40000 ALTER TABLE `pet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `roll` varchar(10) DEFAULT NULL,
  `academic_year` varchar(10) DEFAULT NULL,
  `groups` varchar(15) DEFAULT NULL,
  `name` varchar(128) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `home_district` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES ('01','2011-12','Science','Tripto','Male','1993-11-05','House-18/A, Road-3, Dhaka','Mymensingh'),('02','2011-12','Commerce','Sporsho','Female','1994-01-12','22/B, R?4, Uttara','Gazipur'),('03','2011-12','Arts','Sohan','Male','1992-02-23','11-A, R-5, Mohammadpur','Dhaka'),('05','2011-12','Science','Mirnal','Male','1995-12-22','07/F, R-18, Banasree','Chittagong'),('06','2011-12','Science','Ananta','Male','1994-05-27','F-block, 18/I, Badda, Dhaka','Sylhet'),('07','2011-12','Science','Joyita','Female','1991-12-16','11C, R-22,Dhanmondi','Dhaka'),('08','2011-12','Arts','Prio','Male','1993-03-16','01-A, R-3, Kata Ban','Rajshahi'),('09','2011-12','Science','Wasif','Male','1992-08-17','12-C, R-01, Shajahpur','Khulna'),('10','2011-12','Commerce','Saima','Female','1994-11-20','33-F, R/A-5, Shamolee','Rangpur'),('11','2011-12','Commerce','Rasel','Male','1993-01-11','H-10, R-2, Baridhara','Faridpur'),('12','2011-12','Science','Dipto','Male','1994-05-22','Sector 9, road 10, Uttara','Munshigonj'),('13','2011-12','Arts','Smrity','Female','1993-08-13','150 basabo, Dhaka','Noakhali');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_subject`
--

DROP TABLE IF EXISTS `student_subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_subject` (
  `roll` varchar(10) DEFAULT NULL,
  `code` varchar(10) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `marks` int(11) DEFAULT NULL,
  `grade` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_subject`
--

LOCK TABLES `student_subject` WRITE;
/*!40000 ALTER TABLE `student_subject` DISABLE KEYS */;
INSERT INTO `student_subject` VALUES ('01','101','2011',90,'A+'),('01','107','2011',95,'A+'),('01','174','2011',78,'A'),('01','176','2011',60,'B'),('01','175','2011',90,'A+'),('04','101','2011',78,'A'),('04','107','2011',77,'A'),('04','195','2011',60,'B'),('07','107','2011',70,'A'),('07','127','2011',60,'B'),('07','174','2011',70,'A'),('07','108','2011',60,'B');
/*!40000 ALTER TABLE `student_subject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subject` (
  `code` varchar(10) DEFAULT NULL,
  `name` varchar(128) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subject`
--

LOCK TABLES `subject` WRITE;
/*!40000 ALTER TABLE `subject` DISABLE KEYS */;
INSERT INTO `subject` VALUES ('101','Bangla First Paper','Story, Poems, Novel.'),('102','Bangla Second Paper','Drama, Bengali Grammer, Letter, Essay, etc.'),('107','English First Paper','Comprehension, Paragraphs.'),('108','English Second Paper','Grammer, Letter, Dialogues, Essay, Story, Writing etc.'),('174','Physics First Paper','Heat Sound, Mechanics, Dynamics, Thermodynamics.'),('175','Physics Second Paper','Optics, Electronics, Quantum Mechanics, Circular Motion.'),('176','Chemistry First Paper','Atom, Atomic Bonds, Periodic table and changes, Inorganic Chemistry.'),('177','Chemistry Second Paper','Organic Chemistry, Reactions, Chemical compounds etc.'),('195','Accounting Fist Paper',''),('196','Accounting Second Paper',''),('127','Math First Paper','Algebra, Geometry, Trigonometry '),('128','Math Second Paper','Differentiation, Integration, Calculus, Statistics');
/*!40000 ALTER TABLE `subject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher` (
  `teacher_id` varchar(10) DEFAULT NULL,
  `name` varchar(128) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `degree` varchar(32) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `groups` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher`
--

LOCK TABLES `teacher` WRITE;
/*!40000 ALTER TABLE `teacher` DISABLE KEYS */;
/*!40000 ALTER TABLE `teacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher_subject`
--

DROP TABLE IF EXISTS `teacher_subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher_subject` (
  `teacher_id` varchar(10) DEFAULT NULL,
  `subject_code` varchar(10) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher_subject`
--

LOCK TABLES `teacher_subject` WRITE;
/*!40000 ALTER TABLE `teacher_subject` DISABLE KEYS */;
/*!40000 ALTER TABLE `teacher_subject` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-24 17:37:41
