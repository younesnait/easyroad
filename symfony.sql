-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2014 at 01:21 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `symfony`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `area`) VALUES
(1, 'dakhla'),
(2, 'salam'),
(3, 'amsernat'),
(7, 'batoire'),
(8, 'lkyam'),
(9, 'laazib'),
(10, 'alhouda'),
(11, 'boutchakat'),
(12, 'bensergaw');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `trafficjam_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5BC96BF0A76ED395` (`user_id`),
  KEY `IDX_5BC96BF0F71926CF` (`trafficjam_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `trafficjam_id`, `title`, `description`, `date`) VALUES
(1, 2, 1, 'Embouteillage dakhlaa!!! ', 'l''embouteillage is keeping us late etc ...', '2014-05-15 04:38:01'),
(2, 2, 1, 'Embout Lorem Ipsum   2!!! ', ' Lorem Ipsum   Lorem Ipsum   Lorem Ipsum  ...', '2014-05-15 04:42:02'),
(3, 2, 1, 'Embout Lorem Ipsum   3!!! ', ' Lorem Ipsum   Lorem Ipsum   Lorem Ipsum  ...', '2014-05-15 04:42:02'),
(4, 2, 1, 'Embout Lorem Ipsum   4!!! ', ' Lorem Ipsum   Lorem Ipsum   Lorem Ipsum  ...', '2014-05-15 04:42:02'),
(5, 4, 2, 'Embout Lorem Ipsum   2!!! ', ' Lorem Ipsum   Lorem Ipsum   Lorem Ipsum  ...', '2014-05-15 04:43:07'),
(6, 4, 2, 'Embout Lorem Ipsum   3!!! ', ' Lorem Ipsum   Lorem Ipsum   Lorem Ipsum  ...', '2014-05-15 04:43:07'),
(7, 4, 2, 'Embout Lorem Ipsum   4!!! ', ' Lorem Ipsum   Lorem Ipsum   Lorem Ipsum  ...', '2014-05-15 04:43:07');

-- --------------------------------------------------------

--
-- Table structure for table `digit_user`
--

CREATE TABLE IF NOT EXISTS `digit_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `facebook_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_access_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google_access_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8961458F92FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_8961458FA0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `digit_user`
--

INSERT INTO `digit_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `facebook_id`, `facebook_access_token`, `google_id`, `google_access_token`) VALUES
(1, 'user2', 'user2', 'user2@ensa.com', 'user2@ensa.com', 1, 'p7z22uqrgw0wkcwcs0os4gos8s0gs4g', 'wyo1Y02bwPYYSiN9YWuTV8Ia/RB7yPm20ra0YWUWnRV+gqsqPC13Bd/9/BpiCxgeKvJKobyNIryqdJG0Olz2/A==', '2014-05-17 01:20:14', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, NULL, NULL, NULL, NULL),
(2, 'user1', 'user1', 'user1@ensa.com', 'user1@ensa.com', 1, 'ohpkcplqqf44w4o44s8ks8g8g4g84kc', 'y++MwuGSR1ijFCdUtNdEG1/MLRaiJlc++nb64nfQvxNCikp6PrIbJ+BsBT0SbZ5im7UkoN1W3nUqaFVvbSZt6g==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, NULL, NULL, NULL, NULL),
(4, 'user3', 'user3', 'user3@ensa.com', 'user3@ensa.com', 1, 'dj5csvw6va0c4sskskwosw4ccs4ks8s', 'cxWoAIJr+gHZq2gVT9LLtwPmNctE/sq/R4CC2ZwlJNp0LhLtcSFKHRH55x2TVWALIq9AzqxkpHSHwtAtTykx+w==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trafficjam_id` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4FC2B5BF71926CF` (`trafficjam_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `trafficjam`
--

CREATE TABLE IF NOT EXISTS `trafficjam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `area_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `startingtime` datetime NOT NULL,
  `endingtime` datetime NOT NULL,
  `longitude` double NOT NULL,
  `largitude` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_10BED48EA76ED395` (`user_id`),
  KEY `IDX_10BED48EC54C8C93` (`type_id`),
  KEY `IDX_10BED48EBD0F409C` (`area_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `trafficjam`
--

INSERT INTO `trafficjam` (`id`, `user_id`, `type_id`, `area_id`, `title`, `description`, `startingtime`, `endingtime`, `longitude`, `largitude`) VALUES
(1, 1, 3, 1, 'Arret bus 03 wilaya-houda ', 'l''embouteillage Arret bus 03 wilaya-houda set fréquent etc ...', '2014-05-15 04:18:25', '2014-05-15 04:18:25', -9.548528, 30.409767),
(2, 2, 3, 1, 'Embouteillage hassan1 ', 'l''embouteillage du boulvard hassan1 au nivau du rond point etc ...', '2014-05-15 04:23:36', '2014-05-15 04:23:36', -9.551328, 30.405556),
(3, 2, 2, 1, 'Embouteillage Al akkad ', 'l''embouteillage du boulvard al akkad devant collège EL FIDIA etc ...', '2014-05-15 04:28:09', '2014-05-15 04:28:09', -9.560641, 30.4153),
(4, NULL, NULL, NULL, 'new emb', 'new emb', '2009-01-01 00:00:00', '2009-01-01 00:00:00', -9.560641, 30.3159);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `type`) VALUES
(1, 'works'),
(2, 'accident'),
(3, 'traffic');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_5BC96BF0A76ED395` FOREIGN KEY (`user_id`) REFERENCES `digit_user` (`id`),
  ADD CONSTRAINT `FK_5BC96BF0F71926CF` FOREIGN KEY (`trafficjam_id`) REFERENCES `trafficjam` (`id`);

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `FK_4FC2B5BF71926CF` FOREIGN KEY (`trafficjam_id`) REFERENCES `trafficjam` (`id`);

--
-- Constraints for table `trafficjam`
--
ALTER TABLE `trafficjam`
  ADD CONSTRAINT `FK_10BED48EA76ED395` FOREIGN KEY (`user_id`) REFERENCES `digit_user` (`id`),
  ADD CONSTRAINT `FK_10BED48EBD0F409C` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`),
  ADD CONSTRAINT `FK_10BED48EC54C8C93` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
