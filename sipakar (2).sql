-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2018 at 09:24 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sipakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `analisa_hasil`
--

CREATE TABLE IF NOT EXISTS `analisa_hasil` (
  `id_konsul` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` text NOT NULL,
  `kd_tanaman` text NOT NULL,
  `noip` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `nilai_cf` varchar(10) NOT NULL,
  PRIMARY KEY (`id_konsul`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `analisa_hasil`
--

INSERT INTO `analisa_hasil` (`id_konsul`, `nama`, `kelamin`, `alamat`, `pekerjaan`, `kd_tanaman`, `noip`, `tanggal`, `nilai_cf`) VALUES
(1, 'Michelle', 'P', 'Sukabumi', 'Farmer', 'T002', '::1', '2018-06-18', '0'),
(2, 'irsyad', 'L', 'alamat', 'pekerjaan', 'T001', '::1', '2018-07-29', '0'),
(3, 'irsyad', 'L', 'alamat', 'pekerjaan', 'T001', '::1', '2018-07-29', '0'),
(4, 'jim', 'L', 'sdfs', 'sdf', 'T001', '::1', '2018-07-29', '0'),
(5, 'adf', 'L', 'sdf', 'sdfg', 'T001', '::1', '2018-07-29', '0'),
(6, 'gugur', 'L', 'bunga ', 'di jalan', 'T001', '::1', '2018-07-29', ''),
(7, 'Kucning', 'L', 'lkj', 'lkj', 'T001', '::1', '2018-07-29', '0.9832'),
(8, 'irsyad', 'L', 'adf', 'asdf', 'T001', '::1', '2018-08-01', '0.9776'),
(9, 'irsyad', 'L', 'k', 'asdf', 'T001', '::1', '2018-08-01', '0.9776'),
(10, 'irsyad', 'L', 'k', 'asdf', 'T001', '::1', '2018-08-01', '0.9832'),
(11, 'irsyad', 'L', 'cianjur', 'mahasiswa', 'T001', '::1', '2018-08-08', '0.9712'),
(12, 'fdh', 'L', 'hghj', 'jgh', 'T001', '::1', '2018-08-08', '0.9712'),
(13, 'fdh', 'L', 'hghj', 'jgh', 'T001', '::1', '2018-08-08', '0.9496'),
(14, 'fdh', 'L', 'hghj', 'jgh', 'T001', '::1', '2018-08-08', '0.9496'),
(15, 'irsyad', 'L', 'vmnbn', 'ghj', 'T001', '::1', '2018-08-11', '0.9744'),
(16, 'irsyad', 'L', 'adf', 'asdf', 'T001', '::1', '2018-08-12', '0.9744'),
(17, 'irsyad', 'L', 'adf', 'asdf', 'T001', '::1', '2018-08-12', '0.9744'),
(18, 'irsyad', 'L', 'adf', 'asdf', 'T002', '::1', '2018-08-12', '0.97312'),
(19, 'irsyad', 'L', 'sukabumi', 'mahasiswa', 'T015', '::1', '2018-08-12', '0.9744'),
(20, 'irsyad', 'L', 'sukabumi', 'mahasiswa', 'T015', '::1', '2018-08-13', '0.9744'),
(21, 'irsyad', 'L', 'sukabumi', 'mahasiswa', 'T015', '::1', '2018-08-14', '0.9744'),
(22, 'irsyad', 'L', 'sukabumi', 'mahasiswa', 'T002', '::1', '2018-08-14', '0.9744'),
(23, 'irsyad', 'L', 'sukabumi', 'mahasiswa', 'T015', '::1', '2018-08-14', '0.9744'),
(24, 'gugun', 'L', 'cigunung', 'camat', 'T015', '::1', '2018-09-25', '0.9744');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
  `kd_kriteria` varchar(4) NOT NULL,
  `nm_kriteria` text NOT NULL,
  `ket` text NOT NULL,
  `kel_kriteria` text NOT NULL,
  `bobot` float NOT NULL,
  PRIMARY KEY (`kd_kriteria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`kd_kriteria`, `nm_kriteria`, `ket`, `kel_kriteria`, `bobot`) VALUES
('K001', 'Temperatur Suhu 15-20', '15-20', 'suhu', 0.5),
('K002', 'Temperatur Suhu 21-25', '21-25', 'suhu', 0.5),
('K003', 'Temperatur Suhu 26-32', '26-32', 'suhu', 0.6),
('K004', 'Ketersediaan Air 50-200', '50-200', 'air', 0.8),
('K005', 'Ketersediaan Air 200-500', '200-500', 'air', 0.7),
('K006', 'Ketersediaan Air 500-800', '500-800', 'air', 0.6),
('K007', 'Ketersediaan Air 800-1300', '800-1300', 'air', 0.6),
('K008', 'Kedalaman Tanah > 50', '>50', 'tanah', 0.2),
('K009', 'Kedalaman Tanah > 75', '>75', 'tanah', 0.2),
('K010', 'Kejenuhan Basa > 35', '>35', 'basa', 0.2),
('K011', 'Kejenuhan Basa > 50', '>50', 'basa', 0.3),
('K012', 'pH H2O 5,0-5,9', '6,0-6,5', 'ph', 0.6),
('K013', 'pH H2O 6,0-6,5', '6,6-7,0', 'ph', 0.4),
('K014', 'pH H2O 6,6-7,0', '5,0-5,9', 'ph', 0.7),
('K015', 'pH H2O 7,1-7,9', '7,1-7,9', 'ph', 0.7);

-- --------------------------------------------------------

--
-- Table structure for table `pakar`
--

CREATE TABLE IF NOT EXISTS `pakar` (
  `userID` varchar(30) NOT NULL,
  `passID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pakar`
--

INSERT INTO `pakar` (`userID`, `passID`) VALUES
('admin', '21232f297a57a5a743894a0e4a801f'),
('admin', '21232f297a57a5a743894a0e4a801fc3'),
('admi', '21232f297a57a5a743894a0e4a801fc3'),
('a', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `relasi`
--

CREATE TABLE IF NOT EXISTS `relasi` (
  `kd_tanaman` varchar(4) NOT NULL,
  `kd_kriteria` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relasi`
--

INSERT INTO `relasi` (`kd_tanaman`, `kd_kriteria`) VALUES
('T001', 'K011'),
('T001', 'K008'),
('T001', 'K006'),
('T001', 'K001'),
('T001', 'K015'),
('T004', 'K010'),
('T004', 'K009'),
('T004', 'K007'),
('T004', 'K002'),
('T004', 'K015'),
('T005', 'K011'),
('T005', 'K009'),
('T005', 'K007'),
('T005', 'K002'),
('T005', 'K014'),
('T006', 'K011'),
('T006', 'K009'),
('T006', 'K005'),
('T006', 'K001'),
('T006', 'K015'),
('T007', 'K011'),
('T007', 'K009'),
('T007', 'K005'),
('T007', 'K001'),
('T007', 'K014'),
('T008', 'K010'),
('T008', 'K009'),
('T008', 'K007'),
('T008', 'K003'),
('T008', 'K012'),
('T009', 'K010'),
('T009', 'K009'),
('T009', 'K004'),
('T009', 'K001'),
('T009', 'K013'),
('T010', 'K010'),
('T010', 'K009'),
('T010', 'K005'),
('T010', 'K001'),
('T010', 'K013'),
('T011', 'K010'),
('T011', 'K008'),
('T011', 'K006'),
('T011', 'K002'),
('T011', 'K014'),
('T012', 'K010'),
('T012', 'K008'),
('T012', 'K007'),
('T012', 'K002'),
('T012', 'K013'),
('T013', 'K010'),
('T013', 'K008'),
('T013', 'K005'),
('T013', 'K003'),
('T013', 'K013'),
('T014', 'K011'),
('T014', 'K009'),
('T014', 'K006'),
('T014', 'K003'),
('T014', 'K014'),
('T015', 'K010'),
('T015', 'K008'),
('T015', 'K007'),
('T015', 'K002'),
('T015', 'K012'),
('T016', 'K010'),
('T016', 'K008'),
('T016', 'K006'),
('T016', 'K003'),
('T016', 'K014'),
('T017', 'K011'),
('T017', 'K008'),
('T017', 'K006'),
('T017', 'K003'),
('T017', 'K014'),
('T018', 'K011'),
('T018', 'K009'),
('T018', 'K004'),
('T018', 'K003'),
('T018', 'K013'),
('T019', 'K010'),
('T019', 'K008'),
('T019', 'K006'),
('T019', 'K001'),
('T019', 'K014'),
('T020', 'K010'),
('T020', 'K009'),
('T020', 'K007'),
('T020', 'K002'),
('T020', 'K013'),
('T002', 'K011'),
('T002', 'K008'),
('T002', 'K005'),
('T002', 'K001'),
('T002', 'K012'),
('T003', 'K011'),
('T003', 'K008'),
('T003', 'K006'),
('T003', 'K002'),
('T003', 'K014');

-- --------------------------------------------------------

--
-- Table structure for table `tanaman`
--

CREATE TABLE IF NOT EXISTS `tanaman` (
  `kd_tanaman` varchar(4) NOT NULL,
  `nm_tanaman` text NOT NULL,
  `info_tanaman` text NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`kd_tanaman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanaman`
--

INSERT INTO `tanaman` (`kd_tanaman`, `nm_tanaman`, `info_tanaman`, `detail`) VALUES
('T001', 'Bawang Merah, Bawang Putih, Brokoli, Gandum', 'Keterangan', 'Detail'),
('T002', 'Biet, Wortel', 'Keterangan', 'Detail'),
('T003', 'Belewah, Tomat Buah, Tomat Sayur, Kubis', 'keterangan', 'detail'),
('T004', 'Cabai Merah, Kedelai', 'keterangan', 'detail'),
('T005', 'Jagung, Ubi Jalar', 'keterangan', 'detail'),
('T006', 'Kacang Arab', 'keterangan', 'detail'),
('T007', 'Kacang Panjang, Kacang Hijau', 'keterangan', 'detail'),
('T008', 'Kacang Tanah, Paprika', 'keterangan', 'detail'),
('T009', 'Kentang', 'keterangan', 'detail'),
('T010', 'Lobak, Sawi', 'keterangan', 'detail'),
('T011', 'Melon, Mentimun', 'keterangan', 'detail'),
('T012', 'Nanas', 'keterangan', 'detail'),
('T013', 'Padi Gogo', 'keterangan', 'detail'),
('T014', 'Padi Tadahujan, Padi Sawah', 'keterangan', 'detail'),
('T015', 'Pare', 'Keterangan', 'Detail'),
('T016', 'Semangka', 'Keterangan', 'Detail'),
('T017', 'Sorgum', 'Keterangan', 'Detail'),
('T018', 'Talas', 'Keterangan', 'Detail'),
('T019', 'Terung', 'Keterangan', 'Detail'),
('T020', 'Ubi Kayu', 'Keterangan', 'Detail');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_analisa`
--

CREATE TABLE IF NOT EXISTS `tmp_analisa` (
  `noip` varchar(30) NOT NULL,
  `kd_tanaman` varchar(4) NOT NULL,
  `kd_kriteria` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_analisa`
--

INSERT INTO `tmp_analisa` (`noip`, `kd_tanaman`, `kd_kriteria`) VALUES
('::1', 'T004', 'K010'),
('::1', 'T008', 'K010'),
('::1', 'T009', 'K010'),
('::1', 'T010', 'K010'),
('::1', 'T011', 'K010'),
('::1', 'T012', 'K010'),
('::1', 'T013', 'K010'),
('::1', 'T015', 'K010'),
('::1', 'T016', 'K010'),
('::1', 'T019', 'K010'),
('::1', 'T020', 'K010'),
('::1', 'T001', 'K008'),
('::1', 'T011', 'K008'),
('::1', 'T012', 'K008'),
('::1', 'T013', 'K008'),
('::1', 'T015', 'K008'),
('::1', 'T016', 'K008'),
('::1', 'T017', 'K008'),
('::1', 'T019', 'K008'),
('::1', 'T002', 'K008'),
('::1', 'T003', 'K008'),
('::1', 'T001', 'K001'),
('::1', 'T006', 'K001'),
('::1', 'T007', 'K001'),
('::1', 'T009', 'K001'),
('::1', 'T010', 'K001'),
('::1', 'T019', 'K001'),
('::1', 'T002', 'K001'),
('::1', 'T009', 'K004'),
('::1', 'T018', 'K004'),
('::1', 'T008', 'K012'),
('::1', 'T015', 'K012'),
('::1', 'T002', 'K012');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_pasien`
--

CREATE TABLE IF NOT EXISTS `tmp_pasien` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `noip` varchar(20) NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tmp_pasien`
--

INSERT INTO `tmp_pasien` (`id`, `nama`, `kelamin`, `alamat`, `pekerjaan`, `noip`, `tanggal`) VALUES
(24, 'gugun', 'L', 'cigunung', 'camat', '::1', '2018-09-25 18:39:36');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
