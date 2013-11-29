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
-- Database: `medikclient`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE IF NOT EXISTS `alamat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_rs` varchar(255) NOT NULL,
  `host_rs` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `alamat`
--

INSERT INTO `alamat` (`id`, `nama_rs`, `host_rs`) VALUES
(5, 'happy land', 'http://localhost/happyland/server.php'),
(12, 'haryo land', 'http://localhost/haryoland/server.php'),
(17, 'pantirini', 'http://localhost/pantirini/server.php'),
(14, 'PKU Muhammadiyah', 'http://localhost/pkumuh/server.php');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `nama` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `status` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`nama`, `pass`, `status`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('happy', '56ab24c15b72a457069c5ea42fcfc640', 'hospital'),
('haryo', 'ce0e369a4c03ded7e143b9dbce069cc7', 'hospital'),
('agus', 'fdf169558242ee051cca1479770ebac3', 'user'),
('pku', 'b0454aafc913324e520e2af35ce044dc', 'hospital'),
('pantirini', 'b9199054ccea9604fc149adc55867383', 'hospital'),
('haryo', 'ce0e369a4c03ded7e143b9dbce069cc7', 'hospital'),
('sunu', '822944aad722c90dbea4f1cfa90cf168', 'hospital');
