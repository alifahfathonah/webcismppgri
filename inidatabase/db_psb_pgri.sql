-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2021 at 03:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_psb_pgri`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `recover` varchar(20) DEFAULT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `recover`, `keterangan`) VALUES
(1, 'admin32', 'admin32', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `tlp_operator` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `tgl_pendaftaran`, `tlp_operator`, `tanggal`) VALUES
(1, '2018-03-19', '088888888', '2018-02-14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `email_admin`, `password`) VALUES
(0, 'admin32', 'a0ec99b64a6cb5129ec685b0c49cca44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email_akun` varchar(255) NOT NULL,
  `password_akun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_akun`
--

INSERT INTO `tb_akun` (`id`, `nama_lengkap`, `email_akun`, `password_akun`) VALUES
(1, 'Heri Prastio', 'heri.prastio56@gmail.com', '$2y$10$DGEnI1ieqBFAAQLEzJCSHeprepMq1AQ5jkpQWORb5vB7Apfv8rAFi'),
(2, 'Android', 'android@gmail.com', '$2y$10$7CokPtTau9I1rCw2wCeRYelVHxaGbF1cBvk42pPOVJBDS8TKtICgS'),
(3, 'akun', 'akun@gmail.com', '$2y$10$YNt1qW8RiGRD0TA/Q3FmkebNsmXOqZ5DvRup4q6CWJGzKU1LM9num');

-- --------------------------------------------------------

--
-- Table structure for table `tb_calon_siswa`
--

CREATE TABLE `tb_calon_siswa` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `nama_ibu_kandung` varchar(255) NOT NULL,
  `nama_ayah_kandung` varchar(255) NOT NULL,
  `pekerjaan_ibu` varchar(255) NOT NULL,
  `pekerjaan_ayah` varchar(255) NOT NULL,
  `penghasilan_ayah` decimal(10,0) NOT NULL,
  `penghasilan_ibu` decimal(10,0) NOT NULL,
  `sd_asal` text NOT NULL,
  `un_total` varchar(5) NOT NULL,
  `foto_calon_siswa` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_calon_siswa`
--

INSERT INTO `tb_calon_siswa` (`user_id`, `user_email`, `user_password`, `nama_lengkap`, `tanggal_lahir`, `tempat_lahir`, `jenis_kelamin`, `agama`, `alamat`, `nama_ibu_kandung`, `nama_ayah_kandung`, `pekerjaan_ibu`, `pekerjaan_ayah`, `penghasilan_ayah`, `penghasilan_ibu`, `sd_asal`, `un_total`, `foto_calon_siswa`, `tanggal`) VALUES
(5, 'heri.prastio56@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', NULL, '', '', '', '', '', '', '', '', '0', '0', '', '', '', '0000-00-00'),
(7, '', '', 'RI Tes', '1995-09-22', 'Jakarta', '1', '1', 'Tes', 'Tes', 'Abc', 'Def', 'KA', '0', '0', 'San Fras', '', '75HUTRI7.jpg', '2021-01-29'),
(8, '', '', 'Akun PSB', '2021-01-28', 'Jakarta', 'Laki-laki', 'Islam', 'JL. TES', 'Tes', 'tes', 'Tis', 'Tes', '0', '0', 'JL. TES TEXT', '80.00', 'logopgrismpmini2.png', '2021-01-29');

-- --------------------------------------------------------

--
-- Table structure for table `tb_date`
--

CREATE TABLE `tb_date` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_date`
--

INSERT INTO `tb_date` (`id`, `date`, `foto`) VALUES
(1, '1997-02-22', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_informasi`
--

CREATE TABLE `tb_informasi` (
  `id` int(11) NOT NULL,
  `judul_pengumuman` varchar(255) NOT NULL,
  `isi_pengumuman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_informasi`
--

INSERT INTO `tb_informasi` (`id`, `judul_pengumuman`, `isi_pengumuman`) VALUES
(1, 'Informasi Petunjuk Pendaftaran PSB Tahun 2020', '<li class=\"font-weight-bold\">Peserta mendaftar pendaftaran siswa baru melalui portal dashboard siswa</li> <li class=\"font-weight-bold\">Pendaftaran siswa baru melalui secara online</li> <li class=\"font-weight-bold\">Jika sudah mendaftar calon siswa pilih menu print, lalu cetak print bukti pendaftaran siswa</li>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_calon_siswa`
--
ALTER TABLE `tb_calon_siswa`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tb_date`
--
ALTER TABLE `tb_date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_calon_siswa`
--
ALTER TABLE `tb_calon_siswa`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_date`
--
ALTER TABLE `tb_date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
