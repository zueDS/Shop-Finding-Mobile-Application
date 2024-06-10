-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2023 at 09:52 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopmapproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id_city` int(11) NOT NULL AUTO_INCREMENT,
  `district` varchar(233) DEFAULT NULL,
  `city` varchar(233) DEFAULT NULL,
  `statusz` varchar(233) DEFAULT NULL,
  `diliverycost` varchar(233) DEFAULT NULL,
  PRIMARY KEY (`id_city`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id_city`, `district`, `city`, `statusz`, `diliverycost`) VALUES
(1, 'Ampara', 'Akkaraipattu', 'Active', '300'),
(2, 'Ampara', 'Ampara', 'Active', '300'),
(3, 'Ampara', 'Irakkamam', 'Active', '300'),
(4, 'Ampara', 'Lahugala', 'Active', '300'),
(5, 'Ampara', 'Kalmunai', 'Active', '300'),
(6, 'Ampara', 'Maha Oya', 'Active', '300'),
(7, 'Ampara', 'Pottuvil', 'Active', '300'),
(8, 'Ampara', 'Sainthamaruthu', 'Active', '300'),
(9, 'Anuradhapura', 'Bulnewa', 'Active', '350'),
(10, 'Anuradhapura', 'Eppawala', 'Active', '350'),
(11, 'Anuradhapura', 'Kekirawa', 'Active', '350'),
(12, 'Anuradhapura', 'Medawachchiya', 'Active', '350'),
(13, 'Anuradhapura', 'Mihintale', 'Active', '350'),
(14, 'Anuradhapura', 'Ganewalpola', 'Active', '350'),
(15, 'Anuradhapura', 'Habarana', 'Active', '350'),
(16, 'Anuradhapura', 'Horowupotana', 'Active', '350'),
(17, 'Anuradhapura', 'Anuradhapura', 'Active', '350'),
(18, 'Badulla', 'Badulla', 'Active', '400'),
(19, 'Badulla', 'Hali-Ela', 'Active', '400'),
(20, 'Badulla', 'Haputale', 'Active', '400'),
(21, 'Badulla', 'Mahiyanganaya', 'Active', '400'),
(22, 'Badulla', 'Passara', 'Active', '400'),
(23, 'Badulla', 'Welimada', 'Active', '400'),
(24, 'Badulla', 'Wiyaluwa', 'Active', '400'),
(25, 'Batticaloa', 'Batticaloa', 'Active', '400'),
(26, 'Batticaloa', 'Kiran', 'Active', '400'),
(27, 'Batticaloa', 'Kattankudy', 'Active', '400'),
(28, 'Batticaloa', 'Eravur', 'Active', '400'),
(29, 'Batticaloa', 'Valaichchenai', 'Active', '400'),
(30, 'Batticaloa', 'Vakarai', 'Active', '400'),
(31, 'Batticaloa', 'Oddamavadi', 'Active', '400'),
(32, 'Batticaloa', 'Kaluvanchikudy', 'Active', '400'),
(33, 'Colombo', '	Colombo', 'Active', '400'),
(34, 'Colombo', 'Dehiwala', 'Active', '400'),
(35, 'Colombo', 'Mount Lavinia', 'Active', '400'),
(36, 'Colombo', 'Homagama', 'Active', '400'),
(37, 'Colombo', 'Kaduwela', 'Active', '400'),
(38, 'Colombo', 'Kesbewa', 'Active', '400'),
(39, 'Colombo', 'Kolonnawa', 'Active', '400'),
(40, 'Colombo', 'Maharagama', 'Active', '400'),
(41, 'Colombo', 'Moratuwa', 'Active', '400'),
(42, 'Colombo', 'Padukka', 'Active', '400'),
(43, 'Colombo', 'Avissawella', 'Active', '400'),
(44, 'Colombo', 'Sri Jayawardenepura Kotte', 'Active', '400'),
(45, 'Galle', 'Galle', 'Active', '400'),
(46, 'Galle', 'Ahangama', 'Active', '400'),
(47, 'Galle', 'Ahungalla', 'Active', '400'),
(48, 'Galle', 'Ambalangoda', 'Active', '400'),
(49, 'Galle', 'Baddegama', 'Active', '400'),
(50, 'Galle', 'Balapitiya', 'Active', '400'),
(51, 'Galle', 'Batapola', 'Active', '400'),
(52, 'Galle', 'Bentota', 'Active', '400'),
(53, 'Galle', 'Boossa', 'Active', '400'),
(54, 'Galle', 'Elpitiya', 'Active', '400'),
(55, 'Galle', 'Habaraduwa', 'Active', '400'),
(56, 'Galle', 'Hikkaduwa', 'Active', '400'),
(57, NULL, 'Udugama', 'Active', '400');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cusnamez` varchar(233) DEFAULT NULL,
  `emailz` varchar(233) DEFAULT NULL,
  `contactz` varchar(233) DEFAULT NULL,
  `statusz` varchar(233) DEFAULT NULL,
  `passw` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `cusnamez`, `emailz`, `contactz`, `statusz`, `passw`) VALUES
(1, 'Saman perera', 's', '0719887767', 'Active', '1'),
(2, 'Kusal janith', 'k@gmail.com', '0774455432', 'Active', '123');

-- --------------------------------------------------------

--
-- Table structure for table `productdetails`
--

CREATE TABLE IF NOT EXISTS `productdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pronamez` text,
  `proprice` varchar(233) DEFAULT NULL,
  `descz` text,
  `proimgurl` text,
  `selleremailz` varchar(233) DEFAULT NULL,
  `shopnamez` varchar(233) DEFAULT NULL,
  `statusz` varchar(233) DEFAULT NULL,
  `datez` varchar(233) DEFAULT NULL,
  `timez` varchar(233) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `productdetails`
--

INSERT INTO `productdetails` (`id`, `pronamez`, `proprice`, `descz`, `proimgurl`, `selleremailz`, `shopnamez`, `statusz`, `datez`, `timez`) VALUES
(4, 'ee', '1500', 'erjnejkr', 'https://ucarecdn.com/78ed0d53-b5dd-476d-bd9b-5ef31e900a0a/pro1.jpg', 'eclub@gmail.com', 'eclub', 'Active', '2023-04-19', '02:27:47'),
(5, 'ff', '2500', 'erjnejkr', 'https://ucarecdn.com/015638b6-abfc-45ab-8da5-6b26f9d4fc98/pro3.jfif', 'eclub@gmail.com', 'eclub', 'Removed', '2023-04-19', '02:27:47'),
(6, 'kk', '3500', 'erjnejkr', 'https://ucarecdn.com/c357176c-5590-4352-b977-b60d819e06a1/pro2.jpg', 'eclub@gmail.com', 'eclub', 'Active', '2023-04-19', '02:27:47');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE IF NOT EXISTS `userdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shopname` varchar(233) DEFAULT NULL,
  `email` varchar(233) DEFAULT NULL,
  `contatcatz` varchar(233) DEFAULT NULL,
  `city` varchar(233) DEFAULT NULL,
  `addressz` varchar(233) DEFAULT NULL,
  `latitute` text,
  `longtute` text,
  `passwrod` text,
  `statusz` varchar(233) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `shopname`, `email`, `contatcatz`, `city`, `addressz`, `latitute`, `longtute`, `passwrod`, `statusz`) VALUES
(1, 'eclub', 'eclub@gmail.com', '0778899876', 'Badulla', 'Bandarawela no 55 badulla', '6.956486', '80.770076', '123', 'Active'),
(2, 'WC Club', 'wclub@gmail.com', '0778899876', 'Colombo', 'Kirulapone colombo 5', '6.878523', '79.876069', '123', 'Active'),
(3, 'Admin', 'Admin', 'Admin', 'Admin', 'Admin', NULL, NULL, 'Admin', 'Active');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
