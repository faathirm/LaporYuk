-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2018 at 03:42 PM
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
  `nomortelepon` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `nomorrekening` varchar(50) NOT NULL,
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

INSERT INTO `data_laporan` (`id`, `namapelapor`, `nomortelepon`, `email`, `bank`, `nomorrekening`, `nopol`, `detail`, `tanggalkejadian`, `jamkejadian`, `gambar`, `tanggaldilaporkan`, `status`, `komentar`) VALUES
(31, 'Faathir Muhammad', '089674903698', 'faathir.muhammad@gmail.com', 'BNI', '0302570875', 'B 43 XYZ', 0x4c6f72656d20697073756d20646f6c6f722073697420616d65742c20636f6e73656374657475722061646970697363696e6720656c69742e20557420612074656c6c757320656c656d656e74756d2c20656666696369747572206c6f72656d2069642c20756c7472696365732076656c69742e2055742070656c6c656e74657371756520646f6c6f722073697420616d65742070686172657472612074656d706f722e205175697371756520696e206d616c657375616461206e756c6c612e20536564206d6174746973206c6163696e6961206d6920696420706f73756572652e2050726f696e20617420636f6e67756520616e74652e20566573746962756c756d2073656420647569206469616d2e204e756c6c61206e6563206469616d206c6f72656d2e, '3 JANUARI 2018', '23:59', 'testo.png', '2017/12/29', 'TAHAP 2', 0x7375646168206261696b2c20646974756e6767752079612070616b2e),
(32, 'Faathir Muhammad', '089674903698', 'faathir.muhammad@gmail.com', 'BNI', '0302570875', 'A 5354 AAA', 0x4c6f72656d20697073756d20646f6c6f722073697420616d65742c20636f6e73656374657475722061646970697363696e6720656c69742e20557420612074656c6c757320656c656d656e74756d2c20656666696369747572206c6f72656d2069642c20756c7472696365732076656c69742e2055742070656c6c656e74657371756520646f6c6f722073697420616d65742070686172657472612074656d706f722e205175697371756520696e206d616c657375616461206e756c6c612e20536564206d6174746973206c6163696e6961206d6920696420706f73756572652e2050726f696e20617420636f6e67756520616e74652e20566573746962756c756d2073656420647569206469616d2e204e756c6c61206e6563206469616d206c6f72656d2e, '9 NOVEMBER 2018', '14:25', 'Capture1.PNG', '2017/12/29', 'DITOLAK', 0x6d61736968206e676173616c2070616b2c206d6161662062656c756d2062697361),
(33, 'asd', 'asdadjkhj', 'faathir.muhammad@gmail.com', 'BNI', '1231313', 'B 43 XYZ', 0x544553542031, 'ASDKAJD', 'asdlkj', 'Capture1.PNG', '2018/01/01', 'TAHAP 1', ''),
(34, 'asd', 'asdadjkhj', 'faathir.muhammad@gmail.com', 'BNI', '1231313', 'B 43 XYZ', 0x544553542032, 'ASDKAJD', 'asdlkj', 'Capture1.PNG', '2018/01/01', 'TAHAP 1', ''),
(35, 'asd', 'asdadjkhj', 'faathir.muhammad@gmail.com', 'BNI', '1231313', 'B 43 XYZ', 0x544553542033, 'ASDKAJD', 'asdlkj', 'Capture1.PNG', '2018/01/01', 'TAHAP 1', ''),
(36, 'asd', 'asdadjkhj', 'faathir.muhammad@gmail.com', 'BNI', '1231313', 'B 43 XYZ', 0x544553542034, 'ASDKAJD', 'asdlkj', 'Capture1.PNG', '2018/01/01', 'TAHAP 1', ''),
(37, 'asd', 'asdadjkhj', 'faathir.muhammad@gmail.com', 'BNI', '1231313', 'B 43 XYZ', 0x544553542035, 'ASDKAJD', 'asdlkj', 'Capture1.PNG', '2018/01/01', 'TAHAP 1', ''),
(38, 'asd', 'asdadjkhj', 'faathir.muhammad@gmail.com', 'BNI', '1231313', 'B 43 XYZ', 0x544553542036, 'ASDKAJD', 'asdlkj', 'Capture1.PNG', '2018/01/01', 'TAHAP 1', ''),
(39, 'asd', 'asdadjkhj', 'faathir.muhammad@gmail.com', 'BNI', '1231313', 'B 43 XYZ', 0x544553542037, 'ASDKAJD', 'asdlkj', 'Capture1.PNG', '2018/01/01', 'TAHAP 1', ''),
(40, 'asd', 'asdadjkhj', 'faathir.muhammad@gmail.com', 'BNI', '1231313', 'B 43 XYZ', 0x544553542038, 'ASDKAJD', 'asdlkj', 'Capture1.PNG', '2018/01/01', 'TAHAP 1', ''),
(41, 'asd', 'asdadjkhj', 'faathir.muhammad@gmail.com', 'BNI', '1231313', 'B 43 XYZ', 0x544553542039, 'ASDKAJD', 'asdlkj', 'Capture1.PNG', '2018/01/01', 'TAHAP 1', ''),
(42, 'asd', 'asdadjkhj', 'faathir.muhammad@gmail.com', 'BNI', '1231313', 'B 43 XYZ', 0x54455354203130, 'ASDKAJD', 'asdlkj', 'Capture1.PNG', '2018/01/01', 'TAHAP 1', ''),
(48, 'asdad', '089674903698', 'isyeadhiwi75@gmail.com', 'BNI', 'asdasdad', 'B 8742 ON', 0x6469636f6261, '9 DESEMBER 2017', '23:25', 'asdadB 8742 ON103201.PNG', '01/01/2018', 'TAHAP 1', ''),
(49, 'asdad', '089674903698', 'isyeadhiwi75@gmail.com', 'BNI', 'asdasdad', 'B 8742 ON', 0x6469636f6261, '9 DESEMBER 2017', '23:25', 'asdad01103611.PNG', '01/01/2018', 'TAHAP 1', '');

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
(1, 'Faathir', 'Muhammad', 'asdasd', 'faathir.muhammad@gmail.com', '089674903698', 'BNI', '0302570875', 575000),
(2, 'jono', 'muhammad', 'asdasd', 'jono@jono.jono', '089674903698', '', '', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
