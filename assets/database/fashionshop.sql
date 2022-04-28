-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 09:37 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashionshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `maTK` int(11) NOT NULL,
  `ho` varchar(100) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL,
  `maQuyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`maTK`, `ho`, `ten`, `email`, `matkhau`, `file`, `maQuyen`) VALUES
(68, 'tr', 'abc', 'abc', '900150983cd24fb0d6963f7d28e17f72', '', 0),
(69, 'aa', 'aa', 'aa', '202cb962ac59075b964b07152d234b70', '', 0),
(70, 'Trần Gia ', 'Bảo', 'giabao991199@gmail.com', '4297f44b13955235245b2497399d7a93', '', 0),
(71, 'Trần Gia ', 'huy', '123', '4297f44b13955235245b2497399d7a93', '', 0),
(72, 'Trần', 'huy', 'huytran123123', '202cb962ac59075b964b07152d234b70', '', 0),
(73, 'Trần', 'Gia Bảo', 'tuantran123@gmail.com', '202cb962ac59075b964b07152d234b70', '', 0),
(74, 'Mạch Hạo', 'Thành', 'thanh1232@gmail.com', '202cb962ac59075b964b07152d234b70', '', 0),
(75, 'Trần Minh', 'Huy', 'huy123bdbd@gmail.com', '202cb962ac59075b964b07152d234b70', '', 0),
(76, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 0),
(77, '123123', '123123', '123123', '4297f44b13955235245b2497399d7a93', '', 0),
(78, 'Trương Gia', 'Huy', 'huytruong123123@gmail.com', '4297f44b13955235245b2497399d7a93', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`maTK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `maTK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
