-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 01:58 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mangol`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_chapter`
--

CREATE TABLE `tb_chapter` (
  `id_chapter` int(11) NOT NULL,
  `id_manga` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `judul_chapter` varchar(255) NOT NULL,
  `image_chapter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id`, `nama`, `username`, `password`) VALUES
(3, 'Muhammad Wildan Ardiansyah', 'wildan', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_manga`
--

CREATE TABLE `tb_manga` (
  `id_manga` int(11) NOT NULL,
  `image` varchar(225) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `sinopsis` text NOT NULL,
  `genre` varchar(255) NOT NULL,
  `author` varchar(225) NOT NULL,
  `status` enum('on going','tamat') NOT NULL,
  `rilis` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_popular_komik`
--

CREATE TABLE `tb_popular_komik` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_popular_komik`
--

INSERT INTO `tb_popular_komik` (`id`, `link`, `image`, `judul`) VALUES
(12, 'apotheosis', 'AP.jpg', 'Apotheosis'),
(14, 'the-beginning-after-the-end', 'TBT.jpg', 'The Beginning After The End'),
(15, 'horimiya', 'HM.jpg', 'Horimiya'),
(16, 'one-piece', 'OP.jpg', 'One Piece'),
(17, 'overgeared', 'OG.jpg', 'Overgeared');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_chapter`
--
ALTER TABLE `tb_chapter`
  ADD PRIMARY KEY (`id_chapter`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_manga`
--
ALTER TABLE `tb_manga`
  ADD PRIMARY KEY (`id_manga`),
  ADD UNIQUE KEY `judul` (`judul`),
  ADD KEY `image` (`image`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `tb_popular_komik`
--
ALTER TABLE `tb_popular_komik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `judul` (`judul`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_chapter`
--
ALTER TABLE `tb_chapter`
  MODIFY `id_chapter` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_manga`
--
ALTER TABLE `tb_manga`
  MODIFY `id_manga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_popular_komik`
--
ALTER TABLE `tb_popular_komik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
