-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 09, 2021 at 09:02 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

DROP TABLE IF EXISTS `adminuser`;
CREATE TABLE IF NOT EXISTS `adminuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`id`, `email`, `password`, `username`) VALUES
(1, 'rohit06102000@gmail.com', '2000@Rohit', 'Rohit Vishwakarma');

-- --------------------------------------------------------

--
-- Table structure for table `asus`
--

DROP TABLE IF EXISTS `asus`;
CREATE TABLE IF NOT EXISTS `asus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `link` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asus`
--

INSERT INTO `asus` (`id`, `image`, `name`, `link`) VALUES
(1, 'maxpro.jpg', 'Asus Zenfone Max Pro (M2)', 'https://gadgets.ndtv.com/asus-zenfone-max-pro-m2-5749'),
(2, 'maxplusm2.jpg', 'Asus Zenfone Max Plus (M2)', 'https://gadgets.ndtv.com/asus-zenfone-max-plus-m2-12309'),
(3, 'maxm1.jpg', 'Asus Zenfone Max (M1)', 'https://gadgets.ndtv.com/asus-zenfone-max-m1-zb556kl-5694'),
(4, 'l2.jpg', 'Asus ZenFone Live (L2)', 'https://gadgets.ndtv.com/asus-zenfone-live-l2-13035#:~:text=Asus%20ZenFone%20Live%20L2%20smartphone,comes%20with%202GB%20of%20RAM.'),
(5, 'rogphone3.png', 'Asus ROG Phone 3 ', 'https://gadgets.ndtv.com/asus-rog-phone-3-price-in-india-96155'),
(6, '6z.png', 'Asus 6Z', 'https://gadgets.ndtv.com/asus-6z-price-in-india-13116');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `image`, `name`) VALUES
(1, 'samsung.png', 'SAMSUNG'),
(2, 'redmi.png', 'REDMI'),
(3, 'vivo.png', 'VIVO'),
(4, 'realme.jpg', 'REALME'),
(5, 'oppo.png', 'OPPO'),
(6, 'oneplus.png', 'ONEPLUS'),
(7, 'honor.png', 'HUAWEI'),
(8, 'asus.jpg', 'ASUS');

-- --------------------------------------------------------

--
-- Table structure for table `huawei`
--

DROP TABLE IF EXISTS `huawei`;
CREATE TABLE IF NOT EXISTS `huawei` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `link` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `huawei`
--

INSERT INTO `huawei` (`id`, `image`, `name`, `link`) VALUES
(1, '9xpro.png', 'Honor 9X Pro', 'https://gadgets.ndtv.com/honor-9x-pro-price-in-india-90889'),
(2, '8x.png', 'Honor 8X', 'https://gadgets.ndtv.com/honor-8x-5597'),
(3, '8se.png', 'Huawei Nova 8 SE High Edition ', 'https://gadgets.ndtv.com/huawei-nova-8-se-high-edition-price-in-india-98295');

-- --------------------------------------------------------

--
-- Table structure for table `oneplus`
--

DROP TABLE IF EXISTS `oneplus`;
CREATE TABLE IF NOT EXISTS `oneplus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `link` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oneplus`
--

INSERT INTO `oneplus` (`id`, `image`, `name`, `link`) VALUES
(1, '8t.png', 'OnePlus 8T Cyberpunk 2077', 'https://gadgets.ndtv.com/oneplus-8t-cyberpunk-2077-limited-edition-price-in-india-98091'),
(2, 'n10.png', 'OnePlus Nord N10 5G', 'https://gadgets.ndtv.com/oneplus-nord-n10-5g-price-in-india-98027');

-- --------------------------------------------------------

--
-- Table structure for table `oppo`
--

DROP TABLE IF EXISTS `oppo`;
CREATE TABLE IF NOT EXISTS `oppo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `link` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oppo`
--

INSERT INTO `oppo` (`id`, `image`, `name`, `link`) VALUES
(1, 'k7x.png', 'Oppo K7x', 'https://gadgets.ndtv.com/oppo-k7x-price-in-india-98211'),
(2, 'a73.png', 'Oppo A73', 'https://gadgets.ndtv.com/oppo-a73-price-in-india-97594'),
(3, '4f.png', 'Oppo Reno 4F', 'https://gadgets.ndtv.com/oppo-reno-4f-price-in-india-97748');

-- --------------------------------------------------------

--
-- Table structure for table `realme`
--

DROP TABLE IF EXISTS `realme`;
CREATE TABLE IF NOT EXISTS `realme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `link` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `realme`
--

INSERT INTO `realme` (`id`, `image`, `name`, `link`) VALUES
(1, 'c2.jpg', 'REALME C2', 'https://gadgets.ndtv.com/realme-c2-13026'),
(2, 'u1.jpg', 'REALME U1', 'https://gadgets.ndtv.com/realme-u1-5746'),
(3, 'c1.jpg', 'REALME C1', 'https://gadgets.ndtv.com/realme-c1-5666'),
(4, '3pro', 'REALME 3 RPO', 'https://gadgets.ndtv.com/realme-3-pro-13001');

-- --------------------------------------------------------

--
-- Table structure for table `redmi`
--

DROP TABLE IF EXISTS `redmi`;
CREATE TABLE IF NOT EXISTS `redmi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `link` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `redmi`
--

INSERT INTO `redmi` (`id`, `image`, `name`, `link`) VALUES
(1, 'y3.jpg', 'XIAOMI REDMI Y3', 'https://gadgets.ndtv.com/mobiles/reviews/xiaomi-redmi-y3-review-india-price-mi-y3-2030404'),
(2, 'NOTE7PRO.JPG', 'XIAOMI REDMI NOTE 7 PRO', 'https://gadgets.ndtv.com/redmi-note-7-pro-price-in-india-11984');

-- --------------------------------------------------------

--
-- Table structure for table `samsung`
--

DROP TABLE IF EXISTS `samsung`;
CREATE TABLE IF NOT EXISTS `samsung` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `link` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `samsung`
--

INSERT INTO `samsung` (`id`, `image`, `name`, `link`) VALUES
(1, 'a80.jpg', 'SAMSUNG GALAXY A80', 'https://gadgets.ndtv.com/samsung-galaxy-a80-13008'),
(2, 'm30.jpg', 'SAMSUNG GALAXY M30', 'https://gadgets.ndtv.com/samsung-m30-price-in-india-8926'),
(3, 'a02s.png', 'Samsung Galaxy A02s', 'https://gadgets.ndtv.com/samsung-galaxy-a02s-price-in-india-98528');

-- --------------------------------------------------------

--
-- Table structure for table `userc`
--

DROP TABLE IF EXISTS `userc`;
CREATE TABLE IF NOT EXISTS `userc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userc`
--

INSERT INTO `userc` (`id`, `name`, `email`, `contact`, `pass`) VALUES
(4, 'Umang Aggarwal', 'umangaggrwal631@gmail.com', '9899126409', '1997@Umang'),
(5, 'Rohit Vishwakarma', 'rohit06102000@gmail.com', '7011362155', '2000@Rohit'),
(11, 'Anmol Kumar', 'anmol123@gmail.com', '9955994545', '2000@Anmol');

-- --------------------------------------------------------

--
-- Table structure for table `vivo`
--

DROP TABLE IF EXISTS `vivo`;
CREATE TABLE IF NOT EXISTS `vivo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `link` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vivo`
--

INSERT INTO `vivo` (`id`, `image`, `name`, `link`) VALUES
(1, 'y51.png', 'Vivo Y51 (5,000mAh)', 'https://gadgets.ndtv.com/vivo-y51-5-000mah-price-in-india-98737'),
(2, 'y1s.png', 'Vivo Y1s', 'https://gadgets.ndtv.com/vivo-y1s-price-in-india-96406'),
(3, 'y3s.png', 'Vivo Y3', 'https://gadgets.ndtv.com/vivo-y3s-price-in-india-98020'),
(4, 's7e.png', 'Vivo S7e 5G', 'https://gadgets.ndtv.com/vivo-s7e-5g-price-in-india-98212');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
