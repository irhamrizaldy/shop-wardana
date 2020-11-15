-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2020 at 09:08 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ruangrespons`
--
CREATE DATABASE IF NOT EXISTS `ruangrespons` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ruangrespons`;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE IF NOT EXISTS `data_admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id`, `email`, `nama`, `password`, `is_active`) VALUES
(6, 'admin@gmail.com', 'administrator', '$2y$10$ZZq75HKjOYIu0hxnnoJXS.H5uoL9j..162T7zXcPXscxhG5lnnLvu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_designer`
--

CREATE TABLE IF NOT EXISTS `data_designer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `data_designer`
--

INSERT INTO `data_designer` (`id`, `email`, `nama`, `foto`, `deskripsi`) VALUES
(5, 'irhamrizaldy@gmail.com', 'Irham Rizaldy', '888171_night_512x512.png', 'Admin'),
(6, '', 'Andhun Hariadi', 'person1.png', 'Creative Director / Interior Design'),
(7, '', 'Ayu Gita Pancasari', 'person2.png', 'Profesional Marketing'),
(8, '', 'Rahmad Ramadhan Alkhafid', 'person3.png', '3D Artist / Interior Design'),
(9, '', 'Fernanda Adi Saputra', 'person4.png', 'Drafter / Interior Design');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE IF NOT EXISTS `kategori_produk` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kategori`),
  KEY `id_kategori` (`id_kategori`),
  KEY `id_kategori_2` (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Bedroom'),
(2, 'Cafe'),
(3, 'Resepsionis'),
(4, 'Ruang Karaoke'),
(5, 'Rumah'),
(6, 'Kitchen'),
(7, 'Living Room');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_item`
--

CREATE TABLE IF NOT EXISTS `tabel_item` (
  `id_item` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `nama_desain` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id_item`),
  KEY `id_kategori` (`id_kategori`),
  KEY `id_kategori_2` (`id_kategori`),
  KEY `id_kategori_3` (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tabel_item`
--

INSERT INTO `tabel_item` (`id_item`, `id_kategori`, `nama_desain`, `gambar`, `deskripsi`) VALUES
(5, 1, 'Bedroom-1', 'BEDROM.jpg', 'Master Bedroom'),
(6, 2, 'Cafe-1', 'cafe1.jpg', 'Coffee Shop'),
(7, 3, 'Resepsionis-1', 'resepsionis1.jpg', 'Resepsionis Room'),
(8, 4, 'Ruang Karaoke-1', 'ruangkaraoke1.jpg', 'Karaoke Room'),
(9, 5, 'Rumah-1', 'rumah1.jpg', 'Facade'),
(10, 1, 'Bedroom-2', 'bedroom2.jpg', 'Master Bedroom'),
(13, 1, 'Bedroom-5', 'bedroom5.jpg', 'Master Bedroom'),
(17, 1, 'Bedroom-9', 'bedroom9.jpg', 'Master Bedroom'),
(18, 1, 'Bedroom-10', 'bedroom10.jpg', 'Master Bedroom'),
(19, 6, 'Dapur-1', 'kitchen1.jpg', 'Kitchen Set'),
(20, 6, 'Dapur-2', 'kitchen2.jpg', 'Kitchen Set'),
(21, 6, 'Dapur-3', 'kitchen3.jpg', 'Kitchen Set'),
(22, 7, 'Ruang Keluarga-1', 'livingroom1.jpg', 'Living Room'),
(23, 7, 'Ruang Keluarga-2', 'livingroom2.jpg', 'Living Room'),
(24, 7, 'Ruang Keliuarga-3', 'livingroom3.jpg', 'Living Room');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_item`
--
ALTER TABLE `tabel_item`
  ADD CONSTRAINT `tabel_item_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_produk` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
