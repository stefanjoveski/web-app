-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: webapp
-- ------------------------------------------------------
-- Server version	8.0.28

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `category_id` int NOT NULL,
  `category` varchar(11) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'clothing'),(2,'technique'),(3,'travelling'),(4,'restaurants'),(5,'cosmetics'),(6,'jewellery');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `images` (
  `id` int NOT NULL,
  `title` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (197,'Nike Discounts: For Students','nike-student-discount-10-off-nike-com.jpg','Log in as a Member to Nike.com or the Nike apps specified herein and enter promo code during checkout for an additional 10% off select items. Promo code valid for one use only. Shipping charges and taxes are calculated after discount. Not transferable and not redeemable for cash, gift cards, credit, or toward previous purchases. Redeemable on Nike.com, in the Nike App, and its affiliate pages in the United States. Not redeemable on Swoosh.com. Discount not valid on select products, including but not limited to Nike By You, gift cards, select Launch and SNKRS products, and Apple products. Other exclusions may apply. Discount applies to first $500 of qualified purchase. Can be used in combination with free shipping promo codes only. Offer expires and the code must be redeemed within 2 weeks of receiving. Void where prohibited. Additional restrictions may apply. Nike reserves the right to cancel or modify this offer at any time. Apple is a trademark of Apple, Inc.'),(5,'Zara coupon codes for shopping','shutterstock_1124343944-1240x698.jpg','Zara clothes are quite expensive. If you want to reduce your bill then you need to use Zara coupon codes. You can find different coupon codes here. By using these coupon codes you can get discounts up to 10% or 20%. Some of the promo codes are meant for specific products only. You can even get free shipping by using some of these coupon codes. Make sure that you use the coupon codes before they expired.'),(151,'dsgsd','CnHRydEWcAAqaqU.jpg','sfafsdfds'),(64,'gerhehr','CnHRydEWcAAqaqU.jpg','fewfwfwf');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `order_id` int NOT NULL,
  `description` varchar(1500) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (127,'dm 800.00,tehnomarket 26,000.00,'),(292,'dm 800.00,tehnomarket 26,000.00,'),(359,'dm 800.00,tehnomarket 26,000.00,'),(405,'dm 800.00,tehnomarket 26,000.00,'),(455,'dm 800.00,tehnomarket 26,000.00,'),(494,'pelister 800.00,bershka 530.00,zara 1,500.00,nov 770.00,MyTime 5,000.00,'),(585,'bershka 530.00,'),(733,'rapsody_travel Greece 1 12,000.00,cosmo eye-shadow 4 900.00,bershka dress 2 530.00,zara skirt 1 1,500.00,'),(838,'dm 800.00,tehnomarket 26,000.00,'),(1029,'bershka dress 1 530.00,'),(1038,'dm 800.00,tehnomarket 26,000.00,'),(1056,'bershka dress 8 530.00,'),(1110,'dm 800.00,tehnomarket 26,000.00,'),(1111,'dm 800.00,tehnomarket 26,000.00,'),(1123,'dm 800.00,tehnomarket 26,000.00,'),(1141,'dm 800.00,tehnomarket 26,000.00,'),(1160,'dm 800.00,tehnomarket 26,000.00,'),(1484,'dm 800.00,tehnomarket 26,000.00,'),(1728,'dm 800.00,tehnomarket 26,000.00,'),(1898,'dm 800.00,tehnomarket 26,000.00,'),(2283,'bershka dress 2 530.00,'),(2344,'pelister,bershka,zara,nov,MyTime,'),(2382,'dm 800.00,tehnomarket 26,000.00,'),(2602,'dm 800.00,tehnomarket 26,000.00,'),(2766,'dm 800.00,tehnomarket 26,000.00,'),(2807,'dm 800.00,tehnomarket 26,000.00,'),(2917,'rapsody_travel Greece 1 12,000.00,cosmo eye-shadow 4 900.00,bershka dress 1 530.00,'),(3010,'bershka dress 1 530.00,'),(3117,'rapsody_travel Greece 1 12,000.00,cosmo eye-shadow 4 900.00,bershka dress 1 530.00,'),(3515,'dm 800.00,tehnomarket 26,000.00,'),(3648,'dm 800.00,tehnomarket 26,000.00,'),(3741,'dm 800.00,tehnomarket 26,000.00,'),(3772,'dm 800.00,tehnomarket 26,000.00,'),(3829,'dm 800.00,tehnomarket 26,000.00,'),(3938,'dm 800.00,tehnomarket 26,000.00,'),(3970,'dm 800.00,tehnomarket 26,000.00,'),(4242,'dm 800.00,tehnomarket 26,000.00,'),(4268,'dm 800.00,tehnomarket 26,000.00,'),(4406,'dm 800.00,tehnomarket 26,000.00,'),(4453,'rapsody_travel Greece 1 12,000.00,cosmo eye-shadow 4 900.00,bershka dress 1 530.00,zara skirt 1 1,500.00,'),(4948,'dm 800.00,tehnomarket 26,000.00,zara 1,500.00,'),(5052,'dm 800.00,tehnomarket 26,000.00,'),(5125,'bershka dress 1 530.00,'),(5293,'dm 800.00,tehnomarket 26,000.00,'),(5353,'dm 800.00,tehnomarket 26,000.00,'),(5361,'dm 800.00,tehnomarket 26,000.00,'),(5393,'bershka 530.00,'),(5470,'dm 800.00,tehnomarket 26,000.00,'),(5584,'bershka dress 2 530.00,'),(5751,'rapsody_travel Greece 1 12,000.00,cosmo eye-shadow 4 900.00,bershka dress 1 530.00,'),(6008,'bershka dress 1 530.00,'),(6036,'dm 800.00,tehnomarket 26,000.00,'),(6164,'bershka dress 1 530.00,'),(6602,'dm 800.00,tehnomarket 26,000.00,'),(6722,'dm 800.00,tehnomarket 26,000.00,'),(6829,'handm 1,800.00,b-watch 2,500.00,'),(6831,'dm 800.00,tehnomarket 26,000.00,'),(7021,'bershka dress 2 530.00,'),(7110,'dm 800.00,tehnomarket 26,000.00,'),(7144,'dm 800.00,tehnomarket 26,000.00,'),(7190,'adidas 2,800.00,b-watch 2,500.00,'),(7243,'dm 800.00,tehnomarket 26,000.00,'),(7614,'rapsody_travel Greece 1 12,000.00,cosmo eye-shadow 4 900.00,bershka dress 2 530.00,zara skirt 1 1,500.00,'),(7685,'dm 800.00,tehnomarket 26,000.00,'),(7747,'rapsody_travel Greece 1 12,000.00,cosmo eye-shadow 4 900.00,bershka dress 2 530.00,zara skirt 1 1,500.00,'),(7840,'rapsody_travel Greece 1 12,000.00,cosmo eye-shadow 4 900.00,bershka dress 1 530.00,'),(8070,'dm 800.00,tehnomarket 26,000.00,'),(8139,'dm 800.00,tehnomarket 26,000.00,'),(8159,'bershka dress 1 530.00,'),(8172,'dm 800.00,tehnomarket 26,000.00,'),(8261,'dm 800.00,tehnomarket 26,000.00,'),(8469,'dm 800.00,tehnomarket 26,000.00,'),(8565,'zara skirt 2 3,000.00,bershka dress 2 1,060.00,Total=4,060.00'),(8859,'rapsody_travel Greece 1 12,000.00,cosmo eye-shadow 4 900.00,bershka dress 2 530.00,zara skirt 1 1,500.00,'),(8906,'zara skirt 2 1,500.00,amc AC 1 10,000.00,MyTime watch 1 5,000.00,b-watch watch 2 2,500.00,'),(8951,'dm 800.00,tehnomarket 26,000.00,'),(9545,'dm 800.00,tehnomarket 26,000.00,'),(9630,'zara nov 2 400.00,bershka dress 3 530.00,'),(9967,'bershka dress 2 530.00,daily NewYear 1 2,500.00,');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `popusti`
--

DROP TABLE IF EXISTS `popusti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `popusti` (
  `discountID` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `name` varchar(32) NOT NULL,
  `product` varchar(11) NOT NULL,
  `category_id` int NOT NULL,
  `price` int NOT NULL,
  `discounted_price` int NOT NULL,
  `date_from` date NOT NULL,
  `date_end` date NOT NULL,
  PRIMARY KEY (`discountID`),
  KEY `category_id` (`category_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `popusti_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`),
  CONSTRAINT `popusti_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12423425 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `popusti`
--

LOCK TABLES `popusti` WRITE;
/*!40000 ALTER TABLE `popusti` DISABLE KEYS */;
INSERT INTO `popusti` VALUES (2,1,'bershka','dress',1,600,530,'2021-08-23','2021-09-14'),(5,3,'rapsody_travel','Greece',3,16000,12000,'2021-08-29','2021-09-30'),(6,4,'amc','AC',2,14000,10000,'2021-09-28','2021-09-30'),(8,5,'balkanfun','Serbia',3,10000,8500,'2021-08-28','2021-09-15'),(9,6,'pelister','Valentine\'s',4,1000,800,'2021-12-30','2021-12-01'),(10,7,'daily','NewYear',4,3000,2500,'2021-02-12','2021-02-14'),(11,8,'dm','foundation',5,1000,800,'2021-03-07','2021-03-09'),(12,9,'cosmo','eye-shadow',5,1200,900,'2021-08-28','2021-09-30'),(13,10,'MyTime','watch',6,7000,5000,'2021-09-30','2021-10-30'),(14,11,'b-watch','watch',6,5000,2500,'2021-08-23','2021-08-25'),(15,2,'tehnomarket','TV',2,30000,26000,'2021-08-28','2021-09-20'),(213432,3365,'baki','summer tour',3,12000,10200,'2020-08-10','2020-08-20'),(243253,78334,'handm','Jeans',1,2400,1800,'2019-03-18','2019-04-01'),(1076327,0,'zara','dress',1,1000,800,'2021-08-05','2021-09-03'),(2345234,3365,'baki','Ring',6,6500,5200,'2019-03-18','2019-04-01'),(12423424,15422,'adidas','Shoes',1,3500,2800,'2020-08-10','2020-08-20');
/*!40000 ALTER TABLE `popusti` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_requests`
--

DROP TABLE IF EXISTS `user_requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_requests` (
  `user_id` int NOT NULL,
  `username` varchar(22) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_requests`
--

LOCK TABLES `user_requests` WRITE;
/*!40000 ALTER TABLE `user_requests` DISABLE KEYS */;
INSERT INTO `user_requests` VALUES (5059,'proba2','77613cc1a3c10c8f6207672731dd88e5ebaf7a31'),(3137,'nike','108964fe8d287e2eb97964489ebd37218a8495fa'),(5109,'nike','3f69c715089dd9164c070e6603218a77ae7afd9a');
/*!40000 ALTER TABLE `user_requests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `username` varchar(22) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (0,'zaraAdmin','554fff6738aec37629717794db6d22487c624b44'),(1,'bershkaAdmin','02ad6fe32138c07f369d777b97eec1e5a10cb861'),(2,'tehnomarketAdmin','677759d42c3d77887cc528d2b83e02c9614ab5bc'),(3,'rapsodyAdmin','2ffc3ec163565077213693361fb9ff0fcdc6eaec'),(4,'amcAdmin','7424684f4afa6c7b595e58e83a266ac9e9e61781'),(5,'balkanfunAdmin','6f478b856b861e611668636c8d8f4bd8065651ae'),(6,'pelisterAdmin','f504db753ec74969f3eceb0464fbf80ebb18fa0b'),(7,'dailyAdmin','2122286bc49d2efd0c97bff66c694ea28ae07e4e'),(8,'dmAdmin','397692316df2954c75a505e4a41b8f2e49cba67d'),(9,'cosmoAdmin','d62741f3ed97faa6da63c2e3400de2f2338aced3'),(10,'mytimeAdmin','c0defebb2e18142eab6f6de811c9f159bbdffebb'),(11,'bwatchAdmin','7132d2a7ca4d2c45b55171ae48cfaa0065e9a56a'),(3365,'baki','527cc75fe21112074055d079f2baed49ba799787'),(5000,'proba','c5c63d3d0200a52c781defb1163838e1ae375030'),(15422,'adidas','9c19419ee0f410b10e11a447f4a9a4ab6643aedf'),(21321,'pikacu','pikacu123'),(78334,'handm','93d934c2fad9ee9487555efe9f8c867ae33fb8db'),(3612903,'nov','a279759e79f0278ef561fc92545fcb40011f873b');
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

-- Dump completed on 2022-06-24 12:45:15
