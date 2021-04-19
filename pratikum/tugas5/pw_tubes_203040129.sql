-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 09:09 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040129`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nrp` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `img`, `nrp`, `nama`, `email`, `jurusan`) VALUES
(1, 'bagja.jfif\r\n', '206040131', 'Bagja solehudin', 'baso@gmail.com', 'Teknik mesin'),
(2, 'rafli.jfif', '203040130', 'Rafli artiyadi', 'rafliartiyadi@gmail.com', 'Teknik mesin'),
(3, 'fany.jfif', '203040129', 'Ryan fany fadlyllah AR', 'fadlyllahfanny@gmail.com', 'Teknik informatika'),
(4, 'aldi.jfif', '203040189', 'Aldi rizki fauzi', 'aldi@gmail.com', 'teknik industri'),
(5, 'ilham.jfif', '203040145', 'ilham maulana', 'ilham@gmail.com', 'kimunikasi'),
(6, 'vian.jfif', '2030506079', 'vian wirawan', 'vian@gmail.com', 'mipa'),
(7, 'robi.jfif', '201213145', 'robi irham', 'robi@gmail.com', 'elektro');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
