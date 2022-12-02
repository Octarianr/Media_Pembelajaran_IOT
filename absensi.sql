-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 13, 2019 at 08:58 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL,
  `id_devices` int(11) NOT NULL,
  `id_rfid` int(11) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id_devices` int(11) NOT NULL,
  `nama_devices` varchar(100) NOT NULL,
  `mode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `histori`
--

CREATE TABLE `histori` (
  `id_histori` int(11) NOT NULL,
  `id_rfid` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `waktu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rfid`
--

CREATE TABLE `rfid` (
  `id_rfid` int(11) NOT NULL,
  `id_devices` int(11) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `secret_key`
--

CREATE TABLE `secret_key` (
  `id_key` int(11) NOT NULL,
  `key` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `secret_key`
--

INSERT INTO `secret_key` (`id_key`, `key`) VALUES
(1, 'asdkjWEQEDasd12ksnd');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `username`, `password`, `avatar`) VALUES
(1, 'Tyto Mulyono', 'tyto@tytomulyono.com', 'tyto', '$2a$08$3WyRJUHBqEG.sQ4yYTLxqOAXyqApz5/4AMZ73kauVsah1QfyKe7yC', 'logo.png'),
(2, 'Admin', 'admin@email.com', 'admin', '$2a$08$3WyRJUHBqEG.sQ4yYTLxqOAXyqApz5/4AMZ73kauVsah1QfyKe7yC', 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `waktu_operasional`
--

CREATE TABLE `waktu_operasional` (
  `id_waktu_operasional` int(11) NOT NULL,
  `waktu_operasional` varchar(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waktu_operasional`
--

INSERT INTO `waktu_operasional` (`id_waktu_operasional`, `waktu_operasional`, `keterangan`) VALUES
(1, '06:00-07:00', 'masuk'),
(2, '14:00-15:00', 'keluar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id_devices`);

--
-- Indexes for table `histori`
--
ALTER TABLE `histori`
  ADD PRIMARY KEY (`id_histori`);

--
-- Indexes for table `rfid`
--
ALTER TABLE `rfid`
  ADD PRIMARY KEY (`id_rfid`),
  ADD UNIQUE KEY `uid` (`uid`),
  ADD KEY `id devices` (`id_devices`);

--
-- Indexes for table `secret_key`
--
ALTER TABLE `secret_key`
  ADD PRIMARY KEY (`id_key`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `waktu_operasional`
--
ALTER TABLE `waktu_operasional`
  ADD PRIMARY KEY (`id_waktu_operasional`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id_devices` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `histori`
--
ALTER TABLE `histori`
  MODIFY `id_histori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rfid`
--
ALTER TABLE `rfid`
  MODIFY `id_rfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `secret_key`
--
ALTER TABLE `secret_key`
  MODIFY `id_key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `waktu_operasional`
--
ALTER TABLE `waktu_operasional`
  MODIFY `id_waktu_operasional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
