-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 11:38 AM
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
-- Database: `checkpointubk`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_check_point`
--

CREATE TABLE `data_check_point` (
  `id_check_point` int(11) NOT NULL,
  `tanggal_waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nama_pemeriksa` varchar(50) NOT NULL,
  `sesi_check_point` varchar(10) NOT NULL,
  `area` varchar(100) NOT NULL,
  `photo_bukti` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_check_point`
--

INSERT INTO `data_check_point` (`id_check_point`, `tanggal_waktu`, `nama_pemeriksa`, `sesi_check_point`, `area`, `photo_bukti`, `keterangan`) VALUES
(39, '2022-08-11 08:40:28', 'user', 'Sesi 1', 'Gudang Obat - Belakang', '62f4c07c5f76c.png', ''),
(40, '2022-08-12 09:31:53', 'user', 'Sesi 1', 'trest', '', ''),
(41, '2022-08-12 09:36:19', 'user', 'Sesi 1', 'Gudang Obat - Belakang', '62f61f13abef6.png', ''),
(42, '2022-08-18 01:36:33', 'user', 'Sesi 1', 'Gudang Obat - Belakang', '62fd97a1a3148.png', ''),
(43, '2022-08-18 03:28:39', 'user', 'Sesi 1', 'Gudang Obat - Belakang', '62fdb1e70c75f.png', ''),
(44, '2022-08-18 03:42:29', 'user', 'Sesi 1', 'Gudang Obat - Belakang', '62fdb525319c5.png', ''),
(45, '2022-08-18 03:43:33', 'user', 'Sesi 1', 'Gudang Obat - Belakang', '62fdb5657497b.png', ''),
(46, '2022-08-18 03:47:32', 'user', 'Sesi 1', 'Gudang Obat - Belakang', '62fdb6544c998.png', ''),
(47, '2022-08-18 03:52:13', 'user', 'Sesi 1', 'Gudang Obat - Belakang', '62fdb76dabf43.png', ''),
(48, '2022-08-18 03:52:36', 'user', 'Sesi 1', 'Gudang Obat - Belakang', '62fdb784e553e.png', ''),
(49, '2022-08-18 03:58:44', 'user', 'Sesi 1', 'Gudang Obat - Belakang', '62fdb8f4b2dd3.png', ''),
(50, '2022-08-18 03:59:18', 'user', 'Sesi 1', 'Gudang Obat - Belakang', '62fdb916bdb6b.png', ''),
(51, '2022-08-18 04:02:08', 'user', 'Sesi 1', 'Gudang Obat - Belakang', '62fdb9c0b2cf3.png', ''),
(52, '2022-08-18 04:02:44', 'user', 'Sesi 1', 'Gudang Obat - Belakang', '62fdb9e47cb61.png', ''),
(53, '2022-08-18 04:04:51', 'user', 'Sesi 1', 'Gudang Obat - Belakang', '62fdba6346657.png', ''),
(54, '2022-08-18 04:05:52', 'user', 'Sesi 1', 'Gudang Obat - Belakang', '62fdbaa0d38e0.png', ''),
(55, '2022-08-18 04:18:39', 'user', 'Sesi 1', 'Gudang Obat - Belakang', '62fdbd9f966ac.png', ''),
(56, '2022-08-18 04:19:46', 'user', 'Sesi 1', 'Gudang Obat - Belakang', '62fdbde2836e7.png', ''),
(57, '2022-08-18 04:31:22', 'user', 'Sesi 1', 'Gudang Obat - Belakang', '62fdc09a43645.png', ''),
(58, '2022-08-18 04:33:31', 'user', 'Sesi 1', 'Gudang Obat - Belakang', '62fdc11b2abd2.png', ''),
(59, '2022-08-18 04:34:00', 'user', 'Sesi 1', 'Gudang Obat - Belakang', '62fdc13896068.png', ''),
(60, '2022-08-23 06:26:43', 'user', 'Sesi 2', 'Gudang Obat - Belakang', '62fdc1d160013.png', ''),
(61, '2022-08-23 06:26:12', 'user', 'Sesi 2', 'Gudang Obat - Mushola', '630318d4d5929.png', 'Testing'),
(66, '2022-08-24 07:05:52', 'user', 'Sesi 1', 'dsadsad', '', 'dsadsa'),
(67, '2022-08-24 07:08:26', 'user', 'Sesi 1', 'dsad', '', 'dsadas'),
(68, '2022-08-24 07:08:59', 'user', 'Sesi 1', 'dsadsa', '', 'dsadsa'),
(69, '2022-08-24 07:17:47', 'user', 'sesi 2', 'fdfd', '', 'fdsfds'),
(70, '2022-10-07 03:46:48', 'user', 'sesi 1', 'Gudang Obat - Belakang', '', 'Test'),
(71, '2022-10-07 03:47:44', 'user', 'sesi 1', 'Gudang Obat - Belakang', '', 'Test'),
(72, '2022-10-07 03:55:12', 'user', 'sesi 1', 'Gudang Obat - Belakang', '633fa320aaa0b.png', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `data_jadwal_sesi`
--

CREATE TABLE `data_jadwal_sesi` (
  `id_jadwal` int(11) NOT NULL,
  `sesi` varchar(10) NOT NULL,
  `jam_awal` time NOT NULL,
  `jam_akhir` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_jadwal_sesi`
--

INSERT INTO `data_jadwal_sesi` (`id_jadwal`, `sesi`, `jam_awal`, `jam_akhir`) VALUES
(1, 'sesi 1', '07:47:00', '21:47:00'),
(2, 'sesi 2', '16:47:00', '16:47:00'),
(3, 'sesi 3', '16:47:00', '16:47:00'),
(4, 'sesi 4', '16:47:00', '16:47:00'),
(5, 'sesi 5', '16:47:00', '16:47:00'),
(6, 'sesi 6', '16:47:00', '16:47:00');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_paket`
--

CREATE TABLE `jadwal_paket` (
  `id_paket` int(11) NOT NULL,
  `paket` varchar(50) NOT NULL,
  `sesi` varchar(50) NOT NULL,
  `jam_awal` time NOT NULL,
  `jam_akhir` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_paket`
--

INSERT INTO `jadwal_paket` (`id_paket`, `paket`, `sesi`, `jam_awal`, `jam_akhir`) VALUES
(62, 'Paket Malam', 'sesi 1', '07:47:00', '21:47:00'),
(63, 'Paket Malam', 'sesi 2', '16:47:00', '16:47:00'),
(64, 'Paket Malam', 'sesi 3', '16:47:00', '16:47:00'),
(65, 'Paket Malam', 'sesi 4', '16:47:00', '16:47:00'),
(66, 'Paket Malam', 'sesi 5', '16:47:00', '16:47:00'),
(67, 'Paket Malam', 'sesi 6', '16:47:00', '16:47:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username_user` varchar(100) NOT NULL,
  `password_user` varchar(100) NOT NULL,
  `pengguna_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_user`, `username_user`, `password_user`, `pengguna_level`) VALUES
(3, 'test', 'test', 'test', 'pemeriksa'),
(4, 'testtest', 'testtest', 'test', 'pemeriksa'),
(5, 'sad', 'dsad', 'dsadsa', 'pemeriksa'),
(6, 'dsad', 'dsad', 'dsad', 'pemeriksa'),
(7, 'dsadas', 'dsa', 'dsad', 'pemeriksa'),
(8, 'dsada', 'dsadas', 'dsadas', 'pemeriksa'),
(9, 'cxzc', 'cxzc', 'cxzc', 'pemeriksa'),
(10, 'dsad', 'dsad', 'dsad', 'pemeriksa'),
(19, 'user', 'user', 'user', 'pemeriksa'),
(21, 'maulana', 'maulana45', 'maulana', 'pemeriksa'),
(22, 'user', 'user', 'user', 'pemeriksa'),
(23, 'user', 'user', 'user', 'pemeriksa'),
(24, 'user', 'user', 'user', 'pemeriksa'),
(25, 'admin', 'admin', 'admin', 'admin'),
(26, 'test', 'test', 'test', 'pemeriksa'),
(27, 'test', 'test', 'test', 'pemeriksa'),
(28, 'test', 'test', 'test', 'pemeriksa'),
(29, 'paket2', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_check_point`
--
ALTER TABLE `data_check_point`
  ADD PRIMARY KEY (`id_check_point`);

--
-- Indexes for table `data_jadwal_sesi`
--
ALTER TABLE `data_jadwal_sesi`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `jadwal_paket`
--
ALTER TABLE `jadwal_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_check_point`
--
ALTER TABLE `data_check_point`
  MODIFY `id_check_point` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `data_jadwal_sesi`
--
ALTER TABLE `data_jadwal_sesi`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jadwal_paket`
--
ALTER TABLE `jadwal_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
