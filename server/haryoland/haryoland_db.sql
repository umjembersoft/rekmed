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
-- Database: `haryoland_db`
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `id_pasien`
--

INSERT INTO `id_pasien` (`kategori`, `nama`, `alamat`, `tgl_lahir`, `status`, `agama`, `id_detail`) VALUES
(2, 'sumarjono', 'gundungan lor rt5 rw 6, margorejo , tempel , sleman', '1984-12-18', 'kawin', 'islam', 9),
(2, 'sri lestari', 'kadipolo kulon salam magelang', '1990-03-05', 'kawin', 'islam', 10),
(2, 'awang eka hermawan', 'kuningan g.24 ct depok sleman', '1978-06-10', 'kawin', 'islam', 7),
(1, 'nurdiana hera', 'wonocatur no 372 rt 7 rw 24 bantul', '1992-03-16', 'kawin', 'islam', 8),
(1, 'sukarwanto', 'demangan kidul, gang curut, no.4 yogyakarta', '1966-12-08', 'kawin', 'islam', 5),
(2, 'yanuar ryska sony', 'prambanan, kalasan, sleman, yogyakarta', '1987-05-12', 'belum kawin', 'islam', 6),
(1, 'fadlun husaini', 'karang waru lor TR II/310 rt2 rw 32 yogyakarta', '1984-12-12', 'kawin', 'islam', 11),
(1, 'ridho antono', 'taman purwomartani elok no 17 sleman', '1996-06-25', 'belum kawin', 'islam', 12),
(2, 'slamet parmanto', 'sambisari rt5 rw32, CC, depok sleman', '1993-12-10', 'belumn kawin', 'islam', 13);

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
(5, '2009-12-14 07:49:42', 'panu, kadas,kurap, kutu air', 'suntik anti jamur', 'dr. boike'),
(6, '1996-12-10 07:55:10', 'diare, muntaber', 'pemberian oralit', 'dr chandra'),
(7, '2009-12-13 07:57:44', 'demam berdarah', 'infus, minum anti biotik.', 'dr. kurniawn'),
(8, '1992-05-11 08:20:06', 'gusi berdarah, sariawan', 'pemberian vit C', 'dr. sigit'),
(9, '2009-03-02 08:48:07', 'pusing', 'pemberian obat pusing', 'dr, didin'),
(10, '1992-12-08 09:15:30', 'saraf', 'suntik anti rabies', 'dr sigit'),
(11, '1994-11-27 09:17:22', 'kaki gajah', 'pemberian obat cacing', 'dr didin'),
(12, '2009-12-29 09:19:21', 'gagar otak', 'operasi otak', 'dr. sigit'),
(13, '1993-04-08 09:21:43', 'mencret', 'suntik anti mencret', 'dr. arfan');
