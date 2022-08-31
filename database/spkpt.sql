-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2022 at 01:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spkpt`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alternatif`
--

CREATE TABLE `tbl_alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `kode_alternatif` char(3) NOT NULL,
  `nama_alternatif` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_alternatif`
--

INSERT INTO `tbl_alternatif` (`id_alternatif`, `kode_alternatif`, `nama_alternatif`) VALUES
(19, 'A1', 'Rizal Eka Saputra'),
(20, 'A2', 'Aldi Achmad Syaidi'),
(21, 'A3', 'Asep Ahyani'),
(22, 'A4', 'Rikhwan Prasetyo'),
(23, 'A5', 'Dedi Supardi'),
(24, 'A6', 'Johana Saputra'),
(25, 'A7', 'Bayu Mastopo'),
(26, 'A8', 'Saepudin'),
(27, 'A9', 'Tegar Elmansyah'),
(28, 'A10', 'Wahyudin'),
(29, 'A11', 'Rohadi'),
(30, 'A12', 'Yudi Hermawan'),
(31, 'A13', 'Hadi Siswanto'),
(32, 'A14', 'Nur Wasito'),
(33, 'A15', 'Hasanudin'),
(34, 'A16', 'Imam Mul Ihsan'),
(35, 'A17', 'Eko Sulistiawan'),
(36, 'A18', 'Anton Sulistyo'),
(37, 'A19', 'Ahmad Subianto'),
(38, 'A20', 'Yana Sopiyana'),
(39, 'A21', 'Triana Heri Susila'),
(40, 'A22', 'Ade Firmansyah'),
(41, 'A23', 'Siswanto'),
(42, 'A24', 'Heri Prayitno'),
(43, 'A25', 'Dede Diansah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kecocokan`
--

CREATE TABLE `tbl_kecocokan` (
  `id_kecocokan` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `K1` float DEFAULT NULL,
  `K2` float DEFAULT NULL,
  `K3` float DEFAULT NULL,
  `K4` float DEFAULT NULL,
  `K5` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kecocokan`
--

INSERT INTO `tbl_kecocokan` (`id_kecocokan`, `id_alternatif`, `K1`, `K2`, `K3`, `K4`, `K5`) VALUES
(33, 19, 5, 4, 4, 3, 2),
(34, 20, 5, 4, 4, 4, 3),
(35, 21, 5, 4, 4, 4, 4),
(36, 22, 5, 3, 2, 3, 3),
(37, 23, 5, 4, 3, 5, 4),
(38, 24, 5, 4, 4, 4, 4),
(39, 25, 5, 4, 3, 5, 4),
(40, 26, 5, 4, 4, 4, 2),
(41, 27, 5, 3, 4, 4, 3),
(42, 28, 5, 4, 3, 3, 4),
(43, 29, 5, 4, 4, 4, 2),
(44, 30, 5, 4, 4, 4, 4),
(45, 31, 5, 4, 4, 3, 3),
(46, 32, 5, 4, 4, 4, 4),
(47, 33, 5, 3, 4, 3, 4),
(48, 34, 5, 2, 2, 2, 4),
(49, 35, 5, 4, 4, 5, 3),
(50, 36, 5, 4, 4, 4, 4),
(51, 37, 5, 4, 2, 4, 2),
(52, 38, 5, 4, 4, 5, 4),
(53, 39, 5, 4, 4, 4, 4),
(54, 40, 5, 3, 4, 4, 2),
(55, 41, 5, 4, 4, 3, 4),
(56, 42, 5, 4, 3, 4, 3),
(57, 43, 5, 3, 4, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kode_kriteria` char(3) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `jenis_kriteria` enum('Benefit','Cost') NOT NULL,
  `bobot` int(11) NOT NULL,
  `keterangan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`id_kriteria`, `kode_kriteria`, `nama_kriteria`, `jenis_kriteria`, `bobot`, `keterangan`) VALUES
(1, 'C1', 'Kehadiran', 'Benefit', 30, 'Nilai Kehadiran 30%'),
(2, 'C2', 'Kedisiplinan', 'Benefit', 20, 'Nilai Kedisiplinan 20%'),
(3, 'C3', 'Hasil Kerja', 'Benefit', 20, 'Nilai Hasil Kerja 20%'),
(4, 'C4', 'Kerjasama', 'Benefit', 15, 'Nilai Kerjasama 15%'),
(5, 'C5', 'Kreatifitas', 'Benefit', 15, 'Nilai Kreatifitas 15%');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `C1` int(11) DEFAULT NULL,
  `C2` int(11) DEFAULT NULL,
  `C3` int(11) DEFAULT NULL,
  `C4` int(11) DEFAULT NULL,
  `C5` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id_nilai`, `id_alternatif`, `C1`, `C2`, `C3`, `C4`, `C5`) VALUES
(33, 19, 98, 80, 75, 50, 40),
(34, 20, 100, 70, 87, 70, 53),
(35, 21, 99, 83, 75, 85, 80),
(36, 22, 100, 60, 45, 65, 60),
(37, 23, 97, 75, 67, 96, 85),
(38, 24, 98, 80, 80, 85, 85),
(39, 25, 100, 83, 50, 94, 70),
(40, 26, 100, 71, 75, 80, 48),
(41, 27, 100, 65, 80, 75, 68),
(42, 28, 97, 75, 65, 60, 80),
(43, 29, 100, 85, 77, 88, 40),
(44, 30, 98, 78, 80, 80, 82),
(45, 31, 100, 80, 75, 55, 50),
(46, 32, 99, 70, 75, 70, 78),
(47, 33, 100, 65, 70, 65, 77),
(48, 34, 100, 30, 45, 45, 80),
(49, 35, 95, 75, 87, 92, 50),
(50, 36, 100, 70, 80, 80, 75),
(51, 37, 99, 70, 40, 77, 35),
(52, 38, 100, 70, 70, 95, 80),
(53, 39, 100, 80, 80, 85, 70),
(54, 40, 100, 65, 70, 75, 45),
(55, 41, 96, 83, 83, 60, 80),
(56, 42, 98, 70, 60, 85, 65),
(57, 43, 100, 55, 75, 95, 40);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ranking`
--

CREATE TABLE `tbl_ranking` (
  `id_ranking` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `total_nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ranking`
--

INSERT INTO `tbl_ranking` (`id_ranking`, `id_alternatif`, `total_nilai`) VALUES
(1, 19, 86.5),
(2, 20, 93.25),
(3, 21, 97),
(4, 22, 75.25),
(5, 23, 95),
(6, 24, 97),
(7, 25, 95),
(8, 26, 89.5),
(9, 27, 88.25),
(10, 28, 89),
(11, 29, 89.5),
(12, 30, 97),
(13, 31, 90.25),
(14, 32, 97),
(15, 33, 89),
(16, 34, 71),
(17, 35, 96.25),
(18, 36, 97),
(19, 37, 79.5),
(20, 38, 100),
(21, 39, 97),
(22, 40, 84.5),
(23, 41, 94),
(24, 42, 88.25),
(25, 43, 87.5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id_role`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(16, 'Muhamad Restu', 'restu@gmail.com', '$2y$10$TxEfJZXxXHwJQDuLwvNEeeHHGu.UTEcuj84DHvWHgySXWYecdIbTW', 2, 1, 1661429357),
(17, 'Restu Dayani', 'muh@gmail.com', '$2y$10$iAs21.y9VlJI7C2KtU/LeOxMPd/v7RxAewMKt4G.BNw6B3VMHO99i', 2, 1, 1661429400);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userv`
--

CREATE TABLE `tbl_userv` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_alternatif`
--
ALTER TABLE `tbl_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `tbl_kecocokan`
--
ALTER TABLE `tbl_kecocokan`
  ADD PRIMARY KEY (`id_kecocokan`);

--
-- Indexes for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tbl_ranking`
--
ALTER TABLE `tbl_ranking`
  ADD PRIMARY KEY (`id_ranking`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_userv`
--
ALTER TABLE `tbl_userv`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_alternatif`
--
ALTER TABLE `tbl_alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_kecocokan`
--
ALTER TABLE `tbl_kecocokan`
  MODIFY `id_kecocokan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tbl_ranking`
--
ALTER TABLE `tbl_ranking`
  MODIFY `id_ranking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_userv`
--
ALTER TABLE `tbl_userv`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
