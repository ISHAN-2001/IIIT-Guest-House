-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: iiit_bh_guesthouse
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
-- Table structure for table `availabilty`
--

DROP TABLE IF EXISTS `availabilty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `availabilty` (
  `AC_Room` int DEFAULT NULL,
  `NONAC_Room` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `availabilty`
--

LOCK TABLES `availabilty` WRITE;
/*!40000 ALTER TABLE `availabilty` DISABLE KEYS */;
INSERT INTO `availabilty` VALUES (17,21);
/*!40000 ALTER TABLE `availabilty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `billing`
--

DROP TABLE IF EXISTS `billing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `billing` (
  `Student_ID` varchar(255) NOT NULL,
  `Student_Name` varchar(255) DEFAULT NULL,
  `Guest_Name` varchar(255) DEFAULT NULL,
  `Occupants` int DEFAULT NULL,
  `Check_IN` varchar(255) DEFAULT NULL,
  `Room_Number` int DEFAULT NULL,
  `Room_Charges` int DEFAULT NULL,
  `Service_Price` int DEFAULT NULL,
  `Total_Price` int DEFAULT NULL,
  `Payment` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Student_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `billing`
--

LOCK TABLES `billing` WRITE;
/*!40000 ALTER TABLE `billing` DISABLE KEYS */;
INSERT INTO `billing` VALUES ('1','ISHAN','ISHAN PATTNAYAK',2,'7/3/2021',24,1500,0,1500,'Net Banking'),('10','Munna','Munna Bhaiya',3,'8/3/2021',29,4500,50,4550,'Credit Card'),('11','Bablu','Bablu Bhaiya',2,'17/3/2021',38,4500,50,4550,'Debit Card'),('12','KOL','LOLKOLKATA',5,'8/3/2021',31,5400,100,5500,'Debit Card'),('15','tushar','tushar kant jena',5,'9/3/2021',32,7500,150,7650,'Credit Card'),('2','HIMANSHU','HIMANSHU NAYAK',1,'8/3/2021',25,3000,150,3150,'Debit Card'),('3','SHASHWAT','SHASHWAT DEV',1,'9/3/2021',26,3600,100,3700,'Cash'),('4','ROHIT','K RAM ROHIT REDDY',1,'9/3/2021',27,7500,150,7650,'Debit Card'),('5','SANDEEP','SANDEEP NAYAK',2,'10/3/2021',28,3600,0,3600,'Debit Card'),('6','guddu','Guddu Bhaiya',2,'15/3/2021',33,5400,150,5550,'UPI'),('7','Roopak','Roopak Regeti',2,'16/3/2021',34,6000,100,6100,'Credit Card'),('8','Trinay','A trinay',1,'16/3/2021',36,1500,150,1650,'UPI'),('9','Manas','Manas Sahu',1,'17/3/2021',37,3000,100,3100,'UPI');
/*!40000 ALTER TABLE `billing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `feedback` (
  `Student_ID` varchar(255) NOT NULL,
  `Room_Condition` varchar(255) DEFAULT NULL,
  `Hygine` varchar(255) DEFAULT NULL,
  `Overall` varchar(255) DEFAULT NULL,
  `Any_Suggestion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Student_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES ('1','Satisfactory','Satisfactory','Satisfactory','AVERAGE....'),('10','Bad','Bad','Bad','Jindagi ho toh aisi'),('11','Satisfactory','Good','Excellent','...............'),('2','Bad','Good','Satisfactory','good experience!'),('3','Good','Bad','Bad','Please take care of hygiene!'),('4','Good','Satisfactory','Satisfactory','Price is very high..'),('5','Bad','Good','Good','Room condition is not upto mark.'),('6','Satisfactory','Satisfactory','Satisfactory','Average hotel.....'),('7','Bad','Good','Satisfactory','Not recommended.. There are hotels cheaper than this.'),('8','Excellent','Excellent','Excellent','yay!!'),('9','Good','Good','Satisfactory','........');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guest_detail`
--

DROP TABLE IF EXISTS `guest_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `guest_detail` (
  `Student_ID` varchar(255) NOT NULL,
  `Guest_Name` varchar(255) DEFAULT NULL,
  `Check_IN` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Occupants` int DEFAULT NULL,
  `Days` int DEFAULT NULL,
  PRIMARY KEY (`Student_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guest_detail`
--

LOCK TABLES `guest_detail` WRITE;
/*!40000 ALTER TABLE `guest_detail` DISABLE KEYS */;
INSERT INTO `guest_detail` VALUES ('1','ISHAN PATTNAYAK','7/3/2021','BHUBNESWAR',2,1),('10','Munna Bhaiya','8/3/2021','Mirzapur',3,5),('11','Bablu Bhaiya','17/3/2021','Mirzapur',2,5),('12','LOLKOLKATA','8/3/2021','LOKL',5,6),('15','tushar kant jena','9/3/2021','berhampur',5,5),('2','HIMANSHU NAYAK','8/3/2021','BHILAI',1,2),('3','SHASHWAT DEV','9/3/2021','GORAKHPUR',1,4),('4','K RAM ROHIT REDDY','9/3/2021','HYDERABAD',1,5),('5','SANDEEP NAYAK','10/3/2021','BHUBNESWAR',2,4),('6','Guddu Bhaiya','15/3/2021','Mirzapur',2,6),('7','Roopak Regeti','16/3/2021','Tirupati',2,4),('8','A trinay','16/3/2021','Rayagada',1,1),('9','Manas Sahu','17/3/2021','Bhubaneswar',1,2);
/*!40000 ALTER TABLE `guest_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rooms` (
  `STUDENT_ID` varchar(255) NOT NULL,
  `ROOM_TYPE` varchar(255) DEFAULT NULL,
  `ROOM_NO` varchar(255) DEFAULT NULL,
  `PRICE` int DEFAULT NULL,
  PRIMARY KEY (`STUDENT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms`
--

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` VALUES ('1','AC','24',1500),('10','Non-AC','29',4500),('11','Non-AC','38',4500),('12','Non-AC','31',5400),('15','AC','32',7500),('2','AC','25',3000),('3','Non-AC','26',3600),('4','AC','27',7500),('5','Non-AC','28',3600),('6','Non-AC','33',5400),('7','AC','34',6000),('8','AC','36',1500),('9','AC','37',3000);
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `Student_ID` varchar(255) NOT NULL,
  `Laundry` varchar(255) DEFAULT NULL,
  `Room_Services` varchar(255) DEFAULT NULL,
  `Room_Dinning` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Student_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES ('1','No','No','No'),('10','Yes','No','No'),('11','No','Yes','No'),('12','Yes','No','Yes'),('15','Yes','Yes','Yes'),('2','Yes','Yes','Yes'),('3','Yes','Yes','No'),('4','Yes','Yes','Yes'),('5','No','No','No'),('6','Yes','Yes','Yes'),('7','Yes','Yes','No'),('8','Yes','Yes','Yes'),('9','Yes','Yes','No');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_id`
--

DROP TABLE IF EXISTS `student_id`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student_id` (
  `Student_ID` varchar(255) NOT NULL,
  `Student_Name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Student_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_id`
--

LOCK TABLES `student_id` WRITE;
/*!40000 ALTER TABLE `student_id` DISABLE KEYS */;
INSERT INTO `student_id` VALUES ('1','ISHAN'),('10','Munna'),('11','Bablu'),('12','KOL'),('15','tushar'),('2','HIMANSHU'),('3','SHASHWAT'),('4','ROHIT'),('5','SANDEEP'),('6','guddu'),('7','Roopak'),('8','Trinay'),('9','Manas');
/*!40000 ALTER TABLE `student_id` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-16  9:54:21
