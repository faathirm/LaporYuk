-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2018 at 12:06 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_fintech`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE `data_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@admin.admin');

-- --------------------------------------------------------

--
-- Table structure for table `data_laporan`
--

CREATE TABLE `data_laporan` (
  `id` int(11) NOT NULL,
  `namapelapor` varchar(50) NOT NULL,
  `userid` int(50) NOT NULL,
  `nopol` varchar(50) NOT NULL,
  `detail` blob NOT NULL,
  `tanggalkejadian` varchar(50) NOT NULL,
  `jamkejadian` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `tanggaldilaporkan` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `komentar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_laporan`
--

INSERT INTO `data_laporan` (`id`, `namapelapor`, `userid`, `nopol`, `detail`, `tanggalkejadian`, `jamkejadian`, `gambar`, `tanggaldilaporkan`, `status`, `komentar`) VALUES
(52, 'faathir muhammad', 4, 'B 43 XYZ', 0x636f626120616a612070616b, '2017-06-30', '03:57', 'faathir muhammad05115810.PNG', '05/01/2018', 'TAHAP 4', 0x53554441482044494b4952494d204b4520494420424150414b);

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id` int(20) NOT NULL,
  `namadepan` varchar(100) NOT NULL,
  `namabelakang` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nomortelepon` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `rekening` varchar(100) NOT NULL,
  `saldo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id`, `namadepan`, `namabelakang`, `password`, `email`, `nomortelepon`, `bank`, `rekening`, `saldo`) VALUES
(4, 'faathir', 'muhammad', 'gunzou567', 'faathir.muhammad@gmail.com', '089674903698', 'BNI', '0302570875', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `data_withdrawl`
--

CREATE TABLE `data_withdrawl` (
  `idpermintaan` int(50) NOT NULL,
  `iduser` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `rekening` varchar(50) NOT NULL,
  `saldoakhir` int(50) NOT NULL,
  `permintaaan` int(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `tanggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_withdrawl`
--

INSERT INTO `data_withdrawl` (`idpermintaan`, `iduser`, `nama`, `bank`, `rekening`, `saldoakhir`, `permintaaan`, `status`, `tanggal`) VALUES
(4, 4, 'faathir muhammad', 'BNI', '0302570875', 25000, 50000, 0, '05/01/2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_laporan`
--
ALTER TABLE `data_laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_withdrawl`
--
ALTER TABLE `data_withdrawl`
  ADD PRIMARY KEY (`idpermintaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_laporan`
--
ALTER TABLE `data_laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_withdrawl`
--
ALTER TABLE `data_withdrawl`
  MODIFY `idpermintaan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
