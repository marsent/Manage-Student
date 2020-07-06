-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 05, 2020 at 12:16 AM
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
  `MaBangDiemMon` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaQTHoc` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaMonHoc` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `KiemTra15pl1` double DEFAULT NULL,
  `KiemTra15pl2` double DEFAULT NULL,
  `KiemTra15pl3` double DEFAULT NULL,
  `KiemTra1tl1` double DEFAULT NULL,
  `KiemTra1tl2` double DEFAULT NULL,
  `ThiHocKy` double DEFAULT NULL,
  `DiemTBMon` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`MaBangDiemMon`),
  KEY `MaQTHoc` (`MaQTHoc`),
  KEY `FK_BDMMH` (`MaMonHoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bangdiemmon`
--

INSERT INTO `bangdiemmon` (`MaBangDiemMon`, `MaQTHoc`, `MaMonHoc`, `KiemTra15pl1`, `KiemTra15pl2`, `KiemTra15pl3`, `KiemTra1tl1`, `KiemTra1tl2`, `ThiHocKy`, `DiemTBMon`) VALUES


-- --------------------------------------------------------

--
-- Table structure for table `baocaothongkemon`
--

DROP TABLE IF EXISTS `baocaothongkemon`;
CREATE TABLE IF NOT EXISTS `baocaothongkemon` (
  `MaBCTKM` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaMonHoc` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaHocKy` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`MaBCTKM`) USING BTREE,
  KEY `FK_BKTKMMH` (`MaMonHoc`),
  KEY `FK_BCTKMHK` (`MaHocKy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `baocaothongkemon`
--

INSERT INTO `baocaothongkemon` (`MaBCTKM`, `MaMonHoc`, `MaHocKy`) VALUES


-- --------------------------------------------------------

--
-- Table structure for table `baocaotongkethocky`
--

DROP TABLE IF EXISTS `baocaotongkethocky`;
CREATE TABLE IF NOT EXISTS `baocaotongkethocky` (
  `MaHocKy` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaLop` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `SoLuongDat` int(11) NOT NULL,
  `TiLe` double NOT NULL,
  PRIMARY KEY (`MaHocKy`,`MaLop`),
  KEY `FK_BKTKHKLH` (`MaLop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `baocaotongkethocky`
--

INSERT INTO `baocaotongkethocky` (`MaHocKy`, `MaLop`, `SoLuongDat`, `TiLe`) VALUES


-- --------------------------------------------------------

--
-- Table structure for table `chuongtrinhhoc`
--

DROP TABLE IF EXISTS `chuongtrinhhoc`;
CREATE TABLE IF NOT EXISTS `chuongtrinhhoc` (
  `MaKhoiLop` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaMonHoc` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `HeSo` int(11) NOT NULL,
  PRIMARY KEY (`MaKhoiLop`,`MaMonHoc`),
  KEY `FK_CTHMH` (`MaMonHoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chuongtrinhhoc`
--

INSERT INTO `chuongtrinhhoc` (`MaKhoiLop`, `MaMonHoc`, `HeSo`) VALUES


-- --------------------------------------------------------

--
-- Table structure for table `ct_bangdiemmon`
--

DROP TABLE IF EXISTS `ct_bangdiemmon`;
CREATE TABLE IF NOT EXISTS `ct_bangdiemmon` (
  `MaCT_BangDiemMon` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaBangDiemMon` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaLHKT` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Diem` double NOT NULL,
  PRIMARY KEY (`MaCT_BangDiemMon`),
  KEY `FK_CTBDMBDM` (`MaBangDiemMon`),
  KEY `FK_CTBDMLHKT` (`MaLHKT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ct_bctkm`
--

DROP TABLE IF EXISTS `ct_bctkm`;
CREATE TABLE IF NOT EXISTS `ct_bctkm` (
  `MaBCTKM` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaLop` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `SoLuongDat` int(11) NOT NULL,
  `TiLe` double NOT NULL,
  PRIMARY KEY (`MaBCTKM`,`MaLop`) USING BTREE,
  KEY `FK_CTTKMLH` (`MaLop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ct_bctkm`
--

INSERT INTO `ct_bctkm` (`MaBCTKM`, `MaLop`, `SoLuongDat`, `TiLe`) VALUES


-- --------------------------------------------------------

--
-- Table structure for table `hocky`
--

DROP TABLE IF EXISTS `hocky`;
CREATE TABLE IF NOT EXISTS `hocky` (
  `MaHocKy` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `HocKy` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaNam` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`MaHocKy`),
  KEY `FK_HKNH` (`MaNam`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hocky`
--

INSERT INTO `hocky` (`MaHocKy`, `HocKy`, `MaNam`) VALUES
('HK1N1920', 'Hoc Kỳ 1', 'N1920'),
('HK1N2021', 'Hoc Kỳ 1', 'N2021'),
('HK1N2122', 'Hoc Kỳ 1', 'N2122'),
('HK2N1920', 'Hoc Kỳ 2', 'N1920'),
('HK2N2021', 'Hoc Kỳ 2', 'N2021'),
('HK2N2122', 'Hoc Kỳ 2', 'N2122');

-- --------------------------------------------------------

--
-- Table structure for table `hocsinh`
--

DROP TABLE IF EXISTS `hocsinh`;
CREATE TABLE IF NOT EXISTS `hocsinh` (
  `MaHocSinh` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `HoTen` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `GioiTinh` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `DiaChi` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`MaHocSinh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hocsinh`
--

INSERT INTO `hocsinh` (`MaHocSinh`, `HoTen`, `GioiTinh`, `NgaySinh`, `DiaChi`, `Email`) VALUES


-- --------------------------------------------------------

--
-- Table structure for table `khoilop`
--

DROP TABLE IF EXISTS `khoilop`;
CREATE TABLE IF NOT EXISTS `khoilop` (
  `MaKhoiLop` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaNam` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `TenKhoiLop` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Ban` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `SoLop` int(11) NOT NULL,
  PRIMARY KEY (`MaKhoiLop`),
  KEY `FK_KLNH` (`MaNam`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khoilop`
--

INSERT INTO `khoilop` (`MaKhoiLop`, `MaNam`, `TenKhoiLop`, `Ban`, `SoLop`) VALUES
('K10N1920', 'N1920', 'Khối 10', 'A', 10),
('K11N1920', 'N1920', 'Khối 11', 'A', 10),
('K12N1920', 'N1920', 'Khối 12', 'A', 10);

-- --------------------------------------------------------

--
-- Table structure for table `loaihinhkiemtra`
--

DROP TABLE IF EXISTS `loaihinhkiemtra`;
CREATE TABLE IF NOT EXISTS `loaihinhkiemtra` (
  `MaLHKT` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `TenLHKT` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `HeSo` int(11) NOT NULL,
  PRIMARY KEY (`MaLHKT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

DROP TABLE IF EXISTS `lop`;
CREATE TABLE IF NOT EXISTS `lop` (
  `MaLop` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `TenLop` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaKhoiLop` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `SiSo` int(11) NOT NULL,
  PRIMARY KEY (`MaLop`),
  KEY `FK_LOPKL` (`MaKhoiLop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`MaLop`, `TenLop`, `MaKhoiLop`, `SiSo`) VALUES
('10A1N1920', '10A1', 'K10N1920', 4),
('10A3N1920', '10A3', 'K10N1920', 7),
('10A4N1920', '10A4', 'K10N1920', 0),
('10A5N1920', '10A5', 'K10N1920', 0),
('11A1N1920', '11A1', 'K11N1920', 13),
('12A1N1920', '12A1', 'K12N1920', 10);

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

DROP TABLE IF EXISTS `monhoc`;
CREATE TABLE IF NOT EXISTS `monhoc` (
  `MaMonHoc` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `TenMonHoc` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`MaMonHoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `MaNam` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `NamHoc` varchar(20) NOT NULL,
  PRIMARY KEY (`MaNam`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `namhoc`
--

INSERT INTO `namhoc` (`MaNam`, `NamHoc`) VALUES
('N1920', '2019-2020'),
('N2021', '2020-2021'),
('N2122', '2021-2022');

-- --------------------------------------------------------

--
-- Table structure for table `quatrinhhoc`
--

DROP TABLE IF EXISTS `quatrinhhoc`;
CREATE TABLE IF NOT EXISTS `quatrinhhoc` (
  `MaQTHoc` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaHocSinh` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaLop` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaHocKy` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DiemTBHK` double NOT NULL,
  PRIMARY KEY (`MaQTHoc`),
  KEY `FK_QTHHS` (`MaHocSinh`),
  KEY `FK_QTHLOP` (`MaLop`),
  KEY `FK_QTHHK` (`MaHocKy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quatrinhhoc`
--

INSERT INTO `quatrinhhoc` (`MaQTHoc`, `MaHocSinh`, `MaLop`, `MaHocKy`, `DiemTBHK`) VALUES


--
-- Triggers `quatrinhhoc`
--
DROP TRIGGER IF EXISTS `caculate_siso`;
DELIMITER $$
CREATE TRIGGER `caculate_siso` AFTER INSERT ON `quatrinhhoc` FOR EACH ROW BEGIN
declare siso int;
set @siso:=(select count(distinct mahocsinh)from quatrinhhoc where malop=new.malop);
UPDATE lop 
SET 
    siso = @siso
WHERE
    malop = new.malop;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `thongso`
--

DROP TABLE IF EXISTS `thongso`;
CREATE TABLE IF NOT EXISTS `thongso` (
  `MaThongSo` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `TenThongSo` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `GiaTri` double NOT NULL,
  PRIMARY KEY (`MaThongSo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thongso`
--

INSERT INTO `thongso` (`MaThongSo`, `TenThongSo`, `GiaTri`) VALUES
('DD', 'Điểm đạt', 5),
('DDM', 'Điểm đạt môn', 5),
('SLTDK10', 'Số lớp tối đa khối 10', 10),
('SLTDK11', 'Số lớp tối đa khối 11', 10),
('SLTDK12', 'Số lớp tối đa khối 12', 10),
('SSTD', 'Sỉ số tối đa mỗi lớp', 16),
('TTD', 'Tuổi tối đa', 20),
('TTT', 'Tuổi tối thiểu', 15);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bangdiemmon`
--
ALTER TABLE `bangdiemmon`
  ADD CONSTRAINT `FK_BDMMH` FOREIGN KEY (`MaMonHoc`) REFERENCES `monhoc` (`MaMonHoc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_BDMQTH` FOREIGN KEY (`MaQTHoc`) REFERENCES `quatrinhhoc` (`MaQTHoc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `baocaothongkemon`
--
ALTER TABLE `baocaothongkemon`
  ADD CONSTRAINT `FK_BCTKMHK` FOREIGN KEY (`MaHocKy`) REFERENCES `hocky` (`MaHocKy`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_BCTKMMH` FOREIGN KEY (`MaMonHoc`) REFERENCES `monhoc` (`MaMonHoc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `baocaotongkethocky`
--
ALTER TABLE `baocaotongkethocky`
  ADD CONSTRAINT `FK_BKTKHKHK` FOREIGN KEY (`MaHocKy`) REFERENCES `hocky` (`MaHocKy`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_BKTKHKLH` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chuongtrinhhoc`
--
ALTER TABLE `chuongtrinhhoc`
  ADD CONSTRAINT `FK_CTHKL` FOREIGN KEY (`MaKhoiLop`) REFERENCES `khoilop` (`MaKhoiLop`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CTHMH` FOREIGN KEY (`MaMonHoc`) REFERENCES `monhoc` (`MaMonHoc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ct_bangdiemmon`
--
ALTER TABLE `ct_bangdiemmon`
  ADD CONSTRAINT `FK_CTBDMBDM` FOREIGN KEY (`MaBangDiemMon`) REFERENCES `bangdiemmon` (`MaBangDiemMon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CTBDMLHKT` FOREIGN KEY (`MaLHKT`) REFERENCES `loaihinhkiemtra` (`MaLHKT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ct_bctkm`
--
ALTER TABLE `ct_bctkm`
  ADD CONSTRAINT `FK_CTTKMBCTKM` FOREIGN KEY (`MaBCTKM`) REFERENCES `baocaothongkemon` (`MaBCTKM`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CTTKMLH` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hocky`
--
ALTER TABLE `hocky`
  ADD CONSTRAINT `FK_HKNH` FOREIGN KEY (`MaNam`) REFERENCES `namhoc` (`MaNam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `khoilop`
--
ALTER TABLE `khoilop`
  ADD CONSTRAINT `FK_KLNH` FOREIGN KEY (`MaNam`) REFERENCES `namhoc` (`MaNam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `FK_LOPKL` FOREIGN KEY (`MaKhoiLop`) REFERENCES `khoilop` (`MaKhoiLop`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quatrinhhoc`
--
ALTER TABLE `quatrinhhoc`
  ADD CONSTRAINT `FK_QTHHK` FOREIGN KEY (`MaHocKy`) REFERENCES `hocky` (`MaHocKy`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_QTHHS` FOREIGN KEY (`MaHocSinh`) REFERENCES `hocsinh` (`MaHocSinh`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
