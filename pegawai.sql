-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 12, 2020 at 12:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `login_terakhir` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama_lengkap`, `email`, `password`, `login_terakhir`) VALUES
(1, 'Administrator', 'admin@gmail.com', 'admin123', '2020-02-12 11:43:19');

-- --------------------------------------------------------

--
-- Table structure for table `kesehatan`
--

CREATE TABLE `kesehatan` (
  `id` varchar(10) CHARACTER SET latin1 NOT NULL,
  `pendaftaran_id` varchar(11) CHARACTER SET latin1 DEFAULT NULL,
  `kesehatan_nilai` int(3) DEFAULT NULL,
  `kesehatan_bobot` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kesehatan`
--

INSERT INTO `kesehatan` (`id`, `pendaftaran_id`, `kesehatan_nilai`, `kesehatan_bobot`) VALUES
('SEHAT00001', 'DAFTAR00001', 0, 25),
('SEHAT00002', 'DAFTAR00002', 0, 25),
('SEHAT00003', 'DAFTAR00003', 0, 25),
('SEHAT00004', 'DAFTAR00004', 0, 25),
('SEHAT00005', 'DAFTAR00005', 0, 25),
('SEHAT00006', 'DAFTAR00006', NULL, NULL),
('SEHAT00007', 'DAFTAR00007', 0, 25);

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id` varchar(10) CHARACTER SET latin1 NOT NULL,
  `provinsi_id` char(2) CHARACTER SET latin1 NOT NULL,
  `judul` text CHARACTER SET latin1 DEFAULT NULL,
  `deskripsi` text CHARACTER SET latin1 DEFAULT NULL,
  `kuota` int(3) DEFAULT NULL,
  `tipe` enum('fulltime','kontrak','magang','') CHARACTER SET latin1 NOT NULL,
  `mulai_pendaftaran` date NOT NULL,
  `akhir_pendaftaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id`, `provinsi_id`, `judul`, `deskripsi`, `kuota`, `tipe`, `mulai_pendaftaran`, `akhir_pendaftaran`) VALUES
('LOKER00001', '31', 'Electrical Engineering PLN Pusat', 'Mantap Dong', 20, 'fulltime', '2020-01-01', '2020-01-05'),
('LOKER00002', '16', 'Informatics Engineering PLN Palembang', NULL, 20, 'fulltime', '2020-01-10', '2020-01-23'),
('LOKER00003', '91', 'Mechanical Engineer Papua PLN Area Jayapura', '', 25, 'fulltime', '2020-01-13', '2020-02-14'),
('LOKER00004', '17', 'PNS Duri Kosambi', NULL, 25, 'fulltime', '2020-01-20', '2020-01-31'),
('LOKER00005', '11', 'Data Engineer PT ABC', NULL, 25, 'fulltime', '2020-01-16', '2020-01-31'),
('LOKER00006', '35', 'Business Analyst PT ABC', NULL, 25, 'fulltime', '2020-01-16', '2020-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `pemberkasan`
--

CREATE TABLE `pemberkasan` (
  `id` int(10) NOT NULL,
  `user_id` varchar(11) CHARACTER SET latin1 DEFAULT NULL,
  `file_ktp_upload` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `file_kk_upload` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `file_ijazah_skl_upload` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `file_skck_upload` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `file_surat_domisili_upload` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `file_cv_upload` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `pemberkasan_nilai` int(3) DEFAULT NULL,
  `pemberkasan_bobot` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemberkasan`
--

INSERT INTO `pemberkasan` (`id`, `user_id`, `file_ktp_upload`, `file_kk_upload`, `file_ijazah_skl_upload`, `file_skck_upload`, `file_surat_domisili_upload`, `file_cv_upload`, `pemberkasan_nilai`, `pemberkasan_bobot`) VALUES
(1, 'USER000002', 'USER000002_ktpfile_upload.jpeg', NULL, NULL, 'USER000002_skckfile_upload.jpg', 'USER000002_sdfile_upload.jpg', 'USER000002_cvfile_upload.docx', 4, 50),
(2, 'USER000001', 'USER000001_ktpfile_upload.jpg', 'USER000001_kkfile_upload.jpg', NULL, 'USER000001_skckfile_upload.jpg', 'USER000001_sdfile_upload.pdf', NULL, 4, 50),
(3, 'USER000003', 'USER000003_ktpfile_upload.pdf', NULL, 'USER000003_ijazahfile_upload.jpg', 'USER000003_skckfile_upload.jpg', NULL, 'USER000003_cvfile_upload.jpg', 4, 50),
(4, 'USER000004', NULL, 'USER000004_kkfile_upload.pdf', 'USER000004_ijazahfile_upload.jpg', NULL, NULL, 'USER000004_cvfile_upload.pdf', 3, 25),
(5, 'USER000005', 'USER000005_ktpfile_upload.jpg', 'USER000005_kkfile_upload.jpeg', NULL, 'USER000005_skckfile_upload.jpeg', NULL, NULL, 3, 25),
(6, 'USER000006', NULL, NULL, NULL, NULL, NULL, NULL, 0, 25);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` varchar(11) CHARACTER SET latin1 NOT NULL,
  `lowongan_id` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `user_id` varchar(11) CHARACTER SET latin1 DEFAULT NULL,
  `tgl_daftar` date DEFAULT NULL,
  `pendaftaran_status` enum('proses','lulus','gagal') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `lowongan_id`, `user_id`, `tgl_daftar`, `pendaftaran_status`) VALUES
('DAFTAR00001', 'LOKER00003', 'USER000002', '2020-01-21', 'lulus'),
('DAFTAR00002', 'LOKER00003', 'USER000001', '2020-01-30', 'lulus'),
('DAFTAR00003', 'LOKER00003', 'USER000004', '2020-01-30', 'lulus'),
('DAFTAR00004', 'LOKER00003', 'USER000005', '2020-01-30', 'lulus'),
('DAFTAR00005', 'LOKER00004', 'USER000003', '2020-01-31', 'lulus'),
('DAFTAR00006', 'LOKER00006', 'USER000006', '2020-01-31', 'proses'),
('DAFTAR00007', 'LOKER00003', 'USER000006', '2020-02-11', 'lulus');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id` char(2) CHARACTER SET latin1 NOT NULL,
  `nama` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id`, `nama`) VALUES
('11', 'ACEH'),
('12', 'SUMATERA UTARA'),
('13', 'SUMATERA BARAT'),
('14', 'RIAU'),
('15', 'JAMBI'),
('16', 'SUMATERA SELATAN'),
('17', 'BENGKULU'),
('18', 'LAMPUNG'),
('19', 'KEPULAUAN BANGKA BELITUNG'),
('21', 'KEPULAUAN RIAU'),
('31', 'DKI JAKARTA'),
('32', 'JAWA BARAT'),
('33', 'JAWA TENGAH'),
('34', 'DI YOGYAKARTA'),
('35', 'JAWA TIMUR'),
('36', 'BANTEN'),
('51', 'BALI'),
('52', 'NUSA TENGGARA BARAT'),
('53', 'NUSA TENGGARA TIMUR'),
('61', 'KALIMANTAN BARAT'),
('62', 'KALIMANTAN TENGAH'),
('63', 'KALIMANTAN SELATAN'),
('64', 'KALIMANTAN TIMUR'),
('65', 'KALIMANTAN UTARA'),
('71', 'SULAWESI UTARA'),
('72', 'SULAWESI TENGAH'),
('73', 'SULAWESI SELATAN'),
('74', 'SULAWESI TENGGARA'),
('75', 'GORONTALO'),
('76', 'SULAWESI BARAT'),
('81', 'MALUKU'),
('82', 'MALUKU UTARA'),
('91', 'PAPUA BARAT'),
('94', 'PAPUA');

-- --------------------------------------------------------

--
-- Table structure for table `psikotest`
--

CREATE TABLE `psikotest` (
  `id` varchar(10) CHARACTER SET latin1 NOT NULL,
  `pendaftaran_id` varchar(11) CHARACTER SET latin1 DEFAULT NULL,
  `psikotest_nilai` int(3) DEFAULT NULL,
  `psikotest_bobot` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `psikotest`
--

INSERT INTO `psikotest` (`id`, `pendaftaran_id`, `psikotest_nilai`, `psikotest_bobot`) VALUES
('PSIKO00001', 'DAFTAR00001', 95, 100),
('PSIKO00002', 'DAFTAR00002', 83, 50),
('PSIKO00003', 'DAFTAR00003', 70, 25),
('PSIKO00004', 'DAFTAR00004', 70, 25),
('PSIKO00005', 'DAFTAR00005', 98, 100),
('PSIKO00006', 'DAFTAR00006', NULL, NULL),
('PSIKO00007', 'DAFTAR00007', 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `ranking`
--

CREATE TABLE `ranking` (
  `id` int(5) NOT NULL,
  `pendaftaran_id` varchar(11) CHARACTER SET latin1 DEFAULT NULL,
  `ranking_nilai` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ranking`
--

INSERT INTO `ranking` (`id`, `pendaftaran_id`, `ranking_nilai`) VALUES
(16, 'DAFTAR00001', '90.00'),
(17, 'DAFTAR00002', '85.00'),
(18, 'DAFTAR00003', '55.00'),
(19, 'DAFTAR00004', '55.00'),
(20, 'DAFTAR00007', '77.50'),
(21, 'DAFTAR00005', '100.00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(11) NOT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `image_url` varchar(100) DEFAULT NULL,
  `login_terakhir` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nik`, `nama_lengkap`, `tgl_lahir`, `alamat`, `jenis_kelamin`, `email`, `no_hp`, `password`, `image_url`, `login_terakhir`) VALUES
('USER000001', '9171030506960007', 'Muhammad Iriansyah Putra Pratama', '1996-06-05', 'Jl. H Junib No.18', 'L', 'ryanjoker87@gmail.com', '082248080870', 'Pace1996', 'USER000001_image_upload.jpg', '2020-01-30 03:48:36'),
('USER000002', '9171030506960010', 'Ryan Pace Pratama', '1996-06-05', 'Jl. H Junib No. 18 Duri Kosambi', 'L', 'pace@gmail.com', '081344460967', 'pace10', 'USER000002_image_upload.jpg', '2020-02-12 12:42:03'),
('USER000003', '9149014901859018', 'Eqi Seftiyan', '1970-01-01', 'Tigaraksa', 'L', 'eqhie@gmail.com', '081354141927', 'eqhie10', NULL, '2020-02-11 03:25:13'),
('USER000004', '9391414914919414', 'Abdul Ghofur', '1970-01-01', 'Jl. Keramat Raya', 'L', 'abdulghofur@gmail.com', '089989898989', 'abdul10', NULL, '2020-01-30 04:01:28'),
('USER000005', '8787818748158175', 'Abdul Ghandi', '1996-01-09', 'Jl. Duri Kosambi Jakarta Barat', 'L', 'abdulghandi@gmail.com', '981058908989', 'ghandi10', NULL, '2020-01-30 06:33:55'),
('USER000006', '8989898098089089', 'Fahmi Roihanul Firdaus', '1970-01-01', 'Depok Baru', 'L', 'fahmi@gmail.com', '991589108591', 'fahmi10', NULL, '2020-02-11 05:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `wawancara`
--

CREATE TABLE `wawancara` (
  `id` varchar(14) CHARACTER SET latin1 NOT NULL,
  `pendaftaran_id` varchar(11) CHARACTER SET latin1 DEFAULT NULL,
  `wawancara_nilai` int(3) DEFAULT NULL,
  `wawancara_bobot` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wawancara`
--

INSERT INTO `wawancara` (`id`, `pendaftaran_id`, `wawancara_nilai`, `wawancara_bobot`) VALUES
('WAWANCARA00001', 'DAFTAR00001', 70, 25),
('WAWANCARA00002', 'DAFTAR00002', 85, 50),
('WAWANCARA00003', 'DAFTAR00003', 70, 25),
('WAWANCARA00004', 'DAFTAR00004', 70, 25),
('WAWANCARA00005', 'DAFTAR00005', 98, 100),
('WAWANCARA00006', 'DAFTAR00006', NULL, NULL),
('WAWANCARA00007', 'DAFTAR00007', 57, 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kesehatan`
--
ALTER TABLE `kesehatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendaftaran_id` (`pendaftaran_id`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provinsi_id` (`provinsi_id`);

--
-- Indexes for table `pemberkasan`
--
ALTER TABLE `pemberkasan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lowongan_id` (`lowongan_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `psikotest`
--
ALTER TABLE `psikotest`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendaftaran_id` (`pendaftaran_id`);

--
-- Indexes for table `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendaftaran_id` (`pendaftaran_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wawancara`
--
ALTER TABLE `wawancara`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendaftaran_id` (`pendaftaran_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pemberkasan`
--
ALTER TABLE `pemberkasan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ranking`
--
ALTER TABLE `ranking`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kesehatan`
--
ALTER TABLE `kesehatan`
  ADD CONSTRAINT `kesehatan_ibfk_1` FOREIGN KEY (`pendaftaran_id`) REFERENCES `pendaftaran` (`id`);

--
-- Constraints for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD CONSTRAINT `lowongan_ibfk_1` FOREIGN KEY (`provinsi_id`) REFERENCES `provinsi` (`id`);

--
-- Constraints for table `pemberkasan`
--
ALTER TABLE `pemberkasan`
  ADD CONSTRAINT `pemberkasan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_ibfk_1` FOREIGN KEY (`lowongan_id`) REFERENCES `lowongan` (`id`),
  ADD CONSTRAINT `pendaftaran_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `psikotest`
--
ALTER TABLE `psikotest`
  ADD CONSTRAINT `psikotest_ibfk_1` FOREIGN KEY (`pendaftaran_id`) REFERENCES `pendaftaran` (`id`);

--
-- Constraints for table `ranking`
--
ALTER TABLE `ranking`
  ADD CONSTRAINT `ranking_ibfk_1` FOREIGN KEY (`pendaftaran_id`) REFERENCES `pendaftaran` (`id`);

--
-- Constraints for table `wawancara`
--
ALTER TABLE `wawancara`
  ADD CONSTRAINT `wawancara_ibfk_1` FOREIGN KEY (`pendaftaran_id`) REFERENCES `pendaftaran` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
