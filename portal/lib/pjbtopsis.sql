-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 28, 2019 at 06:08 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pjbtopsis`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`id_guru`, `nama_guru`, `kelas`) VALUES
(1, 'Achmad Ubaidillah, S.Pd.', 'X LISTRIK 1'),
(2, 'Yuli Nurhidayah, S.Pd.', 'X LISTRIK 2'),
(4, 'M. Nahya Sururi Al-Khaq, S.HI.', 'X LISTRIK 3'),
(5, 'Novie Dyah Windyaningrum, S.Pd.', 'X LISTRIK 4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Instalasi'),
(2, 'Pembangkit');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kehadiran`
--

CREATE TABLE `tbl_kehadiran` (
  `id_kehadiran` varchar(13) NOT NULL,
  `nis` int(4) NOT NULL,
  `sakit` int(1) NOT NULL,
  `ijin` int(1) NOT NULL,
  `alpa` int(1) NOT NULL,
  `terlambat` int(1) NOT NULL,
  `status_kehadiran` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kehadiran`
--

INSERT INTO `tbl_kehadiran` (`id_kehadiran`, `nis`, `sakit`, `ijin`, `alpa`, `terlambat`, `status_kehadiran`) VALUES
('KEHADIRAN0001', 6175, 0, 0, 0, 0, 2),
('KEHADIRAN0002', 6179, 0, 0, 0, 0, 2),
('KEHADIRAN0003', 6187, 0, 0, 0, 0, 2),
('KEHADIRAN0004', 6214, 4, 0, 0, 0, 2),
('KEHADIRAN0005', 6221, 0, 0, 0, 0, 2),
('KEHADIRAN0006', 6232, 0, 0, 0, 0, 2),
('KEHADIRAN0007', 6240, 0, 0, 0, 0, 2),
('KEHADIRAN0008', 6244, 0, 0, 0, 0, 2),
('KEHADIRAN0009', 6248, 1, 3, 0, 0, 2),
('KEHADIRAN0010', 6251, 0, 0, 0, 0, 2),
('KEHADIRAN0011', 6257, 2, 0, 0, 0, 2),
('KEHADIRAN0012', 6273, 0, 0, 0, 0, 2),
('KEHADIRAN0013', 6279, 2, 0, 0, 0, 2),
('KEHADIRAN0014', 6287, 0, 0, 0, 0, 2),
('KEHADIRAN0015', 6288, 0, 0, 0, 0, 2),
('KEHADIRAN0016', 6294, 0, 0, 0, 0, 2),
('KEHADIRAN0017', 6176, 0, 0, 0, 0, 2),
('KEHADIRAN0018', 6177, 0, 0, 0, 0, 2),
('KEHADIRAN0019', 6192, 0, 0, 0, 0, 2),
('KEHADIRAN0020', 6210, 0, 0, 0, 1, 1),
('KEHADIRAN0021', 6211, 0, 0, 0, 0, 2),
('KEHADIRAN0022', 6226, 0, 0, 0, 0, 2),
('KEHADIRAN0023', 6235, 0, 0, 0, 0, 2),
('KEHADIRAN0024', 6245, 0, 0, 0, 0, 2),
('KEHADIRAN0025', 6253, 0, 0, 0, 0, 2),
('KEHADIRAN0026', 6255, 0, 0, 0, 0, 2),
('KEHADIRAN0027', 6258, 0, 0, 0, 0, 2),
('KEHADIRAN0028', 6268, 0, 0, 0, 2, 1),
('KEHADIRAN0029', 6274, 0, 0, 0, 0, 2),
('KEHADIRAN0030', 6281, 0, 0, 0, 2, 1),
('KEHADIRAN0031', 6289, 0, 0, 0, 0, 2),
('KEHADIRAN0032', 6302, 0, 0, 0, 0, 2),
('KEHADIRAN0033', 6173, 3, 0, 0, 0, 2),
('KEHADIRAN0034', 6181, 0, 0, 0, 0, 2),
('KEHADIRAN0035', 6185, 0, 0, 0, 0, 2),
('KEHADIRAN0036', 6219, 0, 0, 0, 0, 2),
('KEHADIRAN0037', 6220, 0, 0, 0, 0, 2),
('KEHADIRAN0038', 6223, 1, 0, 0, 0, 2),
('KEHADIRAN0039', 6230, 0, 0, 0, 0, 2),
('KEHADIRAN0040', 6231, 0, 0, 0, 0, 2),
('KEHADIRAN0041', 6234, 0, 0, 0, 0, 2),
('KEHADIRAN0042', 6236, 0, 0, 0, 0, 2),
('KEHADIRAN0043', 6261, 2, 0, 0, 0, 2),
('KEHADIRAN0044', 6275, 0, 0, 0, 0, 2),
('KEHADIRAN0045', 6278, 7, 0, 0, 0, 2),
('KEHADIRAN0046', 6290, 0, 0, 0, 0, 2),
('KEHADIRAN0047', 6292, 0, 0, 0, 0, 2),
('KEHADIRAN0048', 6300, 0, 0, 0, 0, 2),
('KEHADIRAN0049', 6306, 0, 0, 0, 0, 2),
('KEHADIRAN0050', 6309, 0, 0, 0, 0, 2),
('KEHADIRAN0051', 6182, 0, 0, 0, 0, 2),
('KEHADIRAN0052', 6190, 2, 0, 0, 0, 2),
('KEHADIRAN0053', 6213, 0, 0, 0, 1, 1),
('KEHADIRAN0054', 6239, 1, 0, 0, 2, 1),
('KEHADIRAN0055', 6243, 0, 0, 0, 0, 2),
('KEHADIRAN0056', 6263, 1, 0, 0, 0, 2),
('KEHADIRAN0057', 6284, 0, 0, 0, 0, 2),
('KEHADIRAN0058', 6304, 5, 0, 0, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kepribadian`
--

CREATE TABLE `tbl_kepribadian` (
  `id_kepribadian` varchar(15) NOT NULL,
  `nis` int(4) NOT NULL,
  `nilai_1` int(1) NOT NULL,
  `nilai_2` int(1) NOT NULL,
  `nilai_3` int(1) NOT NULL,
  `nilai_4` int(1) NOT NULL,
  `rata_rata` decimal(4,2) NOT NULL,
  `status_kepribadian` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kepribadian`
--

INSERT INTO `tbl_kepribadian` (`id_kepribadian`, `nis`, `nilai_1`, `nilai_2`, `nilai_3`, `nilai_4`, `rata_rata`, `status_kepribadian`) VALUES
('KEPRIBADIAN0001', 6175, 85, 83, 68, 85, '80.25', 3),
('KEPRIBADIAN0002', 6179, 53, 55, 40, 45, '48.25', 1),
('KEPRIBADIAN0003', 6187, 93, 85, 65, 73, '79.00', 3),
('KEPRIBADIAN0004', 6214, 85, 63, 70, 78, '74.00', 3),
('KEPRIBADIAN0005', 6221, 78, 88, 90, 60, '79.00', 3),
('KEPRIBADIAN0006', 6232, 93, 90, 63, 83, '82.25', 4),
('KEPRIBADIAN0007', 6240, 88, 68, 65, 83, '76.00', 3),
('KEPRIBADIAN0008', 6244, 88, 83, 68, 90, '82.25', 4),
('KEPRIBADIAN0009', 6248, 53, 75, 88, 73, '72.25', 3),
('KEPRIBADIAN0010', 6251, 83, 95, 85, 93, '89.00', 4),
('KEPRIBADIAN0011', 6257, 68, 58, 65, 70, '65.25', 2),
('KEPRIBADIAN0012', 6273, 53, 58, 68, 40, '54.75', 1),
('KEPRIBADIAN0013', 6279, 85, 80, 90, 85, '85.00', 4),
('KEPRIBADIAN0014', 6287, 55, 58, 68, 63, '61.00', 2),
('KEPRIBADIAN0015', 6288, 65, 38, 55, 50, '52.00', 1),
('KEPRIBADIAN0016', 6294, 63, 78, 63, 60, '66.00', 2),
('KEPRIBADIAN0017', 6176, 65, 88, 88, 90, '82.75', 4),
('KEPRIBADIAN0018', 6177, 93, 93, 75, 93, '88.50', 4),
('KEPRIBADIAN0019', 6192, 53, 50, 68, 68, '59.75', 1),
('KEPRIBADIAN0020', 6210, 70, 75, 35, 63, '60.75', 1),
('KEPRIBADIAN0021', 6211, 88, 95, 90, 80, '88.25', 4),
('KEPRIBADIAN0022', 6226, 58, 85, 90, 65, '74.50', 3),
('KEPRIBADIAN0023', 6235, 93, 68, 70, 93, '81.00', 4),
('KEPRIBADIAN0024', 6245, 80, 73, 50, 68, '67.75', 2),
('KEPRIBADIAN0025', 6253, 75, 85, 73, 80, '78.25', 3),
('KEPRIBADIAN0026', 6255, 73, 90, 88, 93, '86.00', 4),
('KEPRIBADIAN0027', 6258, 80, 80, 80, 73, '78.25', 3),
('KEPRIBADIAN0028', 6268, 68, 90, 88, 83, '82.25', 4),
('KEPRIBADIAN0029', 6274, 70, 90, 93, 93, '86.50', 4),
('KEPRIBADIAN0030', 6281, 58, 70, 90, 73, '72.75', 3),
('KEPRIBADIAN0031', 6289, 93, 80, 95, 98, '91.50', 4),
('KEPRIBADIAN0032', 6302, 85, 88, 98, 88, '89.75', 4),
('KEPRIBADIAN0033', 6173, 63, 75, 58, 65, '65.25', 2),
('KEPRIBADIAN0034', 6181, 73, 90, 78, 58, '74.75', 3),
('KEPRIBADIAN0035', 6185, 53, 63, 70, 70, '64.00', 2),
('KEPRIBADIAN0036', 6219, 70, 60, 73, 68, '67.75', 2),
('KEPRIBADIAN0037', 6220, 50, 55, 33, 58, '49.00', 1),
('KEPRIBADIAN0038', 6223, 75, 60, 88, 90, '78.25', 3),
('KEPRIBADIAN0039', 6230, 65, 53, 58, 75, '62.75', 2),
('KEPRIBADIAN0040', 6231, 85, 80, 80, 80, '81.25', 4),
('KEPRIBADIAN0041', 6234, 58, 40, 58, 45, '50.25', 1),
('KEPRIBADIAN0042', 6236, 53, 60, 73, 70, '64.00', 2),
('KEPRIBADIAN0043', 6261, 80, 65, 48, 68, '65.25', 2),
('KEPRIBADIAN0044', 6275, 85, 70, 68, 73, '74.00', 3),
('KEPRIBADIAN0045', 6278, 88, 65, 55, 53, '65.25', 2),
('KEPRIBADIAN0046', 6290, 63, 63, 60, 75, '65.25', 2),
('KEPRIBADIAN0047', 6292, 80, 95, 80, 75, '82.50', 4),
('KEPRIBADIAN0048', 6300, 65, 90, 85, 90, '82.50', 4),
('KEPRIBADIAN0049', 6306, 85, 93, 75, 93, '86.50', 4),
('KEPRIBADIAN0050', 6309, 93, 80, 65, 83, '80.25', 3),
('KEPRIBADIAN0051', 6182, 55, 60, 88, 68, '67.75', 2),
('KEPRIBADIAN0052', 6190, 65, 55, 78, 75, '68.25', 2),
('KEPRIBADIAN0053', 6213, 90, 65, 65, 70, '72.50', 3),
('KEPRIBADIAN0054', 6239, 68, 68, 68, 63, '66.75', 2),
('KEPRIBADIAN0055', 6243, 78, 85, 78, 90, '82.75', 4),
('KEPRIBADIAN0056', 6263, 65, 85, 85, 68, '75.75', 3),
('KEPRIBADIAN0057', 6284, 65, 78, 78, 68, '72.25', 3),
('KEPRIBADIAN0058', 6304, 58, 63, 55, 78, '63.50', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kesehatanfisik`
--

CREATE TABLE `tbl_kesehatanfisik` (
  `id_kesehatanfisik` varchar(12) NOT NULL,
  `nis` int(4) NOT NULL,
  `tb` int(3) NOT NULL,
  `warna` int(2) NOT NULL,
  `lari` int(1) NOT NULL,
  `tht` int(1) NOT NULL,
  `status_kesehatanfisik` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kesehatanfisik`
--

INSERT INTO `tbl_kesehatanfisik` (`id_kesehatanfisik`, `nis`, `tb`, `warna`, `lari`, `tht`, `status_kesehatanfisik`) VALUES
('KESFISIK0001', 6175, 163, 0, 1, 0, 2),
('KESFISIK0002', 6179, 165, 0, 1, 0, 2),
('KESFISIK0003', 6187, 154, 0, 1, 0, 2),
('KESFISIK0004', 6214, 167, 0, 1, 0, 2),
('KESFISIK0005', 6221, 169, 0, 1, 0, 2),
('KESFISIK0006', 6232, 146, 0, 1, 0, 1),
('KESFISIK0007', 6240, 153, 0, 1, 0, 2),
('KESFISIK0008', 6244, 147, 0, 1, 0, 1),
('KESFISIK0009', 6248, 172, 0, 1, 0, 2),
('KESFISIK0010', 6251, 154, 0, 1, 0, 2),
('KESFISIK0011', 6257, 160, 0, 1, 0, 2),
('KESFISIK0012', 6273, 0, 0, 0, 0, 1),
('KESFISIK0013', 6279, 163, 0, 1, 0, 2),
('KESFISIK0014', 6287, 159, 0, 1, 0, 2),
('KESFISIK0015', 6288, 160, 0, 1, 0, 2),
('KESFISIK0016', 6294, 153, -3, 1, 0, 1),
('KESFISIK0017', 6176, 165, 0, 1, 0, 2),
('KESFISIK0018', 6177, 170, 0, 1, 0, 2),
('KESFISIK0019', 6192, 176, 0, 1, 0, 2),
('KESFISIK0020', 6210, 164, 0, 1, 0, 2),
('KESFISIK0021', 6211, 158, 0, 1, 0, 1),
('KESFISIK0022', 6226, 179, 0, 1, 0, 2),
('KESFISIK0023', 6235, 0, 0, 0, 0, 1),
('KESFISIK0024', 6245, 0, 0, 0, 0, 1),
('KESFISIK0025', 6253, 169, 0, 1, 0, 2),
('KESFISIK0026', 6255, 166, 0, 1, 0, 2),
('KESFISIK0027', 6258, 165, 0, 1, 0, 2),
('KESFISIK0028', 6268, 153, 0, 1, 0, 2),
('KESFISIK0029', 6274, 153, 0, 1, 0, 2),
('KESFISIK0030', 6281, 183, 0, 1, 0, 2),
('KESFISIK0031', 6289, 157, 0, 1, 0, 2),
('KESFISIK0032', 6302, 160, 0, 1, 0, 2),
('KESFISIK0033', 6173, 178, 0, 1, 0, 2),
('KESFISIK0034', 6181, 160, 0, 1, 0, 2),
('KESFISIK0035', 6185, 165, 0, 1, 0, 2),
('KESFISIK0036', 6219, 0, 0, 0, 0, 1),
('KESFISIK0037', 6220, 0, 0, 0, 0, 1),
('KESFISIK0038', 6223, 168, 0, 1, 0, 2),
('KESFISIK0039', 6230, 162, 0, 1, 0, 2),
('KESFISIK0040', 6231, 162, 0, 1, 0, 2),
('KESFISIK0041', 6234, 0, 0, 0, 0, 1),
('KESFISIK0042', 6236, 155, 0, 1, 0, 2),
('KESFISIK0043', 6261, 163, 0, 1, 0, 2),
('KESFISIK0044', 6275, 153, 0, 1, 0, 1),
('KESFISIK0045', 6278, 170, 0, 1, 0, 2),
('KESFISIK0046', 6290, 0, 0, 0, 0, 1),
('KESFISIK0047', 6292, 155, 0, 1, 0, 1),
('KESFISIK0048', 6300, 151, 0, 1, 0, 2),
('KESFISIK0049', 6306, 146, 0, 1, 0, 1),
('KESFISIK0050', 6309, 161, 0, 1, 0, 2),
('KESFISIK0051', 6182, 168, 0, 1, 0, 2),
('KESFISIK0052', 6190, 165, 0, 1, 0, 2),
('KESFISIK0053', 6213, 161, 0, 1, 0, 2),
('KESFISIK0054', 6239, 0, 0, 0, 0, 1),
('KESFISIK0055', 6243, 145, 0, 1, 0, 1),
('KESFISIK0056', 6263, 175, 0, 1, 0, 2),
('KESFISIK0057', 6284, 150, 0, 1, 0, 2),
('KESFISIK0058', 6304, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `id_kriteria` varchar(15) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `nilai_terbobot` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`id_kriteria`, `nama_kriteria`, `nilai_terbobot`) VALUES
('KRITERIA01', 'Grafik Remedial', 15),
('KRITERIA02', 'Peringkat Rapor Jurusan', 15),
('KRITERIA03', 'Kehadiran', 20),
('KRITERIA04', 'Kepribadian', 10),
('KRITERIA05', 'Kesehatan & Fisik', 20),
('KRITERIA06', 'Wawancara', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilairemedial`
--

CREATE TABLE `tbl_nilairemedial` (
  `id_nilairemedial` varchar(12) NOT NULL,
  `nis` int(4) NOT NULL,
  `sem_1` int(2) NOT NULL,
  `sem_2` int(2) NOT NULL,
  `sem_3` int(2) NOT NULL,
  `sem_4` int(2) NOT NULL,
  `status_remedial` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nilairemedial`
--

INSERT INTO `tbl_nilairemedial` (`id_nilairemedial`, `nis`, `sem_1`, `sem_2`, `sem_3`, `sem_4`, `status_remedial`) VALUES
('REMEDIAL0001', 6175, 2, 3, 2, 0, 2),
('REMEDIAL0002', 6179, 8, 5, 7, 8, 2),
('REMEDIAL0003', 6187, 1, 0, 1, 1, 2),
('REMEDIAL0004', 6214, 5, 2, 1, 2, 2),
('REMEDIAL0005', 6221, 1, 2, 0, 0, 2),
('REMEDIAL0006', 6232, 0, 1, 0, 0, 2),
('REMEDIAL0007', 6240, 3, 2, 2, 1, 2),
('REMEDIAL0008', 6244, 2, 1, 0, 0, 2),
('REMEDIAL0009', 6248, 5, 4, 3, 2, 2),
('REMEDIAL0010', 6251, 0, 0, 0, 0, 2),
('REMEDIAL0011', 6257, 6, 4, 4, 4, 2),
('REMEDIAL0012', 6273, 11, 10, 8, 4, 2),
('REMEDIAL0013', 6279, 2, 0, 0, 0, 2),
('REMEDIAL0014', 6287, 7, 5, 4, 3, 2),
('REMEDIAL0015', 6288, 5, 6, 6, 4, 2),
('REMEDIAL0016', 6294, 4, 3, 3, 5, 2),
('REMEDIAL0017', 6176, 4, 2, 3, 1, 2),
('REMEDIAL0018', 6177, 1, 0, 0, 0, 2),
('REMEDIAL0019', 6192, 7, 5, 4, 3, 2),
('REMEDIAL0020', 6210, 5, 5, 5, 4, 2),
('REMEDIAL0021', 6211, 3, 1, 2, 1, 2),
('REMEDIAL0022', 6226, 3, 0, 1, 1, 2),
('REMEDIAL0023', 6235, 4, 3, 3, 2, 2),
('REMEDIAL0024', 6245, 5, 6, 6, 2, 2),
('REMEDIAL0025', 6253, 5, 3, 2, 3, 2),
('REMEDIAL0026', 6255, 0, 0, 0, 0, 2),
('REMEDIAL0027', 6258, 6, 5, 5, 2, 2),
('REMEDIAL0028', 6268, 2, 0, 0, 0, 2),
('REMEDIAL0029', 6274, 5, 1, 1, 1, 2),
('REMEDIAL0030', 6281, 4, 2, 1, 1, 2),
('REMEDIAL0031', 6289, 0, 0, 0, 0, 2),
('REMEDIAL0032', 6302, 1, 3, 0, 1, 2),
('REMEDIAL0033', 6173, 8, 5, 3, 2, 2),
('REMEDIAL0034', 6181, 7, 3, 1, 1, 2),
('REMEDIAL0035', 6185, 5, 5, 1, 3, 2),
('REMEDIAL0036', 6219, 1, 6, 2, 3, 2),
('REMEDIAL0037', 6220, 8, 4, 5, 5, 2),
('REMEDIAL0038', 6223, 2, 3, 0, 1, 2),
('REMEDIAL0039', 6230, 7, 3, 2, 4, 2),
('REMEDIAL0040', 6231, 0, 0, 0, 0, 2),
('REMEDIAL0041', 6234, 12, 11, 8, 6, 2),
('REMEDIAL0042', 6236, 6, 5, 2, 2, 2),
('REMEDIAL0043', 6261, 3, 5, 1, 0, 2),
('REMEDIAL0044', 6275, 5, 6, 3, 1, 2),
('REMEDIAL0045', 6278, 14, 8, 9, 6, 2),
('REMEDIAL0046', 6290, 5, 5, 4, 5, 2),
('REMEDIAL0047', 6292, 0, 0, 0, 0, 2),
('REMEDIAL0048', 6300, 3, 2, 1, 0, 2),
('REMEDIAL0049', 6306, 1, 0, 0, 0, 2),
('REMEDIAL0050', 6309, 2, 0, 0, 0, 2),
('REMEDIAL0051', 6182, 5, 3, 1, 3, 2),
('REMEDIAL0052', 6190, 4, 1, 5, 2, 2),
('REMEDIAL0053', 6213, 7, 8, 4, 4, 2),
('REMEDIAL0054', 6239, 3, 4, 4, 5, 1),
('REMEDIAL0055', 6243, 7, 5, 1, 3, 2),
('REMEDIAL0056', 6263, 2, 1, 2, 0, 2),
('REMEDIAL0057', 6284, 1, 1, 0, 1, 2),
('REMEDIAL0058', 6304, 2, 3, 3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ranking`
--

CREATE TABLE `tbl_ranking` (
  `id_ranking` int(3) NOT NULL,
  `nis` int(4) NOT NULL,
  `nilai_ranking` decimal(5,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ranking`
--

INSERT INTO `tbl_ranking` (`id_ranking`, `nis`, `nilai_ranking`) VALUES
(1, 6173, '0.4938'),
(2, 6175, '0.7741'),
(3, 6176, '1.0000'),
(4, 6177, '1.0000'),
(5, 6179, '0.4029'),
(6, 6181, '0.7741'),
(7, 6182, '0.6978'),
(8, 6185, '0.6978'),
(9, 6187, '0.8715'),
(10, 6190, '0.6978'),
(11, 6192, '0.5315'),
(12, 6210, '0.4606'),
(13, 6211, '0.7205'),
(14, 6213, '0.4555'),
(15, 6214, '0.8715'),
(16, 6219, '0.4876'),
(17, 6220, '0.3745'),
(18, 6221, '0.8715'),
(19, 6223, '0.8715'),
(20, 6226, '0.8715'),
(21, 6230, '0.5753'),
(22, 6231, '1.0000'),
(23, 6232, '0.6174'),
(24, 6234, '0.3199'),
(25, 6235, '0.5604'),
(26, 6236, '0.5753'),
(27, 6239, '0.2241'),
(28, 6240, '0.8715'),
(29, 6243, '0.5604'),
(30, 6244, '0.6174'),
(31, 6245, '0.4876'),
(32, 6248, '0.6416'),
(33, 6251, '1.0000'),
(34, 6253, '0.8715'),
(35, 6255, '1.0000'),
(36, 6257, '0.4288'),
(37, 6258, '0.7741'),
(38, 6261, '0.7643'),
(39, 6263, '0.6793'),
(40, 6268, '0.7321'),
(41, 6273, '0.3199'),
(42, 6274, '1.0000'),
(43, 6275, '0.5269'),
(44, 6278, '0.4288'),
(45, 6279, '1.0000'),
(46, 6281, '0.4793'),
(47, 6284, '0.6793'),
(48, 6287, '0.5753'),
(49, 6288, '0.4596'),
(50, 6289, '1.0000'),
(51, 6290, '0.4876'),
(52, 6292, '0.7205'),
(53, 6294, '0.4876'),
(54, 6300, '0.7062'),
(55, 6302, '1.0000'),
(56, 6304, '0.3053'),
(57, 6306, '0.6174'),
(58, 6309, '0.8715');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rapor`
--

CREATE TABLE `tbl_rapor` (
  `id_rapor` varchar(15) NOT NULL,
  `nis` int(4) NOT NULL,
  `peringkat_jurusan` int(4) NOT NULL,
  `status_rapor` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rapor`
--

INSERT INTO `tbl_rapor` (`id_rapor`, `nis`, `peringkat_jurusan`, `status_rapor`) VALUES
('RAPOR0001', 6175, 42, 3),
('RAPOR0002', 6179, 125, 1),
('RAPOR0003', 6187, 23, 4),
('RAPOR0004', 6214, 29, 4),
('RAPOR0005', 6221, 8, 4),
('RAPOR0006', 6232, 4, 4),
('RAPOR0007', 6240, 22, 4),
('RAPOR0008', 6244, 9, 4),
('RAPOR0009', 6248, 87, 2),
('RAPOR0010', 6251, 1, 4),
('RAPOR0011', 6257, 114, 1),
('RAPOR0012', 6273, 123, 1),
('RAPOR0013', 6279, 3, 4),
('RAPOR0014', 6287, 68, 3),
('RAPOR0015', 6288, 89, 2),
('RAPOR0016', 6294, 65, 3),
('RAPOR0017', 6176, 25, 4),
('RAPOR0018', 6177, 5, 4),
('RAPOR0019', 6192, 46, 3),
('RAPOR0020', 6210, 62, 3),
('RAPOR0021', 6211, 19, 4),
('RAPOR0022', 6226, 24, 4),
('RAPOR0023', 6235, 36, 3),
('RAPOR0024', 6245, 54, 3),
('RAPOR0025', 6253, 30, 4),
('RAPOR0026', 6255, 11, 4),
('RAPOR0027', 6258, 45, 3),
('RAPOR0028', 6268, 10, 4),
('RAPOR0029', 6274, 16, 4),
('RAPOR0030', 6281, 35, 1),
('RAPOR0031', 6289, 2, 4),
('RAPOR0032', 6302, 14, 4),
('RAPOR0033', 6173, 86, 2),
('RAPOR0034', 6181, 43, 3),
('RAPOR0035', 6185, 61, 3),
('RAPOR0036', 6219, 56, 3),
('RAPOR0037', 6220, 92, 2),
('RAPOR0038', 6223, 18, 4),
('RAPOR0039', 6230, 57, 3),
('RAPOR0040', 6231, 17, 4),
('RAPOR0041', 6234, 120, 1),
('RAPOR0042', 6236, 63, 3),
('RAPOR0043', 6261, 34, 4),
('RAPOR0044', 6275, 64, 3),
('RAPOR0045', 6278, 128, 1),
('RAPOR0046', 6290, 69, 3),
('RAPOR0047', 6292, 7, 4),
('RAPOR0048', 6300, 27, 4),
('RAPOR0049', 6306, 12, 4),
('RAPOR0050', 6309, 6, 4),
('RAPOR0051', 6182, 58, 3),
('RAPOR0052', 6190, 67, 3),
('RAPOR0053', 6213, 96, 2),
('RAPOR0054', 6239, 98, 2),
('RAPOR0055', 6243, 51, 3),
('RAPOR0056', 6263, 20, 4),
('RAPOR0057', 6284, 32, 4),
('RAPOR0058', 6304, 74, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `nis` int(4) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nama_orang_tua` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nis`, `id_guru`, `id_jurusan`, `nama_siswa`, `jenis_kelamin`, `agama`, `tempat`, `tgl_lahir`, `nama_orang_tua`, `alamat`) VALUES
(6170, 1, 1, 'Abdul Kharim', 'L', 'islam', 'Pasir', '2001-01-04', 'Suwardi', 'Jl. Anusopati Rt. 24 Rw. 03 Sumberpucung Malang'),
(6171, 2, 1, 'Adiptya Prayogi Admaja', 'L', 'islam', 'Riau', '2001-12-07', 'Bambang Sumantri', 'Jl. Flamboyan 14 Rt. 18 Rw. 03 Karangkates Malang'),
(6172, 2, 1, 'Aditya Dwi Agung Nugroho', 'L', 'islam', 'Blitar', '2001-05-26', 'Darwito', 'Rt. 03 Rw. 03 Ngaglik Ngreco Selorejo Blitar'),
(6173, 4, 2, 'Aditya Nur Pratama', 'L', 'islam', 'Malang', '2001-08-26', 'Sholeh Nur Rahmad', 'Rt. 01 Rw. 05 Bulurejo Tumpakrejo Kalipare Malang'),
(6174, 2, 1, 'Aditya Rama Saputra', 'L', 'islam', 'Malang', '2001-07-01', 'Gugus Wahyono', 'Rt. 01 Rw. 07 Kalitelo Kaliasri Kalipare Malang'),
(6175, 1, 2, 'Aghis Wahyu Mahendra', 'L', 'islam', 'Malang', '2000-10-30', 'Darul Khoiri', 'Jl. Flamboyan 16 Rt. 18 Rw. 03 Karangkates Sumberpucung Malang'),
(6176, 2, 2, 'Ahmad Dhani', 'L', 'islam', 'Blitar', '2002-04-18', 'Guntur Puji Wanto', 'Rt. 04 Rw. 06 Ngadri Binangun Blitar'),
(6177, 2, 2, 'Ahmad Fauzi', 'L', 'islam', 'Malang', '2001-11-15', 'Alvian Cholik', 'Rt. 28 Rw. 06 Tawang Sukowilangun Kalipare Malang'),
(6178, 5, 1, 'Ahmad Mujtaba', 'L', 'islam', 'Malang', '2002-01-30', 'Abdurrohman', 'Rt. 15 Rw. 04 Ternyang Sumberpucung Malang'),
(6179, 1, 2, 'Akhmad Thorfaqi Wibowo', 'L', 'islam', 'Malang', '2000-10-26', 'Nurwono', 'Jl. Rambutan 54 Rt. 07 Rw. 01 Karangkates Sumberpucung Malang'),
(6180, 2, 1, 'Aldam Kharisma Tama', 'L', 'islam', 'Malang', '2002-06-06', 'Sugianto', 'Jl. Tengku Umar No.701 Rt. 19 Rw. 07 Sambigede Sumberpucung Malang'),
(6181, 4, 2, 'Aldi Cahyono', 'L', 'islam', 'Malang', '2001-07-26', 'Mis Rianto', 'Jl. Kebonsari Rt. 10 Rw. 02 Kebonsri Ngebruk Sumberpucung Malang'),
(6182, 5, 2, 'Aldi Nur Efendi', 'L', 'islam', 'Tabalong', '2002-08-09', 'Agus Pramono', 'Rt. 03 Rw. 02 Darungan Selorejo Malang'),
(6183, 1, 1, 'Aldi Sanjaya', 'L', 'islam', 'Malang', '2000-10-30', 'Asim', 'Rt. 16 Rw. 04 Krajan Ternyang Sumberpucung Malang'),
(6184, 2, 1, 'Aldo Affan Fernanda', 'L', 'islam', 'Malang', '2001-04-16', 'Winarko', 'Jl. Nusantara 131 Rt. 26 Rw. 03 Sumberpucung Malang'),
(6185, 4, 2, 'Alfan Fajrul Falah', 'L', 'islam', 'Malang', '2001-04-06', 'Joni', 'Jl. Raya No 26 Rt. 25 Rw. 04 Jatikerto Kromengan Malang'),
(6186, 5, 1, 'Amanarul Roziqin', 'L', 'islam', 'Malang', '2001-12-28', 'Heru Sutopo', 'Jl. Kh. Moh. Toha Rt. 29 Rw. 04 Jatikerto Kromengan Malang'),
(6187, 1, 2, 'Anas Tasya Karisma Putri', 'P', 'islam', 'Malang', '2002-05-11', 'Purwo Wardoyo', 'Rt. 25 Rw. 05 Purwosari Peniwen Kromengan Malang'),
(6188, 1, 1, 'Andika Dwi Prakusa', 'L', 'islam', 'Malang', '2000-10-26', 'Yuni Agung Prakoso', 'Jl. Bandeng 559 Rt. 02 Rw. 01 Kauman Bangil Pasuruan'),
(6189, 2, 1, 'Annisa Febrianti', 'P', 'islam', 'Blitar', '2002-02-24', 'Didik Heriyanto', 'Rt. 01 Rw. 02 Kepel Sumberagung Selorejo Blitar'),
(6190, 5, 2, 'Aprilian Yusuf Saputra', 'L', 'islam', 'Malang', '2002-04-12', 'Jono', 'Jl. Asparaga 08 Rt. 19 Rw. 03 Karangkates Sumberpucung Malang'),
(6191, 4, 1, 'Aulin Septiana', 'P', 'islam', 'Malang', '2001-09-13', 'Boiman', 'Rt. 03 Rw. 01 Barisan Arjowilangun Kalipare Malang'),
(6192, 2, 2, 'Bambang Ahmad Rianto', 'L', 'islam', 'Malang', '2002-08-01', 'Wawan Budiatmoko', 'Jl. Pandean Rt. 39 Rw. 06 Ngebruk Sumberpucung Malang'),
(6193, 5, 1, 'Bambang Setyawan', 'L', 'islam', 'Malang', '2001-08-04', 'Bibit', 'Jl. Kh Agus Salim Rt. 05 Rw. 02 Senggreng Sumberpucung Malang'),
(6194, 1, 1, 'Bayu Eka Pratama', 'L', 'islam', 'Blitar', '2001-10-30', 'Puji Santoso', 'Rt. 53 Rw. 13 Dawung Pagerwojo Kesamben Blitar'),
(6195, 2, 1, 'Bayu Ryan Pratama', 'L', 'islam', 'Blitar', '2000-05-27', 'Sudarmanto', 'Rt. 03 Rw. 01 Ngreco Baru Ngreco Selorejo Blitar'),
(6196, 5, 1, 'Berta Berliati Ina Wunga', 'P', 'islam', 'Malang', '2001-07-08', 'Gaspar Geroda Sabon', 'Rt. 03 Rw. 01 Krajan Jatiguwi Sumberpucung Malang'),
(6197, 5, 1, 'Cindi Dwi Yanti', 'P', 'islam', 'Blitar', '2002-01-28', 'Ponimin', 'Rt. 03 Rw. 04 Sidomilayo Sidomulyo Selorejo Blitar'),
(6198, 5, 1, 'David Jodie Sutrisno', 'L', 'islam', 'Surabaya', '2002-03-02', 'Sutrisno', 'Rt. 15 Rw. 04 Darungan Kalirejo Kalipare Malang'),
(6199, 1, 1, 'Daviet Eka Putra', 'L', 'islam', 'Malang', '2001-08-10', 'Pramono', 'Jl. Mentaaraman Rt. 32 Rw. 08 Jatiguwi Sumberpucung Malang'),
(6200, 4, 1, 'Dela Frida Maulida', 'P', 'islam', 'Malang', '2002-06-01', 'Sugianto', 'Jl. Punden Gg.iv Rt. 22 Rw. 03 Jatikerto Kromengan Malang'),
(6201, 2, 1, 'Dewi Safitri', 'P', 'islam', 'Malang', '2002-01-01', 'Surahman', 'Jl. Plaseman Rt. 38 Rw. 05 Jatikerto Kromengan Malang'),
(6202, 4, 1, 'Dexijan Alfito Jainul Rozikin', 'L', 'islam', 'Malang', '2002-01-05', 'Pitoyo Adedy Suleman', 'Rt. 01 Rw. 11 Rekesan Jambuwer Kromengan Malang'),
(6203, 4, 2, 'Dimas Andri Pangestu', 'L', 'islam', 'Malang', '2001-11-28', 'Misenan Andrianto', 'Jl. Lotekol Rt. 66 Rw. 07 Arjowilangun Kalipare Malang'),
(6204, 2, 1, 'Dimas Eka Setiyo Saputro', 'L', 'islam', 'Malang', '2000-07-07', 'Joko Margono', 'Rt. 02 Rw. 01 Ngreco Baru Ngerco Selorejo Blitar'),
(6205, 4, 1, 'Dina Maulana Setyoningrum', 'P', 'islam', 'Blitar', '2002-05-20', 'Rudiono', 'Rt. 01 Rw. 02 Boro Selorejo Blitar'),
(6206, 4, 2, 'Dina Natasya', 'P', 'islam', 'Malang', '2002-01-11', 'Tupan', 'Jl. Pahlawan Trip Rt. 03 Rw. 01 Jatikerto Kromengan Malang'),
(6207, 1, 1, 'Diomeirico Nicles Vernando', 'L', 'islam', 'Malang', '2001-07-06', 'S. Pramono', 'Rt. 07 Rw. 04 Tumpakrejo Kalipare Malang'),
(6208, 1, 1, 'Diyan Novita Anggi', 'P', 'islam', 'Blitar', '2001-08-09', 'Sumarno', 'Rt. 03 Rw. 02 Gunungsari Sidomulyo Selorejo Blitar'),
(6209, 2, 1, 'Dodi Setyawan', 'L', 'islam', 'Malang', '2001-07-03', 'Sugianto', 'Jl. Untung Suropati Rt. 09 Rw. 03 Sambigede Sumberpucung Malang'),
(6210, 2, 2, 'Doni Subroto', 'L', 'islam', 'Malang', '2001-09-01', 'Gatot Subroto', 'Rt. 25 Rw. 06 Glagaharum Jambuwer Kromengan Malang'),
(6211, 2, 2, 'Dwi Anggraini Purwanto', 'L', 'islam', 'Malang', '2001-11-16', 'Kintoko', 'Rt. 06 Rw. 04 Plaosan Wonosari Malang'),
(6212, 4, 1, 'Dwi Nugrahanti', 'P', 'islam', 'Malang', '2001-09-07', 'Ponidi', 'Jl. Jend Basuki Rahmat 58 Rt. 15 Rw. 02 Karangkates Sumberpucung Malang'),
(6213, 5, 2, 'Dwi Wisma Firmansyah', 'L', 'islam', 'Malang', '2002-02-16', 'Sanadi', 'Jl. Jl. Sirsat No.20 A Rt. 13 Rw. 02 Karangkates Sumberpucung Malang'),
(6214, 1, 2, 'Ergik Mei Rusandi', 'L', 'islam', 'Malang', '2000-05-05', 'Rusandi', 'Jl. Jl. Kromodikoro Rt. 03 Rw. 01 Senggreng Sumberpucung Malang'),
(6215, 2, 1, 'Erik Gidion', 'L', 'kristen katolik', 'Malang', '2001-01-07', 'Slamet Budiono', 'Jl. Kodari No 11 Rt. 21 Rw. 04 Ngebruk Sumberpucung Malang'),
(6216, 5, 1, 'Erlita Herlangga', 'P', 'islam', 'Malang', '2001-10-15', 'Citra Dwi Sugianto', 'Jl. Dr.cipto Rt. 07 Rw. 04 Sambigede Sumberpucung Malang'),
(6217, 5, 1, 'Fadiatul Mustaghfiroh', 'P', 'islam', 'Malang', '2001-11-12', 'Muliono', 'Rt. 07 Rw. 01 Plandi Wonosari Malang'),
(6218, 2, 1, 'Fadila Alifia Nurohmah', 'P', 'islam', 'Malang', '2002-11-11', 'Gofur Prayogo', 'Jl. Asparaga Rt. 19 Rw. 03 Karangkates Sumberpucung Malang'),
(6219, 4, 2, 'Farid Saifudin', 'L', 'islam', 'Malang', '2002-04-22', 'Bandi Purwanto', 'Rt. 20 Rw. 05 Krajan Jatiguwi Sumberpucung Malang'),
(6220, 4, 2, 'Faris Aji Sasongko', 'L', 'islam', 'Malang', '2001-08-02', 'Kacipto', 'Jl. Pahlawan Trip Rt. 01 Rw. 01 Latikerto Jatikerto Kromengan Malang'),
(6221, 1, 2, 'Ferry Argadinata', 'L', 'islam', 'Malang', '2002-01-18', 'Karman', 'Jl. Ir. Soekarno Simp Ii Rt. 13 Rw. 03 Jatiguwi Sumberpucung Malang'),
(6222, 1, 1, 'Fia Lestari', 'P', 'islam', 'Blitar', '2002-01-14', 'Mulyadi', 'Rt. 01 Rw. 04 Cungkup Ngrendeng Selorejo Blitar'),
(6223, 4, 2, 'Gilang Agung Prasetyo', 'L', 'islam', 'Malang', '2001-12-17', 'Didik Yuniwantoro', 'Jl. Jend. Basuki Rahmat Rt. 15 Rw. 02 Karangkates Sumberpucung Malang'),
(6224, 5, 1, 'Gusdin Nurwasis', 'L', 'islam', 'Malang', '2002-08-15', 'Patah', 'Jl. Dsn Kaliasem Rt. 06 Rw. 02 Kaliasem Kalipare Malang'),
(6225, 1, 1, 'Hafid Bagus Perdana', 'L', 'islam', 'Malang', '2002-05-28', 'Lasianto', 'Rt. 02 Rw. 04 Tempursari Kulon Sumbertempur Wonosari Malang'),
(6226, 2, 2, 'Hanggayughma Agung Jiwantoko', 'L', 'islam', 'Malang', '2001-05-10', 'Zainal Abidin', 'Jl. Sultan Agung Rt. 24 Rw. 03 Sumberpucung Malang'),
(6227, 4, 1, 'Helmi Fitra Rizaldi', 'L', 'islam', 'Malang', '2001-12-01', 'Kadarusman', 'Jl. Jl. Jokoromo Rt. 30 Rw. 05 Ngebruk Sumberpucung Malang'),
(6228, 2, 1, 'Helmi Musyaffa Setyono', 'L', 'islam', 'Malang', '2001-10-30', 'Sukarmiani', 'Rt. 01 Rw. 01 Kepel Sumberagung Selorejo Blitar'),
(6229, 5, 1, 'Herlana Sandi Saputra', 'L', 'islam', 'Malang', '2002-07-15', 'Slamet', 'Rt. 04 Rw. 01 Kluwut Wonosari Malang'),
(6230, 4, 2, 'Hoki Fatwa Nurfadillah', 'P', 'islam', 'Purworejo', '2001-11-05', 'Suparji', 'Rt. 04 Rw. 01 Dsn. Barisan Arjowilangun Kalipare Malang'),
(6231, 4, 2, 'Huda Nur Rokhim', 'L', 'islam', 'Malang', '2002-03-13', 'Zainuri', 'Jl. Tirtonadi Rt. 23 Rw. 03 Jatikerto Kromengan Malang'),
(6232, 1, 2, 'Ika Dhiah Rosita', 'P', 'islam', 'Malang', '2002-05-04', 'Siswadi', 'Rt. 14 Rw. 02 Krajan Ngadirejo Kromengan Malang'),
(6233, 5, 1, 'Ilham Thariq Firmansyah', 'L', 'islam', 'Malang', '2001-06-01', 'Hasan Nurdin', 'Jl. Kauman I Rt. 17 Rw. 03 Ngebruk Sumberpucung Malang'),
(6234, 4, 2, 'Imam Turmudi', 'L', 'islam', 'Malang', '1999-09-06', 'Winarto', 'Rt. 30 Rw. 07 Jatimulyo Jatiguwi Sumberpucung Malang'),
(6235, 2, 2, 'Imanda Kusuma Kari Putri', 'P', 'islam', 'Malang', '2002-02-07', 'Suroto', 'Jl. Mansari Rt. 02 Rw. 01 Slorok Kromengan Malang'),
(6236, 4, 2, 'Indi Agustina', 'P', 'islam', 'Blitar', '2001-08-28', 'Juri', 'Rt. 04 Rw. 02 Dsn. Gunungsari Sidomulyo Selorejo Blitar'),
(6237, 5, 1, 'Iva Silvianti', 'P', 'Islam', 'Malang', '2001-06-12', 'Roji\'in', 'Rt. 45 Rw. 04 Pangganglele Arjowilangun Kalipare Malang'),
(6238, 5, 1, 'Kinanti Laras Cahyaning Siwi', 'P', 'islam', 'Malang ', '2001-11-27', 'Hari Suprianto', 'Jl. Yos Sodarso Rt. 11 Rw. 04 Sambigede Sumberpucung Malang'),
(6239, 5, 2, 'Krisna Hendava Sentanu', 'L', 'islam', 'Malang', '2002-01-14', 'Sentanu', 'Rt. 02 Rw. 05 Dukuh Tumpangrejo Kebobang Wonosari Malang'),
(6240, 1, 2, 'Leni Nurhayati', 'P', 'islam', 'Malang', '2001-05-06', 'Katiman', 'Rt. 38 Rw. 09 Banduarjo Sumberpetung Kalipare Malang'),
(6241, 2, 1, 'Limma Ambar Wijayanti', 'P', 'islam', 'Blitar', '2001-06-15', 'Sulihono', 'Rt. 04 Rw. 01 Ngreco Baru Ngerco Selorejo Blitar'),
(6242, 5, 1, 'Linda Damayanti', 'P', 'islam', 'Malang', '2001-05-18', 'Sumardi', 'Rt. 17 Rw. 03 Cendol Timur Ngadirejo Kromengan Malang'),
(6243, 5, 2, 'Linda Evi Handayani Putri Bahri', 'P', 'islam', 'Malang', '2002-02-04', 'Saiful Bahri', 'Jl. Sido Makmur 28 Rt. 02 Rw. 01 Ngadilangkung Kepanjen Malang'),
(6244, 1, 2, 'Lisa Emilia Putri', 'P', 'islam', 'Blitar', '2001-11-21', 'Kariono', 'Rt. 04 Rw. 02 Dsn. Gunungsari Sidomulyo Selorejo Blitar'),
(6245, 2, 2, 'Lisa Rinanda', 'P', 'islam', 'Malang', '2002-03-09', 'Agus Budiono', 'Jl. Pahlawan Trip Rt. 03 Rw. 01 Jatikerto Keomengan Malang'),
(6246, 4, 1, 'Lovia Agustina', 'P', 'islam', 'Malang', '2001-08-10', 'M.syarifudin Arif', 'Jl. Pakis 03 Rt. 20 Rw. 03 Karangkates Sumberpucung Malang'),
(6247, 5, 1, 'Ludvika Nur Adelia Dewanti', 'P', 'islam', 'Malang', '2001-12-04', 'Senewan', 'Rt. 52 Rw. 05 Duren Arjowilangun Kalipare Malang'),
(6248, 1, 2, 'Maulana Sheva Fahrezi', 'L', 'islam', 'Malang', '2001-02-18', 'Hadi Prianto', 'Jl. Nusa Indah 07 Rt. 19 Rw. 03 Karangkates Sumberpucung Malang'),
(6249, 1, 1, 'Mayang Mahmudah', 'P', 'islam', 'Malang', '2002-04-17', 'Turiman', 'Jl. Cendrawasih 1 Rt. 19 Rw. 06 Senggreng Sumberpucung Malang'),
(6250, 5, 1, 'Mespin Andayani', 'P', 'islam', 'Blitar', '2001-03-01', 'Sugimin', 'Rt. 01 Rw. 02 Dawung Olak-alen Selorejo Blitar'),
(6251, 1, 2, 'Mirella Caesatama Berliana', 'P', 'islam', 'Blitar', '2002-03-23', 'Kusnadi', 'Rt. 01 Rw. 04 Sembung Pagergunung Kesamben Blitar'),
(6252, 5, 1, 'Mita Patrisia', 'P', 'islam', 'Malang', '2001-10-10', 'Juki', 'Rt. 56 Rw. 05 Duren Arjowilangun Kalipare Malang'),
(6253, 2, 2, 'Mochamad Yusuf Nurohman', 'L', 'islam', 'Malang', '2001-05-21', 'Suwardi', 'Jl. Pandan 08 Rt. 20 Rw. 03 Karangkates Sumberpucung Malang'),
(6254, 2, 1, 'Mochammad Nafa\' Chalimi', 'L', 'Islam', 'Malang', '2002-02-03', 'M. Nurul Huda', 'Jl. Kaliasem Rt. 07 Rw. 02 Kalipare Malang'),
(6255, 2, 2, 'Mochammad Yusuf', 'L', 'islam', 'Malang', '2001-03-26', 'Wignyo Sasono', 'Rt. 10 Rw. 05 Mangun Maguan Ngajum Malang'),
(6256, 2, 1, 'Muchamad Abdullah Rosyid', 'L', 'Islam', 'Malang', '2000-07-23', 'Mochamad Amin Ma\'ruf', 'Jl. Pesantren Rt. 39 Rw. 05 Karangkates Sumberpucung Malang'),
(6257, 1, 2, 'Muhamad Rio Yunianto', 'L', 'islam', 'Malang', '2002-02-24', 'Duddy Heziyanto', 'Rt. 11 Rw. 02 Tumpakmiri Arjosari Kalipare Malang'),
(6258, 2, 2, 'Muhammad El Marbath', 'L', 'islam', 'Malang', '2002-02-18', 'Maulana Syarif Hidayatulloh', 'Jl. A Yani Rt. 23 Rw. 03 Karangkates Sumberpucung Malang'),
(6259, 1, 1, 'Muhammad Firman Adihidayattulloh', 'L', 'islam', 'Malang', '2001-10-02', 'Riadi', 'Rt. 14 Rw. 03 Krantil Karangrejo Kromengan Malang'),
(6260, 5, 1, 'Muhammad Yusuf Asyari Ramadhan', 'L', 'Islam', 'Malang', '2001-04-12', 'Muhammad Musta\'in Asyari', 'Jl. Rambutan Ii/b Rt. 09 Rw. 01 Karangkates Sumberpucung Malang'),
(6261, 2, 2, 'Mukhamad Ainul Yakin', 'L', 'Islam', 'Malang', '2001-08-04', 'Mahfud Zuba\'idi', 'Jl. Anusopati Rt. 24 Rw. 03 Sumberpucung Malang'),
(6262, 1, 1, 'Mutia Nisa Nurjanah', 'P', 'islam', 'Malang', '2000-10-29', 'Rakum', 'Rt. 01 Rw. 05 Plaosan Wonosari Malang'),
(6263, 5, 2, 'Naufal Arrafi Dea Amabel', 'L', 'islam', 'Malang', '2001-09-30', 'Dedy Setyobudi', 'Jl. Waringinarjo Rt. 16 Rw. 05 Senggreng Sumberpucung Malang'),
(6264, 2, 2, 'Ninid Novitasari', 'P', 'islam', 'Blitar', '2000-11-10', 'Sakri', 'Rt. 03 Rw. 02 Ngembul Binangun Blitar'),
(6265, 5, 1, 'Nining Dwi Nur Ardianti', 'P', 'islam', 'Malang', '2001-03-28', 'Sukarmanto', 'Rt. 47 Rw. 05 Duren Arjowilangun Kalipare Malang'),
(6266, 1, 1, 'Nugroho Erwin Wicaksono', 'L', 'islam', 'Blitar', '2002-08-21', 'Edy Supristiyantoro', 'Rt. 13 Rw. 04 Krajan Pagerwojo Kesamben Blitar'),
(6267, 1, 1, 'Nursadi Widianto', 'L', 'islam', 'Malang', '2000-04-07', 'Ngatemin', 'Rt. 09 Rw. 01 Bangelan Wonosari Malang'),
(6268, 2, 2, 'Nurul Rodiyah', 'P', 'islam', 'Malang', '2002-05-07', 'Ponomin', 'Jl. Kawi Rt. 15 Rw. 04 Mangir Mangunrejo Kepanjen Malang'),
(6269, 4, 1, 'Prayogi Bayu Salaksa Putra', 'L', 'islam', 'Malang', '2001-08-12', 'Mujianto', 'Jl. Sidodadi Rt. 34 Rw. 05 Jatikerto Kromengan Malang'),
(6270, 4, 1, 'Rani Dwi Novianti', 'P', 'islam', 'Malang', '2001-11-02', 'Eko Santoso', 'Rt. 01 Rw. 02 Baos Butun Gandusari Blitar'),
(6271, 5, 1, 'Redando Yomawan Oka Putra', 'L', 'Islam', 'Malang', '2001-09-30', 'Dwi Mawan', 'Rt. 24 Rw. 03 Dsn. Cendol Tumur Ngadirejo Kromengan Malang'),
(6272, 2, 1, 'Rendra Agustina', 'P', 'islam', 'Blitar', '2001-08-26', 'Sukarno', 'Rt. 03 Rw. 03 Dsn. Ngadri Ngadri Binangun Blitar'),
(6273, 1, 2, 'Reno Alam Dewa', 'L', 'islam', 'Blitar', '2002-03-03', 'Iwan Budianto', 'Rt. 01 Rw. 09 Sobayan Pedan Klaten'),
(6274, 2, 2, 'Restikasari Dwi Pratiwi', 'P', 'islam', 'Malang', '2001-08-12', 'Sanim', 'Rt. 03 Rw. 04 Plaosan Wonosari Malang'),
(6275, 4, 2, 'Rio Saputra', 'L', 'islam', 'Malang', '2002-04-19', 'Supriono', 'Rt. 03 Rw. 02 Krajan 2 Tumpak Rejo Kalipare Malang'),
(6276, 5, 1, 'Rivane Putri Sari', 'P', 'islam', 'Malang', '2001-10-15', 'Kaspirn', 'Rt. 30 Rw. 03 Pangganglele Arjowilangun Kalipare Malang'),
(6277, 4, 1, 'Riza Amelia', 'P', 'islam', 'Malang', '2001-10-04', 'Jumadi', 'Jl. Tirtonadi Rt. 23 Rw. 03 Jatikerto Kromengan Malang'),
(6278, 4, 2, 'Rizal Rahman Fauzi', 'L', 'islam', 'Malang', '2001-10-07', 'Achmad Aminudin', 'Rt. 07 Rw. 02 Sumberoto Donomulyo Malang'),
(6279, 1, 2, 'Rizki Adi Prayogo', 'L', 'islam', 'Malang', '2002-01-18', 'Sudarsono', 'Jl. J. Sultan Agung 22 Rt. 30 Rw. 03 Sumberpucung Malang'),
(6280, 1, 1, 'Romadhon Nur Rachmad', 'L', 'islam', 'Blitar', '2001-11-23', 'Rahmad Yuwono', 'Rt. 02 Rw. 02 Jarangan Boro Selorejo Blitar'),
(6281, 2, 2, 'Rudi Siswanto', 'L', 'islam', 'Malang', '2001-03-23', 'Yahmin', 'Jl. Kebonsari Rt. 09 Rw. 02 Ngebruk Sumberpucung Malang'),
(6282, 1, 1, 'Sandra Virana', 'P', 'islam', 'Malang', '2001-11-26', 'Kadis Suyanto', 'Jl. Jl. Raya Jatikerto Rt. 18 Rw. 02 Jatikerto Kromengan Malang'),
(6283, 2, 1, 'Sari Ningrum', 'P', 'islam', 'malang', '2001-06-27', 'Kusbiantoro', 'Jl. Kp. Melati 22 Rt. 02 Rw. 01 Sumberpucung Malang'),
(6284, 5, 2, 'Selvi Lestari', 'P', 'islam', 'Malang', '2000-09-19', 'Slamet', 'Jl. Sultan Agung Rt. 30 Rw. 03 Sumberpucung Malang'),
(6285, 4, 1, 'Septian Bagus Satrio', 'L', 'islam', 'Malang', '2001-09-09', 'Bambang Wahyudi', 'Jl. Raya Jatikerto Rt. 32 Rw. 04 Jatikerto Kromengan Malang'),
(6286, 4, 1, 'Septian Dewangga Putra', 'L', 'islam', 'Malang', '2001-09-18', 'Sumarji', 'Jl. Flamboyan 40 Rt. 13 Rw. 03 Pakisaji Malang'),
(6287, 1, 2, 'Shefira Febrianti', 'P', 'islam', 'Malang', '2002-02-10', 'Sunardi', 'Rt. 04 Rw. 09 Banduarjo Sumberpetung Kalipare Malang'),
(6288, 1, 2, 'Shusmita Ria Zati', 'P', 'islam', 'Malang', '2001-12-14', 'Mufron', 'Jl. Raya Senggreng Rt. 12 Rw. 04 Senggreng Sumberpucung Malang'),
(6289, 2, 2, 'Sindi Fatikha Wardani', 'P', 'islam', 'Malang', '2001-03-09', 'Wasito', 'Rt. 04 Rw. 12 Ngajum Malang'),
(6290, 4, 2, 'Sindy Etriska', 'P', 'islam', 'Blitar', '2002-10-30', 'Winarno', 'Rt. 02 Rw. 01 Tunggorono Kalimanis Doko Blitar'),
(6291, 5, 1, 'Slash Berlian Pramana', 'P', 'islam', 'Malang', '2000-06-22', 'Sapto Hadi Pramono', 'Rt. 25 Rw. 05 Tawang Sukowilangun Kalipare Malang'),
(6292, 4, 2, 'Susanti', 'L', 'islam', 'Malang', '2001-05-15', 'Tarman', 'Rt. 22 Rw. 08 Ternyang Sumberpucung Malang'),
(6293, 2, 1, 'Tabrizal Shihafafi', 'L', 'islam', 'Malang', '2003-01-06', 'Musa Abdillah', 'Rt. 05 Rw. 07 Kalitelo Kaliasri Kalipare Malang'),
(6294, 1, 2, 'Tasya Aurel Regulita', 'P', 'islam', 'Malang', '2001-10-06', 'Sugianto', 'Jl. Pisang Candi 59 Rt. 03 Rw. 01 Karangkates Sumberpucung Malang'),
(6295, 4, 1, 'Teddy Marcelino', 'L', 'islam', 'Malang', '2000-03-26', 'Sugeng Hariadi', 'Jl. Jl. Pesantren Rt. 39 Rw. 05 Karangkates Sumberpucung Malang'),
(6296, 5, 1, 'Tegar Dwi Pramudya Paksi', 'L', 'Islam', 'Malang', '2002-07-16', 'Priyanto', 'Rt. 03 Rw. 01 Kluwut Wonosari Malang'),
(6297, 4, 1, 'Titik Krisnawati', 'P', 'islam', 'Malang', '2001-07-25', 'Supidi', 'Jl. Dsn Krajan Rt. 03 Rw. 01 Krajan Jatiguwi Sumberpucung Malang'),
(6298, 5, 1, 'Tryska Selfiana', 'P', 'islam', 'Blitar', '2002-12-21', 'Sutrisno', 'Rt. 01 Rw. 04 Sidomulyo Selorejo Blitar'),
(6299, 1, 1, 'Ulfa Rosalia Indah', 'P', 'islam', 'Malang', '2002-04-05', 'Suhadak', 'Rt. 24 Rw. 06 Krajan Jatiguwi Sumberpucung Malang'),
(6300, 4, 2, 'Vivian Eka Asri Mayda R.', 'P', 'islam', 'Malang', '2002-05-17', 'Imam Buchori', 'Rt. 22 Rw. 06 Ternyang Sumberpucung Malang'),
(6301, 1, 1, 'Wahyu Dewa Yulianda', 'L', 'islam', 'Malang', '2001-07-09', 'Surianto', 'Rt. 02 Rw. 05 Sidomulyo Bangelan Wonosari Malang'),
(6302, 2, 2, 'Wijanarko Imam Syahfudin', 'L', 'islam', 'Malang', '2001-04-09', 'Mardiono', 'Rt. 21 Rw. 05 Glagahharum Jambuwer Kromengan Malang'),
(6303, 4, 1, 'Yahya Dwi Pangestu', 'L', 'islam', 'Malang', '2001-02-06', 'Edi Cahyono', 'Jl. Setaman Rt. 29 Rw. 09 Senggreng Sumberpucung Malang'),
(6304, 5, 2, 'Yanuar Adi Prasetiya', 'L', 'islam', 'Malang', '2002-01-01', 'Suprih Aray', 'Jl. Drian 02 Rt. 01 Rw. 02 Karangkates Sumberpucunh Malang'),
(6305, 1, 1, 'Yopy Wijayanto', 'L', 'islam', 'Malang', '2002-05-20', 'Wijianto', 'Rt. 11 Rw. 04 Krajan Tumpakrejo Kalipare Malang'),
(6306, 4, 2, 'Yunisa Darmayanti', 'P', 'islam', 'Blitar', '2002-06-13', 'Ginah Sujianto', 'Jl. - Rt. 01 Rw. 01 Gunungsari Sidomulyo Selorejo Blitar'),
(6307, 5, 1, 'Yunita Eka Saputri', 'P', 'islam', 'Malang', '2002-01-29', 'Katiran', 'Rt. 37 Rw. 08 Kopral Sukowilangun Kalipare Malang'),
(6308, 5, 1, 'Yusuf Alfandi', 'L', 'islam', 'Blitar', '2001-09-22', 'Warsito', 'Rt. 01 Rw. 02 Sumberwader Sumberagung Selorejo Blitar'),
(6309, 4, 2, 'Yusuf Fahri Maulana', 'L', 'islam', 'Malang', '2001-05-27', 'Cecep Iing Suryadi', 'Rt. 12 Rw. 04 Dadapan Tlogorejo Pagak Malang'),
(6310, 1, 1, 'Zaenal Abidin', 'L', 'islam', 'Malang', '2001-04-17', 'Mad Soleh', 'Jl. Dsn Bangelan Rt. 06 Rw. 02 Bangelan Wonosari Malang');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 1),
(2, 'kajur', 'kajur', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wawancara`
--

CREATE TABLE `tbl_wawancara` (
  `id_wawancara` varchar(13) NOT NULL,
  `nis` int(4) NOT NULL,
  `nilai` int(1) NOT NULL,
  `status_wawancara` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_wawancara`
--

INSERT INTO `tbl_wawancara` (`id_wawancara`, `nis`, `nilai`, `status_wawancara`) VALUES
('WAWANCARA0001', 6175, 1, 2),
('WAWANCARA0002', 6179, 0, 1),
('WAWANCARA0003', 6187, 1, 2),
('WAWANCARA0004', 6214, 1, 2),
('WAWANCARA0005', 6221, 1, 2),
('WAWANCARA0006', 6232, 0, 1),
('WAWANCARA0007', 6240, 1, 2),
('WAWANCARA0008', 6244, 0, 1),
('WAWANCARA0009', 6248, 1, 2),
('WAWANCARA0010', 6251, 1, 2),
('WAWANCARA0011', 6257, 0, 1),
('WAWANCARA0012', 6273, 0, 1),
('WAWANCARA0013', 6279, 1, 2),
('WAWANCARA0014', 6287, 0, 1),
('WAWANCARA0015', 6288, 0, 1),
('WAWANCARA0016', 6294, 0, 1),
('WAWANCARA0017', 6176, 1, 2),
('WAWANCARA0018', 6177, 1, 2),
('WAWANCARA0019', 6192, 0, 1),
('WAWANCARA0020', 6210, 0, 1),
('WAWANCARA0021', 6211, 1, 2),
('WAWANCARA0022', 6226, 1, 2),
('WAWANCARA0023', 6235, 0, 1),
('WAWANCARA0024', 6245, 0, 1),
('WAWANCARA0025', 6253, 1, 2),
('WAWANCARA0026', 6255, 1, 2),
('WAWANCARA0027', 6258, 1, 2),
('WAWANCARA0028', 6268, 1, 2),
('WAWANCARA0029', 6274, 1, 2),
('WAWANCARA0030', 6281, 1, 2),
('WAWANCARA0031', 6289, 1, 2),
('WAWANCARA0032', 6302, 1, 2),
('WAWANCARA0033', 6173, 0, 1),
('WAWANCARA0034', 6181, 1, 2),
('WAWANCARA0035', 6185, 1, 2),
('WAWANCARA0036', 6219, 0, 1),
('WAWANCARA0037', 6220, 0, 1),
('WAWANCARA0038', 6223, 1, 2),
('WAWANCARA0039', 6230, 0, 1),
('WAWANCARA0040', 6231, 1, 2),
('WAWANCARA0041', 6234, 0, 1),
('WAWANCARA0042', 6236, 0, 1),
('WAWANCARA0043', 6261, 1, 2),
('WAWANCARA0044', 6275, 0, 1),
('WAWANCARA0045', 6278, 0, 1),
('WAWANCARA0046', 6290, 0, 1),
('WAWANCARA0047', 6292, 1, 2),
('WAWANCARA0048', 6300, 0, 1),
('WAWANCARA0049', 6306, 0, 1),
('WAWANCARA0050', 6309, 1, 2),
('WAWANCARA0051', 6182, 1, 2),
('WAWANCARA0052', 6190, 1, 2),
('WAWANCARA0053', 6213, 0, 1),
('WAWANCARA0054', 6239, 0, 1),
('WAWANCARA0055', 6243, 0, 1),
('WAWANCARA0056', 6263, 0, 1),
('WAWANCARA0057', 6284, 0, 1),
('WAWANCARA0058', 6304, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `tbl_kehadiran`
--
ALTER TABLE `tbl_kehadiran`
  ADD PRIMARY KEY (`id_kehadiran`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `tbl_kepribadian`
--
ALTER TABLE `tbl_kepribadian`
  ADD PRIMARY KEY (`id_kepribadian`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `tbl_kesehatanfisik`
--
ALTER TABLE `tbl_kesehatanfisik`
  ADD PRIMARY KEY (`id_kesehatanfisik`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tbl_nilairemedial`
--
ALTER TABLE `tbl_nilairemedial`
  ADD PRIMARY KEY (`id_nilairemedial`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `tbl_ranking`
--
ALTER TABLE `tbl_ranking`
  ADD PRIMARY KEY (`id_ranking`);

--
-- Indexes for table `tbl_rapor`
--
ALTER TABLE `tbl_rapor`
  ADD PRIMARY KEY (`id_rapor`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_wawancara`
--
ALTER TABLE `tbl_wawancara`
  ADD PRIMARY KEY (`id_wawancara`),
  ADD KEY `nis` (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_kehadiran`
--
ALTER TABLE `tbl_kehadiran`
  ADD CONSTRAINT `tbl_kehadiran_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tbl_siswa` (`nis`);

--
-- Constraints for table `tbl_kepribadian`
--
ALTER TABLE `tbl_kepribadian`
  ADD CONSTRAINT `tbl_kepribadian_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tbl_siswa` (`nis`);

--
-- Constraints for table `tbl_kesehatanfisik`
--
ALTER TABLE `tbl_kesehatanfisik`
  ADD CONSTRAINT `tbl_kesehatanfisik_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tbl_siswa` (`nis`);

--
-- Constraints for table `tbl_nilairemedial`
--
ALTER TABLE `tbl_nilairemedial`
  ADD CONSTRAINT `tbl_nilairemedial_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tbl_siswa` (`nis`);

--
-- Constraints for table `tbl_rapor`
--
ALTER TABLE `tbl_rapor`
  ADD CONSTRAINT `tbl_rapor_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tbl_siswa` (`nis`);

--
-- Constraints for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD CONSTRAINT `tbl_siswa_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `tbl_guru` (`id_guru`),
  ADD CONSTRAINT `tbl_siswa_ibfk_2` FOREIGN KEY (`id_jurusan`) REFERENCES `tbl_jurusan` (`id_jurusan`);

--
-- Constraints for table `tbl_wawancara`
--
ALTER TABLE `tbl_wawancara`
  ADD CONSTRAINT `tbl_wawancara_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tbl_siswa` (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
