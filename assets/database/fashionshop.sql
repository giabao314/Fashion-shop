-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 08:27 AM
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
-- Table structure for table `anhsp`
--

CREATE TABLE `anhsp` (
  `idSP` int(11) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anhsp`
--

INSERT INTO `anhsp` (`idSP`, `url`) VALUES
(0, 'product-10.jpg'),
(1, 'product-6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `calamviec`
--

CREATE TABLE `calamviec` (
  `idCa` int(11) NOT NULL,
  `tenCa` varchar(50) NOT NULL,
  `gioBD` time NOT NULL,
  `gioKT` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cthoadon`
--

CREATE TABLE `cthoadon` (
  `idHD` int(11) NOT NULL,
  `idSP` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `donGia` int(11) NOT NULL,
  `thanhTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ctkhuyenmai`
--

CREATE TABLE `ctkhuyenmai` (
  `idKM` int(11) NOT NULL,
  `idKH` int(11) NOT NULL,
  `dieuKien` varchar(100) NOT NULL,
  `phanTramKM` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `idDM` int(11) NOT NULL,
  `tenDM` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `idHD` int(11) NOT NULL,
  `idKH` int(11) NOT NULL,
  `idNV` int(11) NOT NULL,
  `diaChiGiao` varchar(100) NOT NULL,
  `tenKHNhan` varchar(100) NOT NULL,
  `sdtKHNhan` varchar(50) NOT NULL,
  `idKM` int(11) NOT NULL,
  `tongTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `idKH` int(11) NOT NULL,
  `idTK` int(11) NOT NULL,
  `hoKH` varchar(100) NOT NULL,
  `tenKH` varchar(100) NOT NULL,
  `ngaySinh` date NOT NULL,
  `gioiTinh` varchar(50) NOT NULL,
  `sdt` varchar(50) NOT NULL,
  `idLoaiKH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `idKM` int(11) NOT NULL,
  `tenKM` varchar(100) NOT NULL,
  `ngayBD` date NOT NULL,
  `ngayKT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loaikh`
--

CREATE TABLE `loaikh` (
  `idLoaiKH` int(11) NOT NULL,
  `tenLoaiKH` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE `loaisp` (
  `idLoaiSP` int(11) NOT NULL,
  `tenLoaiSP` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`idLoaiSP`, `tenLoaiSP`) VALUES
(1, 'Áo'),
(2, 'Quần'),
(3, 'Phụ Kiện'),
(4, 'Khác');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idNV` int(11) NOT NULL,
  `idTK` int(11) NOT NULL,
  `hoNV` varchar(100) NOT NULL,
  `tenNV` varchar(100) NOT NULL,
  `ngaySinh` date NOT NULL,
  `gioiTinh` varchar(50) NOT NULL,
  `sdt` varchar(50) NOT NULL,
  `luong` int(11) NOT NULL,
  `idCa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE `quyen` (
  `idQuyen` int(11) NOT NULL,
  `tenQuyen` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quyendanhmuc`
--

CREATE TABLE `quyendanhmuc` (
  `idQuyen` int(11) NOT NULL,
  `idDM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `idSP` int(11) NOT NULL,
  `idLoaiSP` int(11) NOT NULL,
  `tenSP` varchar(100) NOT NULL,
  `slTonKho` int(11) NOT NULL,
  `donGia` int(11) NOT NULL,
  `anhSP` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`idSP`, `idLoaiSP`, `tenSP`, `slTonKho`, `donGia`, `anhSP`) VALUES
(1, 4, 'váy màu vàng tươi cùng họa tiết bông hoa đen', 10, 165, 'product-6.jpg'),
(2, 3, 'Túi đeo chéo hình hộp nhỏ màu đen', 20, 36, 'product-10.jpg'),
(3, 3, 'Giày mules da gót in họa tiết ngựa vằn đen', 20, 120, 'product-9.jpg'),
(5, 4, 'Váy Crepe in họa tiết Botanical', 30, 165, 'product-6-2.jpg'),
(6, 3, 'Túi đeo vai da cỡ trung bình Cece', 40, 358, 'product-8.jpg'),
(7, 3, 'giày Sandal da Cunningham', 50, 119, 'product-7.jpg'),
(8, 3, 'Giày Sandal họa tiết chuỗi vòng màu vàng', 40, 96, 'product-5-2.jpg'),
(9, 1, 'Áo khoác Moto thể thao', 40, 130, 'product-1.jpg'),
(10, 2, 'Quần Black Industry', 40, 350, 'product-11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `idTK` int(11) NOT NULL,
  `tenTK` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `idQuyen` int(11) DEFAULT NULL,
  `ava-Img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`idTK`, `tenTK`, `email`, `password`, `idQuyen`, `ava-Img`) VALUES
(24, '111', '111', '698d51a19d8a121ce581499d7b701668', 3, ''),
(36, '222', '222', 'bcbe3365e6ac95ea2c0343a2395834dd', 3, ''),
(37, '112', '112', '7f6ffaa6bb0b408017b62254211691b5', 3, ''),
(38, 'huy123', 'huytran123@gmail.com', '202cb962ac59075b964b07152d234b70', 3, ''),
(39, 'bao123', 'baotran123@gmail.com', '202cb962ac59075b964b07152d234b70', 3, ''),
(40, 'thanh123', 'thanhmach123@gmail.com', '202cb962ac59075b964b07152d234b70', 3, ''),
(41, 'truong123', 'truongtran123@gmail.com', '202cb962ac59075b964b07152d234b70', 3, ''),
(42, 'quang123', 'quangnguyen123@gmail.com', '202cb962ac59075b964b07152d234b70', 3, ''),
(43, 'trung123', 'trungphan123@gmail.com', '202cb962ac59075b964b07152d234b70', 3, ''),
(44, 'manh123', 'manh123@gmail.com', '202cb962ac59075b964b07152d234b70', 3, ''),
(45, 'vuong234', 'vuong123@gmail.com', '202cb962ac59075b964b07152d234b70', 3, ''),
(46, 'vinh123', 'vinhnguyen123@gmail.com', '202cb962ac59075b964b07152d234b70', 3, ''),
(47, 'giang123', 'giangtran123@gmail.com', '202cb962ac59075b964b07152d234b70', 3, ''),
(48, 'tuan123', 'tuantran123@gmail.com', '202cb962ac59075b964b07152d234b70', 3, ''),
(49, 'tu123', 'tutruong123@gmail.com', '202cb962ac59075b964b07152d234b70', 3, ''),
(50, 'chau123', 'chaunguyen123@gmail.com', '202cb962ac59075b964b07152d234b70', 3, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anhsp`
--
ALTER TABLE `anhsp`
  ADD PRIMARY KEY (`idSP`);

--
-- Indexes for table `calamviec`
--
ALTER TABLE `calamviec`
  ADD PRIMARY KEY (`idCa`);

--
-- Indexes for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`idHD`,`idSP`);

--
-- Indexes for table `ctkhuyenmai`
--
ALTER TABLE `ctkhuyenmai`
  ADD PRIMARY KEY (`idKM`,`idKH`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`idDM`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`idHD`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`idKH`),
  ADD UNIQUE KEY `idLoaiKH` (`idLoaiKH`),
  ADD UNIQUE KEY `idTK` (`idTK`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`idKM`);

--
-- Indexes for table `loaikh`
--
ALTER TABLE `loaikh`
  ADD PRIMARY KEY (`idLoaiKH`);

--
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`idLoaiSP`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idNV`),
  ADD UNIQUE KEY `idCa` (`idCa`),
  ADD UNIQUE KEY `idTK` (`idTK`);

--
-- Indexes for table `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`idQuyen`);

--
-- Indexes for table `quyendanhmuc`
--
ALTER TABLE `quyendanhmuc`
  ADD PRIMARY KEY (`idQuyen`,`idDM`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idSP`),
  ADD KEY `idLoaiSP` (`idLoaiSP`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`idTK`),
  ADD KEY `idQuyen` (`idQuyen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calamviec`
--
ALTER TABLE `calamviec`
  MODIFY `idCa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `idDM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `idHD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `idKH` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loaikh`
--
ALTER TABLE `loaikh`
  MODIFY `idLoaiKH` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `idLoaiSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `idNV` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quyen`
--
ALTER TABLE `quyen`
  MODIFY `idQuyen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `idTK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
