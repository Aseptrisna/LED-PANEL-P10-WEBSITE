-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2019 at 04:03 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arduino`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_panel`
--

CREATE TABLE `tb_panel` (
  `id_panel` varchar(8) NOT NULL,
  `isi_pesan` text NOT NULL,
  `lokasi_led` varchar(100) NOT NULL,
  `tanggal` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_panel`
--

INSERT INTO `tb_panel` (`id_panel`, `isi_pesan`, `lokasi_led`, `tanggal`) VALUES
('1', 'Jalan Sultan Agung No,44 Bandar Lampung Macet total dong 123', 'Sultan Agung no.3', '2019-10-05 23:27:21.000000'),
('2', 'Jalan pangeran antasari pindah ke metro mulai hari ini dan besok dan selamanya', 'antasari', '2019-10-06 20:46:40.000000'),
('3', 'Sultan Agung macet parahfhjlllklvvvvvvv', 'Kota karang', '2019-10-04 19:58:19.000000'),
('4', 'Sultan Agung macet', 'Rajabasa', '2019-10-04 19:21:30.000000'),
('5', 'unila macet total ya', 'kemiling', '2019-10-04 19:36:57.000000'),
('6', 'Saburai ada kecelakaan truck', 'kota karang', '2019-10-04 19:37:54.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_panel`
--
ALTER TABLE `tb_panel`
  ADD PRIMARY KEY (`id_panel`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
