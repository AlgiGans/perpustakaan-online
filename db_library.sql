-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2024 at 05:49 PM
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
-- Database: `db_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `Email/Notlp` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_register`
--

CREATE TABLE `tb_register` (
  `Username` varchar(11) NOT NULL,
  `password` varchar(25) NOT NULL,
  `Email/Notlp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_stories`
--

CREATE TABLE `tb_stories` (
  `Judul_buku` varchar(20) NOT NULL,
  `Penulis` text NOT NULL,
  `Tahun_terbit` int(25) NOT NULL,
  `Penerbit` text NOT NULL,
  `Jumlah_halaman` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_stories`
--

INSERT INTO `tb_stories` (`Judul_buku`, `Penulis`, `Tahun_terbit`, `Penerbit`, `Jumlah_halaman`) VALUES
('asdasfaf', 'asafa', 12, 'sfasf', 123);

-- --------------------------------------------------------

--
-- Table structure for table `tb_toko`
--

CREATE TABLE `tb_toko` (
  `Judul_buku` varchar(11) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD KEY `Password` (`Password`);

--
-- Indexes for table `tb_register`
--
ALTER TABLE `tb_register`
  ADD PRIMARY KEY (`password`);

--
-- Indexes for table `tb_stories`
--
ALTER TABLE `tb_stories`
  ADD PRIMARY KEY (`Judul_buku`);

--
-- Indexes for table `tb_toko`
--
ALTER TABLE `tb_toko`
  ADD KEY `Judul_buku` (`Judul_buku`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD CONSTRAINT `tb_login_ibfk_1` FOREIGN KEY (`Password`) REFERENCES `tb_register` (`password`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_toko`
--
ALTER TABLE `tb_toko`
  ADD CONSTRAINT `tb_toko_ibfk_1` FOREIGN KEY (`Judul_buku`) REFERENCES `tb_stories` (`Judul_buku`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
