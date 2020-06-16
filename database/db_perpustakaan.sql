-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2020 at 12:03 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `nim` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('l','p') NOT NULL,
  `prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`nim`, `nama`, `tempat_lahir`, `tgl_lahir`, `jk`, `prodi`) VALUES
(112829, 'Wiwin Nur H', 'Sukoharjo', '2000-07-14', 'p', 'S-1 PTIK'),
(1324, 'Arwendy M', 'Bandung', '1999-03-12', 'l', 'S-1 SI'),
(3518021, 'Deva Putri A', 'Magetan', '2000-03-09', 'p', 'S-1 TI'),
(3518039, 'Kharimah', 'Karanganyar', '1999-04-02', 'p', 'S-1 PTIK'),
(3518038, 'Amami J', 'Purworejo', '2000-05-03', 'p', 'S-1 SI');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(150) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `jumlah_buku` int(3) NOT NULL,
  `lokasi` enum('rak 1','rak 2','rak 3') NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `isbn`, `jumlah_buku`, `lokasi`, `tgl_input`) VALUES
(1, 'Belajar PHP dan MySQL', 'Arwendy M', 'suryamedia', '2010', '2535teyhfhgh', 5, 'rak 1', '2020-05-26'),
(2, 'Belajar HTML Khusus', 'Jihan A', 'suryamedia', '2009', 'ohugyt', 4, 'rak 1', '2020-05-25'),
(3, 'Jaringan Komputer', 'Khusnul K', 'okemedia', '1991', 'lhvgd', 3, 'rak 1', '2020-05-21'),
(4, 'Pemrograman Website Basic', 'Wiwin N H', 'jakarta', '1991', '08078', 1, 'rak 1', '2020-06-18'),
(15, 'Teknik Dasar Blender 2.81', 'Deva Putri A', 'Citramedia', '2002', 'wdhlw', 2, 'rak 1', '2020-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(9) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `tgl_pinjam` varchar(30) NOT NULL,
  `tgl_kembali` varchar(30) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `judul`, `nim`, `nama`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(1, 'Belajar PHP dan MySQL', '112829', 'Wiwin Nur H', '11/06/2020', '16/06/2020', 'kembali'),
(2, 'Jaringan Komputer', '1324', 'Arwendy M', '09/06/2020', '14/06/2020', 'kembali'),
(3, 'Teknik Dasar Blender 2.81', '3518038', 'Amami J	', '13/06/2020', '20/06/2020', 'kembali'),
(4, 'Belajar HTML Khusus', '3518021', 'Deva Putri A', '8/06/2020', '14/06/2020', 'Kembali'),
(7, 'Java', '56', 'kuki', '01-06-2020', '21-06-20', 'Pinjam'),
(80, 'hari', '89', 'jihan', '01-06-2020', '10-06-2020', 'Pinjam\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(2, 'user', 'user', 'user', 'user'),
(3, 'pemweb', '12345', 'pemweb', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
