-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2020 at 04:22 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `idDokter` int(11) NOT NULL AUTO_INCREMENT,
  `namaDokter` varchar(55) NOT NULL,
  `jenisKelamin` enum('L','P') NOT NULL,
  `tempatLahir` text NOT NULL,
  `tglLahir` date NOT NULL,
  `alamat` text NOT NULL,
  `noTelp` varchar(13) NOT NULL,
  `noIjinPraktek` varchar(20) NOT NULL,
  PRIMARY KEY (`idDokter`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`idDokter`, `namaDokter`, `jenisKelamin`, `tempatLahir`, `tglLahir`, `alamat`, `noTelp`, `noIjinPraktek`) VALUES
(3, 'Angga Fantiya Hermawan', 'L', 'Padalarang', '1999-03-31', 'Padalarang', '089640065487', '3411171142'),
(4, 'Devi Fajar Wati', 'P', 'Majalengka', '1998-03-30', 'Majalengka', '085846213308', '341117112'),
(5, 'Sule', 'L', 'Bandung', '2020-04-15', 'Bandung Barat', '085846213222', '123'),
(6, 'Nanda', 'P', 'Jakarta', '2020-01-01', 'Jakarta', '089722231941', '1234'),
(7, 'Kiki', 'L', 'Jawa Tengah', '2020-01-01', 'Purwakarta', '098137742813', '123577'),
(10, 'Tes Data', 'L', 'Tes', '2020-01-01', 'Jalan cendana Blok G no 10 ', '1234534123', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
