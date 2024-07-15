-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2024 at 12:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlsv`
--

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `masv` int(11) NOT NULL,
  `tensv` varchar(40) NOT NULL,
  `namsinh` date NOT NULL,
  `gioitinh` varchar(10) NOT NULL,
  `lop` varchar(20) NOT NULL,
  `quequan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`masv`, `tensv`, `namsinh`, `gioitinh`, `lop`, `quequan`, `email`) VALUES
(1, 'Đặng Đình Bảo Long', '2003-01-20', 'Nam', 'DHTI15A11HN', 'Bắc Ninh', 'longdang019@gmail.com'),
(2, 'Nguyễn Thị A', '2003-02-22', 'Nữ', 'DHTI15A11HN', 'Hà Nội', 'nta@gmail.com'),
(3, 'Nguyễn Văn C', '2003-09-07', 'Nam', 'DHTI15A11HN', 'Hà Nội', 'nvc@gmail.com'),
(4, 'Nguyễn Ngọc Mai', '2003-08-21', 'Nữ', 'DHTI15A11HN', 'Ninh Bình', 'nnmai@gmail.com'),
(6, 'Đặng Đình Bảo Long', '2003-01-20', 'Nam', 'DHTI15A11HN', 'Hà Nội', 'longdang019@gmail.com'),
(7, 'Nguyễn Ngọc Mai', '2003-08-21', 'Nam', 'DHTI15A11HN', 'Ninh Bình', 'nnmai@gmail.com'),
(8, 'Nguyễn Thị Thỏ', '2003-07-29', 'Nam', 'DHTI15A11HN', 'Hà Nội', 'ntl@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`masv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `masv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
