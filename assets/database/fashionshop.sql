-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2022 at 12:07 PM
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
  `ho` varchar(20) NOT NULL,
  `ten` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `matKhau` varchar(20) NOT NULL,
  `file` varchar(100) NOT NULL,
  `maQuyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`maTK`, `ho`, `ten`, `email`, `matKhau`, `file`, `maQuyen`) VALUES
(1, 'Trần Gia ', 'Bảo', 'giabao991199@gmail.c', 'md5(123)', '200kg.jpg', 0),
(2, 'Trần Gia ', 'Huy', 'baospammer@gmail.com', 'md5(123)', '', 0),
(3, 'Mạch Hạo', 'Thành', 'thanh123@gmail.com', 'md5(111)', '', 0),
(4, 'Nguyễn Minh', 'Trí', 'tri123@gmail.com', 'md5(123)', '', 0),
(5, 'Nguyễn Hữu Minh', 'Khôi', 'khoi1@gmail.com', 'md5(123)', '4497-pepe.jpg', 0),
(6, 'Nguyễn Thanh', 'Huy', 'huy111@gmail.com', 'md5(123, \')', '17512-evernote.png', 0),
(7, 'Trần Minh', 'Tuấn', 'tuan123@gmail.com', 'md5(123)', '61536-ts.jpg', 0),
(8, 'Nguyễn Quang', 'Sơn', 'son123@gmail.com', 'md5 (123)', '27145-alphabot.png', 0),
(9, 'Phan Thanh', 'Duy', 'duy123@gmail.com', '202cb962ac59075b964b', '42101-afvs.jpg', 0);

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
  MODIFY `maTK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
