-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 02, 2010 at 04:53 PM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pkumuhammadiyah_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `id_pasien`
--

CREATE TABLE IF NOT EXISTS `id_pasien` (
  `kategori` int(11) NOT NULL DEFAULT '0',
  `nama` varchar(128) NOT NULL DEFAULT '',
  `alamat` text NOT NULL,
  `tgl_lahir` date NOT NULL DEFAULT '0000-00-00',
  `status` varchar(32) NOT NULL DEFAULT '',
  `agama` varchar(32) NOT NULL DEFAULT '',
  `id_detail` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_detail`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `id_pasien`
--

INSERT INTO `id_pasien` (`kategori`, `nama`, `alamat`, `tgl_lahir`, `status`, `agama`, `id_detail`) VALUES
(2, 'stephen chow', 'maguwoharjo. Sleman', '1972-02-22', 'menikah', 'hindhu', 12),
(2, 'andikano leite ribeiro', 'Sokaraja wetan RT 2/VI banyumas', '1988-12-24', 'lajang', 'islam', 11),
(1, 'muhammad sissoko', 'klitren RW 09.\r\njogjakarta', '1985-11-03', 'lajang', 'islam', 10),
(1, 'Nicolas Anelka', 'kota Gede RT 05/VI', '1978-01-01', 'menikah', 'islam', 9),
(1, 'andhika hadiningrat', 'jalan gejayan Gk 1 no 132', '1988-12-24', 'lajang', 'islam', 5),
(1, 'danawiputra mankunegaran', 'jalan mangkubumi no:182 jogjakarta', '1987-09-12', 'lajang', 'islam', 6),
(2, 'Ratih puspa pesona', 'banguntapan, Bantul.', '1990-12-01', 'lajang', 'islam', 7),
(2, 'mahendra Gatha', 'jalan magelang no 31 G\r\nsleman', '1968-03-21', 'Duda', 'Islam', 8),
(1, 'Ryan Sudarsono', 'Pogung Lor RT 32 RW 11 jogjakarta', '1992-12-02', 'lajang', 'islam', 13),
(1, 'manohara odelia pinot', 'kelantan. Malaysia', '1992-03-04', 'janda', 'islam', 14);

-- --------------------------------------------------------

--
-- Table structure for table `lap_medis`
--

CREATE TABLE IF NOT EXISTS `lap_medis` (
  `id_detail` int(11) NOT NULL DEFAULT '0',
  `tgl_lap` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `diagnosa` varchar(225) NOT NULL DEFAULT '',
  `tindakan` varchar(225) NOT NULL DEFAULT '',
  `petugas` varchar(32) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lap_medis`
--

INSERT INTO `lap_medis` (`id_detail`, `tgl_lap`, `diagnosa`, `tindakan`, `petugas`) VALUES
(5, '2009-04-14 09:00:00', 'gatal gatal di kulit tangan', 'salep antiseptic dan jamur', 'Dr. Andhika Danawiputra'),
(6, '0000-00-00 00:00:00', 'batuk kering, suhu tubuh naik turun', 'obat batuk tablet, sirup turun panas', 'Dr. Agung Mulawarman'),
(7, '0000-00-00 00:00:00', 'mencret, perut mual-mual', 'antibiotik, obat pencahar', 'Dr. fabregas'),
(8, '0000-00-00 00:00:00', 'nyeri lambung, mual-mual', 'vitamin B complex, obat maag', 'Dr. pegy melati sukma'),
(9, '2007-02-01 13:01:00', 'cidera hamstring', 'operasi hamstring, gips', 'Dr. Magdalena'),
(10, '2007-01-01 01:11:31', 'sesak nafas, asma', 'obat asma, oksigen cair', 'Dr. Peter Parker'),
(11, '2006-05-02 21:02:02', 'pendarahan karena operasi', 'operasi lanjut', 'Dr. Vino de Franco'),
(12, '0000-00-00 00:00:00', 'kejang otot, kram otot, asam urat', 'akupuntur, pijat reflesi, aroma terapi, antibiotik', 'Dr. Pegy melati sukma'),
(13, '0000-00-00 00:00:00', 'insomnia, pusing berkepanjangan', 'obat tidur, antibiotik', 'Dr. ajeng kusumawati'),
(14, '0000-00-00 00:00:00', 'luka lebam dan memar', 'cek visum', 'Dr Andhika danawiputra');
