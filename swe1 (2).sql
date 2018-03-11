-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 11, 2018 at 03:16 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swe1`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parentid` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `parentid` (`parentid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `main_id` (`main_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appstatuslu`
--

DROP TABLE IF EXISTS `appstatuslu`;
CREATE TABLE IF NOT EXISTS `appstatuslu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status_id` int(11) NOT NULL,
  `main_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status_id` (`status_id`),
  KEY `user_id` (`main_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendlu`
--

DROP TABLE IF EXISTS `attendlu`;
CREATE TABLE IF NOT EXISTS `attendlu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `attendlu` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendlu`
--

INSERT INTO `attendlu` (`id`, `attendlu`) VALUES
(1, 'Full Time'),
(2, 'Part Time'),
(3, 'Other - Sunday Monday Tuesday'),
(4, 'Other - Sunday Tuesday wednesday'),
(5, 'Other - Sunday Wednesday Thursday'),
(6, 'Other - Sunday Tuesday Thursday'),
(7, 'Other - Sunday Monday Wednesday'),
(8, 'Other - Sunday Monday Thursday'),
(9, 'Other - Tuesday Wednesday Thursday'),
(10, 'Other - Monday Tuesday Wednesday');

-- --------------------------------------------------------

--
-- Table structure for table `attend_int`
--

DROP TABLE IF EXISTS `attend_int`;
CREATE TABLE IF NOT EXISTS `attend_int` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `attendlu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `attendance_id` (`user_id`,`attendlu_id`),
  KEY `attendlu_id` (`attendlu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `time` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`),
  KEY `payment_id` (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

DROP TABLE IF EXISTS `bus`;
CREATE TABLE IF NOT EXISTS `bus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `area` polygon NOT NULL,
  `arrival` int(11) NOT NULL,
  `departure` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  SPATIAL KEY `area` (`area`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dob`
--

DROP TABLE IF EXISTS `dob`;
CREATE TABLE IF NOT EXISTS `dob` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dob`
--

INSERT INTO `dob` (`id`, `day`, `month`, `year`) VALUES
(1, 27, 11, 1997);

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

DROP TABLE IF EXISTS `emergency`;
CREATE TABLE IF NOT EXISTS `emergency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `ecname` varchar(100) NOT NULL,
  `ecaddress_id` int(11) NOT NULL,
  `relation` varchar(50) NOT NULL,
  `ecnum` int(11) NOT NULL,
  `extrainfo` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `u_id` (`u_id`,`ecaddress_id`),
  KEY `ecaddress_id` (`ecaddress_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `errors`
--

DROP TABLE IF EXISTS `errors`;
CREATE TABLE IF NOT EXISTS `errors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`),
  KEY `lang_id` (`lang_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `errortype`
--

DROP TABLE IF EXISTS `errortype`;
CREATE TABLE IF NOT EXISTS `errortype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

DROP TABLE IF EXISTS `language`;
CREATE TABLE IF NOT EXISTS `language` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

DROP TABLE IF EXISTS `main`;
CREATE TABLE IF NOT EXISTS `main` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `utype` int(11) NOT NULL,
  `appstatus` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `dob_id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `ssn` int(11) NOT NULL COMMENT 'can also be social num',
  PRIMARY KEY (`id`),
  KEY `dob_id` (`dob_id`),
  KEY `utype` (`utype`),
  KEY `appstatus` (`appstatus`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nationality`
--

DROP TABLE IF EXISTS `nationality`;
CREATE TABLE IF NOT EXISTS `nationality` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nationality`
--

INSERT INTO `nationality` (`id`, `name`) VALUES
(1, 'American'),
(2, 'Egyptian');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL COMMENT 'name, expiration date, etc',
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

DROP TABLE IF EXISTS `page`;
CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `friendlyname` varchar(100) NOT NULL,
  `path` varchar(200) NOT NULL,
  `html` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

DROP TABLE IF EXISTS `parent`;
CREATE TABLE IF NOT EXISTS `parent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `main_id` int(11) NOT NULL,
  `faname` varchar(100) NOT NULL,
  `fnum` int(11) NOT NULL,
  `ffbook` varchar(200) NOT NULL,
  `foccupation` varchar(100) NOT NULL,
  `fofficenum` int(8) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `mnum` int(11) NOT NULL,
  `mfbook` varchar(200) NOT NULL,
  `moccupation` varchar(100) NOT NULL,
  `mofficenum` int(8) NOT NULL,
  `mstatus` int(1) NOT NULL,
  `addres_id` int(11) NOT NULL,
  `homenum` int(8) NOT NULL,
  `usualpickup` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `u_id` (`u_id`),
  KEY `main_id` (`main_id`),
  KEY `addres_id` (`addres_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paymentopt`
--

DROP TABLE IF EXISTS `paymentopt`;
CREATE TABLE IF NOT EXISTS `paymentopt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `options_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `options_id` (`options_id`,`payment_id`),
  KEY `payment_id` (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pm_o_v`
--

DROP TABLE IF EXISTS `pm_o_v`;
CREATE TABLE IF NOT EXISTS `pm_o_v` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `payment_o_id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`),
  KEY `payment_o_id` (`payment_o_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qualifications`
--

DROP TABLE IF EXISTS `qualifications`;
CREATE TABLE IF NOT EXISTS `qualifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qual_link`
--

DROP TABLE IF EXISTS `qual_link`;
CREATE TABLE IF NOT EXISTS `qual_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qual_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `qual_id` (`qual_id`),
  KEY `teacher_id` (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qual_look`
--

DROP TABLE IF EXISTS `qual_look`;
CREATE TABLE IF NOT EXISTS `qual_look` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quallink_id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL COMMENT 'masters,  phd etc.',
  `date` timestamp NOT NULL COMMENT 'time stamp',
  PRIMARY KEY (`id`),
  KEY `quallink_id` (`quallink_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
CREATE TABLE IF NOT EXISTS `salary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL,
  `discounts` int(11) NOT NULL,
  `bonuses_id` int(11) NOT NULL,
  `deductables_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `start` int(4) NOT NULL,
  `end` int(4) NOT NULL,
  `description` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule_int`
--

DROP TABLE IF EXISTS `schedule_int`;
CREATE TABLE IF NOT EXISTS `schedule_int` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `schedule_id` int(11) NOT NULL,
  `utype_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `schedule_id` (`schedule_id`,`utype_id`),
  KEY `schedlu_id` (`utype_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(11) NOT NULL,
  `nationality` int(100) NOT NULL,
  `address_id` int(11) NOT NULL,
  `main_id` int(11) NOT NULL,
  `telnum` int(8) NOT NULL,
  `mobile1` int(11) NOT NULL,
  `maritalstatus` int(11) NOT NULL,
  `acaqual1` varchar(300) NOT NULL,
  `date_acaqual1` int(8) NOT NULL,
  `personal_qual1` varchar(300) NOT NULL,
  `date_ppersonalqual1` int(8) NOT NULL,
  `pempname` varchar(100) NOT NULL,
  `pempaddress_id` int(11) NOT NULL,
  `pempnum` int(11) NOT NULL,
  `corlsalary` int(5) NOT NULL,
  `reqsalary` int(5) NOT NULL,
  `othernursery` varchar(500) NOT NULL,
  `povnursery` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `main_id` (`main_id`),
  KEY `pempaddress_id` (`pempaddress_id`),
  KEY `address_id` (`address_id`),
  KEY `nationality` (`nationality`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tranlog`
--

DROP TABLE IF EXISTS `tranlog`;
CREATE TABLE IF NOT EXISTS `tranlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `Message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `u_id` (`u_id`,`status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `translation`
--

DROP TABLE IF EXISTS `translation`;
CREATE TABLE IF NOT EXISTS `translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_lang` varchar(50) NOT NULL,
  `to_lang` varchar(50) NOT NULL,
  `from_word` varchar(30) NOT NULL,
  `to_word` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `from_lang` (`from_lang`),
  KEY `to_lang` (`to_lang`),
  KEY `from_word` (`from_word`),
  KEY `to_word` (`to_word`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `ddoe` int(8) NOT NULL,
  `main_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `main_id` (`main_id`),
  KEY `p_id` (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usertypelu`
--

DROP TABLE IF EXISTS `usertypelu`;
CREATE TABLE IF NOT EXISTS `usertypelu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usertype` int(11) NOT NULL COMMENT 'the one in user is the foreign key',
  PRIMARY KEY (`id`),
  KEY `usertype` (`usertype`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `utl_int`
--

DROP TABLE IF EXISTS `utl_int`;
CREATE TABLE IF NOT EXISTS `utl_int` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `utl_id` int(11) NOT NULL COMMENT 'from user type look up',
  PRIMARY KEY (`id`),
  KEY `page_id` (`page_id`,`utl_id`),
  KEY `utl_id` (`utl_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `word`
--

DROP TABLE IF EXISTS `word`;
CREATE TABLE IF NOT EXISTS `word` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lang_id` (`lang_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`id`) REFERENCES `address` (`parentid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `appstatuslu`
--
ALTER TABLE `appstatuslu`
  ADD CONSTRAINT `appstatuslu_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appstatuslu_ibfk_2` FOREIGN KEY (`main_id`) REFERENCES `main` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `attend_int`
--
ALTER TABLE `attend_int`
  ADD CONSTRAINT `attend_int_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `attend_int_ibfk_2` FOREIGN KEY (`attendlu_id`) REFERENCES `attendlu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `emergency`
--
ALTER TABLE `emergency`
  ADD CONSTRAINT `emergency_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `main`
--
ALTER TABLE `main`
  ADD CONSTRAINT `main_ibfk_1` FOREIGN KEY (`dob_id`) REFERENCES `dob` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `main_ibfk_3` FOREIGN KEY (`utype`) REFERENCES `usertypelu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parent`
--
ALTER TABLE `parent`
  ADD CONSTRAINT `parent_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parent_ibfk_2` FOREIGN KEY (`main_id`) REFERENCES `main` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parent_ibfk_3` FOREIGN KEY (`addres_id`) REFERENCES `address` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `paymentopt`
--
ALTER TABLE `paymentopt`
  ADD CONSTRAINT `paymentopt_ibfk_1` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `paymentopt_ibfk_2` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pm_o_v`
--
ALTER TABLE `pm_o_v`
  ADD CONSTRAINT `pm_o_v_ibfk_1` FOREIGN KEY (`payment_o_id`) REFERENCES `paymentopt` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pm_o_v_ibfk_2` FOREIGN KEY (`parent_id`) REFERENCES `parent` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `qual_link`
--
ALTER TABLE `qual_link`
  ADD CONSTRAINT `qual_link_ibfk_1` FOREIGN KEY (`qual_id`) REFERENCES `qualifications` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `qual_look`
--
ALTER TABLE `qual_look`
  ADD CONSTRAINT `qual_look_ibfk_1` FOREIGN KEY (`quallink_id`) REFERENCES `qual_link` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `schedule_int`
--
ALTER TABLE `schedule_int`
  ADD CONSTRAINT `schedule_int_ibfk_1` FOREIGN KEY (`schedule_id`) REFERENCES `schedule` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_int_ibfk_2` FOREIGN KEY (`utype_id`) REFERENCES `usertypelu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`main_id`) REFERENCES `main` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_ibfk_3` FOREIGN KEY (`pempaddress_id`) REFERENCES `address` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_ibfk_4` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_ibfk_5` FOREIGN KEY (`nationality`) REFERENCES `nationality` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`main_id`) REFERENCES `main` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `parent` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `utl_int`
--
ALTER TABLE `utl_int`
  ADD CONSTRAINT `utl_int_ibfk_1` FOREIGN KEY (`utl_id`) REFERENCES `usertypelu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `utl_int_ibfk_2` FOREIGN KEY (`page_id`) REFERENCES `page` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `word`
--
ALTER TABLE `word`
  ADD CONSTRAINT `word_ibfk_1` FOREIGN KEY (`lang_id`) REFERENCES `language` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
