-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 06:00 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simcol`
--
CREATE DATABASE IF NOT EXISTS `simcol` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `simcol`;

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE IF NOT EXISTS `data_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id`, `email`, `nama`, `password`, `is_active`) VALUES
(1, 'admin@mail.com', 'administrator', '$2y$10$ZZq75HKjOYIu0hxnnoJXS.H5uoL9j..162T7zXcPXscxhG5lnnLvu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log_item`
--

CREATE TABLE IF NOT EXISTS `log_item` (
  `id_itm` int(11) NOT NULL AUTO_INCREMENT,
  `nm_itm` varchar(255) NOT NULL,
  `prc_itm` varchar(255) NOT NULL,
  `img` varchar(50) NOT NULL,
  `desc_itm` text NOT NULL,
  PRIMARY KEY (`id_itm`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `log_item`
--

INSERT INTO `log_item` (`id_itm`, `nm_itm`, `prc_itm`, `img`, `desc_itm`) VALUES
(1, 'Topi SD', 'Rp. 6.500/pcs', '', ''),
(7, 'Topi Saya Bundar', 'Rp. 7.000/pcs', '0a154a7f97a5d0eee491245e80133ae8.jpg', 'Topi Saya Bundar');

-- --------------------------------------------------------

--
-- Table structure for table `log_news`
--

CREATE TABLE IF NOT EXISTS `log_news` (
  `id_news` int(11) NOT NULL AUTO_INCREMENT,
  `txt_news` varchar(255) NOT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `log_news`
--

INSERT INTO `log_news` (`id_news`, `txt_news`) VALUES
(1, 'UMKM H. M. TOHA sudah tersedia via website');

-- --------------------------------------------------------

--
-- Table structure for table `log_trc`
--

CREATE TABLE IF NOT EXISTS `log_trc` (
  `id_trc` int(11) NOT NULL AUTO_INCREMENT,
  `nm_trc` varchar(255) NOT NULL,
  `r_trc` varchar(255) NOT NULL,
  `img_bukti_tf` varchar(50) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id_trc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `log_trc`
--

INSERT INTO `log_trc` (`id_trc`, `nm_trc`, `r_trc`, `img_bukti_tf`, `status`) VALUES
(1, 'Topi SD', 'Topi SD Hara-Hara 10 Kodi', '', 'Pending');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
