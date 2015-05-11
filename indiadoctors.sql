-- MySQL dump 10.13  Distrib 5.5.34, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: indiadoctors
-- ------------------------------------------------------
-- Server version	5.5.34-0ubuntu0.13.04.1

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
-- Table structure for table `college_master_table`
--

DROP TABLE IF EXISTS `college_master_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `college_master_table` (
  `collegeid` int(11) NOT NULL AUTO_INCREMENT,
  `collegelabel` varchar(200) NOT NULL,
  `cstatus` smallint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`collegeid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `doctor_cv_table`
--

DROP TABLE IF EXISTS `doctor_cv_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctor_cv_table` (
  `userid` int(11) NOT NULL,
  `cvpath` text NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `doctor_job_table`
--

DROP TABLE IF EXISTS `doctor_job_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctor_job_table` (
  `userid` int(11) NOT NULL,
  `workedat` varchar(200) NOT NULL,
  `fromdate` date NOT NULL,
  `tilldate` date NOT NULL,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `doctor_master_profile_table`
--

DROP TABLE IF EXISTS `doctor_master_profile_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctor_master_profile_table` (
  `userid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mci` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobileno` varchar(50) NOT NULL,
  `gender` smallint(1) NOT NULL,
  `profileimageurl` text,
  `recievenewsletter` smallint(1) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `doctor_qualification_table`
--

DROP TABLE IF EXISTS `doctor_qualification_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctor_qualification_table` (
  `userid` int(11) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `qyear` year(4) NOT NULL,
  `tid` bigint(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `doctor_speciality_table`
--

DROP TABLE IF EXISTS `doctor_speciality_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctor_speciality_table` (
  `userid` int(11) NOT NULL,
  `specialityid` int(11) NOT NULL,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `hr_master_profile_table`
--

DROP TABLE IF EXISTS `hr_master_profile_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hr_master_profile_table` (
  `userid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `positionofperson` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobileno` varchar(50) NOT NULL,
  `profileimageurl` text,
  `recievenewsletter` smallint(1) NOT NULL,
  `gender` smallint(1) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_advert_table`
--

DROP TABLE IF EXISTS `id_advert_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_advert_table` (
  `userid` bigint(11) NOT NULL,
  `dateofaddition` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `slot` int(11) NOT NULL,
  `pathurl` text NOT NULL,
  `linkurl` text,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_alert_table`
--

DROP TABLE IF EXISTS `id_alert_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_alert_table` (
  `userid` bigint(11) NOT NULL,
  `post` text NOT NULL,
  `postlabel` varchar(200) NOT NULL,
  `dateofaddition` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `pathurl` text,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_classifieds_comment_table`
--

DROP TABLE IF EXISTS `id_classifieds_comment_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_classifieds_comment_table` (
  `userid` bigint(11) NOT NULL,
  `comment` text NOT NULL,
  `dateofcomment` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `postid` bigint(11) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_classifieds_table`
--

DROP TABLE IF EXISTS `id_classifieds_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_classifieds_table` (
  `userid` bigint(11) NOT NULL,
  `post` text NOT NULL,
  `postlabel` varchar(200) NOT NULL,
  `dateofaddition` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `imageurl` text,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_conferences_table`
--

DROP TABLE IF EXISTS `id_conferences_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_conferences_table` (
  `userid` bigint(11) NOT NULL,
  `post` text NOT NULL,
  `postlabel` varchar(200) NOT NULL,
  `dateofaddition` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `specialityid` int(11) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=391 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_courses_table`
--

DROP TABLE IF EXISTS `id_courses_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_courses_table` (
  `userid` bigint(11) NOT NULL,
  `post` text NOT NULL,
  `postlabel` varchar(200) NOT NULL,
  `dateofaddition` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `specialityid` int(11) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=217 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_diary_table`
--

DROP TABLE IF EXISTS `id_diary_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_diary_table` (
  `userid` bigint(11) NOT NULL,
  `post` text NOT NULL,
  `postlabel` varchar(200) NOT NULL,
  `dateofaddition` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `imageurl` text,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_dmexam_table`
--

DROP TABLE IF EXISTS `id_dmexam_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_dmexam_table` (
  `userid` bigint(11) NOT NULL,
  `post` text NOT NULL,
  `postlabel` varchar(200) NOT NULL,
  `dateofaddition` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `specialityid` int(11) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_ebooks_table`
--

DROP TABLE IF EXISTS `id_ebooks_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_ebooks_table` (
  `userid` bigint(11) NOT NULL,
  `post` text NOT NULL,
  `postlabel` varchar(200) NOT NULL,
  `dateofaddition` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `specialityid` int(11) NOT NULL,
  `pathurl` text NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_editorspost_comment_table`
--

DROP TABLE IF EXISTS `id_editorspost_comment_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_editorspost_comment_table` (
  `userid` bigint(11) NOT NULL,
  `comment` text NOT NULL,
  `dateofcomment` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `postid` bigint(11) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_editorspost_table`
--

DROP TABLE IF EXISTS `id_editorspost_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_editorspost_table` (
  `userid` bigint(11) NOT NULL,
  `post` text NOT NULL,
  `postlabel` varchar(200) NOT NULL,
  `dateofaddition` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_extra_heading_table`
--

DROP TABLE IF EXISTS `id_extra_heading_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_extra_heading_table` (
  `userid` bigint(11) NOT NULL,
  `post` text NOT NULL,
  `postlabel` varchar(200) NOT NULL,
  `dateofaddition` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `pathurl` text,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_forum_comment_table`
--

DROP TABLE IF EXISTS `id_forum_comment_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_forum_comment_table` (
  `userid` bigint(11) NOT NULL,
  `comment` text NOT NULL,
  `dateofcomment` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `postid` bigint(11) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_forum_post_table`
--

DROP TABLE IF EXISTS `id_forum_post_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_forum_post_table` (
  `userid` bigint(11) NOT NULL,
  `post` text NOT NULL,
  `postlabel` varchar(200) NOT NULL,
  `dateofaddition` date NOT NULL,
  `specialityid` int(11) NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `imageurl` text,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_guidelinesinternational_table`
--

DROP TABLE IF EXISTS `id_guidelinesinternational_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_guidelinesinternational_table` (
  `userid` bigint(11) NOT NULL,
  `post` text NOT NULL,
  `postlabel` varchar(200) NOT NULL,
  `dateofaddition` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `specialityid` int(11) NOT NULL,
  `pathurl` text,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=345 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_guidelinesnational_table`
--

DROP TABLE IF EXISTS `id_guidelinesnational_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_guidelinesnational_table` (
  `userid` bigint(11) NOT NULL,
  `post` text NOT NULL,
  `postlabel` varchar(200) NOT NULL,
  `dateofaddition` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `specialityid` int(11) NOT NULL,
  `pathurl` text NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_hottopic_comment_table`
--

DROP TABLE IF EXISTS `id_hottopic_comment_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_hottopic_comment_table` (
  `userid` bigint(11) NOT NULL,
  `comment` text NOT NULL,
  `dateofcomment` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `postid` bigint(11) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_hottopic_table`
--

DROP TABLE IF EXISTS `id_hottopic_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_hottopic_table` (
  `userid` bigint(11) NOT NULL,
  `post` text NOT NULL,
  `postlabel` varchar(200) NOT NULL,
  `dateofaddition` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `pathurl` text NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_images_table`
--

DROP TABLE IF EXISTS `id_images_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_images_table` (
  `userid` bigint(11) NOT NULL,
  `post` text NOT NULL,
  `postlabel` varchar(200) NOT NULL,
  `dateofaddition` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `specialityid` int(11) NOT NULL,
  `pathurl` text NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_internationalnews_comment_table`
--

DROP TABLE IF EXISTS `id_internationalnews_comment_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_internationalnews_comment_table` (
  `userid` bigint(11) NOT NULL,
  `comment` text NOT NULL,
  `dateofcomment` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `postid` bigint(11) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_internationalnews_table`
--

DROP TABLE IF EXISTS `id_internationalnews_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_internationalnews_table` (
  `userid` bigint(11) NOT NULL,
  `post` text NOT NULL,
  `postlabel` varchar(200) NOT NULL,
  `dateofaddition` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=177 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_job_comment_table`
--

DROP TABLE IF EXISTS `id_job_comment_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_job_comment_table` (
  `userid` bigint(11) NOT NULL,
  `comment` text NOT NULL,
  `dateofcomment` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `postid` bigint(11) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_job_table`
--

DROP TABLE IF EXISTS `id_job_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_job_table` (
  `userid` bigint(11) NOT NULL,
  `post` text NOT NULL,
  `postlabel` varchar(200) NOT NULL,
  `dateofaddition` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=196 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_journalinternational_table`
--

DROP TABLE IF EXISTS `id_journalinternational_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_journalinternational_table` (
  `userid` bigint(11) NOT NULL,
  `post` text NOT NULL,
  `postlabel` varchar(200) NOT NULL,
  `dateofaddition` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `specialityid` int(11) NOT NULL,
  `imageurl` text,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=719 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_journalnational_table`
--

DROP TABLE IF EXISTS `id_journalnational_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_journalnational_table` (
  `userid` bigint(11) NOT NULL,
  `post` text NOT NULL,
  `postlabel` varchar(200) NOT NULL,
  `dateofaddition` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `specialityid` int(11) NOT NULL,
  `imageurl` text,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_link_table`
--

DROP TABLE IF EXISTS `id_link_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_link_table` (
  `userid` bigint(11) NOT NULL,
  `post` text NOT NULL,
  `postlabel` varchar(200) NOT NULL,
  `dateofaddition` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `linkpath` text NOT NULL,
  `pathurl` text,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_mdexam_table`
--

DROP TABLE IF EXISTS `id_mdexam_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_mdexam_table` (
  `userid` bigint(11) NOT NULL,
  `post` text NOT NULL,
  `postlabel` varchar(200) NOT NULL,
  `dateofaddition` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `specialityid` int(11) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_medicolegal_comment_table`
--

DROP TABLE IF EXISTS `id_medicolegal_comment_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_medicolegal_comment_table` (
  `userid` bigint(11) NOT NULL,
  `comment` text NOT NULL,
  `dateofcomment` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `postid` bigint(11) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_medicolegal_table`
--

DROP TABLE IF EXISTS `id_medicolegal_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_medicolegal_table` (
  `userid` bigint(11) NOT NULL,
  `post` text NOT NULL,
  `postlabel` varchar(200) NOT NULL,
  `dateofaddition` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_nationalnews_comment_table`
--

DROP TABLE IF EXISTS `id_nationalnews_comment_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_nationalnews_comment_table` (
  `userid` bigint(11) NOT NULL,
  `comment` text NOT NULL,
  `dateofcomment` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `postid` bigint(11) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_nationalnews_table`
--

DROP TABLE IF EXISTS `id_nationalnews_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_nationalnews_table` (
  `userid` bigint(11) NOT NULL,
  `post` text NOT NULL,
  `postlabel` varchar(200) NOT NULL,
  `dateofaddition` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=772 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_previousquestions_table`
--

DROP TABLE IF EXISTS `id_previousquestions_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_previousquestions_table` (
  `userid` bigint(11) NOT NULL,
  `post` text NOT NULL,
  `postlabel` varchar(200) NOT NULL,
  `dateofaddition` date NOT NULL,
  `collegeid` int(11) NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `fileurl` text,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_quiz_table`
--

DROP TABLE IF EXISTS `id_quiz_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_quiz_table` (
  `userid` bigint(11) NOT NULL,
  `post` text NOT NULL,
  `postlabel` varchar(200) NOT NULL,
  `dateofaddition` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `specialityid` int(11) NOT NULL,
  `option1` text,
  `option2` text,
  `option3` text,
  `option4` text,
  `correctanswer` smallint(1) DEFAULT NULL,
  `explanation` text,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=356 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_survey_option_table`
--

DROP TABLE IF EXISTS `id_survey_option_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_survey_option_table` (
  `surveyid` bigint(11) NOT NULL,
  `optionid` bigint(11) NOT NULL AUTO_INCREMENT,
  `optionlabel` text NOT NULL,
  PRIMARY KEY (`optionid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_survey_response_table`
--

DROP TABLE IF EXISTS `id_survey_response_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_survey_response_table` (
  `surveyid` bigint(11) NOT NULL,
  `userid` bigint(11) NOT NULL,
  `optionid` bigint(11) NOT NULL,
  `dateofresponse` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`surveyid`,`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `id_survey_table`
--

DROP TABLE IF EXISTS `id_survey_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `id_survey_table` (
  `userid` bigint(11) NOT NULL,
  `postlabel` text NOT NULL,
  `dateofaddition` date NOT NULL,
  `views` bigint(11) NOT NULL,
  `approverid` bigint(11) DEFAULT NULL,
  `timeofaddition` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `specialization_master_table`
--

DROP TABLE IF EXISTS `specialization_master_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `specialization_master_table` (
  `specializationid` int(11) NOT NULL AUTO_INCREMENT,
  `specializationlabel` varchar(200) NOT NULL,
  `sstatus` smallint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`specializationid`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `student_master_profile_table`
--

DROP TABLE IF EXISTS `student_master_profile_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_master_profile_table` (
  `userid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `currentyear` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobileno` varchar(50) NOT NULL,
  `gender` smallint(1) NOT NULL,
  `profileimageurl` text,
  `recievenewsletter` smallint(1) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `team_table`
--

DROP TABLE IF EXISTS `team_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team_table` (
  `memberid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `orderonwebsite` smallint(2) NOT NULL,
  `status` smallint(1) NOT NULL DEFAULT '1',
  `imageurl` text,
  PRIMARY KEY (`memberid`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user_permission_table`
--

DROP TABLE IF EXISTS `user_permission_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_permission_table` (
  `userid` bigint(11) NOT NULL,
  `shareid` smallint(1) NOT NULL,
  `setting` smallint(1) NOT NULL,
  PRIMARY KEY (`userid`,`shareid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user_table`
--

DROP TABLE IF EXISTS `user_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_table` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` smallint(1) NOT NULL,
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `accounttype` smallint(1) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=208 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user_todo_list`
--

DROP TABLE IF EXISTS `user_todo_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_todo_list` (
  `tid` bigint(12) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `fromdate` date NOT NULL,
  `tilldate` date NOT NULL,
  `fromtime` time NOT NULL,
  `tilltime` time NOT NULL,
  `tasklabel` varchar(100) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-05-11 16:47:44
