-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 02, 2010 at 04:52 PM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `happyland_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `id_pasien`
--

CREATE TABLE IF NOT EXISTS `id_pasien` (
  `kategori` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `status` varchar(32) NOT NULL,
  `agama` varchar(32) NOT NULL,
  `id_detail` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_detail`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `id_pasien`
--

INSERT INTO `id_pasien` (`kategori`, `nama`, `alamat`, `tgl_lahir`, `status`, `agama`, `id_detail`) VALUES
(1, 'Agus Subandrio', 'jl. pandegaa 3 no. 69 condong catur depok sleman', '1984-12-23', 'Tidak Kawin', 'Katolik', 1),
(1, 'Adi Jumantara', 'Tukangan Tegalpanggung Danurejan Yogyakarta', '1949-01-24', 'Kawin', 'Kristen', 2),
(2, 'Adrian Raditya Ransa', 'Demangan GK 2 / 234 Gondokusuman Yogyakarta', '2007-02-07', 'Tidak Kawin', 'Islam', 3),
(2, 'Kana Candra ', 'Jl. Timoho No. 129 Yogyakarta', '1987-11-24', 'Tidak Kawin', 'Islam', 4);

-- --------------------------------------------------------

--
-- Table structure for table `lap_medis`
--

CREATE TABLE IF NOT EXISTS `lap_medis` (
  `id_detail` int(11) NOT NULL,
  `tgl_lap` datetime NOT NULL,
  `diagnosa` varchar(225) NOT NULL,
  `tindakan` varchar(225) NOT NULL,
  `petugas` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lap_medis`
--

INSERT INTO `lap_medis` (`id_detail`, `tgl_lap`, `diagnosa`, `tindakan`, `petugas`) VALUES
(1, '2000-12-24 13:20:41', 'diare', 'pemberian oralit', 'dr bangun'),
(1, '2003-01-20 00:00:00', 'demam tinggi, muntah muntah', 'suntik antibiotik', 'dr andika');
