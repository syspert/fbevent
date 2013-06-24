-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2013 at 12:54 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `fb`
--
CREATE DATABASE `fb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fb`;

-- --------------------------------------------------------

--
-- Table structure for table `fbevent`
--

CREATE TABLE IF NOT EXISTS `fbevent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eid` bigint(20) NOT NULL,
  `all_members_count` int(10) unsigned NOT NULL,
  `attending_count` int(10) unsigned NOT NULL,
  `can_invite_friends` int(11) NOT NULL,
  `creator` bigint(20) NOT NULL,
  `declined_count` int(10) unsigned NOT NULL,
  `description` varchar(255) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `location` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `timezone` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  `city` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `eid` (`eid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `fbevent`
--


-- --------------------------------------------------------

--
-- Table structure for table `fbevent_member`
--

CREATE TABLE IF NOT EXISTS `fbevent_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eid` bigint(20) NOT NULL,
  `uid` bigint(20) NOT NULL,
  `start_time` datetime NOT NULL,
  `rsvp_status` varchar(255) NOT NULL,
  `inviter` bigint(20) NOT NULL,
  `uidcur` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uidcur` (`uidcur`,`eid`,`uid`),
  KEY `start_date` (`start_time`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=174 ;

--
-- Dumping data for table `fbevent_member`
--

INSERT INTO `fbevent_member` (`id`, `eid`, `uid`, `start_time`, `rsvp_status`, `inviter`, `uidcur`) VALUES
(1, 131194357041249, 545124893, '2013-07-06 10:00:00', 'attending', 0, 100000133026789),
(2, 257163114427313, 545124893, '2013-06-29 00:00:00', 'attending', 0, 100000133026789),
(3, 364130270376356, 603381430, '2014-05-03 00:00:00', 'attending', 0, 100000133026789),
(4, 501747406547336, 704537558, '2013-11-02 00:00:00', 'attending', 0, 100000133026789),
(5, 520959407954810, 1043882803, '2013-06-30 00:00:00', 'attending', 0, 100000133026789),
(6, 131412450375870, 1162928377, '2013-08-23 13:00:00', 'attending', 0, 100000133026789),
(7, 473175259392326, 1415111358, '2013-09-07 12:00:00', 'attending', 0, 100000133026789),
(8, 389106634503035, 100000123056449, '2013-08-02 11:00:00', 'attending', 0, 100000133026789),
(9, 494285750644533, 100000123056449, '2013-06-22 12:05:00', 'attending', 0, 100000133026789),
(10, 351330688319696, 100000129724532, '2013-06-28 00:00:00', 'attending', 0, 100000133026789),
(11, 455227257872083, 100000481524738, '2013-08-17 11:00:00', 'attending', 0, 100000133026789),
(12, 139438962872140, 100000481524738, '2013-08-10 11:00:00', 'attending', 0, 100000133026789),
(13, 388820804534147, 100000481524738, '2013-07-07 10:00:00', 'attending', 0, 100000133026789),
(14, 390566747658495, 100000481524738, '2013-06-29 11:00:00', 'attending', 0, 100000133026789),
(15, 497209823663853, 100000784705886, '2014-04-26 10:00:00', 'attending', 0, 100000133026789),
(16, 588364747874656, 100000784705886, '2013-07-06 21:00:00', 'attending', 0, 100000133026789),
(17, 139742662873653, 100001061084900, '2013-07-06 18:45:00', 'attending', 0, 100000133026789),
(18, 377941858977276, 100001291589209, '2013-06-29 19:30:00', 'attending', 0, 100000133026789),
(19, 479190252155210, 672540990, '2013-07-21 13:00:00', 'unsure', 0, 100000133026789),
(20, 102092853328960, 100000784705886, '2013-08-10 23:00:00', 'unsure', 0, 100000133026789),
(21, 369952786440239, 100000784705886, '2013-06-29 23:00:00', 'unsure', 0, 100000133026789),
(22, 508313175854266, 100001002380579, '2013-06-29 00:00:00', 'unsure', 0, 100000133026789),
(23, 419803681449118, 100001655463133, '2013-09-07 17:00:00', 'unsure', 0, 100000133026789),
(24, 527294520634843, 672540990, '2013-08-31 12:00:00', 'declined', 0, 100000133026789),
(25, 448433835249380, 672540990, '2013-08-10 22:00:00', 'declined', 0, 100000133026789),
(26, 263488427032524, 672540990, '2013-07-12 16:30:00', 'declined', 0, 100000133026789),
(27, 200640160059709, 672540990, '2013-06-30 00:00:00', 'declined', 0, 100000133026789),
(28, 430845247001819, 672540990, '2013-06-29 14:00:00', 'declined', 0, 100000133026789),
(29, 145476202302928, 672540990, '2013-06-22 14:00:00', 'declined', 0, 100000133026789),
(30, 182113598617287, 1131319405, '2013-07-01 00:00:00', 'declined', 0, 100000133026789),
(31, 456732521074300, 100000859661374, '2013-07-20 09:30:00', 'declined', 0, 100000133026789),
(32, 479190252155210, 100001562888016, '2013-07-21 13:00:00', 'declined', 0, 100000133026789),
(33, 533846396653801, 100001562888016, '2013-07-06 14:00:00', 'declined', 0, 100000133026789),
(34, 164639357040308, 100001562888016, '2013-06-26 19:30:00', 'declined', 0, 100000133026789),
(35, 206834602800801, 100001611736594, '2013-06-29 14:00:00', 'declined', 0, 100000133026789),
(36, 428063957281213, 100001611736594, '2013-06-22 14:00:00', 'declined', 0, 100000133026789),
(37, 337741436323093, 100002232058615, '2013-12-12 12:10:00', 'declined', 0, 100000133026789),
(38, 131742056996766, 100002903770361, '2013-08-05 00:00:00', 'declined', 0, 100000133026789),
(39, 475810275828527, 545124893, '2013-07-04 19:00:00', 'not_replied', 0, 100000133026789),
(40, 527577767280136, 545124893, '2013-07-02 19:00:00', 'not_replied', 0, 100000133026789),
(41, 466335270111454, 545124893, '2013-06-27 22:00:00', 'not_replied', 0, 100000133026789),
(42, 116943365142670, 545124893, '2013-06-27 21:30:00', 'not_replied', 0, 100000133026789),
(43, 621428261202796, 545124893, '2013-06-22 23:00:00', 'not_replied', 0, 100000133026789),
(44, 497209823663853, 603381430, '2014-04-26 10:00:00', 'not_replied', 0, 100000133026789),
(45, 448577231892302, 603381430, '2013-07-27 12:00:00', 'not_replied', 0, 100000133026789),
(46, 157770024293446, 652322342, '2037-04-10 21:00:00', 'not_replied', 0, 100000133026789),
(47, 497209823663853, 652322342, '2014-04-26 10:00:00', 'not_replied', 0, 100000133026789),
(48, 337741436323093, 652322342, '2013-12-12 12:10:00', 'not_replied', 0, 100000133026789),
(49, 419803681449118, 652322342, '2013-09-07 17:00:00', 'not_replied', 0, 100000133026789),
(50, 141494636038527, 652322342, '2013-06-22 22:00:00', 'not_replied', 0, 100000133026789),
(51, 141494636038527, 672540990, '2013-06-22 22:00:00', 'not_replied', 0, 100000133026789),
(52, 338704192914558, 672540990, '2013-06-22 20:00:00', 'not_replied', 0, 100000133026789),
(53, 509414125773361, 723188574, '2013-07-21 00:00:00', 'not_replied', 0, 100000133026789),
(54, 477354482335164, 723188574, '2013-07-20 00:00:00', 'not_replied', 0, 100000133026789),
(55, 240591596079110, 723188574, '2013-07-19 00:00:00', 'not_replied', 0, 100000133026789),
(56, 147906835394835, 1020667507, '2013-08-17 00:00:00', 'not_replied', 0, 100000133026789),
(57, 588112927890265, 1020667507, '2013-07-07 11:00:00', 'not_replied', 0, 100000133026789),
(58, 141793352671574, 1020667507, '2013-06-27 23:00:00', 'not_replied', 0, 100000133026789),
(59, 141494636038527, 1020667507, '2013-06-22 22:00:00', 'not_replied', 0, 100000133026789),
(60, 493346140735954, 1043882803, '2013-07-05 19:00:00', 'not_replied', 0, 100000133026789),
(61, 138344856369132, 1043882803, '2013-07-04 15:00:00', 'not_replied', 0, 100000133026789),
(62, 131997400339823, 1131319405, '2013-07-11 20:00:00', 'not_replied', 0, 100000133026789),
(63, 181271932037656, 1131319405, '2013-06-30 22:00:00', 'not_replied', 0, 100000133026789),
(64, 581836718514329, 1162928377, '2013-06-27 10:00:00', 'not_replied', 0, 100000133026789),
(65, 278962482249692, 1301333984, '2013-08-02 20:00:00', 'not_replied', 0, 100000133026789),
(66, 519404371442546, 1301333984, '2013-06-29 22:00:00', 'not_replied', 0, 100000133026789),
(67, 666319046728234, 1673937496, '2013-06-28 18:30:00', 'not_replied', 0, 100000133026789),
(68, 133515360171170, 100000123056449, '2013-09-08 18:00:00', 'not_replied', 0, 100000133026789),
(69, 371786096266284, 100000123056449, '2013-08-18 13:00:00', 'not_replied', 0, 100000133026789),
(70, 117407271777147, 100000123056449, '2013-07-20 12:00:00', 'not_replied', 0, 100000133026789),
(71, 149611618561606, 100000123056449, '2013-07-13 23:00:00', 'not_replied', 0, 100000133026789),
(72, 384719411645998, 100000123056449, '2013-06-29 23:00:00', 'not_replied', 0, 100000133026789),
(73, 108859305964917, 100000123056449, '2013-06-27 00:00:00', 'not_replied', 0, 100000133026789),
(74, 621428261202796, 100000123056449, '2013-06-22 23:00:00', 'not_replied', 0, 100000133026789),
(75, 384673851652113, 100000123056449, '2013-06-22 23:00:00', 'not_replied', 0, 100000133026789),
(76, 141494636038527, 100000123056449, '2013-06-22 22:00:00', 'not_replied', 0, 100000133026789),
(77, 494178710631849, 100000123056449, '2013-06-22 22:00:00', 'not_replied', 0, 100000133026789),
(78, 338704192914558, 100000123056449, '2013-06-22 20:00:00', 'not_replied', 0, 100000133026789),
(79, 133822140150690, 100000129724532, '2013-11-01 18:00:00', 'not_replied', 0, 100000133026789),
(80, 473803572689137, 100000129724532, '2013-09-30 18:00:00', 'not_replied', 0, 100000133026789),
(81, 339864646122329, 100000385353864, '2015-01-04 23:00:00', 'not_replied', 0, 100000133026789),
(82, 384125611705301, 100000385353864, '2013-11-15 20:30:00', 'not_replied', 0, 100000133026789),
(83, 297667267032175, 100000385353864, '2013-08-24 11:00:00', 'not_replied', 0, 100000133026789),
(84, 371786096266284, 100000385353864, '2013-08-18 13:00:00', 'not_replied', 0, 100000133026789),
(85, 508329842522298, 100000385353864, '2013-08-04 13:00:00', 'not_replied', 0, 100000133026789),
(86, 448577231892302, 100000385353864, '2013-07-27 12:00:00', 'not_replied', 0, 100000133026789),
(87, 446266815396131, 100000385353864, '2013-07-13 13:00:00', 'not_replied', 0, 100000133026789),
(88, 200740896724632, 100000385353864, '2013-07-13 12:00:00', 'not_replied', 0, 100000133026789),
(89, 580469958649959, 100000385353864, '2013-07-13 12:00:00', 'not_replied', 0, 100000133026789),
(90, 495536353847861, 100000385353864, '2013-07-12 22:00:00', 'not_replied', 0, 100000133026789),
(91, 590306574322887, 100000385353864, '2013-07-12 22:00:00', 'not_replied', 0, 100000133026789),
(92, 1377195819161151, 100000385353864, '2013-07-07 23:30:00', 'not_replied', 0, 100000133026789),
(93, 554491704589938, 100000385353864, '2013-07-07 17:00:00', 'not_replied', 0, 100000133026789),
(94, 465098226899210, 100000385353864, '2013-07-06 22:30:00', 'not_replied', 0, 100000133026789),
(95, 486482798092864, 100000385353864, '2013-06-29 15:00:00', 'not_replied', 0, 100000133026789),
(96, 478037648912160, 100000385353864, '2013-06-28 23:00:00', 'not_replied', 0, 100000133026789),
(97, 141793352671574, 100000385353864, '2013-06-27 23:00:00', 'not_replied', 0, 100000133026789),
(98, 108859305964917, 100000385353864, '2013-06-27 00:00:00', 'not_replied', 0, 100000133026789),
(99, 576645122366671, 100000385353864, '2013-06-23 12:00:00', 'not_replied', 0, 100000133026789),
(100, 494178710631849, 100000385353864, '2013-06-22 22:00:00', 'not_replied', 0, 100000133026789),
(101, 515482831833168, 100000385353864, '2013-06-22 20:00:00', 'not_replied', 0, 100000133026789),
(102, 338704192914558, 100000385353864, '2013-06-22 20:00:00', 'not_replied', 0, 100000133026789),
(103, 459730090787134, 100000385353864, '2013-06-22 19:30:00', 'not_replied', 0, 100000133026789),
(104, 141494636038527, 100000464484080, '2013-06-22 22:00:00', 'not_replied', 0, 100000133026789),
(105, 590306574322887, 100000481524738, '2013-07-12 22:00:00', 'not_replied', 0, 100000133026789),
(106, 529984397062487, 100000481524738, '2013-07-04 22:00:00', 'not_replied', 0, 100000133026789),
(107, 369952786440239, 100000481524738, '2013-06-29 23:00:00', 'not_replied', 0, 100000133026789),
(108, 159770014196898, 100000481524738, '2013-06-29 18:00:00', 'not_replied', 0, 100000133026789),
(109, 381312581975429, 100000481524738, '2013-06-23 16:00:00', 'not_replied', 0, 100000133026789),
(110, 144730285716959, 100000481524738, '2013-06-22 23:00:00', 'not_replied', 0, 100000133026789),
(111, 172051656296337, 100000481524738, '2013-06-22 13:00:00', 'not_replied', 0, 100000133026789),
(112, 206834602800801, 100000599401683, '2013-06-29 14:00:00', 'not_replied', 0, 100000133026789),
(113, 141494636038527, 100000771248990, '2013-06-22 22:00:00', 'not_replied', 0, 100000133026789),
(114, 508651772524969, 100000784705886, '2013-08-17 13:00:00', 'not_replied', 0, 100000133026789),
(115, 490644227638180, 100000784705886, '2013-08-11 12:00:00', 'not_replied', 0, 100000133026789),
(116, 538088992889393, 100000784705886, '2013-08-11 12:00:00', 'not_replied', 0, 100000133026789),
(117, 174767019347525, 100000784705886, '2013-08-03 11:00:00', 'not_replied', 0, 100000133026789),
(118, 349477211826165, 100000784705886, '2013-07-27 12:00:00', 'not_replied', 0, 100000133026789),
(119, 312083465591202, 100000784705886, '2013-07-24 10:00:00', 'not_replied', 0, 100000133026789),
(120, 479190252155210, 100000784705886, '2013-07-21 13:00:00', 'not_replied', 0, 100000133026789),
(121, 147608038743720, 100000784705886, '2013-07-20 23:00:00', 'not_replied', 0, 100000133026789),
(122, 568673079832494, 100000784705886, '2013-07-20 12:00:00', 'not_replied', 0, 100000133026789),
(123, 483959758350074, 100000784705886, '2013-07-20 00:00:00', 'not_replied', 0, 100000133026789),
(124, 459092767504598, 100000784705886, '2013-07-13 15:00:00', 'not_replied', 0, 100000133026789),
(125, 360553170728320, 100000784705886, '2013-07-13 14:45:00', 'not_replied', 0, 100000133026789),
(126, 200740896724632, 100000784705886, '2013-07-13 12:00:00', 'not_replied', 0, 100000133026789),
(127, 619125104772255, 100000784705886, '2013-07-12 23:30:00', 'not_replied', 0, 100000133026789),
(128, 473466906061250, 100000784705886, '2013-07-06 16:00:00', 'not_replied', 0, 100000133026789),
(129, 576590669028918, 100000784705886, '2013-07-05 23:00:00', 'not_replied', 0, 100000133026789),
(130, 266740280135847, 100000784705886, '2013-07-05 19:00:00', 'not_replied', 0, 100000133026789),
(131, 146447315544495, 100000784705886, '2013-07-05 17:00:00', 'not_replied', 0, 100000133026789),
(132, 554336451264407, 100000784705886, '2013-07-05 16:00:00', 'not_replied', 0, 100000133026789),
(133, 529984397062487, 100000784705886, '2013-07-04 22:00:00', 'not_replied', 0, 100000133026789),
(134, 275904735864786, 100000784705886, '2013-06-29 13:00:00', 'not_replied', 0, 100000133026789),
(135, 148135728702897, 100000784705886, '2013-06-28 23:00:00', 'not_replied', 0, 100000133026789),
(136, 246462652162462, 100000784705886, '2013-06-28 23:00:00', 'not_replied', 0, 100000133026789),
(137, 466335270111454, 100000784705886, '2013-06-27 22:00:00', 'not_replied', 0, 100000133026789),
(138, 141494636038527, 100000784705886, '2013-06-22 22:00:00', 'not_replied', 0, 100000133026789),
(139, 338704192914558, 100000784705886, '2013-06-22 20:00:00', 'not_replied', 0, 100000133026789),
(140, 580564598641949, 100000895943808, '2013-06-30 14:00:00', 'not_replied', 0, 100000133026789),
(141, 226714930796222, 100000916782755, '2013-08-10 12:00:00', 'not_replied', 0, 100000133026789),
(142, 326028017527684, 100000932959942, '2013-06-28 23:00:00', 'not_replied', 0, 100000133026789),
(143, 281261442007454, 100000947963126, '2022-02-02 00:00:00', 'not_replied', 0, 100000133026789),
(144, 222146324586659, 100000947963126, '2014-02-15 16:30:00', 'not_replied', 0, 100000133026789),
(145, 466335270111454, 100000947963126, '2013-06-27 22:00:00', 'not_replied', 0, 100000133026789),
(146, 497209823663853, 100000994730080, '2014-04-26 10:00:00', 'not_replied', 0, 100000133026789),
(147, 421453201275805, 100000994730080, '2013-06-22 21:00:00', 'not_replied', 0, 100000133026789),
(148, 180114918815818, 100001002380579, '2013-06-29 14:00:00', 'not_replied', 0, 100000133026789),
(149, 579069608799955, 100001061084900, '2013-07-04 20:00:00', 'not_replied', 0, 100000133026789),
(150, 129728997223702, 100001291589209, '2013-07-06 15:00:00', 'not_replied', 0, 100000133026789),
(151, 514750975207598, 100001291589209, '2013-06-29 18:00:00', 'not_replied', 0, 100000133026789),
(152, 157770024293446, 100001655463133, '2037-04-10 21:00:00', 'not_replied', 0, 100000133026789),
(153, 518285034869802, 100001821844459, '2013-10-04 20:00:00', 'not_replied', 0, 100000133026789),
(154, 605856282772095, 100001821844459, '2013-10-04 14:00:00', 'not_replied', 0, 100000133026789),
(155, 425059604268188, 100001821844459, '2013-07-05 21:00:00', 'not_replied', 0, 100000133026789),
(156, 190761954415107, 100001821844459, '2013-06-22 21:00:00', 'not_replied', 0, 100000133026789),
(157, 557229537653214, 100001821844459, '2013-06-22 21:00:00', 'not_replied', 0, 100000133026789),
(158, 523079621073389, 100001821844459, '2013-06-22 09:00:00', 'not_replied', 0, 100000133026789),
(159, 676055355744812, 100001821844459, '2013-06-22 10:15:00', 'not_replied', 0, 100000133026789),
(160, 411257078990589, 100001821844459, '2013-06-22 09:00:00', 'not_replied', 0, 100000133026789),
(161, 132838030230096, 100001880131290, '2013-06-28 19:00:00', 'not_replied', 0, 100000133026789),
(162, 298348876967241, 100001942067757, '2013-06-30 12:00:00', 'not_replied', 0, 100000133026789),
(163, 534059363296012, 100001942067757, '2013-06-22 13:30:00', 'not_replied', 0, 100000133026789),
(164, 497209823663853, 100002115300972, '2014-04-26 10:00:00', 'not_replied', 0, 100000133026789),
(165, 141494636038527, 100002115300972, '2013-06-22 22:00:00', 'not_replied', 0, 100000133026789),
(166, 183204218508169, 100002115300972, '2013-06-22 22:00:00', 'not_replied', 0, 100000133026789),
(167, 260312494109590, 100002115300972, '2013-06-22 11:00:00', 'not_replied', 0, 100000133026789),
(168, 581520571869858, 100002700533947, '2013-06-30 14:30:00', 'not_replied', 0, 100000133026789),
(169, 345354912241036, 100003176211389, '2013-06-22 20:00:00', 'not_replied', 0, 100000133026789),
(170, 497209823663853, 100003927128191, '2014-04-26 10:00:00', 'not_replied', 0, 100000133026789),
(171, 533846396653801, 100003964869832, '2013-07-06 14:00:00', 'not_replied', 0, 100000133026789),
(172, 148135728702897, 100003964869832, '2013-06-28 23:00:00', 'not_replied', 0, 100000133026789),
(173, 478037648912160, 100003964869832, '2013-06-28 23:00:00', 'not_replied', 0, 100000133026789);

-- --------------------------------------------------------

--
-- Table structure for table `fbuser`
--

CREATE TABLE IF NOT EXISTS `fbuser` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `uid` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `pic_square` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `friend_count` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `locale` varchar(255) NOT NULL,
  `profile_url` varchar(255) NOT NULL,
  `last_update` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid` (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `fbuser`
--

INSERT INTO `fbuser` (`id`, `uid`, `name`, `first_name`, `middle_name`, `last_name`, `pic_square`, `sex`, `username`, `friend_count`, `city`, `state`, `country`, `locale`, `profile_url`, `last_update`) VALUES
(1, 100000133026789, 'Nico Kooijman', 'Nico', '', 'Kooijman', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/173355_100000133026789_1887824983_q.jpg', 'male', 'nico.kooijman', 63, '', '', '', 'nl_NL', 'http://www.facebook.com/nico.kooijman', '0000-00-00 00:00:00'),
(2, 545124893, 'Linda Dickhaut', 'Linda', '', 'Dickhaut', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/370656_545124893_1227103639_q.jpg', 'female', 'linda.dickhaut', 423, '', '', '', 'nl_NL', 'http://www.facebook.com/linda.dickhaut', '0000-00-00 00:00:00'),
(3, 603381430, 'Michael Versluis', 'Michael', '', 'Versluis', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/70210_603381430_299737714_q.jpg', 'male', 'mversluis', 436, '', '', '', 'en_GB', 'http://www.facebook.com/mversluis', '0000-00-00 00:00:00'),
(4, 622208938, 'Ivar Van Duuren', 'Ivar', 'Van', 'Duuren', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/41542_622208938_494807145_q.jpg', 'male', 'ivar.van.duuren', 97, '', '', '', 'nl_NL', 'http://www.facebook.com/ivar.van.duuren', '0000-00-00 00:00:00'),
(5, 652322342, 'Rick Gal', 'Rick', '', 'Gal', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn2/274852_652322342_3173571_q.jpg', 'male', 'rick.gal.5', 553, '', '', '', 'nl_NL', 'http://www.facebook.com/rick.gal.5', '0000-00-00 00:00:00'),
(6, 672540990, 'Ewoud Veldhuisen', 'Ewoud', '', 'Veldhuisen', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/157126_672540990_698211069_q.jpg', 'male', 'ewoud.veldhuisen', 457, '', '', '', 'nl_NL', 'http://www.facebook.com/ewoud.veldhuisen', '0000-00-00 00:00:00'),
(7, 704537558, 'Iris Kooijman', 'Iris', '', 'Kooijman', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/624015_704537558_928366692_q.jpg', 'female', 'iris.kooijman.52', 202, '', '', '', 'nl_NL', 'http://www.facebook.com/iris.kooijman.52', '0000-00-00 00:00:00'),
(8, 723188574, 'Josine Reijnhoudt', 'Josine', '', 'Reijnhoudt', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/572699_723188574_878477005_q.jpg', 'female', 'josine.reijnhoudt', 114, '', '', '', 'nl_NL', 'http://www.facebook.com/josine.reijnhoudt', '0000-00-00 00:00:00'),
(9, 810208957, 'Frank Reijn', 'Frank', '', 'Reijn', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/48979_810208957_4487_q.jpg', 'male', 'freijn', 196, '', '', '', 'nl_NL', 'http://www.facebook.com/freijn', '0000-00-00 00:00:00'),
(10, 1020667507, 'Romy Vriens', 'Romy', '', 'Vriens', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-frc1/275389_1020667507_1988794860_q.jpg', 'female', 'romy.vriens.37', 514, '', '', '', 'nl_NL', 'http://www.facebook.com/romy.vriens.37', '0000-00-00 00:00:00'),
(11, 1043882803, 'Lucia A. DeJongh Clark', 'Lucia', 'A.', 'DeJongh Clark', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/565101_1043882803_1513302595_q.jpg', 'female', 'lucydejonghclark', 301, '', '', '', 'en_GB', 'http://www.facebook.com/lucydejonghclark', '0000-00-00 00:00:00'),
(12, 1131319405, 'Robert Vos', 'Robert', '', 'Vos', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/186179_1131319405_149684078_q.jpg', 'male', 'robert.vos.50', 456, '', '', '', 'nl_NL', 'http://www.facebook.com/robert.vos.50', '0000-00-00 00:00:00'),
(13, 1162928377, 'Menno van Teeseling', 'Menno', '', 'van Teeseling', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/203114_1162928377_521009197_q.jpg', 'male', 'menno.vanteeseling', 255, '', '', '', 'en_US', 'http://www.facebook.com/menno.vanteeseling', '0000-00-00 00:00:00'),
(14, 1196367328, 'Erik Beversen', 'Erik', '', 'Beversen', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/372526_1196367328_1535415645_q.jpg', 'male', 'erik.beversen', 170, '', '', '', 'nl_NL', 'http://www.facebook.com/erik.beversen', '0000-00-00 00:00:00'),
(15, 1301333984, 'Roelke Iedema', 'Roelke', '', 'Iedema', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/41503_1301333984_2649_q.jpg', 'male', 'roelke.iedema', 118, '', '', '', 'nl_NL', 'http://www.facebook.com/roelke.iedema', '0000-00-00 00:00:00'),
(16, 1381291133, 'Janie Kooijman', 'Janie', '', 'Kooijman', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/157345_1381291133_681922752_q.jpg', 'female', 'janie.kooijman', 111, '', '', '', 'nl_NL', 'http://www.facebook.com/janie.kooijman', '0000-00-00 00:00:00'),
(17, 1400486597, 'Lidwina Hakim', 'Lidwina', '', 'Hakim', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/572182_1400486597_1956467087_q.jpg', 'female', 'lidwina.hakim', 136, '', '', '', 'en_US', 'http://www.facebook.com/lidwina.hakim', '0000-00-00 00:00:00'),
(18, 1415111358, 'Onno Dekker', 'Onno', '', 'Dekker', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/369481_1415111358_499907653_q.jpg', 'male', 'onno.dekker.1', 100, '', '', '', 'nl_NL', 'http://www.facebook.com/onno.dekker.1', '0000-00-00 00:00:00'),
(19, 1442062248, 'Rob de Rijk', 'Rob', '', 'de Rijk', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/27368_1442062248_8891_q.jpg', 'male', 'rob.derijk.7', 63, '', '', '', 'nl_NL', 'http://www.facebook.com/rob.derijk.7', '0000-00-00 00:00:00'),
(20, 1673937496, 'Jos Koster', 'Jos', '', 'Koster', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/624207_1673937496_442636324_q.jpg', 'female', 'jos.koster.73', 193, '', '', '', 'nl_NL', 'http://www.facebook.com/jos.koster.73', '0000-00-00 00:00:00'),
(21, 1697385712, 'Monique van Winsen', 'Monique', '', 'van Winsen', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn2/187332_1697385712_3922149_q.jpg', 'female', 'monique.vanwinsen.1', 40, '', '', '', 'nl_NL', 'http://www.facebook.com/monique.vanwinsen.1', '0000-00-00 00:00:00'),
(22, 100000115345058, 'Ans Ter Heide', 'Ans', '', 'Ter Heide', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/41376_100000115345058_1185964731_q.jpg', 'female', 'ans.terheide.7', 107, '', '', '', 'nl_NL', 'http://www.facebook.com/ans.terheide.7', '0000-00-00 00:00:00'),
(23, 100000123056449, 'Oscar De Bos Pavon', 'Oscar', '', 'De Bos Pavon', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/161621_100000123056449_1274281508_q.jpg', 'male', 'odebos', 0, '', '', '', 'en_US', 'http://www.facebook.com/odebos', '0000-00-00 00:00:00'),
(24, 100000129724532, 'Emmelie Dekker', 'Emmelie', '', 'Dekker', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/372250_100000129724532_960486109_q.jpg', 'female', 'emmelie.dekker', 294, '', '', '', 'nl_NL', 'http://www.facebook.com/emmelie.dekker', '0000-00-00 00:00:00'),
(25, 100000130258156, 'Natascha van der Schaaff', 'Natascha', '', 'van der Schaaff', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/372729_100000130258156_608456640_q.jpg', 'female', 'natascha.vanderschaaff', 453, '', '', '', 'nl_NL', 'http://www.facebook.com/natascha.vanderschaaff', '0000-00-00 00:00:00'),
(26, 100000385353864, 'David Groenteman', 'David', '', 'Groenteman', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/573677_100000385353864_1560724383_q.jpg', 'male', 'david.groenteman.16', 0, '', '', '', 'nl_NL', 'http://www.facebook.com/david.groenteman.16', '0000-00-00 00:00:00'),
(27, 100000464484080, 'Laura Vriens', 'Laura', '', 'Vriens', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn2/211948_100000464484080_853758663_q.jpg', 'female', 'laura.vriens.9', 270, '', '', '', 'nl_NL', 'http://www.facebook.com/laura.vriens.9', '0000-00-00 00:00:00'),
(28, 100000481524738, 'Simone van den Bogaard', 'Simone', '', 'van den Bogaard', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/260861_100000481524738_2021646530_q.jpg', 'female', 'simone.vandenbogaard', 384, '', '', '', 'nl_NL', 'http://www.facebook.com/simone.vandenbogaard', '0000-00-00 00:00:00'),
(29, 100000599401683, 'Jan Schouten', 'Jan', '', 'Schouten', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/174148_100000599401683_6914116_q.jpg', 'male', 'jan.schouten.58', 176, '', '', '', 'nl_NL', 'http://www.facebook.com/jan.schouten.58', '0000-00-00 00:00:00'),
(30, 100000705213341, 'Felicia van Harten', 'Felicia', '', 'van Harten', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-frc1/372344_100000705213341_398937840_q.jpg', 'female', 'felicia.vanharten', 123, '', '', '', 'en_US', 'http://www.facebook.com/felicia.vanharten', '0000-00-00 00:00:00'),
(31, 100000771248990, 'Monique van Winsen', 'Monique', '', 'van Winsen', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/186264_100000771248990_25272560_q.jpg', 'female', 'monique.vanwinsen.5', 128, '', '', '', 'nl_NL', 'http://www.facebook.com/monique.vanwinsen.5', '0000-00-00 00:00:00'),
(32, 100000784705886, 'Markus Monnikendam', 'Markus', '', 'Monnikendam', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/623695_100000784705886_1626483718_q.jpg', 'male', 'markus.monnikendam', 715, '', '', '', 'nl_NL', 'http://www.facebook.com/markus.monnikendam', '0000-00-00 00:00:00'),
(33, 100000859661374, 'Matthijs de Vries', 'Matthijs', '', 'de Vries', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/27411_100000859661374_610_q.jpg', 'male', 'matthijs.devries.923', 272, '', '', '', 'nl_NL', 'http://www.facebook.com/matthijs.devries.923', '0000-00-00 00:00:00'),
(34, 100000895943808, 'Patricia van Poeyer', 'Patricia', '', 'van Poeyer', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/186935_100000895943808_1324720925_q.jpg', 'female', 'patricia.vanpoeyer', 142, '', '', '', 'nl_NL', 'http://www.facebook.com/patricia.vanpoeyer', '0000-00-00 00:00:00'),
(35, 100000916782755, 'Duncan Kooijman', 'Duncan', '', 'Kooijman', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/372465_100000916782755_112778831_q.jpg', 'male', 'duncan.kooijman', 140, '', '', '', 'nl_NL', 'http://www.facebook.com/duncan.kooijman', '0000-00-00 00:00:00'),
(36, 100000932959942, 'Sandra van der Linde', 'Sandra', '', 'van der Linde', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/371885_100000932959942_1143941347_q.jpg', 'female', 'Sandraa4218', 785, '', '', '', 'en_GB', 'http://www.facebook.com/Sandraa4218', '0000-00-00 00:00:00'),
(37, 100000947963126, 'Maikel Brand', 'Maikel', '', 'Brand', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/173202_100000947963126_1983323266_q.jpg', 'male', 'maikel.brand.7', 562, '', '', '', 'nl_NL', 'http://www.facebook.com/maikel.brand.7', '0000-00-00 00:00:00'),
(38, 100000994730080, 'Niels Wuthrich', 'Niels', '', 'Wuthrich', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/624033_100000994730080_1814312722_q.jpg', 'male', 'niels.wuthrich', 443, '', '', '', 'nl_NL', 'http://www.facebook.com/niels.wuthrich', '0000-00-00 00:00:00'),
(39, 100001002380579, 'Patricia Steevens', 'Patricia', '', 'Steevens', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/211362_100001002380579_1542018834_q.jpg', 'female', 'patricia.steevens', 279, '', '', '', 'nl_NL', 'http://www.facebook.com/patricia.steevens', '0000-00-00 00:00:00'),
(40, 100001061084900, 'Johnny Bikker', 'Johnny', '', 'Bikker', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/371300_100001061084900_1824663288_q.jpg', 'male', 'Warpjee', 397, '', '', '', 'nl_NL', 'http://www.facebook.com/Warpjee', '0000-00-00 00:00:00'),
(41, 100001103492037, 'Nellie Kooijman', 'Nellie', '', 'Kooijman', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/23222_100001103492037_3459_q.jpg', 'female', 'nellie.kooijman', 128, '', '', '', 'nl_NL', 'http://www.facebook.com/nellie.kooijman', '0000-00-00 00:00:00'),
(42, 100001291589209, 'Jolanda de Rijk', 'Jolanda', '', 'de Rijk', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/49141_100001291589209_1145673_q.jpg', 'female', 'jolanda.derijk', 148, '', '', '', 'nl_NL', 'http://www.facebook.com/jolanda.derijk', '0000-00-00 00:00:00'),
(43, 100001326542032, 'Frits Koppers', 'Frits', '', 'Koppers', 'https://fbcdn-profile-a.akamaihd.net/static-ak/rsrc.php/v2/yo/r/UlIqmHJn-SK.gif', 'male', 'fkoppers', 51, '', '', '', 'nl_NL', 'http://www.facebook.com/fkoppers', '0000-00-00 00:00:00'),
(44, 100001405749767, 'Tom Kooijman', 'Tom', '', 'Kooijman', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/275467_100001405749767_771858705_q.jpg', 'male', 'tom.kooijman', 54, '', '', '', 'nl_NL', 'http://www.facebook.com/tom.kooijman', '0000-00-00 00:00:00'),
(45, 100001426392827, 'Chrissie Kooijman', 'Chrissie', '', 'Kooijman', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/211349_100001426392827_759252945_q.jpg', 'female', 'chrissie.kooijman', 160, '', '', '', 'nl_NL', 'http://www.facebook.com/chrissie.kooijman', '0000-00-00 00:00:00'),
(46, 100001562888016, 'Margreet Heuvelman-Bakker', 'Margreet', '', 'Heuvelman-Bakker', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn2/623504_100001562888016_183720372_q.jpg', 'female', 'margreet.heuvelmanbakker', 434, '', '', '', 'nl_NL', 'http://www.facebook.com/margreet.heuvelmanbakker', '0000-00-00 00:00:00'),
(47, 100001611736594, 'Ilse Schouten', 'Ilse', '', 'Schouten', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/41663_100001611736594_1870026769_q.jpg', 'female', 'ilse.schouten.75', 284, '', '', '', 'nl_NL', 'http://www.facebook.com/ilse.schouten.75', '0000-00-00 00:00:00'),
(48, 100001655463133, 'Peter Gal', 'Peter', '', 'Gal', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/41654_100001655463133_1726723_q.jpg', 'male', 'peter.gal.16', 365, '', '', '', 'nl_NL', 'http://www.facebook.com/peter.gal.16', '0000-00-00 00:00:00'),
(49, 100001813397872, 'Frans Kooijman', 'Frans', '', 'Kooijman', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/49292_100001813397872_97076_q.jpg', 'male', 'frans.kooijman.3', 85, '', '', '', 'nl_NL', 'http://www.facebook.com/frans.kooijman.3', '0000-00-00 00:00:00'),
(50, 100001821844459, 'Bas Kooijman', 'Bas', '', 'Kooijman', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/173823_100001821844459_6460169_q.jpg', 'male', 'bkooijman1', 1225, '', '', '', 'nl_NL', 'http://www.facebook.com/bkooijman1', '0000-00-00 00:00:00'),
(51, 100001880131290, 'Roy Kooijman', 'Roy', '', 'Kooijman', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/157339_100001880131290_3362128_q.jpg', 'male', 'roy.kooijman.7', 250, '', '', '', 'nl_NL', 'http://www.facebook.com/roy.kooijman.7', '0000-00-00 00:00:00'),
(52, 100001942067757, 'Jean-Paul van Zoghel', 'Jean-Paul', '', 'van Zoghel', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/48827_100001942067757_35014744_q.jpg', 'male', 'jeanpaul.vanzoghel', 807, '', '', '', 'nl_NL', 'http://www.facebook.com/jeanpaul.vanzoghel', '0000-00-00 00:00:00'),
(53, 100002115300972, 'De Vijfer', 'De', '', 'Vijfer', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/370976_100002115300972_870833282_q.jpg', '', 'de.vijfer', 337, '', '', '', 'nl_NL', 'http://www.facebook.com/de.vijfer', '0000-00-00 00:00:00'),
(54, 100002232058615, 'Alexandra Barens', 'Alexandra', '', 'Barens', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn2/275686_100002232058615_2194291_q.jpg', 'female', 'alexandra.barens', 158, '', '', '', 'nl_NL', 'http://www.facebook.com/alexandra.barens', '0000-00-00 00:00:00'),
(55, 100002521593745, 'Bas Thijsse', 'Bas', '', 'Thijsse', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/203211_100002521593745_3586664_q.jpg', 'male', 'bas.thijsse', 200, '', '', '', 'nl_NL', 'http://www.facebook.com/bas.thijsse', '0000-00-00 00:00:00'),
(56, 100002700533947, 'Anouk Dobbelsteen', 'Anouk', '', 'Dobbelsteen', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/371049_100002700533947_344981158_q.jpg', 'female', 'anouk.dobbelsteen', 120, '', '', '', 'nl_NL', 'http://www.facebook.com/anouk.dobbelsteen', '0000-00-00 00:00:00'),
(57, 100002903770361, 'Aaron Clark', 'Aaron', '', 'Clark', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn2/276237_100002903770361_2061170710_q.jpg', 'male', 'AaronClark2013', 0, '', '', '', 'en_US', 'http://www.facebook.com/AaronClark2013', '0000-00-00 00:00:00'),
(58, 100002929048769, 'Bert ter Heide', 'Bert', '', 'ter Heide', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-frc1/274997_100002929048769_975218514_q.jpg', 'male', 'bert.terheide', 39, '', '', '', 'nl_NL', 'http://www.facebook.com/bert.terheide', '0000-00-00 00:00:00'),
(59, 100003176211389, 'Theo Kooijman', 'Theo', '', 'Kooijman', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-frc1/371700_100003176211389_884590599_q.jpg', 'male', 'theo.kooijman.94', 149, '', '', '', 'nl_NL', 'http://www.facebook.com/theo.kooijman.94', '0000-00-00 00:00:00'),
(60, 100003214673656, 'Rita De Rijk', 'Rita', '', 'De Rijk', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/372473_100003214673656_988086149_q.jpg', 'female', 'rita.derijk.7', 64, '', '', '', 'nl_NL', 'http://www.facebook.com/rita.derijk.7', '0000-00-00 00:00:00'),
(61, 100003313119657, 'Jos Kooijman', 'Jos', '', 'Kooijman', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-frc1/372317_100003313119657_9203448_q.jpg', 'female', 'jos.kooijman.5', 14, '', '', '', 'nl_NL', 'http://www.facebook.com/jos.kooijman.5', '0000-00-00 00:00:00'),
(62, 100003908347742, 'Robert Vrolijk', 'Robert', '', 'Vrolijk', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/41427_100003908347742_361882675_q.jpg', 'male', 'robert.vrolijk.98', 33, '', '', '', 'nl_NL', 'http://www.facebook.com/robert.vrolijk.98', '0000-00-00 00:00:00'),
(63, 100003927128191, 'Burnett Senft', 'Burnett', '', 'Senft', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/186901_100003927128191_431935151_q.jpg', 'male', 'burnett.senft', 308, '', '', '', 'nl_NL', 'http://www.facebook.com/burnett.senft', '0000-00-00 00:00:00'),
(64, 100003964869832, 'Nick Terpstra', 'Nick', '', 'Terpstra', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-frc1/370110_100003964869832_18260665_q.jpg', 'male', 'nick.terpstra.77', 229, '', '', '', 'nl_NL', 'http://www.facebook.com/nick.terpstra.77', '0000-00-00 00:00:00');
