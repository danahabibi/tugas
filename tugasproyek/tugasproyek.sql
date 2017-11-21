-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2017 at 06:36 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasproyek`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telpon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`, `alamat`, `no_telpon`) VALUES
(1, 'admin', '123', 'dana', 'Kedungrejo Bangorejo', '081235227881');

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `id_inventaris` int(10) NOT NULL,
  `nama_inventaris` varchar(200) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `jumlah_beli` int(10) NOT NULL,
  `harga` int(12) NOT NULL,
  `total` int(12) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`id_inventaris`, `nama_inventaris`, `kategori`, `kondisi`, `jumlah_beli`, `harga`, `total`, `tgl`) VALUES
(1, 'Sapu', 'Barang Mebeler', 'Baik', 0, 5000, 25000, '0000-00-00'),
(2, 'gelas', 'Barang Mebeler', 'Baik', 15, 2000, 50000, '2017-04-21'),
(3, 'sendok', 'Barang Mebeler', 'Baik', 0, 1000, 12000, '2017-04-21'),
(4, 'sendok', 'Barang Mebeler', 'Sedang', 12, 1000, 12000, '2017-04-21'),
(5, 'piring', 'Barang Mebeler', 'Baik', 11, 2000, 24000, '2017-04-21'),
(6, 'proyektor', 'Barang Elektronik', 'Baik', 0, 3000000, 3000000, '2017-04-21'),
(7, 'kursi', 'Barang Mebeler', 'Baik', 1, 200000, 400000, '2017-04-28'),
(8, 'kasur', 'Barang Mebeler', 'Baik', 1, 200000, 200000, '2017-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `keluarkan`
--

CREATE TABLE `keluarkan` (
  `id` int(11) NOT NULL,
  `id_inventaris` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluarkan`
--

INSERT INTO `keluarkan` (`id`, `id_inventaris`, `jumlah`, `kondisi`, `tgl`) VALUES
(2, 1, 1, 'Baik', '2017-04-20'),
(3, 1, 1, 'Rusak', '2017-04-13'),
(4, 2, 10, 'Rusak', '2017-04-21'),
(5, 3, 12, 'Baik', '2017-04-21'),
(6, 5, 1, 'Rusak', '2017-04-21'),
(7, 1, 1, 'Rusak', '2017-04-21'),
(8, 6, 1, 'Rusak', '2017-04-21'),
(9, 7, 1, 'Rusak', '2017-04-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_inventaris`);

--
-- Indexes for table `keluarkan`
--
ALTER TABLE `keluarkan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id_inventaris` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `keluarkan`
--
ALTER TABLE `keluarkan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
