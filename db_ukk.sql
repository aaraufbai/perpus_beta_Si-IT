-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2023 at 08:55 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ukk`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_buku`
--

CREATE TABLE `t_buku` (
  `id_buku` int(11) NOT NULL,
  `nm_buku` varchar(25) NOT NULL,
  `penulis` varchar(25) NOT NULL,
  `penerbit` varchar(25) NOT NULL,
  `th` varchar(25) NOT NULL,
  `halaman` varchar(25) NOT NULL,
  `lorong` varchar(4) NOT NULL,
  `acak` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `t_buku`
--

INSERT INTO `t_buku` (`id_buku`, `nm_buku`, `penulis`, `penerbit`, `th`, `halaman`, `lorong`, `acak`) VALUES
(11, 'B INDONESIA KELAS XII', 'adam', 'tereliye', '2011', '300', 'B-13', '5.04665892'),
(12, 'PWPB kelas X', 'korais', 'tereliye', '2004', '204', 'A-17', '9.24869270'),
(13, 'komik 1', 'AYU HENDRA', 'ERLANGGA', '2004', '204', 'B-12', '0.79506527');

-- --------------------------------------------------------

--
-- Table structure for table `t_login`
--

CREATE TABLE `t_login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','pemilik') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `t_login`
--

INSERT INTO `t_login` (`id_login`, `username`, `password`, `level`) VALUES
(1, 'admin', '$2y$10$Z7fagrbUAzhNYbvMyPtAsOWV7fFBXsRJ8r2/uVpSuKP0QN.wDo9vq', 'admin'),
(2, 'admin1', '202cb962ac59075b964b07152d234b70', 'admin'),
(3, 'admin2', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `t_rak`
--

CREATE TABLE `t_rak` (
  `rak` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `t_rak`
--

INSERT INTO `t_rak` (`rak`) VALUES
('A-1'),
('A-2'),
('A-3'),
('A-4'),
('A-5'),
('A-6'),
('A-7'),
('A-8'),
('A-9'),
('A-10'),
('A-11'),
('A-12'),
('A-13'),
('A-14'),
('A-15'),
('A-16'),
('A-17'),
('A-18'),
('A-19'),
('A-20'),
('B-1'),
('B-2'),
('B-3'),
('B-4'),
('B-5'),
('B-6'),
('B-7'),
('B-8'),
('B-9'),
('B-10'),
('B-11'),
('B-12'),
('B-13'),
('B-14'),
('B-15'),
('B-16'),
('B-17'),
('B-18'),
('B-19'),
('B-20');

-- --------------------------------------------------------

--
-- Table structure for table `t_update`
--

CREATE TABLE `t_update` (
  `id_update` int(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `nm_peminjam` varchar(50) NOT NULL,
  `nm_buku` varchar(30) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `pinjaman` enum('active','non') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `t_update`
--

INSERT INTO `t_update` (`id_update`, `tanggal`, `nm_peminjam`, `nm_buku`, `no_tlp`, `jumlah`, `pinjaman`) VALUES
(24, '2023-01-27', 'ahmad', 'B INDONESIA KELAS XII', '089588793344', '20', 'non'),
(33, '2023-04-05', 'HEDRWAN', 'B INDONESIA KELAS XII', '0856166666666', '54', 'active'),
(34, '2023-04-05', 'irawan', 'PWPB kelas X', '0851561161311', '34', 'active'),
(35, '2023-04-05', 'supra', 'PWPB kelas X', '0856166666666', '34', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_buku`
--
ALTER TABLE `t_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `t_login`
--
ALTER TABLE `t_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `t_update`
--
ALTER TABLE `t_update`
  ADD PRIMARY KEY (`id_update`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_buku`
--
ALTER TABLE `t_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `t_login`
--
ALTER TABLE `t_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_update`
--
ALTER TABLE `t_update`
  MODIFY `id_update` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
