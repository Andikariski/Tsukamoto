-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 10:54 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsukamoto`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_hasil`
--

CREATE TABLE `data_hasil` (
  `id_hasil` int(11) NOT NULL,
  `nim` int(50) NOT NULL,
  `defuzzy` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_kriteria`
--

CREATE TABLE `data_kriteria` (
  `kode` varchar(50) NOT NULL,
  `matkul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kriteria`
--

INSERT INTO `data_kriteria` (`kode`, `matkul`) VALUES
('1865431', 'Pengantar Multimedia'),
('1865531', 'Pembelajaran Mesin'),
('1865631', 'Pengembangan Web Dinamis'),
('1865731', 'Robotika Informatika'),
('1865830', 'Sistem Pendukung Keputusan'),
('1865931', 'Kriptografi'),
('1866031', 'Pengenalan Pola');

-- --------------------------------------------------------

--
-- Table structure for table `data_nilai`
--

CREATE TABLE `data_nilai` (
  `nim` int(11) NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `c1` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `c3` int(11) NOT NULL,
  `c4` int(11) NOT NULL,
  `c5` int(11) NOT NULL,
  `c6` int(11) NOT NULL,
  `c7` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_nilai`
--

INSERT INTO `data_nilai` (`nim`, `nama_mahasiswa`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`) VALUES
(1700018110, 'Bani Arga', 100, 100, 80, 80, 80, 80, 80),
(1700018174, 'Andika Riski', 100, 80, 80, 80, 80, 80, 80);

-- --------------------------------------------------------

--
-- Table structure for table `data_rule`
--

CREATE TABLE `data_rule` (
  `id_rule` int(11) NOT NULL,
  `c1` varchar(100) NOT NULL,
  `c2` varchar(100) NOT NULL,
  `c3` varchar(100) NOT NULL,
  `c4` varchar(100) NOT NULL,
  `c5` varchar(100) NOT NULL,
  `c6` varchar(100) NOT NULL,
  `c7` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_rule`
--

INSERT INTO `data_rule` (`id_rule`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `ket`) VALUES
(1, 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Sistem Cerdas'),
(2, 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Sedang', 'Sistem Cerdas'),
(3, 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Tinggi', 'Sistem Cerdas'),
(4, 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Sedang', 'Rendah', 'Sistem Cerdas'),
(5, 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Sedang', 'Sedang', 'Sistem Cerdas'),
(6, 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Sedang', 'Tinggi', 'Sistem Cerdas'),
(7, 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Tinggi', 'Rendah', 'Sistem Cerdas'),
(8, 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Tinggi', 'Sedang', 'Rekayasa Perangkat Lunak dan Data'),
(9, 'Rendah', 'Rendah', 'Sedang', 'Rendah', 'Rendah', 'Tinggi', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data'),
(10, 'Rendah', 'Rendah', 'Sedang', 'Rendah', 'Sedang', 'Rendah', 'Rendah', 'Rekayasa Perangkat Lunak dan Data'),
(11, 'Rendah', 'Rendah', 'Sedang', 'Rendah', 'Sedang', 'Rendah', 'Sedang', 'Rekayasa Perangkat Lunak dan Data'),
(12, 'Rendah', 'Rendah', 'Sedang', 'Rendah', 'Sedang', 'Rendah', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data'),
(13, 'Rendah', 'Sedang', 'Sedang', 'Rendah', 'Sedang', 'Sedang', 'Rendah', 'Sistem Cerdas'),
(14, 'Rendah', 'Sedang', 'Sedang', 'Rendah', 'Sedang', 'Sedang', 'Sedang', 'Sistem Cerdas'),
(15, 'Rendah', 'Sedang', 'Sedang', 'Rendah', 'Sedang', 'Sedang', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data'),
(16, 'Rendah', 'Sedang', 'Sedang', 'Rendah', 'Sedang', 'Tinggi', 'Rendah', 'Rekayasa Perangkat Lunak dan Data'),
(17, 'Rendah', 'Sedang', 'Sedang', 'Rendah', 'Sedang', 'Tinggi', 'Sedang', 'Rekayasa Perangkat Lunak dan Data'),
(18, 'Rendah', 'Sedang', 'Tinggi', 'Rendah', 'Sedang', 'Tinggi', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data'),
(19, 'Rendah', 'Sedang', 'Tinggi', 'Rendah', 'Tinggi', 'Rendah', 'Rendah', 'Rekayasa Perangkat Lunak dan Data'),
(20, 'Rendah', 'Sedang', 'Tinggi', 'Rendah', 'Tinggi', 'Rendah', 'Sedang', 'Rekayasa Perangkat Lunak dan Data'),
(21, 'Rendah', 'Sedang', 'Tinggi', 'Rendah', 'Tinggi', 'Rendah', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data'),
(22, 'Rendah', 'Sedang', 'Tinggi', 'Rendah', 'Tinggi', 'Sedang', 'Rendah', 'Sistem Cerdas'),
(23, 'Rendah', 'Sedang', 'Tinggi', 'Rendah', 'Tinggi', 'Sedang', 'Sedang', 'Sistem Cerdas'),
(24, 'Rendah', 'Sedang', 'Tinggi', 'Rendah', 'Tinggi', 'Sedang', 'Tinggi', 'Sistem Cerdas'),
(25, 'Rendah', 'Sedang', 'Tinggi', 'Rendah', 'Tinggi', 'Tinggi', 'Rendah', 'Sistem Cerdas'),
(26, 'Rendah', 'Sedang', 'Tinggi', 'Rendah', 'Tinggi', 'Tinggi', 'Sedang', 'Sistem Cerdas'),
(27, 'Rendah', 'Tinggi', 'Tinggi', 'Rendah', 'Tinggi', 'Tinggi', 'Tinggi', 'Sistem Cerdas'),
(28, 'Rendah', 'Tinggi', 'Tinggi', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Sistem Cerdas'),
(29, 'Rendah', 'Tinggi', 'Rendah', 'Sedang', 'Rendah', 'Rendah', 'Sedang', 'Rekayasa Perangkat Lunak dan Data'),
(30, 'Rendah', 'Tinggi', 'Rendah', 'Sedang', 'Rendah', 'Rendah', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data'),
(31, 'Rendah', 'Tinggi', 'Rendah', 'Sedang', 'Rendah', 'Sedang', 'Rendah', 'Rekayasa Perangkat Lunak dan Data'),
(32, 'Rendah', 'Tinggi', 'Rendah', 'Sedang', 'Rendah', 'Sedang', 'Sedang', 'Rekayasa Perangkat Lunak dan Data'),
(33, 'Rendah', 'Tinggi', 'Rendah', 'Sedang', 'Rendah', 'Sedang', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data'),
(34, 'Rendah', 'Tinggi', 'Rendah', 'Sedang', 'Rendah', 'Tinggi', 'Rendah', 'Rekayasa Perangkat Lunak dan Data'),
(35, 'Rendah', 'Tinggi', 'Rendah', 'Sedang', 'Rendah', 'Tinggi', 'Sedang', 'Rekayasa Perangkat Lunak dan Data'),
(36, 'Rendah', 'Tinggi', 'Rendah', 'Sedang', 'Rendah', 'Tinggi', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data'),
(37, 'Rendah', 'Tinggi', 'Sedang', 'Sedang', 'Sedang', 'Rendah', 'Rendah', 'Rekayasa Perangkat Lunak dan Data'),
(38, 'Rendah', 'Tinggi', 'Sedang', 'Sedang', 'Sedang', 'Rendah', 'Sedang', 'Rekayasa Perangkat Lunak dan Data'),
(39, 'Rendah', 'Tinggi', 'Sedang', 'Sedang', 'Sedang', 'Rendah', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data'),
(40, 'Sedang', 'Rendah', 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'Rendah', 'Sistem Cerdas'),
(41, 'Sedang', 'Rendah', 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'Sistem Cerdas'),
(42, 'Sedang', 'Rendah', 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data'),
(43, 'Sedang', 'Rendah', 'Sedang', 'Sedang', 'Sedang', 'Tinggi', 'Rendah', 'Rekayasa Perangkat Lunak dan Data'),
(44, 'Sedang', 'Rendah', 'Sedang', 'Sedang', 'Sedang', 'Tinggi', 'Sedang', 'Rekayasa Perangkat Lunak dan Data'),
(45, 'Sedang', 'Rendah', 'Sedang', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data'),
(46, 'Sedang', 'Rendah', 'Tinggi', 'Sedang', 'Tinggi', 'Rendah', 'Rendah', 'Rekayasa Perangkat Lunak dan Data'),
(47, 'Sedang', 'Rendah', 'Tinggi', 'Sedang', 'Tinggi', 'Rendah', 'Sedang', 'Sistem Cerdas'),
(48, 'Sedang', 'Rendah', 'Tinggi', 'Sedang', 'Tinggi', 'Rendah', 'Tinggi', 'Sistem Cerdas'),
(49, 'Sedang', 'Rendah', 'Tinggi', 'Sedang', 'Tinggi', 'Sedang', 'Rendah', 'Sistem Cerdas'),
(50, 'Sedang', 'Rendah', 'Tinggi', 'Sedang', 'Tinggi', 'Sedang', 'Sedang', 'Sistem Cerdas'),
(51, 'Sedang', 'Rendah', 'Tinggi', 'Sedang', 'Tinggi', 'Sedang', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data'),
(52, 'Sedang', 'Sedang', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rekayasa Perangkat Lunak dan Data'),
(53, 'Sedang', 'Sedang', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Sedang', 'Rekayasa Perangkat Lunak dan Data'),
(54, 'Sedang', 'Sedang', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data'),
(55, 'Sedang', 'Sedang', 'Tinggi', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Rekayasa Perangkat Lunak dan Data'),
(56, 'Sedang', 'Sedang', 'Tinggi', 'Sedang', 'Rendah', 'Rendah', 'Sedang', 'Rekayasa Perangkat Lunak dan Data'),
(57, 'Sedang', 'Sedang', 'Rendah', 'Sedang', 'Rendah', 'Rendah', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data'),
(58, 'Sedang', 'Sedang', 'Rendah', 'Sedang', 'Rendah', 'Sedang', 'Rendah', 'Sistem Cerdas'),
(59, 'Sedang', 'Sedang', 'Rendah', 'Sedang', 'Rendah', 'Sedang', 'Sedang', 'Sistem Cerdas'),
(60, 'Sedang', 'Sedang', 'Rendah', 'Sedang', 'Rendah', 'Sedang', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data'),
(61, 'Sedang', 'Sedang', 'Rendah', 'Sedang', 'Rendah', 'Tinggi', 'Rendah', 'Rekayasa Perangkat Lunak dan Data'),
(62, 'Sedang', 'Sedang', 'Rendah', 'Sedang', 'Rendah', 'Tinggi', 'Sedang', 'Rekayasa Perangkat Lunak dan Data'),
(63, 'Sedang', 'Sedang', 'Rendah', 'Sedang', 'Rendah', 'Tinggi', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data'),
(64, 'Sedang', 'Sedang', 'Rendah', 'Sedang', 'Sedang', 'Rendah', 'Rendah', 'Sistem Cerdas'),
(65, 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'Rendah', 'Sedang', 'Sistem Cerdas'),
(66, 'Sedang', 'Tinggi', 'Sedang', 'Sedang', 'Sedang', 'Rendah', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data'),
(67, 'Sedang', 'Tinggi', 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'Rendah', 'Rekayasa Perangkat Lunak dan Data'),
(68, 'Sedang', 'Tinggi', 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'Rekayasa Perangkat Lunak dan Data'),
(69, 'Sedang', 'Tinggi', 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data'),
(70, 'Sedang', 'Tinggi', 'Sedang', 'Sedang', 'Sedang', 'Tinggi', 'Rendah', 'Rekayasa Perangkat Lunak dan Data'),
(71, 'Sedang', 'Tinggi', 'Sedang', 'Sedang', 'Sedang', 'Tinggi', 'Sedang', 'Rekayasa Perangkat Lunak dan Data'),
(72, 'Sedang', 'Tinggi', 'Sedang', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data'),
(73, 'Sedang', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Rendah', 'Rendah', 'Rekayasa Perangkat Lunak dan Data'),
(74, 'Sedang', 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Rendah', 'Sedang', 'Sistem Cerdas'),
(75, 'Sedang', 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Rendah', 'Tinggi', 'Sistem Cerdas'),
(76, 'Sedang', 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Sedang', 'Rendah', 'Sistem Cerdas'),
(77, 'Sedang', 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Sedang', 'Sedang', 'Sistem Cerdas'),
(78, 'Sedang', 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Sedang', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data'),
(79, 'Sedang', 'Rendah', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rekayasa Perangkat Lunak dan Data'),
(80, 'Sedang', 'Rendah', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Sedang', 'Rekayasa Perangkat Lunak dan Data'),
(81, 'Tinggi', 'Rendah', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data'),
(82, 'Tinggi', 'Rendah', 'Tinggi', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Rekayasa Perangkat Lunak dan Data'),
(83, 'Tinggi', 'Rendah', 'Tinggi', 'Sedang', 'Rendah', 'Rendah', 'Sedang', 'Rekayasa Perangkat Lunak dan Data'),
(84, 'Tinggi', 'Rendah', 'Tinggi', 'Sedang', 'Rendah', 'Rendah', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data'),
(85, 'Tinggi', 'Rendah', 'Rendah', 'Sedang', 'Rendah', 'Sedang', 'Rendah', 'Sistem Cerdas'),
(86, 'Tinggi', 'Rendah', 'Rendah', 'Sedang', 'Rendah', 'Sedang', 'Sedang', 'Sistem Cerdas'),
(87, 'Tinggi', 'Rendah', 'Rendah', 'Sedang', 'Rendah', 'Sedang', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data'),
(88, 'Tinggi', 'Rendah', 'Rendah', 'Sedang', 'Rendah', 'Tinggi', 'Rendah', 'Rekayasa Perangkat Lunak dan Data'),
(89, 'Tinggi', 'Rendah', 'Rendah', 'Sedang', 'Rendah', 'Tinggi', 'Sedang', 'Rekayasa Perangkat Lunak dan Data'),
(90, 'Tinggi', 'Rendah', 'Rendah', 'Sedang', 'Rendah', 'Tinggi', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data'),
(91, 'Tinggi', 'Sedang', 'Rendah', 'Sedang', 'Sedang', 'Rendah', 'Rendah', 'Rekayasa Perangkat Lunak dan Data'),
(92, 'Tinggi', 'Sedang', 'Rendah', 'Sedang', 'Sedang', 'Rendah', 'Sedang', 'Rekayasa Perangkat Lunak dan Data'),
(93, 'Tinggi', 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'Rendah', 'Tinggi', 'Sistem Cerdas'),
(94, 'Tinggi', 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'Rendah', 'Sistem Cerdas'),
(95, 'Tinggi', 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'Sistem Cerdas'),
(96, 'Tinggi', 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'Tinggi', 'Sistem Cerdas'),
(97, 'Tinggi', 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'Tinggi', 'Rendah', 'Sistem Cerdas'),
(98, 'Tinggi', 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'Tinggi', 'Sedang', 'Sistem Cerdas'),
(99, 'Tinggi', 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Sistem Cerdas'),
(100, 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Sistem Cerdas'),
(101, 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Rendah', 'Sedang', 'Rekayasa Perangkat Lunak dan Data'),
(102, 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Tinggi', 'Rendah', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data'),
(103, 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Tinggi', 'Sedang', 'Rendah', 'Rekayasa Perangkat Lunak dan Data'),
(104, 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Rekayasa Perangkat Lunak dan Data'),
(105, 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data'),
(106, 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Rendah', 'Rekayasa Perangkat Lunak dan Data'),
(107, 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Sedang', 'Rekayasa Perangkat Lunak dan Data'),
(108, 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data'),
(109, 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rekayasa Perangkat Lunak dan Data'),
(110, 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Sedang', 'Rekayasa Perangkat Lunak dan Data'),
(111, 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Tinggi', 'Sistem Cerdas'),
(112, 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Rendah', 'Sedang', 'Rendah', 'Sistem Cerdas'),
(113, 'Tinggi', 'Tinggi', 'Rendah', 'Tinggi', 'Rendah', 'Sedang', 'Sedang', 'Sistem Cerdas'),
(114, 'Tinggi', 'Tinggi', 'Rendah', 'Tinggi', 'Rendah', 'Sedang', 'Tinggi', 'Sistem Cerdas'),
(115, 'Tinggi', 'Tinggi', 'Rendah', 'Tinggi', 'Rendah', 'Tinggi', 'Rendah', 'Rekayasa Perangkat Lunak dan Data'),
(116, 'Tinggi', 'Tinggi', 'Rendah', 'Tinggi', 'Rendah', 'Tinggi', 'Sedang', 'Rekayasa Perangkat Lunak dan Data'),
(117, 'Tinggi', 'Tinggi', 'Rendah', 'Tinggi', 'Rendah', 'Tinggi', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data'),
(118, 'Tinggi', 'Tinggi', 'Rendah', 'Tinggi', 'Sedang', 'Rendah', 'Rendah', 'Rekayasa Perangkat Lunak dan Data'),
(119, 'Tinggi', 'Tinggi', 'Rendah', 'Tinggi', 'Sedang', 'Rendah', 'Sedang', 'Rekayasa Perangkat Lunak dan Data'),
(120, 'Tinggi', 'Tinggi', 'Rendah', 'Tinggi', 'Sedang', 'Rendah', 'Tinggi', 'Rekayasa Perangkat Lunak dan Data');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nim` int(50) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id_user`, `nama`, `email`, `password`, `nim`, `role`) VALUES
(3, 'Andika Riski', 'dika@gmail.com', '12345', 1700018174, 'mahasiswa'),
(4, 'Admin', 'admin@gmail.com', '12345', 1700018170, 'admin'),
(5, 'Bani Arga', 'bani@gmail.com', '12345', 1700018110, 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_hasil`
--
ALTER TABLE `data_hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `data_kriteria`
--
ALTER TABLE `data_kriteria`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `data_nilai`
--
ALTER TABLE `data_nilai`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `data_rule`
--
ALTER TABLE `data_rule`
  ADD PRIMARY KEY (`id_rule`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_hasil`
--
ALTER TABLE `data_hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_rule`
--
ALTER TABLE `data_rule`
  MODIFY `id_rule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
