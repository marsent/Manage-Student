-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 20, 2020 at 08:32 AM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `bangdiemmon`
--

DROP TABLE IF EXISTS `bangdiemmon`;
CREATE TABLE IF NOT EXISTS `bangdiemmon` (
  `MaBangDiemMon` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaQTHoc` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaMonHoc` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `DiemTBMon` double NOT NULL,
  PRIMARY KEY (`MaBangDiemMon`),
  KEY `MaQTHoc` (`MaQTHoc`),
  KEY `FK_BDMMH` (`MaMonHoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

-- --------------------------------------------------------

--
-- Table structure for table `baocaotongkethocky`
--

DROP TABLE IF EXISTS `baocaotongkethocky`;
CREATE TABLE IF NOT EXISTS `baocaotongkethocky` (
  `MaHocKy` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaLop` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `SoLuongDat` int(11) NOT NULL,
  `TiLe` double NOT NULL,
  PRIMARY KEY (`MaHocKy`,`MaLop`),
  KEY `FK_BKTKHKLH` (`MaLop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

-- --------------------------------------------------------

--
-- Table structure for table `baocaotongketmon`
--

DROP TABLE IF EXISTS `baocaotongketmon`;
CREATE TABLE IF NOT EXISTS `baocaotongketmon` (
  `MaBCTKM` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaMonHoc` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaHocKy` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  PRIMARY KEY (`MaBCTKM`) USING BTREE,
  KEY `FK_BKTKMMH` (`MaMonHoc`),
  KEY `FK_BCTKMHK` (`MaHocKy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

-- --------------------------------------------------------

--
-- Table structure for table `chuongtrinhhoc`
--

DROP TABLE IF EXISTS `chuongtrinhhoc`;
CREATE TABLE IF NOT EXISTS `chuongtrinhhoc` (
  `MaKhoiLop` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaMonHoc` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `HeSo` int(11) NOT NULL,
  PRIMARY KEY (`MaKhoiLop`,`MaMonHoc`),
  KEY `FK_CTHMH` (`MaMonHoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

-- --------------------------------------------------------

--
-- Table structure for table `ct_bangdiemmon`
--

DROP TABLE IF EXISTS `ct_bangdiemmon`;
CREATE TABLE IF NOT EXISTS `ct_bangdiemmon` (
  `MaCT_BangDiemMon` mediumint(11) NOT NULL AUTO_INCREMENT,
  `MaBangDiemMon` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaLHKT` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `Diem` double NOT NULL,
  PRIMARY KEY (`MaCT_BangDiemMon`),
  KEY `FK_CTBDMBDM` (`MaBangDiemMon`),
  KEY `FK_CTBDMLHKT` (`MaLHKT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

-- --------------------------------------------------------

--
-- Table structure for table `ct_bctkm`
--

DROP TABLE IF EXISTS `ct_bctkm`;
CREATE TABLE IF NOT EXISTS `ct_bctkm` (
  `MaBCTKM` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaLop` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `SoLuongDat` int(11) NOT NULL,
  `TiLe` double NOT NULL,
  PRIMARY KEY (`MaBCTKM`,`MaLop`) USING BTREE,
  KEY `FK_CTTKMLH` (`MaLop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

-- --------------------------------------------------------

--
-- Table structure for table `hocky`
--

DROP TABLE IF EXISTS `hocky`;
CREATE TABLE IF NOT EXISTS `hocky` (
  `MaHocKy` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `HocKy` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaNam` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  PRIMARY KEY (`MaHocKy`),
  KEY `FK_HKNH` (`MaNam`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

--
-- Dumping data for table `hocky`
--

INSERT INTO `hocky` (`MaHocKy`, `HocKy`, `MaNam`) VALUES
('HK1N1011', 'Hoc Kỳ 1', 'N1011'),
('HK1N1112', 'Hoc Kỳ 1', 'N1112'),
('HK1N1213', 'Hoc Kỳ 1', 'N1213'),
('HK1N1314', 'Hoc Kỳ 1', 'N1314'),
('HK1N1415', 'Hoc Kỳ 1', 'N1415'),
('HK1N1516', 'Hoc Kỳ 1', 'N1516'),
('HK1N1617', 'Hoc Kỳ 1', 'N1617'),
('HK1N1718', 'Hoc Kỳ 1', 'N1718'),
('HK1N1819', 'Hoc Kỳ 1', 'N1819'),
('HK1N1920', 'Hoc Kỳ 1', 'N1920'),
('HK1N2021', 'Hoc Kỳ 1', 'N2021'),
('HK1N2122', 'Hoc Kỳ 1', 'N2122'),
('HK2N1011', 'Hoc Kỳ 2', 'N1011'),
('HK2N1112', 'Hoc Kỳ 2', 'N1112'),
('HK2N1213', 'Hoc Kỳ 2', 'N1213'),
('HK2N1314', 'Hoc Kỳ 2', 'N1314'),
('HK2N1415', 'Hoc Kỳ 2', 'N1415'),
('HK2N1516', 'Hoc Kỳ 2', 'N1516'),
('HK2N1617', 'Hoc Kỳ 2', 'N1617'),
('HK2N1718', 'Hoc Kỳ 2', 'N1718'),
('HK2N1819', 'Hoc Kỳ 2', 'N1819'),
('HK2N1920', 'Hoc Kỳ 2', 'N1920'),
('HK2N2021', 'Hoc Kỳ 2', 'N2021'),
('HK2N2122', 'Hoc Kỳ 2', 'N2122');

-- --------------------------------------------------------

--
-- Table structure for table `hocsinh`
--

DROP TABLE IF EXISTS `hocsinh`;
CREATE TABLE IF NOT EXISTS `hocsinh` (
  `MaHocSinh` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `HoTen` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `GioiTinh` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `DiaChi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  PRIMARY KEY (`MaHocSinh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

--
-- Dumping data for table `hocsinh`
--

INSERT INTO `hocsinh` (`MaHocSinh`, `HoTen`, `GioiTinh`, `NgaySinh`, `DiaChi`, `Email`) VALUES
('HS1', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com'),
('HS10', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com'),
('HS11', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com'),
('HS12', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com'),
('HS13', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com'),
('HS14', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com'),
('HS15', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com'),
('HS16', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com'),
('HS17', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com'),
('HS18', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com'),
('HS19', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com'),
('HS2', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com'),
('HS20', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com'),
('HS21', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com'),
('HS22', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com'),
('HS23', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com'),
('HS24', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com'),
('HS25', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com'),
('HS26', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com'),
('HS27', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com'),
('HS28', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com'),
('HS29', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com'),
('HS3', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com'),
('HS4', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com'),
('HS5', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com'),
('HS6', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com'),
('HS7', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com'),
('HS8', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com'),
('HS9', 'Đào Tuấn Anh', 'Nam', '2000-02-19', 'Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh', 'tuananh8423@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `khoilop`
--

DROP TABLE IF EXISTS `khoilop`;
CREATE TABLE IF NOT EXISTS `khoilop` (
  `MaKhoiLop` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaNam` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `TenKhoiLop` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `Ban` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `SoLop` int(11) NOT NULL,
  PRIMARY KEY (`MaKhoiLop`),
  KEY `FK_KLNH` (`MaNam`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

--
-- Dumping data for table `khoilop`
--

INSERT INTO `khoilop` (`MaKhoiLop`, `MaNam`, `TenKhoiLop`, `Ban`, `SoLop`) VALUES
('K10N1516', 'N1516', 'Khối 10', 'A', 10),
('K10N1617', 'N1617', 'Khối 10', 'A', 10),
('K11N1516', 'N1516', 'Khối 11', 'A', 10),
('K11N1617', 'N1617', 'Khối 11', 'A', 10),
('K12N1516', 'N1516', 'Khối 12', 'A', 10),
('K12N1617', 'N1617', 'Khối 12', 'A', 10);

-- --------------------------------------------------------

--
-- Table structure for table `loaihinhkiemtra`
--

DROP TABLE IF EXISTS `loaihinhkiemtra`;
CREATE TABLE IF NOT EXISTS `loaihinhkiemtra` (
  `MaLHKT` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `TenLHKT` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `HeSo` int(11) NOT NULL,
  PRIMARY KEY (`MaLHKT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

DROP TABLE IF EXISTS `lop`;
CREATE TABLE IF NOT EXISTS `lop` (
  `MaLop` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `TenLop` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaKhoiLop` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `SiSo` int(11) NOT NULL,
  PRIMARY KEY (`MaLop`),
  KEY `FK_LOPKL` (`MaKhoiLop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`MaLop`, `TenLop`, `MaKhoiLop`, `SiSo`) VALUES
('10A1N1516', 'Lớp 10A1', 'K10N1516', 0),
('11A1N1516', 'Lớp 11A1', 'K10N1516', 0),
('12A1N1516', 'Lớp 12A1', 'K10N1516', 0);

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

DROP TABLE IF EXISTS `monhoc`;
CREATE TABLE IF NOT EXISTS `monhoc` (
  `MaMonHoc` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `TenMonHoc` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  PRIMARY KEY (`MaMonHoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`MaMonHoc`, `TenMonHoc`) VALUES
('DD', 'Đạo Đức'),
('DL', 'Địa Lí'),
('HH', 'Hóa Học'),
('LS', 'Lịch Sử'),
('NV', 'Ngữ Văn'),
('SH', 'Sinh Học'),
('T', 'Toán'),
('TD', 'Thể Dục'),
('VL', 'Vật Lý');

-- --------------------------------------------------------

--
-- Table structure for table `namhoc`
--

DROP TABLE IF EXISTS `namhoc`;
CREATE TABLE IF NOT EXISTS `namhoc` (
  `MaNam` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `NamHoc` varchar(20) COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  PRIMARY KEY (`MaNam`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

--
-- Dumping data for table `namhoc`
--

INSERT INTO `namhoc` (`MaNam`, `NamHoc`) VALUES
('N1011', '2010-2011'),
('N1112', '2011-2012'),
('N1213', '2012-2013'),
('N1314', '2013-2014'),
('N1415', '2014-2015'),
('N1516', '2015-2016'),
('N1617', '2016-2017'),
('N1718', '2017-2018'),
('N1819', '2018-2019'),
('N1920', '2019-2020'),
('N2021', '2020-2021'),
('N2122', '2021-2022');

-- --------------------------------------------------------

--
-- Table structure for table `quatrinhhoc`
--

DROP TABLE IF EXISTS `quatrinhhoc`;
CREATE TABLE IF NOT EXISTS `quatrinhhoc` (
  `MaQTHoc` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaHocSinh` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaLop` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaHocKy` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `DiemTBHK` double NOT NULL,
  PRIMARY KEY (`MaQTHoc`),
  KEY `FK_QTHHS` (`MaHocSinh`),
  KEY `FK_QTHLOP` (`MaLop`),
  KEY `FK_QTHHK` (`MaHocKy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

-- --------------------------------------------------------

--
-- Table structure for table `thongso`
--

DROP TABLE IF EXISTS `thongso`;
CREATE TABLE IF NOT EXISTS `thongso` (
  `MaThongSo` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `TenThongSo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `GiaTri` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bangdiemmon`
--
ALTER TABLE `bangdiemmon`
  ADD CONSTRAINT `FK_BDMMH` FOREIGN KEY (`MaMonHoc`) REFERENCES `monhoc` (`MaMonHoc`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_BDMQTH` FOREIGN KEY (`MaQTHoc`) REFERENCES `quatrinhhoc` (`MaQTHoc`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `baocaotongkethocky`
--
ALTER TABLE `baocaotongkethocky`
  ADD CONSTRAINT `FK_BKTKHKHK` FOREIGN KEY (`MaHocKy`) REFERENCES `hocky` (`MaHocKy`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_BKTKHKLH` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `baocaotongketmon`
--
ALTER TABLE `baocaotongketmon`
  ADD CONSTRAINT `FK_BCTKMHK` FOREIGN KEY (`MaHocKy`) REFERENCES `hocky` (`MaHocKy`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_BCTKMMH` FOREIGN KEY (`MaMonHoc`) REFERENCES `monhoc` (`MaMonHoc`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `chuongtrinhhoc`
--
ALTER TABLE `chuongtrinhhoc`
  ADD CONSTRAINT `FK_CTHKL` FOREIGN KEY (`MaKhoiLop`) REFERENCES `khoilop` (`MaKhoiLop`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_CTHMH` FOREIGN KEY (`MaMonHoc`) REFERENCES `monhoc` (`MaMonHoc`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `ct_bangdiemmon`
--
ALTER TABLE `ct_bangdiemmon`
  ADD CONSTRAINT `FK_CTBDMBDM` FOREIGN KEY (`MaBangDiemMon`) REFERENCES `bangdiemmon` (`MaBangDiemMon`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_CTBDMLHKT` FOREIGN KEY (`MaLHKT`) REFERENCES `loaihinhkiemtra` (`MaLHKT`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `ct_bctkm`
--
ALTER TABLE `ct_bctkm`
  ADD CONSTRAINT `FK_CTTKMBCTKM` FOREIGN KEY (`MaBCTKM`) REFERENCES `baocaotongketmon` (`MaBCTKM`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_CTTKMLH` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `hocky`
--
ALTER TABLE `hocky`
  ADD CONSTRAINT `FK_HKNH` FOREIGN KEY (`MaNam`) REFERENCES `namhoc` (`MaNam`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `khoilop`
--
ALTER TABLE `khoilop`
  ADD CONSTRAINT `FK_KLNH` FOREIGN KEY (`MaNam`) REFERENCES `namhoc` (`MaNam`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `FK_LOPKL` FOREIGN KEY (`MaKhoiLop`) REFERENCES `khoilop` (`MaKhoiLop`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `quatrinhhoc`
--
ALTER TABLE `quatrinhhoc`
  ADD CONSTRAINT `FK_QTHHK` FOREIGN KEY (`MaHocKy`) REFERENCES `hocky` (`MaHocKy`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_QTHHS` FOREIGN KEY (`MaHocSinh`) REFERENCES `hocsinh` (`MaHocSinh`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
