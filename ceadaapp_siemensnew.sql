-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2017 at 12:24 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ceadaapp_siemensnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `gallery_image` varchar(150) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `gallery_image`, `status`, `added_on`) VALUES
(15, 'Gallery1', '628112_1.jpg', 1, '2017-07-26 09:21:32'),
(16, 'Gallery2', '997283_last_bit_of_green_513833.jpg', 1, '2017-07-26 09:21:55'),
(17, 'Gallery Test  3', '846313_1.jpg', 1, '2017-07-26 09:22:15');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_image`
--

CREATE TABLE IF NOT EXISTS `gallery_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_id` int(11) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `gallery_image` varchar(500) DEFAULT NULL,
  `added_on` datetime DEFAULT NULL,
  `status` char(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=220 ;

--
-- Dumping data for table `gallery_image`
--

INSERT INTO `gallery_image` (`id`, `gallery_id`, `description`, `gallery_image`, `added_on`, `status`) VALUES
(217, 15, 'Testing for gallery image 1', '812408_rose_reflected_514076.jpg', '2017-07-26 09:22:58', '1'),
(218, 15, 'seccong image for Gallery1', '101135_last_bit_of_green_513833.jpg', '2017-07-26 09:23:50', '1'),
(219, 17, 'Testing for Gallery image 3', '54473_last_bit_of_green_513833.jpg', '2017-07-26 12:21:48', '1');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(150) NOT NULL,
  `newsdate` date DEFAULT NULL,
  `link_name` varchar(225) NOT NULL,
  `newlink` varchar(225) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `heading`, `description`, `image`, `newsdate`, `link_name`, `newlink`, `status`, `added_on`) VALUES
(1, 'My Kishore', '<p>Kishore Da was one of the greatest entertainers of Indian Cinema. Singer, actor, composer, director... he was the perfect artiste that Bollywood could ever have. He left a legacy of immortal tracks which are sung even today. Saregama presents 200 of the best songs of the legendary Kishore Kumar in a carefully crafted premium Music Card.</p>\r\n<p>A readymade playlist for easy listening and gifting, whenever and wherever.</p>', '509368_1.jpg', '0000-00-00', '600', 'my-kishore', -1, '2017-05-23 06:55:45'),
(2, 'Legends', '<p>Hindi Film Music has a long history of evergreen songs and legendary artistes such as Kishore Kumar, Lata Mangeshkar, S.D. Burman, Mohd. Rafi, Asha Bhosle, R.D. Burman, Khayyam and many more. Over the period of many years these songs have left a mark in the minds of the listeners and are hummed even in this day and age. Saregama presents 200 of the best songs of Hindi Film Music in a carefully crafted premium Music Card.</p>\r\n<p>A readymade playlist for easy listening and gifting, whenever and wherever.</p>', '976074_2.jpg', '0000-00-00', '600', 'legends', -1, '2017-05-23 06:57:24'),
(3, 'R.D. Burman', '<p>R.D. Burman or as he was lovingly called, Pancham Da was the king of groove in Indian Cinema. With his revolutionary music, his out of the box musical arrangement and his over the top persona he changed the way songs were composed in Bollywood. Saregama presents 200 of the best songs of the legendary R.D. Burman in a carefully crafted premium Music Card.</p>\r\n							<p>\r\n							A readymade playlist for easy listening and gifting, whenever and wherever.</p>', '18829_3.jpg', '0000-00-00', '600', 'rd-burman', -1, '2017-05-23 06:58:00'),
(4, 'Asha Bhosle', '<p>Asha Bhosle is the true singing diva of Bollywood. Her voice defined a generation of rebels who grooved to her rebellious numbers. Her singing style, even after all these years, remains energetic and full of life. It''s no wonder she had an amazing working relationship with her husband R.D. Burman who was equally dynamic. Saregama presents 200 of the best Asha Bhosle songs in a carefully crafted premium Music Card.</p>\r\n							<p>\r\n							A readymade playlist for easy listening and gifting, whenever and wherever.</p>', '413513_4.jpg', '0000-00-00', '600', 'asha-bhosle', -1, '2017-05-23 06:58:40'),
(5, '', '', '', NULL, '0', '', -1, '2017-06-14 15:52:05'),
(6, '', '', '', NULL, '0', '', -1, '2017-06-19 14:47:50'),
(7, 'jeevan maheshwari', 'testt test sdksjghjkg tets today', '849426_lighthouse.jpg', '2017-06-20', 'jeevan link', 'https://www.google.co.in/?gfe_rd=cr&ei=r9NHWYxshvPwB_qFlZAO', 1, '2017-06-20 07:05:49'),
(8, 'test by jeevan', 'test tets test test test', '312683_desert.jpg', '2017-06-19', 'test link', 'https://www.google.co.in/?gfe_rd=cr&ei=_d5HWeChEMX08weqmYLYDA', 1, '2017-06-19 16:18:05'),
(9, 'cgfhgfbh', 'fghgfhf', '686859_chrysanthemum.jpg', '2017-06-20', 'ghjgh', 'gfhjngjngh', 1, '2017-06-19 17:25:24'),
(10, 'gfhgfh', 'ghjnghjmgjk', '362762_jellyfish.jpg', '2017-06-20', 'gfjgf', 'fghfghgfhj', 1, '2017-06-19 17:25:46'),
(11, 'test new news', 'news section test', '195922_tulips.jpg', '2017-06-20', 'test', 'ttttt', 1, '2017-06-20 07:45:10');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `link_name` varchar(225) NOT NULL,
  `image` varchar(150) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `link_name`, `image`, `status`, `added_on`) VALUES
(9, 'DIGITAL ENTERPRISE', 'Testing for difital enter prize', '', '608764_digital_enterprise.jpg', 1, '2017-07-26 09:27:50'),
(10, 'DIGITIZATION', 'Testing for Digitization', '', '544586_digital_enterprise.jpg', 1, '2017-07-26 09:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `product_doc`
--

CREATE TABLE IF NOT EXISTS `product_doc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `gallery_image` varchar(500) DEFAULT NULL,
  `added_on` datetime DEFAULT NULL,
  `status` char(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=209 ;

--
-- Dumping data for table `product_doc`
--

INSERT INTO `product_doc` (`id`, `product_id`, `description`, `gallery_image`, `added_on`, `status`) VALUES
(207, 9, NULL, '33508_pdf_sample.pdf', '2017-07-26 09:28:41', '1');

-- --------------------------------------------------------

--
-- Table structure for table `product_video`
--

CREATE TABLE IF NOT EXISTS `product_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` tinyint(4) NOT NULL,
  `description` varchar(255) NOT NULL,
  `link_name` varchar(225) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `product_video`
--

INSERT INTO `product_video` (`id`, `product_id`, `description`, `link_name`, `status`, `added_on`) VALUES
(10, 9, '', 'https://www.youtube.com/embed/Dh16Hum_OgQ', 1, '2017-07-26 09:29:35');

-- --------------------------------------------------------

--
-- Table structure for table `raodmap_gallery`
--

CREATE TABLE IF NOT EXISTS `raodmap_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `road_id` int(11) DEFAULT NULL,
  `gallery_image` varchar(500) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `added_on` datetime DEFAULT NULL,
  `status` char(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=196 ;

--
-- Dumping data for table `raodmap_gallery`
--

INSERT INTO `raodmap_gallery` (`id`, `road_id`, `gallery_image`, `position`, `added_on`, `status`) VALUES
(1, 1, '911773_jamshedpur.jpg', 0, '2017-07-04 12:44:46', '1'),
(2, 1, '56945_911773_jamshedpur.jpg', 0, '2017-07-04 12:45:08', '1'),
(3, 1, '970555_banner.jpg', 0, '2017-07-05 18:49:06', '1'),
(4, 2, '610229_banner.jpg', 0, '2017-07-04 12:48:53', '1'),
(5, 3, '954254_banner.jpg', 0, '2017-07-04 12:49:18', '1'),
(6, 4, '937316_banner.jpg', 0, '2017-07-04 12:49:26', '1'),
(7, 5, '888031_banner.jpg', 0, '2017-07-04 12:49:47', '1'),
(8, 6, '375244_banner.jpg', 0, '2017-07-04 12:49:59', '1'),
(9, 7, '153350_banner.jpg', 0, '2017-07-04 12:50:11', '1'),
(10, 8, '201354_banner.jpg', 0, '2017-07-04 12:50:20', '1'),
(11, 9, '980682_banner.jpg', 0, '2017-07-04 12:50:30', '1'),
(12, 10, '536743_banner.jpg', 0, '2017-07-04 12:50:40', '1'),
(13, 11, '969724_banner.jpg', 0, '2017-07-05 18:54:40', '1'),
(14, 12, '401785_banner.jpg', 0, '2017-07-05 18:57:21', '1'),
(15, 13, '52544_banner.jpg', 0, '2017-07-05 19:02:00', '1'),
(16, 14, '549723_banner.jpg', 0, '2017-07-05 19:02:58', '1'),
(17, 15, '354147_banner.jpg', 0, '2017-07-05 19:04:25', '1'),
(18, 16, '783221_banner.jpg', 0, '2017-07-05 19:05:46', '1'),
(19, 17, '665100_banner.jpg', 0, '2017-07-05 19:06:46', '1'),
(20, 18, '386621_banner.jpg', 0, '2017-07-05 19:07:38', '1'),
(21, 19, '731039_banner.jpg', 0, '2017-07-05 19:09:11', '1'),
(22, 20, '298290_banner.jpg', 0, '2017-07-05 19:11:11', '1'),
(23, 21, '392289_banner.jpg', 0, '2017-07-05 19:13:45', '1'),
(24, 22, '38139_banner.jpg', 0, '2017-07-05 19:14:59', '1'),
(25, 23, '921573_banner.jpg', 0, '2017-07-05 19:15:40', '1'),
(26, 24, '833188_banner.jpg', 0, '2017-07-05 19:16:21', '1'),
(27, 25, '289273_banner.jpg', 0, '2017-07-05 19:17:15', '1'),
(28, 26, '166189_banner.jpg', 0, '2017-07-05 19:17:55', '1'),
(29, 27, '485586_banner.jpg', 0, '2017-07-05 19:18:34', '1'),
(30, 28, '299562_banner.jpg', 0, '2017-07-05 19:19:12', '1'),
(31, 29, '876021_banner.jpg', 0, '2017-07-05 19:19:49', '1'),
(32, 30, '320912_banner.jpg', 0, '2017-07-05 19:20:28', '1'),
(33, 31, '799000_banner.jpg', 0, '2017-07-05 19:21:07', '1'),
(34, 32, '416512_banner.jpg', 0, '2017-07-05 19:23:27', '1'),
(35, 33, '830758_banner.jpg', 0, '2017-07-05 19:24:32', '1'),
(36, 34, '392865_banner.jpg', 0, '2017-07-05 19:25:34', '1'),
(37, 35, '624534_banner.jpg', 0, '2017-07-05 19:27:21', '1'),
(38, 36, '569746_banner.jpg', 0, '2017-07-05 19:28:05', '1'),
(39, 37, '722742_banner.jpg', 0, '2017-07-05 19:30:09', '1'),
(40, 38, '121766_banner.jpg', 0, '2017-07-05 19:30:51', '1'),
(41, 39, '402367_banner.jpg', 0, '2017-07-05 19:31:37', '1'),
(42, 40, '431802_banner.jpg', 0, '2017-07-05 19:32:31', '1'),
(43, 41, '328247_banner.jpg', 0, '2017-07-05 19:33:47', '1'),
(44, 42, '551352_banner.jpg', 0, '2017-07-05 19:34:35', '1'),
(45, 43, '499496_banner.jpg', 0, '2017-07-05 19:35:18', '1'),
(46, 44, '485127_banner.jpg', 0, '2017-07-05 19:36:02', '1'),
(47, 45, '594805_banner.jpg', 0, '2017-07-05 19:36:57', '1'),
(48, 46, '169860_banner.jpg', 0, '2017-07-05 19:37:34', '1'),
(49, 47, '359888_banner.jpg', 0, '2017-07-05 19:40:19', '1'),
(50, 48, '677806_banner.jpg', 0, '2017-07-05 19:41:15', '1'),
(51, 49, '779879_banner.jpg', 0, '2017-07-05 19:42:21', '1'),
(52, 50, '903650_banner.jpg', 0, '2017-07-05 19:43:57', '1'),
(53, 51, '326049_banner.jpg', 0, '2017-07-05 19:44:48', '1'),
(54, 52, '775877_banner.jpg', 0, '2017-07-05 19:45:30', '1'),
(55, 53, '304604_banner.jpg', 0, '2017-07-05 19:46:22', '1'),
(56, 54, '712758_banner.jpg', 0, '2017-07-05 19:47:06', '1'),
(57, 55, '642921_banner.jpg', 0, '2017-07-05 19:47:49', '1'),
(58, 56, '278747_banner.jpg', 0, '2017-07-05 19:48:32', '1'),
(59, 57, '560854_banner.jpg', 0, '2017-07-05 19:49:25', '1'),
(60, 58, '705769_banner.jpg', 0, '2017-07-05 19:50:03', '1'),
(61, 59, '392804_banner.jpg', 0, '2017-07-05 19:50:43', '1'),
(62, 60, '739763_banner.jpg', 0, '2017-07-05 19:51:34', '1'),
(63, 61, '902185_banner.jpg', 0, '2017-07-05 19:52:16', '1'),
(64, 62, '881361_banner.jpg', 0, '2017-07-05 19:53:05', '1'),
(65, 63, '358735_banner.jpg', 0, '2017-07-05 19:54:04', '1'),
(66, 64, '47598_banner.jpg', 0, '2017-07-06 11:41:55', '1'),
(67, 65, '772830_banner.jpg', 0, '2017-07-06 11:42:36', '1'),
(68, 66, '648808_banner.jpg', 0, '2017-07-06 11:44:03', '1'),
(69, 67, '131557_banner.jpg', 0, '2017-07-06 11:45:01', '1'),
(70, 68, '481483_banner.jpg', 0, '2017-07-06 11:45:39', '1'),
(71, 69, '924443_banner.jpg', 0, '2017-07-06 11:46:23', '1'),
(72, 70, '636291_banner.jpg', 0, '2017-07-06 11:48:22', '1'),
(73, 71, '740612_banner.jpg', 0, '2017-07-06 11:50:02', '1'),
(74, 72, '109485_banner.jpg', 0, '2017-07-06 11:51:05', '1'),
(75, 73, '721097_banner.jpg', 0, '2017-07-06 11:54:16', '1'),
(76, 74, '698339_banner.jpg', 0, '2017-07-06 11:55:06', '1'),
(77, 75, '241725_banner.jpg', 0, '2017-07-06 11:56:02', '1'),
(78, 76, '786097_banner.jpg', 0, '2017-07-06 11:57:42', '1'),
(79, 77, '633591_banner.jpg', 0, '2017-07-06 11:59:20', '1'),
(80, 78, '849667_banner.jpg', 0, '2017-07-06 12:00:04', '1'),
(81, 79, '178601_banner.jpg', 0, '2017-07-06 12:00:42', '1'),
(82, 80, '86727_banner.jpg', 0, '2017-07-06 12:01:23', '1'),
(83, 81, '946253_banner.jpg', 0, '2017-07-06 12:13:03', '1'),
(84, 82, '228046_banner.jpg', 0, '2017-07-06 12:02:59', '1'),
(85, 83, '127291_banner.jpg', 0, '2017-07-06 12:03:40', '1'),
(86, 84, '545253_banner.jpg', 0, '2017-07-06 12:04:26', '1'),
(87, 85, '693551_banner.jpg', 0, '2017-07-06 12:05:09', '1'),
(88, 86, '242895_banner.jpg', 0, '2017-07-06 12:07:18', '1'),
(89, 87, '462142_banner.jpg', 0, '2017-07-06 12:09:51', '1'),
(90, 88, '185304_banner.jpg', 0, '2017-07-06 12:10:48', '1'),
(91, 89, '276331_banner.jpg', 0, '2017-07-06 12:14:57', '1'),
(92, 90, '193244_banner.jpg', 0, '2017-07-06 12:15:48', '1'),
(93, 91, '331393_banner.jpg', 0, '2017-07-06 12:18:04', '1'),
(94, 92, '232426_banner.jpg', 0, '2017-07-06 12:18:50', '1'),
(95, 93, '743000_banner.jpg', 0, '2017-07-06 12:21:46', '1'),
(96, 94, '263485_banner.jpg', 0, '2017-07-06 12:22:49', '1'),
(97, 95, '9141_banner.jpg', 0, '2017-07-06 12:25:39', '1'),
(98, 96, '553645_banner.jpg', 0, '2017-07-06 12:26:56', '1'),
(99, 97, '211599_banner.jpg', 0, '2017-07-06 12:28:41', '1'),
(100, 98, '594047_banner.jpg', 0, '2017-07-06 12:30:29', '1'),
(101, 99, '5155_banner.jpg', 0, '2017-07-06 12:31:31', '1'),
(102, 100, '130258_banner.jpg', 0, '2017-07-06 12:33:02', '1'),
(103, 101, '8263_banner.jpg', 0, '2017-07-06 12:34:26', '1'),
(104, 102, '457084_banner.jpg', 0, '2017-07-06 12:36:09', '1'),
(105, 103, '253123_banner.jpg', 0, '2017-07-06 12:36:59', '1'),
(106, 104, '983670_banner.jpg', 0, '2017-07-06 12:38:09', '1'),
(107, 105, '565296_banner.jpg', 0, '2017-07-06 12:38:49', '1'),
(108, 106, '925409_banner.jpg', 0, '2017-07-06 12:40:30', '1'),
(109, 107, '106948_banner.jpg', 0, '2017-07-06 12:41:13', '1'),
(110, 108, '281280_banner.jpg', 0, '2017-07-06 12:43:13', '1'),
(111, 109, '269231_banner.jpg', 0, '2017-07-06 12:44:29', '1'),
(112, 110, '787043_banner.jpg', 0, '2017-07-06 12:45:16', '1'),
(113, 111, '96796_banner.jpg', 0, '2017-07-06 12:45:59', '1'),
(114, 112, '570869_banner.jpg', 0, '2017-07-06 12:46:43', '1'),
(115, 113, '683093_banner.jpg', 0, '2017-07-06 12:47:30', '1'),
(116, 114, '674113_banner.jpg', 0, '2017-07-06 12:49:30', '1'),
(117, 115, '113951_banner.jpg', 0, '2017-07-06 12:51:04', '1'),
(118, 116, '623027_banner.jpg', 0, '2017-07-06 12:51:56', '1'),
(119, 117, '646437_banner.jpg', 0, '2017-07-06 12:53:26', '1'),
(120, 118, '685960_banner.jpg', 0, '2017-07-06 12:54:48', '1'),
(121, 119, '811776_banner.jpg', 0, '2017-07-06 12:55:36', '1'),
(122, 120, '524636_banner.jpg', 0, '2017-07-06 12:56:17', '1'),
(123, 121, '435352_banner.jpg', 0, '2017-07-06 12:57:45', '1'),
(124, 122, '215578_banner.jpg', 0, '2017-07-06 12:58:22', '1'),
(125, 123, '438059_banner.jpg', 0, '2017-07-06 12:59:11', '1'),
(126, 124, '790675_banner.jpg', 0, '2017-07-06 13:00:29', '1'),
(127, 125, '608059_banner.jpg', 0, '2017-07-06 13:10:31', '1'),
(128, 126, '376789_banner.jpg', 0, '2017-07-06 13:13:28', '1'),
(129, 127, '615633_banner.jpg', 0, '2017-07-06 13:16:06', '1'),
(130, 128, '885051_banner.jpg', 0, '2017-07-06 14:40:57', '1'),
(131, 129, '176298_banner.jpg', 0, '2017-07-06 14:41:38', '1'),
(132, 130, '696948_banner.jpg', 0, '2017-07-06 14:42:26', '1'),
(133, 131, '897442_banner.jpg', 0, '2017-07-06 14:43:00', '1'),
(134, 132, '754952_banner.jpg', 0, '2017-07-06 14:43:54', '1'),
(135, 133, '894356_banner.jpg', 0, '2017-07-06 14:44:39', '1'),
(136, 134, '844529_banner.jpg', 0, '2017-07-06 14:45:19', '1'),
(137, 135, '397317_banner.jpg', 0, '2017-07-06 14:47:31', '1'),
(138, 136, '581942_banner.jpg', 0, '2017-07-06 14:48:15', '1'),
(139, 137, '512690_banner.jpg', 0, '2017-07-06 14:48:56', '1'),
(140, 138, '765164_banner.jpg', 0, '2017-07-06 14:50:00', '1'),
(141, 139, '616156_banner.jpg', 0, '2017-07-06 14:51:11', '1'),
(142, 140, '819528_banner.jpg', 0, '2017-07-06 14:53:05', '1'),
(143, 141, '140069_banner.jpg', 0, '2017-07-06 14:58:52', '1'),
(144, 142, '964201_banner.jpg', 0, '2017-07-06 15:05:47', '1'),
(145, 143, '331477_banner.jpg', 0, '2017-07-06 15:06:29', '1'),
(146, 144, '443043_banner.jpg', 0, '2017-07-06 15:15:43', '1'),
(147, 145, '311500_banner.jpg', 0, '2017-07-06 15:16:20', '1'),
(148, 146, '839383_banner.jpg', 0, '2017-07-06 15:17:47', '1'),
(149, 147, '217989_banner.jpg', 0, '2017-07-06 15:18:37', '1'),
(150, 148, '589115_banner.jpg', 0, '2017-07-06 15:19:20', '1'),
(151, 149, '582439_banner.jpg', 0, '2017-07-06 15:19:59', '1'),
(152, 150, '620387_banner.jpg', 0, '2017-07-06 15:28:31', '1'),
(153, 151, '547372_banner.jpg', 0, '2017-07-06 15:29:18', '1'),
(154, 152, '212932_banner.jpg', 0, '2017-07-06 15:30:14', '1'),
(155, 153, '29449_banner.jpg', 0, '2017-07-06 15:32:24', '1'),
(156, 154, '28843_banner.jpg', 0, '2017-07-06 15:33:20', '1'),
(157, 155, '288097_banner.jpg', 0, '2017-07-06 15:34:02', '1'),
(158, 156, '35121_banner.jpg', 0, '2017-07-06 15:34:47', '1'),
(159, 157, '786590_banner.jpg', 0, '2017-07-06 15:35:48', '1'),
(160, 158, '66426_banner.jpg', 0, '2017-07-06 15:37:20', '1'),
(161, 159, '372981_banner.jpg', 0, '2017-07-06 15:38:01', '1'),
(162, 160, '95316_banner.jpg', 0, '2017-07-06 15:38:41', '1'),
(163, 161, '884579_banner.jpg', 0, '2017-07-06 15:39:22', '1'),
(164, 162, '95295_banner.jpg', 0, '2017-07-06 15:46:33', '1'),
(165, 163, '621872_banner.jpg', 0, '2017-07-06 15:47:41', '1'),
(166, 164, '727707_banner.jpg', 0, '2017-07-06 15:50:28', '1'),
(167, 165, '570666_banner.jpg', 0, '2017-07-06 15:51:13', '1'),
(168, 166, '566812_banner.jpg', 0, '2017-07-06 15:52:45', '1'),
(169, 167, '379928_banner.jpg', 0, '2017-07-06 15:54:43', '1'),
(170, 168, '429710_banner.jpg', 0, '2017-07-06 15:57:36', '1'),
(171, 169, '347819_banner.jpg', 0, '2017-07-06 15:58:45', '1'),
(172, 170, '716852_banner.jpg', 0, '2017-07-06 16:02:27', '1'),
(173, 171, '248869_banner.jpg', 0, '2017-07-06 16:03:03', '1'),
(174, 172, '917082_banner.jpg', 0, '2017-07-06 16:03:57', '1'),
(175, 173, '538429_banner.jpg', 0, '2017-07-06 16:05:10', '1'),
(176, 174, '785953_banner.jpg', 0, '2017-07-06 16:06:10', '1'),
(177, 175, '481491_banner.jpg', 0, '2017-07-06 16:07:28', '1'),
(178, 176, '584070_banner.jpg', 0, '2017-07-06 16:41:06', '1'),
(179, 177, '551055_banner.jpg', 0, '2017-07-06 16:42:00', '1'),
(180, 178, '73387_banner.jpg', 0, '2017-07-06 16:43:01', '1'),
(181, 179, '301248_banner.jpg', 0, '2017-07-06 16:43:39', '1'),
(182, 180, '416179_banner.jpg', 0, '2017-07-06 16:44:22', '1'),
(183, 181, '549862_banner.jpg', 0, '2017-07-06 16:45:18', '1'),
(184, 182, '910513_banner.jpg', 0, '2017-07-06 16:49:52', '1'),
(185, 183, '150943_banner.jpg', 0, '2017-07-06 16:57:37', '1'),
(186, 184, '461247_banner.jpg', 0, '2017-07-06 17:01:14', '1'),
(187, 185, '787605_banner.jpg', 0, '2017-07-06 17:05:13', '1'),
(188, 186, '202093_banner.jpg', 0, '2017-07-06 17:07:34', '1'),
(189, 187, '145553_banner.jpg', 0, '2017-07-06 17:10:47', '1'),
(190, 188, '121248_banner.jpg', 0, '2017-07-06 17:51:57', '1'),
(191, 189, '572707_banner.jpg', 0, '2017-07-06 17:52:58', '1'),
(192, 190, '827405_banner.jpg', 0, '2017-07-06 17:54:08', '1'),
(193, 191, '31097_banner.jpg', 0, '2017-07-06 18:00:48', '1'),
(194, 192, '84262_banner.jpg', 0, '2017-07-06 18:06:46', '1'),
(195, 193, '380021_banner.jpg', 0, '2017-07-06 18:07:46', '1');

-- --------------------------------------------------------

--
-- Table structure for table `roadmap`
--

CREATE TABLE IF NOT EXISTS `roadmap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `heading` varchar(225) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=194 ;

--
-- Dumping data for table `roadmap`
--

INSERT INTO `roadmap` (`id`, `name`, `description`, `heading`, `status`, `added_on`) VALUES
(1, 'AIROLI', '<h4>City: AIROLI</h4>\r\n<h4>District: Mumbai</h4>\r\n<h4>State: Maharashtra</h4>', '6<sup>th</sup> Mar 2018', 1, '2017-07-04 12:08:58'),
(2, 'AJMER', '<h4>City: AJMER</h4>\r\n<h4>District: Ajmer</h4>\r\n<h4>State: Rajasthan</h4>', '28<sup>th</sup> Aug 2018', 1, '2017-07-04 12:12:43'),
(3, 'ALWAR', '<h4>City: ALWAR</h4>\r\n<h4>District: Alwar</h4>\r\n<h4>State: Rajasthan</h4>', '3<sup>rd</sup> Sep 2018', 1, '2017-07-04 12:14:04'),
(4, 'AMBAD (Ambadi)', '<h4>City: AMBAD (Ambadi)</h4>\r\n<h4>District: Jalna</h4>\r\n<h4>State: Maharashtra</h4>', '19<sup>th</sup> Mar 2018', 1, '2017-07-04 12:15:26'),
(5, 'AMBALA', '<h4>City: AMBALA</h4>\r\n<h4>District: Ambala</h4>\r\n<h4>State: Haryana</h4>', '27<sup>th</sup>,28<sup>th</sup>,29<sup>th</sup> Sep 2018', 1, '2017-07-04 12:18:26'),
(6, 'AMBERNATH', '<h4>City: AMBERNATH</h4>\r\n<h4>District: Mumbai</h4>\r\n<h4>State: Maharashtra</h4>', '26<sup>th</sup>,27<sup>th</sup> Feb 2018', 1, '2017-07-04 12:20:17'),
(7, 'AMRITSAR', '<h4>City: AMRITSAR</h4>\r\n<h4>District: Amritsar</h4>\r\n<h4>State: Punjab</h4>', '25<sup>th</sup>,26<sup>th</sup>,27<sup>th</sup> Oct 2018', 1, '2017-07-04 12:26:05'),
(8, 'ANAND', '<h4>City: ANAND</h4>\r\n<h4>District: Anand</h4>\r\n<h4>State: Gujarat</h4>', '12<sup>th</sup> Jun 2018', 1, '2017-07-04 12:28:53'),
(9, 'ANGUL', '<h4>City: ANGUL</h4>\r\n<h4>District: ANGUL</h4>\r\n<h4>State: Orissa</h4>', '28<sup>th</sup>,30<sup>th</sup> Oct 2017', 1, '2017-07-04 12:40:09'),
(10, 'ANJAR', '<h4>City: ANJAR</h4>\r\n<h4>District: Kachchh</h4>\r\n<h4>State: Gujarat</h4>', '3<sup>rd</sup> Aug 2018', 1, '2017-07-05 10:55:16'),
(11, 'Anklesvar', '<h4>City: Anklesvar</h4>\r\n<h4>District: Bharuch</h4>\r\n<h4>State: Gujarat</h4>', '21<sup>st</sup>,22<sup>nd</sup>,23<sup>rd</sup> May 2017', 1, '2017-07-05 18:53:39'),
(12, 'ASANSOL', '<h4>City: ASANSOL</h4>\r\n<h4>District: Barddhaman</h4>\r\n<h4>State: West Bengal</h4>', '13<sup>th</sup> Sep 2017', 1, '2017-07-05 18:56:47'),
(13, 'BADDI', '<h4>City: BADDI</h4>\r\n<h4>District: Solan</h4>\r\n<h4>State: Himachal Pradesh</h4>', '15<sup>th</sup>,16<sup>th</sup>,17<sup>th</sup> Nov 2018', 1, '2017-07-05 19:02:19'),
(14, 'BAHADURGARH', '<h4>City: BAHADURGARH</h4>\r\n<h4>District: Jhajjar</h4>\r\n<h4>State: Haryana</h4>', '10<sup>th</sup> Sep 2018', 1, '2017-07-05 19:02:46'),
(15, 'BAKHTIARPUR', '<h4>City: BAKHTIARPUR</h4>\r\n<h4>District: Patna</h4>\r\n<h4>State: Bihar</h4>', '1<sup>st</sup>,4<sup>th</sup> Sep 2017', 1, '2017-07-05 19:04:14'),
(16, 'BALASORE', '<h4>City: BALASORE</h4>\r\n<h4>District: Baleshwar</h4>\r\n<h4>State: Orissa</h4>', '10<sup>th</sup>,11<sup>th</sup>,12<sup>th</sup> Oct 2017', 1, '2017-07-05 19:05:33'),
(17, 'BALCO', '<h4>City: BALCO</h4>\r\n<h4>District: Korba</h4>\r\n<h4>State: Chhattisgarh</h4>', '11<sup>th</sup>,13<sup>th</sup> Nov 2017', 1, '2017-07-05 19:06:33'),
(18, 'Ballabgarh', '<h4>City: Ballabgarh</h4>\r\n<h4>District: FARIDABAD</h4>\r\n<h4>State: Haryana</h4>', '5<sup>th</sup> Sep 2018', 1, '2017-07-05 19:07:14'),
(19, 'BANDRA', '<h4>City: BANDRA</h4>\r\n<h4>District: North Twenty Four Parganas</h4>\r\n<h4>State: West Bengal</h4>', '14<sup>th</sup> Sep 2017', 1, '2017-07-05 19:08:57'),
(20, 'BANGALORE', '<h4>City: BANGALORE</h4>\r\n<h4>District: Bangalore</h4>\r\n<h4>State: Karnataka</h4>', '10<sup>th</sup> Jan 2018', 1, '2017-07-05 19:10:58'),
(21, 'Barsana', '<h4>City: Barsana</h4>\r\n<h4>District: Mathura</h4>\r\n<h4>State: Uttar Pradesh</h4>', '1<sup>st</sup> Aug 2017', 1, '2017-07-05 19:13:25'),
(22, 'BATALA', '<h4>City: BATALA</h4>\r\n<h4>District: Gurdaspur</h4>\r\n<h4>State: Punjab</h4>', '29<sup>th</sup>,30<sup>th</sup>,31<sup>st</sup> Oct 2018', 1, '2017-07-05 19:14:44'),
(23, 'BELGAUM', '<h4>City: BELGAUM</h4>\r\n<h4>District: Belgaum</h4>\r\n<h4>State: Karnataka</h4>', '20<sup>th</sup> Jan 2018', 1, '2017-07-05 19:15:28'),
(24, 'BHILAI', '<h4>City: BHILAI</h4>\r\n<h4>District: Durg</h4>\r\n<h4>State: Chhattisgarh</h4>', '21<sup>st</sup>,22<sup>nd</sup>,23<sup>rd</sup> Nov 2017', 1, '2017-07-05 19:16:08'),
(25, 'Bhiwadi', '<h4>City: Bhiwadi</h4>\r\n<h4>District: Alwar</h4>\r\n<h4>State: Rajasthan</h4>', '4<sup>th</sup> Sep 2018', 1, '2017-07-05 19:17:02'),
(26, 'BHOPAL', '<h4>City: BHOPAL</h4>\r\n<h4>District: Bhopal</h4>\r\n<h4>State: Madhya Pradesh</h4>', '23<sup>rd</sup> Apr 2018', 1, '2017-07-05 19:17:44'),
(27, 'BHOSARI', '<h4>City: BHOSARI</h4>\r\n<h4>District: Pune </h4>\r\n<h4>State: Maharashtra</h4>', '13<sup>th</sup> Feb 2018', 1, '2017-07-05 19:18:20'),
(28, 'BHUBANESWAR', '<h4>City: BHUBANESWAR</h4>\r\n<h4>District: Khordha </h4>\r\n<h4>State: Orissa</h4>', '25<sup>th</sup> Oct 2017', 1, '2017-07-05 19:18:58'),
(29, 'BILASPUR', '<h4>City: BILASPUR</h4>\r\n<h4>District: B Laspur</h4>\r\n<h4>State: Chhattisgarh</h4>', '16<sup>th</sup>,17<sup>th</sup>,18<sup>th</sup> Nov 2017', 1, '2017-07-05 19:19:34'),
(30, 'BOISAR', '<h4>City: BOISAR</h4>\r\n<h4>District: Thane</h4>\r\n<h4>State: Maharashtra</h4>', '16<sup>th</sup>,17<sup>th</sup> Mar 2018', 1, '2017-07-05 19:20:16'),
(31, 'BOKARO', '<h4>City: BOKARO</h4>\r\n<h4>District: Bokaro</h4>\r\n<h4>State: Jharkhand</h4>', '25<sup>th</sup>,26<sup>th</sup>,27<sup>th</sup> Sep 2017', 1, '2017-07-05 19:20:54'),
(32, 'CHANDIGARH', '<h4>City: CHANDIGARH</h4>\r\n<h4>District: CHANDIGARH </h4>\r\n<h4>State: Punjab</h4>', '11<sup>th</sup> Oct 2018', 1, '2017-07-05 19:23:16'),
(33, 'CHANGODAR', '<h4>City: CHANGODAR</h4>\r\n<h4>District: Ahmedabad</h4>\r\n<h4>State: Gujarat</h4>', '13<sup>th</sup>,14<sup>th</sup>,15<sup>th</sup> Jun 2018', 1, '2017-07-05 19:24:16'),
(34, 'CHHATRAL', '<h4>City: CHHATRAL</h4>\r\n<h4>District: Gandhinagar</h4>\r\n<h4>State: Gujarat</h4>', '5<sup>th</sup>,6<sup>th</sup>,7<sup>th</sup> Jul 2018', 1, '2017-07-05 19:25:02'),
(35, 'CHIKALTHANA', '<h4>City: CHIKALTHANA</h4>\r\n<h4>District: Aurangabad </h4>\r\n<h4>State: Maharashtra</h4>', '28<sup>th</sup> Mar 2018', 1, '2017-07-05 19:27:06'),
(36, 'CHITtAURGARH', '<h4>City: CHITtAURGARH</h4>\r\n<h4>District: Chittaurgarh </h4>\r\n<h4>State: Rajasthan</h4>', '20<sup>th</sup> Aug 2018', 1, '2017-07-05 19:27:52'),
(37, 'COIMBATORE', '<h4>City: COIMBATORE</h4>\r\n<h4>District: Coimbatore</h4>\r\n<h4>State: Tamilnadu</h4>', '27<sup>th</sup>,28<sup>th</sup>,29<sup>th</sup> Dec 2017', 1, '2017-07-05 19:29:51'),
(38, 'CUTTACK', '<h4>City: CUTTACK</h4>\r\n<h4>District: Cuttack</h4>\r\n<h4>State: Orissa</h4>', '23<sup>rd</sup>,24<sup>th</sup> Oct 2017', 1, '2017-07-05 19:30:34'),
(39, 'DAHEJ GIDC', '<h4>City: DAHEJ GIDC</h4>\r\n<h4>District: Bharuch</h4>\r\n<h4>State: Gujarat</h4>', '28<sup>th</sup>,29<sup>th</sup>,30<sup>th</sup> May 2018', 1, '2017-07-05 19:31:23'),
(40, 'DAMAN', '<h4>City: DAMAN</h4>\r\n<h4>District: DAMAN</h4>\r\n<h4>State: Daman & Diu</h4>', '3<sup>rd</sup>,4<sup>th</sup> May 2018', 1, '2017-07-05 19:32:16'),
(41, 'DHANKUNI', '<h4>City: DHANKUNI</h4>\r\n<h4>District: Hugli</h4>\r\n<h4>State: West Bengal</h4>', '18<sup>th</sup> Sep 2017', 1, '2017-07-07 18:22:09'),
(42, 'Dhulian', '<h4>City: Dhulian</h4>\r\n<h4>District: Murshidabad</h4>\r\n<h4>State: West Bengal</h4>', '11<sup>th</sup> Sep 2017', 1, '2017-07-05 19:34:21'),
(43, 'DOLVI', '<h4>City: DOLVI</h4>\r\n<h4>District: Raigarh</h4>\r\n<h4>State: Maharashtra</h4>\r\n', '19<sup>th</sup> Feb 2018', 1, '2017-07-05 19:35:05'),
(44, 'DURGAPUR', '<h4>City: DURGAPUR</h4>\r\n<h4>District: Chandrapur</h4>\r\n<h4>State: Maharashtra</h4>', '26<sup>th</sup> Mar 2018', 1, '2017-07-05 19:35:44'),
(45, 'ENNORE', '<h4>City: ENNORE</h4>\r\n<h4>District: Chennai</h4>\r\n<h4>State: Tamilnadu</h4>', '9<sup>th</sup> Dec 2017', 1, '2017-07-05 19:36:39'),
(46, 'ERODE', '<h4>City: ERODE</h4>\r\n<h4>District: Erode</h4>\r\n<h4>State: Tamilnadu</h4>', '19<sup>th</sup>,20<sup>th</sup> Dec 2017', 1, '2017-07-05 19:37:21'),
(47, 'FARIDABAD', '<h4>City: FARIDABAD</h4>\r\n<h4>District: FARIDABAD</h4>\r\n<h4>State: Haryana</h4>', '6<sup>th</sup>,7<sup>th</sup>,8<sup>th</sup> Sep 2018', 1, '2017-07-05 19:40:06'),
(48, 'FIROZABAD', '\r\n<h4>City: FIROZABAD</h4>\r\n<h4>District: Firozabad</h4>\r\n<h4>State: Uttar Pradesh</h4>', '2<sup>nd</sup> Aug 2017', 1, '2017-07-05 19:41:02'),
(49, 'GAJRAULA', '<h4>City: GAJRAULA</h4>\r\n<h4>District: Jyotiba Phule Nagar</h4>\r\n<h4>State: Uttar Pradesh</h4>', '15<sup>th</sup> Jul 2017', 1, '2017-07-05 19:42:09'),
(50, 'GANDHIDHAM', '<h4>City: GANDHIDHAM</h4>\r\n<h4>District: Kachchh</h4>\r\n<h4>State: Gujarat</h4>', '26<sup>th</sup>,27<sup>th</sup> Jul 2018', 1, '2017-07-05 19:43:43'),
(51, 'GANDHINAGAR', '<h4>City: GANDHINAGAR</h4>\r\n<h4>District: Gandhinagar</h4>\r\n<h4>State: Gujarat</h4>', '2<sup>nd</sup>,3<sup>rd</sup>,4<sup>th</sup> Jul 2018', 1, '2017-07-05 19:44:24'),
(52, 'GHAZIABAD', '<h4>City: GHAZIABAD</h4>\r\n<h4>District: Ghaziabad</h4>\r\n<h4>State: Uttar Pradesh</h4>', '24<sup>th</sup>,25<sup>th</sup>,26<sup>th</sup> Jul 2017', 1, '2017-07-05 19:45:10'),
(53, 'GORAKHPUR', '<h4>City: GORAKHPUR</h4>\r\n<h4>District: Gorakhpur</h4>\r\n<h4>State: Uttar Pradesh</h4>', '17<sup>th</sup>,18<sup>th</sup> Aug 2017', 1, '2017-07-05 19:46:04'),
(54, 'GOTAN', '<h4>City: GOTAN</h4>\r\n<h4>District: GOTAN</h4>\r\n<h4>State: Rajasthan</h4>', '25<sup>th</sup>,27<sup>th</sup> Aug 2018', 1, '2017-07-05 19:46:51'),
(55, 'GREATER NOIDA', '<h4>City: GREATER NOIDA</h4>\r\n<h4>District: GREATER NOIDA</h4>\r\n<h4>State: Uttar Pradesh</h4>', '27<sup>th</sup> Jul 2017', 1, '2017-07-05 19:47:36'),
(56, 'GUNTUR', '<h4>City: GUNTUR</h4>\r\n<h4>District: Guntur</h4>\r\n<h4>State: Andhra Pradesh</h4>', '4<sup>th</sup> Dec 2017', 1, '2017-07-05 19:48:16'),
(57, 'HALDIA', '<h4>City: HALDIA</h4>\r\n<h4>District: Medinipur</h4>\r\n<h4>State: West Bengal</h4>', '15<sup>th</sup> Sep 2017', 1, '2017-07-05 19:49:12'),
(58, 'HALOL', '<h4>City: HALOL</h4>\r\n<h4>District: Panch Mahals</h4>\r\n<h4>State: Gujarat</h4>', '9<sup>th</sup>,11<sup>th</sup> Jun 2018', 1, '2017-07-05 19:49:49'),
(59, 'HARIDWAR', '<h4>City: HARIDWAR</h4>\r\n<h4>District: Haridwar</h4>\r\n<h4>State: Uttaranchal</h4>', '3<sup>rd</sup>,4<sup>th</sup>,5<sup>th</sup> Jul 2017', 1, '2017-07-05 19:50:27'),
(60, 'HASANPURA', '<h4>City: HASANPURA</h4>\r\n<h4>District: HASANPURA</h4>\r\n<h4>State: Bihar</h4>', '31<sup>st</sup> Aug 2017', 1, '2017-07-05 19:51:20'),
(61, 'HAZIRA', '<h4>City: HAZIRA</h4>\r\n<h4>District: Surat</h4>\r\n<h4>State: Gujarat</h4>', '19<sup>th</sup> May 2018', 1, '2017-07-05 19:52:01'),
(62, 'HISAR', '<h4>City: HISAR</h4>\r\n<h4>District: Hisar</h4>\r\n<h4>State: Haryana</h4>', '12<sup>th</sup>,13<sup>th</sup>,14<sup>th</sup> Sep 2018', 1, '2017-07-05 19:52:47'),
(63, 'HOSHIARPUR', '<h4>City: HOSHIARPUR</h4>\r\n<h4>District: Hoshiarpur</h4>\r\n<h4>State: Punjab</h4>', '1<sup>st</sup>,2<sup>nd</sup>,3<sup>rd</sup> Nov 2018', 1, '2017-07-05 19:53:51'),
(64, 'HOWRAH', '<h4>City: HOWRAH</h4>\r\n<h4>District: HOWRAH</h4>\r\n<h4>State: West Bengal</h4>\r\n', '16<sup>th</sup> Sep 2017', 1, '2017-07-06 11:41:15'),
(65, 'HYDERABAD', '<h4>City: HYDERABAD</h4>\r\n<h4>District: Hyderabad</h4>\r\n<h4>State: Telangana</h4>', '6<sup>th</sup> Dec 2017', 1, '2017-07-06 11:42:22'),
(66, 'ICHALKARANJI', '<h4>City: ICHALKARANJI</h4>\r\n<h4>District: Kolhapur</h4>\r\n<h4>State: Maharashtra</h4>\r\n', '30<sup>th</sup> Jan 2018', 1, '2017-07-06 11:43:47'),
(67, 'INDORE', '<h4>City: INDORE</h4>\r\n<h4>District: Indore</h4>\r\n<h4>State: Madhya Pradesh</h4>', '25<sup>th</sup> Apr 2018', 1, '2017-07-06 11:44:45'),
(68, 'JABALPUR', '<h4>City: JABALPUR</h4>\r\n<h4>District: Jabalpur</h4>\r\n<h4>State: Madhya Pradesh</h4>', '13<sup>th</sup> Apr 2018', 1, '2017-07-06 11:45:26'),
(69, 'JAIPUR', '<h4>City: JAIPUR</h4>\r\n<h4>District: Jaipur</h4>\r\n<h4>State: Rajasthan</h4>', '31<sup>st</sup> Aug 2018', 1, '2017-07-06 11:46:10'),
(70, 'JAJPUR', '<h4>City: JAJPUR</h4>\r\n<h4>District: JAJPUR</h4>\r\n<h4>State: Orissa</h4>', '13<sup>th</sup>,14<sup>th</sup> Oct 2017', 1, '2017-07-06 11:48:06'),
(71, 'JALANDHAR', '<h4>City: JALANDHAR</h4>\r\n<h4>District: Jalandhar</h4>\r\n<h4>State: Punjab</h4>', '22<sup>nd</sup>,23<sup>rd</sup>,24<sup>th</sup> Oct 2018', 1, '2017-07-06 11:48:59'),
(72, 'JALGAON', '<h4>City: JALGAON</h4>\r\n<h4>District: Jalgaon</h4>\r\n<h4>State: Maharashtra</h4>', '31<sup>st</sup> Mar,2<sup>nd</sup> Apr 2018', 1, '2017-07-06 11:50:52'),
(73, 'JAMNAGAR', '<h4>City: JAMNAGAR</h4>\r\n<h4>District: Jamnagar</h4>\r\n<h4>State: Gujarat</h4>', '21<sup>st</sup> Jul 2018', 1, '2017-07-06 11:53:58'),
(74, 'JAMSHEDPUR', '<h4>City: JAMSHEDPUR</h4>\r\n<h4>District: Purbi Singhbhum</h4>\r\n<h4>State: Jharkhand</h4>', '20<sup>th</sup>,21<sup>st</sup>,22<sup>nd</sup> Sep 2017', 1, '2017-07-06 11:54:54'),
(75, 'JHAGADIA', '<h4>City: JHAGADIA</h4>\r\n<h4>District: Bharuch</h4>\r\n<h4>State: Gujarat</h4>', '24<sup>th</sup>,25<sup>th</sup>,26<sup>th</sup> May 2018', 1, '2017-07-06 11:55:45'),
(76, 'Jharsuguda', '<h4>City: Jharsuguda</h4>\r\n<h4>District: Jharsuguda</h4>\r\n<h4>State: Orissa</h4>\r\n', '3<sup>rd</sup>,6<sup>th</sup> Nov 2017', 1, '2017-07-06 11:57:30'),
(77, 'JODHPUR', '<h4>City: JODHPUR</h4>\r\n<h4>District: Jodhpur</h4>\r\n<h4>State: Rajasthan</h4>', '23<sup>rd</sup>,24<sup>th</sup> Aug 2018', 1, '2017-07-06 11:58:59'),
(78, 'KADI', '<h4>City: KADI</h4>\r\n<h4>District: Mahesana</h4>\r\n<h4>State: Gujarat</h4>', '6<sup>th</sup> Aug 2018', 1, '2017-07-06 11:59:51'),
(79, 'KAKINADA', '<h4>City: KAKINADA</h4>\r\n<h4>District: East Godavari</h4>\r\n<h4>State: Andhra Pradesh</h4>', '29<sup>th</sup> Nov 2017', 1, '2017-07-06 12:00:28'),
(80, 'KANDIVALI', '<h4>City: KANDIVALI</h4>\r\n<h4>District: Mumbai</h4>\r\n<h4>State: Maharashtra</h4>', '12<sup>th</sup> Mar 2018', 1, '2017-07-06 12:01:12'),
(81, 'KANDLA', '<h4>City: KANDLA</h4>\r\n<h4>District: Kachchh</h4>\r\n<h4>State: Gujarat</h4>', '28<sup>th</sup>,30<sup>th</sup> Jul 2018', 1, '2017-07-06 12:01:53'),
(82, 'KANPUR', '<h4>City: KANPUR</h4>\r\n<h4>District: Kanpur Nagar</h4>\r\n<h4>State: Uttar Pradesh</h4>', '4<sup>th</sup>,5<sup>th</sup>,8<sup>th</sup> Aug 2017', 1, '2017-07-06 12:02:40'),
(83, 'Karumathampatti', '<h4>City: Karumathampatti</h4>\r\n<h4>District: Coimbatore</h4>\r\n<h4>State: Tamilnadu</h4>', '26<sup>th</sup> Dec 2017', 1, '2017-07-06 12:03:29'),
(84, 'KASHIPUR', '<h4>City: KASHIPUR</h4>\r\n<h4>District: KASHIPUR</h4>\r\n<h4>State: Uttaranchal</h4>', '10<sup>th</sup>,11<sup>th</sup> Jul 2017', 1, '2017-07-06 12:04:13'),
(85, 'KATHWADA', '<h4>City: KATHWADA</h4>\r\n<h4>District: Ahmedabad</h4>\r\n<h4>State: Gujarat</h4>', '27<sup>th</sup>,28<sup>th</sup>,29<sup>th</sup> Jun 2018', 1, '2017-07-06 12:04:56'),
(86, 'KHALILABAD', '<h4>City: KHALILABAD</h4>\r\n<h4>District: Sant Kabir Nagar</h4>\r\n<h4>State: Uttar Pradesh</h4>', '14<sup>th</sup>,16<sup>th</sup> Aug 2017', 1, '2017-07-06 12:07:01'),
(87, 'KHAPOLI', '<h4>City: KHAPOLI</h4>\r\n<h4>District: Raigarh</h4>\r\n<h4>State: Maharashtra</h4>', '15<sup>th</sup>,16<sup>th</sup>,17<sup>th</sup> Feb 2018', 1, '2017-07-06 12:09:33'),
(88, 'KHARAGPUR', '<h4>City: KHARAGPUR</h4>\r\n<h4>District: Munger</h4>\r\n<h4>State: Bihar</h4>', '9<sup>th</sup> Sep 2017', 1, '2017-07-06 12:10:32'),
(89, 'KHORDHA', '<h4>City: KHORDHA</h4>\r\n<h4>District: Khordha</h4>\r\n<h4>State: Orissa</h4>', '27<sup>th</sup> Oct 2017', 1, '2017-07-06 12:14:36'),
(90, 'Kochi', '<h4>City: Kochi</h4>\r\n<h4>District: Ernakulam</h4>\r\n<h4>State: Kerala</h4>', '4<sup>th</sup> Jan 2018', 1, '2017-07-06 12:15:32'),
(91, 'KOLHAPUR', '<h4>City: KOLHAPUR</h4>\r\n<h4>District: Kolhapur</h4>\r\n<h4>State: Maharashtra</h4>', '25<sup>th</sup>,27<sup>th</sup>,29<sup>th</sup> Jan 2018', 1, '2017-07-06 12:17:47'),
(92, 'Korba', '<h4>City: Korba</h4>\r\n<h4>District: Korb</h4>\r\n<h4>State: Chhattisgarh</h4>', '8<sup>th</sup>,9<sup>th</sup>,10<sup>th</sup> Nov 2017', 1, '2017-07-06 12:18:35'),
(93, 'KOTA', '<h4>City: KOTA</h4>\r\n<h4>District: Bilaspur</h4>\r\n<h4>State: Chhattisgarh</h4>', '14<sup>th</sup>,15<sup>th</sup> Nov 2017', 1, '2017-07-06 12:21:18'),
(94, 'KUNDLI', '<h4>City: KUNDLI</h4>\r\n<h4>District: Sonipat</h4>\r\n<h4>State: Haryana</h4>', '18<sup>th</sup> Sep 2018', 1, '2017-07-06 12:22:31'),
(95, 'LALRU', '<h4>City: LALRU</h4>\r\n<h4>District: CHANDIGARH</h4>\r\n<h4>State: Punjab</h4>', '5<sup>th</sup>,6<sup>th</sup> Oct 2018', 1, '2017-07-06 12:25:23'),
(96, 'LUCKNOW', '<h4>City: LUCKNOW</h4>\r\n<h4>District: Lucknow</h4>\r\n<h4>State: Uttar Pradesh</h4>', '11<sup>th</sup>,12<sup>th</sup> Aug 2017', 1, '2017-07-06 12:26:40'),
(97, 'LUDHIANA', '<h4>City: LUDHIANA</h4>\r\n<h4>District: Ludhiana</h4>\r\n<h4>State: Punjab</h4>', '16<sup>th</sup>,17<sup>th</sup>,20<sup>th</sup> Oct 2018', 1, '2017-07-06 12:28:23'),
(98, 'MADURAI', '<h4>City: MADURAI</h4>\r\n<h4>District: Madurai</h4>\r\n<h4>State: Tamilnadu</h4>', '1<sup>st</sup> Jan 2018', 1, '2017-07-06 12:29:59'),
(99, 'MAHAD (Mahadev)', '<h4>City: MAHAD (Mahadev)</h4>\r\n<h4>District: Raigarh</h4>\r\n<h4>State: Maharashtra</h4>', '10<sup>th</sup> Mar 2018', 1, '2017-07-06 12:31:16'),
(100, 'MAHAPE', '<h4>City: MAHAPE</h4>\r\n<h4>District: Mumbai</h4>\r\n<h4>State: Maharashtra</h4>', '28<sup>th</sup> Feb 2018', 1, '2017-07-06 12:32:46'),
(101, 'MAKARPURA', '<h4>City: MAKARPURA</h4>\r\n<h4>District: Vadodara</h4>\r\n<h4>State: Gujarat</h4>', '31<sup>st</sup> May,1<sup>st</sup>,2<sup>nd</sup> Jun 2018', 1, '2017-07-06 12:33:30'),
(102, 'MANALI', '<h4>City: MANALI</h4>\r\n<h4>District: Kullu</h4>\r\n<h4>State: Himachal Pradesh</h4>', '10<sup>th</sup> Nov 2018', 1, '2017-07-06 12:35:52'),
(103, 'MANIPAL', '<h4>City: MANIPAL</h4>\r\n<h4>District: Udupi</h4>\r\n<h4>State: Karnataka</h4>', '15<sup>th</sup> Jan 2018', 1, '2017-07-06 12:36:45'),
(104, 'MANSAR (Mansarover)', '<h4>City: MANSAR (Mansarover)</h4>\r\n<h4>District: Nagpur</h4>\r\n<h4>State: Maharashtra</h4>\r\n', '20<sup>th</sup>,21<sup>st</sup> Feb 2018', 1, '2017-07-06 12:37:57'),
(105, 'MAROLI', '<h4>City: MAROLI</h4>\r\n<h4>District: Navsari</h4>\r\n<h4>State: Gujarat</h4>', '11<sup>th</sup>,12<sup>th</sup> May 2018', 1, '2017-07-06 12:38:36'),
(106, 'MEERUT', '<h4>City: MEERUT</h4>\r\n<h4>District: Meerut</h4>\r\n<h4>State: Uttar Pradesh</h4>', ' 20<sup>th</sup>,21<sup>st</sup>,22<sup>nd</sup> Jul 2017', 1, '2017-07-06 12:40:17'),
(107, 'MEHSANA', '<h4>City: MEHSANA</h4>\r\n<h4>District: MEHSANA</h4>\r\n<h4>State: Gujarat</h4>', '7<sup>th</sup>,8<sup>th</sup>,9<sup>th</sup> Aug 2018', 1, '2017-07-06 12:40:58'),
(108, 'METODA', '<h4>City: METODA</h4>\r\n<h4>District: Rajkot</h4>\r\n<h4>State: Gujarat</h4>', '18<sup>th</sup>,19<sup>th</sup>,20<sup>th</sup> Jul 2018', 1, '2017-07-06 12:42:52'),
(109, 'MOHALI', '<h4>City: MOHALI</h4>\r\n<h4>District: CHANDIGARH</h4>\r\n<h4>State: Punjab</h4>', '8<sup>th</sup>,9<sup>th</sup>,10<sup>th</sup> Oct 2018', 1, '2017-07-06 12:44:14'),
(110, 'MORADABAD', '<h4>City: MORADABAD</h4>\r\n<h4>District: Moradabad</h4>\r\n<h4>State: Uttar Pradesh</h4>', '12<sup>th</sup>,13<sup>th</sup> Jul 2017', 1, '2017-07-06 12:45:03'),
(111, 'MORAK', '<h4>City: MORAK</h4>\r\n<h4>District: Kota</h4>\r\n<h4>State: Rajasthan</h4>', '16<sup>th</sup>,17<sup>th</sup> Aug 2018', 1, '2017-07-06 12:45:44'),
(112, 'Morvi', '<h4>City: Morvi</h4>\r\n<h4>District: Rajkot</h4>\r\n<h4>State: Gujarat</h4>', '23<sup>rd</sup>,24<sup>th</sup>,25<sup>th</sup> Jul 2018', 1, '2017-07-06 12:46:31'),
(113, 'MUMBAI', '<h4>City: MUMBAI</h4>\r\n<h4>District: Mumbai (Suburban) and Mumbai</h4>\r\n<h4>State: Maharashtra</h4>', '8<sup>th</sup>,9<sup>th</sup> Mar 2018', 1, '2017-07-06 12:47:15'),
(114, 'MUNDRA', '<h4>City: MUNDRA</h4>\r\n<h4>District: Kachchh</h4>\r\n<h4>State: Gujarat</h4>', '31<sup>st</sup> Jul,1<sup>st</sup>,2<sup>nd</sup> Aug 2018', 1, '2017-07-06 12:49:16'),
(115, 'MUZAFFARNAGAR', '<h4>City: MUZAFFARNAGAR</h4>\r\n<h4>District: Muzaffarnagar</h4>\r\n<h4>State: Uttar Pradesh</h4>', '17<sup>th</sup>,18<sup>th</sup>,19<sup>th</sup> Jul 2017', 1, '2017-07-06 12:50:49'),
(116, 'MYSORE', '<h4>City: MYSORE</h4>\r\n<h4>District: Mysore</h4>\r\n<h4>State: Karnataka</h4>', '8<sup>th</sup> Jan 2018', 1, '2017-07-06 12:51:42'),
(117, 'NAGPUR', '<h4>City: NAGPUR</h4>\r\n<h4>District: Nagpur</h4>\r\n<h4>State: Maharashtra</h4>', '6<sup>th</sup>,7<sup>th</sup>,9<sup>th</sup> Apr 2018', 1, '2017-07-06 12:53:08'),
(118, 'NALAGARH', '<h4>City: NALAGARH</h4>\r\n<h4>District: Solan</h4>\r\n<h4>State: Himachal Pradesh</h4>', '12<sup>th</sup>,13<sup>th</sup>,14<sup>th</sup> Nov 2018', 1, '2017-07-06 12:54:34'),
(119, 'NANDESARI', '<h4>City: NANDESARI</h4>\r\n<h4>District: Vadodara</h4>\r\n<h4>State: Gujarat</h4>', '5<sup>th</sup> Jun 2018', 1, '2017-07-06 12:55:19'),
(120, 'NARASAPURA', '<h4>City: NARASAPURA</h4>\r\n<h4>District: Bangalore</h4>\r\n<h4>State: Karnataka</h4>', '11<sup>th</sup> Jan 2018', 1, '2017-07-06 12:56:04'),
(121, 'NARODA', '<h4>City: NARODA</h4>\r\n<h4>District: Ahmadabad</h4>\r\n<h4>State: Gujarat</h4>', '30<sup>th</sup> Jun 2018', 1, '2017-07-06 12:57:30'),
(122, 'NASHIK', '<h4>City: NASHIK</h4>\r\n<h4>District: Nashik</h4>\r\n<h4>State: Maharashtra</h4>', '22<sup>nd</sup>,23<sup>rd</sup>,24<sup>th</sup> Mar 2018', 1, '2017-07-06 12:58:09'),
(123, 'NIMBAHERA', '<h4>City: NIMBAHERA</h4>\r\n<h4>District: Chittaurgarh</h4>\r\n<h4>State: Rajasthan</h4>', '13<sup>th</sup> Aug 2018', 1, '2017-07-06 12:58:56'),
(124, 'NOIDA', '<h4>City: NOIDA</h4>\r\n<h4>District: Gautam Budha Nagar</h4>\r\n<h4>State: Uttar Pradesh</h4>', '28<sup>th</sup>,29<sup>th</sup>,31<sup>st</sup> Jul 2017', 1, '2017-07-06 13:00:14'),
(125, 'PALAGHAT', '<h4>City: PALAGHAT</h4>\r\n<h4>District: PALAGHAT</h4>\r\n<h4>State: Kerala</h4>', '6<sup>th</sup> Jan 2018', 1, '2017-07-06 13:10:16'),
(126, 'PANCHKULA', '<h4>City: PANCHKULA</h4>\r\n<h4>District: PANCHKULA</h4>\r\n<h4>State: Haryana</h4>', '1<sup>st</sup>,3<sup>rd</sup>,4<sup>th</sup> Oct 2018', 1, '2017-07-06 13:13:10'),
(127, 'PANDESARA', '<h4>City: PANDESARA</h4>\r\n<h4>District: Surat</h4>\r\n<h4>State: Gujarat</h4>', '15<sup>th</sup> May 2018', 1, '2017-07-06 13:15:42'),
(128, 'PANIPAT', '<h4>City: PANIPAT</h4>\r\n<h4>District: Panipat</h4>\r\n<h4>State: Haryana</h4>', '20<sup>th</sup>,21<sup>st</sup>,22<sup>nd</sup> Sep 2018', 1, '2017-07-06 14:40:42'),
(129, 'Paradip', '<h4>City: Paradip</h4>\r\n<h4>District: Jagatsinghapur</h4>\r\n<h4>State: Orissa</h4>', '16<sup>th</sup>,17<sup>th</sup> Oct 2017', 1, '2017-07-06 14:41:26'),
(130, 'PATNA', '<h4>City: PATNA</h4>\r\n<h4>District: Patna</h4>\r\n<h4>State: Bihar</h4>', '5<sup>th</sup>,6<sup>th</sup>,7<sup>th</sup> Sep 2017', 1, '2017-07-06 14:42:15'),
(131, 'PIMPRI', '<h4>City: PIMPRI</h4>\r\n<h4>District: Pune</h4>\r\n<h4>State: Maharashtra</h4>', '12<sup>th</sup> Feb 2018', 1, '2017-07-06 14:42:48'),
(132, 'Pimpri Chinchwad', '<h4>City: Pimpri Chinchwad</h4>\r\n<h4>District: Pune</h4>\r\n<h4>State: Maharashtra</h4>', '10<sup>th</sup> Feb 2018', 1, '2017-07-06 14:43:41'),
(133, 'PONDICHERRY', '<h4>City: PONDICHERRY</h4>\r\n<h4>District: PONDICHERRY</h4>\r\n<h4>State: Tamilnadu</h4>', '13<sup>th</sup> Dec 2017', 1, '2017-07-06 14:44:20'),
(134, 'PUNE', '<h4>City: PUNE</h4>\r\n<h4>District: PUNE</h4>\r\n<h4>State: Maharashtra</h4>', '6<sup>th</sup>,7<sup>th</sup>,8<sup>th</sup>,9<sup>th</sup> Feb 2018', 1, '2017-07-06 14:45:07'),
(135, 'RABALE', '<h4>City: RABALE</h4>\r\n<h4>District: Mumbai</h4>\r\n<h4>State: Maharashtra</h4>', '1<sup>st</sup>,3<sup>rd</sup>,5<sup>th</sup> Mar 2018', 1, '2017-07-06 14:47:18'),
(136, 'RAIGARH', '<h4>City: RAIGARH</h4>\r\n<h4>District: Raigarh</h4>\r\n<h4>State: Chhattisgarh</h4>', '7<sup>th</sup> Nov 2017', 1, '2017-07-06 14:47:59'),
(137, 'RAIPUR', '<h4>City: RAIPUR</h4>\r\n<h4>District: Raipur</h4>\r\n<h4>State: Chhattisgarh</h4>', '20<sup>th</sup> Nov 2017', 1, '2017-07-06 14:48:43'),
(138, 'RAJAHMUNDRY', '<h4>City: RAJAHMUNDRY</h4>\r\n<h4>District: East Godavari</h4>\r\n<h4>State: Andhra Pradesh</h4>', '30<sup>th</sup> Nov 2017', 1, '2017-07-06 14:49:46'),
(139, 'RAJKOT', '<h4>City: RAJKOT</h4>\r\n<h4>District: Rajkot</h4>\r\n<h4>State: Gujarat</h4>', '12<sup>th</sup> Jul 2018', 1, '2017-07-06 14:50:55'),
(140, 'RANCHI', '<h4>City: RANCHI</h4>\r\n<h4>District: Ranchi</h4>\r\n<h4>State: Jharkhand</h4>', '28<sup>th</sup> Sep,3<sup>rd</sup>,4<sup>th</sup> Oct 2017', 1, '2017-07-06 14:52:49'),
(141, 'RANJANGAON', '<h4>City: RANJANGAON</h4>\r\n<h4>District: Pune</h4>\r\n<h4>State: Maharashtra</h4>', '14<sup>th</sup> Feb 2018', 1, '2017-07-06 14:58:13'),
(142, 'RENUKOOT', '<h4>City: RENUKOOT</h4>\r\n<h4>District: Sonbhadra</h4>\r\n<h4>State: Uttar Pradesh</h4>', '24<sup>th</sup>,25<sup>th</sup>,26<sup>th</sup>,28<sup>th</sup> Aug 2017', 1, '2017-07-06 15:05:12'),
(143, 'ROHAD INDL AREA, JAJJAR', '<h4>City: ROHAD INDL AREA, JAJJAR</h4>\r\n<h4>District: Jhajjar</h4>\r\n<h4>State: Haryana</h4>', '11<sup>th</sup> Sep 2018', 1, '2017-07-06 15:06:15'),
(144, 'ROHTAK', '<h4>City: ROHTAK</h4>\r\n<h4>District: Rohtak</h4>\r\n<h4>State: Haryana</h4>', '15<sup>th</sup>,17<sup>th</sup> Sep 2018', 1, '2017-07-06 15:15:30'),
(145, 'ROORKEE', '<h4>City: ROORKEE</h4>\r\n<h4>District: Haridwar</h4>\r\n<h4>State: Uttaranchal</h4>', '6<sup>th</sup>,7<sup>th</sup> Jul 2017', 1, '2017-07-06 15:16:08'),
(146, 'ROPAR', '<h4>City: ROPAR</h4>\r\n<h4>District: ROPAR</h4>\r\n<h4>State: Punjab</h4>', '12<sup>th</sup>,13<sup>th</sup>,15<sup>th</sup> Oct 2018', 1, '2017-07-06 15:17:30'),
(147, 'ROURKELA', '<h4>City: ROURKELA</h4>\r\n<h4>District: ROURKELA</h4>\r\n<h4>State: Orissa</h4>', '6<sup>th</sup>,7<sup>th</sup> Oct 2017', 1, '2017-07-06 15:18:25'),
(148, 'RUDRAPUR', '<h4>City: RUDRAPUR</h4>\r\n<h4>District: Deoria</h4>\r\n<h4>State: Uttar Pradesh</h4>', '19<sup>th</sup>,21<sup>st</sup>,22<sup>nd</sup> Aug 2017', 1, '2017-07-06 15:19:07'),
(149, 'SACHIN GIDC', '<h4>City: SACHIN GIDC</h4>\r\n<h4>District: Surat</h4>\r\n<h4>State: Gujarat</h4>', '14<sup>th</sup> May 2018', 1, '2017-07-06 15:19:47'),
(150, 'SAILAKHURD', '<h4>City: SAILAKHURD</h4>\r\n<h4>District: SAILAKHURD</h4>\r\n<h4>State: Punjab</h4>', '5<sup>th</sup>,6<sup>th</sup> Nov 2018', 1, '2017-07-06 15:28:16'),
(151, 'SALEM', '<h4>City: SALEM</h4>\r\n<h4>District: Salem</h4>\r\n<h4>State: Tamilnadu</h4>', '18<sup>th</sup> Dec 2017', 1, '2017-07-06 15:29:03'),
(152, 'SAMBALPUR', '<h4>City: SAMBALPUR</h4>\r\n<h4>District: Sambalpur</h4>\r\n<h4>State: Orissa</h4>', '1<sup>st</sup>,2<sup>nd</sup> Nov 2017', 1, '2017-07-06 15:29:44'),
(153, 'SANAND', '<h4>City: SANAND</h4>\r\n<h4>District: Ahmadabad</h4>\r\n<h4>State: Gujarat</h4>', '16<sup>th</sup>,18<sup>th</sup>,19<sup>th</sup> Jun 2018', 1, '2017-07-06 15:32:09'),
(154, 'SANTEJ', '<h4>City: SANTEJ</h4>\r\n<h4>District: Ahmadabad</h4>\r\n<h4>State: Gujarat</h4>', '20<sup>th</sup>,21<sup>st</sup>,22<sup>nd</sup> Jun 2018', 1, '2017-07-06 15:33:06'),
(155, 'SATHYAMANGALAM', '<h4>City: SATHYAMANGALAM</h4>\r\n<h4>District: SATHYAMANGALAM</h4>\r\n<h4>State: Tamilnadu</h4>', '21<sup>st</sup>,22<sup>nd</sup> Dec 2017', 1, '2017-07-06 15:33:50'),
(156, 'SAVLI', '<h4>City: SAVLI</h4>\r\n<h4>District: Vadodara</h4>\r\n<h4>State: Gujarat</h4>', '6<sup>th</sup>,7<sup>th</sup>,8<sup>th</sup> Jun 2018', 1, '2017-07-06 15:34:27'),
(157, 'SHAPAR', '<h4>City: SHAPAR</h4>\r\n<h4>District: SHAPAR</h4>\r\n<h4>State: Gujarat</h4>', '14<sup>th</sup>,16<sup>th</sup>,17<sup>th</sup> Jul 2018', 1, '2017-07-06 15:35:28'),
(158, 'SHENDRA', '<h4>City: SHENDRA</h4>\r\n<h4>District: Aurangabad</h4>\r\n<h4>State: Maharashtra</h4>', '29<sup>th</sup> Mar 2018', 1, '2017-07-06 15:37:02'),
(159, 'SHIMOGA', '<h4>City: SHIMOGA</h4>\r\n<h4>District: Shimoga</h4>\r\n<h4>State: Karnataka</h4>', '17<sup>th</sup> Jan 2018', 1, '2017-07-06 15:37:47'),
(160, 'SHIRWAL', '<h4>City: SHIRWAL</h4>\r\n<h4>District: Satara</h4>\r\n<h4>State: Maharashtra</h4>', '1<sup>st</sup>,2<sup>nd</sup>,3<sup>rd</sup> Feb 2018', 1, '2017-07-06 15:38:28'),
(161, 'SILVASSA', '<h4>City: SILVASSA</h4>\r\n<h4>District: SILVASSA</h4>\r\n<h4>State: Dadra and Nagar Haveli</h4>', '28<sup>th</sup> Apr,30<sup>th</sup> Apr,2<sup>nd</sup> May 2018', 1, '2017-07-06 15:39:11'),
(162, 'SINGANALLUR', '<h4>City: SINGANALLUR</h4>\r\n<h4>District: Coimbatore</h4>\r\n<h4>State: Tamilnadu</h4>', '30<sup>th</sup> Dec 2017', 1, '2017-07-06 15:46:14'),
(163, 'SINGHAD ROAD', '<h4>City: SINGHAD ROAD</h4>\r\n<h4>District: Pune</h4>\r\n<h4>State: Maharashtra</h4>', '5<sup>th</sup> Feb 2018', 1, '2017-07-06 15:47:17'),
(164, 'Singrauli', '<h4>City: Singrauli</h4>\r\n<h4>District: Sidhi</h4>\r\n<h4>State: Madhya Pradesh</h4>', '16<sup>th</sup>,17<sup>th</sup> Apr 2018', 1, '2017-07-06 15:50:13'),
(165, 'SITAPURA', '<h4>City: SITAPURA</h4>\r\n<h4>District: Jaipur</h4>\r\n<h4>State: Rajasthan</h4>', '30<sup>th</sup> Aug 2018', 1, '2017-07-06 15:50:59'),
(166, 'SIVAKASI', '<h4>City: SIVAKASI</h4>\r\n<h4>District: Virudhunagar</h4>\r\n<h4>State: Tamilnadu</h4>', '2<sup>nd</sup> Jan 2018', 1, '2017-07-06 15:52:31'),
(167, 'Sonipat', '<h4>City: Sonipat</h4>\r\n<h4>District: Sonipat</h4>\r\n<h4>State: Haryana</h4>', '19<sup>th</sup> Sep 2018', 1, '2017-07-06 15:54:08'),
(168, 'SRIPERUMBUDUR', '<h4>City: SRIPERUMBUDUR</h4>\r\n<h4>District: Kancheepuram</h4>\r\n<h4>State: Tamilnadu</h4>', '11<sup>th</sup> Dec 2017', 1, '2017-07-06 15:57:21'),
(169, 'SURAT', '<h4>City: SURAT</h4>\r\n<h4>District: Surat</h4>\r\n<h4>State: Gujarat</h4>', '16<sup>th</sup>,17<sup>th</sup>,18<sup>th</sup> May 2018', 1, '2017-07-06 15:58:27'),
(170, 'SURENDRANAGAR', '<h4>City: SURENDRANAGAR</h4>\r\n<h4>District: Surendranagar</h4>\r\n<h4>State: Gujarat</h4>', '9<sup>th</sup>,10<sup>th</sup>,11<sup>th</sup> Jul 2018', 1, '2017-07-06 16:02:09'),
(171, 'TALOJA', '<h4>City: TALOJA</h4>\r\n<h4>District: Raigarh</h4>\r\n<h4>State: Maharashtra</h4>', '22<sup>nd</sup>,23<sup>rd</sup>,24<sup>th</sup> Feb 2018', 1, '2017-07-06 16:02:51'),
(172, 'TIRODA', '<h4>City: TIRODA</h4>\r\n<h4>District: Gondia</h4>\r\n<h4>State: Maharashtra</h4>', '10<sup>th</sup>,11<sup>th</sup> Apr 2018', 1, '2017-07-06 16:03:34'),
(173, 'TIRUPUR', '<h4>City: TIRUPUR</h4>\r\n<h4>District: TIRUPUR</h4>\r\n<h4>State: Tamilnadu</h4>', '23<sup>rd</sup> Dec 2017', 1, '2017-07-06 16:04:54'),
(174, 'TORANAGALLU', '<h4>City: TORANAGALLU</h4>\r\n<h4>District: Bellary</h4>\r\n<h4>State: Karnataka</h4>', '18<sup>th</sup> Jan 2018', 1, '2017-07-06 16:05:57'),
(175, 'TRICHY', '<h4>City: TRICHY</h4>\r\n<h4>District: TRICHY</h4>\r\n<h4>State: Tamilnadu</h4>', '15<sup>th</sup> Dec 2017', 1, '2017-07-06 16:06:57'),
(176, 'UDAIPUR', '<h4>City: UDAIPUR</h4>\r\n<h4>District: Udaipur</h4>\r\n<h4>State: Rajasthan</h4>', '11<sup>th</sup> Aug 2018', 1, '2017-07-06 16:40:51'),
(177, 'UMBERGAON', '<h4>City: UMBERGAON</h4>\r\n<h4>District: Valsad</h4>\r\n<h4>State: Gujarat</h4>\r\n', '5<sup>th</sup>,7<sup>th</sup> May 2018', 1, '2017-07-06 16:41:46'),
(178, 'UNNAO', '<h4>City: UNNAO</h4>\r\n<h4>District: Unnao</h4>\r\n<h4>State: Uttar Pradesh</h4>', '9<sup>th</sup>,10<sup>th</sup> Aug 2017', 1, '2017-07-06 16:42:43'),
(179, 'VADODARA', '<h4>City: VADODARA</h4>\r\n<h4>District: Vadodara</h4>\r\n<h4>State: Gujarat</h4>', '4<sup>th</sup> Jun 2018', 1, '2017-07-06 16:43:23'),
(180, 'VAPI', '<h4>City: VAPI</h4>\r\n<h4>District: Valsad</h4>\r\n<h4>State: Gujarat</h4>', '8<sup>th</sup>,9<sup>th</sup>,10<sup>th</sup> May 2018', 1, '2017-07-06 16:44:09'),
(181, 'VASAI', '<h4>City: VASAI</h4>\r\n<h4>District: Thane</h4>\r\n<h4>State: Maharashtra</h4>', '13<sup>th</sup>,14<sup>th</sup>,15<sup>th</sup> Mar 2018', 1, '2017-07-06 16:45:04'),
(182, 'VASINDH', '<h4>City: VASINDH</h4>\r\n<h4>District: Mumbai</h4>\r\n<h4>State: Maharashtra</h4>', '20<sup>th</sup>,21<sup>st</sup> Mar 2018', 1, '2017-07-06 16:49:39'),
(183, 'VATVA', '<h4>City: VATVA</h4>\r\n<h4>District: Ahmadabad</h4>\r\n<h4>State: Gujarat</h4>', '23<sup>rd</sup>,25<sup>th</sup>,26<sup>th</sup> Jun 2018', 1, '2017-07-06 16:57:27'),
(184, 'VAVDI', '<h4>City: VAVDI</h4>\r\n<h4>District: Rajkot</h4>\r\n<h4>State: Gujarat</h4>', '13<sup>th</sup> Jul 2018', 1, '2017-07-06 17:00:52'),
(185, 'VERNA', '<h4>City: VERNA</h4>\r\n<h4>District: Salcete</h4>\r\n<h4>State: Goa</h4>', '22<sup>nd</sup>,23<sup>rd</sup> Jan 2018', 1, '2017-07-06 17:04:56'),
(186, 'VIJAYWADA', '<h4>City: VIJAYWADA</h4>\r\n<h4>District: VIJAYWADA</h4>\r\n<h4>State: Andhra Pradesh</h4>', '2<sup>nd</sup> Dec 2017', 1, '2017-07-06 17:06:00'),
(187, 'VIKHROLI', '<h4>City: VIKHROLI</h4>\r\n<h4>District: Mumbai</h4>\r\n<h4>State: Maharashtra</h4>', '7<sup>th</sup> Mar 2018', 1, '2017-07-06 17:10:31'),
(188, 'VINDHYANAGAR', '<h4>City: VINDHYANAGAR</h4>\r\n<h4>District: VINDHYANAGAR</h4>\r\n<h4>State: Madhya Pradesh</h4>', '18<sup>th</sup>,19<sup>th</sup> Apr 2018', 1, '2017-07-06 17:51:36'),
(189, 'VISAKHAPATNAM (RINL)', '<h4>City: VISAKHAPATNAM (RINL)</h4>\r\n<h4>District: VISAKHAPATNAM (RINL)</h4>\r\n<h4>State: Andhra Pradesh</h4>', '27<sup>th</sup> Nov 2017', 1, '2017-07-06 17:52:40'),
(190, 'VKIA', '<h4>City: VKIA</h4>\r\n<h4>District: Jaipur</h4>\r\n<h4>State: Rajasthan</h4>', '1<sup>st</sup> Sep 2018', 1, '2017-07-06 17:53:37'),
(191, 'WALUJ MIDC', '<h4>City: WALUJ MIDC</h4>\r\n<h4>District: Aurangabad</h4>\r\n<h4>State: Maharashtra</h4>', '27<sup>th</sup> Mar 2018', 1, '2017-07-06 18:00:26'),
(192, 'WARDHA', '<h4>City: WARDHA</h4>\r\n<h4>District: Wardha</h4>\r\n<h4>State: Maharashtra</h4>', '5<sup>th</sup> Apr 2018', 1, '2017-07-06 18:06:30'),
(193, 'Yamunanagar', '<h4>City: Yamunanagar</h4>\r\n<h4>District: Yamunanagar</h4>\r\n<h4>State: Haryana</h4>  ', '24<sup>th</sup>,25<sup>th</sup>,26<sup>th</sup> Sep 2018', 1, '2017-07-06 18:07:30');

-- --------------------------------------------------------

--
-- Table structure for table `sales_user`
--

CREATE TABLE IF NOT EXISTS `sales_user` (
  `u_id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_status` int(10) NOT NULL,
  `f_name` varchar(225) NOT NULL,
  `l_name` varchar(225) NOT NULL,
  `userid` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `created` datetime NOT NULL,
  `ip` varchar(50) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sales_user`
--

INSERT INTO `sales_user` (`u_id`, `admin_status`, `f_name`, `l_name`, `userid`, `password`, `created`, `ip`) VALUES
(1, 0, 'jeevan', 'maheshwari', 'test888886@gmail.com', 'test', '2017-06-12 10:15:11', '::1'),
(2, 0, 'yogesh', 'timbaliya', 'yogesh@gmail.com', 'test', '2017-06-13 08:00:34', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `s_feedback`
--

CREATE TABLE IF NOT EXISTS `s_feedback` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `sales_p_id` varchar(225) NOT NULL,
  `fullname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `mobile` varchar(225) NOT NULL,
  `location` varchar(225) NOT NULL,
  `feed1` varchar(225) NOT NULL,
  `feed2` varchar(225) NOT NULL,
  `feed3` varchar(225) NOT NULL,
  `feed4` varchar(225) NOT NULL,
  `feed5` varchar(225) NOT NULL,
  `created` datetime NOT NULL,
  `ip` varchar(225) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `s_feedback`
--

INSERT INTO `s_feedback` (`user_id`, `sales_p_id`, `fullname`, `email`, `mobile`, `location`, `feed1`, `feed2`, `feed3`, `feed4`, `feed5`, `created`, `ip`) VALUES
(1, '1', 'jeevan maheshwari', 'test888886@gmail.com', '7828828149', 'mumbai', 'test3', 'test5', 'test8', 'test11', 'test14', '2017-06-19 13:18:29', '::1'),
(2, '1', 'jeevan maheshwari', 'test888886@gmail.com', '7828828141', 'mumbai', 'test2', 'test5', 'test7', 'test10', 'test13', '2017-06-19 13:21:53', '::1'),
(3, '1', 'jeevan maheshwari', 'test888886@gmail.com', '7828828149', 'mumbai', 'test2', 'test5', 'test8', 'test11', 'test14', '2017-06-19 13:23:49', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `temp_otp`
--

CREATE TABLE IF NOT EXISTS `temp_otp` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(225) NOT NULL,
  `otp` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `ip` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `temp_otp`
--

INSERT INTO `temp_otp` (`id`, `mobile`, `otp`, `created`, `ip`) VALUES
(1, '7828828149', 170334, '2017-06-19 12:28:22', '::1'),
(2, '7828828140', 824240, '2017-06-19 13:09:44', '::1'),
(3, '7828828141', 914840, '2017-06-19 13:21:15', '::1'),
(4, '9819007043', 942422, '2017-07-13 09:49:54', '165.225.106.76'),
(5, '9987212419', 267816, '2017-07-13 11:45:23', '49.44.51.95'),
(6, '223', 556900, '2017-07-13 15:21:28', '103.19.198.70'),
(7, '9167070812', 489788, '2017-07-14 13:05:11', '103.19.198.70');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sales_p_id` varchar(10) NOT NULL,
  `fullname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `mobile` varchar(225) NOT NULL,
  `location` varchar(225) NOT NULL,
  `created` datetime NOT NULL,
  `ip` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `sales_p_id`, `fullname`, `email`, `mobile`, `location`, `created`, `ip`) VALUES
(1, '1', 'jeevan maheshwari', 'test888886@gmail.com', '7828828149', 'mumbai', '2017-06-19 12:28:32', '::1'),
(2, '1', 'jeevan maheshwari', 'test888886@gmail.com', '7828828140', 'indore', '2017-06-19 13:10:09', '::1'),
(3, '1', 'jeevan maheshwari', 'test888886@gmail.com', '7828828141', 'mumbai', '2017-06-19 13:21:42', '::1'),
(4, 'self', 'harsh', 'harshm@test.com', '9167070812', 'mumbai', '2017-07-14 13:07:15', '103.19.198');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(255) NOT NULL,
  `raw_url` varchar(255) NOT NULL,
  `social_site` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `link`, `raw_url`, `social_site`, `user_name`, `status`, `added_on`) VALUES
(37, '&lt;iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/devendra.more.568/posts/1350146015041062&width=500" width="500" height="419" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true', 'https://www.facebook.com/devendra.more.568/posts/1350146015041062', '1', 'RR', 1, '2017-07-24 09:56:40'),
(38, '&lt;iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/mohdtariq.siddiqi/posts/1452353758163087&width=500" width="500" height="445" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true', 'https://www.facebook.com/mohdtariq.siddiqi/posts/1452353758163087', '0', 'Testing', 1, '2017-07-21 07:21:52'),
(39, '&lt;iframe src="https://www.facebook.com/plugins/video.php?href=https://www.facebook.com/Billboard/videos/10155593699714581/&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparen', 'https://www.facebook.com/Billboard/videos/10155593699714581/', '0', 'Test3', 1, '2017-07-21 07:23:19'),
(40, '&lt;iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/devendra.more.568/posts/1350146015041062&width=500" width="500" height="419" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true', 'https://www.facebook.com/devendra.more.568/posts/1350146015041062', '0', 'googlefgfg', 1, '2017-07-21 08:41:08'),
(43, '&lt;iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/devendra.more.568/posts/135056146015041062&width=500" width="500" height="419" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="tr', 'https://www.facebook.com/devendra.more.568/posts/135056146015041062', '0', 'Tst3', -1, '2017-07-21 08:45:34'),
(44, '&lt;iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/devendra.more.568/posts/1350146015041062&width=500" width="500" height="419" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true', 'https://www.facebook.com/devendra.more.568/posts/1350146015041062', '1', 'MJ', 1, '2017-07-21 08:50:02'),
(45, '&lt;iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/devendra.more.568/posts/1350146015041062&width=500" width="500" height="419" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true', 'https://www.facebook.com/devendra.more.568/posts/1350146015041062', '0', 'j', 1, '2017-07-24 07:53:14'),
(46, '&lt;iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/devendra.more.568/posts/1350146015041062&width=500" width="500" height="419" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true', 'https://www.facebook.com/devendra.more.568/posts/1350146015041062', '0', 'googlefgfg', 0, '2017-07-24 08:50:44');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
