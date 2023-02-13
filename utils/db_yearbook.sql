-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 12, 2023 at 03:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_yearbook`
--
CREATE DATABASE IF NOT EXISTS `db_yearbook` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_yearbook`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_album`
--

DROP TABLE IF EXISTS `tb_album`;
CREATE TABLE `tb_album` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `photo_url` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_cerita_kocak`
--

DROP TABLE IF EXISTS `tb_cerita_kocak`;
CREATE TABLE `tb_cerita_kocak` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `tanggal_kejadian` text NOT NULL,
  `deskripsi` text NOT NULL,
  `photo_url_1` text NOT NULL,
  `photo_url_2` text NOT NULL,
  `photo_url_3` text NOT NULL,
  `photo_url_4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

DROP TABLE IF EXISTS `tb_profil`;
CREATE TABLE `tb_profil` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `panggilan` text NOT NULL,
  `quotes` text NOT NULL,
  `linkedin_url` text NOT NULL,
  `mata_kuliah_fav` text NOT NULL,
  `makanan_fav` text NOT NULL,
  `pas_foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_album`
--
ALTER TABLE `tb_album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_cerita_kocak`
--
ALTER TABLE `tb_cerita_kocak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_album`
--
ALTER TABLE `tb_album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_cerita_kocak`
--
ALTER TABLE `tb_cerita_kocak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
